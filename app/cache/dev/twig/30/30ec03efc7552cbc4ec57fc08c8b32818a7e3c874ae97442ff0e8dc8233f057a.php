<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_c12cccf636b11d5a372fcd2a9eae3a0c51e2e34455bf64b7c12b8d77a6c7b3d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_6037acbd0b40ce97a56ce6d50c9eaf49a9a322935abe1647a666f8963523d34d = $this->env->getExtension("native_profiler");
        $__internal_6037acbd0b40ce97a56ce6d50c9eaf49a9a322935abe1647a666f8963523d34d->enter($__internal_6037acbd0b40ce97a56ce6d50c9eaf49a9a322935abe1647a666f8963523d34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6037acbd0b40ce97a56ce6d50c9eaf49a9a322935abe1647a666f8963523d34d->leave($__internal_6037acbd0b40ce97a56ce6d50c9eaf49a9a322935abe1647a666f8963523d34d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4a17747e93fa94f1482c083b9e87b468476895cddfbe64d7c0d6357d1c7c041 = $this->env->getExtension("native_profiler");
        $__internal_f4a17747e93fa94f1482c083b9e87b468476895cddfbe64d7c0d6357d1c7c041->enter($__internal_f4a17747e93fa94f1482c083b9e87b468476895cddfbe64d7c0d6357d1c7c041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_f4a17747e93fa94f1482c083b9e87b468476895cddfbe64d7c0d6357d1c7c041->leave($__internal_f4a17747e93fa94f1482c083b9e87b468476895cddfbe64d7c0d6357d1c7c041_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
