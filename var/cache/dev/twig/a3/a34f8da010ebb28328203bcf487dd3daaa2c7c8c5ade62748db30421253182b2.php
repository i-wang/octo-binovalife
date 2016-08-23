<?php

/* blog/about.html.twig */
class __TwigTemplate_9f08a27d2462b7fc8f0c72f6161803e9d9c2690da42e899b6b82e86095780831 extends Twig_Template
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
        $__internal_abe24d2067e7e2b09ca52925efbb9f9e86451c5bfaacd658adf662d9e5316645 = $this->env->getExtension("native_profiler");
        $__internal_abe24d2067e7e2b09ca52925efbb9f9e86451c5bfaacd658adf662d9e5316645->enter($__internal_abe24d2067e7e2b09ca52925efbb9f9e86451c5bfaacd658adf662d9e5316645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/about.html.twig"));

        // line 1
        echo "<div class=\"section about\">
    <div class=\"well well-lg\">
        <p>
            ";
        // line 4
        echo $this->env->getExtension('translator')->trans("help.app_description");
        echo "
        </p>
        <p>
            ";
        // line 7
        echo $this->env->getExtension('translator')->trans("help.more_information");
        echo "
        </p>
    </div>
</div>

";
        // line 15
        echo "<!-- Fragment rendered on ";
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, "now", "long", "long", null, "UTC"), "html", null, true);
        echo " -->
";
        
        $__internal_abe24d2067e7e2b09ca52925efbb9f9e86451c5bfaacd658adf662d9e5316645->leave($__internal_abe24d2067e7e2b09ca52925efbb9f9e86451c5bfaacd658adf662d9e5316645_prof);

    }

    public function getTemplateName()
    {
        return "blog/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 15,  33 => 7,  27 => 4,  22 => 1,);
    }
}
/* <div class="section about">*/
/*     <div class="well well-lg">*/
/*         <p>*/
/*             {{ 'help.app_description'|trans|raw }}*/
/*         </p>*/
/*         <p>*/
/*             {{ 'help.more_information'|trans|raw }}*/
/*         </p>*/
/*     </div>*/
/* </div>*/
/* */
/* {# it's not mandatory to set the timezone in localizeddate(). This is done to*/
/*    avoid errors when the 'intl' PHP extension is not available and the application*/
/*    is forced to use the limited "intl polyfill", which only supports UTC and GMT #}*/
/* <!-- Fragment rendered on {{ 'now'|localizeddate('long', 'long', null, 'UTC') }} -->*/
/* */
