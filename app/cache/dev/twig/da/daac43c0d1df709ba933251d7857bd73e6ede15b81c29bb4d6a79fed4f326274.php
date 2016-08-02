<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_2328d74eabd87b5676f5c61039d02b1a0f2901cc443d96020342bc9f6c9b03d1 extends Twig_Template
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
        $__internal_3b9a525e3a405513013709163b80fd98d0b8ea086538e70d0a41fda05dd36165 = $this->env->getExtension("native_profiler");
        $__internal_3b9a525e3a405513013709163b80fd98d0b8ea086538e70d0a41fda05dd36165->enter($__internal_3b9a525e3a405513013709163b80fd98d0b8ea086538e70d0a41fda05dd36165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_3b9a525e3a405513013709163b80fd98d0b8ea086538e70d0a41fda05dd36165->leave($__internal_3b9a525e3a405513013709163b80fd98d0b8ea086538e70d0a41fda05dd36165_prof);

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
