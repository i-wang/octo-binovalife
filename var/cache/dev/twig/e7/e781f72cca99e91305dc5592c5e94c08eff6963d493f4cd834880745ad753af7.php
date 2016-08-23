<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f0b66038061483553813bc996686af31af5755f0f02c1da1c5927d74bd3d7bd5 extends Twig_Template
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
        $__internal_9a68380fc858c7b24c33832e33f63b7c76046d3f448073bdfd6952256d9aff26 = $this->env->getExtension("native_profiler");
        $__internal_9a68380fc858c7b24c33832e33f63b7c76046d3f448073bdfd6952256d9aff26->enter($__internal_9a68380fc858c7b24c33832e33f63b7c76046d3f448073bdfd6952256d9aff26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a68380fc858c7b24c33832e33f63b7c76046d3f448073bdfd6952256d9aff26->leave($__internal_9a68380fc858c7b24c33832e33f63b7c76046d3f448073bdfd6952256d9aff26_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f5d67e01935f6f4dc790f8eb9a93c3ecea152be5d950047081baccec6b670386 = $this->env->getExtension("native_profiler");
        $__internal_f5d67e01935f6f4dc790f8eb9a93c3ecea152be5d950047081baccec6b670386->enter($__internal_f5d67e01935f6f4dc790f8eb9a93c3ecea152be5d950047081baccec6b670386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f5d67e01935f6f4dc790f8eb9a93c3ecea152be5d950047081baccec6b670386->leave($__internal_f5d67e01935f6f4dc790f8eb9a93c3ecea152be5d950047081baccec6b670386_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6ac56e07ec9dc2bf7146008e43a63f221abb03a3c57fcaf6b05000c8435323f5 = $this->env->getExtension("native_profiler");
        $__internal_6ac56e07ec9dc2bf7146008e43a63f221abb03a3c57fcaf6b05000c8435323f5->enter($__internal_6ac56e07ec9dc2bf7146008e43a63f221abb03a3c57fcaf6b05000c8435323f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6ac56e07ec9dc2bf7146008e43a63f221abb03a3c57fcaf6b05000c8435323f5->leave($__internal_6ac56e07ec9dc2bf7146008e43a63f221abb03a3c57fcaf6b05000c8435323f5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_63b746da765e28ca5d0abad9bcfb34810bfa0bb187bd70aaa765888f1db4f451 = $this->env->getExtension("native_profiler");
        $__internal_63b746da765e28ca5d0abad9bcfb34810bfa0bb187bd70aaa765888f1db4f451->enter($__internal_63b746da765e28ca5d0abad9bcfb34810bfa0bb187bd70aaa765888f1db4f451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_63b746da765e28ca5d0abad9bcfb34810bfa0bb187bd70aaa765888f1db4f451->leave($__internal_63b746da765e28ca5d0abad9bcfb34810bfa0bb187bd70aaa765888f1db4f451_prof);

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
