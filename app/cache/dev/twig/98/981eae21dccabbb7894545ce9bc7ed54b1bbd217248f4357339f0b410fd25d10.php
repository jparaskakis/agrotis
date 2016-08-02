<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_fb3e4ed59b535bd2fed909e4ef9f45605672a0536fdf7ef7998bda5d45162227 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_8d2c75e02916888416366c2ef78f8c0e20072817c5361328157a45549f252f76 = $this->env->getExtension("native_profiler");
        $__internal_8d2c75e02916888416366c2ef78f8c0e20072817c5361328157a45549f252f76->enter($__internal_8d2c75e02916888416366c2ef78f8c0e20072817c5361328157a45549f252f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d2c75e02916888416366c2ef78f8c0e20072817c5361328157a45549f252f76->leave($__internal_8d2c75e02916888416366c2ef78f8c0e20072817c5361328157a45549f252f76_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_af798c47c2e668d23528136f5cff2552e635f6cd474a9df0ccd52bbb8b14d75f = $this->env->getExtension("native_profiler");
        $__internal_af798c47c2e668d23528136f5cff2552e635f6cd474a9df0ccd52bbb8b14d75f->enter($__internal_af798c47c2e668d23528136f5cff2552e635f6cd474a9df0ccd52bbb8b14d75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_af798c47c2e668d23528136f5cff2552e635f6cd474a9df0ccd52bbb8b14d75f->leave($__internal_af798c47c2e668d23528136f5cff2552e635f6cd474a9df0ccd52bbb8b14d75f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
