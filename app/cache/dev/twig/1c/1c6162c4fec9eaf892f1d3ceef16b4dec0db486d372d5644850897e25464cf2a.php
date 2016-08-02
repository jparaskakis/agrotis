<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_cecafa73d4ae350f21dad8653d87a2973e111fbb57d7ee3b8bc1829929d896c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_641a811be67c25815cbafcac2588b82463b7d30920b317fec8c24f35f5e38db6 = $this->env->getExtension("native_profiler");
        $__internal_641a811be67c25815cbafcac2588b82463b7d30920b317fec8c24f35f5e38db6->enter($__internal_641a811be67c25815cbafcac2588b82463b7d30920b317fec8c24f35f5e38db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_641a811be67c25815cbafcac2588b82463b7d30920b317fec8c24f35f5e38db6->leave($__internal_641a811be67c25815cbafcac2588b82463b7d30920b317fec8c24f35f5e38db6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f28f2f36bfbcafe3419b871b384e0fe3316d48cc9e05110a85279303e168fb5 = $this->env->getExtension("native_profiler");
        $__internal_3f28f2f36bfbcafe3419b871b384e0fe3316d48cc9e05110a85279303e168fb5->enter($__internal_3f28f2f36bfbcafe3419b871b384e0fe3316d48cc9e05110a85279303e168fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_3f28f2f36bfbcafe3419b871b384e0fe3316d48cc9e05110a85279303e168fb5->leave($__internal_3f28f2f36bfbcafe3419b871b384e0fe3316d48cc9e05110a85279303e168fb5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
