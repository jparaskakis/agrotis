<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9a01fd07ed1f91a2f66345ce11dd86bd51438f50b5eef0de586118abb8801849 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_e52e73432ee3415990cd34f996185b9b8e54885b9a32010cd8b73cac331c8f7b = $this->env->getExtension("native_profiler");
        $__internal_e52e73432ee3415990cd34f996185b9b8e54885b9a32010cd8b73cac331c8f7b->enter($__internal_e52e73432ee3415990cd34f996185b9b8e54885b9a32010cd8b73cac331c8f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e52e73432ee3415990cd34f996185b9b8e54885b9a32010cd8b73cac331c8f7b->leave($__internal_e52e73432ee3415990cd34f996185b9b8e54885b9a32010cd8b73cac331c8f7b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c7ca3bd0b91a575db6a9191756bc7e9c4039ba9d8019bea53730c100ba6fcbd9 = $this->env->getExtension("native_profiler");
        $__internal_c7ca3bd0b91a575db6a9191756bc7e9c4039ba9d8019bea53730c100ba6fcbd9->enter($__internal_c7ca3bd0b91a575db6a9191756bc7e9c4039ba9d8019bea53730c100ba6fcbd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c7ca3bd0b91a575db6a9191756bc7e9c4039ba9d8019bea53730c100ba6fcbd9->leave($__internal_c7ca3bd0b91a575db6a9191756bc7e9c4039ba9d8019bea53730c100ba6fcbd9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf2ecf5c37acad648bec1b45b3ce8d1cedc9fbe81e02d1bcc8f7700f853d92e7 = $this->env->getExtension("native_profiler");
        $__internal_cf2ecf5c37acad648bec1b45b3ce8d1cedc9fbe81e02d1bcc8f7700f853d92e7->enter($__internal_cf2ecf5c37acad648bec1b45b3ce8d1cedc9fbe81e02d1bcc8f7700f853d92e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cf2ecf5c37acad648bec1b45b3ce8d1cedc9fbe81e02d1bcc8f7700f853d92e7->leave($__internal_cf2ecf5c37acad648bec1b45b3ce8d1cedc9fbe81e02d1bcc8f7700f853d92e7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_528362adf738761f9c53950dba49eaa72b0632f9b35b98ad7e3456c9850b7f7f = $this->env->getExtension("native_profiler");
        $__internal_528362adf738761f9c53950dba49eaa72b0632f9b35b98ad7e3456c9850b7f7f->enter($__internal_528362adf738761f9c53950dba49eaa72b0632f9b35b98ad7e3456c9850b7f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_528362adf738761f9c53950dba49eaa72b0632f9b35b98ad7e3456c9850b7f7f->leave($__internal_528362adf738761f9c53950dba49eaa72b0632f9b35b98ad7e3456c9850b7f7f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
