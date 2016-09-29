<?php

namespace OC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/* Pour générer une URL absolue */
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;


class CoreController extends Controller
{
	public function indexAction()
	{
		return $this->render('OCCoreBundle:Core:index.html.twig');
	}

	public function contactAction(Request $request)
	{
		$session = $request->getSession();    
	    // Bien sûr, cette méthode devra réellement ajouter l'annonce
	    
	    // Mais faisons comme si c'était le cas
	    $session->getFlashBag()->add("info", "La page de contact n'est pas encore disponible, merci de revenir plus tard.");

	    // Puis on redirige vers la page de visualisation de cette annonce
	    return $this->redirectToRoute('oc_core_home');
	}
}