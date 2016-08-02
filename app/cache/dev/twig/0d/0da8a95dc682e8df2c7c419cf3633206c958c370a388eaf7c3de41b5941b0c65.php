<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_4247c59b124f4d845f7874aa225166cfcdcca9f459fc4fa0133cb041fd11b297 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_b7a673ad81a47302a55c71daaa1caf8b0ce1fa5fb2bb6ff0bba0e0a60bd748dc = $this->env->getExtension("native_profiler");
        $__internal_b7a673ad81a47302a55c71daaa1caf8b0ce1fa5fb2bb6ff0bba0e0a60bd748dc->enter($__internal_b7a673ad81a47302a55c71daaa1caf8b0ce1fa5fb2bb6ff0bba0e0a60bd748dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7a673ad81a47302a55c71daaa1caf8b0ce1fa5fb2bb6ff0bba0e0a60bd748dc->leave($__internal_b7a673ad81a47302a55c71daaa1caf8b0ce1fa5fb2bb6ff0bba0e0a60bd748dc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_146fd2bed6b60b4d91e9ac8b682b161497157ac2b665138962d1d51df2b52654 = $this->env->getExtension("native_profiler");
        $__internal_146fd2bed6b60b4d91e9ac8b682b161497157ac2b665138962d1d51df2b52654->enter($__internal_146fd2bed6b60b4d91e9ac8b682b161497157ac2b665138962d1d51df2b52654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_146fd2bed6b60b4d91e9ac8b682b161497157ac2b665138962d1d51df2b52654->leave($__internal_146fd2bed6b60b4d91e9ac8b682b161497157ac2b665138962d1d51df2b52654_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
