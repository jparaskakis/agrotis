<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_31a898d43201cf800fd72c75c42de4ffa2727b446ae88c6b07a526c6e307a1ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_c8ee0861cf8c144739f7c05760aa5612465643bb9a131c85430940034ae254c8 = $this->env->getExtension("native_profiler");
        $__internal_c8ee0861cf8c144739f7c05760aa5612465643bb9a131c85430940034ae254c8->enter($__internal_c8ee0861cf8c144739f7c05760aa5612465643bb9a131c85430940034ae254c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8ee0861cf8c144739f7c05760aa5612465643bb9a131c85430940034ae254c8->leave($__internal_c8ee0861cf8c144739f7c05760aa5612465643bb9a131c85430940034ae254c8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa89f890756f28b3b597d0d2686f336b24edbae9c4ba8a84008da884c540eb2d = $this->env->getExtension("native_profiler");
        $__internal_fa89f890756f28b3b597d0d2686f336b24edbae9c4ba8a84008da884c540eb2d->enter($__internal_fa89f890756f28b3b597d0d2686f336b24edbae9c4ba8a84008da884c540eb2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_fa89f890756f28b3b597d0d2686f336b24edbae9c4ba8a84008da884c540eb2d->leave($__internal_fa89f890756f28b3b597d0d2686f336b24edbae9c4ba8a84008da884c540eb2d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
