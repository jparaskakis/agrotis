<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_b4049e14e243d3ed7f37fc059467129b65535ba28f6b0f1eb0936b873c1a99c8 extends Twig_Template
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
        $__internal_ecefcbf5ea169f5ee69339c4566430dd3dbd402df59cd89877cb5c59eb88922f = $this->env->getExtension("native_profiler");
        $__internal_ecefcbf5ea169f5ee69339c4566430dd3dbd402df59cd89877cb5c59eb88922f->enter($__internal_ecefcbf5ea169f5ee69339c4566430dd3dbd402df59cd89877cb5c59eb88922f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ecefcbf5ea169f5ee69339c4566430dd3dbd402df59cd89877cb5c59eb88922f->leave($__internal_ecefcbf5ea169f5ee69339c4566430dd3dbd402df59cd89877cb5c59eb88922f_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cda59daed8cb58b41cea71b75ce82bd61f7f26f4d3d98349462c0f5318872194 = $this->env->getExtension("native_profiler");
        $__internal_cda59daed8cb58b41cea71b75ce82bd61f7f26f4d3d98349462c0f5318872194->enter($__internal_cda59daed8cb58b41cea71b75ce82bd61f7f26f4d3d98349462c0f5318872194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cda59daed8cb58b41cea71b75ce82bd61f7f26f4d3d98349462c0f5318872194->leave($__internal_cda59daed8cb58b41cea71b75ce82bd61f7f26f4d3d98349462c0f5318872194_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7ea86f90026dbc4d009fe5705e0816f55ad40ef7bb79bec542acb4125cff09ae = $this->env->getExtension("native_profiler");
        $__internal_7ea86f90026dbc4d009fe5705e0816f55ad40ef7bb79bec542acb4125cff09ae->enter($__internal_7ea86f90026dbc4d009fe5705e0816f55ad40ef7bb79bec542acb4125cff09ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7ea86f90026dbc4d009fe5705e0816f55ad40ef7bb79bec542acb4125cff09ae->leave($__internal_7ea86f90026dbc4d009fe5705e0816f55ad40ef7bb79bec542acb4125cff09ae_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7e8ecde8a791ddaf20ab7f006fa06a0cdffbb8c6c8994e102f8640e4eeb6c5f8 = $this->env->getExtension("native_profiler");
        $__internal_7e8ecde8a791ddaf20ab7f006fa06a0cdffbb8c6c8994e102f8640e4eeb6c5f8->enter($__internal_7e8ecde8a791ddaf20ab7f006fa06a0cdffbb8c6c8994e102f8640e4eeb6c5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7e8ecde8a791ddaf20ab7f006fa06a0cdffbb8c6c8994e102f8640e4eeb6c5f8->leave($__internal_7e8ecde8a791ddaf20ab7f006fa06a0cdffbb8c6c8994e102f8640e4eeb6c5f8_prof);

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
