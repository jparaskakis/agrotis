<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_d9a49ecac2176507ba09711c0c38f532e23f8bffadc87460e6514d50d621a034 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_5ac74d2282e731280b04f5e40a0d670eaed3dea78dd0db640e7be05f40ae2d08 = $this->env->getExtension("native_profiler");
        $__internal_5ac74d2282e731280b04f5e40a0d670eaed3dea78dd0db640e7be05f40ae2d08->enter($__internal_5ac74d2282e731280b04f5e40a0d670eaed3dea78dd0db640e7be05f40ae2d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ac74d2282e731280b04f5e40a0d670eaed3dea78dd0db640e7be05f40ae2d08->leave($__internal_5ac74d2282e731280b04f5e40a0d670eaed3dea78dd0db640e7be05f40ae2d08_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c78c9718cefc64f5bed34e72e9e3393ff8e278e44213637b9e93350750cbd16c = $this->env->getExtension("native_profiler");
        $__internal_c78c9718cefc64f5bed34e72e9e3393ff8e278e44213637b9e93350750cbd16c->enter($__internal_c78c9718cefc64f5bed34e72e9e3393ff8e278e44213637b9e93350750cbd16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_c78c9718cefc64f5bed34e72e9e3393ff8e278e44213637b9e93350750cbd16c->leave($__internal_c78c9718cefc64f5bed34e72e9e3393ff8e278e44213637b9e93350750cbd16c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
