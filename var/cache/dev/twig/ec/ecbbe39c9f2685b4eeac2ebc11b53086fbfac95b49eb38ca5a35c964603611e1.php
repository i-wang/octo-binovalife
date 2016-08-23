<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8721dbafe6f4ee8ada4ab03dca1771fc59d2d28804e82f0ab6f8d9f8069bcdff extends Twig_Template
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
        $__internal_30cc46197d91b94b418cf83fc9cf9636d0a789ce3a5ccdafda87a023096cb498 = $this->env->getExtension("native_profiler");
        $__internal_30cc46197d91b94b418cf83fc9cf9636d0a789ce3a5ccdafda87a023096cb498->enter($__internal_30cc46197d91b94b418cf83fc9cf9636d0a789ce3a5ccdafda87a023096cb498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30cc46197d91b94b418cf83fc9cf9636d0a789ce3a5ccdafda87a023096cb498->leave($__internal_30cc46197d91b94b418cf83fc9cf9636d0a789ce3a5ccdafda87a023096cb498_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_14d81da36aca145dd1d05d768f2e89eda72f2e8979671fb3b013a2ea898eb1d5 = $this->env->getExtension("native_profiler");
        $__internal_14d81da36aca145dd1d05d768f2e89eda72f2e8979671fb3b013a2ea898eb1d5->enter($__internal_14d81da36aca145dd1d05d768f2e89eda72f2e8979671fb3b013a2ea898eb1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_14d81da36aca145dd1d05d768f2e89eda72f2e8979671fb3b013a2ea898eb1d5->leave($__internal_14d81da36aca145dd1d05d768f2e89eda72f2e8979671fb3b013a2ea898eb1d5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_805fb0b07b39fb501892521a7a031ea3b947c09b156524e8f5072bf05af2e565 = $this->env->getExtension("native_profiler");
        $__internal_805fb0b07b39fb501892521a7a031ea3b947c09b156524e8f5072bf05af2e565->enter($__internal_805fb0b07b39fb501892521a7a031ea3b947c09b156524e8f5072bf05af2e565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_805fb0b07b39fb501892521a7a031ea3b947c09b156524e8f5072bf05af2e565->leave($__internal_805fb0b07b39fb501892521a7a031ea3b947c09b156524e8f5072bf05af2e565_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c43a58d7c0cfb11a8e091b859452e7d705266cb310e2ea95ff725346f6b3cf2e = $this->env->getExtension("native_profiler");
        $__internal_c43a58d7c0cfb11a8e091b859452e7d705266cb310e2ea95ff725346f6b3cf2e->enter($__internal_c43a58d7c0cfb11a8e091b859452e7d705266cb310e2ea95ff725346f6b3cf2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c43a58d7c0cfb11a8e091b859452e7d705266cb310e2ea95ff725346f6b3cf2e->leave($__internal_c43a58d7c0cfb11a8e091b859452e7d705266cb310e2ea95ff725346f6b3cf2e_prof);

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
