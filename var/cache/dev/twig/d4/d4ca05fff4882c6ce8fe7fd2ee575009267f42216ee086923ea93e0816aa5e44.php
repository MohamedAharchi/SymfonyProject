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
        $__internal_1b35ac195ec41762076a3a687b6234bca2043571d1d856fe5c2773c3a4a44332 = $this->env->getExtension("native_profiler");
        $__internal_1b35ac195ec41762076a3a687b6234bca2043571d1d856fe5c2773c3a4a44332->enter($__internal_1b35ac195ec41762076a3a687b6234bca2043571d1d856fe5c2773c3a4a44332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b35ac195ec41762076a3a687b6234bca2043571d1d856fe5c2773c3a4a44332->leave($__internal_1b35ac195ec41762076a3a687b6234bca2043571d1d856fe5c2773c3a4a44332_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cd5ddf2804c1b0ffe3c42246d21197c7fd4a9c1ba6bc30c952ec1b989e080fe0 = $this->env->getExtension("native_profiler");
        $__internal_cd5ddf2804c1b0ffe3c42246d21197c7fd4a9c1ba6bc30c952ec1b989e080fe0->enter($__internal_cd5ddf2804c1b0ffe3c42246d21197c7fd4a9c1ba6bc30c952ec1b989e080fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cd5ddf2804c1b0ffe3c42246d21197c7fd4a9c1ba6bc30c952ec1b989e080fe0->leave($__internal_cd5ddf2804c1b0ffe3c42246d21197c7fd4a9c1ba6bc30c952ec1b989e080fe0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d7d5b3f65faaafc087d742e74dac3e927be18779203d43383c0f2761e46d44d9 = $this->env->getExtension("native_profiler");
        $__internal_d7d5b3f65faaafc087d742e74dac3e927be18779203d43383c0f2761e46d44d9->enter($__internal_d7d5b3f65faaafc087d742e74dac3e927be18779203d43383c0f2761e46d44d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d7d5b3f65faaafc087d742e74dac3e927be18779203d43383c0f2761e46d44d9->leave($__internal_d7d5b3f65faaafc087d742e74dac3e927be18779203d43383c0f2761e46d44d9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f9474e5f77dc76991efd54fdd93ba6283459830ee7c93c3f68568a86f0a4fd4d = $this->env->getExtension("native_profiler");
        $__internal_f9474e5f77dc76991efd54fdd93ba6283459830ee7c93c3f68568a86f0a4fd4d->enter($__internal_f9474e5f77dc76991efd54fdd93ba6283459830ee7c93c3f68568a86f0a4fd4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f9474e5f77dc76991efd54fdd93ba6283459830ee7c93c3f68568a86f0a4fd4d->leave($__internal_f9474e5f77dc76991efd54fdd93ba6283459830ee7c93c3f68568a86f0a4fd4d_prof);

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
