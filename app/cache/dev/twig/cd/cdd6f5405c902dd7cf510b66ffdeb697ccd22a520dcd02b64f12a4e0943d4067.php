<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_1719e45a03032b0a0678ab910aa80796322322be9557ee7a342052c41ab0728c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_4adbf93a7584033538c0de1ba074382ea945a4cf83b8fea4c883041f506992f7 = $this->env->getExtension("native_profiler");
        $__internal_4adbf93a7584033538c0de1ba074382ea945a4cf83b8fea4c883041f506992f7->enter($__internal_4adbf93a7584033538c0de1ba074382ea945a4cf83b8fea4c883041f506992f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4adbf93a7584033538c0de1ba074382ea945a4cf83b8fea4c883041f506992f7->leave($__internal_4adbf93a7584033538c0de1ba074382ea945a4cf83b8fea4c883041f506992f7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d8cd0ceaeb6d891d2cd975b8eefddb9674e6a9d417c10c384089e5717bdf86ba = $this->env->getExtension("native_profiler");
        $__internal_d8cd0ceaeb6d891d2cd975b8eefddb9674e6a9d417c10c384089e5717bdf86ba->enter($__internal_d8cd0ceaeb6d891d2cd975b8eefddb9674e6a9d417c10c384089e5717bdf86ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d8cd0ceaeb6d891d2cd975b8eefddb9674e6a9d417c10c384089e5717bdf86ba->leave($__internal_d8cd0ceaeb6d891d2cd975b8eefddb9674e6a9d417c10c384089e5717bdf86ba_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
