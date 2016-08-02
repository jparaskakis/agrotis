<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_a69cdff4a2622727ed5d21f377220b831d8a4752847f9df60dac53f5ce44f00a extends Twig_Template
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
        $__internal_09c81d865bac8cb71339f88a6e5033d15d72e1d9896ca48059d269e63d051a48 = $this->env->getExtension("native_profiler");
        $__internal_09c81d865bac8cb71339f88a6e5033d15d72e1d9896ca48059d269e63d051a48->enter($__internal_09c81d865bac8cb71339f88a6e5033d15d72e1d9896ca48059d269e63d051a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_09c81d865bac8cb71339f88a6e5033d15d72e1d9896ca48059d269e63d051a48->leave($__internal_09c81d865bac8cb71339f88a6e5033d15d72e1d9896ca48059d269e63d051a48_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e5cb406800860fcdbb1937762cc1b22a045e948435acb2f751f3fbed28b6eabd = $this->env->getExtension("native_profiler");
        $__internal_e5cb406800860fcdbb1937762cc1b22a045e948435acb2f751f3fbed28b6eabd->enter($__internal_e5cb406800860fcdbb1937762cc1b22a045e948435acb2f751f3fbed28b6eabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e5cb406800860fcdbb1937762cc1b22a045e948435acb2f751f3fbed28b6eabd->leave($__internal_e5cb406800860fcdbb1937762cc1b22a045e948435acb2f751f3fbed28b6eabd_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_48557d1f51369275dd04e7971310e69303ce36e6a30a412b48dad68f3cbcb085 = $this->env->getExtension("native_profiler");
        $__internal_48557d1f51369275dd04e7971310e69303ce36e6a30a412b48dad68f3cbcb085->enter($__internal_48557d1f51369275dd04e7971310e69303ce36e6a30a412b48dad68f3cbcb085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_48557d1f51369275dd04e7971310e69303ce36e6a30a412b48dad68f3cbcb085->leave($__internal_48557d1f51369275dd04e7971310e69303ce36e6a30a412b48dad68f3cbcb085_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_14d36f685359171f15aafd8268e10e108cee838bbd10984d6820b04f3422f961 = $this->env->getExtension("native_profiler");
        $__internal_14d36f685359171f15aafd8268e10e108cee838bbd10984d6820b04f3422f961->enter($__internal_14d36f685359171f15aafd8268e10e108cee838bbd10984d6820b04f3422f961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_14d36f685359171f15aafd8268e10e108cee838bbd10984d6820b04f3422f961->leave($__internal_14d36f685359171f15aafd8268e10e108cee838bbd10984d6820b04f3422f961_prof);

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
