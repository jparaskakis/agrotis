<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_e9233a2984c59fee82543101f5fdec9461335dd2bc1747a0224abd308b75243d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_d4f6f11a2aa624ba9c2ead77d52905717f2879af93d63b16c96e3c725c7620fa = $this->env->getExtension("native_profiler");
        $__internal_d4f6f11a2aa624ba9c2ead77d52905717f2879af93d63b16c96e3c725c7620fa->enter($__internal_d4f6f11a2aa624ba9c2ead77d52905717f2879af93d63b16c96e3c725c7620fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4f6f11a2aa624ba9c2ead77d52905717f2879af93d63b16c96e3c725c7620fa->leave($__internal_d4f6f11a2aa624ba9c2ead77d52905717f2879af93d63b16c96e3c725c7620fa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a27c5677f4559cb6e7f245acf66fbfafceb288521ead496097b2d80e0bb05e45 = $this->env->getExtension("native_profiler");
        $__internal_a27c5677f4559cb6e7f245acf66fbfafceb288521ead496097b2d80e0bb05e45->enter($__internal_a27c5677f4559cb6e7f245acf66fbfafceb288521ead496097b2d80e0bb05e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a27c5677f4559cb6e7f245acf66fbfafceb288521ead496097b2d80e0bb05e45->leave($__internal_a27c5677f4559cb6e7f245acf66fbfafceb288521ead496097b2d80e0bb05e45_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
