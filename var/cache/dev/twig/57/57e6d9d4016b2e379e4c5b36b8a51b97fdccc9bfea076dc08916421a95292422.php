<?php

/* base.html.twig */
class __TwigTemplate_5639bbeef1d611b6de21dffa133ddbeb2bb65bd2f35559768c705ab92f741d23 extends Twig_Template
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
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_855e8d18f906e84451ee397b7b97c226729d5c4e72a0f51af2f6f96d17a6a072 = $this->env->getExtension("native_profiler");
        $__internal_855e8d18f906e84451ee397b7b97c226729d5c4e72a0f51af2f6f96d17a6a072->enter($__internal_855e8d18f906e84451ee397b7b97c226729d5c4e72a0f51af2f6f96d17a6a072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
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
            <style>
            tr:nth-child(odd) {background: #C5E0B4}
            tr:nth-child(even) {background: #f2f2f2}
            th{background: #548235}
            td,th{border:2px solid #fff;text-align: center}
            #page-2, #page-3, #page-4{display: none}


            </style>

</head>

    <body id=\"";
        // line 54
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" style=\"background:#fff\">

        ";
        // line 56
        $this->displayBlock('header', $context, $blocks);
        // line 191
        echo "        <div class=\"col-md-12 row\" >
          <div class=\"container-fluid\" style=\"min-height:350px\">
            ";
        // line 193
        $this->displayBlock('body', $context, $blocks);
        // line 196
        echo "          </div>
        </div>


        ";
        // line 200
        $this->displayBlock('footer', $context, $blocks);
        // line 210
        echo "
        ";
        // line 211
        $this->displayBlock('javascripts', $context, $blocks);
        // line 254
        echo "

    </body>
</html>
";
        
        $__internal_855e8d18f906e84451ee397b7b97c226729d5c4e72a0f51af2f6f96d17a6a072->leave($__internal_855e8d18f906e84451ee397b7b97c226729d5c4e72a0f51af2f6f96d17a6a072_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_78a895e0f78545101effb6a781e0fe919f83d0cdea16007268e3091f733d5c19 = $this->env->getExtension("native_profiler");
        $__internal_78a895e0f78545101effb6a781e0fe919f83d0cdea16007268e3091f733d5c19->enter($__internal_78a895e0f78545101effb6a781e0fe919f83d0cdea16007268e3091f733d5c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Binovalife :: WEB OFFICE";
        
        $__internal_78a895e0f78545101effb6a781e0fe919f83d0cdea16007268e3091f733d5c19->leave($__internal_78a895e0f78545101effb6a781e0fe919f83d0cdea16007268e3091f733d5c19_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d02b3b8f731af3521bcd22c4166e753690b3f70fe1265b23e1cae1c48bc8e9a5 = $this->env->getExtension("native_profiler");
        $__internal_d02b3b8f731af3521bcd22c4166e753690b3f70fe1265b23e1cae1c48bc8e9a5->enter($__internal_d02b3b8f731af3521bcd22c4166e753690b3f70fe1265b23e1cae1c48bc8e9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d02b3b8f731af3521bcd22c4166e753690b3f70fe1265b23e1cae1c48bc8e9a5->leave($__internal_d02b3b8f731af3521bcd22c4166e753690b3f70fe1265b23e1cae1c48bc8e9a5_prof);

    }

    // line 54
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_5f18d0ec362d874f20a546e7131d6e572103c0ee5ce7db122f09a4bb86678077 = $this->env->getExtension("native_profiler");
        $__internal_5f18d0ec362d874f20a546e7131d6e572103c0ee5ce7db122f09a4bb86678077->enter($__internal_5f18d0ec362d874f20a546e7131d6e572103c0ee5ce7db122f09a4bb86678077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_5f18d0ec362d874f20a546e7131d6e572103c0ee5ce7db122f09a4bb86678077->leave($__internal_5f18d0ec362d874f20a546e7131d6e572103c0ee5ce7db122f09a4bb86678077_prof);

    }

    // line 56
    public function block_header($context, array $blocks = array())
    {
        $__internal_0662ccb2a726f4cbab530aee647b44cf2043586b2a7f4b74cce7782858579e72 = $this->env->getExtension("native_profiler");
        $__internal_0662ccb2a726f4cbab530aee647b44cf2043586b2a7f4b74cce7782858579e72->enter($__internal_0662ccb2a726f4cbab530aee647b44cf2043586b2a7f4b74cce7782858579e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 57
        echo "        <div  style=\"background:#FAB329;min-height:30px;margin:0;width:100%;border-radius:0;margin:0;padding:0\" >

        </div>
      <nav class=\"navbar navbar-inverse yamm navbar-static-top\" style=\"background:#fff;width:100%\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\" >
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <div class=\"navbar-brand\" href=\"#\" style=\"padding:15px 0;margin-left:0;position:absolute;\">
                      <img  ng-src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("logo.png"), "html", null, true);
        echo "\"  class=\"img-responsive pull-left\" style=\"height:70px;padding:0\"/>
                </div>
                <div class=\"navbar-brand0\" href=\"#\" style=\"padding:15px 0;margin-left:80px;position:absolute;margin-top:25px\">
                      <span style=\"color:#548235;font-size:1.5em;margin-top:20px\">&nbsp;&nbsp;BINOVALIFE </span> <span style=\"color:#747474;padding-top:6px;font-size:1.5em;\">WEB OFFICE</span>
                      <!-- <img  ng-src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("loading.gif"), "html", null, true);
        echo "\"  class=\"pull-right\" /> -->
                </div>
            </div>
            <div  style=\"height: 1px;\" aria-expanded=\"false\" id=\"navbar\" class=\"navbar-collapse collapse\">
                <div class=\"text-right\" style=\"position:absolute:right:0;margin-top:15px;color:#4A7B3E;\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.period_in"), "html", null, true);
        echo ": <i style=\"color:#747474;margin-right:5px;font-style:normal\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.days_in"), "html", null, true);
        echo "</i></div>
                <ul class=\"nav navbar-nav navbar-right navbar-top-drops\" style=\"padding:20px \">
                  ";
        // line 80
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 81
            echo "                      <li>
                        <span style=\"color:#7474742\">&nbsp;&nbsp;";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.status_in"), "html", null, true);
            echo " <span style=\"color:#FAB329;padding-top:6px;text-transform:uppercase;margin-right:20px\">manager Emeraude</span> </span>
                          <!-- <a href=\"";
            // line 83
            echo $this->env->getExtension('routing')->getPath("security_logout");
            echo "\">
                              <input type=\"hidden\" ng-model=\"firstname\" value=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "\">
                              <i class=\"fa fa-sign-out\"></i> ";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.logout"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                          </a> -->
                    </li>
                ";
        }
        // line 89
        echo "                    <li class=\"dropdown profile-dropdown\" >
                        <a  class=\"dropdown-toggle button-wave\" data-toggle=\"dropdown\" role=\"button\" style=\"background:#fff;padding:4px 20px;font-size:80%;color:#000;border:1px solid #ddd\">
                          ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('app.extension')->getLocales());
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 92
            echo "                              ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == $this->getAttribute($context["locale"], "code", array()))) {
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["locale"], "name", array())), "html", null, true);
                echo " ";
            }
            // line 93
            echo "                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                          &nbsp;&nbsp;&nbsp;<i class=\"fa fa-caret-down\" style=\"color:#747474\"></i></a>
                        <ul class=\"dropdown-menu\" style=\"border-radius:0;margin-top:1px\" >
                            <!-- <li><a href=\"#/customers\" style=\"padding:4px 10px;font-size:80%;margin-top:6px\">French</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#/logout\" style=\"padding:4px 10px;font-size:80%\">Deutch</a></li> -->
                            ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('app.extension')->getLocales());
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 100
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
        // line 102
        echo "                        </ul>
                    </li>


                </ul>


            </div><!--/.nav-collapse -->


        </div><!--/.container-fluid -->
    </nav>
    <nav class=\"navbar\" style=\"background:#E2F0D9;top:60px;padding:0;margin:0;width:100%;border-radius:0;height:40px\" >
        <div class=\"container-fluid\">
      <ul class=\"nav navbar-nav navbar-main\">
        <li><a href=\"#\" style=\"color:#FAB329!important;font-weight:600;font-size:13px\">";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu_1"), "html", null, true);
        echo "</a></li>
        <li class=\"dropdown profile-dropdown\" >
            <a  class=\"dropdown-toggle button-wave\" data-toggle=\"dropdown\" role=\"button\"  style=\"color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em\">";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu_2"), "html", null, true);
        echo "&nbsp;&nbsp;&nbsp;<i class=\"fa fa-caret-down\" style=\"color:#747474\"></i></a>
            <ul class=\"dropdown-menu\" style=\"border-radius:0;margin-top:1px\" >
                <li><a href=\"#\" style=\"padding:4px 10px;font-size:80%;margin-top:6px\" id=\"pre-register\">Pre-register</a></li>
                <li class=\"divider\"></li>
                <li><a href=\"#\"  style=\"padding:4px 10px;font-size:80%\" id=\"register\">Register</a></li>

            </ul>
        </li>
        <li class=\"dropdown profile-dropdown\" >
            <a  class=\"dropdown-toggle button-wave\" data-toggle=\"dropdown\" role=\"button\"  style=\"color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em\">";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu_3"), "html", null, true);
        echo "&nbsp;&nbsp;&nbsp;<i class=\"fa fa-caret-down\" style=\"color:#747474\"></i></a>
            <ul class=\"dropdown-menu\" style=\"border-radius:0;margin-top:1px\" >
                <li><a href=\"#\" style=\"padding:4px 10px;font-size:80%;margin-top:6px\" id=\"account\" >Account</a></li>
                <li class=\"divider\"></li>
                <li><a href=\"";
        // line 132
        echo $this->env->getExtension('routing')->getPath("security_logout");
        echo "\"  style=\"padding:4px 10px;font-size:80%\">Logout</a></li>

            </ul>
        </li>
        <li class=\"dropdown profile-dropdown\" >
            <a  class=\"dropdown-toggle button-wave\" data-toggle=\"dropdown\" role=\"button\"  style=\"color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em\">";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu_4"), "html", null, true);
        echo "&nbsp;&nbsp;&nbsp;<i class=\"fa fa-caret-down\" style=\"color:#747474\"></i></a>
            <ul class=\"dropdown-menu\" style=\"border-radius:0;margin-top:1px\" >
                <li><a href=\"";
        // line 139
        echo $this->env->getExtension('routing')->getPath("distributor_index");
        echo "\" style=\"padding:4px 10px;font-size:80%;margin-top:6px\" id=\"network\">Network</a></li>
                <li class=\"divider\"></li>
                <!-- <li><a href=\"";
        // line 141
        echo $this->env->getExtension('routing')->getPath("security_logout");
        echo "\"  style=\"padding:4px 10px;font-size:80%\">Logout</a></li> -->

            </ul>
        </li>
        <!-- <li><a href=\"team.html\"  style=\"color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em\">My Account</a></li> -->
        <!-- <li><a href=\"team.html\"  style=\"color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em\">My Network</a></li> -->
        <li><a  href=\"contact.html\"  style=\"color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em\">";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu_5"), "html", null, true);
        echo "</a></li>
        <li><a  href=\"contact.html\"  style=\"color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em\">";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu_6"), "html", null, true);
        echo "</a></li>
        <li><a  href=\"contact.html\"  style=\"color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em\">";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu_7"), "html", null, true);
        echo "</a></li>
      </ul>

      </div>
    </nav>
    <nav class=\"navbar\" style=\"background:#f2f2f2;margin-top:60px;width:100%;border-radius:0;position:relative;height:40px\" >

      <div class=\"container-fluid\">
        ";
        // line 157
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 158
            echo "          <ul class=\"nav navbar-nav\" style=\"padding:10px 5px\">
            <li>
              <span style=\"font-size:1em;color:#4A7B3E\">&nbsp;&nbsp;";
            // line 160
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.welcome_in"), "html", null, true);
            echo "&nbsp;&nbsp;&nbsp;<span style=\"color:#4A7B3E;padding-top:6px;text-transform:capitalize;margin-right:20px;font-weight:400\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo ", </span> </span>

          </li>
          <li>
            <span style=\"font-size:1em;color:#747474\">&nbsp;&nbsp;";
            // line 164
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.user_nber"), "html", null, true);
            echo "&nbsp;&nbsp;&nbsp;<span style=\"color:#747474;padding-top:6px;text-transform:capitalize;margin-right:20px;font-weight:400\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
            echo "</span> </span>

        </li>
        </ul>
      ";
        }
        // line 169
        echo "      <ul class=\"nav navbar-nav navbar-main pull-right\">

        <li class=\"dropdown profile-dropdown\" >
            <a  class=\"dropdown-toggle button-wave\" data-toggle=\"dropdown\" role=\"button\"  style=\"color:#747474!important;font-weight:400;font-size:13px;padding-left:3em;padding-right:3em\">";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu_8"), "html", null, true);
        echo "&nbsp;&nbsp;&nbsp;<i class=\"fa fa-caret-down\" style=\"color:#747474\"></i></a>
            <ul class=\"dropdown-menu\" style=\"border-radius:0;margin-top:1px\" >
                <li><a href=\"#\" style=\"padding:4px 10px;font-size:80%;margin-top:6px\">Historique</a></li>
                <li class=\"divider\"></li>
                <li><a href=\"#\"  style=\"padding:4px 10px;font-size:80%\">Archive</a></li>

            </ul>
        </li>
        <!-- <li><a href=\"team.html\"  style=\"color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em\">My Account</a></li> -->
        <li><a href=\"#\"  style=\"color:#747474!important;font-weight:400;font-size:13px;padding-left:3em;padding-right:3em\">";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu_9"), "html", null, true);
        echo "</a></li>

      </ul>
      </div>

    </nav>
    <!--top navigation-->

    <!-- Static navbar -->
        ";
        
        $__internal_0662ccb2a726f4cbab530aee647b44cf2043586b2a7f4b74cce7782858579e72->leave($__internal_0662ccb2a726f4cbab530aee647b44cf2043586b2a7f4b74cce7782858579e72_prof);

    }

    // line 193
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e352e604c7934f59d5bc9d7bee5536eb23a2caee571da9b35a78b76f9c2c9d5 = $this->env->getExtension("native_profiler");
        $__internal_5e352e604c7934f59d5bc9d7bee5536eb23a2caee571da9b35a78b76f9c2c9d5->enter($__internal_5e352e604c7934f59d5bc9d7bee5536eb23a2caee571da9b35a78b76f9c2c9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 194
        echo "
            ";
        
        $__internal_5e352e604c7934f59d5bc9d7bee5536eb23a2caee571da9b35a78b76f9c2c9d5->leave($__internal_5e352e604c7934f59d5bc9d7bee5536eb23a2caee571da9b35a78b76f9c2c9d5_prof);

    }

    // line 200
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3852357f8f9d2dec9f546408bff6d1c4364bfe35ae08d56473e0791ea6eafa6d = $this->env->getExtension("native_profiler");
        $__internal_3852357f8f9d2dec9f546408bff6d1c4364bfe35ae08d56473e0791ea6eafa6d->enter($__internal_3852357f8f9d2dec9f546408bff6d1c4364bfe35ae08d56473e0791ea6eafa6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 201
        echo "        <div class=\"text-center\">

        <i style=\"color:#548235;font-style:normal\"> ©&nbsp;&nbsp;&nbsp;Copyright 2016, Binovalife. </i>

        </div>
        <div class=\"text-center\" style=\"background:#FFC000;min-height:20px;margin-top:1%\">

        </div>
        ";
        
        $__internal_3852357f8f9d2dec9f546408bff6d1c4364bfe35ae08d56473e0791ea6eafa6d->leave($__internal_3852357f8f9d2dec9f546408bff6d1c4364bfe35ae08d56473e0791ea6eafa6d_prof);

    }

    // line 211
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_af02755ca4aac0a9ce4fc98d60d585f32897c54911f44462c57b591ebc8d567b = $this->env->getExtension("native_profiler");
        $__internal_af02755ca4aac0a9ce4fc98d60d585f32897c54911f44462c57b591ebc8d567b->enter($__internal_af02755ca4aac0a9ce4fc98d60d585f32897c54911f44462c57b591ebc8d567b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 212
        echo "        ";
        // line 223
        echo "

            <script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/jquery-2.1.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-route.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-cookies.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-animate.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-mocks.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>

              <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>

              <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/loader.service.js"), "html", null, true);
        echo "\"></script>
              <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/loader.controller.js"), "html", null, true);
        echo "\"></script>
              <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/header.controller.js"), "html", null, true);
        echo "\"></script>
              <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footer.controller.js"), "html", null, true);
        echo "\"></script>

              <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/login.controller.js"), "html", null, true);
        echo "\"></script>
              <script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/logout.controller.js"), "html", null, true);
        echo "\"></script>
              <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/authentication.service.js"), "html", null, true);
        echo "\"></script>

              <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-sanitize.min.js"), "html", null, true);
        echo "\" data-semver=\"1.5.5\"></script>
              <script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-strap.js"), "html", null, true);
        echo "\" data-semver=\"v2.3.8\"></script>
              <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-strap.tpl.js"), "html", null, true);
        echo "\" data-semver=\"v2.3.8\"></script>

              <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/crypto-js.js"), "html", null, true);
        echo "\"></script>
              <script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/sha1.js"), "html", null, true);
        echo "\"></script>


        ";
        
        $__internal_af02755ca4aac0a9ce4fc98d60d585f32897c54911f44462c57b591ebc8d567b->leave($__internal_af02755ca4aac0a9ce4fc98d60d585f32897c54911f44462c57b591ebc8d567b_prof);

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
        return array (  558 => 250,  554 => 249,  549 => 247,  545 => 246,  541 => 245,  536 => 243,  532 => 242,  528 => 241,  523 => 239,  519 => 238,  515 => 237,  511 => 236,  506 => 234,  501 => 232,  497 => 231,  492 => 229,  488 => 228,  484 => 227,  480 => 226,  476 => 225,  472 => 223,  470 => 212,  464 => 211,  449 => 201,  443 => 200,  435 => 194,  429 => 193,  412 => 181,  400 => 172,  395 => 169,  385 => 164,  376 => 160,  372 => 158,  370 => 157,  359 => 149,  355 => 148,  351 => 147,  342 => 141,  337 => 139,  332 => 137,  324 => 132,  317 => 128,  305 => 119,  300 => 117,  283 => 102,  268 => 100,  264 => 99,  257 => 94,  251 => 93,  245 => 92,  241 => 91,  237 => 89,  228 => 85,  224 => 84,  220 => 83,  216 => 82,  213 => 81,  211 => 80,  204 => 78,  197 => 74,  190 => 70,  175 => 57,  169 => 56,  158 => 54,  147 => 37,  143 => 36,  139 => 35,  135 => 34,  130 => 33,  128 => 22,  122 => 21,  110 => 9,  99 => 254,  97 => 211,  94 => 210,  92 => 200,  86 => 196,  84 => 193,  80 => 191,  78 => 56,  73 => 54,  56 => 41,  54 => 21,  39 => 9,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
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
/*             <style>*/
/*             tr:nth-child(odd) {background: #C5E0B4}*/
/*             tr:nth-child(even) {background: #f2f2f2}*/
/*             th{background: #548235}*/
/*             td,th{border:2px solid #fff;text-align: center}*/
/*             #page-2, #page-3, #page-4{display: none}*/
/* */
/* */
/*             </style>*/
/* */
/* </head>*/
/* */
/*     <body id="{% block body_id %}{% endblock %}" style="background:#fff">*/
/* */
/*         {% block header %}*/
/*         <div  style="background:#FAB329;min-height:30px;margin:0;width:100%;border-radius:0;margin:0;padding:0" >*/
/* */
/*         </div>*/
/*       <nav class="navbar navbar-inverse yamm navbar-static-top" style="background:#fff;width:100%">*/
/*         <div class="container-fluid">*/
/*             <div class="navbar-header" >*/
/*                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <div class="navbar-brand" href="#" style="padding:15px 0;margin-left:0;position:absolute;">*/
/*                       <img  ng-src="{{ asset('logo.png') }}"  class="img-responsive pull-left" style="height:70px;padding:0"/>*/
/*                 </div>*/
/*                 <div class="navbar-brand0" href="#" style="padding:15px 0;margin-left:80px;position:absolute;margin-top:25px">*/
/*                       <span style="color:#548235;font-size:1.5em;margin-top:20px">&nbsp;&nbsp;BINOVALIFE </span> <span style="color:#747474;padding-top:6px;font-size:1.5em;">WEB OFFICE</span>*/
/*                       <!-- <img  ng-src="{{ asset('loading.gif') }}"  class="pull-right" /> -->*/
/*                 </div>*/
/*             </div>*/
/*             <div  style="height: 1px;" aria-expanded="false" id="navbar" class="navbar-collapse collapse">*/
/*                 <div class="text-right" style="position:absolute:right:0;margin-top:15px;color:#4A7B3E;">{{ 'action.period_in'|trans }}: <i style="color:#747474;margin-right:5px;font-style:normal">{{ 'action.days_in'|trans }}</i></div>*/
/*                 <ul class="nav navbar-nav navbar-right navbar-top-drops" style="padding:20px ">*/
/*                   {% if app.user %}*/
/*                       <li>*/
/*                         <span style="color:#7474742">&nbsp;&nbsp;{{ 'action.status_in'|trans }} <span style="color:#FAB329;padding-top:6px;text-transform:uppercase;margin-right:20px">manager Emeraude</span> </span>*/
/*                           <!-- <a href="{{ path('security_logout') }}">*/
/*                               <input type="hidden" ng-model="firstname" value="{{app.user.username}}">*/
/*                               <i class="fa fa-sign-out"></i> {{ 'menu.logout'|trans }} {{app.user.username}}*/
/*                           </a> -->*/
/*                     </li>*/
/*                 {% endif %}*/
/*                     <li class="dropdown profile-dropdown" >*/
/*                         <a  class="dropdown-toggle button-wave" data-toggle="dropdown" role="button" style="background:#fff;padding:4px 20px;font-size:80%;color:#000;border:1px solid #ddd">*/
/*                           {% for locale in locales() %}*/
/*                               {% if app.request.locale == locale.code %}{{ locale.name|capitalize }} {% endif %}*/
/*                           {% endfor %}*/
/*                           &nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down" style="color:#747474"></i></a>*/
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
/* */
/* */
/*             </div><!--/.nav-collapse -->*/
/* */
/* */
/*         </div><!--/.container-fluid -->*/
/*     </nav>*/
/*     <nav class="navbar" style="background:#E2F0D9;top:60px;padding:0;margin:0;width:100%;border-radius:0;height:40px" >*/
/*         <div class="container-fluid">*/
/*       <ul class="nav navbar-nav navbar-main">*/
/*         <li><a href="#" style="color:#FAB329!important;font-weight:600;font-size:13px">{{ 'menu_1'|trans }}</a></li>*/
/*         <li class="dropdown profile-dropdown" >*/
/*             <a  class="dropdown-toggle button-wave" data-toggle="dropdown" role="button"  style="color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em">{{ 'menu_2'|trans }}&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down" style="color:#747474"></i></a>*/
/*             <ul class="dropdown-menu" style="border-radius:0;margin-top:1px" >*/
/*                 <li><a href="#" style="padding:4px 10px;font-size:80%;margin-top:6px" id="pre-register">Pre-register</a></li>*/
/*                 <li class="divider"></li>*/
/*                 <li><a href="#"  style="padding:4px 10px;font-size:80%" id="register">Register</a></li>*/
/* */
/*             </ul>*/
/*         </li>*/
/*         <li class="dropdown profile-dropdown" >*/
/*             <a  class="dropdown-toggle button-wave" data-toggle="dropdown" role="button"  style="color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em">{{ 'menu_3'|trans }}&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down" style="color:#747474"></i></a>*/
/*             <ul class="dropdown-menu" style="border-radius:0;margin-top:1px" >*/
/*                 <li><a href="#" style="padding:4px 10px;font-size:80%;margin-top:6px" id="account" >Account</a></li>*/
/*                 <li class="divider"></li>*/
/*                 <li><a href="{{ path('security_logout') }}"  style="padding:4px 10px;font-size:80%">Logout</a></li>*/
/* */
/*             </ul>*/
/*         </li>*/
/*         <li class="dropdown profile-dropdown" >*/
/*             <a  class="dropdown-toggle button-wave" data-toggle="dropdown" role="button"  style="color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em">{{ 'menu_4'|trans }}&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down" style="color:#747474"></i></a>*/
/*             <ul class="dropdown-menu" style="border-radius:0;margin-top:1px" >*/
/*                 <li><a href="{{ path('distributor_index') }}" style="padding:4px 10px;font-size:80%;margin-top:6px" id="network">Network</a></li>*/
/*                 <li class="divider"></li>*/
/*                 <!-- <li><a href="{{ path('security_logout') }}"  style="padding:4px 10px;font-size:80%">Logout</a></li> -->*/
/* */
/*             </ul>*/
/*         </li>*/
/*         <!-- <li><a href="team.html"  style="color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em">My Account</a></li> -->*/
/*         <!-- <li><a href="team.html"  style="color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em">My Network</a></li> -->*/
/*         <li><a  href="contact.html"  style="color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em">{{ 'menu_5'|trans }}</a></li>*/
/*         <li><a  href="contact.html"  style="color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em">{{ 'menu_6'|trans }}</a></li>*/
/*         <li><a  href="contact.html"  style="color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em">{{ 'menu_7'|trans }}</a></li>*/
/*       </ul>*/
/* */
/*       </div>*/
/*     </nav>*/
/*     <nav class="navbar" style="background:#f2f2f2;margin-top:60px;width:100%;border-radius:0;position:relative;height:40px" >*/
/* */
/*       <div class="container-fluid">*/
/*         {% if app.user %}*/
/*           <ul class="nav navbar-nav" style="padding:10px 5px">*/
/*             <li>*/
/*               <span style="font-size:1em;color:#4A7B3E">&nbsp;&nbsp;{{ 'action.welcome_in'|trans }}&nbsp;&nbsp;&nbsp;<span style="color:#4A7B3E;padding-top:6px;text-transform:capitalize;margin-right:20px;font-weight:400">{{app.user.username}}, </span> </span>*/
/* */
/*           </li>*/
/*           <li>*/
/*             <span style="font-size:1em;color:#747474">&nbsp;&nbsp;{{ 'action.user_nber'|trans }}&nbsp;&nbsp;&nbsp;<span style="color:#747474;padding-top:6px;text-transform:capitalize;margin-right:20px;font-weight:400">{{app.user.id}}</span> </span>*/
/* */
/*         </li>*/
/*         </ul>*/
/*       {% endif %}*/
/*       <ul class="nav navbar-nav navbar-main pull-right">*/
/* */
/*         <li class="dropdown profile-dropdown" >*/
/*             <a  class="dropdown-toggle button-wave" data-toggle="dropdown" role="button"  style="color:#747474!important;font-weight:400;font-size:13px;padding-left:3em;padding-right:3em">{{ 'menu_8'|trans }}&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down" style="color:#747474"></i></a>*/
/*             <ul class="dropdown-menu" style="border-radius:0;margin-top:1px" >*/
/*                 <li><a href="#" style="padding:4px 10px;font-size:80%;margin-top:6px">Historique</a></li>*/
/*                 <li class="divider"></li>*/
/*                 <li><a href="#"  style="padding:4px 10px;font-size:80%">Archive</a></li>*/
/* */
/*             </ul>*/
/*         </li>*/
/*         <!-- <li><a href="team.html"  style="color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em">My Account</a></li> -->*/
/*         <li><a href="#"  style="color:#747474!important;font-weight:400;font-size:13px;padding-left:3em;padding-right:3em">{{ 'menu_9'|trans }}</a></li>*/
/* */
/*       </ul>*/
/*       </div>*/
/* */
/*     </nav>*/
/*     <!--top navigation-->*/
/* */
/*     <!-- Static navbar -->*/
/*         {% endblock %}*/
/*         <div class="col-md-12 row" >*/
/*           <div class="container-fluid" style="min-height:350px">*/
/*             {% block body %}*/
/* */
/*             {% endblock %}*/
/*           </div>*/
/*         </div>*/
/* */
/* */
/*         {% block footer %}*/
/*         <div class="text-center">*/
/* */
/*         <i style="color:#548235;font-style:normal"> ©&nbsp;&nbsp;&nbsp;Copyright 2016, Binovalife. </i>*/
/* */
/*         </div>*/
/*         <div class="text-center" style="background:#FFC000;min-height:20px;margin-top:1%">*/
/* */
/*         </div>*/
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
/* */
/*             <script src="{{ asset('js/libs/jquery-2.1.1.min.js') }}"></script>*/
/*             <script src="{{ asset('js/libs/angular.js') }}"></script>*/
/*             <script src="{{ asset('js/libs/angular-route.js') }}"></script>*/
/*             <script src="{{ asset('js/libs/angular-cookies.js') }}"></script>*/
/*             <script src="{{ asset('js/libs/angular-animate.js') }}"></script>*/
/* */
/*             <script src="{{ asset('js/libs/angular-mocks.js') }}"></script>*/
/*             <script src="{{ asset('js/bootstrap.js') }}"></script>*/
/* */
/*               <script src="{{ asset('js/app.js') }}"></script>*/
/* */
/*               <script src="{{ asset('js/loader.service.js') }}"></script>*/
/*               <script src="{{ asset('js/loader.controller.js') }}"></script>*/
/*               <script src="{{ asset('js/header.controller.js') }}"></script>*/
/*               <script src="{{ asset('js/footer.controller.js') }}"></script>*/
/* */
/*               <script src="{{ asset('js/login.controller.js') }}"></script>*/
/*               <script src="{{ asset('js/logout.controller.js') }}"></script>*/
/*               <script src="{{ asset('js/authentication.service.js') }}"></script>*/
/* */
/*               <script src="{{ asset('js/libs/angular-sanitize.min.js') }}" data-semver="1.5.5"></script>*/
/*               <script src="{{ asset('js/libs/angular-strap.js') }}" data-semver="v2.3.8"></script>*/
/*               <script src="{{ asset('js/libs/angular-strap.tpl.js') }}" data-semver="v2.3.8"></script>*/
/* */
/*               <script src="{{ asset('js/libs/crypto-js.js') }}"></script>*/
/*               <script src="{{ asset('js/libs/sha1.js') }}"></script>*/
/* */
/* */
/*         {% endblock %}*/
/* */
/* */
/*     </body>*/
/* </html>*/
/* */
