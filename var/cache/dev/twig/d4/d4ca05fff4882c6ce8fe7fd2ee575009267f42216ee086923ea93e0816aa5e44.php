<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_34d336665b36b7b23601c3180805698cb4f725da9a3c64b5d9e7fac8a1e50136 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_878988285e90b2f21ce96b2413c724162ececabb686adf77ce8d5daf124ab41d = $this->env->getExtension("native_profiler");
        $__internal_878988285e90b2f21ce96b2413c724162ececabb686adf77ce8d5daf124ab41d->enter($__internal_878988285e90b2f21ce96b2413c724162ececabb686adf77ce8d5daf124ab41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_878988285e90b2f21ce96b2413c724162ececabb686adf77ce8d5daf124ab41d->leave($__internal_878988285e90b2f21ce96b2413c724162ececabb686adf77ce8d5daf124ab41d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d41698471ce50d4d50e1278648192a205002a0895f4d005f0b802befcbda9b82 = $this->env->getExtension("native_profiler");
        $__internal_d41698471ce50d4d50e1278648192a205002a0895f4d005f0b802befcbda9b82->enter($__internal_d41698471ce50d4d50e1278648192a205002a0895f4d005f0b802befcbda9b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d41698471ce50d4d50e1278648192a205002a0895f4d005f0b802befcbda9b82->leave($__internal_d41698471ce50d4d50e1278648192a205002a0895f4d005f0b802befcbda9b82_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9c82cbb2aa1ef126b40c2746812aeee94a689c3593a3bd94bedd1ef3c22db701 = $this->env->getExtension("native_profiler");
        $__internal_9c82cbb2aa1ef126b40c2746812aeee94a689c3593a3bd94bedd1ef3c22db701->enter($__internal_9c82cbb2aa1ef126b40c2746812aeee94a689c3593a3bd94bedd1ef3c22db701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9c82cbb2aa1ef126b40c2746812aeee94a689c3593a3bd94bedd1ef3c22db701->leave($__internal_9c82cbb2aa1ef126b40c2746812aeee94a689c3593a3bd94bedd1ef3c22db701_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b30eef8590b929754d7c765b23610d00d3a630a1f8e0db930ee9d4f6d3fd6f8d = $this->env->getExtension("native_profiler");
        $__internal_b30eef8590b929754d7c765b23610d00d3a630a1f8e0db930ee9d4f6d3fd6f8d->enter($__internal_b30eef8590b929754d7c765b23610d00d3a630a1f8e0db930ee9d4f6d3fd6f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b30eef8590b929754d7c765b23610d00d3a630a1f8e0db930ee9d4f6d3fd6f8d->leave($__internal_b30eef8590b929754d7c765b23610d00d3a630a1f8e0db930ee9d4f6d3fd6f8d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
