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
        $__internal_7fb83fcf641371e2f3f75d291b9156700e0452b36559fdf2183d40c971f0fe8d = $this->env->getExtension("native_profiler");
        $__internal_7fb83fcf641371e2f3f75d291b9156700e0452b36559fdf2183d40c971f0fe8d->enter($__internal_7fb83fcf641371e2f3f75d291b9156700e0452b36559fdf2183d40c971f0fe8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7fb83fcf641371e2f3f75d291b9156700e0452b36559fdf2183d40c971f0fe8d->leave($__internal_7fb83fcf641371e2f3f75d291b9156700e0452b36559fdf2183d40c971f0fe8d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_871eb155470f78f8d89a910e1385df687c8a943103c9c0d8ddd0c89a0e678582 = $this->env->getExtension("native_profiler");
        $__internal_871eb155470f78f8d89a910e1385df687c8a943103c9c0d8ddd0c89a0e678582->enter($__internal_871eb155470f78f8d89a910e1385df687c8a943103c9c0d8ddd0c89a0e678582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_871eb155470f78f8d89a910e1385df687c8a943103c9c0d8ddd0c89a0e678582->leave($__internal_871eb155470f78f8d89a910e1385df687c8a943103c9c0d8ddd0c89a0e678582_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_48b2d55ef6caa74acaa5badd573fe7ce8039090a31d1bf3fdd29f423dc7e9dd7 = $this->env->getExtension("native_profiler");
        $__internal_48b2d55ef6caa74acaa5badd573fe7ce8039090a31d1bf3fdd29f423dc7e9dd7->enter($__internal_48b2d55ef6caa74acaa5badd573fe7ce8039090a31d1bf3fdd29f423dc7e9dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_48b2d55ef6caa74acaa5badd573fe7ce8039090a31d1bf3fdd29f423dc7e9dd7->leave($__internal_48b2d55ef6caa74acaa5badd573fe7ce8039090a31d1bf3fdd29f423dc7e9dd7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e88ad132649c6c04ccc41b11bf7824562b78c643fb650248d98681bf29785718 = $this->env->getExtension("native_profiler");
        $__internal_e88ad132649c6c04ccc41b11bf7824562b78c643fb650248d98681bf29785718->enter($__internal_e88ad132649c6c04ccc41b11bf7824562b78c643fb650248d98681bf29785718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e88ad132649c6c04ccc41b11bf7824562b78c643fb650248d98681bf29785718->leave($__internal_e88ad132649c6c04ccc41b11bf7824562b78c643fb650248d98681bf29785718_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0e4a5eecddf99ba87bfd6243da65d0037e6c2d68d81f2c848643e1eec0155950 = $this->env->getExtension("native_profiler");
        $__internal_0e4a5eecddf99ba87bfd6243da65d0037e6c2d68d81f2c848643e1eec0155950->enter($__internal_0e4a5eecddf99ba87bfd6243da65d0037e6c2d68d81f2c848643e1eec0155950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0e4a5eecddf99ba87bfd6243da65d0037e6c2d68d81f2c848643e1eec0155950->leave($__internal_0e4a5eecddf99ba87bfd6243da65d0037e6c2d68d81f2c848643e1eec0155950_prof);

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
