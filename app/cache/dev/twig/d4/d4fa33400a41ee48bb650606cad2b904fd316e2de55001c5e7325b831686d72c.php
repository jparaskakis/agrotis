<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_0acb92c503e8e6abd65bd6cefed9f32d6773e032d69bcdaa5f552695a7ecfe51 extends Twig_Template
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
        $__internal_76f517ced19c200ef03ee961d8bf3259b7b6322c2ff04e5b7ba6fd612920e5b9 = $this->env->getExtension("native_profiler");
        $__internal_76f517ced19c200ef03ee961d8bf3259b7b6322c2ff04e5b7ba6fd612920e5b9->enter($__internal_76f517ced19c200ef03ee961d8bf3259b7b6322c2ff04e5b7ba6fd612920e5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76f517ced19c200ef03ee961d8bf3259b7b6322c2ff04e5b7ba6fd612920e5b9->leave($__internal_76f517ced19c200ef03ee961d8bf3259b7b6322c2ff04e5b7ba6fd612920e5b9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_27fef8987d6ba286569403a2cdc819da0b92659db4780ca0af04701ad51d4e23 = $this->env->getExtension("native_profiler");
        $__internal_27fef8987d6ba286569403a2cdc819da0b92659db4780ca0af04701ad51d4e23->enter($__internal_27fef8987d6ba286569403a2cdc819da0b92659db4780ca0af04701ad51d4e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_27fef8987d6ba286569403a2cdc819da0b92659db4780ca0af04701ad51d4e23->leave($__internal_27fef8987d6ba286569403a2cdc819da0b92659db4780ca0af04701ad51d4e23_prof);

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
