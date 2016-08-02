<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_d81478f401386387bded262018d9ab9982732bf462d95816ad6ff81b08a49fc0 extends Twig_Template
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
        $__internal_7000422273ddef6a571c0d1a2ee0d2e561462e3a18eda12a7f0d93663175ddcc = $this->env->getExtension("native_profiler");
        $__internal_7000422273ddef6a571c0d1a2ee0d2e561462e3a18eda12a7f0d93663175ddcc->enter($__internal_7000422273ddef6a571c0d1a2ee0d2e561462e3a18eda12a7f0d93663175ddcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7000422273ddef6a571c0d1a2ee0d2e561462e3a18eda12a7f0d93663175ddcc->leave($__internal_7000422273ddef6a571c0d1a2ee0d2e561462e3a18eda12a7f0d93663175ddcc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_09dff5b46d8deb582a9e689ae6ecc3f6e8c72c3c5ee393f71aa0af77824af94f = $this->env->getExtension("native_profiler");
        $__internal_09dff5b46d8deb582a9e689ae6ecc3f6e8c72c3c5ee393f71aa0af77824af94f->enter($__internal_09dff5b46d8deb582a9e689ae6ecc3f6e8c72c3c5ee393f71aa0af77824af94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_09dff5b46d8deb582a9e689ae6ecc3f6e8c72c3c5ee393f71aa0af77824af94f->leave($__internal_09dff5b46d8deb582a9e689ae6ecc3f6e8c72c3c5ee393f71aa0af77824af94f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_03d806c7acd86aa494b23458ae897d2a64fb9e75f96c5ba892956aa296965494 = $this->env->getExtension("native_profiler");
        $__internal_03d806c7acd86aa494b23458ae897d2a64fb9e75f96c5ba892956aa296965494->enter($__internal_03d806c7acd86aa494b23458ae897d2a64fb9e75f96c5ba892956aa296965494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_03d806c7acd86aa494b23458ae897d2a64fb9e75f96c5ba892956aa296965494->leave($__internal_03d806c7acd86aa494b23458ae897d2a64fb9e75f96c5ba892956aa296965494_prof);

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
