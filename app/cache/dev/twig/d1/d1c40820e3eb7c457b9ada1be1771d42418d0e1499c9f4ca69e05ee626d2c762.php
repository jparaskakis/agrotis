<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_568b8511e9231b579f5d286e2d29149eea5c0f5fec367ef4143f91a2e2592587 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_1a4932db09b38d2badfed9b721a608d75570c83a53d6e5815f6900ceca8b5c7d = $this->env->getExtension("native_profiler");
        $__internal_1a4932db09b38d2badfed9b721a608d75570c83a53d6e5815f6900ceca8b5c7d->enter($__internal_1a4932db09b38d2badfed9b721a608d75570c83a53d6e5815f6900ceca8b5c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a4932db09b38d2badfed9b721a608d75570c83a53d6e5815f6900ceca8b5c7d->leave($__internal_1a4932db09b38d2badfed9b721a608d75570c83a53d6e5815f6900ceca8b5c7d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e010fa4005dbef9f9224a03c52d38c33cf6bbe11e64c5d218827bdbfdaf3408 = $this->env->getExtension("native_profiler");
        $__internal_8e010fa4005dbef9f9224a03c52d38c33cf6bbe11e64c5d218827bdbfdaf3408->enter($__internal_8e010fa4005dbef9f9224a03c52d38c33cf6bbe11e64c5d218827bdbfdaf3408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_8e010fa4005dbef9f9224a03c52d38c33cf6bbe11e64c5d218827bdbfdaf3408->leave($__internal_8e010fa4005dbef9f9224a03c52d38c33cf6bbe11e64c5d218827bdbfdaf3408_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
