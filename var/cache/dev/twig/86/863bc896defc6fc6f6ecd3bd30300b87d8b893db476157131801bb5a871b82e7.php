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
        $__internal_a81db4c0e3bc15bd74117d7d32c4fb8e6761c365f866fa67d1e94de570faafbb = $this->env->getExtension("native_profiler");
        $__internal_a81db4c0e3bc15bd74117d7d32c4fb8e6761c365f866fa67d1e94de570faafbb->enter($__internal_a81db4c0e3bc15bd74117d7d32c4fb8e6761c365f866fa67d1e94de570faafbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a81db4c0e3bc15bd74117d7d32c4fb8e6761c365f866fa67d1e94de570faafbb->leave($__internal_a81db4c0e3bc15bd74117d7d32c4fb8e6761c365f866fa67d1e94de570faafbb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a8efc1a48c9678023e1a2d0fe7bee551a88c72941ff2028f54dab9e15b34c800 = $this->env->getExtension("native_profiler");
        $__internal_a8efc1a48c9678023e1a2d0fe7bee551a88c72941ff2028f54dab9e15b34c800->enter($__internal_a8efc1a48c9678023e1a2d0fe7bee551a88c72941ff2028f54dab9e15b34c800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a8efc1a48c9678023e1a2d0fe7bee551a88c72941ff2028f54dab9e15b34c800->leave($__internal_a8efc1a48c9678023e1a2d0fe7bee551a88c72941ff2028f54dab9e15b34c800_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec88bf61ddca443b66d6581964ecccbc56153445b0647e37b41bcd78860efa89 = $this->env->getExtension("native_profiler");
        $__internal_ec88bf61ddca443b66d6581964ecccbc56153445b0647e37b41bcd78860efa89->enter($__internal_ec88bf61ddca443b66d6581964ecccbc56153445b0647e37b41bcd78860efa89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ec88bf61ddca443b66d6581964ecccbc56153445b0647e37b41bcd78860efa89->leave($__internal_ec88bf61ddca443b66d6581964ecccbc56153445b0647e37b41bcd78860efa89_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed2f43c39c6b1a3eff3a7a64a013a9291e2c557ad1b382bd17c912a70bd09aaf = $this->env->getExtension("native_profiler");
        $__internal_ed2f43c39c6b1a3eff3a7a64a013a9291e2c557ad1b382bd17c912a70bd09aaf->enter($__internal_ed2f43c39c6b1a3eff3a7a64a013a9291e2c557ad1b382bd17c912a70bd09aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ed2f43c39c6b1a3eff3a7a64a013a9291e2c557ad1b382bd17c912a70bd09aaf->leave($__internal_ed2f43c39c6b1a3eff3a7a64a013a9291e2c557ad1b382bd17c912a70bd09aaf_prof);

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
