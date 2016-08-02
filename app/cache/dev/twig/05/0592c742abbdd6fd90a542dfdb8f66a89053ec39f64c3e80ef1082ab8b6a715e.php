<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_7231a0cf4c64314fd945459f56b676c14c39872e3637da499b55db4f2adb6242 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_11a2f720854c2e6e9c2bb20d5c214c9480c41d52394203e9d2c922c388c92018 = $this->env->getExtension("native_profiler");
        $__internal_11a2f720854c2e6e9c2bb20d5c214c9480c41d52394203e9d2c922c388c92018->enter($__internal_11a2f720854c2e6e9c2bb20d5c214c9480c41d52394203e9d2c922c388c92018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11a2f720854c2e6e9c2bb20d5c214c9480c41d52394203e9d2c922c388c92018->leave($__internal_11a2f720854c2e6e9c2bb20d5c214c9480c41d52394203e9d2c922c388c92018_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a7c4c21b840e00ccd90830dcea139cd8f771682863d0d45eaa826cbd6ada4799 = $this->env->getExtension("native_profiler");
        $__internal_a7c4c21b840e00ccd90830dcea139cd8f771682863d0d45eaa826cbd6ada4799->enter($__internal_a7c4c21b840e00ccd90830dcea139cd8f771682863d0d45eaa826cbd6ada4799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_a7c4c21b840e00ccd90830dcea139cd8f771682863d0d45eaa826cbd6ada4799->leave($__internal_a7c4c21b840e00ccd90830dcea139cd8f771682863d0d45eaa826cbd6ada4799_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
