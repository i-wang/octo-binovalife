<?php

/* distributor/show.html.twig */
class __TwigTemplate_9b48196ddca27deaba3e8d30319e0ac81a3435aaa48b78489ca9322af87db416 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "distributor/show.html.twig", 1);
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
        $__internal_23a4b159f3b72b757ee39fe5de41a9839a7ba306bcc99ef911d1335afe1ab097 = $this->env->getExtension("native_profiler");
        $__internal_23a4b159f3b72b757ee39fe5de41a9839a7ba306bcc99ef911d1335afe1ab097->enter($__internal_23a4b159f3b72b757ee39fe5de41a9839a7ba306bcc99ef911d1335afe1ab097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "distributor/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23a4b159f3b72b757ee39fe5de41a9839a7ba306bcc99ef911d1335afe1ab097->leave($__internal_23a4b159f3b72b757ee39fe5de41a9839a7ba306bcc99ef911d1335afe1ab097_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_60e89d083f9edb599d0040d542209aefc69c9e47ce019dfb4f869ebea986604a = $this->env->getExtension("native_profiler");
        $__internal_60e89d083f9edb599d0040d542209aefc69c9e47ce019dfb4f869ebea986604a->enter($__internal_60e89d083f9edb599d0040d542209aefc69c9e47ce019dfb4f869ebea986604a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"col-md-12\" style=\"margin-top:1%;background:#fafafa;padding-top:2%;padding-bottom:2%;border-top:1px solid #f2f2f2\">
  <div class=\"col-md-8 col-md-offset-2 navbar-brand text-center\" href=\"#\" style=\"padding:15px 0;\">
        <h6 style=\"color:#747474;font-size:.9em;margin-top:20px\">&nbsp;&nbsp;";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.success_in"), "html", null, true);
        echo "
        </h6>
          <a style=\"font-size:90%\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("distributor_edit", array("id" => $this->getAttribute((isset($context["distributor"]) ? $context["distributor"] : $this->getContext($context, "distributor")), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-edit\"></i>Edit</a>

  </div>


</div>

";
        
        $__internal_60e89d083f9edb599d0040d542209aefc69c9e47ce019dfb4f869ebea986604a->leave($__internal_60e89d083f9edb599d0040d542209aefc69c9e47ce019dfb4f869ebea986604a_prof);

    }

    public function getTemplateName()
    {
        return "distributor/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <div class="col-md-12" style="margin-top:1%;background:#fafafa;padding-top:2%;padding-bottom:2%;border-top:1px solid #f2f2f2">*/
/*   <div class="col-md-8 col-md-offset-2 navbar-brand text-center" href="#" style="padding:15px 0;">*/
/*         <h6 style="color:#747474;font-size:.9em;margin-top:20px">&nbsp;&nbsp;{{ 'action.success_in'|trans }}*/
/*         </h6>*/
/*           <a style="font-size:90%" href="{{ path('distributor_edit', { 'id': distributor.id }) }}"><i class="fa fa-edit"></i>Edit</a>*/
/* */
/*   </div>*/
/* */
/* */
/* </div>*/
/* */
/* {% endblock %}*/
/* */
