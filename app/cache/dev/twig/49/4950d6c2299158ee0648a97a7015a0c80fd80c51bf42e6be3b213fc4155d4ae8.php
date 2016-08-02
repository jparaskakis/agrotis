<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_222a2937a0e2fe9014030c4aff7f81dac28c088b9b54a4b697bb7473ab244ad1 extends Twig_Template
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
        $__internal_95ab43a572b54887ea8d0467c835abac5fdb2baaea0440001dc91ab0604714b8 = $this->env->getExtension("native_profiler");
        $__internal_95ab43a572b54887ea8d0467c835abac5fdb2baaea0440001dc91ab0604714b8->enter($__internal_95ab43a572b54887ea8d0467c835abac5fdb2baaea0440001dc91ab0604714b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_95ab43a572b54887ea8d0467c835abac5fdb2baaea0440001dc91ab0604714b8->leave($__internal_95ab43a572b54887ea8d0467c835abac5fdb2baaea0440001dc91ab0604714b8_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ccdb4e3a73bc0e7cd716f6792258098298f4bbbd4a0047dfa03fd871bf946995 = $this->env->getExtension("native_profiler");
        $__internal_ccdb4e3a73bc0e7cd716f6792258098298f4bbbd4a0047dfa03fd871bf946995->enter($__internal_ccdb4e3a73bc0e7cd716f6792258098298f4bbbd4a0047dfa03fd871bf946995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ccdb4e3a73bc0e7cd716f6792258098298f4bbbd4a0047dfa03fd871bf946995->leave($__internal_ccdb4e3a73bc0e7cd716f6792258098298f4bbbd4a0047dfa03fd871bf946995_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_88f4e3fa640741d05568f695597e0b35824431c7cd888be8477519264cc9d8d0 = $this->env->getExtension("native_profiler");
        $__internal_88f4e3fa640741d05568f695597e0b35824431c7cd888be8477519264cc9d8d0->enter($__internal_88f4e3fa640741d05568f695597e0b35824431c7cd888be8477519264cc9d8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_88f4e3fa640741d05568f695597e0b35824431c7cd888be8477519264cc9d8d0->leave($__internal_88f4e3fa640741d05568f695597e0b35824431c7cd888be8477519264cc9d8d0_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7537d289cc317fd9ff16c8bd22307d463888d853cb1fba2f0b1acb78cc55d4ad = $this->env->getExtension("native_profiler");
        $__internal_7537d289cc317fd9ff16c8bd22307d463888d853cb1fba2f0b1acb78cc55d4ad->enter($__internal_7537d289cc317fd9ff16c8bd22307d463888d853cb1fba2f0b1acb78cc55d4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7537d289cc317fd9ff16c8bd22307d463888d853cb1fba2f0b1acb78cc55d4ad->leave($__internal_7537d289cc317fd9ff16c8bd22307d463888d853cb1fba2f0b1acb78cc55d4ad_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
