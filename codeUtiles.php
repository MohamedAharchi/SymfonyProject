<?php 
/*
**************************** Code Utile *******************************
*/


/***************** RECUPERER LES PARAMETRES D'UNE URL ***********************/
// On récupère tous les paramètres en arguments de la méthode
/* Page controlleur */
public function viewSlugAction($slug, $year, $_format)
{
    return new Response(
        "On pourrait afficher l'annonce correspondant au
        slug '".$slug."', créée en ".$year." et au format ".$format."."
    );
}

/* Page routing.yml */
oc_platform_view_slug:
    path:      /{year}/{slug}.{_format}
    defaults:
        _controller: OCPlatformBundle:Advert:viewSlug
        format:      html
    requirements:
        year:    \d{4}
        format:  html|xml


/***************** GENERER DES URL ***********************/
/* Méthode pour générer une URL depuis les informations du router */
public function indexAction()
{
    // On veut avoir l'URL de l'annonce d'id 5.
    $url = $this->get('router')->generate(
        'oc_platform_view', // 1er argument : le nom de la route
        array('id' => 5)    // 2e argument : les valeurs des paramètres
    );
    // $url vaut « /platform/advert/5 »


    // Pour générer une URL absolue
    //$url = $this->get('router')->generate('oc_platform_home', array(), UrlGeneratorInterface::ABSOLUTE_URL);
    
    return new Response("L'URL de l'annonce d'id 5 est : ".$url);
}
/**** Générer depuis un CONTROLEUR ****/

// Méthode longue
$url = $this->get('router')->generate('oc_platform_home');

// Méthode courte
$url = $this->generateUrl('oc_platform_home');
/**** Fin méthode CONTROLEUR ****/
?>
<!-- Générer dans une VUE TWIG, en considérant bien sûr
   que la variable advert_id est disponible -->
<a href="{{ path('oc_platform_view', { 'id': advert_id }) }}">
    Lien vers l'annonce d'id {{ advert_id }}
</a>
<!-- Générer une URL absolue dans une VUE TWIG, suffit de remplacer "path" par "url" en considérant bien sûr
   que la variable advert_id est disponible -->
<a href="{{ url('oc_platform_view', { 'id': advert_id }) }}">
    Lien vers l'annonce d'id {{ advert_id }}
</a>
<?php
/***************** FIN RECUPERATION DES PARAMETRES D'UNE URL ***********************/



/********* LES METHODES DE L'OBJET Request *******/
use Symfony\Component\HttpFoundation\Request;
/* Récupérer la méthode de la requête HTTP pour savoir si c'est POST, GET ou autre */
if ($request->isMethod('POST'))
{
  // Un formulaire a été envoyé, on peut le traiter ici
}

/* Savoir si la requête est une requête AJAX */
if ($request->isXmlHttpRequest())
{
  // C'est une requête AJAX, retournons du JSON, par exemple
}

// Le reste disponible sur ce lien : http://api.symfony.com/3.0/Symfony/Component/HttpFoundation/Request.html

/* Décomposition de la construction d'un objetResponse */
// Côté Controlleur 
public function viewAction($id)
{       
    // On modifie viewAction, car elle existe déjà
    
    // On crée la réponse sans lui donner de contenu pour le moment
    $response = new Response();

    // On définit le contenu
    $response->setContent("Ceci est une page d'erreur 404");

    // On définit le code HTTP à " Not Found " (erreur 404)
    $response->setStatusCode(Response::HTTP_NOT_FOUND);

    // On retourne la réponse 
    return $response;
}
/********* FIN DES METHODES DE L'OBJET Request *******/
/********* LES METHODES DE L'OBJET REDIRECT *********/
use Symfony\Component\HttpFoundation\RedirectResponse;
/* Méthode longue */
$url = $this->get('router')->generate('oc_platform_home');    
return new RedirectResponse($url);

/* Méthode courte */
return $this->redirectToRoute('oc_platform_home');
/********* FIN METHODES DE L'OBJET REDIRECT *********/

/********* LES METHODES D'AFFICHAGE EN JSON *********/
use Symfony\Component\HttpFoundation\JsonResponse;
/* Méthode longue */
// Créons nous-mêmes la répons en JSON, grâce à la fonction json_encode()
$response = new Response(json_encode(array('id' => $id)));
// Ici, nous définissns le Content-type pour dire au navigateur
// que l'on renvoie du JSON et non du HTML
$response->headers->set('Content-type', 'application/json');
return $response;

/* Méthode courte */
return new JsonResponse(array('id' => $id));
/********* FIN METHODES D'AFFICHAGE EN JSON *********/

/********* LES METHODES DE SESSIONS *********/
// Récupération de la session
$session = $request->getSession();

// On récupère le contenu de la variable user_id
$userId = $session->get('user_id');

// On définit une nouvelle valeur pour cette variable user_id
$session->set('user_id', 91);

// On oublie pas de renvoyer une réponse
return new Response("<body>Je suis une page de test, je n'ai rien à dire</body>");
/* 
Pour connaître les variables de la session courante, allez dans le Profiler (la barre d'outils en bas), rubriqueRequest, 
puis descendez tout en bas au paragraphe « Session Attributes ». 
Très utile pour savoir si vous avez bien les variables de session que vous attendez. 
*/

/************* LES COMMANDES EXCEPTIONS ******************/
public function indexAction($page)
{
    // On ne sait pas combien de pages il y a
    // Mais on sait qu'une page doit être supérieure ou égale à 1
    if ($page < 1) {
      // On déclenche une exception NotFoundHttpException, cela va afficher
      // une page d'erreur 404 (qu'on pourra personnaliser plus tard d'ailleurs)
      throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
    }

    // Ici, on récupérera la liste des annonces, puis on la passera au template

    // Mais pour l'instant, on ne fait qu'appeler le template
    return $this->render('OCPlatformBundle:Advert:index.html.twig');
}
/************* FIN DES COMMANDES EXCEPTIONS ******************/

/************** LES COMMANDES TWIG ***************/
// Documentation général de  TWIG disponible au lien suivant : http://twig.sensiolabs.org/documentation
// Documentation des filtres TWIG disponible au lien suivant : http://twig.sensiolabs.org/doc/filters/index.html
// Documentation des tests à TWIG disponible au lien suivant : http://twig.sensiolabs.org/doc/tests/index.html


/************* COMPOSER ***************/
// Lien direct : https://getcomposer.org/
// Utilisation de Composer sur notre projet : https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony/installer-un-bundle-grace-a-composer-2 
/*********** FIN COMPOSER *************/

/************ LES SERVICES ***********/
// Liste des services disponible : php bin/console debug:container
/* Utiliser un service dans le controlleur */
// Sur le cas des contrôleurs, le container est disponible dans l'attribut $container
public function indexAction()
{
    $mailer = $this->container->get('mailer');
}


/************** Doctrine ORM (Object Relation Mapping) *************/
// Documentation officiel sur le lien suivant : http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/basic-mapping.html
// Autre doc : http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/index.html
// Documentation Doctrine pour gérer plusieurs base de données dans un seul projet : https://symfony.com/fr/doc/current/cookbook/doctrine/multiple_entity_managers.html
// Documentation officiel de l'Entity Manager : http://www.doctrine-project.org/api/orm/2.5/class-Doctrine.ORM.EntityManager.html
// Documentation Bundle Symfony Doctrine Fixtures Bundle : https://symfony.com/fr/doc/current/bundles/DoctrineFixturesBundle/index.html

// Pour récupérer une donnée (2 méthodes)
/*** 1ère méthode ***/
// On récupère le repository
$repository = $this->getDoctrine()->getManager()->getRepository('OCPlatformBundle:Advert');
// On récupère l'entité correspondante à l'id $id
$advert = $repository->find($id);

/*** 2ème méthode ***/
$em = $this->getDoctrine()->getManager();
// On récupère l'annonce $id
$advert = $em->getRepository('OCPlatformBundle:Advert')->find($id);


// Pour modifier une image
public function editImageAction($advertId)
{
  $em = $this->getDoctrine()->getManager();

  // On récupère l'annonce
  $advert = $em->getRepository('OCPlatformBundle:Advert')->find($advertId);

  // On modifie l'URL de l'image par exemple
  $advert->getImage()->setUrl('test.png');

  // On n'a pas besoin de persister l'annonce ni l'image.
  // Rappelez-vous, ces entités sont automatiquement persistées car
  // on les a récupérées depuis Doctrine lui-même
  
  // On déclenche la modification
  $em->flush();

  return new Response('OK');
}

/* Les relations uni et bidirectionnelles */
// Documentation création des relations : http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/association-mapping.html
// Documentation utilisation des relations : http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/working-with-associations.html


/********** QUERY BUILDER *************/
// Documentation officielle : http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/query-builder.html

/********* DQL (Doctrine Query Language) ***********/
// Documentation officielle : http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/dql-doctrine-query-language.html

/******** LES EXTENSIONS DOCTRINE ********/
// Tree : https://github.com/Atlantic18/DoctrineExtensions/blob/master/doc/tree.md
// Translatable : https://github.com/Atlantic18/DoctrineExtensions/blob/master/doc/translatable.md
// Sluggable : https://github.com/Atlantic18/DoctrineExtensions/blob/master/doc/sluggable.md
// Timestampable : https://github.com/Atlantic18/DoctrineExtensions/blob/master/doc/timestampable.md
// Blameable : https://github.com/Atlantic18/DoctrineExtensions/blob/master/doc/blameable.md
// Loggable : https://github.com/Atlantic18/DoctrineExtensions/blob/master/doc/loggable.md
// Sortable : https://github.com/Atlantic18/DoctrineExtensions/blob/master/doc/sortable.md
// Softdeleteable: https://github.com/Atlantic18/DoctrineExtensions/blob/master/doc/softdeleteable.md
// Uploadable : https://github.com/Atlantic18/DoctrineExtensions/blob/master/doc/uploadable.md
// IpTraceable : https://github.com/Atlantic18/DoctrineExtensions/blob/master/doc/ip_traceable.md







public function addAction(Request $request)
    {        
        // Création de l'entité Advert
        $advert = new Advert();
        $advert->setTitle('Recherche développpeur Symfony');
        $advert->setAuthor('Mohamed');
        $advert->setEmail('aharchi.mohamed@gmail.com');
        $advert->setContent('Nous recherchons un développpeur Symfony débutant sur Lyon. Blabla…');
        // On peut ne pas définir ni la date ni la publication
        // car ces attributs sont définis automatiquement dans le constructeur

        // Création de l'entité Image
        $image = new Image();
        $image->setUrl('http://sdz-upload.s3.amazonaws.com/prod/upload/job-de-reve.jpg');
        $image->setAlt('Jobe de rêve');

        // On lie l'image à l'annonce
        $advert->setImage($image);

        // Création d'une première candidature
        $application1 = new Application();
        $application1->setAuthor('Marine');
        $application1->setContent("J'ai toutes les qualités nécessaires.");

        // Création d'une deuxième candidature
        $application2 = new Application();
        $application2->setAuthor('Pierre');
        $application2->setContent("Je suis très motivé.");

        // On lie les candidatures à l'annonce
        $application1->setAdvert($advert);
        $application2->setAdvert($advert);

        // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();

        // On récupère toutes les compétences possibles
        $listSkills = $em->getRepository('OCPlatformBundle:Skill')->findAll();

        foreach ($listSkills as $skill) {
          $advertSkill = new AdvertSkill();

          $advertSkill->setAdvert($advert);
          $advertSkill->setSkill($skill);
          $advertSkill->setLevel('Expert');

          $em->persist($advertSkill);
        }

        // Etape 1 : On "persiste" l'entité
        $em->persist($advert);

        // Étape 1 ter : pour cette relation pas de cascade lorsqu'on persiste Advert, car la relation est
        // définie dans l'entité Application et non Advert. On doit donc tout persister à la main ici.
        $em->persist($application1);
        $em->persist($application2);

        // Etape 2 : On "flush" tout ce qui a été persisté avant
        $em->flush();

        // Si la requête est en POST, c'est que le visiteur a soumis le formulaire
        if ($request->isMethod('POST')) 
        {
            // Ici, on s'occupera de la création et de la gestion du formulaire

            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            // Puis on redirige vers la page de visualisation de cette annonce
            return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));  
        }

        // Si on est pas en POST, alors on affiche le formulaire
        return $this->render('OCPlatformBundle:Advert:add.html.twig');

    }




    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $advert = $em->getRepository('OCPlatformBundle:Advert')->find($id);

        if(null == $advert) 
        {
          throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
        }

        // La méthode findAll retourne toutes les catégories de la base de données
        $listCategories = $em->getRepository('OCPlatformBundle:Category')->findAll();

        // On boucle sur les catégories pour les lier à l'annonce
        /*foreach ($listCategories as $category) {
          $advert->addCategory($category);  
        }*/

        $advert->setAuthor('Julien');

        // Pour persister le changement dans la relation, il faut persister l'entité propriétaire
        // Ici, Advert est le propriétaire, donc inutile de la persister car on l'a récupérée depuis Doctrine

        // Étape 2 : On déclenche l'enregistrement
        $em->flush();

        return $this->render('OCPlatformBundle:Advert:edit.html.twig', array(
          'advert' => $advert
        ));
    }


public function editImageAction($advertId)
    {
        $em = $this->getDoctrine()->getManager();

        // On récupère l'annonce
        $advert = $em->getRepository('OCPlatformBundle:Advert')->find($advertId);

        // On modifie l'URL de l'image par exemple
        $advert->getImage()->setUrl('test.png');

        // On n'a pas besoin de persister l'annonce ni l'image
        // Rappelez-vous, ces entités sont automatiquement persistées car
        // on les a récupérées depuis Doctrine lui-même

        // On déclenche la modification
        $em->flush();

        return new Response('OK');
    }





    /********* QUERY BUILDER *********/
  public function myFindAll()
  {
    // Méthode 1 : en passant par l'EntityManager
    $queryBuilder = $this->_em->createQueryBuilder()->select('a')->from($this->_entityName, 'a');

    // Dans un repository, $this->_entityName est le namespace de l'entité gérée 
    // Ici, il vaut donc OC\PlatformBudnel\Entity\Advert

    // Méthode 2 : en passant par le raccourci (méthode recommandée)
    $queryBuilder = $this->createQueryBuilder('a');

    // On n'ajoute pas de critère ou tri particulier, la construction de notre requête est finie

    // On récupère la Query à partir du QueryBuilder
    $query = $queryBuilder->getQuery();

    // On récupère les résultats à partir de la Query
    $results = $query->getResult();

    // On retourne ces résultats
    //return $results;

    // Méthode simplifiée
    return $this->createQueryBuilder()->getQuery()->getResult();
  }

  public function myFindOne($id)
  {
    $qb = $this->createQueryBuilder('a');

    $qb->where('a.id = :id')->setParameter('id', $id);

    return $qb->getQuery()->getResult();
  }

  public function findByAuthorAndDate($author, $year)
  {
    $qb = $this->createQueryBuilder('a');

    $qb->where('a.author = :author')->setParameter('author', $author)->andWhere('a.date < :year')->setParameter('year', $year)->orderBy('a.date', 'DESC');

    return $qb->getQuery()->getResult();
  }

  public function whereCurrentYear(QueryBuilder $qb)
  {
    $qb->andWhere('a.date BETWEEN :start AND :end')->setParameter('start', new \Datetime(date('Y').'-01-01'))->setParameter('end', new \Datetime(date('Y').'-12-31'));
  }

  public function myFind()
  {
    $qb = $this->createQueryBuilder('a');

    $qb->where('a.author = :author')->setParameter('author', 'Marine');

    $this->whereCurrentYear($qb);

    $qb->orderBy('a.date', 'DESC');

    return $qb->getQuery()->getResult();
  }

  /* Les jointures avec le QueryBuilder */
  public function getAdvertWithApplications()
  {
    $qb = $this->createQueryBuilder('a')->leftJoin('a.applications', 'app')->addSelect('app');

    return $qb->getQuery()->getResult();
  }


  public function getAdvertWithCategories(array $categoryNames)
  {

    /*$qb = $this
      ->createQueryBuilder('a')
      ->innerJoin('a.categories', 'cat')
      ->addSelect('cat')
      ->where("cat.name IN(:categoryNames)")
      ->setParameter('categoryNames', array_values($categoryNames));*/

    /* "Correction" */
    $qb = $this->createQueryBuilder('a')->innerJoin('a.categories', 'cat')->addSelect('cat')->where($qb->expr()->in('cat.name', $categoryNames));

    return $qb->getQuery()->getResult();
  }


  /***** DQL ******/
  public function myFindDQL($id)
  {
    $query = $this->_em->createQuery("SELECT a from Advert a where a.id = :id");
    $query->setParameter('id', $id);

    return $query->getSingleResult();
  }


  /************* BUNDLE PAGINATION **************/
  // KnpPaginatorBundle (utilise Bootstrap) lien : https://github.com/KnpLabs/KnpPaginatorBundle

  /************ OUTIL SENSIO LABAS ************/
  // Lien outil d'analyse de code de Symfony (SensioLabsInsight) : https://insight.sensiolabs.com/


  /************ PERSONNALISER LES FORMULAIRES TWIG *************/
  // Documentation officielle : https://symfony.com/doc/current/forms.html#form-theming
  // Documentation pour créer des types de champs personnaliser : https://symfony.com/doc/current/form/create_custom_field_type.html

  public function addAction(Request $request)
  {    
    /*$em = $this->getDoctrine()->getManager();

    // On ne sait toujours pas gérer le formulaire, patience cela vient dans la prochaine partie !

    if ($request->isMethod('POST')) {
      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

      return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));
    }*/

    // On crée un objet Advert
    $advert = new Advert();

    // On crée le FormBuilder grâce au service form factory
    $form = $this->get('form.factory')->create(AdvertType::class, $advert);

    // Si la requête est en POST
    if($request->isMethod('POST')) {
      // On fait le lien Requête <-> Formulaire
      // A partir de maintenant, la variable $advert contient les valeurs entrées dans le formulaire par le visiteur
      $form->handleRequest($request);

      // On vérifie que les valeurs entrées sont correctes
      // (Nous verrons la validation des objets en détail dans le prochain chapitre)
      if($form->isValid()) {
        // On enregistre notre objet $advert dans la base de données, par exemple
        $em = $this->getDoctrine()->getManager();
        $em->persist($advert);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

        // On redirige vers la page de visualisation de l'annonce nouvellement créée
        return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));
      }  
    }

    // À ce stade, le formulaire n'est pas valide car :
    // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
    // - Soit la requête est de type POST, mais le formulaire contient des valeurs invalides, donc on l'affiche de nouveau
    return $this->render('OCPlatformBundle:Advert:add.html.twig', array(
       'form' => $form->createView(),
    ));
  }

// Documentation des évènements de formulaire : https://symfony.com/doc/current/form/dynamic_form_modification.html$
  
// Documentation VichUploaderBundle pour l'envoi de fichiers : https://github.com/dustin10/VichUploaderBundle
/************************** FIN PARTIE FORMULAIRE *****************************/
  
/***************************** LES CONTRAINTES ********************************/  
// Documentation officielle sur les contraintes du bundle Validator : https://symfony.com/doc/current/reference/constraints.html
// Le Tableau OpenClassroom sur les contraintes du bundle Validator : https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony/validez-vos-donnees-1
// Documentation comportant d'autre contraintes du bundle Validator : https://symfony.com/doc/current/validation.html#supported-constraints
  
// Exemple
<?php
// Depuis un contrôleur
public function testAction()
{
  $advert = new Advert;

  $advert->setDate(new \Datetime());  // Champ « date » OK
  $advert->setTitle('abc');           // Champ « title » incorrect : moins de 10 caractères
  //$advert->setContent('blabla');    // Champ « content » incorrect : on ne le définit pas
  $advert->setAuthor('A');            // Champ « author » incorrect : moins de 2 caractères

  // On récupère le service validator
  $validator = $this->get('validator');

  // On déclenche la validation sur notre object
  $listErrors = $validator->validate($advert);

  // Si $listErrors n'est pas vide, on affiche les erreurs
  if(count($listErrors) > 0) {
    // $listErrors est un objet, sa méthode __toString permet de lister joliement les erreurs
    return new Response((string) $listErrors);
  } else {
    return new Response("L'annonce est valide !");
  }
}

// Documentation officielle pour la création de contraintes : https://symfony.com/doc/current/validation/custom_constraint.html
/************************* FIN PARTIE CONTRAINTES *******************/


/******************** PARTIE SECURITE *******************/
// Documentation officielle sur les 2 principes de sécurité Symfony (l'authentification et l'autorisation) : https://symfony.com/doc/current/security.html
// Documentation officielle pour la configuration du formulaire de connexion : https://symfony.com/doc/current/security/form_login_setup.html
// Documentation officielle imposer des autorisations avec des annotations : https://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/annotations/security.html
// UserInterface : https://github.com/symfony/symfony/blob/master/src/Symfony/Component/Security/Core/User/UserInterface.php
// Documentation officielle pour le fournisseur (provider) entity : https://symfony.com/doc/current/security/entity_provider.html
// Liste des attributs FOSUser disponible sur : https://github.com/FriendsOfSymfony/FOSUserBundle/blob/master/Resources/config/doctrine-mapping/User.orm.xml
// Documentation officielle FOSUserBundle : https://symfony.com/doc/master/bundles/FOSUserBundle/index.html
// Utilisation des Groups avec FOSUserBundle : https://symfony.com/doc/master/bundles/FOSUserBundle/groups.html
// Utilisation d'ACL pour définir des droits bien plus finement que les rôles : https://symfony.com/doc/current/security/acl.html
/****************** FIN PARTIE SECURITE ****************/

/********** LES SERVICES UTILISATION POUSSEE *************/
/* Connaitre tous les services implémentant un certain tag : php bin/console debug:container --tag=twig.extension
/* Documentation officielle pour la création d'extensions Twig : http://twig.sensiolabs.org/doc/advanced.html#creating-an-extension
/* Documentation officielle dictionnaire des tags : https://symfony.com/doc/current/reference/dic_tags.html 
/* Documentation officielle sur la création de type de champ : https://symfony.com/doc/current/form/create_custom_field_type.html 
/* Les services par défaut de Symfony les plus utilisés : https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony/les-services-utilisation-poussee-1#r-3624936
/******* FIN DES SERVICES UTILISATION POUSSEE *****/
 
/**************** LES TRADUCTIONS ****************/
/* Documentation officielle pour gérer le singulier et pluriel : https://symfony.com/doc/current/translation.html#intervalle-explicite-de-pluralisation
/* Les différentes syntaxes d'utilisation :
 * 
        * Les balises :
        {# Texte simple #}
        {% trans with {'%placeholder%': placeholderValue} from 'domaine' into locale %}maChaîne{% endtrans %}
        {# Texte avec gestion de pluriels #}
        {% transchoice count with {'%placeholder%': placeholderValue} from 'domaine' into locale %}maChaîne{% endtranschoice %}
 * 
 * 
        Les filtres :
        {# Texte simple #}
        {{ 'maChaîne'|trans({'%placeholder%': placeholderValue}, 'domaine', locale) }}
        {# Texte avec gestion de pluriels #}
        {{ 'maChaîne'|transchoice (count,  {'%placeholder%': placeholderValue}, 'domaine', locale) }}
 * 
 * 
        Les méthodes du service :
        <?php
        $translator = $this->get('translator'); // depuis un contrôleur
        // Texte simple
        $translator->trans('maChaîne',  array('%placeholder%' => $placeholderValue) , 'domaine', $locale);
        // Texte avec gestion de pluriels
        $translator->transchoice($count, 'maChaîne',  array('%placeholder%' => $placeholderValue) , 'domaine', $locale)
 */
/*************** FIN DES TRADUCTIONS ****************/

/************ TWIG ****************/
/* Les extensions Twig : http://twig.sensiolabs.org/doc/extensions/index.html
/*********** FIN TWIG ************/

/************* ParamConverter - LES CONVERTISSEURS DE PARAMETRES ***************/
/* ParamConverterListener : https://github.com/sensiolabs/SensioFrameworkExtraBundle/blob/master/EventListener/ParamConverterListener.php
/* ParamConverterInterface : https://github.com/sensiolabs/SensioFrameworkExtraBundle/blob/master/Request/ParamConverter/ParamConverterInterface.php
/* DoctrineParamConverter : https://github.com/sensiolabs/SensioFrameworkExtraBundle/blob/master/Request/ParamConverter/DoctrineParamConverter.php */
/* DateTimeParamConverter : https://github.com/sensio/SensioFrameworkExtraBundle/blob/master/Request/ParamConverter/DateTimeParamConverter.php */
