<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_6d707722167aae8e3e448ea83048a6ced95ddd474a56835fceb5c5ef4da53d60 extends Twig_Template
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
        $__internal_13bef64d8933a93a4bc6087b7ee65b69f878a98142a0288f14071fb04e8445a2 = $this->env->getExtension("native_profiler");
        $__internal_13bef64d8933a93a4bc6087b7ee65b69f878a98142a0288f14071fb04e8445a2->enter($__internal_13bef64d8933a93a4bc6087b7ee65b69f878a98142a0288f14071fb04e8445a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13bef64d8933a93a4bc6087b7ee65b69f878a98142a0288f14071fb04e8445a2->leave($__internal_13bef64d8933a93a4bc6087b7ee65b69f878a98142a0288f14071fb04e8445a2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_38bbda664e93eebb2015427a976e0fd5f7af215538807b5c2c1250f5b4a960b2 = $this->env->getExtension("native_profiler");
        $__internal_38bbda664e93eebb2015427a976e0fd5f7af215538807b5c2c1250f5b4a960b2->enter($__internal_38bbda664e93eebb2015427a976e0fd5f7af215538807b5c2c1250f5b4a960b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_38bbda664e93eebb2015427a976e0fd5f7af215538807b5c2c1250f5b4a960b2->leave($__internal_38bbda664e93eebb2015427a976e0fd5f7af215538807b5c2c1250f5b4a960b2_prof);

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
