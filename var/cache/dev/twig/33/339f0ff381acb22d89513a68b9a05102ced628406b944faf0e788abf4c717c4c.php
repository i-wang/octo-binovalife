<?php

/* blog/index.html.twig */
class __TwigTemplate_4d10db33fc3f746b9638f4672d980f482f5b470b62f2e5a665cbcf140ba8e0ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e2577a32abe5140cf43fd0dfba0ed0497b76c4497c28d98cec89805b4743997 = $this->env->getExtension("native_profiler");
        $__internal_0e2577a32abe5140cf43fd0dfba0ed0497b76c4497c28d98cec89805b4743997->enter($__internal_0e2577a32abe5140cf43fd0dfba0ed0497b76c4497c28d98cec89805b4743997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e2577a32abe5140cf43fd0dfba0ed0497b76c4497c28d98cec89805b4743997->leave($__internal_0e2577a32abe5140cf43fd0dfba0ed0497b76c4497c28d98cec89805b4743997_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_f9e6233b660ac439de647057dafc5639df36de777bd5d1c2f2bde0dc50cd8001 = $this->env->getExtension("native_profiler");
        $__internal_f9e6233b660ac439de647057dafc5639df36de777bd5d1c2f2bde0dc50cd8001->enter($__internal_f9e6233b660ac439de647057dafc5639df36de777bd5d1c2f2bde0dc50cd8001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "blog_index";
        
        $__internal_f9e6233b660ac439de647057dafc5639df36de777bd5d1c2f2bde0dc50cd8001->leave($__internal_f9e6233b660ac439de647057dafc5639df36de777bd5d1c2f2bde0dc50cd8001_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_ce60c133b8d44c8048b6cccfb1fff42cd846c1b2902602f79472fdd021bf1c7d = $this->env->getExtension("native_profiler");
        $__internal_ce60c133b8d44c8048b6cccfb1fff42cd846c1b2902602f79472fdd021bf1c7d->enter($__internal_ce60c133b8d44c8048b6cccfb1fff42cd846c1b2902602f79472fdd021bf1c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "        <article class=\"post\">
            <h2>
                <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_post", array("slug" => $this->getAttribute($context["post"], "slug", array()))), "html", null, true);
            echo "\">
                    ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "
                </a>
            </h2>

            ";
            // line 14
            echo $this->env->getExtension('app.extension')->markdownToHtml($this->getAttribute($context["post"], "summary", array()));
            echo "
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 17
            echo "        <div class=\"well\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post.no_posts_found"), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
    <div class=\"navigation text-center\">
        ";
        // line 21
        echo $this->env->getExtension('pagerfanta')->renderPagerfanta((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), "twitter_bootstrap3_translated", array("routeName" => "blog_index_paginated"));
        echo "
    </div>
";
        
        $__internal_ce60c133b8d44c8048b6cccfb1fff42cd846c1b2902602f79472fdd021bf1c7d->leave($__internal_ce60c133b8d44c8048b6cccfb1fff42cd846c1b2902602f79472fdd021bf1c7d_prof);

    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_54e18f5b54d4dc3ecefa91dce561cda32540630b78a9a39b943d1f88ecbc0cfb = $this->env->getExtension("native_profiler");
        $__internal_54e18f5b54d4dc3ecefa91dce561cda32540630b78a9a39b943d1f88ecbc0cfb->enter($__internal_54e18f5b54d4dc3ecefa91dce561cda32540630b78a9a39b943d1f88ecbc0cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 26
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 28
        echo $this->env->getExtension('code_explorer_source_code')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_54e18f5b54d4dc3ecefa91dce561cda32540630b78a9a39b943d1f88ecbc0cfb->leave($__internal_54e18f5b54d4dc3ecefa91dce561cda32540630b78a9a39b943d1f88ecbc0cfb_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 28,  112 => 26,  106 => 25,  96 => 21,  92 => 19,  83 => 17,  75 => 14,  68 => 10,  64 => 9,  60 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'blog_index' %}*/
/* */
/* {% block main %}*/
/*     {% for post in posts %}*/
/*         <article class="post">*/
/*             <h2>*/
/*                 <a href="{{ path('blog_post', { slug: post.slug }) }}">*/
/*                     {{ post.title }}*/
/*                 </a>*/
/*             </h2>*/
/* */
/*             {{ post.summary|md2html }}*/
/*         </article>*/
/*     {% else %}*/
/*         <div class="well">{{ 'post.no_posts_found'|trans }}</div>*/
/*     {% endfor %}*/
/* */
/*     <div class="navigation text-center">*/
/*         {{ pagerfanta(posts, 'twitter_bootstrap3_translated', { routeName: 'blog_index_paginated' }) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     {{ parent() }}*/
/* */
/*     {{ show_source_code(_self) }}*/
/* {% endblock %}*/
/* */
