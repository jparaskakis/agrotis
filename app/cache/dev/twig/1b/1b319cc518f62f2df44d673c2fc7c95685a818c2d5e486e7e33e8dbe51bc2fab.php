<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_23e4818bf2a26cebae69953b77640e483af45b6462d7787c2ca57fb1f59fd2e5 extends Twig_Template
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
        $__internal_8059ec7112e3bcb6e07d512b96b1bb2b1f4d81ebfb65da59270051d0829bf82e = $this->env->getExtension("native_profiler");
        $__internal_8059ec7112e3bcb6e07d512b96b1bb2b1f4d81ebfb65da59270051d0829bf82e->enter($__internal_8059ec7112e3bcb6e07d512b96b1bb2b1f4d81ebfb65da59270051d0829bf82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8059ec7112e3bcb6e07d512b96b1bb2b1f4d81ebfb65da59270051d0829bf82e->leave($__internal_8059ec7112e3bcb6e07d512b96b1bb2b1f4d81ebfb65da59270051d0829bf82e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_114f89a7c4df8b56616578c6724b36787ae6f3b4832c5d7a9be80b6bce1c1917 = $this->env->getExtension("native_profiler");
        $__internal_114f89a7c4df8b56616578c6724b36787ae6f3b4832c5d7a9be80b6bce1c1917->enter($__internal_114f89a7c4df8b56616578c6724b36787ae6f3b4832c5d7a9be80b6bce1c1917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_114f89a7c4df8b56616578c6724b36787ae6f3b4832c5d7a9be80b6bce1c1917->leave($__internal_114f89a7c4df8b56616578c6724b36787ae6f3b4832c5d7a9be80b6bce1c1917_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_03438ef4e6c9d85c17a2b56fa14d537764384caf818643fed249c27dc461219d = $this->env->getExtension("native_profiler");
        $__internal_03438ef4e6c9d85c17a2b56fa14d537764384caf818643fed249c27dc461219d->enter($__internal_03438ef4e6c9d85c17a2b56fa14d537764384caf818643fed249c27dc461219d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_03438ef4e6c9d85c17a2b56fa14d537764384caf818643fed249c27dc461219d->leave($__internal_03438ef4e6c9d85c17a2b56fa14d537764384caf818643fed249c27dc461219d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_890b38ddb8a4e2a2ec83bb99440b5d1529d756c07c41a6cbd21a46e9189b1fdc = $this->env->getExtension("native_profiler");
        $__internal_890b38ddb8a4e2a2ec83bb99440b5d1529d756c07c41a6cbd21a46e9189b1fdc->enter($__internal_890b38ddb8a4e2a2ec83bb99440b5d1529d756c07c41a6cbd21a46e9189b1fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_890b38ddb8a4e2a2ec83bb99440b5d1529d756c07c41a6cbd21a46e9189b1fdc->leave($__internal_890b38ddb8a4e2a2ec83bb99440b5d1529d756c07c41a6cbd21a46e9189b1fdc_prof);

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
