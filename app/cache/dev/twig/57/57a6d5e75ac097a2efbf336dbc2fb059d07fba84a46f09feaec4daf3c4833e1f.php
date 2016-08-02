<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_3c52d46a13f1e31bfdf653fd5a139b5041720360b66730ead2f712c49dc945cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_8245ba52318ca803f9487bc0f8e1fa17503088605ac5bceefd391493d355ffd6 = $this->env->getExtension("native_profiler");
        $__internal_8245ba52318ca803f9487bc0f8e1fa17503088605ac5bceefd391493d355ffd6->enter($__internal_8245ba52318ca803f9487bc0f8e1fa17503088605ac5bceefd391493d355ffd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8245ba52318ca803f9487bc0f8e1fa17503088605ac5bceefd391493d355ffd6->leave($__internal_8245ba52318ca803f9487bc0f8e1fa17503088605ac5bceefd391493d355ffd6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1d9d22ac7f2260400a5b550dd43d11341bcd4b9bc051fe875501ac711438b84a = $this->env->getExtension("native_profiler");
        $__internal_1d9d22ac7f2260400a5b550dd43d11341bcd4b9bc051fe875501ac711438b84a->enter($__internal_1d9d22ac7f2260400a5b550dd43d11341bcd4b9bc051fe875501ac711438b84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_1d9d22ac7f2260400a5b550dd43d11341bcd4b9bc051fe875501ac711438b84a->leave($__internal_1d9d22ac7f2260400a5b550dd43d11341bcd4b9bc051fe875501ac711438b84a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
