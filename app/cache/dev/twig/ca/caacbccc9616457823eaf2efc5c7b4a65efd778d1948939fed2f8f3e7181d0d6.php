<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_98bbdbf6c8ed1d6dd84d1bdb94fb87ea929fa1abc11b0123c80af6fd046b04e7 extends Twig_Template
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
        $__internal_8dc922f10a5ef01e8d82ce41500c1731bcd44119af66c6208cb3c469b3093ca0 = $this->env->getExtension("native_profiler");
        $__internal_8dc922f10a5ef01e8d82ce41500c1731bcd44119af66c6208cb3c469b3093ca0->enter($__internal_8dc922f10a5ef01e8d82ce41500c1731bcd44119af66c6208cb3c469b3093ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dc922f10a5ef01e8d82ce41500c1731bcd44119af66c6208cb3c469b3093ca0->leave($__internal_8dc922f10a5ef01e8d82ce41500c1731bcd44119af66c6208cb3c469b3093ca0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5be5ab79dcb408f8a44c308e327757c7647dd6e7cf46d8c490f4db84008eb0db = $this->env->getExtension("native_profiler");
        $__internal_5be5ab79dcb408f8a44c308e327757c7647dd6e7cf46d8c490f4db84008eb0db->enter($__internal_5be5ab79dcb408f8a44c308e327757c7647dd6e7cf46d8c490f4db84008eb0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5be5ab79dcb408f8a44c308e327757c7647dd6e7cf46d8c490f4db84008eb0db->leave($__internal_5be5ab79dcb408f8a44c308e327757c7647dd6e7cf46d8c490f4db84008eb0db_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6b4d5ad6939e6515ed745e828e923e555923649452f91b53e364548d7b0445da = $this->env->getExtension("native_profiler");
        $__internal_6b4d5ad6939e6515ed745e828e923e555923649452f91b53e364548d7b0445da->enter($__internal_6b4d5ad6939e6515ed745e828e923e555923649452f91b53e364548d7b0445da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6b4d5ad6939e6515ed745e828e923e555923649452f91b53e364548d7b0445da->leave($__internal_6b4d5ad6939e6515ed745e828e923e555923649452f91b53e364548d7b0445da_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2952d5122d946d844af039c9aed5a9ce5c5a373edcc9e9eb5937b5b0e83706e7 = $this->env->getExtension("native_profiler");
        $__internal_2952d5122d946d844af039c9aed5a9ce5c5a373edcc9e9eb5937b5b0e83706e7->enter($__internal_2952d5122d946d844af039c9aed5a9ce5c5a373edcc9e9eb5937b5b0e83706e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2952d5122d946d844af039c9aed5a9ce5c5a373edcc9e9eb5937b5b0e83706e7->leave($__internal_2952d5122d946d844af039c9aed5a9ce5c5a373edcc9e9eb5937b5b0e83706e7_prof);

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
