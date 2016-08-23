<?php

/* @CodeExplorer/source_code.html.twig */
class __TwigTemplate_9db34af465431e6cac6073eb25326cd938cae235107c8652edf4db743c9dfdaa extends Twig_Template
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
        $__internal_8ac0b60dfa68b8b96210d17f109e3f41757436870b31dfb025629d491f930ac9 = $this->env->getExtension("native_profiler");
        $__internal_8ac0b60dfa68b8b96210d17f109e3f41757436870b31dfb025629d491f930ac9->enter($__internal_8ac0b60dfa68b8b96210d17f109e3f41757436870b31dfb025629d491f930ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CodeExplorer/source_code.html.twig"));

        // line 1
        echo "<div class=\"section source-code\">
    <p>
        ";
        // line 3
        echo $this->env->getExtension('translator')->trans("help.show_code");
        echo "
    </p>

    <button type=\"button\" class=\"btn btn-default btn-lg btn-block\" data-toggle=\"modal\" data-target=\"#sourceCodeModal\">
      <i class=\"fa fa-cogs\"></i> ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show_code"), "html", null, true);
        echo "
    </button>

    <div class=\"modal fade\" id=\"sourceCodeModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\"><i class=\"fa fa-code\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.source_code"), "html", null, true);
        echo "</h4>
                </div>

                <div class=\"modal-body\">
                    ";
        // line 21
        if ((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller"))) {
            // line 22
            echo "                        <h3>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.controller_code"), "html", null, true);
            echo "<small class=\"pull-right\">";
            echo $this->env->getExtension('code')->formatFile($this->getAttribute((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), "file_path", array()), $this->getAttribute((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), "starting_line", array()));
            echo "</small></h3>
                        <pre><code class=\"php\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), "source_code", array()), "html", null, true);
            echo "</code></pre>
                    ";
        } else {
            // line 25
            echo "                        <h3>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.controller_code"), "html", null, true);
            echo "</h3>
                        <pre><code>";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("not_available"), "html", null, true);
            echo "</code></pre>
                    ";
        }
        // line 28
        echo "
                    <h3>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.twig_template_code"), "html", null, true);
        echo "<small class=\"pull-right\">";
        echo $this->env->getExtension('code')->formatFile($this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "file_path", array()), $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "starting_line", array()));
        echo "</small></h3>
                    <pre><code class=\"twig\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "source_code", array()), "html", null, true);
        echo "</code></pre>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_8ac0b60dfa68b8b96210d17f109e3f41757436870b31dfb025629d491f930ac9->leave($__internal_8ac0b60dfa68b8b96210d17f109e3f41757436870b31dfb025629d491f930ac9_prof);

    }

    public function getTemplateName()
    {
        return "@CodeExplorer/source_code.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 30,  80 => 29,  77 => 28,  72 => 26,  67 => 25,  62 => 23,  55 => 22,  53 => 21,  46 => 17,  33 => 7,  26 => 3,  22 => 1,);
    }
}
/* <div class="section source-code">*/
/*     <p>*/
/*         {{ 'help.show_code'|trans|raw }}*/
/*     </p>*/
/* */
/*     <button type="button" class="btn btn-default btn-lg btn-block" data-toggle="modal" data-target="#sourceCodeModal">*/
/*       <i class="fa fa-cogs"></i> {{ 'action.show_code'|trans }}*/
/*     </button>*/
/* */
/*     <div class="modal fade" id="sourceCodeModal" tabindex="-1">*/
/*         <div class="modal-dialog modal-lg">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">*/
/*                         <span aria-hidden="true">&times;</span>*/
/*                     </button>*/
/*                     <h4 class="modal-title"><i class="fa fa-code"></i> {{ 'title.source_code'|trans }}</h4>*/
/*                 </div>*/
/* */
/*                 <div class="modal-body">*/
/*                     {% if controller %}*/
/*                         <h3>{{ 'title.controller_code'|trans }}<small class="pull-right">{{ controller.file_path|format_file(controller.starting_line) }}</small></h3>*/
/*                         <pre><code class="php">{{ controller.source_code }}</code></pre>*/
/*                     {% else %}*/
/*                         <h3>{{ 'title.controller_code'|trans }}</h3>*/
/*                         <pre><code>{{ 'not_available'|trans }}</code></pre>*/
/*                     {% endif %}*/
/* */
/*                     <h3>{{ 'title.twig_template_code'|trans }}<small class="pull-right">{{ template.file_path|format_file(template.starting_line) }}</small></h3>*/
/*                     <pre><code class="twig">{{ template.source_code }}</code></pre>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
