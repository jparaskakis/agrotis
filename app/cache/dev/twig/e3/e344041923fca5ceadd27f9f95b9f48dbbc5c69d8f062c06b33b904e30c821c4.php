<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_b434c804587aed2277b43e2e9c30bec61afe0ceb54f0f792b81b2bb353a3954f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_eb2f9ea9208145c5a5af90dfc6b04d21a377df18bfe611374f6998a81c4b0f23 = $this->env->getExtension("native_profiler");
        $__internal_eb2f9ea9208145c5a5af90dfc6b04d21a377df18bfe611374f6998a81c4b0f23->enter($__internal_eb2f9ea9208145c5a5af90dfc6b04d21a377df18bfe611374f6998a81c4b0f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb2f9ea9208145c5a5af90dfc6b04d21a377df18bfe611374f6998a81c4b0f23->leave($__internal_eb2f9ea9208145c5a5af90dfc6b04d21a377df18bfe611374f6998a81c4b0f23_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_af85982c07f255ea9fe807c2b15bfe290963c72b679c01930960453fa40c9ab3 = $this->env->getExtension("native_profiler");
        $__internal_af85982c07f255ea9fe807c2b15bfe290963c72b679c01930960453fa40c9ab3->enter($__internal_af85982c07f255ea9fe807c2b15bfe290963c72b679c01930960453fa40c9ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_af85982c07f255ea9fe807c2b15bfe290963c72b679c01930960453fa40c9ab3->leave($__internal_af85982c07f255ea9fe807c2b15bfe290963c72b679c01930960453fa40c9ab3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
