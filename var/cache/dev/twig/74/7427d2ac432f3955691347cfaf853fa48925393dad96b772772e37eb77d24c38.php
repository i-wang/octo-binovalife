<?php

/* base.html.twig */
class __TwigTemplate_4642355fbb158560b9a251a4d211cd57c40c121db92330bc8d00b4ce0d639fee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dab3f6343be86b45287b8f20c37239fb0d4d786b932dd24aeb7d1c56ec6fd826 = $this->env->getExtension("native_profiler");
        $__internal_dab3f6343be86b45287b8f20c37239fb0d4d786b932dd24aeb7d1c56ec6fd826->enter($__internal_dab3f6343be86b45287b8f20c37239fb0d4d786b932dd24aeb7d1c56ec6fd826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_dab3f6343be86b45287b8f20c37239fb0d4d786b932dd24aeb7d1c56ec6fd826->leave($__internal_dab3f6343be86b45287b8f20c37239fb0d4d786b932dd24aeb7d1c56ec6fd826_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2eccc96d895fa7a156ddb286472b4f7acfbde0498067c5237695e796ef42a8f = $this->env->getExtension("native_profiler");
        $__internal_a2eccc96d895fa7a156ddb286472b4f7acfbde0498067c5237695e796ef42a8f->enter($__internal_a2eccc96d895fa7a156ddb286472b4f7acfbde0498067c5237695e796ef42a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a2eccc96d895fa7a156ddb286472b4f7acfbde0498067c5237695e796ef42a8f->leave($__internal_a2eccc96d895fa7a156ddb286472b4f7acfbde0498067c5237695e796ef42a8f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_988eb12fb808e93f405d988a4bbd20ad05a2a62eef8201fc6afa0219a8986a8b = $this->env->getExtension("native_profiler");
        $__internal_988eb12fb808e93f405d988a4bbd20ad05a2a62eef8201fc6afa0219a8986a8b->enter($__internal_988eb12fb808e93f405d988a4bbd20ad05a2a62eef8201fc6afa0219a8986a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_988eb12fb808e93f405d988a4bbd20ad05a2a62eef8201fc6afa0219a8986a8b->leave($__internal_988eb12fb808e93f405d988a4bbd20ad05a2a62eef8201fc6afa0219a8986a8b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f37e2dfd1e3a2da17d92a9bdff0d9e79493d0ea2ebe15e55359e8282c7016aac = $this->env->getExtension("native_profiler");
        $__internal_f37e2dfd1e3a2da17d92a9bdff0d9e79493d0ea2ebe15e55359e8282c7016aac->enter($__internal_f37e2dfd1e3a2da17d92a9bdff0d9e79493d0ea2ebe15e55359e8282c7016aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f37e2dfd1e3a2da17d92a9bdff0d9e79493d0ea2ebe15e55359e8282c7016aac->leave($__internal_f37e2dfd1e3a2da17d92a9bdff0d9e79493d0ea2ebe15e55359e8282c7016aac_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1510bcf26b5d3d25a8e78c3b5817433620133c4e0c58eb9ce1d9ff8e87867a05 = $this->env->getExtension("native_profiler");
        $__internal_1510bcf26b5d3d25a8e78c3b5817433620133c4e0c58eb9ce1d9ff8e87867a05->enter($__internal_1510bcf26b5d3d25a8e78c3b5817433620133c4e0c58eb9ce1d9ff8e87867a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1510bcf26b5d3d25a8e78c3b5817433620133c4e0c58eb9ce1d9ff8e87867a05->leave($__internal_1510bcf26b5d3d25a8e78c3b5817433620133c4e0c58eb9ce1d9ff8e87867a05_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
