<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_22383cb7fbba1b563ee8ee9d06cdae266cf668eb66f50374a475d918000eb842 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e0ffbf6dde15207a4eaa691f2e276c418eedbfb09ff27be7122bc2f5fae3dd8 = $this->env->getExtension("native_profiler");
        $__internal_2e0ffbf6dde15207a4eaa691f2e276c418eedbfb09ff27be7122bc2f5fae3dd8->enter($__internal_2e0ffbf6dde15207a4eaa691f2e276c418eedbfb09ff27be7122bc2f5fae3dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e0ffbf6dde15207a4eaa691f2e276c418eedbfb09ff27be7122bc2f5fae3dd8->leave($__internal_2e0ffbf6dde15207a4eaa691f2e276c418eedbfb09ff27be7122bc2f5fae3dd8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9c5af66877cb66b793b9e3ec69ebecdadad8edfe3af6cb6159f67aa5f79da853 = $this->env->getExtension("native_profiler");
        $__internal_9c5af66877cb66b793b9e3ec69ebecdadad8edfe3af6cb6159f67aa5f79da853->enter($__internal_9c5af66877cb66b793b9e3ec69ebecdadad8edfe3af6cb6159f67aa5f79da853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9c5af66877cb66b793b9e3ec69ebecdadad8edfe3af6cb6159f67aa5f79da853->leave($__internal_9c5af66877cb66b793b9e3ec69ebecdadad8edfe3af6cb6159f67aa5f79da853_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8804b43a8891a2210c2907edbba4361377fdcfce9a7bd1e8506eb4420d5d9095 = $this->env->getExtension("native_profiler");
        $__internal_8804b43a8891a2210c2907edbba4361377fdcfce9a7bd1e8506eb4420d5d9095->enter($__internal_8804b43a8891a2210c2907edbba4361377fdcfce9a7bd1e8506eb4420d5d9095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8804b43a8891a2210c2907edbba4361377fdcfce9a7bd1e8506eb4420d5d9095->leave($__internal_8804b43a8891a2210c2907edbba4361377fdcfce9a7bd1e8506eb4420d5d9095_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fd279b0d2d9f626acec1daa42ec89ed4ff8676763143339f318063a08cfde02 = $this->env->getExtension("native_profiler");
        $__internal_5fd279b0d2d9f626acec1daa42ec89ed4ff8676763143339f318063a08cfde02->enter($__internal_5fd279b0d2d9f626acec1daa42ec89ed4ff8676763143339f318063a08cfde02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5fd279b0d2d9f626acec1daa42ec89ed4ff8676763143339f318063a08cfde02->leave($__internal_5fd279b0d2d9f626acec1daa42ec89ed4ff8676763143339f318063a08cfde02_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
