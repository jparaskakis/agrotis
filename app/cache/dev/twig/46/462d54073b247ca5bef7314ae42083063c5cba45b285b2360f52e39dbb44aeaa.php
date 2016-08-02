<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_78d207c93cf41edac05788c619f63b6c8eb4554b9ae7b342e3c6855ab0206556 extends Twig_Template
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
        $__internal_336e4198f3283dc6855f94eb9ce878ff254233796548a3d3f4af422096b14732 = $this->env->getExtension("native_profiler");
        $__internal_336e4198f3283dc6855f94eb9ce878ff254233796548a3d3f4af422096b14732->enter($__internal_336e4198f3283dc6855f94eb9ce878ff254233796548a3d3f4af422096b14732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_336e4198f3283dc6855f94eb9ce878ff254233796548a3d3f4af422096b14732->leave($__internal_336e4198f3283dc6855f94eb9ce878ff254233796548a3d3f4af422096b14732_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
