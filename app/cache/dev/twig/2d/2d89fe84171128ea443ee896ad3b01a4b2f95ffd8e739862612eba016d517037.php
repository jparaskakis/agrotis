<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_786ada9d3bf9e58b7d4a7ffceae2febf3a35ce9aad878ac4554e4c21ee91553b extends Twig_Template
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
        $__internal_6ce9eaac5c4b8bee2d8c376cb8903bc0f0279298d087de6c14893206d7984406 = $this->env->getExtension("native_profiler");
        $__internal_6ce9eaac5c4b8bee2d8c376cb8903bc0f0279298d087de6c14893206d7984406->enter($__internal_6ce9eaac5c4b8bee2d8c376cb8903bc0f0279298d087de6c14893206d7984406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ce9eaac5c4b8bee2d8c376cb8903bc0f0279298d087de6c14893206d7984406->leave($__internal_6ce9eaac5c4b8bee2d8c376cb8903bc0f0279298d087de6c14893206d7984406_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4f975b8c0a5876acb90d919eddd087a530467ebeb02516f70326fccfc1f94627 = $this->env->getExtension("native_profiler");
        $__internal_4f975b8c0a5876acb90d919eddd087a530467ebeb02516f70326fccfc1f94627->enter($__internal_4f975b8c0a5876acb90d919eddd087a530467ebeb02516f70326fccfc1f94627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4f975b8c0a5876acb90d919eddd087a530467ebeb02516f70326fccfc1f94627->leave($__internal_4f975b8c0a5876acb90d919eddd087a530467ebeb02516f70326fccfc1f94627_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d711a2c0fef81616cfe3308d3a11c780849efe9685ff9db4963f85d77e5d959b = $this->env->getExtension("native_profiler");
        $__internal_d711a2c0fef81616cfe3308d3a11c780849efe9685ff9db4963f85d77e5d959b->enter($__internal_d711a2c0fef81616cfe3308d3a11c780849efe9685ff9db4963f85d77e5d959b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d711a2c0fef81616cfe3308d3a11c780849efe9685ff9db4963f85d77e5d959b->leave($__internal_d711a2c0fef81616cfe3308d3a11c780849efe9685ff9db4963f85d77e5d959b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_264805b21101a6cd48253cf158c8c716cf634b772f0794325efae1da2f15b96d = $this->env->getExtension("native_profiler");
        $__internal_264805b21101a6cd48253cf158c8c716cf634b772f0794325efae1da2f15b96d->enter($__internal_264805b21101a6cd48253cf158c8c716cf634b772f0794325efae1da2f15b96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_264805b21101a6cd48253cf158c8c716cf634b772f0794325efae1da2f15b96d->leave($__internal_264805b21101a6cd48253cf158c8c716cf634b772f0794325efae1da2f15b96d_prof);

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
