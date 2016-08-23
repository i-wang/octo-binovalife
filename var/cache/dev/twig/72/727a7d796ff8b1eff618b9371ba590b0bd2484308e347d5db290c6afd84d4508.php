<?php

/* default/index.html */
class __TwigTemplate_667e423dac436e1d9ae30f24824f3eb539b059f7167f53ce32eb070c486a9a64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_abbe339dfc9546b94e51c87ab87b7ec52d47573dde655c9f51591eb1d18f852f = $this->env->getExtension("native_profiler");
        $__internal_abbe339dfc9546b94e51c87ab87b7ec52d47573dde655c9f51591eb1d18f852f->enter($__internal_abbe339dfc9546b94e51c87ab87b7ec52d47573dde655c9f51591eb1d18f852f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html"));

        // line 1
        echo "<!DOCTYPE html>
<html ng-app=\"app\">
<head>
  <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"format-detection\" content=\"telephone=no\">
    <title>Binovalife :: WEB OFFICE</title>

    <!-- Bootstrap -->
    <link href=\"assets/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"assets/css/waves.css\" type=\"text/css\" rel=\"stylesheet\">
    <!--<link rel=\"stylesheet\" href=\"css/nanoscroller.css\">-->

    <link href=\"../../assets/css/style.css\" type=\"text/css\" rel=\"stylesheet\">
    <link href=\"../../assets/css/font-awesome.min.css\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
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
            <!-- <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\"> </a>
            </div> -->
            <div  style=\"height: 1px;\" aria-expanded=\"false\" id=\"navbar\" class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav navbar-right navbar-top-drops\">
                    <li class=\"dropdown profile-dropdown\">
                        <a  class=\"dropdown-toggle button-wave\" data-toggle=\"dropdown\" role=\"button\" style=\"background:#fff;padding:4px 20px;font-size:80%;color:#000\">
                           English &nbsp;&nbsp;&nbsp;<i class=\"fa fa-caret-down\" style=\"color:#548235\"></i></a>
                        <ul class=\"dropdown-menu\" style=\"border-radius:0\" >
                            <li><a href=\"#/customers\" style=\"padding:4px 10px;font-size:80%;margin-top:6px\">French</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#/logout\" style=\"padding:4px 10px;font-size:80%\">Deutch</a></li>

                        </ul>
                    </li>

                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
    <div class=\"col-md-6 col-md-offset-3 row\" style=\"margin-top:3%\">
        <div class=\"col-md-10 col-md-offset-1\">

              <div class=\"tile custom\">
                  <div class=\"tile-title clearfix\" >
                      <img  ng-src=\"assets/img/logo.png\"  class=\"img-responsive pull-left\" style=\" padding-right:20px;height:40px;border-right:1px solid #ddd;\"/>
                      <div style=\"color:#548235;font-size:16px;padding-top:6px\">&nbsp;&nbsp;BINOVALIFE <a style=\"color:#747474\">WEB OFFICE</a> </div>
                      <img ng-if=\"cx.dataLoading\" ng-src=\"assets/img/loading.gif\"  class=\"pull-right\" />
                  </div><!--.tile-title-->
                    <form name=\"form\" ng-submit=\"cx.login()\" role=\"form\">
              <div class=\"tile-body clearfix\">
                <div class=\"col-md-8 col-md-offset-2\" style=\"background:#f2f2f2;padding:0 10px;margin-top:5%\">

                    <div class=\"form-group\" style=\"background:#f2f2f2;\">
                        <input type=\"text\" name=\"username\" id=\"username\"  class=\"form-control col-md-12\"  ng-model=\"cx.username\" placeholder=\"Username\" required style=\"margin:0\" />
                    </div>

                </div>
                <div class=\"col-md-8 col-md-offset-2 text-right\" ng-show=\"form.username.\$dirty && form.username.\$error.required\" style=\"background:#f6f9f5\">
              <i style=\"font-size:10px;color:red\">This field is required</i>

                </div>

                <div class=\"col-md-8 col-md-offset-2\" style=\"background:#f2f2f2;padding:0 10px;margin-top:10px\">
                  <div class=\"form-group\">
                      <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control col-md-12\"  ng-model=\"cx.password\" placeholder=\"Password\" required />
                      <!-- <span ng-show=\"form.password.\$dirty && form.password.\$error.required\" class=\"help-block pull-right\"><i class=\"fa fa-close\"></i></span> -->
                  </div>
                </div>
                <div class=\"col-md-8 col-md-offset-2 text-right\" ng-show=\"form.password.\$dirty && form.password.\$error.required\" style=\"background:#f6f9f5\">
                  <i style=\"font-size:10px;color:red\">This field is required</i>
                </div>
                <!-- <span ng-show=\"form.password.\$dirty && form.password.\$error.required\" class=\"pull-right\" ></span> -->

                <div class=\"col-md-8 col-md-offset-2\" style=\"background:#fafafa;padding:0 10px;margin-top:10px\">
                    <span><i class=\"fa fa-check\" style=\"color:#548235;font-size:12px\"></i></span>
                    <span style=\"font-size:12px\">Remember me</span>
                    <a  href=\"#\" class=\"pull-right\" style=\"font-size:80%\">Forgot Password ?</a>
                </div>
                <div class=\"col-md-8 col-md-offset-2\" style=\"background:#548235;padding:0 10px;margin-top:9%;\">
                  <div class=\"form-actions\">
                      <button type=\"submit\" ng-disabled=\"form.\$invalid || cx.dataLoading\" class=\"btn btn-primary pull-right btn-login col-md-12\" style=\"background:#548235\">Login</button>
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
    <script src=\"../../assets/libs/sha1.js\"></script> --> -->




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
        
        $__internal_abbe339dfc9546b94e51c87ab87b7ec52d47573dde655c9f51591eb1d18f852f->leave($__internal_abbe339dfc9546b94e51c87ab87b7ec52d47573dde655c9f51591eb1d18f852f_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
/*     <title>Binovalife :: WEB OFFICE</title>*/
/* */
/*     <!-- Bootstrap -->*/
/*     <link href="assets/css/bootstrap.min.css" rel="stylesheet">*/
/*     <link href="assets/css/waves.css" type="text/css" rel="stylesheet">*/
/*     <!--<link rel="stylesheet" href="css/nanoscroller.css">-->*/
/* */
/*     <link href="../../assets/css/style.css" type="text/css" rel="stylesheet">*/
/*     <link href="../../assets/css/font-awesome.min.css" rel="stylesheet">*/
/* */
/*     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*       <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
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
/*             <!-- <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="#"> </a>*/
/*             </div> -->*/
/*             <div  style="height: 1px;" aria-expanded="false" id="navbar" class="navbar-collapse collapse">*/
/*                 <ul class="nav navbar-nav navbar-right navbar-top-drops">*/
/*                     <li class="dropdown profile-dropdown">*/
/*                         <a  class="dropdown-toggle button-wave" data-toggle="dropdown" role="button" style="background:#fff;padding:4px 20px;font-size:80%;color:#000">*/
/*                            English &nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down" style="color:#548235"></i></a>*/
/*                         <ul class="dropdown-menu" style="border-radius:0" >*/
/*                             <li><a href="#/customers" style="padding:4px 10px;font-size:80%;margin-top:6px">French</a></li>*/
/*                             <li class="divider"></li>*/
/*                             <li><a href="#/logout" style="padding:4px 10px;font-size:80%">Deutch</a></li>*/
/* */
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
/*                       <img  ng-src="assets/img/logo.png"  class="img-responsive pull-left" style=" padding-right:20px;height:40px;border-right:1px solid #ddd;"/>*/
/*                       <div style="color:#548235;font-size:16px;padding-top:6px">&nbsp;&nbsp;BINOVALIFE <a style="color:#747474">WEB OFFICE</a> </div>*/
/*                       <img ng-if="cx.dataLoading" ng-src="assets/img/loading.gif"  class="pull-right" />*/
/*                   </div><!--.tile-title-->*/
/*                     <form name="form" ng-submit="cx.login()" role="form">*/
/*               <div class="tile-body clearfix">*/
/*                 <div class="col-md-8 col-md-offset-2" style="background:#f2f2f2;padding:0 10px;margin-top:5%">*/
/* */
/*                     <div class="form-group" style="background:#f2f2f2;">*/
/*                         <input type="text" name="username" id="username"  class="form-control col-md-12"  ng-model="cx.username" placeholder="Username" required style="margin:0" />*/
/*                     </div>*/
/* */
/*                 </div>*/
/*                 <div class="col-md-8 col-md-offset-2 text-right" ng-show="form.username.$dirty && form.username.$error.required" style="background:#f6f9f5">*/
/*               <i style="font-size:10px;color:red">This field is required</i>*/
/* */
/*                 </div>*/
/* */
/*                 <div class="col-md-8 col-md-offset-2" style="background:#f2f2f2;padding:0 10px;margin-top:10px">*/
/*                   <div class="form-group">*/
/*                       <input type="password" name="password" id="password" class="form-control col-md-12"  ng-model="cx.password" placeholder="Password" required />*/
/*                       <!-- <span ng-show="form.password.$dirty && form.password.$error.required" class="help-block pull-right"><i class="fa fa-close"></i></span> -->*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="col-md-8 col-md-offset-2 text-right" ng-show="form.password.$dirty && form.password.$error.required" style="background:#f6f9f5">*/
/*                   <i style="font-size:10px;color:red">This field is required</i>*/
/*                 </div>*/
/*                 <!-- <span ng-show="form.password.$dirty && form.password.$error.required" class="pull-right" ></span> -->*/
/* */
/*                 <div class="col-md-8 col-md-offset-2" style="background:#fafafa;padding:0 10px;margin-top:10px">*/
/*                     <span><i class="fa fa-check" style="color:#548235;font-size:12px"></i></span>*/
/*                     <span style="font-size:12px">Remember me</span>*/
/*                     <a  href="#" class="pull-right" style="font-size:80%">Forgot Password ?</a>*/
/*                 </div>*/
/*                 <div class="col-md-8 col-md-offset-2" style="background:#548235;padding:0 10px;margin-top:9%;">*/
/*                   <div class="form-actions">*/
/*                       <button type="submit" ng-disabled="form.$invalid || cx.dataLoading" class="btn btn-primary pull-right btn-login col-md-12" style="background:#548235">Login</button>*/
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
/*     <script src="../../assets/libs/sha1.js"></script> --> -->*/
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
