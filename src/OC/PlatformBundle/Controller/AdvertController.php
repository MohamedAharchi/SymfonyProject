<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;

use OC\PlatformBundle\Entity\Advert;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AdvertController extends Controller
{
  public function purgeAdvertAction($days, Request $request)
  {
    $purger = $this->get('oc_platform.purger.advert');
    $purger->purge($days);

    $request->getSession()->getFlashBag()->add('info', 'Les annonces sans candidatures datant de plus de '.$days.' jours ont bien été supprimées.');
    return $this->redirectToRoute('oc_platform_home', array('page' => 1));
  }

  public function indexAction($page)
  {
    if ($page < 1) {
      throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
    }

    // Ici je fixe le nombre d'annonces par page à 3
    // Mais bien sûr il faudrait utiliser un paramètre, et y accéder via $this->container->getParameter('nb_per_page')
    $nbPerPage = 3;

    // On récupère notre objet Paginator
    $listAdverts = $this->getDoctrine()
      ->getManager()
      ->getRepository('OCPlatformBundle:Advert')
      ->getAdverts($page, $nbPerPage)
    ;

    // On calcule le nombre total de pages grâce au count($listAdverts) qui retourne le nombre total d'annonces
    $nbPages = ceil(count($listAdverts) / $nbPerPage);

    // Si la page n'existe pas, on retourne une 404
    if ($page > $nbPages) {
      throw $this->createNotFoundException("La page ".$page." n'existe pas.");
    }

    // On donne toutes les informations nécessaires à la vue
    return $this->render('OCPlatformBundle:Advert:index.html.twig', array(
      'listAdverts' => $listAdverts,
      'nbPages'     => $nbPages,
      'page'        => $page,
    ));
  }

  public function viewAction($id)
  {
    $em = $this->getDoctrine()->getManager();

    // Pour récupérer une seule annonce, on utilise la méthode find($id)
    $advert = $em->getRepository('OCPlatformBundle:Advert')->find($id);

    // $advert est donc une instance de OC\PlatformBundle\Entity\Advert
    // ou null si l'id $id n'existe pas, d'où ce if :
    if (null === $advert) {
      throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
    }

    // Récupération de la liste des candidatures de l'annonce
    $listApplications = $em
      ->getRepository('OCPlatformBundle:Application')
      ->findBy(array('advert' => $advert))
    ;

    // Récupération des AdvertSkill de l'annonce
    $listAdvertSkills = $em
      ->getRepository('OCPlatformBundle:AdvertSkill')
      ->findBy(array('advert' => $advert))
    ;

    return $this->render('OCPlatformBundle:Advert:view.html.twig', array(
      'advert'           => $advert,
      'listApplications' => $listApplications,
      'listAdvertSkills' => $listAdvertSkills,
    ));
  }

  public function addAction(Request $request)
  {    
    $advert = new Advert();

    $form = $this->get('form.factory')->create(AdvertType::class, $advert);

    if($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      
        $em = $this->getDoctrine()->getManager();
        $em->persist($advert);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

        return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));
    }

    return $this->render('OCPlatformBundle:Advert:add.html.twig', array(
       'form' => $form->createView(),
    ));
  }

  public function editAction($id, Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $advert = $em->getRepository('OCPlatformBundle:Advert')->find($id);

    $form = $this->get('form.factory')->create(AdvertEditType::class, $advert);

    if($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      
        $em->persist($advert);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');

        return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));
    }

    return $this->render('OCPlatformBundle:Advert:edit.html.twig', array(
       'advert' => $advert,
       'form' => $form->createView(),
    ));
  }

  public function deleteAction($id)
  {
    $em = $this->getDoctrine()->getManager();

    $advert = $em->getRepository('OCPlatformBundle:Advert')->find($id);

    if (null === $advert) {
      throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
    }

    // On boucle sur les catégories de l'annonce pour les supprimer
    foreach ($advert->getCategories() as $category) {
      $advert->removeCategory($category);
    }

    $em->flush();
    
    return $this->render('OCPlatformBundle:Advert:delete.html.twig');
  }

  public function menuAction($limit)
  {
    $em = $this->getDoctrine()->getManager();

    $listAdverts = $em->getRepository('OCPlatformBundle:Advert')->findBy(
      array(),                 // Pas de critère
      array('date' => 'desc'), // On trie par date décroissante
      $limit,                  // On sélectionne $limit annonces
      0                        // À partir du premier
    );

    return $this->render('OCPlatformBundle:Advert:menu.html.twig', array(
      'listAdverts' => $listAdverts
    ));
  }
}
