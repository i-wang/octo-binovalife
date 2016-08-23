<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_628fef1cb2a58df46b9100a7f393313aee14ee16d5ca49353a543e3a41d61f73 extends Twig_Template
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
        $__internal_9d173932e466a8ccbecf27b490e2e826ba8c32546c83bea4e36b8e32107cbc82 = $this->env->getExtension("native_profiler");
        $__internal_9d173932e466a8ccbecf27b490e2e826ba8c32546c83bea4e36b8e32107cbc82->enter($__internal_9d173932e466a8ccbecf27b490e2e826ba8c32546c83bea4e36b8e32107cbc82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d173932e466a8ccbecf27b490e2e826ba8c32546c83bea4e36b8e32107cbc82->leave($__internal_9d173932e466a8ccbecf27b490e2e826ba8c32546c83bea4e36b8e32107cbc82_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_36dfbade08b6ee5b0010909bc1792e64f2c3f9808125498cf140df7d1eb2d0b0 = $this->env->getExtension("native_profiler");
        $__internal_36dfbade08b6ee5b0010909bc1792e64f2c3f9808125498cf140df7d1eb2d0b0->enter($__internal_36dfbade08b6ee5b0010909bc1792e64f2c3f9808125498cf140df7d1eb2d0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_36dfbade08b6ee5b0010909bc1792e64f2c3f9808125498cf140df7d1eb2d0b0->leave($__internal_36dfbade08b6ee5b0010909bc1792e64f2c3f9808125498cf140df7d1eb2d0b0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f769ec9ef87f3a2ba7b21ec7fa84e71d70c52f5d0ae2c0b9771cc28a0e48a484 = $this->env->getExtension("native_profiler");
        $__internal_f769ec9ef87f3a2ba7b21ec7fa84e71d70c52f5d0ae2c0b9771cc28a0e48a484->enter($__internal_f769ec9ef87f3a2ba7b21ec7fa84e71d70c52f5d0ae2c0b9771cc28a0e48a484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f769ec9ef87f3a2ba7b21ec7fa84e71d70c52f5d0ae2c0b9771cc28a0e48a484->leave($__internal_f769ec9ef87f3a2ba7b21ec7fa84e71d70c52f5d0ae2c0b9771cc28a0e48a484_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_974c5887ab7c1ee0f901ccdf27db1a696812304695cc72be01b696e3ef476e7e = $this->env->getExtension("native_profiler");
        $__internal_974c5887ab7c1ee0f901ccdf27db1a696812304695cc72be01b696e3ef476e7e->enter($__internal_974c5887ab7c1ee0f901ccdf27db1a696812304695cc72be01b696e3ef476e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_974c5887ab7c1ee0f901ccdf27db1a696812304695cc72be01b696e3ef476e7e->leave($__internal_974c5887ab7c1ee0f901ccdf27db1a696812304695cc72be01b696e3ef476e7e_prof);

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
