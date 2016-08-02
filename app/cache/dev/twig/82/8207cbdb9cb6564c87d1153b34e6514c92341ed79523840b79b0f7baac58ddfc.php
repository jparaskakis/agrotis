<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_4891b5acbd8a8150e8383bce77b68d965ae8738564afbb1d3701b1c34f497256 extends Twig_Template
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
        $__internal_e27d9f1154cdf1b07df2d6377a4ac9a9b8fd0737f56b0ab81424066b0a3a78b2 = $this->env->getExtension("native_profiler");
        $__internal_e27d9f1154cdf1b07df2d6377a4ac9a9b8fd0737f56b0ab81424066b0a3a78b2->enter($__internal_e27d9f1154cdf1b07df2d6377a4ac9a9b8fd0737f56b0ab81424066b0a3a78b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e27d9f1154cdf1b07df2d6377a4ac9a9b8fd0737f56b0ab81424066b0a3a78b2->leave($__internal_e27d9f1154cdf1b07df2d6377a4ac9a9b8fd0737f56b0ab81424066b0a3a78b2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
