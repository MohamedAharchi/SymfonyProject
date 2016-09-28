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