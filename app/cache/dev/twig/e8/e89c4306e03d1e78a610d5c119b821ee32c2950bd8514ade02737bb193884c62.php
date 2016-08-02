<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_006c745133b05e465bf2170273cfd2e5775168c9258858685b5606239d194636 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_4f2f07cb48b58426a9fa485d7b29f92f992fa24516a49faff0361e5149957148 = $this->env->getExtension("native_profiler");
        $__internal_4f2f07cb48b58426a9fa485d7b29f92f992fa24516a49faff0361e5149957148->enter($__internal_4f2f07cb48b58426a9fa485d7b29f92f992fa24516a49faff0361e5149957148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f2f07cb48b58426a9fa485d7b29f92f992fa24516a49faff0361e5149957148->leave($__internal_4f2f07cb48b58426a9fa485d7b29f92f992fa24516a49faff0361e5149957148_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c842534dc0ab0dc7d423a9b5bdd720553ed4329a3677b5289d750509d4080f9 = $this->env->getExtension("native_profiler");
        $__internal_9c842534dc0ab0dc7d423a9b5bdd720553ed4329a3677b5289d750509d4080f9->enter($__internal_9c842534dc0ab0dc7d423a9b5bdd720553ed4329a3677b5289d750509d4080f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_9c842534dc0ab0dc7d423a9b5bdd720553ed4329a3677b5289d750509d4080f9->leave($__internal_9c842534dc0ab0dc7d423a9b5bdd720553ed4329a3677b5289d750509d4080f9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
