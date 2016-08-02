<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_db6f0fb08f8932d718b6d5608ec4254ca9a3f75aa799002da5173dcfb1bc95b4 extends Twig_Template
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
        $__internal_37968088109967b07cbacd3e0a656a53bf39a526549a3326ac87690e16b1ae44 = $this->env->getExtension("native_profiler");
        $__internal_37968088109967b07cbacd3e0a656a53bf39a526549a3326ac87690e16b1ae44->enter($__internal_37968088109967b07cbacd3e0a656a53bf39a526549a3326ac87690e16b1ae44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37968088109967b07cbacd3e0a656a53bf39a526549a3326ac87690e16b1ae44->leave($__internal_37968088109967b07cbacd3e0a656a53bf39a526549a3326ac87690e16b1ae44_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e011da63a77626304adbac6835df9938998c4b70f40fd6f31df3511512e117b4 = $this->env->getExtension("native_profiler");
        $__internal_e011da63a77626304adbac6835df9938998c4b70f40fd6f31df3511512e117b4->enter($__internal_e011da63a77626304adbac6835df9938998c4b70f40fd6f31df3511512e117b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_e011da63a77626304adbac6835df9938998c4b70f40fd6f31df3511512e117b4->leave($__internal_e011da63a77626304adbac6835df9938998c4b70f40fd6f31df3511512e117b4_prof);

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
