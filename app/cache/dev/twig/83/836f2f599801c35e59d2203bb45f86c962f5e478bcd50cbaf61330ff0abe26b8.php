<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_92b856e57fefbcd5e5b730835ba6a8e223564597e9f49359c111e05e2eb8869d extends Twig_Template
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
        $__internal_b8b470f41169e33c48a3e34e9c4ae26fb4bcb5f6b7d297658b8f52787ea5cb2c = $this->env->getExtension("native_profiler");
        $__internal_b8b470f41169e33c48a3e34e9c4ae26fb4bcb5f6b7d297658b8f52787ea5cb2c->enter($__internal_b8b470f41169e33c48a3e34e9c4ae26fb4bcb5f6b7d297658b8f52787ea5cb2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8b470f41169e33c48a3e34e9c4ae26fb4bcb5f6b7d297658b8f52787ea5cb2c->leave($__internal_b8b470f41169e33c48a3e34e9c4ae26fb4bcb5f6b7d297658b8f52787ea5cb2c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_efda40bf26511bbe8ac21ea4933eafabe4e6746239a7ae7d8001ef374fe96d27 = $this->env->getExtension("native_profiler");
        $__internal_efda40bf26511bbe8ac21ea4933eafabe4e6746239a7ae7d8001ef374fe96d27->enter($__internal_efda40bf26511bbe8ac21ea4933eafabe4e6746239a7ae7d8001ef374fe96d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_efda40bf26511bbe8ac21ea4933eafabe4e6746239a7ae7d8001ef374fe96d27->leave($__internal_efda40bf26511bbe8ac21ea4933eafabe4e6746239a7ae7d8001ef374fe96d27_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1ccee002816cec6faefab4627d9915dc4aba6f73885214cde994a2f8ae7da9ea = $this->env->getExtension("native_profiler");
        $__internal_1ccee002816cec6faefab4627d9915dc4aba6f73885214cde994a2f8ae7da9ea->enter($__internal_1ccee002816cec6faefab4627d9915dc4aba6f73885214cde994a2f8ae7da9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1ccee002816cec6faefab4627d9915dc4aba6f73885214cde994a2f8ae7da9ea->leave($__internal_1ccee002816cec6faefab4627d9915dc4aba6f73885214cde994a2f8ae7da9ea_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fd009bd6e1f358caeafe429e6b5c355b20c0e5a2028ec919b5554df21949c354 = $this->env->getExtension("native_profiler");
        $__internal_fd009bd6e1f358caeafe429e6b5c355b20c0e5a2028ec919b5554df21949c354->enter($__internal_fd009bd6e1f358caeafe429e6b5c355b20c0e5a2028ec919b5554df21949c354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fd009bd6e1f358caeafe429e6b5c355b20c0e5a2028ec919b5554df21949c354->leave($__internal_fd009bd6e1f358caeafe429e6b5c355b20c0e5a2028ec919b5554df21949c354_prof);

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
