<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_5ff9336326837a722afe4fc028994d569ad0a93599fb3ddf031c6a83057ae586 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_e09da5199984862f00f23e8b456d447c23f1cdaf48f89dbd81442f9e5d6ebfce = $this->env->getExtension("native_profiler");
        $__internal_e09da5199984862f00f23e8b456d447c23f1cdaf48f89dbd81442f9e5d6ebfce->enter($__internal_e09da5199984862f00f23e8b456d447c23f1cdaf48f89dbd81442f9e5d6ebfce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e09da5199984862f00f23e8b456d447c23f1cdaf48f89dbd81442f9e5d6ebfce->leave($__internal_e09da5199984862f00f23e8b456d447c23f1cdaf48f89dbd81442f9e5d6ebfce_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2572aea65df11d3f80b142b30ce520d0c78b2c8cb181708afc46ac9e97094524 = $this->env->getExtension("native_profiler");
        $__internal_2572aea65df11d3f80b142b30ce520d0c78b2c8cb181708afc46ac9e97094524->enter($__internal_2572aea65df11d3f80b142b30ce520d0c78b2c8cb181708afc46ac9e97094524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2572aea65df11d3f80b142b30ce520d0c78b2c8cb181708afc46ac9e97094524->leave($__internal_2572aea65df11d3f80b142b30ce520d0c78b2c8cb181708afc46ac9e97094524_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7ddf12000f2fe9f3cae3bf71efb0dca11ca179db728c1ab868ec3552aecfb151 = $this->env->getExtension("native_profiler");
        $__internal_7ddf12000f2fe9f3cae3bf71efb0dca11ca179db728c1ab868ec3552aecfb151->enter($__internal_7ddf12000f2fe9f3cae3bf71efb0dca11ca179db728c1ab868ec3552aecfb151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7ddf12000f2fe9f3cae3bf71efb0dca11ca179db728c1ab868ec3552aecfb151->leave($__internal_7ddf12000f2fe9f3cae3bf71efb0dca11ca179db728c1ab868ec3552aecfb151_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_437c2b214a19f1c02278e97357e802462aa49afff6f28aadab05f9b42b6289f6 = $this->env->getExtension("native_profiler");
        $__internal_437c2b214a19f1c02278e97357e802462aa49afff6f28aadab05f9b42b6289f6->enter($__internal_437c2b214a19f1c02278e97357e802462aa49afff6f28aadab05f9b42b6289f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_437c2b214a19f1c02278e97357e802462aa49afff6f28aadab05f9b42b6289f6->leave($__internal_437c2b214a19f1c02278e97357e802462aa49afff6f28aadab05f9b42b6289f6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
