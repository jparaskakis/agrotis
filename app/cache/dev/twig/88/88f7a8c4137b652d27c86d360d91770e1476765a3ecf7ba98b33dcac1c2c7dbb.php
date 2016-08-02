<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_5903c7b23cb605839d69e04c0d882f04810e5a3e2ed5ef4f281c2e5838cb0f9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_ffe70edad1eb033100c0e12eb63ded4053107de17fc1e6b419b52445fda47551 = $this->env->getExtension("native_profiler");
        $__internal_ffe70edad1eb033100c0e12eb63ded4053107de17fc1e6b419b52445fda47551->enter($__internal_ffe70edad1eb033100c0e12eb63ded4053107de17fc1e6b419b52445fda47551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffe70edad1eb033100c0e12eb63ded4053107de17fc1e6b419b52445fda47551->leave($__internal_ffe70edad1eb033100c0e12eb63ded4053107de17fc1e6b419b52445fda47551_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_87f18ce2563907812d41aa4537140356e96eedbfe0447bc729ac0e01f43028be = $this->env->getExtension("native_profiler");
        $__internal_87f18ce2563907812d41aa4537140356e96eedbfe0447bc729ac0e01f43028be->enter($__internal_87f18ce2563907812d41aa4537140356e96eedbfe0447bc729ac0e01f43028be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_87f18ce2563907812d41aa4537140356e96eedbfe0447bc729ac0e01f43028be->leave($__internal_87f18ce2563907812d41aa4537140356e96eedbfe0447bc729ac0e01f43028be_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
