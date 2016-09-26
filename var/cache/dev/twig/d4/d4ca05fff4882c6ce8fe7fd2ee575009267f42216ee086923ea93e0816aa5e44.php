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
        $__internal_b6d6334dc4af4b60899e519ab24581fe010b1f56e4d84f00447d03881ef41590 = $this->env->getExtension("native_profiler");
        $__internal_b6d6334dc4af4b60899e519ab24581fe010b1f56e4d84f00447d03881ef41590->enter($__internal_b6d6334dc4af4b60899e519ab24581fe010b1f56e4d84f00447d03881ef41590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6d6334dc4af4b60899e519ab24581fe010b1f56e4d84f00447d03881ef41590->leave($__internal_b6d6334dc4af4b60899e519ab24581fe010b1f56e4d84f00447d03881ef41590_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c713f4793683934757122c443f1c0d799c1388d57503fe8efb4dbfee1af77d87 = $this->env->getExtension("native_profiler");
        $__internal_c713f4793683934757122c443f1c0d799c1388d57503fe8efb4dbfee1af77d87->enter($__internal_c713f4793683934757122c443f1c0d799c1388d57503fe8efb4dbfee1af77d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c713f4793683934757122c443f1c0d799c1388d57503fe8efb4dbfee1af77d87->leave($__internal_c713f4793683934757122c443f1c0d799c1388d57503fe8efb4dbfee1af77d87_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a0b7592f93af2cfbb9fce6c5893b592e190e003ab13a8c27675027e1a38b7956 = $this->env->getExtension("native_profiler");
        $__internal_a0b7592f93af2cfbb9fce6c5893b592e190e003ab13a8c27675027e1a38b7956->enter($__internal_a0b7592f93af2cfbb9fce6c5893b592e190e003ab13a8c27675027e1a38b7956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a0b7592f93af2cfbb9fce6c5893b592e190e003ab13a8c27675027e1a38b7956->leave($__internal_a0b7592f93af2cfbb9fce6c5893b592e190e003ab13a8c27675027e1a38b7956_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_71e959f5f8c5cef0933ccebc72b27bac7199f89de32a7f3530fe14c1186296e0 = $this->env->getExtension("native_profiler");
        $__internal_71e959f5f8c5cef0933ccebc72b27bac7199f89de32a7f3530fe14c1186296e0->enter($__internal_71e959f5f8c5cef0933ccebc72b27bac7199f89de32a7f3530fe14c1186296e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_71e959f5f8c5cef0933ccebc72b27bac7199f89de32a7f3530fe14c1186296e0->leave($__internal_71e959f5f8c5cef0933ccebc72b27bac7199f89de32a7f3530fe14c1186296e0_prof);

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
