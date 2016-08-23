<?php

/* security/index.html.twig */
class __TwigTemplate_a67bb5dd89619c1439c7d735ad041c90e8fa830d154b43efa009a984f51a09f1 extends Twig_Template
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
        $__internal_79d7fb8308492049f0930e7013b8d9449535f0c10f183a08951a1ea8e7debe9b = $this->env->getExtension("native_profiler");
        $__internal_79d7fb8308492049f0930e7013b8d9449535f0c10f183a08951a1ea8e7debe9b->enter($__internal_79d7fb8308492049f0930e7013b8d9449535f0c10f183a08951a1ea8e7debe9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/index.html.twig"));

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
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "            <link href='https://www.myfonts.com/fonts/activesphere/anikka-sans/' rel='stylesheet' type='text/css'>
            <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 41
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
        // line 69
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 70
            echo "                      <li>
                          <a href=\"";
            // line 71
            echo $this->env->getExtension('routing')->getPath("security_logout");
            echo "\">
                              <input type=\"hidden\" ng-model=\"firstname\" value=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "\">
                              <i class=\"fa fa-sign-out\"></i> ";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.logout"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                          </a>
                    </li>
                ";
        }
        // line 77
        echo "                    <li class=\"dropdown profile-dropdown\">
                        <a  class=\"dropdown-toggle button-wave\" data-toggle=\"dropdown\" role=\"button\" style=\"background:#fff;padding:4px 20px;font-size:80%;color:#000\">
                          ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('app.extension')->getLocales());
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 80
            echo "                              ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == $this->getAttribute($context["locale"], "code", array()))) {
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["locale"], "name", array())), "html", null, true);
                echo " ";
            }
            // line 81
            echo "                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                          &nbsp;&nbsp;&nbsp;<i class=\"fa fa-caret-down\" style=\"color:#548235\"></i></a>
                        <ul class=\"dropdown-menu\" style=\"border-radius:0;margin-top:1px\" >
                            <!-- <li><a href=\"#/customers\" style=\"padding:4px 10px;font-size:80%;margin-top:6px\">French</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#/logout\" style=\"padding:4px 10px;font-size:80%\">Deutch</a></li> -->
                            ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('app.extension')->getLocales());
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 88
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
        // line 90
        echo "                        </ul>
                    </li>

                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
    <div class=\"col-md-6 col-md-offset-3 row\" style=\"margin-top:3%\">
        <div class=\"col-md-10 col-md-offset-1\">

              <div class=\"tile custom\">
                  <div class=\"tile-title clearfix\" >
                      <img  ng-src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("logo.png"), "html", null, true);
        echo "\"  class=\"img-responsive pull-left\" style=\" padding-right:20px;height:40px;border-right:1px solid #ddd;\"/>
                      <div style=\"color:#548235;font-size:16px;padding-top:6px\">&nbsp;&nbsp;BINOVALIFE <a style=\"color:#747474\">WEB OFFICE</a> </div>
                      <!-- <img  ng-src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("loading.gif"), "html", null, true);
        echo "\"  class=\"pull-right\" /> -->
                  </div><!--.tile-title-->
                    <form name=\"form\" ng-submit=\"cx.login()\" role=\"form\" action=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("security_login");
        echo "\" method=\"post\">
              <div class=\"tile-body clearfix\">
                <div style=\"color:#548235;font-size:16px;padding-top:6px\" class=\"text-center\"><a style=\"color:#747474\">";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("note"), "html", null, true);
        echo "</a> </div>
                  ";
        // line 109
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 110
            echo "                <div class=\"col-md-8 col-md-offset-2 text-center\" style=\"background:#f6f9f5;padding-top:10px\">
                      <p style=\"font-size:12px;color:red;\">";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</p>

                </div>
                  ";
        }
        // line 115
        echo "                <div class=\"col-md-8 col-md-offset-2\" style=\"background:#f2f2f2;padding:0 10px;margin-top:5%\">
                    <div class=\"form-group\" style=\"background:#f2f2f2;\">
                        <input type=\"text\" id=\"username\" name=\"_username\"  class=\"form-control col-md-12\"  ng-model=\"cx._username\" placeholder=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.username"), "html", null, true);
        echo "\" required style=\"margin:0\" />
                    </div>

                </div>


                <div class=\"col-md-8 col-md-offset-2 text-right\" ng-show=\"form._username.\$dirty && form._username.\$error.required\" style=\"background:#f6f9f5\">
                      <i style=\"font-size:10px;color:red\">";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("field.too_short"), "html", null, true);
        echo "</i>

                </div>

                <div class=\"col-md-8 col-md-offset-2\" style=\"background:#f2f2f2;padding:0 10px;margin-top:10px\">
                  <div class=\"form-group\">
                      <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control col-md-12\"  ng-model=\"cx.password\" placeholder=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.password"), "html", null, true);
        echo "\" required />
                      <!-- <span ng-show=\"form.password.\$dirty && form.password.\$error.required\" class=\"help-block pull-right\"><i class=\"fa fa-close\"></i></span> -->
                  </div>
                </div>
                <div class=\"col-md-8 col-md-offset-2 text-right\" ng-show=\"form._password.\$dirty && form._password.\$error.required\" style=\"background:#f6f9f5\">
                  <i style=\"font-size:10px;color:red\">";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("field.too_short"), "html", null, true);
        echo "</i>
                </div>
                <!-- <span ng-show=\"form.password.\$dirty && form.password.\$error.required\" class=\"pull-right\" ></span> -->

                <div class=\"col-md-8 col-md-offset-2\" style=\"background:#fafafa;padding:0 0px;margin-top:10px\">
                    <span style=\"background:#f2f2f2;padding:2px 4px\"><i class=\"fa fa-check\" style=\"color:#548235;font-size:12px\"></i></span>
                    <span style=\"font-size:12px\">";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("remember"), "html", null, true);
        echo "</span>
                    <a  href=\"#\" class=\"pull-right\" style=\"fon_met-size:80%\">";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forgot_password"), "html", null, true);
        echo "</a>
                </div>
                <div class=\"col-md-8 col-md-offset-2\" style=\"background:#548235;padding:0 10px;margin-top:9%;\">
                  <div class=\"form-actions\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                      <button type=\"submit\" ng-disabled=\"form.\$invalid || cx.dataLoading\" class=\"btn btn-primary pull-right btn-login col-md-12\" style=\"background:#548235\">";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.sign_in"), "html", null, true);
        echo "</button>
                  </div>

                </div>
              </div>
              </form>

                <div class=\"prefooter\">
                        <div class=\"tile purple\">
                            <div class=\"tile-footer text-center\">
                                <span style=\"font-size:11px\"><a href=\"#\">";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("term_condition"), "html", null, true);
        echo "</a> | <a href=\"#\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("business_model"), "html", null, true);
        echo "</a> | <a href=\"#\">>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("product_price"), "html", null, true);
        echo "</a>
            </br> <i style=\"color:#548235;font-style:normal\"> © Copyright 2016, Binovalife. </i></span>
                            </div>
                        </div>
                </div>

          </div>
    </div>

    </div>
    </div>
    ";
        // line 168
        $this->displayBlock('javascripts', $context, $blocks);
        // line 203
        echo "</html>
";
        
        $__internal_79d7fb8308492049f0930e7013b8d9449535f0c10f183a08951a1ea8e7debe9b->leave($__internal_79d7fb8308492049f0930e7013b8d9449535f0c10f183a08951a1ea8e7debe9b_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a9b8eea03e870a5af8f57394bb0fe7b3853d762cc78d6a6c1f9f0590f6bfbab = $this->env->getExtension("native_profiler");
        $__internal_3a9b8eea03e870a5af8f57394bb0fe7b3853d762cc78d6a6c1f9f0590f6bfbab->enter($__internal_3a9b8eea03e870a5af8f57394bb0fe7b3853d762cc78d6a6c1f9f0590f6bfbab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Binovalife :: WEB OFFICE";
        
        $__internal_3a9b8eea03e870a5af8f57394bb0fe7b3853d762cc78d6a6c1f9f0590f6bfbab->leave($__internal_3a9b8eea03e870a5af8f57394bb0fe7b3853d762cc78d6a6c1f9f0590f6bfbab_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_139d3c00423c2fb0657102bac7e17c920e2d6cf2fb967405c7dfc9847b90a487 = $this->env->getExtension("native_profiler");
        $__internal_139d3c00423c2fb0657102bac7e17c920e2d6cf2fb967405c7dfc9847b90a487->enter($__internal_139d3c00423c2fb0657102bac7e17c920e2d6cf2fb967405c7dfc9847b90a487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "            ";
        // line 31
        echo "                <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
                <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
                <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/waves.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\">
                <!-- <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/nanoscroller.css"), "html", null, true);
        echo "\"> -->
                <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


            ";
        
        $__internal_139d3c00423c2fb0657102bac7e17c920e2d6cf2fb967405c7dfc9847b90a487->leave($__internal_139d3c00423c2fb0657102bac7e17c920e2d6cf2fb967405c7dfc9847b90a487_prof);

    }

    // line 168
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7031a67d4d8f7b61ff519eb1ca52422d0f62cf72592d9d52aaeb01ee0f136e3c = $this->env->getExtension("native_profiler");
        $__internal_7031a67d4d8f7b61ff519eb1ca52422d0f62cf72592d9d52aaeb01ee0f136e3c->enter($__internal_7031a67d4d8f7b61ff519eb1ca52422d0f62cf72592d9d52aaeb01ee0f136e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 169
        echo "    ";
        // line 180
        echo "

        <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/jquery-2.1.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-route.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-cookies.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-animate.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-mocks.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/loader.service.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/loader.controller.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/header.controller.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footer.controller.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/login.controller.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/logout.controller.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/authentication.service.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-sanitize.min.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-strap.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-strap.tpl.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/crypto-js.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/sha1.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_7031a67d4d8f7b61ff519eb1ca52422d0f62cf72592d9d52aaeb01ee0f136e3c->leave($__internal_7031a67d4d8f7b61ff519eb1ca52422d0f62cf72592d9d52aaeb01ee0f136e3c_prof);

    }

    public function getTemplateName()
    {
        return "security/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 201,  426 => 200,  422 => 199,  418 => 198,  414 => 197,  410 => 196,  406 => 195,  402 => 194,  398 => 193,  394 => 192,  390 => 191,  386 => 190,  382 => 189,  378 => 188,  374 => 187,  370 => 186,  366 => 185,  362 => 184,  358 => 183,  354 => 182,  350 => 180,  348 => 169,  342 => 168,  331 => 35,  327 => 34,  323 => 33,  319 => 32,  314 => 31,  312 => 20,  306 => 19,  294 => 9,  286 => 203,  284 => 168,  266 => 157,  253 => 147,  249 => 146,  242 => 142,  238 => 141,  229 => 135,  221 => 130,  212 => 124,  202 => 117,  198 => 115,  191 => 111,  188 => 110,  186 => 109,  182 => 108,  177 => 106,  172 => 104,  167 => 102,  153 => 90,  138 => 88,  134 => 87,  127 => 82,  121 => 81,  115 => 80,  111 => 79,  107 => 77,  98 => 73,  94 => 72,  90 => 71,  87 => 70,  85 => 69,  54 => 41,  50 => 39,  48 => 19,  35 => 9,  25 => 1,);
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
/*             <link href='https://www.myfonts.com/fonts/activesphere/anikka-sans/' rel='stylesheet' type='text/css'>*/
/*             <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>*/
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
/*             <div  style="height: 1px;" aria-expanded="false" id="navbar" class="navbar-collapse collapse">*/
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
/*                 </ul>*/
/*             </div><!--/.nav-collapse -->*/
/*         </div><!--/.container-fluid -->*/
/*     </nav>*/
/*     <div class="col-md-6 col-md-offset-3 row" style="margin-top:3%">*/
/*         <div class="col-md-10 col-md-offset-1">*/
/* */
/*               <div class="tile custom">*/
/*                   <div class="tile-title clearfix" >*/
/*                       <img  ng-src="{{ asset('logo.png') }}"  class="img-responsive pull-left" style=" padding-right:20px;height:40px;border-right:1px solid #ddd;"/>*/
/*                       <div style="color:#548235;font-size:16px;padding-top:6px">&nbsp;&nbsp;BINOVALIFE <a style="color:#747474">WEB OFFICE</a> </div>*/
/*                       <!-- <img  ng-src="{{ asset('loading.gif') }}"  class="pull-right" /> -->*/
/*                   </div><!--.tile-title-->*/
/*                     <form name="form" ng-submit="cx.login()" role="form" action="{{ path('security_login') }}" method="post">*/
/*               <div class="tile-body clearfix">*/
/*                 <div style="color:#548235;font-size:16px;padding-top:6px" class="text-center"><a style="color:#747474">{{ 'note'|trans }}</a> </div>*/
/*                   {% if error %}*/
/*                 <div class="col-md-8 col-md-offset-2 text-center" style="background:#f6f9f5;padding-top:10px">*/
/*                       <p style="font-size:12px;color:red;">{{ error.messageKey|trans(error.messageData, 'security') }}</p>*/
/* */
/*                 </div>*/
/*                   {% endif %}*/
/*                 <div class="col-md-8 col-md-offset-2" style="background:#f2f2f2;padding:0 10px;margin-top:5%">*/
/*                     <div class="form-group" style="background:#f2f2f2;">*/
/*                         <input type="text" id="username" name="_username"  class="form-control col-md-12"  ng-model="cx._username" placeholder="{{ 'label.username'|trans }}" required style="margin:0" />*/
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/* */
/*                 <div class="col-md-8 col-md-offset-2 text-right" ng-show="form._username.$dirty && form._username.$error.required" style="background:#f6f9f5">*/
/*                       <i style="font-size:10px;color:red">{{ 'field.too_short'|trans }}</i>*/
/* */
/*                 </div>*/
/* */
/*                 <div class="col-md-8 col-md-offset-2" style="background:#f2f2f2;padding:0 10px;margin-top:10px">*/
/*                   <div class="form-group">*/
/*                       <input type="password" name="_password" id="password" class="form-control col-md-12"  ng-model="cx.password" placeholder="{{ 'label.password'|trans }}" required />*/
/*                       <!-- <span ng-show="form.password.$dirty && form.password.$error.required" class="help-block pull-right"><i class="fa fa-close"></i></span> -->*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="col-md-8 col-md-offset-2 text-right" ng-show="form._password.$dirty && form._password.$error.required" style="background:#f6f9f5">*/
/*                   <i style="font-size:10px;color:red">{{ 'field.too_short'|trans }}</i>*/
/*                 </div>*/
/*                 <!-- <span ng-show="form.password.$dirty && form.password.$error.required" class="pull-right" ></span> -->*/
/* */
/*                 <div class="col-md-8 col-md-offset-2" style="background:#fafafa;padding:0 0px;margin-top:10px">*/
/*                     <span style="background:#f2f2f2;padding:2px 4px"><i class="fa fa-check" style="color:#548235;font-size:12px"></i></span>*/
/*                     <span style="font-size:12px">{{ 'remember'|trans }}</span>*/
/*                     <a  href="#" class="pull-right" style="fon_met-size:80%">{{ 'forgot_password'|trans }}</a>*/
/*                 </div>*/
/*                 <div class="col-md-8 col-md-offset-2" style="background:#548235;padding:0 10px;margin-top:9%;">*/
/*                   <div class="form-actions">*/
/*                     <input type="hidden" name="_csrf_token" value="{{ csrf_token('authenticate') }}"/>*/
/*                       <button type="submit" ng-disabled="form.$invalid || cx.dataLoading" class="btn btn-primary pull-right btn-login col-md-12" style="background:#548235">{{ 'action.sign_in'|trans }}</button>*/
/*                   </div>*/
/* */
/*                 </div>*/
/*               </div>*/
/*               </form>*/
/* */
/*                 <div class="prefooter">*/
/*                         <div class="tile purple">*/
/*                             <div class="tile-footer text-center">*/
/*                                 <span style="font-size:11px"><a href="#">{{ 'term_condition'|trans }}</a> | <a href="#">{{ 'business_model'|trans }}</a> | <a href="#">>{{ 'product_price'|trans }}</a>*/
/*             </br> <i style="color:#548235;font-style:normal"> © Copyright 2016, Binovalife. </i></span>*/
/*                             </div>*/
/*                         </div>*/
/*                 </div>*/
/* */
/*           </div>*/
/*     </div>*/
/* */
/*     </div>*/
/*     </div>*/
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
/*         <script src="{{ asset('js/libs/angular-mocks.js') }}"></script>*/
/*         <script src="{{ asset('js/bootstrap.js') }}"></script>*/
/*           <script src="{{ asset('js/app.js') }}"></script>*/
/*           <script src="{{ asset('js/loader.service.js') }}"></script>*/
/*           <script src="{{ asset('js/loader.controller.js') }}"></script>*/
/*           <script src="{{ asset('js/header.controller.js') }}"></script>*/
/*           <script src="{{ asset('js/footer.controller.js') }}"></script>*/
/*           <script src="{{ asset('js/login.controller.js') }}"></script>*/
/*           <script src="{{ asset('js/logout.controller.js') }}"></script>*/
/*           <script src="{{ asset('js/authentication.service.js') }}"></script>*/
/*           <script src="{{ asset('js/libs/angular-sanitize.min.js') }}"></script>*/
/*           <script src="{{ asset('js/libs/angular-strap.js') }}"></script>*/
/*           <script src="{{ asset('js/libs/angular-strap.tpl.js') }}"></script>*/
/*           <script src="{{ asset('js/libs/crypto-js.js') }}"></script>*/
/*           <script src="{{ asset('js/libs/sha1.js') }}"></script>*/
/*     {% endblock %}*/
/* </html>*/
/* */
