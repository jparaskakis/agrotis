<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_b3d6bfa986933aec6fa0cf7fa930b90f8a85903fde699d39e73b7755ea62055b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_e99ce8eafdfd67a0c738bf51ff4605e4e1f41d4542300e567858ad07891cec8c = $this->env->getExtension("native_profiler");
        $__internal_e99ce8eafdfd67a0c738bf51ff4605e4e1f41d4542300e567858ad07891cec8c->enter($__internal_e99ce8eafdfd67a0c738bf51ff4605e4e1f41d4542300e567858ad07891cec8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e99ce8eafdfd67a0c738bf51ff4605e4e1f41d4542300e567858ad07891cec8c->leave($__internal_e99ce8eafdfd67a0c738bf51ff4605e4e1f41d4542300e567858ad07891cec8c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_65e6cc31856685488108261000a2b9cdff6d239671dc2e2f00dac9f544fb6073 = $this->env->getExtension("native_profiler");
        $__internal_65e6cc31856685488108261000a2b9cdff6d239671dc2e2f00dac9f544fb6073->enter($__internal_65e6cc31856685488108261000a2b9cdff6d239671dc2e2f00dac9f544fb6073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_65e6cc31856685488108261000a2b9cdff6d239671dc2e2f00dac9f544fb6073->leave($__internal_65e6cc31856685488108261000a2b9cdff6d239671dc2e2f00dac9f544fb6073_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
