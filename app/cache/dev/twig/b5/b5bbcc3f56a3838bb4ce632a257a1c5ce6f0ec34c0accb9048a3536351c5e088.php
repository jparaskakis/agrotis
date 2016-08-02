<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_c8a78eeb312e5c1eeb60aca770a29c0d2cbb7180efab998e0cf5a179c00e73e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_c82fa3106073322ee7e78e156da94a536cf843faf636eab9254d6575fef4552b = $this->env->getExtension("native_profiler");
        $__internal_c82fa3106073322ee7e78e156da94a536cf843faf636eab9254d6575fef4552b->enter($__internal_c82fa3106073322ee7e78e156da94a536cf843faf636eab9254d6575fef4552b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c82fa3106073322ee7e78e156da94a536cf843faf636eab9254d6575fef4552b->leave($__internal_c82fa3106073322ee7e78e156da94a536cf843faf636eab9254d6575fef4552b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2cdc0863e4dca25f70b67eddc6c2e04f652a4725798802c0d1fd1a558c0b80a3 = $this->env->getExtension("native_profiler");
        $__internal_2cdc0863e4dca25f70b67eddc6c2e04f652a4725798802c0d1fd1a558c0b80a3->enter($__internal_2cdc0863e4dca25f70b67eddc6c2e04f652a4725798802c0d1fd1a558c0b80a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_2cdc0863e4dca25f70b67eddc6c2e04f652a4725798802c0d1fd1a558c0b80a3->leave($__internal_2cdc0863e4dca25f70b67eddc6c2e04f652a4725798802c0d1fd1a558c0b80a3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
