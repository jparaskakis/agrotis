<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_b95c07ec4188352b33deb66a0c6eaf4aefde1f5d3e2fe799c70b94931fa91f2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_a8b06353024617c47e84857e6a8cb3dfc2bd527f8164172008d755a107434e36 = $this->env->getExtension("native_profiler");
        $__internal_a8b06353024617c47e84857e6a8cb3dfc2bd527f8164172008d755a107434e36->enter($__internal_a8b06353024617c47e84857e6a8cb3dfc2bd527f8164172008d755a107434e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8b06353024617c47e84857e6a8cb3dfc2bd527f8164172008d755a107434e36->leave($__internal_a8b06353024617c47e84857e6a8cb3dfc2bd527f8164172008d755a107434e36_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_517c7dd6d10adb4682fc32d32531104da46226fd003428891c8a19495c357420 = $this->env->getExtension("native_profiler");
        $__internal_517c7dd6d10adb4682fc32d32531104da46226fd003428891c8a19495c357420->enter($__internal_517c7dd6d10adb4682fc32d32531104da46226fd003428891c8a19495c357420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_517c7dd6d10adb4682fc32d32531104da46226fd003428891c8a19495c357420->leave($__internal_517c7dd6d10adb4682fc32d32531104da46226fd003428891c8a19495c357420_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
