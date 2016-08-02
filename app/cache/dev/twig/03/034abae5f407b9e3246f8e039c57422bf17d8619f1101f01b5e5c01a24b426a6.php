<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_86076ff267fa0dffcc86c79c013323641db52aaeed652ff74c552c24998a8f17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ab57fe1d1452935c1640bb5bf0efcd232adcb4fda44a930d03821f30012b693 = $this->env->getExtension("native_profiler");
        $__internal_4ab57fe1d1452935c1640bb5bf0efcd232adcb4fda44a930d03821f30012b693->enter($__internal_4ab57fe1d1452935c1640bb5bf0efcd232adcb4fda44a930d03821f30012b693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4ab57fe1d1452935c1640bb5bf0efcd232adcb4fda44a930d03821f30012b693->leave($__internal_4ab57fe1d1452935c1640bb5bf0efcd232adcb4fda44a930d03821f30012b693_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4c42e72df3333882d6209240b2072d12d3866d6f3637b18bd51d1cad2398ac7c = $this->env->getExtension("native_profiler");
        $__internal_4c42e72df3333882d6209240b2072d12d3866d6f3637b18bd51d1cad2398ac7c->enter($__internal_4c42e72df3333882d6209240b2072d12d3866d6f3637b18bd51d1cad2398ac7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4c42e72df3333882d6209240b2072d12d3866d6f3637b18bd51d1cad2398ac7c->leave($__internal_4c42e72df3333882d6209240b2072d12d3866d6f3637b18bd51d1cad2398ac7c_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_012c082039966e5816d408f79d80919f59ad867be0b2512e0853521a4b33592a = $this->env->getExtension("native_profiler");
        $__internal_012c082039966e5816d408f79d80919f59ad867be0b2512e0853521a4b33592a->enter($__internal_012c082039966e5816d408f79d80919f59ad867be0b2512e0853521a4b33592a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_012c082039966e5816d408f79d80919f59ad867be0b2512e0853521a4b33592a->leave($__internal_012c082039966e5816d408f79d80919f59ad867be0b2512e0853521a4b33592a_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a03653b5386744d0beb28d5c5761ee3b61ea1c115b256ccbe60539328365f7d8 = $this->env->getExtension("native_profiler");
        $__internal_a03653b5386744d0beb28d5c5761ee3b61ea1c115b256ccbe60539328365f7d8->enter($__internal_a03653b5386744d0beb28d5c5761ee3b61ea1c115b256ccbe60539328365f7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a03653b5386744d0beb28d5c5761ee3b61ea1c115b256ccbe60539328365f7d8->leave($__internal_a03653b5386744d0beb28d5c5761ee3b61ea1c115b256ccbe60539328365f7d8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
