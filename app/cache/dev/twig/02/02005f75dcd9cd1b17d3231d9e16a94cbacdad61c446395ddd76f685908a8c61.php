<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_ce952e57307e3be47888d06c42f172c108c34e9bd81c77c8b54063bfee934a91 extends Twig_Template
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
        $__internal_a5ac04157055c35d08f3e3ef85b5fc995cd525a2e0f60cdecabd85784227985b = $this->env->getExtension("native_profiler");
        $__internal_a5ac04157055c35d08f3e3ef85b5fc995cd525a2e0f60cdecabd85784227985b->enter($__internal_a5ac04157055c35d08f3e3ef85b5fc995cd525a2e0f60cdecabd85784227985b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a5ac04157055c35d08f3e3ef85b5fc995cd525a2e0f60cdecabd85784227985b->leave($__internal_a5ac04157055c35d08f3e3ef85b5fc995cd525a2e0f60cdecabd85784227985b_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6fc5517ec594e7578b46b2cdcfa696257db91cdc581f1d6816143164928f1c3a = $this->env->getExtension("native_profiler");
        $__internal_6fc5517ec594e7578b46b2cdcfa696257db91cdc581f1d6816143164928f1c3a->enter($__internal_6fc5517ec594e7578b46b2cdcfa696257db91cdc581f1d6816143164928f1c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6fc5517ec594e7578b46b2cdcfa696257db91cdc581f1d6816143164928f1c3a->leave($__internal_6fc5517ec594e7578b46b2cdcfa696257db91cdc581f1d6816143164928f1c3a_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_07587b9671dc711e9dd2dea3f86a14f850ffcda37039fd46e8da9df907694927 = $this->env->getExtension("native_profiler");
        $__internal_07587b9671dc711e9dd2dea3f86a14f850ffcda37039fd46e8da9df907694927->enter($__internal_07587b9671dc711e9dd2dea3f86a14f850ffcda37039fd46e8da9df907694927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_07587b9671dc711e9dd2dea3f86a14f850ffcda37039fd46e8da9df907694927->leave($__internal_07587b9671dc711e9dd2dea3f86a14f850ffcda37039fd46e8da9df907694927_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_df734c11ce61beb7b026b10b345442bd17aa4ee8a56587b3b7e9c05cd722f312 = $this->env->getExtension("native_profiler");
        $__internal_df734c11ce61beb7b026b10b345442bd17aa4ee8a56587b3b7e9c05cd722f312->enter($__internal_df734c11ce61beb7b026b10b345442bd17aa4ee8a56587b3b7e9c05cd722f312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_df734c11ce61beb7b026b10b345442bd17aa4ee8a56587b3b7e9c05cd722f312->leave($__internal_df734c11ce61beb7b026b10b345442bd17aa4ee8a56587b3b7e9c05cd722f312_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
