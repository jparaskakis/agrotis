<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_15e100306d938d745e282409783bc8492fd6dc5c4586740bf78470b658f5569a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_b14f84260f2d8ec777e96123e9853501fae3ff21ce776225d396f3be5216c481 = $this->env->getExtension("native_profiler");
        $__internal_b14f84260f2d8ec777e96123e9853501fae3ff21ce776225d396f3be5216c481->enter($__internal_b14f84260f2d8ec777e96123e9853501fae3ff21ce776225d396f3be5216c481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b14f84260f2d8ec777e96123e9853501fae3ff21ce776225d396f3be5216c481->leave($__internal_b14f84260f2d8ec777e96123e9853501fae3ff21ce776225d396f3be5216c481_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f6ac818fe1f9fcc57591fe3604b3f4bff8c86c553d388ffcef6026208aee3b27 = $this->env->getExtension("native_profiler");
        $__internal_f6ac818fe1f9fcc57591fe3604b3f4bff8c86c553d388ffcef6026208aee3b27->enter($__internal_f6ac818fe1f9fcc57591fe3604b3f4bff8c86c553d388ffcef6026208aee3b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_f6ac818fe1f9fcc57591fe3604b3f4bff8c86c553d388ffcef6026208aee3b27->leave($__internal_f6ac818fe1f9fcc57591fe3604b3f4bff8c86c553d388ffcef6026208aee3b27_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
