<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_ba190fd2bb0d8462722463a36889a8885d980ff8abd766c98c62724427797439 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_8ae57e238c737824e2b64eda93376604f410f52ae1a0f7a7a0572055d447dc9c = $this->env->getExtension("native_profiler");
        $__internal_8ae57e238c737824e2b64eda93376604f410f52ae1a0f7a7a0572055d447dc9c->enter($__internal_8ae57e238c737824e2b64eda93376604f410f52ae1a0f7a7a0572055d447dc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ae57e238c737824e2b64eda93376604f410f52ae1a0f7a7a0572055d447dc9c->leave($__internal_8ae57e238c737824e2b64eda93376604f410f52ae1a0f7a7a0572055d447dc9c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_787afd393a2fd5fa1208d4331c7763494dfb2e2f1d1829f19ed5c2c26902ea4c = $this->env->getExtension("native_profiler");
        $__internal_787afd393a2fd5fa1208d4331c7763494dfb2e2f1d1829f19ed5c2c26902ea4c->enter($__internal_787afd393a2fd5fa1208d4331c7763494dfb2e2f1d1829f19ed5c2c26902ea4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_787afd393a2fd5fa1208d4331c7763494dfb2e2f1d1829f19ed5c2c26902ea4c->leave($__internal_787afd393a2fd5fa1208d4331c7763494dfb2e2f1d1829f19ed5c2c26902ea4c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
