<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9e4a6dec958e4a59f9b53f7581bc23d2c1b5d4fdb1b0a7459690a129adad3022 extends Twig_Template
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
        $__internal_0b582ec73aa4cd6fdb31d699691454c44afcba67b4016705ab05f2dd3a851008 = $this->env->getExtension("native_profiler");
        $__internal_0b582ec73aa4cd6fdb31d699691454c44afcba67b4016705ab05f2dd3a851008->enter($__internal_0b582ec73aa4cd6fdb31d699691454c44afcba67b4016705ab05f2dd3a851008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b582ec73aa4cd6fdb31d699691454c44afcba67b4016705ab05f2dd3a851008->leave($__internal_0b582ec73aa4cd6fdb31d699691454c44afcba67b4016705ab05f2dd3a851008_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d579febbec158f59cd4c0038328168f68f20fccd56ba9d1a63ecb03de64ea675 = $this->env->getExtension("native_profiler");
        $__internal_d579febbec158f59cd4c0038328168f68f20fccd56ba9d1a63ecb03de64ea675->enter($__internal_d579febbec158f59cd4c0038328168f68f20fccd56ba9d1a63ecb03de64ea675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d579febbec158f59cd4c0038328168f68f20fccd56ba9d1a63ecb03de64ea675->leave($__internal_d579febbec158f59cd4c0038328168f68f20fccd56ba9d1a63ecb03de64ea675_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_82a35dfd5863ae61fd6923892863b202ac4d8b9b985b35475c6221e3c98c1ab4 = $this->env->getExtension("native_profiler");
        $__internal_82a35dfd5863ae61fd6923892863b202ac4d8b9b985b35475c6221e3c98c1ab4->enter($__internal_82a35dfd5863ae61fd6923892863b202ac4d8b9b985b35475c6221e3c98c1ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_82a35dfd5863ae61fd6923892863b202ac4d8b9b985b35475c6221e3c98c1ab4->leave($__internal_82a35dfd5863ae61fd6923892863b202ac4d8b9b985b35475c6221e3c98c1ab4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_31ab6e7f3ceb4d9819f780ea8d0ba79161cff61a27f1df25d75f0c5fc8b0ac81 = $this->env->getExtension("native_profiler");
        $__internal_31ab6e7f3ceb4d9819f780ea8d0ba79161cff61a27f1df25d75f0c5fc8b0ac81->enter($__internal_31ab6e7f3ceb4d9819f780ea8d0ba79161cff61a27f1df25d75f0c5fc8b0ac81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_31ab6e7f3ceb4d9819f780ea8d0ba79161cff61a27f1df25d75f0c5fc8b0ac81->leave($__internal_31ab6e7f3ceb4d9819f780ea8d0ba79161cff61a27f1df25d75f0c5fc8b0ac81_prof);

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
