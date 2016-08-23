<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f12390f90008e4cdbcf345417ba1dfe86c6961432a546663c2a825a61895eb32 extends Twig_Template
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
        $__internal_e5aecab12d6aae38b8bc9ba79d991daae7293ad31ffa4babbbf72286ec15375d = $this->env->getExtension("native_profiler");
        $__internal_e5aecab12d6aae38b8bc9ba79d991daae7293ad31ffa4babbbf72286ec15375d->enter($__internal_e5aecab12d6aae38b8bc9ba79d991daae7293ad31ffa4babbbf72286ec15375d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5aecab12d6aae38b8bc9ba79d991daae7293ad31ffa4babbbf72286ec15375d->leave($__internal_e5aecab12d6aae38b8bc9ba79d991daae7293ad31ffa4babbbf72286ec15375d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_139da5aec37b89432960fc2cb4651da2e97660144875b65825aff6e11b0517b0 = $this->env->getExtension("native_profiler");
        $__internal_139da5aec37b89432960fc2cb4651da2e97660144875b65825aff6e11b0517b0->enter($__internal_139da5aec37b89432960fc2cb4651da2e97660144875b65825aff6e11b0517b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_139da5aec37b89432960fc2cb4651da2e97660144875b65825aff6e11b0517b0->leave($__internal_139da5aec37b89432960fc2cb4651da2e97660144875b65825aff6e11b0517b0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ac9c72174e3e430fb43200a23b1b5baaf6741517c28761e11febe4a42fd74f48 = $this->env->getExtension("native_profiler");
        $__internal_ac9c72174e3e430fb43200a23b1b5baaf6741517c28761e11febe4a42fd74f48->enter($__internal_ac9c72174e3e430fb43200a23b1b5baaf6741517c28761e11febe4a42fd74f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ac9c72174e3e430fb43200a23b1b5baaf6741517c28761e11febe4a42fd74f48->leave($__internal_ac9c72174e3e430fb43200a23b1b5baaf6741517c28761e11febe4a42fd74f48_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_53d0ad162b6c7ce1efdc22cb3a35e85e51cf8b05a7483c4e03ad3f0408d6bb41 = $this->env->getExtension("native_profiler");
        $__internal_53d0ad162b6c7ce1efdc22cb3a35e85e51cf8b05a7483c4e03ad3f0408d6bb41->enter($__internal_53d0ad162b6c7ce1efdc22cb3a35e85e51cf8b05a7483c4e03ad3f0408d6bb41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_53d0ad162b6c7ce1efdc22cb3a35e85e51cf8b05a7483c4e03ad3f0408d6bb41->leave($__internal_53d0ad162b6c7ce1efdc22cb3a35e85e51cf8b05a7483c4e03ad3f0408d6bb41_prof);

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
