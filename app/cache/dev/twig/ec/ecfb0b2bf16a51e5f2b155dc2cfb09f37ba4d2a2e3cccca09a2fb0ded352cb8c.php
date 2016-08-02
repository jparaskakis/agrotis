<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_29f27043ec8f1be321c29c87197e5a45645ba35e89d2cb9ad4878f73286526ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_feec233871ddd7f0b059c513aad90c763d5ccc55c63ee88298cfbfb246eabccf = $this->env->getExtension("native_profiler");
        $__internal_feec233871ddd7f0b059c513aad90c763d5ccc55c63ee88298cfbfb246eabccf->enter($__internal_feec233871ddd7f0b059c513aad90c763d5ccc55c63ee88298cfbfb246eabccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_feec233871ddd7f0b059c513aad90c763d5ccc55c63ee88298cfbfb246eabccf->leave($__internal_feec233871ddd7f0b059c513aad90c763d5ccc55c63ee88298cfbfb246eabccf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f6017577fe7da7d61ca80b3e1750d0c05fe2bab2a821f2fc77e7c1c1404f2c41 = $this->env->getExtension("native_profiler");
        $__internal_f6017577fe7da7d61ca80b3e1750d0c05fe2bab2a821f2fc77e7c1c1404f2c41->enter($__internal_f6017577fe7da7d61ca80b3e1750d0c05fe2bab2a821f2fc77e7c1c1404f2c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f6017577fe7da7d61ca80b3e1750d0c05fe2bab2a821f2fc77e7c1c1404f2c41->leave($__internal_f6017577fe7da7d61ca80b3e1750d0c05fe2bab2a821f2fc77e7c1c1404f2c41_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a23a492c60fe99431b01e7153208a7c155dc90956703decd2f514bb81a577b4c = $this->env->getExtension("native_profiler");
        $__internal_a23a492c60fe99431b01e7153208a7c155dc90956703decd2f514bb81a577b4c->enter($__internal_a23a492c60fe99431b01e7153208a7c155dc90956703decd2f514bb81a577b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a23a492c60fe99431b01e7153208a7c155dc90956703decd2f514bb81a577b4c->leave($__internal_a23a492c60fe99431b01e7153208a7c155dc90956703decd2f514bb81a577b4c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3a736f5e285aa4f4ca8dbfa883498c84905a49b99925212eea0d325ad052c386 = $this->env->getExtension("native_profiler");
        $__internal_3a736f5e285aa4f4ca8dbfa883498c84905a49b99925212eea0d325ad052c386->enter($__internal_3a736f5e285aa4f4ca8dbfa883498c84905a49b99925212eea0d325ad052c386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_3a736f5e285aa4f4ca8dbfa883498c84905a49b99925212eea0d325ad052c386->leave($__internal_3a736f5e285aa4f4ca8dbfa883498c84905a49b99925212eea0d325ad052c386_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
