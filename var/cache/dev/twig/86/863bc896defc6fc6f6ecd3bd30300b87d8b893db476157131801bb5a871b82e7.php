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
        $__internal_5ed500edf3b9893e7b362fa05c97df4553e82d76f8df607459b5a54c6a752a34 = $this->env->getExtension("native_profiler");
        $__internal_5ed500edf3b9893e7b362fa05c97df4553e82d76f8df607459b5a54c6a752a34->enter($__internal_5ed500edf3b9893e7b362fa05c97df4553e82d76f8df607459b5a54c6a752a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ed500edf3b9893e7b362fa05c97df4553e82d76f8df607459b5a54c6a752a34->leave($__internal_5ed500edf3b9893e7b362fa05c97df4553e82d76f8df607459b5a54c6a752a34_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0b51f19e233fb13640951c7395a92bf477635da884ba02578c5e8dfd8f692b22 = $this->env->getExtension("native_profiler");
        $__internal_0b51f19e233fb13640951c7395a92bf477635da884ba02578c5e8dfd8f692b22->enter($__internal_0b51f19e233fb13640951c7395a92bf477635da884ba02578c5e8dfd8f692b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0b51f19e233fb13640951c7395a92bf477635da884ba02578c5e8dfd8f692b22->leave($__internal_0b51f19e233fb13640951c7395a92bf477635da884ba02578c5e8dfd8f692b22_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7261e9a0b51d029488c04e7c56dc8d0b54a5dc4971cafd7cddcda32a808aae2 = $this->env->getExtension("native_profiler");
        $__internal_d7261e9a0b51d029488c04e7c56dc8d0b54a5dc4971cafd7cddcda32a808aae2->enter($__internal_d7261e9a0b51d029488c04e7c56dc8d0b54a5dc4971cafd7cddcda32a808aae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d7261e9a0b51d029488c04e7c56dc8d0b54a5dc4971cafd7cddcda32a808aae2->leave($__internal_d7261e9a0b51d029488c04e7c56dc8d0b54a5dc4971cafd7cddcda32a808aae2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_615bb94d709a7dc9ac25f0e7814fc8bfcf5014c3672fc2cff932806facedb640 = $this->env->getExtension("native_profiler");
        $__internal_615bb94d709a7dc9ac25f0e7814fc8bfcf5014c3672fc2cff932806facedb640->enter($__internal_615bb94d709a7dc9ac25f0e7814fc8bfcf5014c3672fc2cff932806facedb640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_615bb94d709a7dc9ac25f0e7814fc8bfcf5014c3672fc2cff932806facedb640->leave($__internal_615bb94d709a7dc9ac25f0e7814fc8bfcf5014c3672fc2cff932806facedb640_prof);

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
