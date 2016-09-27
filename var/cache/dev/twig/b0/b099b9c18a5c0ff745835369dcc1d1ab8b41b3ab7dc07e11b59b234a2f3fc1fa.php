<?php

/* base.html.twig */
class __TwigTemplate_8968afcf22da06906039ccb5dea2f4c8451c047da2697fea6dedd773d5ccf8f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c69adf8542df3db9395f8b33c19024d9d721bf01d531a35f3f2c905f07ce4a2d = $this->env->getExtension("native_profiler");
        $__internal_c69adf8542df3db9395f8b33c19024d9d721bf01d531a35f3f2c905f07ce4a2d->enter($__internal_c69adf8542df3db9395f8b33c19024d9d721bf01d531a35f3f2c905f07ce4a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c69adf8542df3db9395f8b33c19024d9d721bf01d531a35f3f2c905f07ce4a2d->leave($__internal_c69adf8542df3db9395f8b33c19024d9d721bf01d531a35f3f2c905f07ce4a2d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_61af1c6954008d5d45451eaf8a1121e4fc2bfd06516146b4bb1e724c74601fb7 = $this->env->getExtension("native_profiler");
        $__internal_61af1c6954008d5d45451eaf8a1121e4fc2bfd06516146b4bb1e724c74601fb7->enter($__internal_61af1c6954008d5d45451eaf8a1121e4fc2bfd06516146b4bb1e724c74601fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_61af1c6954008d5d45451eaf8a1121e4fc2bfd06516146b4bb1e724c74601fb7->leave($__internal_61af1c6954008d5d45451eaf8a1121e4fc2bfd06516146b4bb1e724c74601fb7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5cda5cb946f90a9a36bac819d52568522c42b661db1b07512b25f0638b59c668 = $this->env->getExtension("native_profiler");
        $__internal_5cda5cb946f90a9a36bac819d52568522c42b661db1b07512b25f0638b59c668->enter($__internal_5cda5cb946f90a9a36bac819d52568522c42b661db1b07512b25f0638b59c668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5cda5cb946f90a9a36bac819d52568522c42b661db1b07512b25f0638b59c668->leave($__internal_5cda5cb946f90a9a36bac819d52568522c42b661db1b07512b25f0638b59c668_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ca1eaec657a76d45010c119888f9911388f1f435b8f8460d7e23c7a2068d410 = $this->env->getExtension("native_profiler");
        $__internal_1ca1eaec657a76d45010c119888f9911388f1f435b8f8460d7e23c7a2068d410->enter($__internal_1ca1eaec657a76d45010c119888f9911388f1f435b8f8460d7e23c7a2068d410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1ca1eaec657a76d45010c119888f9911388f1f435b8f8460d7e23c7a2068d410->leave($__internal_1ca1eaec657a76d45010c119888f9911388f1f435b8f8460d7e23c7a2068d410_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_774e3b92a3f5d759e2c90ec22fc3eabc8fe598b05f35077e84c467168310af22 = $this->env->getExtension("native_profiler");
        $__internal_774e3b92a3f5d759e2c90ec22fc3eabc8fe598b05f35077e84c467168310af22->enter($__internal_774e3b92a3f5d759e2c90ec22fc3eabc8fe598b05f35077e84c467168310af22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_774e3b92a3f5d759e2c90ec22fc3eabc8fe598b05f35077e84c467168310af22->leave($__internal_774e3b92a3f5d759e2c90ec22fc3eabc8fe598b05f35077e84c467168310af22_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
