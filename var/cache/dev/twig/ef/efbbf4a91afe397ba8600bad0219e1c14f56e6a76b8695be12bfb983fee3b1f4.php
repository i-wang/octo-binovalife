<?php

/* default/_flash_messages.html.twig */
class __TwigTemplate_ed9a92e83a115961b8566319c89945935f9b0754e3fe2d4d31ddcce099206318 extends Twig_Template
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
        $__internal_53205173f8ba2e59c2c26973ea538e1dcc4c76fe5438c0b3b72af85746e8b99b = $this->env->getExtension("native_profiler");
        $__internal_53205173f8ba2e59c2c26973ea538e1dcc4c76fe5438c0b3b72af85746e8b99b->enter($__internal_53205173f8ba2e59c2c26973ea538e1dcc4c76fe5438c0b3b72af85746e8b99b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/_flash_messages.html.twig"));

        // line 9
        echo "
";
        // line 10
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "started", array()) &&  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "peekAll", array())))) {
            // line 11
            echo "    <div class=\"messages\">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 13
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 14
                    echo "                ";
                    // line 15
                    echo "                <div class=\"alert alert-dismissible alert-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>

                    ";
                    // line 20
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"]), "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    </div>
";
        }
        
        $__internal_53205173f8ba2e59c2c26973ea538e1dcc4c76fe5438c0b3b72af85746e8b99b->leave($__internal_53205173f8ba2e59c2c26973ea538e1dcc4c76fe5438c0b3b72af85746e8b99b_prof);

    }

    public function getTemplateName()
    {
        return "default/_flash_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 24,  59 => 23,  50 => 20,  41 => 15,  39 => 14,  34 => 13,  30 => 12,  27 => 11,  25 => 10,  22 => 9,);
    }
}
/* {#*/
/*    This is a template fragment designed to be included in other templates*/
/*    See http://symfony.com/doc/current/book/templating.html#including-other-templates*/
/* */
/*    A common practice to better distinguish between templates and fragments is to*/
/*    prefix fragments with an underscore. That's why this template is called*/
/*    '_flash_messages.html.twig' instead of 'flash_messages.html.twig'*/
/* #}*/
/* */
/* {% if app.session.started and app.session.flashBag.peekAll is not empty %}*/
/*     <div class="messages">*/
/*         {% for type, messages in app.session.flashBag.all %}*/
/*             {% for message in messages %}*/
/*                 {# Bootstrap alert, see http://getbootstrap.com/components/#alerts #}*/
/*                 <div class="alert alert-dismissible alert-{{ type }}" role="alert">*/
/*                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">*/
/*                         <span aria-hidden="true">&times;</span>*/
/*                     </button>*/
/* */
/*                     {{ message|trans }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endif %}*/
/* */
