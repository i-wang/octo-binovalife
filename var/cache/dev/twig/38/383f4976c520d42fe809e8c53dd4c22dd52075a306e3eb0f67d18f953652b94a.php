<?php

/* security/index.html.twig */
class __TwigTemplate_e5c288639279d54e07a3dafb7c3a346170232d70c3ac87e3459b3157d81323ae extends Twig_Template
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
        $__internal_34b24b424c755d86eef616c8d22b630fac4427aefc3e87ab837df7383871866c = $this->env->getExtension("native_profiler");
        $__internal_34b24b424c755d86eef616c8d22b630fac4427aefc3e87ab837df7383871866c->enter($__internal_34b24b424c755d86eef616c8d22b630fac4427aefc3e87ab837df7383871866c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/index.html.twig"));

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
        // line 67
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 68
            echo "                      <li>
                          <a href=\"";
            // line 69
            echo $this->env->getExtension('routing')->getPath("security_logout");
            echo "\">
                              <input type=\"hidden\" ng-model=\"firstname\" value=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "\">
                              <i class=\"fa fa-sign-out\"></i> ";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.logout"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                          </a>
                    </li>
                ";
        }
        // line 75
        echo "                    <li class=\"dropdown profile-dropdown\">
                        <a  class=\"dropdown-toggle button-wave\" data-toggle=\"dropdown\" role=\"button\" style=\"background:#fff;padding:4px 20px;font-size:80%;color:#000\">
                          ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('app.extension')->getLocales());
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 78
            echo "                              ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == $this->getAttribute($context["locale"], "code", array()))) {
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["locale"], "name", array())), "html", null, true);
                echo " ";
            }
            // line 79
            echo "                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                          &nbsp;&nbsp;&nbsp;<i class=\"fa fa-caret-down\" style=\"color:#548235\"></i></a>
                        <ul class=\"dropdown-menu\" style=\"border-radius:0;margin-top:1px\" >
                            <!-- <li><a href=\"#/customers\" style=\"padding:4px 10px;font-size:80%;margin-top:6px\">French</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#/logout\" style=\"padding:4px 10px;font-size:80%\">Deutch</a></li> -->
                            ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('app.extension')->getLocales());
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 86
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
        // line 88
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
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("logo.png"), "html", null, true);
        echo "\"  class=\"img-responsive pull-left\" style=\" padding-right:20px;height:40px;border-right:1px solid #ddd;\"/>
                      <div style=\"color:#548235;font-size:16px;padding-top:6px\">&nbsp;&nbsp;BINOVALIFE <a style=\"color:#747474\">WEB OFFICE</a> </div>
                      <!-- <img  ng-src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("loading.gif"), "html", null, true);
        echo "\"  class=\"pull-right\" /> -->
                  </div><!--.tile-title-->
                    <form name=\"form\" ng-submit=\"cx.login()\" role=\"form\" action=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("security_login");
        echo "\" method=\"post\">
              <div class=\"tile-body clearfix\">
                <div style=\"color:#548235;font-size:16px;padding-top:6px\" class=\"text-center\"><a style=\"color:#747474\">Login to your Account</a> </div>
                  ";
        // line 107
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 108
            echo "                <div class=\"col-md-8 col-md-offset-2 text-center\" style=\"background:#f6f9f5;padding-top:10px\">
                      <p style=\"font-size:12px;color:red;\">";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</p>

                </div>
                  ";
        }
        // line 113
        echo "                <div class=\"col-md-8 col-md-offset-2\" style=\"background:#f2f2f2;padding:0 10px;margin-top:5%\">
                    <div class=\"form-group\" style=\"background:#f2f2f2;\">
                        <input type=\"text\" id=\"username\" name=\"_username\"  class=\"form-control col-md-12\"  ng-model=\"cx._username\" placeholder=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.username"), "html", null, true);
        echo "\" required style=\"margin:0\" />
                    </div>

                </div>


                <div class=\"col-md-8 col-md-offset-2 text-right\" ng-show=\"form._username.\$dirty && form._username.\$error.required\" style=\"background:#f6f9f5\">
                      <i style=\"font-size:10px;color:red\">This field is required</i>

                </div>

                <div class=\"col-md-8 col-md-offset-2\" style=\"background:#f2f2f2;padding:0 10px;margin-top:10px\">
                  <div class=\"form-group\">
                      <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control col-md-12\"  ng-model=\"cx.password\" placeholder=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.password"), "html", null, true);
        echo "\" required />
                      <!-- <span ng-show=\"form.password.\$dirty && form.password.\$error.required\" class=\"help-block pull-right\"><i class=\"fa fa-close\"></i></span> -->
                  </div>
                </div>
                <div class=\"col-md-8 col-md-offset-2 text-right\" ng-show=\"form._password.\$dirty && form._password.\$error.required\" style=\"background:#f6f9f5\">
                  <i style=\"font-size:10px;color:red\">This field is required</i>
                </div>
                <!-- <span ng-show=\"form.password.\$dirty && form.password.\$error.required\" class=\"pull-right\" ></span> -->

                <div class=\"col-md-8 col-md-offset-2\" style=\"background:#fafafa;padding:0 0px;margin-top:10px\">
                    <span style=\"background:#f2f2f2;padding:2px 4px\"><i class=\"fa fa-check\" style=\"color:#548235;font-size:12px\"></i></span>
                    <span style=\"font-size:12px\">Remember me</span>
                    <a  href=\"#\" class=\"pull-right\" style=\"font-size:80%\">Forgot Password ?</a>
                </div>
                <div class=\"col-md-8 col-md-offset-2\" style=\"background:#548235;padding:0 10px;margin-top:9%;\">
                  <div class=\"form-actions\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                      <button type=\"submit\" ng-disabled=\"form.\$invalid || cx.dataLoading\" class=\"btn btn-primary pull-right btn-login col-md-12\" style=\"background:#548235\">";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.sign_in"), "html", null, true);
        echo "</button>
                  </div>

                </div>
              </div>
              </form>

                <div class=\"prefooter\">
                        <div class=\"tile purple\">
                            <div class=\"tile-footer text-center\">
                                <span style=\"font-size:11px\"><a href=\"#\">Terms and Condition</a> | <a href=\"#\">Company Business Model</a> | <a href=\"#\">Product and Pricing</a>
            </br> <i style=\"color:#548235;font-style:normal\"> © Copyright 2016, Binovalife. </i></span>
                            </div>
                        </div>
                </div>

          </div>
    </div>

    </div>
    </div>
    ";
        // line 166
        $this->displayBlock('javascripts', $context, $blocks);
        // line 209
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
        
        $__internal_34b24b424c755d86eef616c8d22b630fac4427aefc3e87ab837df7383871866c->leave($__internal_34b24b424c755d86eef616c8d22b630fac4427aefc3e87ab837df7383871866c_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_43c81f789029fef34e6edc7cee30141cd226ad223cebfc7a15e6df0750f03b4e = $this->env->getExtension("native_profiler");
        $__internal_43c81f789029fef34e6edc7cee30141cd226ad223cebfc7a15e6df0750f03b4e->enter($__internal_43c81f789029fef34e6edc7cee30141cd226ad223cebfc7a15e6df0750f03b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Binovalife :: WEB OFFICE";
        
        $__internal_43c81f789029fef34e6edc7cee30141cd226ad223cebfc7a15e6df0750f03b4e->leave($__internal_43c81f789029fef34e6edc7cee30141cd226ad223cebfc7a15e6df0750f03b4e_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_17b249f4c166fe90c3084c7a411098790dc37b8bc448563c62bf76c108c821ba = $this->env->getExtension("native_profiler");
        $__internal_17b249f4c166fe90c3084c7a411098790dc37b8bc448563c62bf76c108c821ba->enter($__internal_17b249f4c166fe90c3084c7a411098790dc37b8bc448563c62bf76c108c821ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_17b249f4c166fe90c3084c7a411098790dc37b8bc448563c62bf76c108c821ba->leave($__internal_17b249f4c166fe90c3084c7a411098790dc37b8bc448563c62bf76c108c821ba_prof);

    }

    // line 166
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5c9bb0f2b661ef447bf2f6cb4c744e6ba15e425760c8c6621f42b6b8e7cf8e67 = $this->env->getExtension("native_profiler");
        $__internal_5c9bb0f2b661ef447bf2f6cb4c744e6ba15e425760c8c6621f42b6b8e7cf8e67->enter($__internal_5c9bb0f2b661ef447bf2f6cb4c744e6ba15e425760c8c6621f42b6b8e7cf8e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 167
        echo "    ";
        // line 178
        echo "

        <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/jquery-2.1.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-route.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-cookies.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-animate.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-mocks.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>

          <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>

          <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/loader.service.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/loader.controller.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/header.controller.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footer.controller.js"), "html", null, true);
        echo "\"></script>

          <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/login.controller.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/logout.controller.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/authentication.service.js"), "html", null, true);
        echo "\"></script>

          <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-sanitize.min.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-strap.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-strap.tpl.js"), "html", null, true);
        echo "\"></script>

          <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/crypto-js.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/sha1.js"), "html", null, true);
        echo "\"></script>


    ";
        
        $__internal_5c9bb0f2b661ef447bf2f6cb4c744e6ba15e425760c8c6621f42b6b8e7cf8e67->leave($__internal_5c9bb0f2b661ef447bf2f6cb4c744e6ba15e425760c8c6621f42b6b8e7cf8e67_prof);

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
        return array (  455 => 205,  451 => 204,  446 => 202,  442 => 201,  438 => 200,  433 => 198,  429 => 197,  425 => 196,  420 => 194,  416 => 193,  412 => 192,  408 => 191,  403 => 189,  398 => 187,  394 => 186,  389 => 184,  385 => 183,  381 => 182,  377 => 181,  373 => 180,  369 => 178,  367 => 167,  361 => 166,  350 => 35,  346 => 34,  342 => 33,  338 => 32,  333 => 31,  331 => 20,  325 => 19,  313 => 9,  261 => 209,  259 => 166,  235 => 145,  231 => 144,  212 => 128,  196 => 115,  192 => 113,  185 => 109,  182 => 108,  180 => 107,  174 => 104,  169 => 102,  164 => 100,  150 => 88,  135 => 86,  131 => 85,  124 => 80,  118 => 79,  112 => 78,  108 => 77,  104 => 75,  95 => 71,  91 => 70,  87 => 69,  84 => 68,  82 => 67,  50 => 39,  48 => 19,  35 => 9,  25 => 1,);
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
/*                 <div style="color:#548235;font-size:16px;padding-top:6px" class="text-center"><a style="color:#747474">Login to your Account</a> </div>*/
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
/*                       <i style="font-size:10px;color:red">This field is required</i>*/
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
/*                   <i style="font-size:10px;color:red">This field is required</i>*/
/*                 </div>*/
/*                 <!-- <span ng-show="form.password.$dirty && form.password.$error.required" class="pull-right" ></span> -->*/
/* */
/*                 <div class="col-md-8 col-md-offset-2" style="background:#fafafa;padding:0 0px;margin-top:10px">*/
/*                     <span style="background:#f2f2f2;padding:2px 4px"><i class="fa fa-check" style="color:#548235;font-size:12px"></i></span>*/
/*                     <span style="font-size:12px">Remember me</span>*/
/*                     <a  href="#" class="pull-right" style="font-size:80%">Forgot Password ?</a>*/
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
/*                                 <span style="font-size:11px"><a href="#">Terms and Condition</a> | <a href="#">Company Business Model</a> | <a href="#">Product and Pricing</a>*/
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
/*           <script src="{{ asset('js/libs/angular-sanitize.min.js') }}"></script>*/
/*           <script src="{{ asset('js/libs/angular-strap.js') }}"></script>*/
/*           <script src="{{ asset('js/libs/angular-strap.tpl.js') }}"></script>*/
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
