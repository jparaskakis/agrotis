<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_6236f31f6db10c8f5da579b4ee3df1cc1d9a4413b0d6f2c58467857021554e6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_b6ef7eac0e9f1cf3179d23b7186a060c06c1da6988d48f22c22e18b0d68d37f3 = $this->env->getExtension("native_profiler");
        $__internal_b6ef7eac0e9f1cf3179d23b7186a060c06c1da6988d48f22c22e18b0d68d37f3->enter($__internal_b6ef7eac0e9f1cf3179d23b7186a060c06c1da6988d48f22c22e18b0d68d37f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6ef7eac0e9f1cf3179d23b7186a060c06c1da6988d48f22c22e18b0d68d37f3->leave($__internal_b6ef7eac0e9f1cf3179d23b7186a060c06c1da6988d48f22c22e18b0d68d37f3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c789c177528ace7007ea02ef1d06314cded63f4c1c855cb59c5cdb6decd64356 = $this->env->getExtension("native_profiler");
        $__internal_c789c177528ace7007ea02ef1d06314cded63f4c1c855cb59c5cdb6decd64356->enter($__internal_c789c177528ace7007ea02ef1d06314cded63f4c1c855cb59c5cdb6decd64356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_c789c177528ace7007ea02ef1d06314cded63f4c1c855cb59c5cdb6decd64356->leave($__internal_c789c177528ace7007ea02ef1d06314cded63f4c1c855cb59c5cdb6decd64356_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
