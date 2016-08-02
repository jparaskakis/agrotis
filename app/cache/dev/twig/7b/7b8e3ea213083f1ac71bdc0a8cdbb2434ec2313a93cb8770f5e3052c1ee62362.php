<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9edc04d6030de1dcfdc1445a5fa3f7b77de98d331e7ddc0f0a7617af277f17e2 extends Twig_Template
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
        $__internal_e6ca354a21cee6c09bb6dfa8e01edafc8f9fb005abf1e5e75363a8ed5088b19a = $this->env->getExtension("native_profiler");
        $__internal_e6ca354a21cee6c09bb6dfa8e01edafc8f9fb005abf1e5e75363a8ed5088b19a->enter($__internal_e6ca354a21cee6c09bb6dfa8e01edafc8f9fb005abf1e5e75363a8ed5088b19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6ca354a21cee6c09bb6dfa8e01edafc8f9fb005abf1e5e75363a8ed5088b19a->leave($__internal_e6ca354a21cee6c09bb6dfa8e01edafc8f9fb005abf1e5e75363a8ed5088b19a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d5fe86394b29b298ffa39c4f968509a9ecef8ba3e43ae71a0289a5234a29c08f = $this->env->getExtension("native_profiler");
        $__internal_d5fe86394b29b298ffa39c4f968509a9ecef8ba3e43ae71a0289a5234a29c08f->enter($__internal_d5fe86394b29b298ffa39c4f968509a9ecef8ba3e43ae71a0289a5234a29c08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d5fe86394b29b298ffa39c4f968509a9ecef8ba3e43ae71a0289a5234a29c08f->leave($__internal_d5fe86394b29b298ffa39c4f968509a9ecef8ba3e43ae71a0289a5234a29c08f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_702d24045e83e69429ee56dece668836e17a2281fcca11fbe20fd01a38ede6df = $this->env->getExtension("native_profiler");
        $__internal_702d24045e83e69429ee56dece668836e17a2281fcca11fbe20fd01a38ede6df->enter($__internal_702d24045e83e69429ee56dece668836e17a2281fcca11fbe20fd01a38ede6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_702d24045e83e69429ee56dece668836e17a2281fcca11fbe20fd01a38ede6df->leave($__internal_702d24045e83e69429ee56dece668836e17a2281fcca11fbe20fd01a38ede6df_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_663d15f91fc18178ae80bf94f8b39b721614f13ea2a8d368611b64551d3c7f00 = $this->env->getExtension("native_profiler");
        $__internal_663d15f91fc18178ae80bf94f8b39b721614f13ea2a8d368611b64551d3c7f00->enter($__internal_663d15f91fc18178ae80bf94f8b39b721614f13ea2a8d368611b64551d3c7f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_663d15f91fc18178ae80bf94f8b39b721614f13ea2a8d368611b64551d3c7f00->leave($__internal_663d15f91fc18178ae80bf94f8b39b721614f13ea2a8d368611b64551d3c7f00_prof);

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
