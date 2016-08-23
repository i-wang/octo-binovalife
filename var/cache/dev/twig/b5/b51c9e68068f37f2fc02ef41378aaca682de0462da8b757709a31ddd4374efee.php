<?php

/* distributor/edit.html.twig */
class __TwigTemplate_c80c8d8af6f488907ec25da9824a52927ee8e5db610fa4181ad9842dcb620573 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "distributor/edit.html.twig", 1);
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
        $__internal_90e402d47b5ede4fe89d9bd4faee4a09101c6cd70313092a0079eaca20ed94e8 = $this->env->getExtension("native_profiler");
        $__internal_90e402d47b5ede4fe89d9bd4faee4a09101c6cd70313092a0079eaca20ed94e8->enter($__internal_90e402d47b5ede4fe89d9bd4faee4a09101c6cd70313092a0079eaca20ed94e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "distributor/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90e402d47b5ede4fe89d9bd4faee4a09101c6cd70313092a0079eaca20ed94e8->leave($__internal_90e402d47b5ede4fe89d9bd4faee4a09101c6cd70313092a0079eaca20ed94e8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4aff03b5a9fd4f668e6b6ed630d2b0e4b0436917f6a336038ffed94e0b4ce1d = $this->env->getExtension("native_profiler");
        $__internal_d4aff03b5a9fd4f668e6b6ed630d2b0e4b0436917f6a336038ffed94e0b4ce1d->enter($__internal_d4aff03b5a9fd4f668e6b6ed630d2b0e4b0436917f6a336038ffed94e0b4ce1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"col-md-12\" style=\"margin-top:1%;background:#fafafa;padding-top:2%;padding-bottom:2%;border-top:1px solid #f2f2f2\">
  <div class=\"col-md-10 col-md-offset-1 navbar-brand\" href=\"#\" style=\"padding:15px 0;\">
        <h6 style=\"color:#747474;font-size:.9em;margin-top:20px\">&nbsp;&nbsp;";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.register_in"), "html", null, true);
        echo "

        </h6>

  </div>
  <div class=\"col-md-6 col-md-offset-3\" style=\"margin-top:1%;background:#fff\">
  ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
      ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
      <button type=\"submit\" ng-disabled=\"form.\$invalid\" class=\"btn btn-primary pull-right btn-login col-md-12\" style=\"background:#548235\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.validate_in"), "html", null, true);
        echo "</button>
  ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

</div>
</div>

";
        
        $__internal_d4aff03b5a9fd4f668e6b6ed630d2b0e4b0436917f6a336038ffed94e0b4ce1d->leave($__internal_d4aff03b5a9fd4f668e6b6ed630d2b0e4b0436917f6a336038ffed94e0b4ce1d_prof);

    }

    public function getTemplateName()
    {
        return "distributor/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  61 => 14,  57 => 13,  53 => 12,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="col-md-12" style="margin-top:1%;background:#fafafa;padding-top:2%;padding-bottom:2%;border-top:1px solid #f2f2f2">*/
/*   <div class="col-md-10 col-md-offset-1 navbar-brand" href="#" style="padding:15px 0;">*/
/*         <h6 style="color:#747474;font-size:.9em;margin-top:20px">&nbsp;&nbsp;{{ 'action.register_in'|trans }}*/
/* */
/*         </h6>*/
/* */
/*   </div>*/
/*   <div class="col-md-6 col-md-offset-3" style="margin-top:1%;background:#fff">*/
/*   {{ form_start(edit_form) }}*/
/*       {{ form_widget(edit_form) }}*/
/*       <button type="submit" ng-disabled="form.$invalid" class="btn btn-primary pull-right btn-login col-md-12" style="background:#548235">{{ 'action.validate_in'|trans }}</button>*/
/*   {{ form_end(edit_form) }}*/
/* */
/* </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
