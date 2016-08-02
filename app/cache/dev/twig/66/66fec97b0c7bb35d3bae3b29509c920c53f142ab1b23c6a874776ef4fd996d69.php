<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_87bcc004f15506ff13cb9f3c8661679f06f568d11ec2a378ae9494b046d6f55f extends Twig_Template
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
        $__internal_2f1316d168ee82070517157b7511412bdf21ac685180719387ab3c86a2c63a04 = $this->env->getExtension("native_profiler");
        $__internal_2f1316d168ee82070517157b7511412bdf21ac685180719387ab3c86a2c63a04->enter($__internal_2f1316d168ee82070517157b7511412bdf21ac685180719387ab3c86a2c63a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2f1316d168ee82070517157b7511412bdf21ac685180719387ab3c86a2c63a04->leave($__internal_2f1316d168ee82070517157b7511412bdf21ac685180719387ab3c86a2c63a04_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
