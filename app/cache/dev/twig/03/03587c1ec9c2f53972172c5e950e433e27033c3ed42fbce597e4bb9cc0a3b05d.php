<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_58da647c0a60596e139c1258e3322df7dfcea29f71d23543cde1b01c39f1fa2e extends Twig_Template
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
        $__internal_7015cf54a648ebfa64839f72248ae918ea44800c204c85f49ebd15647215c919 = $this->env->getExtension("native_profiler");
        $__internal_7015cf54a648ebfa64839f72248ae918ea44800c204c85f49ebd15647215c919->enter($__internal_7015cf54a648ebfa64839f72248ae918ea44800c204c85f49ebd15647215c919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_7015cf54a648ebfa64839f72248ae918ea44800c204c85f49ebd15647215c919->leave($__internal_7015cf54a648ebfa64839f72248ae918ea44800c204c85f49ebd15647215c919_prof);

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
