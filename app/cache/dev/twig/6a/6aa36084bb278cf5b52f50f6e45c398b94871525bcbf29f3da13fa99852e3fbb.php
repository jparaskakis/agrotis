<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_8991d6dcfc887ae0b4a5bade7e615f48e6eeebca44ed6ee288a5f36ba0765e92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_1a632ffc81ea2abfc46da48d19671951669f8ad26a114c8ffe98f22a79a8b9ca = $this->env->getExtension("native_profiler");
        $__internal_1a632ffc81ea2abfc46da48d19671951669f8ad26a114c8ffe98f22a79a8b9ca->enter($__internal_1a632ffc81ea2abfc46da48d19671951669f8ad26a114c8ffe98f22a79a8b9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a632ffc81ea2abfc46da48d19671951669f8ad26a114c8ffe98f22a79a8b9ca->leave($__internal_1a632ffc81ea2abfc46da48d19671951669f8ad26a114c8ffe98f22a79a8b9ca_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_00afd4f71d2aaa72da800651c0c1851386d54a2ccbb817c2c46fb4123641ee6b = $this->env->getExtension("native_profiler");
        $__internal_00afd4f71d2aaa72da800651c0c1851386d54a2ccbb817c2c46fb4123641ee6b->enter($__internal_00afd4f71d2aaa72da800651c0c1851386d54a2ccbb817c2c46fb4123641ee6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_00afd4f71d2aaa72da800651c0c1851386d54a2ccbb817c2c46fb4123641ee6b->leave($__internal_00afd4f71d2aaa72da800651c0c1851386d54a2ccbb817c2c46fb4123641ee6b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
