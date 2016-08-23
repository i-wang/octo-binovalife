<?php

/* distributor/new.html.twig */
class __TwigTemplate_d001e95f882377bf4d1f25efe76a2790a05341a3f49e737c5e163a781e9fd2d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "distributor/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a99c5518c3e444285374c94582cef1347f70b87c743719e7da92111f107d823 = $this->env->getExtension("native_profiler");
        $__internal_8a99c5518c3e444285374c94582cef1347f70b87c743719e7da92111f107d823->enter($__internal_8a99c5518c3e444285374c94582cef1347f70b87c743719e7da92111f107d823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "distributor/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a99c5518c3e444285374c94582cef1347f70b87c743719e7da92111f107d823->leave($__internal_8a99c5518c3e444285374c94582cef1347f70b87c743719e7da92111f107d823_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_437a9afb683e41e17acf367acf7dee4b9d287d3005a896d8e1a2242d7b3a82c4 = $this->env->getExtension("native_profiler");
        $__internal_437a9afb683e41e17acf367acf7dee4b9d287d3005a896d8e1a2242d7b3a82c4->enter($__internal_437a9afb683e41e17acf367acf7dee4b9d287d3005a896d8e1a2242d7b3a82c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"col-md-12\" style=\"margin-top:1%;background:#fafafa;padding-top:2%;padding-bottom:2%;border-top:1px solid #f2f2f2\">
  <div class=\"col-md-10 col-md-offset-1 navbar-brand\" href=\"#\" style=\"padding:15px 0;\">
        <h6 style=\"color:#747474;font-size:.9em;margin-top:20px\">&nbsp;&nbsp;";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.register_in"), "html", null, true);
        echo "<i style=\"color:#747474;padding-top:6px;font-size:.8em;\" class=\"pull-right\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.comp_in"), "html", null, true);
        echo "</i>
        </h6>
        <!-- <h6 style=\"color:#747474;padding-top:6px;font-size:.8em;\">Découvrez l’exceptionnel pouvoir de compensation de notre marketing de réseau, en construisant votre équipe.</h6> -->
        <!-- <img  ng-src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("loading.gif"), "html", null, true);
        echo "\"  class=\"pull-right\" /> -->
  </div>
  <div class=\"col-md-6 col-md-offset-3\" style=\"margin-top:1%;background:#fff\">
            ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                  <button type=\"submit\" ng-disabled=\"form.\$invalid\" class=\"btn btn-primary pull-right btn-login col-md-12\" style=\"background:#548235\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.validate_in"), "html", null, true);
        echo "</button>

            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
</div>


";
        
        $__internal_437a9afb683e41e17acf367acf7dee4b9d287d3005a896d8e1a2242d7b3a82c4->leave($__internal_437a9afb683e41e17acf367acf7dee4b9d287d3005a896d8e1a2242d7b3a82c4_prof);

    }

    public function getTemplateName()
    {
        return "distributor/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 16,  66 => 14,  62 => 13,  58 => 12,  52 => 9,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="col-md-12" style="margin-top:1%;background:#fafafa;padding-top:2%;padding-bottom:2%;border-top:1px solid #f2f2f2">*/
/*   <div class="col-md-10 col-md-offset-1 navbar-brand" href="#" style="padding:15px 0;">*/
/*         <h6 style="color:#747474;font-size:.9em;margin-top:20px">&nbsp;&nbsp;{{ 'action.register_in'|trans }}<i style="color:#747474;padding-top:6px;font-size:.8em;" class="pull-right">{{ 'action.comp_in'|trans }}</i>*/
/*         </h6>*/
/*         <!-- <h6 style="color:#747474;padding-top:6px;font-size:.8em;">Découvrez l’exceptionnel pouvoir de compensation de notre marketing de réseau, en construisant votre équipe.</h6> -->*/
/*         <!-- <img  ng-src="{{ asset('loading.gif') }}"  class="pull-right" /> -->*/
/*   </div>*/
/*   <div class="col-md-6 col-md-offset-3" style="margin-top:1%;background:#fff">*/
/*             {{ form_start(form) }}*/
/*                 {{ form_widget(form) }}*/
/*                   <button type="submit" ng-disabled="form.$invalid" class="btn btn-primary pull-right btn-login col-md-12" style="background:#548235">{{ 'action.validate_in'|trans }}</button>*/
/* */
/*             {{ form_end(form) }}*/
/* </div>*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
