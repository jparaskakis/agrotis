<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_aad7ee864a69528b3f61b0fcf29d4c8accd1fb86d45773ce2eebd058b29520a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_60dfc710c05ef1daf221797d4aa82b46cd70cb672a29869d020fa931fafb3395 = $this->env->getExtension("native_profiler");
        $__internal_60dfc710c05ef1daf221797d4aa82b46cd70cb672a29869d020fa931fafb3395->enter($__internal_60dfc710c05ef1daf221797d4aa82b46cd70cb672a29869d020fa931fafb3395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60dfc710c05ef1daf221797d4aa82b46cd70cb672a29869d020fa931fafb3395->leave($__internal_60dfc710c05ef1daf221797d4aa82b46cd70cb672a29869d020fa931fafb3395_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_49b3bc4865e40d472ebb8549e636be35e23d5f3b64a5730ff4bed80d0cf426c0 = $this->env->getExtension("native_profiler");
        $__internal_49b3bc4865e40d472ebb8549e636be35e23d5f3b64a5730ff4bed80d0cf426c0->enter($__internal_49b3bc4865e40d472ebb8549e636be35e23d5f3b64a5730ff4bed80d0cf426c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "
";
        // line 9
        echo "    ";
        // line 10
        echo "
    ";
        // line 12
        echo "    ";
        // line 13
        echo "
    ";
        // line 15
        echo "    ";
        // line 16
        echo "
    ";
        // line 18
        echo "    ";
        // line 19
        echo "
    ";
        
        $__internal_49b3bc4865e40d472ebb8549e636be35e23d5f3b64a5730ff4bed80d0cf426c0->leave($__internal_49b3bc4865e40d472ebb8549e636be35e23d5f3b64a5730ff4bed80d0cf426c0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 19,  66 => 18,  63 => 16,  61 => 15,  58 => 13,  56 => 12,  53 => 10,  51 => 9,  48 => 7,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/* {% endif %}*/
/* */
/* {#<form action="{{ path("fos_user_security_check") }}" method="post">#}*/
/*     {#<input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />#}*/
/* */
/*     {#<label for="username">{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}</label>#}*/
/*     {#<input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />#}*/
/* */
/*     {#<label for="password">{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>#}*/
/*     {#<input type="password" id="password" name="_password" required="required" />#}*/
/* */
/*     {#<input type="checkbox" id="remember_me" name="_remember_me" value="on" />#}*/
/*     {#<label for="remember_me">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</label>#}*/
/* */
/*     {#<input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}" />#}*/
/* {#</form>#}*/
/* {% endblock fos_user_content %}*/
/* */
