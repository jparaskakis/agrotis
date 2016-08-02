<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_66e23ce44d97780644578bb1d74f0c243015be18150c348a2f93fd6e3992e634 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_84fd41044c0583d77ec0f5651c7782051ca4edfee425b10b6e44f84a96e6f68f = $this->env->getExtension("native_profiler");
        $__internal_84fd41044c0583d77ec0f5651c7782051ca4edfee425b10b6e44f84a96e6f68f->enter($__internal_84fd41044c0583d77ec0f5651c7782051ca4edfee425b10b6e44f84a96e6f68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84fd41044c0583d77ec0f5651c7782051ca4edfee425b10b6e44f84a96e6f68f->leave($__internal_84fd41044c0583d77ec0f5651c7782051ca4edfee425b10b6e44f84a96e6f68f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f1ccbb2c44ccea2b55a56f0c46c62577927656214ab777355619c4fa8fc4814f = $this->env->getExtension("native_profiler");
        $__internal_f1ccbb2c44ccea2b55a56f0c46c62577927656214ab777355619c4fa8fc4814f->enter($__internal_f1ccbb2c44ccea2b55a56f0c46c62577927656214ab777355619c4fa8fc4814f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_f1ccbb2c44ccea2b55a56f0c46c62577927656214ab777355619c4fa8fc4814f->leave($__internal_f1ccbb2c44ccea2b55a56f0c46c62577927656214ab777355619c4fa8fc4814f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}*/
/* </p>*/
/* {% endblock %}*/
/* */
