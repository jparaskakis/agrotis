<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_1120046a47ae0501441958ea083e944e4de297d3babd8713d78b302478549f4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_c22a9843526ea1f39902d11bf7d231ff9df3dce9cd50da9b77566788e4dcdd9c = $this->env->getExtension("native_profiler");
        $__internal_c22a9843526ea1f39902d11bf7d231ff9df3dce9cd50da9b77566788e4dcdd9c->enter($__internal_c22a9843526ea1f39902d11bf7d231ff9df3dce9cd50da9b77566788e4dcdd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c22a9843526ea1f39902d11bf7d231ff9df3dce9cd50da9b77566788e4dcdd9c->leave($__internal_c22a9843526ea1f39902d11bf7d231ff9df3dce9cd50da9b77566788e4dcdd9c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_55a2de849bf7ed4ac6be7c36569c4a614e92c0bc34ca8403f2d0d11df6fd3988 = $this->env->getExtension("native_profiler");
        $__internal_55a2de849bf7ed4ac6be7c36569c4a614e92c0bc34ca8403f2d0d11df6fd3988->enter($__internal_55a2de849bf7ed4ac6be7c36569c4a614e92c0bc34ca8403f2d0d11df6fd3988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_55a2de849bf7ed4ac6be7c36569c4a614e92c0bc34ca8403f2d0d11df6fd3988->leave($__internal_55a2de849bf7ed4ac6be7c36569c4a614e92c0bc34ca8403f2d0d11df6fd3988_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
