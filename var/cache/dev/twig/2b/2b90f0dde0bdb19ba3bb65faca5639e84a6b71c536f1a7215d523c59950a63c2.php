<?php

/* admin/blog/index.html.twig */
class __TwigTemplate_ba3639e950707fcc9712d99e18776d57f44438275ef9ef72fcca6d169a1d9d7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/blog/index.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4f7ddb0973a3c581c1907262235d5340dfe501c8cd92547d1bff6d69237b1db = $this->env->getExtension("native_profiler");
        $__internal_d4f7ddb0973a3c581c1907262235d5340dfe501c8cd92547d1bff6d69237b1db->enter($__internal_d4f7ddb0973a3c581c1907262235d5340dfe501c8cd92547d1bff6d69237b1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4f7ddb0973a3c581c1907262235d5340dfe501c8cd92547d1bff6d69237b1db->leave($__internal_d4f7ddb0973a3c581c1907262235d5340dfe501c8cd92547d1bff6d69237b1db_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_1f0c0a21014a500fb46497fbec25380f4ba8c2a3eed8007cc3d0b2edcb8fcd91 = $this->env->getExtension("native_profiler");
        $__internal_1f0c0a21014a500fb46497fbec25380f4ba8c2a3eed8007cc3d0b2edcb8fcd91->enter($__internal_1f0c0a21014a500fb46497fbec25380f4ba8c2a3eed8007cc3d0b2edcb8fcd91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "admin_post_index";
        
        $__internal_1f0c0a21014a500fb46497fbec25380f4ba8c2a3eed8007cc3d0b2edcb8fcd91->leave($__internal_1f0c0a21014a500fb46497fbec25380f4ba8c2a3eed8007cc3d0b2edcb8fcd91_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_3870e32fbf6362f3042217df751cee04163351c63794f52f420fb38d821fd4e6 = $this->env->getExtension("native_profiler");
        $__internal_3870e32fbf6362f3042217df751cee04163351c63794f52f420fb38d821fd4e6->enter($__internal_3870e32fbf6362f3042217df751cee04163351c63794f52f420fb38d821fd4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.post_list"), "html", null, true);
        echo "</h1>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.title"), "html", null, true);
        echo "</th>
                <th><i class=\"fa fa-user\"></i> ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.author"), "html", null, true);
        echo "</th>
                <th><i class=\"fa fa-calendar\"></i> ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.published_at"), "html", null, true);
        echo "</th>
                <th><i class=\"fa fa-cogs\"></i> ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.actions"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "authorEmail", array()), "html", null, true);
            echo "</td>
                ";
            // line 25
            echo "                <td>";
            if ($this->getAttribute($context["post"], "publishedAt", array())) {
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["post"], "publishedAt", array()), "short", "short", null, "UTC"), "html", null, true);
            }
            echo "</td>
                <td>
                    <div class=\"item-actions\">
                        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default\">
                            ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show"), "html", null, true);
            echo "
                        </a>

                        ";
            // line 32
            if ($this->getAttribute($context["post"], "isAuthor", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())), "method")) {
                // line 33
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_post_edit", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">
                                <i class=\"fa fa-edit\"></i> ";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit"), "html", null, true);
                echo "
                            </a>
                        ";
            }
            // line 37
            echo "                    </div>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            echo "            <tr>
                <td colspan=\"4\" align=\"center\">";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post.no_posts_found"), "html", null, true);
            echo "</td>
           </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>
";
        
        $__internal_3870e32fbf6362f3042217df751cee04163351c63794f52f420fb38d821fd4e6->leave($__internal_3870e32fbf6362f3042217df751cee04163351c63794f52f420fb38d821fd4e6_prof);

    }

    // line 49
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_f2cd0483e944d216ac2886ac63db4d9b4c31b6cbf6b093a4a7da5217c2a245d5 = $this->env->getExtension("native_profiler");
        $__internal_f2cd0483e944d216ac2886ac63db4d9b4c31b6cbf6b093a4a7da5217c2a245d5->enter($__internal_f2cd0483e944d216ac2886ac63db4d9b4c31b6cbf6b093a4a7da5217c2a245d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 50
        echo "    <div class=\"section actions\">
        <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("admin_post_new");
        echo "\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-plus\"></i> ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create_post"), "html", null, true);
        echo "
        </a>
    </div>

    ";
        // line 56
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 58
        echo $this->env->getExtension('code_explorer_source_code')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_f2cd0483e944d216ac2886ac63db4d9b4c31b6cbf6b093a4a7da5217c2a245d5->leave($__internal_f2cd0483e944d216ac2886ac63db4d9b4c31b6cbf6b093a4a7da5217c2a245d5_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 58,  179 => 56,  172 => 52,  168 => 51,  165 => 50,  159 => 49,  150 => 45,  141 => 42,  138 => 41,  130 => 37,  124 => 34,  119 => 33,  117 => 32,  111 => 29,  107 => 28,  98 => 25,  94 => 21,  90 => 20,  87 => 19,  82 => 18,  75 => 14,  71 => 13,  67 => 12,  63 => 11,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'admin/layout.html.twig' %}*/
/* */
/* {% block body_id 'admin_post_index' %}*/
/* */
/* {% block main %}*/
/*     <h1>{{ 'title.post_list'|trans }}</h1>*/
/* */
/*     <table class="table table-striped">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{ 'label.title'|trans }}</th>*/
/*                 <th><i class="fa fa-user"></i> {{ 'label.author'|trans }}</th>*/
/*                 <th><i class="fa fa-calendar"></i> {{ 'label.published_at'|trans }}</th>*/
/*                 <th><i class="fa fa-cogs"></i> {{ 'label.actions'|trans }}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for post in posts %}*/
/*             <tr>*/
/*                 <td>{{ post.title }}</td>*/
/*                 <td>{{ post.authorEmail }}</td>*/
/*                 {# it's not mandatory to set the timezone in localizeddate(). This is done to*/
/*                    avoid errors when the 'intl' PHP extension is not available and the application*/
/*                    is forced to use the limited "intl polyfill", which only supports UTC and GMT #}*/
/*                 <td>{% if post.publishedAt %}{{ post.publishedAt|localizeddate('short', 'short', null, 'UTC') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <div class="item-actions">*/
/*                         <a href="{{ path('admin_post_show', { id: post.id }) }}" class="btn btn-sm btn-default">*/
/*                             {{ 'action.show'|trans }}*/
/*                         </a>*/
/* */
/*                         {% if post.isAuthor(app.user) %}*/
/*                             <a href="{{ path('admin_post_edit', { id: post.id }) }}" class="btn btn-sm btn-primary">*/
/*                                 <i class="fa fa-edit"></i> {{ 'action.edit'|trans }}*/
/*                             </a>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </td>*/
/*             </tr>*/
/*         {% else %}*/
/*             <tr>*/
/*                 <td colspan="4" align="center">{{ 'post.no_posts_found'|trans }}</td>*/
/*            </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     <div class="section actions">*/
/*         <a href="{{ path('admin_post_new') }}" class="btn btn-lg btn-block btn-success">*/
/*             <i class="fa fa-plus"></i> {{ 'action.create_post'|trans }}*/
/*         </a>*/
/*     </div>*/
/* */
/*     {{ parent() }}*/
/* */
/*     {{ show_source_code(_self) }}*/
/* {% endblock %}*/
/* */
