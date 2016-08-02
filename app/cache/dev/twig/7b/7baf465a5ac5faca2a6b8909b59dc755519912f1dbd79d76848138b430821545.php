<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_acb64db354151c3a0c073be0e5fe745365f00651438956460b9a2db05a7bcff0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_6bcbdf6ede7cb62c26a902b5419174186e4af6ebcd94fd49a4dac9f9c9b04c6b = $this->env->getExtension("native_profiler");
        $__internal_6bcbdf6ede7cb62c26a902b5419174186e4af6ebcd94fd49a4dac9f9c9b04c6b->enter($__internal_6bcbdf6ede7cb62c26a902b5419174186e4af6ebcd94fd49a4dac9f9c9b04c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bcbdf6ede7cb62c26a902b5419174186e4af6ebcd94fd49a4dac9f9c9b04c6b->leave($__internal_6bcbdf6ede7cb62c26a902b5419174186e4af6ebcd94fd49a4dac9f9c9b04c6b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_19cb6bd8dbd982eb50255d0a441625351dbb649e09a9bc0347ab63985862d680 = $this->env->getExtension("native_profiler");
        $__internal_19cb6bd8dbd982eb50255d0a441625351dbb649e09a9bc0347ab63985862d680->enter($__internal_19cb6bd8dbd982eb50255d0a441625351dbb649e09a9bc0347ab63985862d680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_19cb6bd8dbd982eb50255d0a441625351dbb649e09a9bc0347ab63985862d680->leave($__internal_19cb6bd8dbd982eb50255d0a441625351dbb649e09a9bc0347ab63985862d680_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_445c1a5ea3e9a3560b78d8418777a0a44a63f356a02f8370eacbecc59043d14a = $this->env->getExtension("native_profiler");
        $__internal_445c1a5ea3e9a3560b78d8418777a0a44a63f356a02f8370eacbecc59043d14a->enter($__internal_445c1a5ea3e9a3560b78d8418777a0a44a63f356a02f8370eacbecc59043d14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_445c1a5ea3e9a3560b78d8418777a0a44a63f356a02f8370eacbecc59043d14a->leave($__internal_445c1a5ea3e9a3560b78d8418777a0a44a63f356a02f8370eacbecc59043d14a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
