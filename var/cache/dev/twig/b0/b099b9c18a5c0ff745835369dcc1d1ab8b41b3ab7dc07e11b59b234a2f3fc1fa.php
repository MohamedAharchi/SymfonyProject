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
        $__internal_2927d0589847588851eb3ae2061dd16ad4a06c99e89026fee1eccf37021de2ac = $this->env->getExtension("native_profiler");
        $__internal_2927d0589847588851eb3ae2061dd16ad4a06c99e89026fee1eccf37021de2ac->enter($__internal_2927d0589847588851eb3ae2061dd16ad4a06c99e89026fee1eccf37021de2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_2927d0589847588851eb3ae2061dd16ad4a06c99e89026fee1eccf37021de2ac->leave($__internal_2927d0589847588851eb3ae2061dd16ad4a06c99e89026fee1eccf37021de2ac_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1132239074d21cd23cb6c9968abf46f0b1c5e0b6a773e8f733e52a879ec01a38 = $this->env->getExtension("native_profiler");
        $__internal_1132239074d21cd23cb6c9968abf46f0b1c5e0b6a773e8f733e52a879ec01a38->enter($__internal_1132239074d21cd23cb6c9968abf46f0b1c5e0b6a773e8f733e52a879ec01a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1132239074d21cd23cb6c9968abf46f0b1c5e0b6a773e8f733e52a879ec01a38->leave($__internal_1132239074d21cd23cb6c9968abf46f0b1c5e0b6a773e8f733e52a879ec01a38_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e93de9a06f838a4099abcc1dcbda2e54824b3db294ab8ccbfaa8eacb9cf65ede = $this->env->getExtension("native_profiler");
        $__internal_e93de9a06f838a4099abcc1dcbda2e54824b3db294ab8ccbfaa8eacb9cf65ede->enter($__internal_e93de9a06f838a4099abcc1dcbda2e54824b3db294ab8ccbfaa8eacb9cf65ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e93de9a06f838a4099abcc1dcbda2e54824b3db294ab8ccbfaa8eacb9cf65ede->leave($__internal_e93de9a06f838a4099abcc1dcbda2e54824b3db294ab8ccbfaa8eacb9cf65ede_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad568e514aee88157a29c834b6e2f63b2529bc00f4513fa1de48cd47c6d91caa = $this->env->getExtension("native_profiler");
        $__internal_ad568e514aee88157a29c834b6e2f63b2529bc00f4513fa1de48cd47c6d91caa->enter($__internal_ad568e514aee88157a29c834b6e2f63b2529bc00f4513fa1de48cd47c6d91caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ad568e514aee88157a29c834b6e2f63b2529bc00f4513fa1de48cd47c6d91caa->leave($__internal_ad568e514aee88157a29c834b6e2f63b2529bc00f4513fa1de48cd47c6d91caa_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0a1009e6701f086c6ed6e62ab6fe6646159bdfa11872dcb0825ae1cc3c79acaa = $this->env->getExtension("native_profiler");
        $__internal_0a1009e6701f086c6ed6e62ab6fe6646159bdfa11872dcb0825ae1cc3c79acaa->enter($__internal_0a1009e6701f086c6ed6e62ab6fe6646159bdfa11872dcb0825ae1cc3c79acaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0a1009e6701f086c6ed6e62ab6fe6646159bdfa11872dcb0825ae1cc3c79acaa->leave($__internal_0a1009e6701f086c6ed6e62ab6fe6646159bdfa11872dcb0825ae1cc3c79acaa_prof);

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
