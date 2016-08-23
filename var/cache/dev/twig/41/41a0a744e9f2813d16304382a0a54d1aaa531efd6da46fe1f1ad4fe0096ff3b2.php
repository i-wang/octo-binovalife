<?php

/* default/index.html.twig */
class __TwigTemplate_1500d1b6d5168e3e059a9aa0ba5c174449f20507459468b4f4cfcfba66c91745 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5bd27535a2db369c52327cb7a70b49301387e677ff376f148e608bb7427f07b = $this->env->getExtension("native_profiler");
        $__internal_b5bd27535a2db369c52327cb7a70b49301387e677ff376f148e608bb7427f07b->enter($__internal_b5bd27535a2db369c52327cb7a70b49301387e677ff376f148e608bb7427f07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html ng-app=\"app\">
<head>
  <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"format-detection\" content=\"telephone=no\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

            ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 41
        echo "            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

</head>
<body class=\"pace-done\">
    <!-- <loader></loader> -->
    <!-- Static navbar -->
    <!-- <header ng-if=\"showNav\"></header> -->
    <!-- <div class=\"container page-wrapper\">
      <div ng-class=\"{ 'alert': flash, 'alert-success': flash.type === 'success', 'alert-danger': flash.type === 'error' }\" ng-if=\"flash\" ng-bind=\"flash.message\"></div>

    </div> -->
    <!-- Custom footer -  -->
    <!-- <uifooter></uifooter> -->
    <!-- <div ng-view></div> -->
    <div class=\"container page-wrapper\" style=\"background:#548235;z-index:-5000;width:100%;height:100%\">
    <nav class=\"navbar navbar-inverse yamm navbar-static-top\" >
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\"> </a>
            </div>

            <div  style=\"height: 1px;\" aria-expanded=\"false\" id=\"navbar\" class=\"navbar-collapse collapse\">

                <ul class=\"nav navbar-nav navbar-right navbar-top-drops\">
                  ";
        // line 71
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 72
            echo "                      <li>
                          <a href=\"";
            // line 73
            echo $this->env->getExtension('routing')->getPath("security_logout");
            echo "\">
                              <input type=\"hidden\" ng-model=\"firstname\" value=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "\">
                              <i class=\"fa fa-sign-out\"></i> ";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.logout"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                          </a>
                    </li>
                ";
        }
        // line 79
        echo "                    <li class=\"dropdown profile-dropdown\">
                        <a  class=\"dropdown-toggle button-wave\" data-toggle=\"dropdown\" role=\"button\" style=\"background:#fff;padding:4px 20px;font-size:80%;color:#000\">
                          ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('app.extension')->getLocales());
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 82
            echo "                              ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == $this->getAttribute($context["locale"], "code", array()))) {
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["locale"], "name", array())), "html", null, true);
                echo " ";
            }
            // line 83
            echo "                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                          &nbsp;&nbsp;&nbsp;<i class=\"fa fa-caret-down\" style=\"color:#548235\"></i></a>
                        <ul class=\"dropdown-menu\" style=\"border-radius:0;margin-top:1px\" >
                            <!-- <li><a href=\"#/customers\" style=\"padding:4px 10px;font-size:80%;margin-top:6px\">French</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#/logout\" style=\"padding:4px 10px;font-size:80%\">Deutch</a></li> -->
                            ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('app.extension')->getLocales());
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 90
            echo "                                <li  ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == $this->getAttribute($context["locale"], "code", array()))) {
                echo " ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route", 1 => "blog_index"), "method"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params", 1 => array()), "method"), array("_locale" => $this->getAttribute($context["locale"], "code", array())))), "html", null, true);
            echo "\" style=\"padding:4px 10px;font-size:80%;margin-top:6px\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["locale"], "name", array())), "html", null, true);
            echo "</a></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                        </ul>
                    </li>


                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>


    ";
        // line 102
        $this->displayBlock('javascripts', $context, $blocks);
        // line 145
        echo "

    <!-- <script src=\"../../assets/libs/jquery-2.1.1.min.js\"></script>
    <script src=\"../../assets/libs/angular.js\"></script>

    <script src=\"../../assets/libs/angular-route.js\"></script>
    <script src=\"../../assets/libs/angular-cookies.js\"></script>
    <script type=\"text/javascript\" src=\"../../assets/libs/angular-animate.js\"></script>
    <script src=\"../../assets/libs/angular-mocks.js\"></script>



    <script type=\"text/javascript\" src=\"../../assets/js/bootstrap.js\"></script>
    <!-- Libs to remove  -->
    <!-- <script src=\"../../assets/libs/angular-sanitize.min.js\" data-semver=\"1.5.5\"></script>
    <script src=\"../../assets/libs/angular-strap.js\" data-semver=\"v2.3.8\"></script>
    <script src=\"../../assets/libs/angular-strap.tpl.js\" data-semver=\"v2.3.8\"></script>

    <script src=\"../../assets/libs/crypto-js.js\"></script>
    <script src=\"../../assets/libs/sha1.js\"></script> -->




    <!-- <script src=\"app/app.js\"></script>

    <script src=\"partials/loader/loader.service.js\"></script>
    <script src=\"partials/loader/loader.controller.js\"></script>
    <script src=\"partials/header/header.controller.js\"></script>
    <script src=\"partials/footer/footer.controller.js\"></script> -->
    <!-- <script src=\"partials/ui/ui.controller.js\"></script> -->
    <!-- <script src=\"partials/ui/tab.controller.js\"></script> -->

    <!-- Local storage service  -->
    <!-- <script src=\"components/authenticate/auth.users.service.js\"></script>
    <script src=\"components/customers/customers.service.js\"></script>
    <script src=\"components/customers/customers.controller.js\"></script>
    <script src=\"components/authenticate/login.controller.js\"></script>
    <script src=\"components/authenticate/logout.controller.js\"></script>
    <script src=\"components/authenticate/authentication.service.js\"></script>
    <script src=\"components/customers/customer.details.controller.js\"></script> -->
    <!-- <script type=\"text/javascript\" src=\"https://secure.skypeassets.com/i/scom/js/skype-uri.js\"></script> -->

</body>
</html>
";
        
        $__internal_b5bd27535a2db369c52327cb7a70b49301387e677ff376f148e608bb7427f07b->leave($__internal_b5bd27535a2db369c52327cb7a70b49301387e677ff376f148e608bb7427f07b_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1a65647a78ad49dba2f184be7649c8ebfe80201c0b1a64d0c456cbd8e236894 = $this->env->getExtension("native_profiler");
        $__internal_b1a65647a78ad49dba2f184be7649c8ebfe80201c0b1a64d0c456cbd8e236894->enter($__internal_b1a65647a78ad49dba2f184be7649c8ebfe80201c0b1a64d0c456cbd8e236894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Binovalife :: WEB OFFICE";
        
        $__internal_b1a65647a78ad49dba2f184be7649c8ebfe80201c0b1a64d0c456cbd8e236894->leave($__internal_b1a65647a78ad49dba2f184be7649c8ebfe80201c0b1a64d0c456cbd8e236894_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_02e2694664516268011012f074681c91ba004b408ecafd38640a35e20041b9a3 = $this->env->getExtension("native_profiler");
        $__internal_02e2694664516268011012f074681c91ba004b408ecafd38640a35e20041b9a3->enter($__internal_02e2694664516268011012f074681c91ba004b408ecafd38640a35e20041b9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 22
        echo "            ";
        // line 33
        echo "                <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
                <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
                <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/waves.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
                <!-- <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/nanoscroller.css"), "html", null, true);
        echo "\"> -->
                <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


            ";
        
        $__internal_02e2694664516268011012f074681c91ba004b408ecafd38640a35e20041b9a3->leave($__internal_02e2694664516268011012f074681c91ba004b408ecafd38640a35e20041b9a3_prof);

    }

    // line 102
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_88d0c6e0c12a1ec53a817512457e6e4c5b74170b27f86af81f2c04daf70466bd = $this->env->getExtension("native_profiler");
        $__internal_88d0c6e0c12a1ec53a817512457e6e4c5b74170b27f86af81f2c04daf70466bd->enter($__internal_88d0c6e0c12a1ec53a817512457e6e4c5b74170b27f86af81f2c04daf70466bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 103
        echo "    ";
        // line 114
        echo "

        <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/jquery-2.1.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-route.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-cookies.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-animate.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-mocks.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>

          <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>

          <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/loader.service.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/loader.controller.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/header.controller.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footer.controller.js"), "html", null, true);
        echo "\"></script>

          <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/login.controller.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/logout.controller.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/authentication.service.js"), "html", null, true);
        echo "\"></script>

          <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-sanitize.min.js"), "html", null, true);
        echo "\" data-semver=\"1.5.5\"></script>
          <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-strap.js"), "html", null, true);
        echo "\" data-semver=\"v2.3.8\"></script>
          <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-strap.tpl.js"), "html", null, true);
        echo "\" data-semver=\"v2.3.8\"></script>

          <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/crypto-js.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/sha1.js"), "html", null, true);
        echo "\"></script>


    ";
        
        $__internal_88d0c6e0c12a1ec53a817512457e6e4c5b74170b27f86af81f2c04daf70466bd->leave($__internal_88d0c6e0c12a1ec53a817512457e6e4c5b74170b27f86af81f2c04daf70466bd_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 141,  358 => 140,  353 => 138,  349 => 137,  345 => 136,  340 => 134,  336 => 133,  332 => 132,  327 => 130,  323 => 129,  319 => 128,  315 => 127,  310 => 125,  305 => 123,  301 => 122,  296 => 120,  292 => 119,  288 => 118,  284 => 117,  280 => 116,  276 => 114,  274 => 103,  268 => 102,  257 => 37,  253 => 36,  249 => 35,  245 => 34,  240 => 33,  238 => 22,  232 => 21,  220 => 9,  168 => 145,  166 => 102,  154 => 92,  139 => 90,  135 => 89,  128 => 84,  122 => 83,  116 => 82,  112 => 81,  108 => 79,  99 => 75,  95 => 74,  91 => 73,  88 => 72,  86 => 71,  52 => 41,  50 => 21,  35 => 9,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html ng-app="app">*/
/* <head>*/
/*   <meta http-equiv="content-type" content="text/html; charset=UTF-8">*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="format-detection" content="telephone=no">*/
/*     <title>{% block title %}Binovalife :: WEB OFFICE{% endblock %}</title>*/
/* */
/*     <!-- Bootstrap -->*/
/* */
/* */
/*     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*       <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* */
/*             {% block stylesheets %}*/
/*             {# uncomment the following lines to compile SCSS assets with Assetic*/
/* */
/*                 {% stylesheets filter="scssphp" output="css/app.css"*/
/*                     "%kernel.root_dir%/Resources/assets/scss/bootstrap-flatly.scss"*/
/*                     "%kernel.root_dir%/Resources/assets/scss/font-awesome.scss"*/
/*                     "%kernel.root_dir%/Resources/assets/css/*.css"*/
/*                     "%kernel.root_dir%/Resources/assets/scss/main.scss"*/
/*                 %}*/
/*                     <link rel="stylesheet" href="{{ asset_url }}" />*/
/*                 {% endstylesheets %}*/
/*             #}*/
/*                 <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">*/
/*                 <link rel="stylesheet" href="{{ asset('css/app.css') }}">*/
/*                 <link href="{{ asset('css/waves.css') }}" type="text/css" rel="stylesheet">*/
/*                 <!-- <link rel="stylesheet" href="{{ asset('css/nanoscroller.css') }}"> -->*/
/*                 <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">*/
/* */
/* */
/*             {% endblock %}*/
/*             <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/* </head>*/
/* <body class="pace-done">*/
/*     <!-- <loader></loader> -->*/
/*     <!-- Static navbar -->*/
/*     <!-- <header ng-if="showNav"></header> -->*/
/*     <!-- <div class="container page-wrapper">*/
/*       <div ng-class="{ 'alert': flash, 'alert-success': flash.type === 'success', 'alert-danger': flash.type === 'error' }" ng-if="flash" ng-bind="flash.message"></div>*/
/* */
/*     </div> -->*/
/*     <!-- Custom footer -  -->*/
/*     <!-- <uifooter></uifooter> -->*/
/*     <!-- <div ng-view></div> -->*/
/*     <div class="container page-wrapper" style="background:#548235;z-index:-5000;width:100%;height:100%">*/
/*     <nav class="navbar navbar-inverse yamm navbar-static-top" >*/
/*         <div class="container">*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="#"> </a>*/
/*             </div>*/
/* */
/*             <div  style="height: 1px;" aria-expanded="false" id="navbar" class="navbar-collapse collapse">*/
/* */
/*                 <ul class="nav navbar-nav navbar-right navbar-top-drops">*/
/*                   {% if app.user %}*/
/*                       <li>*/
/*                           <a href="{{ path('security_logout') }}">*/
/*                               <input type="hidden" ng-model="firstname" value="{{app.user.username}}">*/
/*                               <i class="fa fa-sign-out"></i> {{ 'menu.logout'|trans }} {{app.user.username}}*/
/*                           </a>*/
/*                     </li>*/
/*                 {% endif %}*/
/*                     <li class="dropdown profile-dropdown">*/
/*                         <a  class="dropdown-toggle button-wave" data-toggle="dropdown" role="button" style="background:#fff;padding:4px 20px;font-size:80%;color:#000">*/
/*                           {% for locale in locales() %}*/
/*                               {% if app.request.locale == locale.code %}{{ locale.name|capitalize }} {% endif %}*/
/*                           {% endfor %}*/
/*                           &nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down" style="color:#548235"></i></a>*/
/*                         <ul class="dropdown-menu" style="border-radius:0;margin-top:1px" >*/
/*                             <!-- <li><a href="#/customers" style="padding:4px 10px;font-size:80%;margin-top:6px">French</a></li>*/
/*                             <li class="divider"></li>*/
/*                             <li><a href="#/logout" style="padding:4px 10px;font-size:80%">Deutch</a></li> -->*/
/*                             {% for locale in locales() %}*/
/*                                 <li  {% if app.request.locale == locale.code %} {% endif %}><a href="{{ path(app.request.get('_route', 'blog_index'), app.request.get('_route_params', [])|merge({ _locale: locale.code })) }}" style="padding:4px 10px;font-size:80%;margin-top:6px">{{ locale.name|capitalize }}</a></li>*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     </li>*/
/* */
/* */
/*                 </ul>*/
/*             </div><!--/.nav-collapse -->*/
/*         </div><!--/.container-fluid -->*/
/*     </nav>*/
/* */
/* */
/*     {% block javascripts %}*/
/*     {# uncomment the following lines to combine and minimize JavaScript assets with Assetic*/
/*         {% javascripts filter="?jsqueeze" output="js/app.js"*/
/*             "%kernel.root_dir%/Resources/assets/js/jquery-2.1.4.js"*/
/*             "%kernel.root_dir%/Resources/assets/js/moment.min.js"*/
/*             "%kernel.root_dir%/Resources/assets/js/bootstrap-3.3.4.js"*/
/*             "%kernel.root_dir%/Resources/assets/js/highlight.pack.js"*/
/*             "%kernel.root_dir%/Resources/assets/js/bootstrap-datetimepicker.min.js"*/
/*             "%kernel.root_dir%/Resources/assets/js/main.js" %}*/
/*             <script src="{{ asset_url }}"></script>*/
/*         {% endjavascripts %}*/
/*     #}*/
/* */
/* */
/*         <script src="{{ asset('js/libs/jquery-2.1.1.min.js') }}"></script>*/
/*         <script src="{{ asset('js/libs/angular.js') }}"></script>*/
/*         <script src="{{ asset('js/libs/angular-route.js') }}"></script>*/
/*         <script src="{{ asset('js/libs/angular-cookies.js') }}"></script>*/
/*         <script src="{{ asset('js/libs/angular-animate.js') }}"></script>*/
/* */
/*         <script src="{{ asset('js/libs/angular-mocks.js') }}"></script>*/
/*         <script src="{{ asset('js/bootstrap.js') }}"></script>*/
/* */
/*           <script src="{{ asset('js/app.js') }}"></script>*/
/* */
/*           <script src="{{ asset('js/loader.service.js') }}"></script>*/
/*           <script src="{{ asset('js/loader.controller.js') }}"></script>*/
/*           <script src="{{ asset('js/header.controller.js') }}"></script>*/
/*           <script src="{{ asset('js/footer.controller.js') }}"></script>*/
/* */
/*           <script src="{{ asset('js/login.controller.js') }}"></script>*/
/*           <script src="{{ asset('js/logout.controller.js') }}"></script>*/
/*           <script src="{{ asset('js/authentication.service.js') }}"></script>*/
/* */
/*           <script src="{{ asset('js/libs/angular-sanitize.min.js') }}" data-semver="1.5.5"></script>*/
/*           <script src="{{ asset('js/libs/angular-strap.js') }}" data-semver="v2.3.8"></script>*/
/*           <script src="{{ asset('js/libs/angular-strap.tpl.js') }}" data-semver="v2.3.8"></script>*/
/* */
/*           <script src="{{ asset('js/libs/crypto-js.js') }}"></script>*/
/*           <script src="{{ asset('js/libs/sha1.js') }}"></script>*/
/* */
/* */
/*     {% endblock %}*/
/* */
/* */
/*     <!-- <script src="../../assets/libs/jquery-2.1.1.min.js"></script>*/
/*     <script src="../../assets/libs/angular.js"></script>*/
/* */
/*     <script src="../../assets/libs/angular-route.js"></script>*/
/*     <script src="../../assets/libs/angular-cookies.js"></script>*/
/*     <script type="text/javascript" src="../../assets/libs/angular-animate.js"></script>*/
/*     <script src="../../assets/libs/angular-mocks.js"></script>*/
/* */
/* */
/* */
/*     <script type="text/javascript" src="../../assets/js/bootstrap.js"></script>*/
/*     <!-- Libs to remove  -->*/
/*     <!-- <script src="../../assets/libs/angular-sanitize.min.js" data-semver="1.5.5"></script>*/
/*     <script src="../../assets/libs/angular-strap.js" data-semver="v2.3.8"></script>*/
/*     <script src="../../assets/libs/angular-strap.tpl.js" data-semver="v2.3.8"></script>*/
/* */
/*     <script src="../../assets/libs/crypto-js.js"></script>*/
/*     <script src="../../assets/libs/sha1.js"></script> -->*/
/* */
/* */
/* */
/* */
/*     <!-- <script src="app/app.js"></script>*/
/* */
/*     <script src="partials/loader/loader.service.js"></script>*/
/*     <script src="partials/loader/loader.controller.js"></script>*/
/*     <script src="partials/header/header.controller.js"></script>*/
/*     <script src="partials/footer/footer.controller.js"></script> -->*/
/*     <!-- <script src="partials/ui/ui.controller.js"></script> -->*/
/*     <!-- <script src="partials/ui/tab.controller.js"></script> -->*/
/* */
/*     <!-- Local storage service  -->*/
/*     <!-- <script src="components/authenticate/auth.users.service.js"></script>*/
/*     <script src="components/customers/customers.service.js"></script>*/
/*     <script src="components/customers/customers.controller.js"></script>*/
/*     <script src="components/authenticate/login.controller.js"></script>*/
/*     <script src="components/authenticate/logout.controller.js"></script>*/
/*     <script src="components/authenticate/authentication.service.js"></script>*/
/*     <script src="components/customers/customer.details.controller.js"></script> -->*/
/*     <!-- <script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script> -->*/
/* */
/* </body>*/
/* </html>*/
/* */
