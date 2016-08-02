<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_745798d2d1a02b02f5b83ecbe78ad5ce8be046395a79d81f5be51c2c58c2e8e0 extends Twig_Template
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
        $__internal_0264bbf9b029505428568fb07439d7a7f803db0e28f5342c61d5f883011097d7 = $this->env->getExtension("native_profiler");
        $__internal_0264bbf9b029505428568fb07439d7a7f803db0e28f5342c61d5f883011097d7->enter($__internal_0264bbf9b029505428568fb07439d7a7f803db0e28f5342c61d5f883011097d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_0264bbf9b029505428568fb07439d7a7f803db0e28f5342c61d5f883011097d7->leave($__internal_0264bbf9b029505428568fb07439d7a7f803db0e28f5342c61d5f883011097d7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
