<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_6c29b8d27c88da57a9b664c5f112c3ab531983b5eff5fedc41d1e1349f161231 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_876577a52c81fbb4b2ee1d1a62688bca371abea8a1da3420795e4aaa82c19a62 = $this->env->getExtension("native_profiler");
        $__internal_876577a52c81fbb4b2ee1d1a62688bca371abea8a1da3420795e4aaa82c19a62->enter($__internal_876577a52c81fbb4b2ee1d1a62688bca371abea8a1da3420795e4aaa82c19a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_876577a52c81fbb4b2ee1d1a62688bca371abea8a1da3420795e4aaa82c19a62->leave($__internal_876577a52c81fbb4b2ee1d1a62688bca371abea8a1da3420795e4aaa82c19a62_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1182ead385cfa6174971f2f514d0d6ec46e37ee9fb7c4cd5078263377b5d6839 = $this->env->getExtension("native_profiler");
        $__internal_1182ead385cfa6174971f2f514d0d6ec46e37ee9fb7c4cd5078263377b5d6839->enter($__internal_1182ead385cfa6174971f2f514d0d6ec46e37ee9fb7c4cd5078263377b5d6839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_1182ead385cfa6174971f2f514d0d6ec46e37ee9fb7c4cd5078263377b5d6839->leave($__internal_1182ead385cfa6174971f2f514d0d6ec46e37ee9fb7c4cd5078263377b5d6839_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
