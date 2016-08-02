<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_1ea39dc4b48eeca7ec5c1ae46dea90eee1aa1dec064a20b959575dce2fec7f30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d41d1c33c840fe6515e64412dd7396e3c11dd6a798e6eac8a7b4ecca848f0021 = $this->env->getExtension("native_profiler");
        $__internal_d41d1c33c840fe6515e64412dd7396e3c11dd6a798e6eac8a7b4ecca848f0021->enter($__internal_d41d1c33c840fe6515e64412dd7396e3c11dd6a798e6eac8a7b4ecca848f0021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d41d1c33c840fe6515e64412dd7396e3c11dd6a798e6eac8a7b4ecca848f0021->leave($__internal_d41d1c33c840fe6515e64412dd7396e3c11dd6a798e6eac8a7b4ecca848f0021_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f275b12426deccbe0b6aed06881f007ce4c458b556e5d901917eb4305bf1f2bf = $this->env->getExtension("native_profiler");
        $__internal_f275b12426deccbe0b6aed06881f007ce4c458b556e5d901917eb4305bf1f2bf->enter($__internal_f275b12426deccbe0b6aed06881f007ce4c458b556e5d901917eb4305bf1f2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f275b12426deccbe0b6aed06881f007ce4c458b556e5d901917eb4305bf1f2bf->leave($__internal_f275b12426deccbe0b6aed06881f007ce4c458b556e5d901917eb4305bf1f2bf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d159565eb92e03f5e9d226e0bec23d2652cf8a7e23dec6b2f0bece859763cde = $this->env->getExtension("native_profiler");
        $__internal_0d159565eb92e03f5e9d226e0bec23d2652cf8a7e23dec6b2f0bece859763cde->enter($__internal_0d159565eb92e03f5e9d226e0bec23d2652cf8a7e23dec6b2f0bece859763cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_0d159565eb92e03f5e9d226e0bec23d2652cf8a7e23dec6b2f0bece859763cde->leave($__internal_0d159565eb92e03f5e9d226e0bec23d2652cf8a7e23dec6b2f0bece859763cde_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
