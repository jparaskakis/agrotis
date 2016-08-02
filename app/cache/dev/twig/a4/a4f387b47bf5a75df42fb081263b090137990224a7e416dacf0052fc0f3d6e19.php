<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_5450592194bfa5cc2ef5f08dc9ec02cf84c5ec24a6d43cf9a1d252dbcf9197ae extends Twig_Template
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
        $__internal_9e3729e61adcf6672ef7ff60a067f7c7f357790fa1b565836431e3e34e2b618f = $this->env->getExtension("native_profiler");
        $__internal_9e3729e61adcf6672ef7ff60a067f7c7f357790fa1b565836431e3e34e2b618f->enter($__internal_9e3729e61adcf6672ef7ff60a067f7c7f357790fa1b565836431e3e34e2b618f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e3729e61adcf6672ef7ff60a067f7c7f357790fa1b565836431e3e34e2b618f->leave($__internal_9e3729e61adcf6672ef7ff60a067f7c7f357790fa1b565836431e3e34e2b618f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c45550e9f26f7d3bf68ce4fb2fd41eebc3cc2a0369d1be421feee41e6d354703 = $this->env->getExtension("native_profiler");
        $__internal_c45550e9f26f7d3bf68ce4fb2fd41eebc3cc2a0369d1be421feee41e6d354703->enter($__internal_c45550e9f26f7d3bf68ce4fb2fd41eebc3cc2a0369d1be421feee41e6d354703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c45550e9f26f7d3bf68ce4fb2fd41eebc3cc2a0369d1be421feee41e6d354703->leave($__internal_c45550e9f26f7d3bf68ce4fb2fd41eebc3cc2a0369d1be421feee41e6d354703_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_acc17e1a078df9df12c237632eeaec3ccb8731ef5d2ba5e27d998296f3dbde40 = $this->env->getExtension("native_profiler");
        $__internal_acc17e1a078df9df12c237632eeaec3ccb8731ef5d2ba5e27d998296f3dbde40->enter($__internal_acc17e1a078df9df12c237632eeaec3ccb8731ef5d2ba5e27d998296f3dbde40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_acc17e1a078df9df12c237632eeaec3ccb8731ef5d2ba5e27d998296f3dbde40->leave($__internal_acc17e1a078df9df12c237632eeaec3ccb8731ef5d2ba5e27d998296f3dbde40_prof);

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
