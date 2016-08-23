<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_28323fd5978b51ca4e2602ae00abc8f9e073a8e036c4f7fc9fe0d1b2d6728125 extends Twig_Template
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
        $__internal_43fbff44733ed9d7055b066964cf162e2a51d1e82813cc1e55e83f46d5f5df41 = $this->env->getExtension("native_profiler");
        $__internal_43fbff44733ed9d7055b066964cf162e2a51d1e82813cc1e55e83f46d5f5df41->enter($__internal_43fbff44733ed9d7055b066964cf162e2a51d1e82813cc1e55e83f46d5f5df41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43fbff44733ed9d7055b066964cf162e2a51d1e82813cc1e55e83f46d5f5df41->leave($__internal_43fbff44733ed9d7055b066964cf162e2a51d1e82813cc1e55e83f46d5f5df41_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_afec696f20b3f97dc53a8f7ba71752bb26e589f5edb38a417734cdd900944950 = $this->env->getExtension("native_profiler");
        $__internal_afec696f20b3f97dc53a8f7ba71752bb26e589f5edb38a417734cdd900944950->enter($__internal_afec696f20b3f97dc53a8f7ba71752bb26e589f5edb38a417734cdd900944950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_afec696f20b3f97dc53a8f7ba71752bb26e589f5edb38a417734cdd900944950->leave($__internal_afec696f20b3f97dc53a8f7ba71752bb26e589f5edb38a417734cdd900944950_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_952b359e3278450a98ba4829c148ebd6417254a92cfcc784a9829403d1db969d = $this->env->getExtension("native_profiler");
        $__internal_952b359e3278450a98ba4829c148ebd6417254a92cfcc784a9829403d1db969d->enter($__internal_952b359e3278450a98ba4829c148ebd6417254a92cfcc784a9829403d1db969d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_952b359e3278450a98ba4829c148ebd6417254a92cfcc784a9829403d1db969d->leave($__internal_952b359e3278450a98ba4829c148ebd6417254a92cfcc784a9829403d1db969d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5cdda2253b887e8a33056b5e47d1d5c5ee149946e0df8190e66c11eafaba1d52 = $this->env->getExtension("native_profiler");
        $__internal_5cdda2253b887e8a33056b5e47d1d5c5ee149946e0df8190e66c11eafaba1d52->enter($__internal_5cdda2253b887e8a33056b5e47d1d5c5ee149946e0df8190e66c11eafaba1d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5cdda2253b887e8a33056b5e47d1d5c5ee149946e0df8190e66c11eafaba1d52->leave($__internal_5cdda2253b887e8a33056b5e47d1d5c5ee149946e0df8190e66c11eafaba1d52_prof);

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
