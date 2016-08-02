<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_213039d6f4e9a4847eb18ae1b19819e788d69b26968dead11d65f85c4ffe4d9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_592700c7c6030cb98681a09c8b9fdc810dd4bbc431468b3e9158fbcdfe408a7f = $this->env->getExtension("native_profiler");
        $__internal_592700c7c6030cb98681a09c8b9fdc810dd4bbc431468b3e9158fbcdfe408a7f->enter($__internal_592700c7c6030cb98681a09c8b9fdc810dd4bbc431468b3e9158fbcdfe408a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_592700c7c6030cb98681a09c8b9fdc810dd4bbc431468b3e9158fbcdfe408a7f->leave($__internal_592700c7c6030cb98681a09c8b9fdc810dd4bbc431468b3e9158fbcdfe408a7f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_023bb29e098e0781e097906ac14c98822e60266801762e880a137d7b587fce96 = $this->env->getExtension("native_profiler");
        $__internal_023bb29e098e0781e097906ac14c98822e60266801762e880a137d7b587fce96->enter($__internal_023bb29e098e0781e097906ac14c98822e60266801762e880a137d7b587fce96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_023bb29e098e0781e097906ac14c98822e60266801762e880a137d7b587fce96->leave($__internal_023bb29e098e0781e097906ac14c98822e60266801762e880a137d7b587fce96_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
