<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_3f9d328167239630259b6e6e903517dca6a75a9362eae0298a34aaee55fca9b4 extends Twig_Template
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
        $__internal_18be1f90fffeea3392970a115d98de0eb63cb12def7ecb3f1881213006f787f0 = $this->env->getExtension("native_profiler");
        $__internal_18be1f90fffeea3392970a115d98de0eb63cb12def7ecb3f1881213006f787f0->enter($__internal_18be1f90fffeea3392970a115d98de0eb63cb12def7ecb3f1881213006f787f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_18be1f90fffeea3392970a115d98de0eb63cb12def7ecb3f1881213006f787f0->leave($__internal_18be1f90fffeea3392970a115d98de0eb63cb12def7ecb3f1881213006f787f0_prof);

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
