<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_1433a71b4138b79893755ee2a9adbe4961bbfee501d7e6f744df40ed140e95a3 extends Twig_Template
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
        $__internal_9884a84eef2214428f3d7941ea2d7840e803fb12d001fba147863b2f2238f35e = $this->env->getExtension("native_profiler");
        $__internal_9884a84eef2214428f3d7941ea2d7840e803fb12d001fba147863b2f2238f35e->enter($__internal_9884a84eef2214428f3d7941ea2d7840e803fb12d001fba147863b2f2238f35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9884a84eef2214428f3d7941ea2d7840e803fb12d001fba147863b2f2238f35e->leave($__internal_9884a84eef2214428f3d7941ea2d7840e803fb12d001fba147863b2f2238f35e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ded39e881e9db5b6649e11243bb67540d11e9d1b2d4943d6699ae88dac7d4601 = $this->env->getExtension("native_profiler");
        $__internal_ded39e881e9db5b6649e11243bb67540d11e9d1b2d4943d6699ae88dac7d4601->enter($__internal_ded39e881e9db5b6649e11243bb67540d11e9d1b2d4943d6699ae88dac7d4601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_ded39e881e9db5b6649e11243bb67540d11e9d1b2d4943d6699ae88dac7d4601->leave($__internal_ded39e881e9db5b6649e11243bb67540d11e9d1b2d4943d6699ae88dac7d4601_prof);

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
