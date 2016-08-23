<?php

/* default/homepage.html.twig */
class __TwigTemplate_a48dd2928534bf6f7649ffe4b58032b3cea8c1d8ca5fdae4b31770cd5955f552 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/homepage.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56dd74a722d95194cd1bd6411a5c20ef7b236011e12b818033d9fff09904d36e = $this->env->getExtension("native_profiler");
        $__internal_56dd74a722d95194cd1bd6411a5c20ef7b236011e12b818033d9fff09904d36e->enter($__internal_56dd74a722d95194cd1bd6411a5c20ef7b236011e12b818033d9fff09904d36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56dd74a722d95194cd1bd6411a5c20ef7b236011e12b818033d9fff09904d36e->leave($__internal_56dd74a722d95194cd1bd6411a5c20ef7b236011e12b818033d9fff09904d36e_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_8755b4d8238fa964f4e18c18e2f5de260f16e6f00295c189dd9004c25e9d9545 = $this->env->getExtension("native_profiler");
        $__internal_8755b4d8238fa964f4e18c18e2f5de260f16e6f00295c189dd9004c25e9d9545->enter($__internal_8755b4d8238fa964f4e18c18e2f5de260f16e6f00295c189dd9004c25e9d9545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "homepage";
        
        $__internal_8755b4d8238fa964f4e18c18e2f5de260f16e6f00295c189dd9004c25e9d9545->leave($__internal_8755b4d8238fa964f4e18c18e2f5de260f16e6f00295c189dd9004c25e9d9545_prof);

    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        $__internal_7a90af6123e1b586dd1ed7ea4743df9c6a7a073a943f216094901b8984a15197 = $this->env->getExtension("native_profiler");
        $__internal_7a90af6123e1b586dd1ed7ea4743df9c6a7a073a943f216094901b8984a15197->enter($__internal_7a90af6123e1b586dd1ed7ea4743df9c6a7a073a943f216094901b8984a15197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_7a90af6123e1b586dd1ed7ea4743df9c6a7a073a943f216094901b8984a15197->leave($__internal_7a90af6123e1b586dd1ed7ea4743df9c6a7a073a943f216094901b8984a15197_prof);

    }

    // line 7
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a2eaf78382b2a09063a59439dfdecbc03c199eac1981ff78195b736650a19c04 = $this->env->getExtension("native_profiler");
        $__internal_a2eaf78382b2a09063a59439dfdecbc03c199eac1981ff78195b736650a19c04->enter($__internal_a2eaf78382b2a09063a59439dfdecbc03c199eac1981ff78195b736650a19c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_a2eaf78382b2a09063a59439dfdecbc03c199eac1981ff78195b736650a19c04->leave($__internal_a2eaf78382b2a09063a59439dfdecbc03c199eac1981ff78195b736650a19c04_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_56ed0fdd0df3a00a859189c330d15bd22f75bbbcbaea2ca50bce91c541dfeb6e = $this->env->getExtension("native_profiler");
        $__internal_56ed0fdd0df3a00a859189c330d15bd22f75bbbcbaea2ca50bce91c541dfeb6e->enter($__internal_56ed0fdd0df3a00a859189c330d15bd22f75bbbcbaea2ca50bce91c541dfeb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"page-header\">
        <h1>";
        // line 11
        echo $this->env->getExtension('translator')->trans("title.homepage");
        echo "</h1>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    ";
        // line 18
        echo $this->env->getExtension('translator')->trans("help.browse_app");
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("blog_index");
        echo "\">
                        <i class=\"fa fa-users\"></i> ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.browse_app"), "html", null, true);
        echo "
                    </a>
                </p>
            </div>
        </div>

        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    ";
        // line 31
        echo $this->env->getExtension('translator')->trans("help.browse_admin");
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("admin_index");
        echo "\">
                        <i class=\"fa fa-lock\"></i> ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.browse_admin"), "html", null, true);
        echo "
                    </a>
                </p>
            </div>
        </div>
    </div>
";
        
        $__internal_56ed0fdd0df3a00a859189c330d15bd22f75bbbcbaea2ca50bce91c541dfeb6e->leave($__internal_56ed0fdd0df3a00a859189c330d15bd22f75bbbcbaea2ca50bce91c541dfeb6e_prof);

    }

    public function getTemplateName()
    {
        return "default/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 35,  118 => 34,  112 => 31,  100 => 22,  96 => 21,  90 => 18,  80 => 11,  77 => 10,  71 => 9,  60 => 7,  49 => 6,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'homepage' %}*/
/* */
/* */
/* {% block header %}{% endblock %}*/
/* {% block footer %}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="page-header">*/
/*         <h1>{{ 'title.homepage'|trans|raw }}</h1>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-sm-6">*/
/*             <div class="jumbotron">*/
/*                 <p>*/
/*                     {{ 'help.browse_app'|trans|raw }}*/
/*                 </p>*/
/*                 <p>*/
/*                     <a class="btn btn-primary btn-lg" href="{{ path('blog_index') }}">*/
/*                         <i class="fa fa-users"></i> {{ 'action.browse_app'|trans }}*/
/*                     </a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="col-sm-6">*/
/*             <div class="jumbotron">*/
/*                 <p>*/
/*                     {{ 'help.browse_admin'|trans|raw }}*/
/*                 </p>*/
/*                 <p>*/
/*                     <a class="btn btn-primary btn-lg" href="{{ path('admin_index') }}">*/
/*                         <i class="fa fa-lock"></i> {{ 'action.browse_admin'|trans }}*/
/*                     </a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
