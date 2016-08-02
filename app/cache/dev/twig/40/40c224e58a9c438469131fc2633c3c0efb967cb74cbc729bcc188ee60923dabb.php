<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e556694fe820256fa13a1dd92373b9ce904745ebf05843852dc6618bd3ab9ec7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_52a868aaab27adc6bc85587bf8e00c2c421ceb136f7f0f09746393d6e7672162 = $this->env->getExtension("native_profiler");
        $__internal_52a868aaab27adc6bc85587bf8e00c2c421ceb136f7f0f09746393d6e7672162->enter($__internal_52a868aaab27adc6bc85587bf8e00c2c421ceb136f7f0f09746393d6e7672162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52a868aaab27adc6bc85587bf8e00c2c421ceb136f7f0f09746393d6e7672162->leave($__internal_52a868aaab27adc6bc85587bf8e00c2c421ceb136f7f0f09746393d6e7672162_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d84113fc8b6a703d345197b1ea672953056e4a26b9b03732b6affa96adc8ffb7 = $this->env->getExtension("native_profiler");
        $__internal_d84113fc8b6a703d345197b1ea672953056e4a26b9b03732b6affa96adc8ffb7->enter($__internal_d84113fc8b6a703d345197b1ea672953056e4a26b9b03732b6affa96adc8ffb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d84113fc8b6a703d345197b1ea672953056e4a26b9b03732b6affa96adc8ffb7->leave($__internal_d84113fc8b6a703d345197b1ea672953056e4a26b9b03732b6affa96adc8ffb7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f066a6e709029ef5270a7cd3b6ae487d46084a8edc6a2750809db6f16c3e265c = $this->env->getExtension("native_profiler");
        $__internal_f066a6e709029ef5270a7cd3b6ae487d46084a8edc6a2750809db6f16c3e265c->enter($__internal_f066a6e709029ef5270a7cd3b6ae487d46084a8edc6a2750809db6f16c3e265c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f066a6e709029ef5270a7cd3b6ae487d46084a8edc6a2750809db6f16c3e265c->leave($__internal_f066a6e709029ef5270a7cd3b6ae487d46084a8edc6a2750809db6f16c3e265c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1dd9ed6a4496c765620ceb4c8203b6e11feb782b1971b862c58c34ee9d38af44 = $this->env->getExtension("native_profiler");
        $__internal_1dd9ed6a4496c765620ceb4c8203b6e11feb782b1971b862c58c34ee9d38af44->enter($__internal_1dd9ed6a4496c765620ceb4c8203b6e11feb782b1971b862c58c34ee9d38af44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1dd9ed6a4496c765620ceb4c8203b6e11feb782b1971b862c58c34ee9d38af44->leave($__internal_1dd9ed6a4496c765620ceb4c8203b6e11feb782b1971b862c58c34ee9d38af44_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
