<?php

/* default/index.html.twig */
class __TwigTemplate_a2cf3a00a2519bd1f6639b02578ac6cb3a4be6fcdbf6f8a433891f9651fb2087 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_bc0327e92c779e9f01daf291b532dae918b8ce3694e88f3149150b3f46aac18b = $this->env->getExtension("native_profiler");
        $__internal_bc0327e92c779e9f01daf291b532dae918b8ce3694e88f3149150b3f46aac18b->enter($__internal_bc0327e92c779e9f01daf291b532dae918b8ce3694e88f3149150b3f46aac18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc0327e92c779e9f01daf291b532dae918b8ce3694e88f3149150b3f46aac18b->leave($__internal_bc0327e92c779e9f01daf291b532dae918b8ce3694e88f3149150b3f46aac18b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4d81dbf1898504458361cc7485eba387207d02f2485e1ff0ad4981d32c1d1dd = $this->env->getExtension("native_profiler");
        $__internal_c4d81dbf1898504458361cc7485eba387207d02f2485e1ff0ad4981d32c1d1dd->enter($__internal_c4d81dbf1898504458361cc7485eba387207d02f2485e1ff0ad4981d32c1d1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container-fluid\">
  <div class=\"col-md-12 navbar-brand\" href=\"#\" style=\"padding:15px 0;\" id=\"page-1\">
        <h6 style=\"color:#747474;font-size:.9em;margin-top:20px\">&nbsp;&nbsp;";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.dashboard_in"), "html", null, true);
        echo "  </h6>
  </div>
</div>
";
        
        $__internal_c4d81dbf1898504458361cc7485eba387207d02f2485e1ff0ad4981d32c1d1dd->leave($__internal_c4d81dbf1898504458361cc7485eba387207d02f2485e1ff0ad4981d32c1d1dd_prof);

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
        return array (  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <div class="container-fluid">*/
/*   <div class="col-md-12 navbar-brand" href="#" style="padding:15px 0;" id="page-1">*/
/*         <h6 style="color:#747474;font-size:.9em;margin-top:20px">&nbsp;&nbsp;{{ 'action.dashboard_in'|trans }}  </h6>*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
