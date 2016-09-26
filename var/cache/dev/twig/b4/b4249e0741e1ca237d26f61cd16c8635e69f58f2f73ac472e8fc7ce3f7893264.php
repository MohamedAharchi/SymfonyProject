<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_ea5c50624740aa65cf5e6dc5897424b36d5f1265c01e98025ed325e18fdf0f97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc7cdd305e8a3ea542062ff846556703c4bd428f4ba15c60f09c54ade47343c9 = $this->env->getExtension("native_profiler");
        $__internal_bc7cdd305e8a3ea542062ff846556703c4bd428f4ba15c60f09c54ade47343c9->enter($__internal_bc7cdd305e8a3ea542062ff846556703c4bd428f4ba15c60f09c54ade47343c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
  </head>
  <body>
    <h1>Hello ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " !</h1>

    <p>
      Le Hello World est un grand classique en programmation.
      Il signifie énormément, car cela veut dire que vous avez
      réussi à exécuter le programme pour accomplir une tâche simple :
      afficher ce hello world !
    </p>
  </body>
</html>
";
        
        $__internal_bc7cdd305e8a3ea542062ff846556703c4bd428f4ba15c60f09c54ade47343c9->leave($__internal_bc7cdd305e8a3ea542062ff846556703c4bd428f4ba15c60f09c54ade47343c9_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 9,  22 => 2,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <title>Bienvenue sur ma première page avec OpenClassrooms !</title>*/
/*   </head>*/
/*   <body>*/
/*     <h1>Hello {{ nom }} !</h1>*/
/* */
/*     <p>*/
/*       Le Hello World est un grand classique en programmation.*/
/*       Il signifie énormément, car cela veut dire que vous avez*/
/*       réussi à exécuter le programme pour accomplir une tâche simple :*/
/*       afficher ce hello world !*/
/*     </p>*/
/*   </body>*/
/* </html>*/
/* */
