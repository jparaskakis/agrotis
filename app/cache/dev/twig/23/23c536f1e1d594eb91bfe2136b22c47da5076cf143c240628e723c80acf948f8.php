<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_4cd96fbf9795489738ce976d899ba1547e5857540239fe96bf3b36f948578375 extends Twig_Template
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
        $__internal_95d2eb8843177c0510b5b1c4daeca9c516b5c6733ae7f69fa4c93afbc6442aa4 = $this->env->getExtension("native_profiler");
        $__internal_95d2eb8843177c0510b5b1c4daeca9c516b5c6733ae7f69fa4c93afbc6442aa4->enter($__internal_95d2eb8843177c0510b5b1c4daeca9c516b5c6733ae7f69fa4c93afbc6442aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_95d2eb8843177c0510b5b1c4daeca9c516b5c6733ae7f69fa4c93afbc6442aa4->leave($__internal_95d2eb8843177c0510b5b1c4daeca9c516b5c6733ae7f69fa4c93afbc6442aa4_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e8e675d558d1811381d86068e09d1adf750c6eae35b2c374efc2698c9796e431 = $this->env->getExtension("native_profiler");
        $__internal_e8e675d558d1811381d86068e09d1adf750c6eae35b2c374efc2698c9796e431->enter($__internal_e8e675d558d1811381d86068e09d1adf750c6eae35b2c374efc2698c9796e431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e8e675d558d1811381d86068e09d1adf750c6eae35b2c374efc2698c9796e431->leave($__internal_e8e675d558d1811381d86068e09d1adf750c6eae35b2c374efc2698c9796e431_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5e8eda258f6d0bda28a778d893e9487436890ac13c0322aaf2b231535cd86cb2 = $this->env->getExtension("native_profiler");
        $__internal_5e8eda258f6d0bda28a778d893e9487436890ac13c0322aaf2b231535cd86cb2->enter($__internal_5e8eda258f6d0bda28a778d893e9487436890ac13c0322aaf2b231535cd86cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5e8eda258f6d0bda28a778d893e9487436890ac13c0322aaf2b231535cd86cb2->leave($__internal_5e8eda258f6d0bda28a778d893e9487436890ac13c0322aaf2b231535cd86cb2_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b3f153c556520afd40df341089034be209a36fd02a8cbf214021549c94241890 = $this->env->getExtension("native_profiler");
        $__internal_b3f153c556520afd40df341089034be209a36fd02a8cbf214021549c94241890->enter($__internal_b3f153c556520afd40df341089034be209a36fd02a8cbf214021549c94241890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b3f153c556520afd40df341089034be209a36fd02a8cbf214021549c94241890->leave($__internal_b3f153c556520afd40df341089034be209a36fd02a8cbf214021549c94241890_prof);

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
