<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3d7a3ee2c83be7d458391b72bae091d9caed1e7f3dc8819593cee0c0e9e64e03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59dfb79eba559d9a37c5e4484f9d383c2af22e9c61b54c597f6d63ee328860d5 = $this->env->getExtension("native_profiler");
        $__internal_59dfb79eba559d9a37c5e4484f9d383c2af22e9c61b54c597f6d63ee328860d5->enter($__internal_59dfb79eba559d9a37c5e4484f9d383c2af22e9c61b54c597f6d63ee328860d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59dfb79eba559d9a37c5e4484f9d383c2af22e9c61b54c597f6d63ee328860d5->leave($__internal_59dfb79eba559d9a37c5e4484f9d383c2af22e9c61b54c597f6d63ee328860d5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_19a31781c065e5f4f91722ba2f71cab342289c24874ecfad2f2114d8d78e6851 = $this->env->getExtension("native_profiler");
        $__internal_19a31781c065e5f4f91722ba2f71cab342289c24874ecfad2f2114d8d78e6851->enter($__internal_19a31781c065e5f4f91722ba2f71cab342289c24874ecfad2f2114d8d78e6851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_19a31781c065e5f4f91722ba2f71cab342289c24874ecfad2f2114d8d78e6851->leave($__internal_19a31781c065e5f4f91722ba2f71cab342289c24874ecfad2f2114d8d78e6851_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_04b763bc43d3e9aa340ef711f3f531a74920c134e067b5b0f72a2302ecf0b60c = $this->env->getExtension("native_profiler");
        $__internal_04b763bc43d3e9aa340ef711f3f531a74920c134e067b5b0f72a2302ecf0b60c->enter($__internal_04b763bc43d3e9aa340ef711f3f531a74920c134e067b5b0f72a2302ecf0b60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_04b763bc43d3e9aa340ef711f3f531a74920c134e067b5b0f72a2302ecf0b60c->leave($__internal_04b763bc43d3e9aa340ef711f3f531a74920c134e067b5b0f72a2302ecf0b60c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e1360e259b927e8b214ef279a6f77d5e24773e14a051465f22b993c6910cb73 = $this->env->getExtension("native_profiler");
        $__internal_3e1360e259b927e8b214ef279a6f77d5e24773e14a051465f22b993c6910cb73->enter($__internal_3e1360e259b927e8b214ef279a6f77d5e24773e14a051465f22b993c6910cb73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3e1360e259b927e8b214ef279a6f77d5e24773e14a051465f22b993c6910cb73->leave($__internal_3e1360e259b927e8b214ef279a6f77d5e24773e14a051465f22b993c6910cb73_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
