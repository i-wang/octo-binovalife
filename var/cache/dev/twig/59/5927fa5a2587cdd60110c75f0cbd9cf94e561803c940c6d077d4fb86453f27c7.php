<?php

/* base.html.twig */
class __TwigTemplate_4347a1e5b6cc5c426ad2697117a0aebc9a507dfd82a9c0728119e0943ea1682f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'header_navigation_links' => array($this, 'block_header_navigation_links'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b1e625e3119e15b66c7b2f1ac28b522c1dc8094cc88ff656e23850702c03c9a = $this->env->getExtension("native_profiler");
        $__internal_6b1e625e3119e15b66c7b2f1ac28b522c1dc8094cc88ff656e23850702c03c9a->enter($__internal_6b1e625e3119e15b66c7b2f1ac28b522c1dc8094cc88ff656e23850702c03c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body id=\"";
        // line 26
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

        ";
        // line 28
        $this->displayBlock('header', $context, $blocks);
        // line 87
        echo "
        <div class=\"container body-container\">
            ";
        // line 89
        $this->displayBlock('body', $context, $blocks);
        // line 108
        echo "        </div>

        ";
        // line 110
        $this->displayBlock('footer', $context, $blocks);
        // line 129
        echo "
        ";
        // line 130
        $this->displayBlock('javascripts', $context, $blocks);
        // line 145
        echo "
        ";
        // line 149
        echo "        <!-- Page rendered on ";
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, "now", "long", "long", null, "UTC"), "html", null, true);
        echo " -->
    </body>
</html>
";
        
        $__internal_6b1e625e3119e15b66c7b2f1ac28b522c1dc8094cc88ff656e23850702c03c9a->leave($__internal_6b1e625e3119e15b66c7b2f1ac28b522c1dc8094cc88ff656e23850702c03c9a_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_7dd03f00a41cccb515767152bfc5d19e0efbaea5ef1eb2e240bb5ab75e0b42d2 = $this->env->getExtension("native_profiler");
        $__internal_7dd03f00a41cccb515767152bfc5d19e0efbaea5ef1eb2e240bb5ab75e0b42d2->enter($__internal_7dd03f00a41cccb515767152bfc5d19e0efbaea5ef1eb2e240bb5ab75e0b42d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony Demo application";
        
        $__internal_7dd03f00a41cccb515767152bfc5d19e0efbaea5ef1eb2e240bb5ab75e0b42d2->leave($__internal_7dd03f00a41cccb515767152bfc5d19e0efbaea5ef1eb2e240bb5ab75e0b42d2_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_265839a26db41ad1a13055ab75c67cf292ffb4bc0681e7a99ec34bbf0cdf0e6f = $this->env->getExtension("native_profiler");
        $__internal_265839a26db41ad1a13055ab75c67cf292ffb4bc0681e7a99ec34bbf0cdf0e6f->enter($__internal_265839a26db41ad1a13055ab75c67cf292ffb4bc0681e7a99ec34bbf0cdf0e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        ";
        // line 20
        echo "
            <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_265839a26db41ad1a13055ab75c67cf292ffb4bc0681e7a99ec34bbf0cdf0e6f->leave($__internal_265839a26db41ad1a13055ab75c67cf292ffb4bc0681e7a99ec34bbf0cdf0e6f_prof);

    }

    // line 26
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_28c4cb90d004f42721b2a5d91a66940e65512973fde0d710f497511e47517960 = $this->env->getExtension("native_profiler");
        $__internal_28c4cb90d004f42721b2a5d91a66940e65512973fde0d710f497511e47517960->enter($__internal_28c4cb90d004f42721b2a5d91a66940e65512973fde0d710f497511e47517960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_28c4cb90d004f42721b2a5d91a66940e65512973fde0d710f497511e47517960->leave($__internal_28c4cb90d004f42721b2a5d91a66940e65512973fde0d710f497511e47517960_prof);

    }

    // line 28
    public function block_header($context, array $blocks = array())
    {
        $__internal_e19fb26cbbf8f70055718c9d035746c2ca138d6bd705663f0ce5c25cf6de2c44 = $this->env->getExtension("native_profiler");
        $__internal_e19fb26cbbf8f70055718c9d035746c2ca138d6bd705663f0ce5c25cf6de2c44->enter($__internal_e19fb26cbbf8f70055718c9d035746c2ca138d6bd705663f0ce5c25cf6de2c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 29
        echo "            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">

                            </a>

                            <button type=\"button\" class=\"navbar-toggle\"
                                    data-toggle=\"collapse\"
                                    data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">

                                ";
        // line 49
        $this->displayBlock('header_navigation_links', $context, $blocks);
        // line 64
        echo "
                                ";
        // line 65
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 66
            echo "                                    <li>
                                        <a href=\"";
            // line 67
            echo $this->env->getExtension('routing')->getPath("security_logout");
            echo "\">
                                            <i class=\"fa fa-sign-out\"></i> ";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.logout"), "html", null, true);
            echo "
                                        </a>
                                    </li>
                                ";
        }
        // line 72
        echo "
                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-globe\"></i> <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu locales\" role=\"menu\">
                                        ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('app.extension')->getLocales());
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 77
            echo "                                            <li ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == $this->getAttribute($context["locale"], "code", array()))) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route", 1 => "blog_index"), "method"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params", 1 => array()), "method"), array("_locale" => $this->getAttribute($context["locale"], "code", array())))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["locale"], "name", array())), "html", null, true);
            echo "</a></li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        ";
        
        $__internal_e19fb26cbbf8f70055718c9d035746c2ca138d6bd705663f0ce5c25cf6de2c44->leave($__internal_e19fb26cbbf8f70055718c9d035746c2ca138d6bd705663f0ce5c25cf6de2c44_prof);

    }

    // line 49
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_0c0b1dd9f73d8796df713c6e22eed70072d5852c817bae16fa1ea8e6a21baf50 = $this->env->getExtension("native_profiler");
        $__internal_0c0b1dd9f73d8796df713c6e22eed70072d5852c817bae16fa1ea8e6a21baf50->enter($__internal_0c0b1dd9f73d8796df713c6e22eed70072d5852c817bae16fa1ea8e6a21baf50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        // line 50
        echo "                                    <li>
                                        <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("blog_index");
        echo "\">
                                            <i class=\"fa fa-home\"></i> ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.homepage"), "html", null, true);
        echo "
                                        </a>
                                    </li>

                                    ";
        // line 56
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 57
            echo "                                        <li>
                                            <a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("admin_post_index");
            echo "\">
                                                <i class=\"fa fa-lock\"></i> ";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.admin"), "html", null, true);
            echo "
                                            </a>
                                        </li>
                                    ";
        }
        // line 63
        echo "                                ";
        
        $__internal_0c0b1dd9f73d8796df713c6e22eed70072d5852c817bae16fa1ea8e6a21baf50->leave($__internal_0c0b1dd9f73d8796df713c6e22eed70072d5852c817bae16fa1ea8e6a21baf50_prof);

    }

    // line 89
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f32ce7845cbe2828b064d63717429d9456de43afcb65475bab0a5e94260a60b = $this->env->getExtension("native_profiler");
        $__internal_6f32ce7845cbe2828b064d63717429d9456de43afcb65475bab0a5e94260a60b->enter($__internal_6f32ce7845cbe2828b064d63717429d9456de43afcb65475bab0a5e94260a60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 90
        echo "                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-9\">
                        ";
        // line 92
        echo twig_include($this->env, $context, "default/_flash_messages.html.twig");
        echo "

                        ";
        // line 94
        $this->displayBlock('main', $context, $blocks);
        // line 95
        echo "                    </div>

                    <div id=\"sidebar\" class=\"col-sm-3\">
                        ";
        // line 98
        $this->displayBlock('sidebar', $context, $blocks);
        // line 105
        echo "                    </div>
                </div>
            ";
        
        $__internal_6f32ce7845cbe2828b064d63717429d9456de43afcb65475bab0a5e94260a60b->leave($__internal_6f32ce7845cbe2828b064d63717429d9456de43afcb65475bab0a5e94260a60b_prof);

    }

    // line 94
    public function block_main($context, array $blocks = array())
    {
        $__internal_d0db024235834832d7dda83a2fee3ae8a297cf92848ae47ed93e576c8bfbe5a4 = $this->env->getExtension("native_profiler");
        $__internal_d0db024235834832d7dda83a2fee3ae8a297cf92848ae47ed93e576c8bfbe5a4->enter($__internal_d0db024235834832d7dda83a2fee3ae8a297cf92848ae47ed93e576c8bfbe5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_d0db024235834832d7dda83a2fee3ae8a297cf92848ae47ed93e576c8bfbe5a4->leave($__internal_d0db024235834832d7dda83a2fee3ae8a297cf92848ae47ed93e576c8bfbe5a4_prof);

    }

    // line 98
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_573aea54c75c3ba1c3f065c3e0ad0a99d9c99b72c435ca4e82e02b147514c7c2 = $this->env->getExtension("native_profiler");
        $__internal_573aea54c75c3ba1c3f065c3e0ad0a99d9c99b72c435ca4e82e02b147514c7c2->enter($__internal_573aea54c75c3ba1c3f065c3e0ad0a99d9c99b72c435ca4e82e02b147514c7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 99
        echo "                            ";
        echo $this->env->getExtension('http_kernel')->renderFragmentStrategy("esi", $this->env->getExtension('http_kernel')->controller("FrameworkBundle:Template:template", array("template" => "blog/about.html.twig", "sharedAge" => 600, "_locale" => $this->getAttribute($this->getAttribute(        // line 102
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()))));
        // line 103
        echo "
                        ";
        
        $__internal_573aea54c75c3ba1c3f065c3e0ad0a99d9c99b72c435ca4e82e02b147514c7c2->leave($__internal_573aea54c75c3ba1c3f065c3e0ad0a99d9c99b72c435ca4e82e02b147514c7c2_prof);

    }

    // line 110
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7be4ea48e8dbfe207cab5f4fea78f68e4ea3003c774dccd71b11a86f84fa7b63 = $this->env->getExtension("native_profiler");
        $__internal_7be4ea48e8dbfe207cab5f4fea78f68e4ea3003c774dccd71b11a86f84fa7b63->enter($__internal_7be4ea48e8dbfe207cab5f4fea78f68e4ea3003c774dccd71b11a86f84fa7b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 111
        echo "            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-6\">
                            <p>&copy; ";
        // line 115
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - The Symfony Project</p>
                            <p>";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("mit_license"), "html", null, true);
        echo "</p>
                        </div>
                        <div id=\"footer-resources\" class=\"col-md-6\">
                            <p>
                                <a href=\"https://twitter.com/symfony\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"https://www.facebook.com/SensioLabs\"><i class=\"fa fa-facebook\"></i></a>
                                <a href=\"https://symfony.com/blog/\"><i class=\"fa fa-rss\"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        ";
        
        $__internal_7be4ea48e8dbfe207cab5f4fea78f68e4ea3003c774dccd71b11a86f84fa7b63->leave($__internal_7be4ea48e8dbfe207cab5f4fea78f68e4ea3003c774dccd71b11a86f84fa7b63_prof);

    }

    // line 130
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d904978e7fecb744e1a5593b3815a0719fe47fce164277d87b47478cc342b41c = $this->env->getExtension("native_profiler");
        $__internal_d904978e7fecb744e1a5593b3815a0719fe47fce164277d87b47478cc342b41c->enter($__internal_d904978e7fecb744e1a5593b3815a0719fe47fce164277d87b47478cc342b41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 131
        echo "        ";
        // line 142
        echo "
            <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_d904978e7fecb744e1a5593b3815a0719fe47fce164277d87b47478cc342b41c->leave($__internal_d904978e7fecb744e1a5593b3815a0719fe47fce164277d87b47478cc342b41c_prof);

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
        return array (  378 => 143,  375 => 142,  373 => 131,  367 => 130,  347 => 116,  343 => 115,  337 => 111,  331 => 110,  323 => 103,  321 => 102,  319 => 99,  313 => 98,  302 => 94,  293 => 105,  291 => 98,  286 => 95,  284 => 94,  279 => 92,  275 => 90,  269 => 89,  262 => 63,  255 => 59,  251 => 58,  248 => 57,  246 => 56,  239 => 52,  235 => 51,  232 => 50,  226 => 49,  212 => 79,  197 => 77,  193 => 76,  187 => 72,  180 => 68,  176 => 67,  173 => 66,  171 => 65,  168 => 64,  166 => 49,  147 => 33,  141 => 29,  135 => 28,  124 => 26,  115 => 21,  112 => 20,  110 => 9,  104 => 8,  92 => 6,  80 => 149,  77 => 145,  75 => 130,  72 => 129,  70 => 110,  66 => 108,  64 => 89,  60 => 87,  58 => 28,  53 => 26,  46 => 23,  44 => 8,  39 => 6,  32 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1"/>*/
/*         <title>{% block title %}Symfony Demo application{% endblock %}</title>*/
/* */
/*         {% block stylesheets %}*/
/*         {# uncomment the following lines to compile SCSS assets with Assetic*/
/* */
/*             {% stylesheets filter="scssphp" output="css/app.css"*/
/*                 "%kernel.root_dir%/Resources/assets/scss/bootstrap-flatly.scss"*/
/*                 "%kernel.root_dir%/Resources/assets/scss/font-awesome.scss"*/
/*                 "%kernel.root_dir%/Resources/assets/css/*.css"*/
/*                 "%kernel.root_dir%/Resources/assets/scss/main.scss"*/
/*             %}*/
/*                 <link rel="stylesheet" href="{{ asset_url }}" />*/
/*             {% endstylesheets %}*/
/*         #}*/
/* */
/*             <link rel="stylesheet" href="{{ asset('css/app.css') }}">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/* */
/*     <body id="{% block body_id %}{% endblock %}">*/
/* */
/*         {% block header %}*/
/*             <header>*/
/*                 <div class="navbar navbar-default navbar-static-top" role="navigation">*/
/*                     <div class="container">*/
/*                         <div class="navbar-header">*/
/*                             <a class="navbar-brand" href="{{ path('homepage') }}">*/
/* */
/*                             </a>*/
/* */
/*                             <button type="button" class="navbar-toggle"*/
/*                                     data-toggle="collapse"*/
/*                                     data-target=".navbar-collapse">*/
/*                                 <span class="sr-only">Toggle navigation</span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                             </button>*/
/*                         </div>*/
/*                         <div class="navbar-collapse collapse">*/
/*                             <ul class="nav navbar-nav navbar-right">*/
/* */
/*                                 {% block header_navigation_links %}*/
/*                                     <li>*/
/*                                         <a href="{{ path('blog_index') }}">*/
/*                                             <i class="fa fa-home"></i> {{ 'menu.homepage'|trans }}*/
/*                                         </a>*/
/*                                     </li>*/
/* */
/*                                     {% if is_granted('ROLE_ADMIN') %}*/
/*                                         <li>*/
/*                                             <a href="{{ path('admin_post_index') }}">*/
/*                                                 <i class="fa fa-lock"></i> {{ 'menu.admin'|trans }}*/
/*                                             </a>*/
/*                                         </li>*/
/*                                     {% endif %}*/
/*                                 {% endblock %}*/
/* */
/*                                 {% if app.user %}*/
/*                                     <li>*/
/*                                         <a href="{{ path('security_logout') }}">*/
/*                                             <i class="fa fa-sign-out"></i> {{ 'menu.logout'|trans }}*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 {% endif %}*/
/* */
/*                                 <li class="dropdown">*/
/*                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-globe"></i> <span class="caret"></span></a>*/
/*                                     <ul class="dropdown-menu locales" role="menu">*/
/*                                         {% for locale in locales() %}*/
/*                                             <li {% if app.request.locale == locale.code %}class="active"{% endif %}><a href="{{ path(app.request.get('_route', 'blog_index'), app.request.get('_route_params', [])|merge({ _locale: locale.code })) }}">{{ locale.name|capitalize }}</a></li>*/
/*                                         {% endfor %}*/
/*                                     </ul>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </header>*/
/*         {% endblock %}*/
/* */
/*         <div class="container body-container">*/
/*             {% block body %}*/
/*                 <div class="row">*/
/*                     <div id="main" class="col-sm-9">*/
/*                         {{ include('default/_flash_messages.html.twig') }}*/
/* */
/*                         {% block main %}{% endblock %}*/
/*                     </div>*/
/* */
/*                     <div id="sidebar" class="col-sm-3">*/
/*                         {% block sidebar %}*/
/*                             {{ render_esi(controller('FrameworkBundle:Template:template', {*/
/*                                 'template': 'blog/about.html.twig',*/
/*                                 'sharedAge': 600,*/
/*                                 '_locale': app.request.locale*/
/*                             })) }}*/
/*                         {% endblock %}*/
/*                     </div>*/
/*                 </div>*/
/*             {% endblock %}*/
/*         </div>*/
/* */
/*         {% block footer %}*/
/*             <footer>*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div id="footer-copyright" class="col-md-6">*/
/*                             <p>&copy; {{ 'now'|date('Y') }} - The Symfony Project</p>*/
/*                             <p>{{ 'mit_license'|trans }}</p>*/
/*                         </div>*/
/*                         <div id="footer-resources" class="col-md-6">*/
/*                             <p>*/
/*                                 <a href="https://twitter.com/symfony"><i class="fa fa-twitter"></i></a>*/
/*                                 <a href="https://www.facebook.com/SensioLabs"><i class="fa fa-facebook"></i></a>*/
/*                                 <a href="https://symfony.com/blog/"><i class="fa fa-rss"></i></a>*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </footer>*/
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*         {# uncomment the following lines to combine and minimize JavaScript assets with Assetic*/
/*             {% javascripts filter="?jsqueeze" output="js/app.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/jquery-2.1.4.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/moment.min.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/bootstrap-3.3.4.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/highlight.pack.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/bootstrap-datetimepicker.min.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/main.js" %}*/
/*                 <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*         #}*/
/* */
/*             <script src="{{ asset('js/app.js') }}"></script>*/
/*         {% endblock %}*/
/* */
/*         {# it's not mandatory to set the timezone in localizeddate(). This is done to*/
/*            avoid errors when the 'intl' PHP extension is not available and the application*/
/*            is forced to use the limited "intl polyfill", which only supports UTC and GMT #}*/
/*         <!-- Page rendered on {{ 'now'|localizeddate('long', 'long', null, 'UTC') }} -->*/
/*     </body>*/
/* </html>*/
/* */
