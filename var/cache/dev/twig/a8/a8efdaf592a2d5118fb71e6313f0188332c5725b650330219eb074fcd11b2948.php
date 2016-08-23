<?php

/* security/login.view.html */
class __TwigTemplate_45f1bec2acd3ec5026145dcda97e708cdd18aef14feb7e37a88e1c1656d0ae1f extends Twig_Template
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
        $__internal_607399eb9f4adcb67f4cfc5238e04b8e64e69f463b575adbcf23a512c94401bb = $this->env->getExtension("native_profiler");
        $__internal_607399eb9f4adcb67f4cfc5238e04b8e64e69f463b575adbcf23a512c94401bb->enter($__internal_607399eb9f4adcb67f4cfc5238e04b8e64e69f463b575adbcf23a512c94401bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.view.html"));

        // line 1
        echo "<div class=\"container page-wrapper\" style=\"background:#548235;z-index:-5000;width:100%;height:100%\">
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
";
        
        $__internal_607399eb9f4adcb67f4cfc5238e04b8e64e69f463b575adbcf23a512c94401bb->leave($__internal_607399eb9f4adcb67f4cfc5238e04b8e64e69f463b575adbcf23a512c94401bb_prof);

    }

    public function getTemplateName()
    {
        return "security/login.view.html";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div class="container page-wrapper" style="background:#548235;z-index:-5000;width:100%;height:100%">*/
/* <nav class="navbar navbar-inverse yamm navbar-static-top" >*/
/*     <div class="container">*/
/*         <!-- <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="#"> </a>*/
/*         </div> -->*/
/*         <div  style="height: 1px;" aria-expanded="false" id="navbar" class="navbar-collapse collapse">*/
/*             <ul class="nav navbar-nav navbar-right navbar-top-drops">*/
/*                 <li class="dropdown profile-dropdown">*/
/*                     <a  class="dropdown-toggle button-wave" data-toggle="dropdown" role="button" style="background:#fff;padding:4px 20px;font-size:80%;color:#000">*/
/*                        English &nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down" style="color:#548235"></i></a>*/
/*                     <ul class="dropdown-menu" style="border-radius:0" >*/
/*                         <li><a href="#/customers" style="padding:4px 10px;font-size:80%;margin-top:6px">French</a></li>*/
/*                         <li class="divider"></li>*/
/*                         <li><a href="#/logout" style="padding:4px 10px;font-size:80%">Deutch</a></li>*/
/* */
/*                     </ul>*/
/*                 </li>*/
/* */
/*             </ul>*/
/*         </div><!--/.nav-collapse -->*/
/*     </div><!--/.container-fluid -->*/
/* </nav>*/
/* <div class="col-md-6 col-md-offset-3 row" style="margin-top:3%">*/
/*     <div class="col-md-10 col-md-offset-1">*/
/* */
/*           <div class="tile custom">*/
/*               <div class="tile-title clearfix" >*/
/*                   <img  ng-src="assets/img/logo.png"  class="img-responsive pull-left" style=" padding-right:20px;height:40px;border-right:1px solid #ddd;"/>*/
/*                   <div style="color:#548235;font-size:16px;padding-top:6px">&nbsp;&nbsp;BINOVALIFE <a style="color:#747474">WEB OFFICE</a> </div>*/
/*                   <img ng-if="cx.dataLoading" ng-src="assets/img/loading.gif"  class="pull-right" />*/
/*               </div><!--.tile-title-->*/
/*                 <form name="form" ng-submit="cx.login()" role="form">*/
/*           <div class="tile-body clearfix">*/
/*             <div class="col-md-8 col-md-offset-2" style="background:#f2f2f2;padding:0 10px;margin-top:5%">*/
/* */
/*                 <div class="form-group" style="background:#f2f2f2;">*/
/*                     <input type="text" name="username" id="username"  class="form-control col-md-12"  ng-model="cx.username" placeholder="Username" required style="margin:0" />*/
/*                 </div>*/
/* */
/*             </div>*/
/*             <div class="col-md-8 col-md-offset-2 text-right" ng-show="form.username.$dirty && form.username.$error.required" style="background:#f6f9f5">*/
/*           <i style="font-size:10px;color:red">This field is required</i>*/
/* */
/*             </div>*/
/* */
/*             <div class="col-md-8 col-md-offset-2" style="background:#f2f2f2;padding:0 10px;margin-top:10px">*/
/*               <div class="form-group">*/
/*                   <input type="password" name="password" id="password" class="form-control col-md-12"  ng-model="cx.password" placeholder="Password" required />*/
/*                   <!-- <span ng-show="form.password.$dirty && form.password.$error.required" class="help-block pull-right"><i class="fa fa-close"></i></span> -->*/
/*               </div>*/
/*             </div>*/
/*             <div class="col-md-8 col-md-offset-2 text-right" ng-show="form.password.$dirty && form.password.$error.required" style="background:#f6f9f5">*/
/*               <i style="font-size:10px;color:red">This field is required</i>*/
/*             </div>*/
/*             <!-- <span ng-show="form.password.$dirty && form.password.$error.required" class="pull-right" ></span> -->*/
/* */
/*             <div class="col-md-8 col-md-offset-2" style="background:#fafafa;padding:0 10px;margin-top:10px">*/
/*                 <span><i class="fa fa-check" style="color:#548235;font-size:12px"></i></span>*/
/*                 <span style="font-size:12px">Remember me</span>*/
/*                 <a  href="#" class="pull-right" style="font-size:80%">Forgot Password ?</a>*/
/*             </div>*/
/*             <div class="col-md-8 col-md-offset-2" style="background:#548235;padding:0 10px;margin-top:9%;">*/
/*               <div class="form-actions">*/
/*                   <button type="submit" ng-disabled="form.$invalid || cx.dataLoading" class="btn btn-primary pull-right btn-login col-md-12" style="background:#548235">Login</button>*/
/*               </div>*/
/* */
/*             </div>*/
/*           </div>*/
/*           </form>*/
/* */
/*             <div class="prefooter">*/
/*                     <div class="tile purple">*/
/*                         <div class="tile-footer text-center">*/
/*                             <span style="font-size:11px"><a href="#">Terms and Condition</a> | <a href="#">Company Business Model</a> | <a href="#">Product and Pricing</a>*/
/*         </br> <i style="color:#548235;font-style:normal"> © Copyright 2016, Binovalife. </i></span>*/
/*                         </div>*/
/*                     </div>*/
/*             </div>*/
/* */
/*       </div>*/
/* </div>*/
/* */
/* </div>*/
/* </div>*/
/* */
