<?php

/* distributor/index.html.twig */
class __TwigTemplate_16fcd04323cdae9e5fc9b92a239f3d1f50c955f3747eb0d49572057e8203bafe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "distributor/index.html.twig", 1);
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
        $__internal_bdd0ac202fc301271c7f588711f7cbdda01091bbcb1caaedcce620f841f5edd0 = $this->env->getExtension("native_profiler");
        $__internal_bdd0ac202fc301271c7f588711f7cbdda01091bbcb1caaedcce620f841f5edd0->enter($__internal_bdd0ac202fc301271c7f588711f7cbdda01091bbcb1caaedcce620f841f5edd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "distributor/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdd0ac202fc301271c7f588711f7cbdda01091bbcb1caaedcce620f841f5edd0->leave($__internal_bdd0ac202fc301271c7f588711f7cbdda01091bbcb1caaedcce620f841f5edd0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_037e944aa5110c6faca888759371039fc90ae694812d6cef9b8815c324ba813e = $this->env->getExtension("native_profiler");
        $__internal_037e944aa5110c6faca888759371039fc90ae694812d6cef9b8815c324ba813e->enter($__internal_037e944aa5110c6faca888759371039fc90ae694812d6cef9b8815c324ba813e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container-fluid\">
    <div class=\"col-md-12 navbar-brand\" href=\"#\" style=\"padding:15px 0;\">
          <h6 style=\"color:#747474;font-size:.8em;margin-top:20px\">&nbsp;&nbsp;";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.network_in"), "html", null, true);
        echo "  </h6>

    </div>
<div class=\"col-md-12 row\">
  ";
        // line 10
        echo "  <div class=\"col-md-12 text-center\" style=\"margin-top:1%;background:#fafafa;padding-top:2%;padding-bottom:2%\">
            <div class=\"col-md-3\" style=\"min-height:140px;background:#f2f2f2;padding:50px 0\">
                <h4>No Photo Available</h4>
            </div>
            <div class=\"col-md-3\" style=\"min-height:120px;background:#ffff\">
                <div class=\"col-md-12\" style=\"min-height:35px;background:#7f7f7f;padding:10px;color:#fff;font-weight:600\">
                    <h4 style=\"text-transform:uppercase\"><strong>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastname", array()), "html", null, true);
        echo "</strong></h4>
                </div>
                <div class=\"col-md-12\" style=\"min-height:50px;background:#fff;padding:10px;color:#747474;font-weight:600f\">
                    <h4>Parrainé par Username, N° ID</h4>
                </div>
                <div class=\"col-md-12\" style=\"min-height:35px;background:#7f7f7f;padding:10px;color:#fff;font-weight:600\">
                    <h4>Total VPP : 0000</h4>
                </div>

            </div>
    <div class=\"col-md-3\" style=\"height:120px;background:#ffff\">
      <div class=\"col-md-12\" style=\"min-height:35px;background:#7f7f7f;padding:10px;color:#fff;font-weight:600\">
           <h4>Total VPP : 0000</h4>
       </div>
       <div class=\"col-md-12\" style=\"min-height:50px;background:#fff;padding:10px;color:#747474;font-weight:600\">
             <h4>Total VPP : 0000</h4>
        </div>
        <div class=\"col-md-12\" style=\"min-height:35px;background:#7f7f7f;padding:10px;color:#fff;font-weight:600\">
             <h4>Total VPP : 0000</h4>
         </div>
     </div>
     <div class=\"col-md-3\" style=\"height:120px;background:#ffff\">
       <div class=\"col-md-12\" style=\"min-height:35px;background:#7f7f7f;padding:10px;color:#fff;font-weight:600\">
             <h4>Total VPP : 0000</h4>
        </div>
        <div class=\"col-md-12\" style=\"min-height:50px;background:#fff;padding:10px;color:#747474;font-weight:600\">
             <h4>Total VPP : 0000</h4>
         </div>
         <div class=\"col-md-12\" style=\"min-height:35px;background:#7f7f7f;padding:10px;color:#fff;font-weight:600\">
               <h4>Total VPP : 0000</h4>
          </div>

      </div>

 </div>


 <div class=\"col-md-12\" style=\"margin-top:1%;background:#fafafa;padding-top:2%;padding-bottom:2%\">
    <table class=\"table table-inverse\">
        <thead style=\"background:#548235;color:#fff\">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Birthdate</th>
                <th>Phonenumber</th>
                <th>Country</th>
                <th>City</th>
                <th>Address</th>

            </tr>
        </thead>
        <tbody>
        ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["distributors"]) ? $context["distributors"] : $this->getContext($context, "distributors")));
        foreach ($context['_seq'] as $context["_key"] => $context["distributor"]) {
            // line 72
            echo "            <tr>
                <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["distributor"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["distributor"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["distributor"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["distributor"], "firstName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["distributor"], "lastName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 78
            if ($this->getAttribute($context["distributor"], "birthDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["distributor"], "birthDate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["distributor"], "phoneNumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["distributor"], "country", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["distributor"], "city", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["distributor"], "address", array()), "html", null, true);
            echo "</td>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['distributor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "        </tbody>
    </table>
  </div>



      </div>
        </div>
";
        
        $__internal_037e944aa5110c6faca888759371039fc90ae694812d6cef9b8815c324ba813e->leave($__internal_037e944aa5110c6faca888759371039fc90ae694812d6cef9b8815c324ba813e_prof);

    }

    public function getTemplateName()
    {
        return "distributor/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 86,  164 => 82,  160 => 81,  156 => 80,  152 => 79,  146 => 78,  142 => 77,  138 => 76,  134 => 75,  130 => 74,  126 => 73,  123 => 72,  119 => 71,  59 => 16,  51 => 10,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <div class="container-fluid">*/
/*     <div class="col-md-12 navbar-brand" href="#" style="padding:15px 0;">*/
/*           <h6 style="color:#747474;font-size:.8em;margin-top:20px">&nbsp;&nbsp;{{ 'action.network_in'|trans }}  </h6>*/
/* */
/*     </div>*/
/* <div class="col-md-12 row">*/
/*   {#  <a href="{{ path('distributor_new') }}" class="pull-right" style="color:#4A7B3E"><i class="fa fa-edit">&nbsp;&nbsp;&nbsp;Pre-register a Distributor</i></a>#}*/
/*   <div class="col-md-12 text-center" style="margin-top:1%;background:#fafafa;padding-top:2%;padding-bottom:2%">*/
/*             <div class="col-md-3" style="min-height:140px;background:#f2f2f2;padding:50px 0">*/
/*                 <h4>No Photo Available</h4>*/
/*             </div>*/
/*             <div class="col-md-3" style="min-height:120px;background:#ffff">*/
/*                 <div class="col-md-12" style="min-height:35px;background:#7f7f7f;padding:10px;color:#fff;font-weight:600">*/
/*                     <h4 style="text-transform:uppercase"><strong>{{app.user.firstname}}, {{app.user.lastname}}</strong></h4>*/
/*                 </div>*/
/*                 <div class="col-md-12" style="min-height:50px;background:#fff;padding:10px;color:#747474;font-weight:600f">*/
/*                     <h4>Parrainé par Username, N° ID</h4>*/
/*                 </div>*/
/*                 <div class="col-md-12" style="min-height:35px;background:#7f7f7f;padding:10px;color:#fff;font-weight:600">*/
/*                     <h4>Total VPP : 0000</h4>*/
/*                 </div>*/
/* */
/*             </div>*/
/*     <div class="col-md-3" style="height:120px;background:#ffff">*/
/*       <div class="col-md-12" style="min-height:35px;background:#7f7f7f;padding:10px;color:#fff;font-weight:600">*/
/*            <h4>Total VPP : 0000</h4>*/
/*        </div>*/
/*        <div class="col-md-12" style="min-height:50px;background:#fff;padding:10px;color:#747474;font-weight:600">*/
/*              <h4>Total VPP : 0000</h4>*/
/*         </div>*/
/*         <div class="col-md-12" style="min-height:35px;background:#7f7f7f;padding:10px;color:#fff;font-weight:600">*/
/*              <h4>Total VPP : 0000</h4>*/
/*          </div>*/
/*      </div>*/
/*      <div class="col-md-3" style="height:120px;background:#ffff">*/
/*        <div class="col-md-12" style="min-height:35px;background:#7f7f7f;padding:10px;color:#fff;font-weight:600">*/
/*              <h4>Total VPP : 0000</h4>*/
/*         </div>*/
/*         <div class="col-md-12" style="min-height:50px;background:#fff;padding:10px;color:#747474;font-weight:600">*/
/*              <h4>Total VPP : 0000</h4>*/
/*          </div>*/
/*          <div class="col-md-12" style="min-height:35px;background:#7f7f7f;padding:10px;color:#fff;font-weight:600">*/
/*                <h4>Total VPP : 0000</h4>*/
/*           </div>*/
/* */
/*       </div>*/
/* */
/*  </div>*/
/* */
/* */
/*  <div class="col-md-12" style="margin-top:1%;background:#fafafa;padding-top:2%;padding-bottom:2%">*/
/*     <table class="table table-inverse">*/
/*         <thead style="background:#548235;color:#fff">*/
/*             <tr>*/
/*                 <th>ID</th>*/
/*                 <th>Username</th>*/
/*                 <th>Email</th>*/
/*                 <th>Firstname</th>*/
/*                 <th>Lastname</th>*/
/*                 <th>Birthdate</th>*/
/*                 <th>Phonenumber</th>*/
/*                 <th>Country</th>*/
/*                 <th>City</th>*/
/*                 <th>Address</th>*/
/* */
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for distributor in distributors %}*/
/*             <tr>*/
/*                 <td>{{ distributor.id }}</td>*/
/*                 <td>{{ distributor.username }}</td>*/
/*                 <td>{{ distributor.email }}</td>*/
/*                 <td>{{ distributor.firstName }}</td>*/
/*                 <td>{{ distributor.lastName }}</td>*/
/*                 <td>{% if distributor.birthDate %}{{ distributor.birthDate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ distributor.phoneNumber }}</td>*/
/*                 <td>{{ distributor.country }}</td>*/
/*                 <td>{{ distributor.city }}</td>*/
/*                 <td>{{ distributor.address }}</td>*/
/* */
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*   </div>*/
/* */
/* */
/* */
/*       </div>*/
/*         </div>*/
/* {% endblock %}*/
/* */
