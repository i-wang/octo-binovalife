<?php

/* form/fields.html.twig */
class __TwigTemplate_7f4ba7a6b6ab90037ee6cad7abf41444f57f421140a08dc3a875a84bea8a717d extends Twig_Template
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
        $__internal_01170df2ee10594d251555649062a27c868c2d9c1cbefcb3bc32a907f542086b = $this->env->getExtension("native_profiler");
        $__internal_01170df2ee10594d251555649062a27c868c2d9c1cbefcb3bc32a907f542086b->enter($__internal_01170df2ee10594d251555649062a27c868c2d9c1cbefcb3bc32a907f542086b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 1
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        
        $__internal_01170df2ee10594d251555649062a27c868c2d9c1cbefcb3bc32a907f542086b->leave($__internal_01170df2ee10594d251555649062a27c868c2d9c1cbefcb3bc32a907f542086b_prof);

    }

    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_80842407b7c6f16ca23ca281a1a2a522aa42ba97d265a667e3c2238ccdff6151 = $this->env->getExtension("native_profiler");
        $__internal_80842407b7c6f16ca23ca281a1a2a522aa42ba97d265a667e3c2238ccdff6151->enter($__internal_80842407b7c6f16ca23ca281a1a2a522aa42ba97d265a667e3c2238ccdff6151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            ";
        // line 4
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
            <span class=\"input-group-addon\">
                <span class=\"fa fa-calendar\"></span>
            </span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_80842407b7c6f16ca23ca281a1a2a522aa42ba97d265a667e3c2238ccdff6151->leave($__internal_80842407b7c6f16ca23ca281a1a2a522aa42ba97d265a667e3c2238ccdff6151_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }
}
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
