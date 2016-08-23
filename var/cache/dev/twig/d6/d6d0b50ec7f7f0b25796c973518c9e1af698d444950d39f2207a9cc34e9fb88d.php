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
        $__internal_726b7e2b01e2013e0cf868560e08bd44dca4d82b07f6613437247c88d251d4fc = $this->env->getExtension("native_profiler");
        $__internal_726b7e2b01e2013e0cf868560e08bd44dca4d82b07f6613437247c88d251d4fc->enter($__internal_726b7e2b01e2013e0cf868560e08bd44dca4d82b07f6613437247c88d251d4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "distributor/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_726b7e2b01e2013e0cf868560e08bd44dca4d82b07f6613437247c88d251d4fc->leave($__internal_726b7e2b01e2013e0cf868560e08bd44dca4d82b07f6613437247c88d251d4fc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d731c60c1e9b029e455142630f2cc48c6e19a4d55b215df6dfb7bf6d324fb3cd = $this->env->getExtension("native_profiler");
        $__internal_d731c60c1e9b029e455142630f2cc48c6e19a4d55b215df6dfb7bf6d324fb3cd->enter($__internal_d731c60c1e9b029e455142630f2cc48c6e19a4d55b215df6dfb7bf6d324fb3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Distributor</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["distributor"]) ? $context["distributor"] : $this->getContext($context, "distributor")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["distributor"]) ? $context["distributor"] : $this->getContext($context, "distributor")), "username", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["distributor"]) ? $context["distributor"] : $this->getContext($context, "distributor")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["distributor"]) ? $context["distributor"] : $this->getContext($context, "distributor")), "password", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["distributor"]) ? $context["distributor"] : $this->getContext($context, "distributor")), "roles", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["distributor"]) ? $context["distributor"] : $this->getContext($context, "distributor")), "firstName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["distributor"]) ? $context["distributor"] : $this->getContext($context, "distributor")), "lastName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Birthdate</th>
                <td>";
        // line 38
        if ($this->getAttribute((isset($context["distributor"]) ? $context["distributor"] : $this->getContext($context, "distributor")), "birthDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["distributor"]) ? $context["distributor"] : $this->getContext($context, "distributor")), "birthDate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Phonenumber</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["distributor"]) ? $context["distributor"] : $this->getContext($context, "distributor")), "phoneNumber", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Country</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["distributor"]) ? $context["distributor"] : $this->getContext($context, "distributor")), "country", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>City</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["distributor"]) ? $context["distributor"] : $this->getContext($context, "distributor")), "city", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["distributor"]) ? $context["distributor"] : $this->getContext($context, "distributor")), "address", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("distributor_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("distributor_edit", array("id" => $this->getAttribute((isset($context["distributor"]) ? $context["distributor"] : $this->getContext($context, "distributor")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 67
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 69
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_d731c60c1e9b029e455142630f2cc48c6e19a4d55b215df6dfb7bf6d324fb3cd->leave($__internal_d731c60c1e9b029e455142630f2cc48c6e19a4d55b215df6dfb7bf6d324fb3cd_prof);

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
        return array (  154 => 69,  149 => 67,  143 => 64,  137 => 61,  127 => 54,  120 => 50,  113 => 46,  106 => 42,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Distributor</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ distributor.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Username</th>*/
/*                 <td>{{ distributor.username }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Email</th>*/
/*                 <td>{{ distributor.email }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Password</th>*/
/*                 <td>{{ distributor.password }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Roles</th>*/
/*                 <td>{{ distributor.roles }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Firstname</th>*/
/*                 <td>{{ distributor.firstName }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Lastname</th>*/
/*                 <td>{{ distributor.lastName }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Birthdate</th>*/
/*                 <td>{% if distributor.birthDate %}{{ distributor.birthDate|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Phonenumber</th>*/
/*                 <td>{{ distributor.phoneNumber }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Country</th>*/
/*                 <td>{{ distributor.country }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>City</th>*/
/*                 <td>{{ distributor.city }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Address</th>*/
/*                 <td>{{ distributor.address }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('distributor_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('distributor_edit', { 'id': distributor.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
