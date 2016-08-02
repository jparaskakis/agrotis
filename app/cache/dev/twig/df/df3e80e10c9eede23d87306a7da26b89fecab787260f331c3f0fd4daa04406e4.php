<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_f2f95f711fe03e56a6e1e33ee01e2302e5ac3db25f2853d3ba432e4e159152aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_605a7ae9b92f2c3f7389d0482ee0dab8567c7a867e8dcf12a44ec5ed5a405058 = $this->env->getExtension("native_profiler");
        $__internal_605a7ae9b92f2c3f7389d0482ee0dab8567c7a867e8dcf12a44ec5ed5a405058->enter($__internal_605a7ae9b92f2c3f7389d0482ee0dab8567c7a867e8dcf12a44ec5ed5a405058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_605a7ae9b92f2c3f7389d0482ee0dab8567c7a867e8dcf12a44ec5ed5a405058->leave($__internal_605a7ae9b92f2c3f7389d0482ee0dab8567c7a867e8dcf12a44ec5ed5a405058_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
