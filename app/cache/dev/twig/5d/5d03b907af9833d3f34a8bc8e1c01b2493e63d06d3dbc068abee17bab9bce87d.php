<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_c749e3478ee167f55d261ad7606482a24f2a14e9e42faded1f119532776398df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_6e1be83dc2e52018431e1cb685e19ceb706ab69b88dad21f30e35eb59d9946e8 = $this->env->getExtension("native_profiler");
        $__internal_6e1be83dc2e52018431e1cb685e19ceb706ab69b88dad21f30e35eb59d9946e8->enter($__internal_6e1be83dc2e52018431e1cb685e19ceb706ab69b88dad21f30e35eb59d9946e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e1be83dc2e52018431e1cb685e19ceb706ab69b88dad21f30e35eb59d9946e8->leave($__internal_6e1be83dc2e52018431e1cb685e19ceb706ab69b88dad21f30e35eb59d9946e8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b899b1b15c90af7e7764c58fdb55994c5e713564e5b6b7bd1738ba5d0171691b = $this->env->getExtension("native_profiler");
        $__internal_b899b1b15c90af7e7764c58fdb55994c5e713564e5b6b7bd1738ba5d0171691b->enter($__internal_b899b1b15c90af7e7764c58fdb55994c5e713564e5b6b7bd1738ba5d0171691b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_b899b1b15c90af7e7764c58fdb55994c5e713564e5b6b7bd1738ba5d0171691b->leave($__internal_b899b1b15c90af7e7764c58fdb55994c5e713564e5b6b7bd1738ba5d0171691b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
