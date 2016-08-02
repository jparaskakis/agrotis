<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_d0f28c773f09b6f30e61497c1d8289778eac401b909f06d9b099b4a72ae94120 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_560e1c88719057066388ca356d04cc4aff261661c413d83868efdb38862196e3 = $this->env->getExtension("native_profiler");
        $__internal_560e1c88719057066388ca356d04cc4aff261661c413d83868efdb38862196e3->enter($__internal_560e1c88719057066388ca356d04cc4aff261661c413d83868efdb38862196e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_560e1c88719057066388ca356d04cc4aff261661c413d83868efdb38862196e3->leave($__internal_560e1c88719057066388ca356d04cc4aff261661c413d83868efdb38862196e3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2385e6ed8a78423069be95efd62e0cdb8ab777012e458674abdc37783d5c0927 = $this->env->getExtension("native_profiler");
        $__internal_2385e6ed8a78423069be95efd62e0cdb8ab777012e458674abdc37783d5c0927->enter($__internal_2385e6ed8a78423069be95efd62e0cdb8ab777012e458674abdc37783d5c0927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_2385e6ed8a78423069be95efd62e0cdb8ab777012e458674abdc37783d5c0927->leave($__internal_2385e6ed8a78423069be95efd62e0cdb8ab777012e458674abdc37783d5c0927_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
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
