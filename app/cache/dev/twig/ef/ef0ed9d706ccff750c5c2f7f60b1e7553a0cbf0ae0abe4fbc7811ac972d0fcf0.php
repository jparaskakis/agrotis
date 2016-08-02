<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_3d6d042058bb993b319d75a7bdce20fc62daefe3cb1c2e59e4c214ef34cd3b3d extends Twig_Template
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
        $__internal_ded01a4085363b17d640a1af8306026250d9a8ae880f1efb854286059e804ec4 = $this->env->getExtension("native_profiler");
        $__internal_ded01a4085363b17d640a1af8306026250d9a8ae880f1efb854286059e804ec4->enter($__internal_ded01a4085363b17d640a1af8306026250d9a8ae880f1efb854286059e804ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ded01a4085363b17d640a1af8306026250d9a8ae880f1efb854286059e804ec4->leave($__internal_ded01a4085363b17d640a1af8306026250d9a8ae880f1efb854286059e804ec4_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1ba10d288eed3b5011d1b9e05bf665755b24b2c0d825af308543fea7b191dd44 = $this->env->getExtension("native_profiler");
        $__internal_1ba10d288eed3b5011d1b9e05bf665755b24b2c0d825af308543fea7b191dd44->enter($__internal_1ba10d288eed3b5011d1b9e05bf665755b24b2c0d825af308543fea7b191dd44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1ba10d288eed3b5011d1b9e05bf665755b24b2c0d825af308543fea7b191dd44->leave($__internal_1ba10d288eed3b5011d1b9e05bf665755b24b2c0d825af308543fea7b191dd44_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3f19848d0eaf00c39b7bf793cdcdf59c43741d22eb9d80b5e04edf58a459ce0c = $this->env->getExtension("native_profiler");
        $__internal_3f19848d0eaf00c39b7bf793cdcdf59c43741d22eb9d80b5e04edf58a459ce0c->enter($__internal_3f19848d0eaf00c39b7bf793cdcdf59c43741d22eb9d80b5e04edf58a459ce0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3f19848d0eaf00c39b7bf793cdcdf59c43741d22eb9d80b5e04edf58a459ce0c->leave($__internal_3f19848d0eaf00c39b7bf793cdcdf59c43741d22eb9d80b5e04edf58a459ce0c_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_fdcb34b732e11f2a285cca26bbf20aeff8e6ec40e041e5a2fd3351d45bfe56ee = $this->env->getExtension("native_profiler");
        $__internal_fdcb34b732e11f2a285cca26bbf20aeff8e6ec40e041e5a2fd3351d45bfe56ee->enter($__internal_fdcb34b732e11f2a285cca26bbf20aeff8e6ec40e041e5a2fd3351d45bfe56ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_fdcb34b732e11f2a285cca26bbf20aeff8e6ec40e041e5a2fd3351d45bfe56ee->leave($__internal_fdcb34b732e11f2a285cca26bbf20aeff8e6ec40e041e5a2fd3351d45bfe56ee_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
