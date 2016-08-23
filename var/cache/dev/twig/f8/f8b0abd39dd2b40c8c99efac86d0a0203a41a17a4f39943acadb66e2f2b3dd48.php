<?php

/* form/fields.html.twig */
class __TwigTemplate_5a5904a94fdbda18fbeefe55c1b84b0e53cc506d4eb351847f87b69355673caf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'date_time_picker_widget' => array($this, 'block_date_time_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_badac61acd9412a4d58923d206a0d146bb1ed13ebe39bbd62fae2c654208fbd0 = $this->env->getExtension("native_profiler");
        $__internal_badac61acd9412a4d58923d206a0d146bb1ed13ebe39bbd62fae2c654208fbd0->enter($__internal_badac61acd9412a4d58923d206a0d146bb1ed13ebe39bbd62fae2c654208fbd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        
        $__internal_badac61acd9412a4d58923d206a0d146bb1ed13ebe39bbd62fae2c654208fbd0->leave($__internal_badac61acd9412a4d58923d206a0d146bb1ed13ebe39bbd62fae2c654208fbd0_prof);

    }

    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_04c8ab86d6a526a7d181276427a75c4770b56e9efcb82b12e0e3f5b0c2b95faf = $this->env->getExtension("native_profiler");
        $__internal_04c8ab86d6a526a7d181276427a75c4770b56e9efcb82b12e0e3f5b0c2b95faf->enter($__internal_04c8ab86d6a526a7d181276427a75c4770b56e9efcb82b12e0e3f5b0c2b95faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            ";
        // line 13
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
            <span class=\"input-group-addon\">
                <span class=\"fa fa-calendar\"></span>
            </span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_04c8ab86d6a526a7d181276427a75c4770b56e9efcb82b12e0e3f5b0c2b95faf->leave($__internal_04c8ab86d6a526a7d181276427a75c4770b56e9efcb82b12e0e3f5b0c2b95faf_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 13,  41 => 12,  38 => 11,  26 => 10,  23 => 9,);
    }
}
/* {#*/
/*    Each field type is rendered by a template fragment, which is determined*/
/*    by the name of your form type class (DateTimePickerType -> date_time_picker)*/
/*    and the suffix "_widget". This can be controlled by overriding getBlockPrefix()*/
/*    in DateTimePickerType.*/
/* */
/*    See http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field*/
/* #}*/
/* */
/* {% block date_time_picker_widget %}*/
/*     {% spaceless %}*/
/*         <div class="input-group date" data-toggle="datetimepicker">*/
/*             {{ block('datetime_widget') }}*/
/*             <span class="input-group-addon">*/
/*                 <span class="fa fa-calendar"></span>*/
/*             </span>*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
