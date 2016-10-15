<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e31764809e8b8104f83655cf66d7e3bd134a6d6fbd4748b7ddbddd051e4257cd extends Twig_Template
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
        $__internal_b15df97e0b9a2737afecdc8d718163669560bac544c8ab84511cca9cd2a557b1 = $this->env->getExtension("native_profiler");
        $__internal_b15df97e0b9a2737afecdc8d718163669560bac544c8ab84511cca9cd2a557b1->enter($__internal_b15df97e0b9a2737afecdc8d718163669560bac544c8ab84511cca9cd2a557b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b15df97e0b9a2737afecdc8d718163669560bac544c8ab84511cca9cd2a557b1->leave($__internal_b15df97e0b9a2737afecdc8d718163669560bac544c8ab84511cca9cd2a557b1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1ba9e4e1e0c6c94531f271b936ac1ab87572b413fec523ae2037033ea5dfe289 = $this->env->getExtension("native_profiler");
        $__internal_1ba9e4e1e0c6c94531f271b936ac1ab87572b413fec523ae2037033ea5dfe289->enter($__internal_1ba9e4e1e0c6c94531f271b936ac1ab87572b413fec523ae2037033ea5dfe289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1ba9e4e1e0c6c94531f271b936ac1ab87572b413fec523ae2037033ea5dfe289->leave($__internal_1ba9e4e1e0c6c94531f271b936ac1ab87572b413fec523ae2037033ea5dfe289_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e1067428b89b6e1521694b31d3a8bea6e45c444cd7646a763f1e6cb4909f2ab7 = $this->env->getExtension("native_profiler");
        $__internal_e1067428b89b6e1521694b31d3a8bea6e45c444cd7646a763f1e6cb4909f2ab7->enter($__internal_e1067428b89b6e1521694b31d3a8bea6e45c444cd7646a763f1e6cb4909f2ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e1067428b89b6e1521694b31d3a8bea6e45c444cd7646a763f1e6cb4909f2ab7->leave($__internal_e1067428b89b6e1521694b31d3a8bea6e45c444cd7646a763f1e6cb4909f2ab7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5106b2613dda703cad51f3855692f72645f40bb744ed07a1edeebc7dc55ddd13 = $this->env->getExtension("native_profiler");
        $__internal_5106b2613dda703cad51f3855692f72645f40bb744ed07a1edeebc7dc55ddd13->enter($__internal_5106b2613dda703cad51f3855692f72645f40bb744ed07a1edeebc7dc55ddd13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5106b2613dda703cad51f3855692f72645f40bb744ed07a1edeebc7dc55ddd13->leave($__internal_5106b2613dda703cad51f3855692f72645f40bb744ed07a1edeebc7dc55ddd13_prof);

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
