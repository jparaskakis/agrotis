<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_dd01fc1d9bc4320b843432268d12362e70e391ff36304645147575b43aa1c12f extends Twig_Template
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
        $__internal_8f7fd5a860147c37e09b21da1e36df59b99a434ed5265b3f2fde38c0ae9d5799 = $this->env->getExtension("native_profiler");
        $__internal_8f7fd5a860147c37e09b21da1e36df59b99a434ed5265b3f2fde38c0ae9d5799->enter($__internal_8f7fd5a860147c37e09b21da1e36df59b99a434ed5265b3f2fde38c0ae9d5799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f7fd5a860147c37e09b21da1e36df59b99a434ed5265b3f2fde38c0ae9d5799->leave($__internal_8f7fd5a860147c37e09b21da1e36df59b99a434ed5265b3f2fde38c0ae9d5799_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_35bbe9021d0d74cb9944602bbc9e0cc1a7a6171db07505d5a3f0e414c5a84e84 = $this->env->getExtension("native_profiler");
        $__internal_35bbe9021d0d74cb9944602bbc9e0cc1a7a6171db07505d5a3f0e414c5a84e84->enter($__internal_35bbe9021d0d74cb9944602bbc9e0cc1a7a6171db07505d5a3f0e414c5a84e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_35bbe9021d0d74cb9944602bbc9e0cc1a7a6171db07505d5a3f0e414c5a84e84->leave($__internal_35bbe9021d0d74cb9944602bbc9e0cc1a7a6171db07505d5a3f0e414c5a84e84_prof);

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
