<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_d835fd2a91016442299bfb9d76bc3219239f82ccb0dbdf72dcd3a18130b850f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_9ecc0282c1fa185cedd7e7e6431a477abc5647173722c84a5f4b5929feadbb3c = $this->env->getExtension("native_profiler");
        $__internal_9ecc0282c1fa185cedd7e7e6431a477abc5647173722c84a5f4b5929feadbb3c->enter($__internal_9ecc0282c1fa185cedd7e7e6431a477abc5647173722c84a5f4b5929feadbb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ecc0282c1fa185cedd7e7e6431a477abc5647173722c84a5f4b5929feadbb3c->leave($__internal_9ecc0282c1fa185cedd7e7e6431a477abc5647173722c84a5f4b5929feadbb3c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bcee36750891872606b8dd992af131cb9a0a3ee71ad1b5ad16b84cd4570f5889 = $this->env->getExtension("native_profiler");
        $__internal_bcee36750891872606b8dd992af131cb9a0a3ee71ad1b5ad16b84cd4570f5889->enter($__internal_bcee36750891872606b8dd992af131cb9a0a3ee71ad1b5ad16b84cd4570f5889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_bcee36750891872606b8dd992af131cb9a0a3ee71ad1b5ad16b84cd4570f5889->leave($__internal_bcee36750891872606b8dd992af131cb9a0a3ee71ad1b5ad16b84cd4570f5889_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
