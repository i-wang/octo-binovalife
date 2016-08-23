<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f6d8ab821a2e13e716d5319bdd78e0c1a2be45026ff3802132aebadea59a88ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b00054ff6ff716a36bfd9778770ec69866fd0801dbc12d2a201174646c0edb2 = $this->env->getExtension("native_profiler");
        $__internal_3b00054ff6ff716a36bfd9778770ec69866fd0801dbc12d2a201174646c0edb2->enter($__internal_3b00054ff6ff716a36bfd9778770ec69866fd0801dbc12d2a201174646c0edb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b00054ff6ff716a36bfd9778770ec69866fd0801dbc12d2a201174646c0edb2->leave($__internal_3b00054ff6ff716a36bfd9778770ec69866fd0801dbc12d2a201174646c0edb2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ad45ebc7ff49c5d66d6c4e796a97a34e37c826cdc2ad5cabc9cc6c94c85f5143 = $this->env->getExtension("native_profiler");
        $__internal_ad45ebc7ff49c5d66d6c4e796a97a34e37c826cdc2ad5cabc9cc6c94c85f5143->enter($__internal_ad45ebc7ff49c5d66d6c4e796a97a34e37c826cdc2ad5cabc9cc6c94c85f5143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ad45ebc7ff49c5d66d6c4e796a97a34e37c826cdc2ad5cabc9cc6c94c85f5143->leave($__internal_ad45ebc7ff49c5d66d6c4e796a97a34e37c826cdc2ad5cabc9cc6c94c85f5143_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8127dbefc0bc355e270a27434f28337119469767fe1df027cc27a3caab2fa4d5 = $this->env->getExtension("native_profiler");
        $__internal_8127dbefc0bc355e270a27434f28337119469767fe1df027cc27a3caab2fa4d5->enter($__internal_8127dbefc0bc355e270a27434f28337119469767fe1df027cc27a3caab2fa4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8127dbefc0bc355e270a27434f28337119469767fe1df027cc27a3caab2fa4d5->leave($__internal_8127dbefc0bc355e270a27434f28337119469767fe1df027cc27a3caab2fa4d5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6bc42f2f3773c8707b056f8b9daadd0f4aa5efbb5e414fafff72d6e3fd43ec22 = $this->env->getExtension("native_profiler");
        $__internal_6bc42f2f3773c8707b056f8b9daadd0f4aa5efbb5e414fafff72d6e3fd43ec22->enter($__internal_6bc42f2f3773c8707b056f8b9daadd0f4aa5efbb5e414fafff72d6e3fd43ec22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6bc42f2f3773c8707b056f8b9daadd0f4aa5efbb5e414fafff72d6e3fd43ec22->leave($__internal_6bc42f2f3773c8707b056f8b9daadd0f4aa5efbb5e414fafff72d6e3fd43ec22_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
