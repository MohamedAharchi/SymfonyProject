<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_ea5c50624740aa65cf5e6dc5897424b36d5f1265c01e98025ed325e18fdf0f97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c12fd2af6125bd6b3a4f81beb4b6e390e4d70a5bb0cf7e9748085e521e291fd = $this->env->getExtension("native_profiler");
        $__internal_6c12fd2af6125bd6b3a4f81beb4b6e390e4d70a5bb0cf7e9748085e521e291fd->enter($__internal_6c12fd2af6125bd6b3a4f81beb4b6e390e4d70a5bb0cf7e9748085e521e291fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c12fd2af6125bd6b3a4f81beb4b6e390e4d70a5bb0cf7e9748085e521e291fd->leave($__internal_6c12fd2af6125bd6b3a4f81beb4b6e390e4d70a5bb0cf7e9748085e521e291fd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb78ebeb5ad667c8dd6ff380b5d9af02717cbfd639cfb0e7441087d885b7c3e5 = $this->env->getExtension("native_profiler");
        $__internal_eb78ebeb5ad667c8dd6ff380b5d9af02717cbfd639cfb0e7441087d885b7c3e5->enter($__internal_eb78ebeb5ad667c8dd6ff380b5d9af02717cbfd639cfb0e7441087d885b7c3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_eb78ebeb5ad667c8dd6ff380b5d9af02717cbfd639cfb0e7441087d885b7c3e5->leave($__internal_eb78ebeb5ad667c8dd6ff380b5d9af02717cbfd639cfb0e7441087d885b7c3e5_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_69dc34be5b3c3336308cbd1be5dfc540311322e33c4b3f9b2fc8bc6acfe0224f = $this->env->getExtension("native_profiler");
        $__internal_69dc34be5b3c3336308cbd1be5dfc540311322e33c4b3f9b2fc8bc6acfe0224f->enter($__internal_69dc34be5b3c3336308cbd1be5dfc540311322e33c4b3f9b2fc8bc6acfe0224f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Liste des annonces</h2>

  <ul>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 15
            echo "      <li>
        <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
        </a>
        par ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
        le ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "      <li>Pas (encore !) d'annonces</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "  </ul>

";
        
        $__internal_69dc34be5b3c3336308cbd1be5dfc540311322e33c4b3f9b2fc8bc6acfe0224f->leave($__internal_69dc34be5b3c3336308cbd1be5dfc540311322e33c4b3f9b2fc8bc6acfe0224f_prof);

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
        return array (  99 => 25,  92 => 23,  84 => 20,  80 => 19,  75 => 17,  71 => 16,  68 => 15,  63 => 14,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <h2>Liste des annonces</h2>*/
/* */
/*   <ul>*/
/*     {% for advert in listAdverts %}*/
/*       <li>*/
/*         <a href="{{ path('oc_platform_view', {'id': advert.id}) }}">*/
/*           {{ advert.title }}*/
/*         </a>*/
/*         par {{ advert.author }},*/
/*         le {{ advert.date|date('d/m/Y') }}*/
/*       </li>*/
/*     {% else %}*/
/*       <li>Pas (encore !) d'annonces</li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* */
/* {% endblock %}*/
