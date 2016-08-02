<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_37bc80690d6594298e0e08263565843cddf38a43ad5d85737c70cc4e48073abc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_6905d05b309176e49bdce5eb45ad90d5a116ac54a5248297f39af6985dca868d = $this->env->getExtension("native_profiler");
        $__internal_6905d05b309176e49bdce5eb45ad90d5a116ac54a5248297f39af6985dca868d->enter($__internal_6905d05b309176e49bdce5eb45ad90d5a116ac54a5248297f39af6985dca868d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6905d05b309176e49bdce5eb45ad90d5a116ac54a5248297f39af6985dca868d->leave($__internal_6905d05b309176e49bdce5eb45ad90d5a116ac54a5248297f39af6985dca868d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0b9138750332a56c6819ffda6e90fbbffaacbe71dd1c1893c1c8948700c0dd3e = $this->env->getExtension("native_profiler");
        $__internal_0b9138750332a56c6819ffda6e90fbbffaacbe71dd1c1893c1c8948700c0dd3e->enter($__internal_0b9138750332a56c6819ffda6e90fbbffaacbe71dd1c1893c1c8948700c0dd3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_0b9138750332a56c6819ffda6e90fbbffaacbe71dd1c1893c1c8948700c0dd3e->leave($__internal_0b9138750332a56c6819ffda6e90fbbffaacbe71dd1c1893c1c8948700c0dd3e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
