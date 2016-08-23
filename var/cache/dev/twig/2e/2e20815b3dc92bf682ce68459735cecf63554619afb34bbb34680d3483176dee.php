<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b064134a96bbc1c7650d004d47dc5288319e38bbc6c3fbd2dc53dd4a9fdfce53 extends Twig_Template
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
        $__internal_592ae89b6d950dd5245390dc1e47ab190f1fb3f6b9e258151b53d4b49c4b67ee = $this->env->getExtension("native_profiler");
        $__internal_592ae89b6d950dd5245390dc1e47ab190f1fb3f6b9e258151b53d4b49c4b67ee->enter($__internal_592ae89b6d950dd5245390dc1e47ab190f1fb3f6b9e258151b53d4b49c4b67ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_592ae89b6d950dd5245390dc1e47ab190f1fb3f6b9e258151b53d4b49c4b67ee->leave($__internal_592ae89b6d950dd5245390dc1e47ab190f1fb3f6b9e258151b53d4b49c4b67ee_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_29668347cd73352e369905b566ee91f1c15d9e4dbfe7d022832abd5686bbba7e = $this->env->getExtension("native_profiler");
        $__internal_29668347cd73352e369905b566ee91f1c15d9e4dbfe7d022832abd5686bbba7e->enter($__internal_29668347cd73352e369905b566ee91f1c15d9e4dbfe7d022832abd5686bbba7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_29668347cd73352e369905b566ee91f1c15d9e4dbfe7d022832abd5686bbba7e->leave($__internal_29668347cd73352e369905b566ee91f1c15d9e4dbfe7d022832abd5686bbba7e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7bab660633f97383546bee27adb6a019eedb533fc8d5e807ff1323957e10b848 = $this->env->getExtension("native_profiler");
        $__internal_7bab660633f97383546bee27adb6a019eedb533fc8d5e807ff1323957e10b848->enter($__internal_7bab660633f97383546bee27adb6a019eedb533fc8d5e807ff1323957e10b848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7bab660633f97383546bee27adb6a019eedb533fc8d5e807ff1323957e10b848->leave($__internal_7bab660633f97383546bee27adb6a019eedb533fc8d5e807ff1323957e10b848_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f17e2d6b7b33d440f751bbcd3275a0883546805968c37035b4a98fa24ccaa99c = $this->env->getExtension("native_profiler");
        $__internal_f17e2d6b7b33d440f751bbcd3275a0883546805968c37035b4a98fa24ccaa99c->enter($__internal_f17e2d6b7b33d440f751bbcd3275a0883546805968c37035b4a98fa24ccaa99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f17e2d6b7b33d440f751bbcd3275a0883546805968c37035b4a98fa24ccaa99c->leave($__internal_f17e2d6b7b33d440f751bbcd3275a0883546805968c37035b4a98fa24ccaa99c_prof);

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
