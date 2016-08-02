<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_6fec93a3fb5a9fbb6a53261557e3ded58286b770cb26a3b4b98e8f0dff11096b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_b523fc7b77df1606c4cf63239087f80c824429d7a94136213f1fd3c4e8d29b71 = $this->env->getExtension("native_profiler");
        $__internal_b523fc7b77df1606c4cf63239087f80c824429d7a94136213f1fd3c4e8d29b71->enter($__internal_b523fc7b77df1606c4cf63239087f80c824429d7a94136213f1fd3c4e8d29b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b523fc7b77df1606c4cf63239087f80c824429d7a94136213f1fd3c4e8d29b71->leave($__internal_b523fc7b77df1606c4cf63239087f80c824429d7a94136213f1fd3c4e8d29b71_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_74a107062e12adb029911383c1ef69a39a2915a97749dbfcb01025b70dc13f29 = $this->env->getExtension("native_profiler");
        $__internal_74a107062e12adb029911383c1ef69a39a2915a97749dbfcb01025b70dc13f29->enter($__internal_74a107062e12adb029911383c1ef69a39a2915a97749dbfcb01025b70dc13f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_74a107062e12adb029911383c1ef69a39a2915a97749dbfcb01025b70dc13f29->leave($__internal_74a107062e12adb029911383c1ef69a39a2915a97749dbfcb01025b70dc13f29_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
