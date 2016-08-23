<?php

/* default/index.html.twig */
class __TwigTemplate_0b3ca948d43e295f494b94a87d7d63b08ec40eb942373c0d5c15db06de4fb610 extends Twig_Template
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
        $__internal_bf42cb12ddba354c126aeeba18b130914fdb71183d994f6a8e607f4dc7908689 = $this->env->getExtension("native_profiler");
        $__internal_bf42cb12ddba354c126aeeba18b130914fdb71183d994f6a8e607f4dc7908689->enter($__internal_bf42cb12ddba354c126aeeba18b130914fdb71183d994f6a8e607f4dc7908689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

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
            <style>
            tr:nth-child(odd) {background: #C5E0B4}
            tr:nth-child(even) {background: #f2f2f2}
            th{background: #548235}
            td,th{border:2px solid #fff;text-align: center}
            #page-2, #page-3, #page-4{display: none}


            </style>

</head>
<body class=\"pace-done\" style=\"background:#fff\">
    <!-- <loader></loader> -->
    <!-- Static navbar -->
    <!-- <header ng-if=\"showNav\"></header> -->
    <!-- <div class=\"container page-wrapper\">
      <div ng-class=\"{ 'alert': flash, 'alert-success': flash.type === 'success', 'alert-danger': flash.type === 'error' }\" ng-if=\"flash\" ng-bind=\"flash.message\"></div>

    </div> -->
    <!-- Custom footer -  -->
    <!-- <uifooter></uifooter> -->
    <!-- <div ng-view></div> -->
    <div  style=\"background:#FAB329;min-height:30px;margin:0;width:100%;border-radius:0;margin:0;padding:0\" >

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
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("logo.png"), "html", null, true);
        echo "\"  class=\"img-responsive pull-left\" style=\"height:70px;padding:0\"/>
            </div>
            <div class=\"navbar-brand0\" href=\"#\" style=\"padding:15px 0;margin-left:80px;position:absolute;margin-top:25px\">
                  <span style=\"color:#548235;font-size:1.5em;margin-top:20px\">&nbsp;&nbsp;BINOVALIFE </span> <span style=\"color:#747474;padding-top:6px;font-size:1.5em;\">WEB OFFICE</span>
                  <!-- <img  ng-src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("loading.gif"), "html", null, true);
        echo "\"  class=\"pull-right\" /> -->
            </div>
        </div>
        <div  style=\"height: 1px;\" aria-expanded=\"false\" id=\"navbar\" class=\"navbar-collapse collapse\">
            <div class=\"text-right\" style=\"position:absolute:right:0;margin-top:15px;color:#4A7B3E;\">";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.period_in"), "html", null, true);
        echo ": <i style=\"color:#747474;margin-right:5px;font-style:normal\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.days_in"), "html", null, true);
        echo "</i></div>
            <ul class=\"nav navbar-nav navbar-right navbar-top-drops\" style=\"padding:20px \">
              ";
        // line 87
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 88
            echo "                  <li>
                    <span style=\"color:#7474742\">&nbsp;&nbsp;";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.status_in"), "html", null, true);
            echo " <span style=\"color:#FAB329;padding-top:6px;text-transform:uppercase;margin-right:20px\">manager Emeraude</span> </span>
                      <!-- <a href=\"";
            // line 90
            echo $this->env->getExtension('routing')->getPath("security_logout");
            echo "\">
                          <input type=\"hidden\" ng-model=\"firstname\" value=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "\">
                          <i class=\"fa fa-sign-out\"></i> ";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.logout"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                      </a> -->
                </li>
            ";
        }
        // line 96
        echo "                <li class=\"dropdown profile-dropdown\" >
                    <a  class=\"dropdown-toggle button-wave\" data-toggle=\"dropdown\" role=\"button\" style=\"background:#fff;padding:4px 20px;font-size:80%;color:#000;border:1px solid #ddd\">
                      ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('app.extension')->getLocales());
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 99
            echo "                          ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == $this->getAttribute($context["locale"], "code", array()))) {
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["locale"], "name", array())), "html", null, true);
                echo " ";
            }
            // line 100
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                      &nbsp;&nbsp;&nbsp;<i class=\"fa fa-caret-down\" style=\"color:#747474\"></i></a>
                    <ul class=\"dropdown-menu\" style=\"border-radius:0;margin-top:1px\" >
                        <!-- <li><a href=\"#/customers\" style=\"padding:4px 10px;font-size:80%;margin-top:6px\">French</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#/logout\" style=\"padding:4px 10px;font-size:80%\">Deutch</a></li> -->
                        ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('app.extension')->getLocales());
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 107
            echo "                            <li  ";
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
        // line 109
        echo "                    </ul>
                </li>


            </ul>


        </div><!--/.nav-collapse -->


    </div><!--/.container-fluid -->
</nav>
<nav class=\"navbar\" style=\"background:#E2F0D9;top:60px;padding:0;margin:0;width:100%;border-radius:0;height:40px\" >
    <div class=\"container-fluid\">
  <ul class=\"nav navbar-nav navbar-main\">
    <li><a href=\"index.html\" style=\"color:#FAB329!important;font-weight:600;font-size:13px\">Home</a></li>
    <!-- <li><a  href=\"courses.html\"  style=\"padding-left:3em;color:#4A7B3E!important;font-weight:600;font-size:13px;padding-right:3em\">Registration</a></li> -->

    <li class=\"dropdown profile-dropdown\" >
        <a  class=\"dropdown-toggle button-wave\" data-toggle=\"dropdown\" role=\"button\"  style=\"color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em\">Registration&nbsp;&nbsp;&nbsp;<i class=\"fa fa-caret-down\" style=\"color:#747474\"></i></a>
        <ul class=\"dropdown-menu\" style=\"border-radius:0;margin-top:1px\" >
            <li><a href=\"#\" style=\"padding:4px 10px;font-size:80%;margin-top:6px\" id=\"pre-register\">Pre-register</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"#\"  style=\"padding:4px 10px;font-size:80%\" id=\"register\">Register</a></li>

        </ul>
    </li>
    <li class=\"dropdown profile-dropdown\" >
        <a  class=\"dropdown-toggle button-wave\" data-toggle=\"dropdown\" role=\"button\"  style=\"color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em\">My Account&nbsp;&nbsp;&nbsp;<i class=\"fa fa-caret-down\" style=\"color:#747474\"></i></a>
        <ul class=\"dropdown-menu\" style=\"border-radius:0;margin-top:1px\" >
            <li><a href=\"#\" style=\"padding:4px 10px;font-size:80%;margin-top:6px\" id=\"account\" >Account</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"";
        // line 141
        echo $this->env->getExtension('routing')->getPath("security_logout");
        echo "\"  style=\"padding:4px 10px;font-size:80%\">Logout</a></li>

        </ul>
    </li>
    <li class=\"dropdown profile-dropdown\" >
        <a  class=\"dropdown-toggle button-wave\" data-toggle=\"dropdown\" role=\"button\"  style=\"color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em\">My Network&nbsp;&nbsp;&nbsp;<i class=\"fa fa-caret-down\" style=\"color:#747474\"></i></a>
        <ul class=\"dropdown-menu\" style=\"border-radius:0;margin-top:1px\" >
            <li><a href=\"#\" style=\"padding:4px 10px;font-size:80%;margin-top:6px\" id=\"network\">Network</a></li>
            <li class=\"divider\"></li>
            <!-- <li><a href=\"";
        // line 150
        echo $this->env->getExtension('routing')->getPath("security_logout");
        echo "\"  style=\"padding:4px 10px;font-size:80%\">Logout</a></li> -->

        </ul>
    </li>
    <!-- <li><a href=\"team.html\"  style=\"color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em\">My Account</a></li> -->
    <!-- <li><a href=\"team.html\"  style=\"color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em\">My Network</a></li> -->
    <li><a  href=\"contact.html\"  style=\"color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em\">Rapport</a></li>
    <li><a  href=\"contact.html\"  style=\"color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em\">Commissions</a></li>
    <li><a  href=\"contact.html\"  style=\"color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em\">Commandes</a></li>
  </ul>

  </div>
</nav>
<nav class=\"navbar\" style=\"background:#f2f2f2;margin-top:60px;width:100%;border-radius:0;position:relative;height:40px\" >

  <div class=\"container-fluid\">
    ";
        // line 166
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 167
            echo "      <ul class=\"nav navbar-nav\" style=\"padding:10px 5px\">
        <li>
          <span style=\"font-size:1em;color:#4A7B3E\">&nbsp;&nbsp;";
            // line 169
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.welcome_in"), "html", null, true);
            echo "&nbsp;&nbsp;&nbsp;<span style=\"color:#4A7B3E;padding-top:6px;text-transform:capitalize;margin-right:20px;font-weight:400\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo ", </span> </span>

      </li>
      <li>
        <span style=\"font-size:1em;color:#747474\">&nbsp;&nbsp;";
            // line 173
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.user_nber"), "html", null, true);
            echo "&nbsp;&nbsp;&nbsp;<span style=\"color:#747474;padding-top:6px;text-transform:capitalize;margin-right:20px;font-weight:400\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
            echo "</span> </span>

    </li>
    </ul>
  ";
        }
        // line 178
        echo "  <ul class=\"nav navbar-nav navbar-main pull-right\">

    <li class=\"dropdown profile-dropdown\" >
        <a  class=\"dropdown-toggle button-wave\" data-toggle=\"dropdown\" role=\"button\"  style=\"color:#747474!important;font-weight:400;font-size:13px;padding-left:3em;padding-right:3em\">Historique et Archives&nbsp;&nbsp;&nbsp;<i class=\"fa fa-caret-down\" style=\"color:#747474\"></i></a>
        <ul class=\"dropdown-menu\" style=\"border-radius:0;margin-top:1px\" >
            <li><a href=\"#\" style=\"padding:4px 10px;font-size:80%;margin-top:6px\">Historique</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"";
        // line 185
        echo $this->env->getExtension('routing')->getPath("security_logout");
        echo "\"  style=\"padding:4px 10px;font-size:80%\">Archive</a></li>

        </ul>
    </li>
    <!-- <li><a href=\"team.html\"  style=\"color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em\">My Account</a></li> -->
    <li><a href=\"#\"  style=\"color:#747474!important;font-weight:400;font-size:13px;padding-left:3em;padding-right:3em\">Pharmacovigilance</a></li>

  </ul>
  </div>

</nav>
<!--top navigation-->

<!-- Static navbar -->
<div class=\"col-md-12 row\" >
  <div class=\"container\" style=\"min-height:350px\">

    <div class=\"col-md-12 navbar-brand\" href=\"#\" style=\"padding:15px 0;\" id=\"page-1\">
          <h6 style=\"color:#747474;font-size:.9em;margin-top:20px\">&nbsp;&nbsp;";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.dashboard_in"), "html", null, true);
        echo "  </h6>

    </div>
    <div class=\"col-md-12 row\" id=\"page-3\">
      <div class=\"container\">
          <div class=\"col-md-12 navbar-brand\" href=\"#\" style=\"padding:15px 0;\">
        <h6 style=\"color:#747474;font-size:.8em;margin-top:20px\">&nbsp;&nbsp;";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.network_in"), "html", null, true);
        echo "  </h6>
      </div>
         <div class=\"col-md-12 text-center\" style=\"margin-top:1%;background:#fafafa;padding-top:2%;padding-bottom:2%\">

           <div class=\"col-md-3\" style=\"height:120px;background:#f2f2f2;padding:5%\">
             <h4>No Photo Available</h4>

            </div>
            <div class=\"col-md-3\" style=\"height:120px;background:#ffff\">
              <div class=\"col-md-12\" style=\"height:35px;background:#7f7f7f;padding:10px;color:#fff;font-weight:600\">
                     <h4 style=\"text-transform:uppercase\"><strong>";
        // line 219
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastname", array()), "html", null, true);
        echo "</strong></h4>
               </div>
               <div class=\"col-md-12\" style=\"height:50px;background:#fff;padding:10px;color:#747474;font-weight:600f\">
                  <h4>Parrainé par Username, N° ID</h4>
                </div>
                <div class=\"col-md-12\" style=\"height:35px;background:#7f7f7f;padding:10px;color:#fff;font-weight:600\">
                    <h4>Total VPP : 0000</h4>
                 </div>

             </div>
             <div class=\"col-md-3\" style=\"height:120px;background:#ffff\">
               <div class=\"col-md-12\" style=\"height:35px;background:#7f7f7f;padding:10px;color:#fff;font-weight:600\">
                    <h4>Total VPP : 0000</h4>
                </div>
                <div class=\"col-md-12\" style=\"height:50px;background:#fff;padding:10px;color:#747474;font-weight:600\">
                      <h4>Total VPP : 0000</h4>
                 </div>
                 <div class=\"col-md-12\" style=\"height:35px;background:#7f7f7f;padding:10px;color:#fff;font-weight:600\">
                      <h4>Total VPP : 0000</h4>
                  </div>

              </div>
              <div class=\"col-md-3\" style=\"height:120px;background:#ffff\">
                <div class=\"col-md-12\" style=\"height:35px;background:#7f7f7f;padding:10px;color:#fff;font-weight:600\">
                      <h4>Total VPP : 0000</h4>
                 </div>
                 <div class=\"col-md-12\" style=\"height:50px;background:#fff;padding:10px;color:#747474;font-weight:600\">
                      <h4>Total VPP : 0000</h4>
                  </div>
                  <div class=\"col-md-12\" style=\"height:35px;background:#7f7f7f;padding:10px;color:#fff;font-weight:600\">
                        <h4>Total VPP : 0000</h4>
                   </div>

               </div>

          </div>
             <div class=\"col-md-12\" style=\"margin-top:1%;background:#fafafa;padding-top:2%;padding-bottom:2%\">
               <table class=\"table table-inverse\">
   <thead style=\"background:#548235;color:#fff\">
     <tr>
       <th>(dd/mm/aa)</th>
       <th>Génération</th>
       <th>Full Name(s)</th>
       <th>Grade</th>
       <th>ID</th>
       <th>Pays</th>
       <th>Ville</th>
       <th>Statut</th>
       <th>Adresse (BP, Telph et Email)</th>
     </tr>
   </thead>
   <tbody>
     <tr>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
     </tr>
     <tr>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
     </tr>
     <tr>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
     </tr>
     <tr>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
       <td></td>
     </tr>

   </tbody>
   </table>



             </div>
      </div>
    </div>
         <div class=\"col-md-12\" style=\"margin-top:1%;background:#fafafa;padding-top:2%;padding-bottom:2%\" id=\"page-2\">


           <div class=\"col-md-12 navbar-brand\" href=\"#\" style=\"padding:15px 0;\">
                 <h6 style=\"color:#747474;font-size:.9em;margin-top:20px\">&nbsp;&nbsp;";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.register_in"), "html", null, true);
        echo "<i style=\"color:#747474;padding-top:6px;font-size:.8em;\" class=\"pull-right\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.comp_in"), "html", null, true);
        echo "</i>
</h6>
                 <!-- <h6 style=\"color:#747474;padding-top:6px;font-size:.8em;\">Découvrez l’exceptionnel pouvoir de compensation de notre marketing de réseau, en construisant votre équipe.</h6> -->
                 <!-- <img  ng-src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("loading.gif"), "html", null, true);
        echo "\"  class=\"pull-right\" /> -->
           </div>

           <div id=\"preRegistration\" style=\"padding-top:8em\">

             <form role=\"form\"  action=\"";
        // line 336
        echo $this->env->getExtension('routing')->getPath("dist_create");
        echo "\" method=\"post\">
               <div class=\"login-grids\">
                 <div class=\"col-md-6\">
                   <fieldset  id=\"body\">
                     <fieldset style=\"margin-top:10px\">
                       <label for=\"firstname\" class=\"col-md-4\">";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.fullname_in"), "html", null, true);
        echo "</label>
                       <input type=\"text\" name=\"text\" id=\"firstname\"  class=\"col-md-7\" style=\"padding-left:10px\">
                     </fieldset>
                     <fieldset style=\"margin-top:10px\">
                       <label for=\"lastname\"  class=\"col-md-4\">";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.name_in"), "html", null, true);
        echo "</label>
                       <input type=\"text\" name=\"text\" id=\"lastname\"  class=\"col-md-7\" style=\"padding-left:10px\">
                     </fieldset>
                     <fieldset style=\"margin-top:10px\">
                       <label for=\"birthdate\" class=\"col-md-4\">";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.birth_in"), "html", null, true);
        echo "</label>
                       <input type=\"text\" name=\"text\" id=\"birthdate\"  class=\"col-md-7\" style=\"padding-left:10px\">
                     </fieldset>
                     <fieldset style=\"margin-top:10px\">
                       <label for=\"phone\"  class=\"col-md-4\">";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.phone_in"), "html", null, true);
        echo "</label>
                       <input type=\"text\" name=\"text\" id=\"phone\"  class=\"col-md-7\" style=\"padding-left:10px\">
                     </fieldset>
                     <fieldset style=\"margin-top:10px\">
                       <label for=\"country\" class=\"col-md-4\">";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.country_in"), "html", null, true);
        echo "</label>
                       <input type=\"text\" name=\"text\" id=\"country\"  class=\"col-md-7\" style=\"padding-left:10px\">
                     </fieldset>
                     <fieldset style=\"margin-top:10px\">
                       <label for=\"city\"  class=\"col-md-4\">";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.city_in"), "html", null, true);
        echo "</label>
                       <input type=\"text\" name=\"text\" id=\"city\"  class=\"col-md-7\" style=\"padding-left:10px\">
                     </fieldset>
                     <fieldset  style=\"margin-top:10px\">
                       <label for=\"address\"  class=\"col-md-4\">";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.address_in"), "html", null, true);
        echo "</label>
                       <input type=\"text\" name=\"text\" id=\"address\"  class=\"col-md-7\" style=\"padding-left:10px\">
                     </fieldset>
                   </fieldset>

                 </div>
                 <fieldset id=\"body\">

                   <fieldset style=\"margin-top:10px\">
                     <label for=\"firstname\" class=\"col-md-4\">";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.username"), "html", null, true);
        echo "</label>
                     <input type=\"text\" name=\"text\" id=\"firstname\"  class=\"col-md-7\" style=\"padding-left:10px\">
                   </fieldset>
                   <fieldset style=\"margin-top:10px\">
                     <label for=\"lastname\"  class=\"col-md-4\">";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.password"), "html", null, true);
        echo "</label>
                     <input type=\"text\" name=\"text\" id=\"lastname\"  class=\"col-md-7\" style=\"padding-left:10px\">
                   </fieldset>
                   <fieldset style=\"margin-top:10px\">
                     <label for=\"birthdate\" class=\"col-md-4\">";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.password.confirm"), "html", null, true);
        echo "</label>
                     <input type=\"text\" name=\"text\" id=\"birthdate\"  class=\"col-md-7\" style=\"padding-left:10px\">
                   </fieldset>
                   <fieldset style=\"margin-top:10px\">
                     <label for=\"phone\"  class=\"col-md-4\">";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email"), "html", null, true);
        echo "</label>
                     <input type=\"text\" name=\"text\" id=\"phone\"  class=\"col-md-7\" style=\"padding-left:10px\">
                   </fieldset>
                   <fieldset style=\"margin-top:10px\">
                     <label for=\"country\" class=\"col-md-4\">";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email.confirm"), "html", null, true);
        echo "</label>
                     <input type=\"text\" name=\"text\" id=\"country\"  class=\"col-md-7\" style=\"padding-left:10px\">
                   </fieldset>
                   <fieldset style=\"margin-top:10px\">
                     <label for=\"city\"  class=\"col-md-4\">";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.kits"), "html", null, true);
        echo "</label>
                     <input type=\"text\" name=\"text\" id=\"city\"  class=\"col-md-7\" value=\"10000\" style=\"padding-left:10px\">
                   </fieldset>
                   <fieldset style=\"margin-top:20px\" style=\"margin-rigth:0;padding-right:0\">
                     <label for=\"city\"  class=\"col-md-4\"></label>
                      <button type=\"submit\" ng-disabled=\"form.\$invalid\" class=\"btn btn-primary btn-login col-md-8\" style=\"background:#548235;\">";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.validate_in"), "html", null, true);
        echo "</button>
                     <!-- <input type=\"submit\" name=\"text\" id=\"address\"  class=\"col-md-7\"> -->
                   </fieldset>
                 </fieldset>

               </div>
               </div>
             </form>
           </div>



          </div>


      </div>
</div>
<div class=\"text-center\">

<i style=\"color:#548235;font-style:normal\"> ©&nbsp;&nbsp;&nbsp;Copyright 2016, Binovalife. </i>

</div>
<div class=\"text-center\" style=\"background:#FFC000;min-height:20px;margin-top:1%\">

</div>
    ";
        // line 424
        $this->displayBlock('javascripts', $context, $blocks);
        // line 467
        echo "    <script>
      \$(document).ready( function() {

        \$(\"#page-1\").show();
        \$(\"#page-2\").hide();
        \$(\"#page-3\").hide();
        \$('#register').click(function() {
        console.log('Registration-----');
        \$(\"#page-2\").show();
        \$(\"#page-1\").hide();
        \$(\"#page-3\").hide();
        \$(\"#page-2\").css({'display':'visible'});
        function view_registration(val) {
       //        \$.ajax({ url: \"customer.php\",success: setContent_customer,cache: true });
        }

        });
        \$('#pre-register').click(function() {
        console.log('Pre registration-----');
        \$(\"#page-2\").show();
        \$(\"#page-1\").hide();
        \$(\"#page-3\").hide();
        \$(\"#page-2\").css({'display':'visible'});
        function view_registration(val) {
       //        \$.ajax({ url: \"customer.php\",success: setContent_customer,cache: true });
        }

        });
        \$('#account').click(function() {
        console.log('Account -----');
        \$(\"#page-1\").show();
        \$(\"#page-2\").hide();
        \$(\"#page-3\").hide();
        \$(\"#page-1\").css({'display':'visible'});
        function view_registration(val) {
       //        \$.ajax({ url: \"customer.php\",success: setContent_customer,cache: true });
        }

        });
        \$('#network').click(function() {
            console.log('Network-----');
            \$(\"#page-3\").show();
            \$(\"#page-1\").hide();
            \$(\"#page-2\").hide();
            \$(\"#page-3\").css({'display':'visible'});


        });


      });
\t    //  function view_dashboard(val) {
\t\t\t//        \$.ajax({ url: \"customer.php\",success: setContent_customer,cache: true });   }
\t\t  //  function setContent_customer(text) {
\t\t\t//       \$(\"#crm--content\").load(\"customer.php\").slideDown();
      //
\t\t  // }
</script>

</body>
</html>
";
        
        $__internal_bf42cb12ddba354c126aeeba18b130914fdb71183d994f6a8e607f4dc7908689->leave($__internal_bf42cb12ddba354c126aeeba18b130914fdb71183d994f6a8e607f4dc7908689_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed3da3c4da882cd36ef236c4180bbd132cc8808b7becabc9d8ff6bfd9172d490 = $this->env->getExtension("native_profiler");
        $__internal_ed3da3c4da882cd36ef236c4180bbd132cc8808b7becabc9d8ff6bfd9172d490->enter($__internal_ed3da3c4da882cd36ef236c4180bbd132cc8808b7becabc9d8ff6bfd9172d490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Binovalife :: WEB OFFICE";
        
        $__internal_ed3da3c4da882cd36ef236c4180bbd132cc8808b7becabc9d8ff6bfd9172d490->leave($__internal_ed3da3c4da882cd36ef236c4180bbd132cc8808b7becabc9d8ff6bfd9172d490_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_431a1887d1ef98916830882ebc8aaec41da4f08b3b9f65cbb22ca27371669d2b = $this->env->getExtension("native_profiler");
        $__internal_431a1887d1ef98916830882ebc8aaec41da4f08b3b9f65cbb22ca27371669d2b->enter($__internal_431a1887d1ef98916830882ebc8aaec41da4f08b3b9f65cbb22ca27371669d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_431a1887d1ef98916830882ebc8aaec41da4f08b3b9f65cbb22ca27371669d2b->leave($__internal_431a1887d1ef98916830882ebc8aaec41da4f08b3b9f65cbb22ca27371669d2b_prof);

    }

    // line 424
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_30006c6e8f2670abd0f5cadff8d851b07dd497662bd4823d2dd98f8f78dc225b = $this->env->getExtension("native_profiler");
        $__internal_30006c6e8f2670abd0f5cadff8d851b07dd497662bd4823d2dd98f8f78dc225b->enter($__internal_30006c6e8f2670abd0f5cadff8d851b07dd497662bd4823d2dd98f8f78dc225b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 425
        echo "    ";
        // line 436
        echo "

        <script src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/jquery-2.1.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-route.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-cookies.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-animate.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-mocks.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>

          <script src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>

          <script src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/loader.service.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/loader.controller.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/header.controller.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/footer.controller.js"), "html", null, true);
        echo "\"></script>

          <script src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/login.controller.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/logout.controller.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/authentication.service.js"), "html", null, true);
        echo "\"></script>

          <script src=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-sanitize.min.js"), "html", null, true);
        echo "\" data-semver=\"1.5.5\"></script>
          <script src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-strap.js"), "html", null, true);
        echo "\" data-semver=\"v2.3.8\"></script>
          <script src=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/angular-strap.tpl.js"), "html", null, true);
        echo "\" data-semver=\"v2.3.8\"></script>

          <script src=\"";
        // line 462
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/crypto-js.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/libs/sha1.js"), "html", null, true);
        echo "\"></script>


    ";
        
        $__internal_30006c6e8f2670abd0f5cadff8d851b07dd497662bd4823d2dd98f8f78dc225b->leave($__internal_30006c6e8f2670abd0f5cadff8d851b07dd497662bd4823d2dd98f8f78dc225b_prof);

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
        return array (  802 => 463,  798 => 462,  793 => 460,  789 => 459,  785 => 458,  780 => 456,  776 => 455,  772 => 454,  767 => 452,  763 => 451,  759 => 450,  755 => 449,  750 => 447,  745 => 445,  741 => 444,  736 => 442,  732 => 441,  728 => 440,  724 => 439,  720 => 438,  716 => 436,  714 => 425,  708 => 424,  697 => 37,  693 => 36,  689 => 35,  685 => 34,  680 => 33,  678 => 22,  672 => 21,  660 => 9,  592 => 467,  590 => 424,  562 => 399,  554 => 394,  547 => 390,  540 => 386,  533 => 382,  526 => 378,  519 => 374,  507 => 365,  500 => 361,  493 => 357,  486 => 353,  479 => 349,  472 => 345,  465 => 341,  457 => 336,  449 => 331,  441 => 328,  327 => 219,  314 => 209,  305 => 203,  284 => 185,  275 => 178,  265 => 173,  256 => 169,  252 => 167,  250 => 166,  231 => 150,  219 => 141,  185 => 109,  170 => 107,  166 => 106,  159 => 101,  153 => 100,  147 => 99,  143 => 98,  139 => 96,  130 => 92,  126 => 91,  122 => 90,  118 => 89,  115 => 88,  113 => 87,  106 => 85,  99 => 81,  92 => 77,  52 => 41,  50 => 21,  35 => 9,  25 => 1,);
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
/* <body class="pace-done" style="background:#fff">*/
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
/*     <div  style="background:#FAB329;min-height:30px;margin:0;width:100%;border-radius:0;margin:0;padding:0" >*/
/* */
/*     </div>*/
/*   <nav class="navbar navbar-inverse yamm navbar-static-top" style="background:#fff;width:100%">*/
/*     <div class="container-fluid">*/
/*         <div class="navbar-header" >*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <div class="navbar-brand" href="#" style="padding:15px 0;margin-left:0;position:absolute;">*/
/*                   <img  ng-src="{{ asset('logo.png') }}"  class="img-responsive pull-left" style="height:70px;padding:0"/>*/
/*             </div>*/
/*             <div class="navbar-brand0" href="#" style="padding:15px 0;margin-left:80px;position:absolute;margin-top:25px">*/
/*                   <span style="color:#548235;font-size:1.5em;margin-top:20px">&nbsp;&nbsp;BINOVALIFE </span> <span style="color:#747474;padding-top:6px;font-size:1.5em;">WEB OFFICE</span>*/
/*                   <!-- <img  ng-src="{{ asset('loading.gif') }}"  class="pull-right" /> -->*/
/*             </div>*/
/*         </div>*/
/*         <div  style="height: 1px;" aria-expanded="false" id="navbar" class="navbar-collapse collapse">*/
/*             <div class="text-right" style="position:absolute:right:0;margin-top:15px;color:#4A7B3E;">{{ 'action.period_in'|trans }}: <i style="color:#747474;margin-right:5px;font-style:normal">{{ 'action.days_in'|trans }}</i></div>*/
/*             <ul class="nav navbar-nav navbar-right navbar-top-drops" style="padding:20px ">*/
/*               {% if app.user %}*/
/*                   <li>*/
/*                     <span style="color:#7474742">&nbsp;&nbsp;{{ 'action.status_in'|trans }} <span style="color:#FAB329;padding-top:6px;text-transform:uppercase;margin-right:20px">manager Emeraude</span> </span>*/
/*                       <!-- <a href="{{ path('security_logout') }}">*/
/*                           <input type="hidden" ng-model="firstname" value="{{app.user.username}}">*/
/*                           <i class="fa fa-sign-out"></i> {{ 'menu.logout'|trans }} {{app.user.username}}*/
/*                       </a> -->*/
/*                 </li>*/
/*             {% endif %}*/
/*                 <li class="dropdown profile-dropdown" >*/
/*                     <a  class="dropdown-toggle button-wave" data-toggle="dropdown" role="button" style="background:#fff;padding:4px 20px;font-size:80%;color:#000;border:1px solid #ddd">*/
/*                       {% for locale in locales() %}*/
/*                           {% if app.request.locale == locale.code %}{{ locale.name|capitalize }} {% endif %}*/
/*                       {% endfor %}*/
/*                       &nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down" style="color:#747474"></i></a>*/
/*                     <ul class="dropdown-menu" style="border-radius:0;margin-top:1px" >*/
/*                         <!-- <li><a href="#/customers" style="padding:4px 10px;font-size:80%;margin-top:6px">French</a></li>*/
/*                         <li class="divider"></li>*/
/*                         <li><a href="#/logout" style="padding:4px 10px;font-size:80%">Deutch</a></li> -->*/
/*                         {% for locale in locales() %}*/
/*                             <li  {% if app.request.locale == locale.code %} {% endif %}><a href="{{ path(app.request.get('_route', 'blog_index'), app.request.get('_route_params', [])|merge({ _locale: locale.code })) }}" style="padding:4px 10px;font-size:80%;margin-top:6px">{{ locale.name|capitalize }}</a></li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </li>*/
/* */
/* */
/*             </ul>*/
/* */
/* */
/*         </div><!--/.nav-collapse -->*/
/* */
/* */
/*     </div><!--/.container-fluid -->*/
/* </nav>*/
/* <nav class="navbar" style="background:#E2F0D9;top:60px;padding:0;margin:0;width:100%;border-radius:0;height:40px" >*/
/*     <div class="container-fluid">*/
/*   <ul class="nav navbar-nav navbar-main">*/
/*     <li><a href="index.html" style="color:#FAB329!important;font-weight:600;font-size:13px">Home</a></li>*/
/*     <!-- <li><a  href="courses.html"  style="padding-left:3em;color:#4A7B3E!important;font-weight:600;font-size:13px;padding-right:3em">Registration</a></li> -->*/
/* */
/*     <li class="dropdown profile-dropdown" >*/
/*         <a  class="dropdown-toggle button-wave" data-toggle="dropdown" role="button"  style="color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em">Registration&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down" style="color:#747474"></i></a>*/
/*         <ul class="dropdown-menu" style="border-radius:0;margin-top:1px" >*/
/*             <li><a href="#" style="padding:4px 10px;font-size:80%;margin-top:6px" id="pre-register">Pre-register</a></li>*/
/*             <li class="divider"></li>*/
/*             <li><a href="#"  style="padding:4px 10px;font-size:80%" id="register">Register</a></li>*/
/* */
/*         </ul>*/
/*     </li>*/
/*     <li class="dropdown profile-dropdown" >*/
/*         <a  class="dropdown-toggle button-wave" data-toggle="dropdown" role="button"  style="color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em">My Account&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down" style="color:#747474"></i></a>*/
/*         <ul class="dropdown-menu" style="border-radius:0;margin-top:1px" >*/
/*             <li><a href="#" style="padding:4px 10px;font-size:80%;margin-top:6px" id="account" >Account</a></li>*/
/*             <li class="divider"></li>*/
/*             <li><a href="{{ path('security_logout') }}"  style="padding:4px 10px;font-size:80%">Logout</a></li>*/
/* */
/*         </ul>*/
/*     </li>*/
/*     <li class="dropdown profile-dropdown" >*/
/*         <a  class="dropdown-toggle button-wave" data-toggle="dropdown" role="button"  style="color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em">My Network&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down" style="color:#747474"></i></a>*/
/*         <ul class="dropdown-menu" style="border-radius:0;margin-top:1px" >*/
/*             <li><a href="#" style="padding:4px 10px;font-size:80%;margin-top:6px" id="network">Network</a></li>*/
/*             <li class="divider"></li>*/
/*             <!-- <li><a href="{{ path('security_logout') }}"  style="padding:4px 10px;font-size:80%">Logout</a></li> -->*/
/* */
/*         </ul>*/
/*     </li>*/
/*     <!-- <li><a href="team.html"  style="color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em">My Account</a></li> -->*/
/*     <!-- <li><a href="team.html"  style="color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em">My Network</a></li> -->*/
/*     <li><a  href="contact.html"  style="color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em">Rapport</a></li>*/
/*     <li><a  href="contact.html"  style="color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em">Commissions</a></li>*/
/*     <li><a  href="contact.html"  style="color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em">Commandes</a></li>*/
/*   </ul>*/
/* */
/*   </div>*/
/* </nav>*/
/* <nav class="navbar" style="background:#f2f2f2;margin-top:60px;width:100%;border-radius:0;position:relative;height:40px" >*/
/* */
/*   <div class="container-fluid">*/
/*     {% if app.user %}*/
/*       <ul class="nav navbar-nav" style="padding:10px 5px">*/
/*         <li>*/
/*           <span style="font-size:1em;color:#4A7B3E">&nbsp;&nbsp;{{ 'action.welcome_in'|trans }}&nbsp;&nbsp;&nbsp;<span style="color:#4A7B3E;padding-top:6px;text-transform:capitalize;margin-right:20px;font-weight:400">{{app.user.username}}, </span> </span>*/
/* */
/*       </li>*/
/*       <li>*/
/*         <span style="font-size:1em;color:#747474">&nbsp;&nbsp;{{ 'action.user_nber'|trans }}&nbsp;&nbsp;&nbsp;<span style="color:#747474;padding-top:6px;text-transform:capitalize;margin-right:20px;font-weight:400">{{app.user.id}}</span> </span>*/
/* */
/*     </li>*/
/*     </ul>*/
/*   {% endif %}*/
/*   <ul class="nav navbar-nav navbar-main pull-right">*/
/* */
/*     <li class="dropdown profile-dropdown" >*/
/*         <a  class="dropdown-toggle button-wave" data-toggle="dropdown" role="button"  style="color:#747474!important;font-weight:400;font-size:13px;padding-left:3em;padding-right:3em">Historique et Archives&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down" style="color:#747474"></i></a>*/
/*         <ul class="dropdown-menu" style="border-radius:0;margin-top:1px" >*/
/*             <li><a href="#" style="padding:4px 10px;font-size:80%;margin-top:6px">Historique</a></li>*/
/*             <li class="divider"></li>*/
/*             <li><a href="{{ path('security_logout') }}"  style="padding:4px 10px;font-size:80%">Archive</a></li>*/
/* */
/*         </ul>*/
/*     </li>*/
/*     <!-- <li><a href="team.html"  style="color:#4A7B3E!important;font-weight:600;font-size:13px;padding-left:3em;padding-right:3em">My Account</a></li> -->*/
/*     <li><a href="#"  style="color:#747474!important;font-weight:400;font-size:13px;padding-left:3em;padding-right:3em">Pharmacovigilance</a></li>*/
/* */
/*   </ul>*/
/*   </div>*/
/* */
/* </nav>*/
/* <!--top navigation-->*/
/* */
/* <!-- Static navbar -->*/
/* <div class="col-md-12 row" >*/
/*   <div class="container" style="min-height:350px">*/
/* */
/*     <div class="col-md-12 navbar-brand" href="#" style="padding:15px 0;" id="page-1">*/
/*           <h6 style="color:#747474;font-size:.9em;margin-top:20px">&nbsp;&nbsp;{{ 'action.dashboard_in'|trans }}  </h6>*/
/* */
/*     </div>*/
/*     <div class="col-md-12 row" id="page-3">*/
/*       <div class="container">*/
/*           <div class="col-md-12 navbar-brand" href="#" style="padding:15px 0;">*/
/*         <h6 style="color:#747474;font-size:.8em;margin-top:20px">&nbsp;&nbsp;{{ 'action.network_in'|trans }}  </h6>*/
/*       </div>*/
/*          <div class="col-md-12 text-center" style="margin-top:1%;background:#fafafa;padding-top:2%;padding-bottom:2%">*/
/* */
/*            <div class="col-md-3" style="height:120px;background:#f2f2f2;padding:5%">*/
/*              <h4>No Photo Available</h4>*/
/* */
/*             </div>*/
/*             <div class="col-md-3" style="height:120px;background:#ffff">*/
/*               <div class="col-md-12" style="height:35px;background:#7f7f7f;padding:10px;color:#fff;font-weight:600">*/
/*                      <h4 style="text-transform:uppercase"><strong>{{app.user.firstname}}, {{app.user.lastname}}</strong></h4>*/
/*                </div>*/
/*                <div class="col-md-12" style="height:50px;background:#fff;padding:10px;color:#747474;font-weight:600f">*/
/*                   <h4>Parrainé par Username, N° ID</h4>*/
/*                 </div>*/
/*                 <div class="col-md-12" style="height:35px;background:#7f7f7f;padding:10px;color:#fff;font-weight:600">*/
/*                     <h4>Total VPP : 0000</h4>*/
/*                  </div>*/
/* */
/*              </div>*/
/*              <div class="col-md-3" style="height:120px;background:#ffff">*/
/*                <div class="col-md-12" style="height:35px;background:#7f7f7f;padding:10px;color:#fff;font-weight:600">*/
/*                     <h4>Total VPP : 0000</h4>*/
/*                 </div>*/
/*                 <div class="col-md-12" style="height:50px;background:#fff;padding:10px;color:#747474;font-weight:600">*/
/*                       <h4>Total VPP : 0000</h4>*/
/*                  </div>*/
/*                  <div class="col-md-12" style="height:35px;background:#7f7f7f;padding:10px;color:#fff;font-weight:600">*/
/*                       <h4>Total VPP : 0000</h4>*/
/*                   </div>*/
/* */
/*               </div>*/
/*               <div class="col-md-3" style="height:120px;background:#ffff">*/
/*                 <div class="col-md-12" style="height:35px;background:#7f7f7f;padding:10px;color:#fff;font-weight:600">*/
/*                       <h4>Total VPP : 0000</h4>*/
/*                  </div>*/
/*                  <div class="col-md-12" style="height:50px;background:#fff;padding:10px;color:#747474;font-weight:600">*/
/*                       <h4>Total VPP : 0000</h4>*/
/*                   </div>*/
/*                   <div class="col-md-12" style="height:35px;background:#7f7f7f;padding:10px;color:#fff;font-weight:600">*/
/*                         <h4>Total VPP : 0000</h4>*/
/*                    </div>*/
/* */
/*                </div>*/
/* */
/*           </div>*/
/*              <div class="col-md-12" style="margin-top:1%;background:#fafafa;padding-top:2%;padding-bottom:2%">*/
/*                <table class="table table-inverse">*/
/*    <thead style="background:#548235;color:#fff">*/
/*      <tr>*/
/*        <th>(dd/mm/aa)</th>*/
/*        <th>Génération</th>*/
/*        <th>Full Name(s)</th>*/
/*        <th>Grade</th>*/
/*        <th>ID</th>*/
/*        <th>Pays</th>*/
/*        <th>Ville</th>*/
/*        <th>Statut</th>*/
/*        <th>Adresse (BP, Telph et Email)</th>*/
/*      </tr>*/
/*    </thead>*/
/*    <tbody>*/
/*      <tr>*/
/*        <td></td>*/
/*        <td></td>*/
/*        <td></td>*/
/*        <td></td>*/
/*        <td></td>*/
/*        <td></td>*/
/*        <td></td>*/
/*        <td></td>*/
/*        <td></td>*/
/*      </tr>*/
/*      <tr>*/
/*        <td></td>*/
/*        <td></td>*/
/*        <td></td>*/
/*        <td></td>*/
/*        <td></td>*/
/*        <td></td>*/
/*        <td></td>*/
/*        <td></td>*/
/*        <td></td>*/
/*      </tr>*/
/*      <tr>*/
/*        <td></td>*/
/*        <td></td>*/
/*        <td></td>*/
/*        <td></td>*/
/*        <td></td>*/
/*        <td></td>*/
/*        <td></td>*/
/*        <td></td>*/
/*        <td></td>*/
/*      </tr>*/
/*      <tr>*/
/*        <td></td>*/
/*        <td></td>*/
/*        <td></td>*/
/*        <td></td>*/
/*        <td></td>*/
/*        <td></td>*/
/*        <td></td>*/
/*        <td></td>*/
/*        <td></td>*/
/*      </tr>*/
/* */
/*    </tbody>*/
/*    </table>*/
/* */
/* */
/* */
/*              </div>*/
/*       </div>*/
/*     </div>*/
/*          <div class="col-md-12" style="margin-top:1%;background:#fafafa;padding-top:2%;padding-bottom:2%" id="page-2">*/
/* */
/* */
/*            <div class="col-md-12 navbar-brand" href="#" style="padding:15px 0;">*/
/*                  <h6 style="color:#747474;font-size:.9em;margin-top:20px">&nbsp;&nbsp;{{ 'action.register_in'|trans }}<i style="color:#747474;padding-top:6px;font-size:.8em;" class="pull-right">{{ 'action.comp_in'|trans }}</i>*/
/* </h6>*/
/*                  <!-- <h6 style="color:#747474;padding-top:6px;font-size:.8em;">Découvrez l’exceptionnel pouvoir de compensation de notre marketing de réseau, en construisant votre équipe.</h6> -->*/
/*                  <!-- <img  ng-src="{{ asset('loading.gif') }}"  class="pull-right" /> -->*/
/*            </div>*/
/* */
/*            <div id="preRegistration" style="padding-top:8em">*/
/* */
/*              <form role="form"  action="{{ path('dist_create') }}" method="post">*/
/*                <div class="login-grids">*/
/*                  <div class="col-md-6">*/
/*                    <fieldset  id="body">*/
/*                      <fieldset style="margin-top:10px">*/
/*                        <label for="firstname" class="col-md-4">{{ 'action.fullname_in'|trans }}</label>*/
/*                        <input type="text" name="text" id="firstname"  class="col-md-7" style="padding-left:10px">*/
/*                      </fieldset>*/
/*                      <fieldset style="margin-top:10px">*/
/*                        <label for="lastname"  class="col-md-4">{{ 'action.name_in'|trans }}</label>*/
/*                        <input type="text" name="text" id="lastname"  class="col-md-7" style="padding-left:10px">*/
/*                      </fieldset>*/
/*                      <fieldset style="margin-top:10px">*/
/*                        <label for="birthdate" class="col-md-4">{{ 'action.birth_in'|trans }}</label>*/
/*                        <input type="text" name="text" id="birthdate"  class="col-md-7" style="padding-left:10px">*/
/*                      </fieldset>*/
/*                      <fieldset style="margin-top:10px">*/
/*                        <label for="phone"  class="col-md-4">{{ 'action.phone_in'|trans }}</label>*/
/*                        <input type="text" name="text" id="phone"  class="col-md-7" style="padding-left:10px">*/
/*                      </fieldset>*/
/*                      <fieldset style="margin-top:10px">*/
/*                        <label for="country" class="col-md-4">{{ 'action.country_in'|trans }}</label>*/
/*                        <input type="text" name="text" id="country"  class="col-md-7" style="padding-left:10px">*/
/*                      </fieldset>*/
/*                      <fieldset style="margin-top:10px">*/
/*                        <label for="city"  class="col-md-4">{{ 'action.city_in'|trans }}</label>*/
/*                        <input type="text" name="text" id="city"  class="col-md-7" style="padding-left:10px">*/
/*                      </fieldset>*/
/*                      <fieldset  style="margin-top:10px">*/
/*                        <label for="address"  class="col-md-4">{{ 'action.address_in'|trans }}</label>*/
/*                        <input type="text" name="text" id="address"  class="col-md-7" style="padding-left:10px">*/
/*                      </fieldset>*/
/*                    </fieldset>*/
/* */
/*                  </div>*/
/*                  <fieldset id="body">*/
/* */
/*                    <fieldset style="margin-top:10px">*/
/*                      <label for="firstname" class="col-md-4">{{ 'label.username'|trans }}</label>*/
/*                      <input type="text" name="text" id="firstname"  class="col-md-7" style="padding-left:10px">*/
/*                    </fieldset>*/
/*                    <fieldset style="margin-top:10px">*/
/*                      <label for="lastname"  class="col-md-4">{{ 'label.password'|trans }}</label>*/
/*                      <input type="text" name="text" id="lastname"  class="col-md-7" style="padding-left:10px">*/
/*                    </fieldset>*/
/*                    <fieldset style="margin-top:10px">*/
/*                      <label for="birthdate" class="col-md-4">{{ 'label.password.confirm'|trans }}</label>*/
/*                      <input type="text" name="text" id="birthdate"  class="col-md-7" style="padding-left:10px">*/
/*                    </fieldset>*/
/*                    <fieldset style="margin-top:10px">*/
/*                      <label for="phone"  class="col-md-4">{{ 'label.email'|trans }}</label>*/
/*                      <input type="text" name="text" id="phone"  class="col-md-7" style="padding-left:10px">*/
/*                    </fieldset>*/
/*                    <fieldset style="margin-top:10px">*/
/*                      <label for="country" class="col-md-4">{{ 'label.email.confirm'|trans }}</label>*/
/*                      <input type="text" name="text" id="country"  class="col-md-7" style="padding-left:10px">*/
/*                    </fieldset>*/
/*                    <fieldset style="margin-top:10px">*/
/*                      <label for="city"  class="col-md-4">{{ 'label.kits'|trans }}</label>*/
/*                      <input type="text" name="text" id="city"  class="col-md-7" value="10000" style="padding-left:10px">*/
/*                    </fieldset>*/
/*                    <fieldset style="margin-top:20px" style="margin-rigth:0;padding-right:0">*/
/*                      <label for="city"  class="col-md-4"></label>*/
/*                       <button type="submit" ng-disabled="form.$invalid" class="btn btn-primary btn-login col-md-8" style="background:#548235;">{{ 'action.validate_in'|trans }}</button>*/
/*                      <!-- <input type="submit" name="text" id="address"  class="col-md-7"> -->*/
/*                    </fieldset>*/
/*                  </fieldset>*/
/* */
/*                </div>*/
/*                </div>*/
/*              </form>*/
/*            </div>*/
/* */
/* */
/* */
/*           </div>*/
/* */
/* */
/*       </div>*/
/* </div>*/
/* <div class="text-center">*/
/* */
/* <i style="color:#548235;font-style:normal"> ©&nbsp;&nbsp;&nbsp;Copyright 2016, Binovalife. </i>*/
/* */
/* </div>*/
/* <div class="text-center" style="background:#FFC000;min-height:20px;margin-top:1%">*/
/* */
/* </div>*/
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
/*     <script>*/
/*       $(document).ready( function() {*/
/* */
/*         $("#page-1").show();*/
/*         $("#page-2").hide();*/
/*         $("#page-3").hide();*/
/*         $('#register').click(function() {*/
/*         console.log('Registration-----');*/
/*         $("#page-2").show();*/
/*         $("#page-1").hide();*/
/*         $("#page-3").hide();*/
/*         $("#page-2").css({'display':'visible'});*/
/*         function view_registration(val) {*/
/*        //        $.ajax({ url: "customer.php",success: setContent_customer,cache: true });*/
/*         }*/
/* */
/*         });*/
/*         $('#pre-register').click(function() {*/
/*         console.log('Pre registration-----');*/
/*         $("#page-2").show();*/
/*         $("#page-1").hide();*/
/*         $("#page-3").hide();*/
/*         $("#page-2").css({'display':'visible'});*/
/*         function view_registration(val) {*/
/*        //        $.ajax({ url: "customer.php",success: setContent_customer,cache: true });*/
/*         }*/
/* */
/*         });*/
/*         $('#account').click(function() {*/
/*         console.log('Account -----');*/
/*         $("#page-1").show();*/
/*         $("#page-2").hide();*/
/*         $("#page-3").hide();*/
/*         $("#page-1").css({'display':'visible'});*/
/*         function view_registration(val) {*/
/*        //        $.ajax({ url: "customer.php",success: setContent_customer,cache: true });*/
/*         }*/
/* */
/*         });*/
/*         $('#network').click(function() {*/
/*             console.log('Network-----');*/
/*             $("#page-3").show();*/
/*             $("#page-1").hide();*/
/*             $("#page-2").hide();*/
/*             $("#page-3").css({'display':'visible'});*/
/* */
/* */
/*         });*/
/* */
/* */
/*       });*/
/* 	    //  function view_dashboard(val) {*/
/* 			//        $.ajax({ url: "customer.php",success: setContent_customer,cache: true });   }*/
/* 		  //  function setContent_customer(text) {*/
/* 			//       $("#crm--content").load("customer.php").slideDown();*/
/*       //*/
/* 		  // }*/
/* </script>*/
/* */
/* </body>*/
/* </html>*/
/* */
