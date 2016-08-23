<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a4015632dbfa74dd6fb6c7c7c22cad2b7d58d4413a732b3b4ad5ffb22a31fba0 extends Twig_Template
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
        $__internal_a82a8225ec319b4ea9cf20e99085efd5efcf6a4d619c956be5d075accc5068c3 = $this->env->getExtension("native_profiler");
        $__internal_a82a8225ec319b4ea9cf20e99085efd5efcf6a4d619c956be5d075accc5068c3->enter($__internal_a82a8225ec319b4ea9cf20e99085efd5efcf6a4d619c956be5d075accc5068c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a82a8225ec319b4ea9cf20e99085efd5efcf6a4d619c956be5d075accc5068c3->leave($__internal_a82a8225ec319b4ea9cf20e99085efd5efcf6a4d619c956be5d075accc5068c3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_15ab0dcdcb29edefd202d4890314a10ea8e57e98396632b8291e371e3c0fe26a = $this->env->getExtension("native_profiler");
        $__internal_15ab0dcdcb29edefd202d4890314a10ea8e57e98396632b8291e371e3c0fe26a->enter($__internal_15ab0dcdcb29edefd202d4890314a10ea8e57e98396632b8291e371e3c0fe26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_15ab0dcdcb29edefd202d4890314a10ea8e57e98396632b8291e371e3c0fe26a->leave($__internal_15ab0dcdcb29edefd202d4890314a10ea8e57e98396632b8291e371e3c0fe26a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6dcf2f7c96cb9c3bce0adb856fdf1b139c787268ffbc5b704ebdaecd54502383 = $this->env->getExtension("native_profiler");
        $__internal_6dcf2f7c96cb9c3bce0adb856fdf1b139c787268ffbc5b704ebdaecd54502383->enter($__internal_6dcf2f7c96cb9c3bce0adb856fdf1b139c787268ffbc5b704ebdaecd54502383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6dcf2f7c96cb9c3bce0adb856fdf1b139c787268ffbc5b704ebdaecd54502383->leave($__internal_6dcf2f7c96cb9c3bce0adb856fdf1b139c787268ffbc5b704ebdaecd54502383_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7ffcd3a15e802cd5cf43982ad7159505fc741875bce62593ed8d953e432d5ffe = $this->env->getExtension("native_profiler");
        $__internal_7ffcd3a15e802cd5cf43982ad7159505fc741875bce62593ed8d953e432d5ffe->enter($__internal_7ffcd3a15e802cd5cf43982ad7159505fc741875bce62593ed8d953e432d5ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7ffcd3a15e802cd5cf43982ad7159505fc741875bce62593ed8d953e432d5ffe->leave($__internal_7ffcd3a15e802cd5cf43982ad7159505fc741875bce62593ed8d953e432d5ffe_prof);

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
