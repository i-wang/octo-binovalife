<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_15f043d8a8c6ec98264c3cf5cfa40a4f498b7e8c503bc752927fb8946abf84d9 extends Twig_Template
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
        $__internal_785b9a26f7d64cd4c8f5b5e17d09638805f707ce8cbed86812381075a7eeb10d = $this->env->getExtension("native_profiler");
        $__internal_785b9a26f7d64cd4c8f5b5e17d09638805f707ce8cbed86812381075a7eeb10d->enter($__internal_785b9a26f7d64cd4c8f5b5e17d09638805f707ce8cbed86812381075a7eeb10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_785b9a26f7d64cd4c8f5b5e17d09638805f707ce8cbed86812381075a7eeb10d->leave($__internal_785b9a26f7d64cd4c8f5b5e17d09638805f707ce8cbed86812381075a7eeb10d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_44543488fc7b5f06168378030b3299993f8cd12043ca62fc511d645478f0904b = $this->env->getExtension("native_profiler");
        $__internal_44543488fc7b5f06168378030b3299993f8cd12043ca62fc511d645478f0904b->enter($__internal_44543488fc7b5f06168378030b3299993f8cd12043ca62fc511d645478f0904b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_44543488fc7b5f06168378030b3299993f8cd12043ca62fc511d645478f0904b->leave($__internal_44543488fc7b5f06168378030b3299993f8cd12043ca62fc511d645478f0904b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5dd8c250be404cb5347441c4e10cb3508d0c1a89b0638389c00029b757f6355 = $this->env->getExtension("native_profiler");
        $__internal_f5dd8c250be404cb5347441c4e10cb3508d0c1a89b0638389c00029b757f6355->enter($__internal_f5dd8c250be404cb5347441c4e10cb3508d0c1a89b0638389c00029b757f6355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f5dd8c250be404cb5347441c4e10cb3508d0c1a89b0638389c00029b757f6355->leave($__internal_f5dd8c250be404cb5347441c4e10cb3508d0c1a89b0638389c00029b757f6355_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6f75facb08bb43706dfdabb10fed4f6e46e21e7aa7e9164fc89eefe4a8d7036 = $this->env->getExtension("native_profiler");
        $__internal_c6f75facb08bb43706dfdabb10fed4f6e46e21e7aa7e9164fc89eefe4a8d7036->enter($__internal_c6f75facb08bb43706dfdabb10fed4f6e46e21e7aa7e9164fc89eefe4a8d7036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c6f75facb08bb43706dfdabb10fed4f6e46e21e7aa7e9164fc89eefe4a8d7036->leave($__internal_c6f75facb08bb43706dfdabb10fed4f6e46e21e7aa7e9164fc89eefe4a8d7036_prof);

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
