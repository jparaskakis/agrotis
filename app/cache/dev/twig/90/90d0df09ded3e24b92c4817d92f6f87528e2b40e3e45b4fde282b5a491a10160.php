<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_8c53cfe985dc7f2c5fa35ea63463d8fa768ad56e19c8b632eff5bbcf9cd6450b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_8f252a8b9f3c36e36730f9e26632ebd8a4039da9367cc72f1b60d49970a43a86 = $this->env->getExtension("native_profiler");
        $__internal_8f252a8b9f3c36e36730f9e26632ebd8a4039da9367cc72f1b60d49970a43a86->enter($__internal_8f252a8b9f3c36e36730f9e26632ebd8a4039da9367cc72f1b60d49970a43a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f252a8b9f3c36e36730f9e26632ebd8a4039da9367cc72f1b60d49970a43a86->leave($__internal_8f252a8b9f3c36e36730f9e26632ebd8a4039da9367cc72f1b60d49970a43a86_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_354fc0e237f6a95d883db759dbe0f6abbd0e167d03ef2b0ba362b095ce92a332 = $this->env->getExtension("native_profiler");
        $__internal_354fc0e237f6a95d883db759dbe0f6abbd0e167d03ef2b0ba362b095ce92a332->enter($__internal_354fc0e237f6a95d883db759dbe0f6abbd0e167d03ef2b0ba362b095ce92a332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_354fc0e237f6a95d883db759dbe0f6abbd0e167d03ef2b0ba362b095ce92a332->leave($__internal_354fc0e237f6a95d883db759dbe0f6abbd0e167d03ef2b0ba362b095ce92a332_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
