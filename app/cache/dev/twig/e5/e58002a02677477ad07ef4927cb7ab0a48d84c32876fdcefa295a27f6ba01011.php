<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_518933d1bb2cb7bb6078da908283a725e97f6204b1e1d553d98b30c5342eb5a5 extends Twig_Template
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
        $__internal_1348675e4a61638b8c3407c9e83bf72d6476a3f2e05913e5382b89978437c4f2 = $this->env->getExtension("native_profiler");
        $__internal_1348675e4a61638b8c3407c9e83bf72d6476a3f2e05913e5382b89978437c4f2->enter($__internal_1348675e4a61638b8c3407c9e83bf72d6476a3f2e05913e5382b89978437c4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1348675e4a61638b8c3407c9e83bf72d6476a3f2e05913e5382b89978437c4f2->leave($__internal_1348675e4a61638b8c3407c9e83bf72d6476a3f2e05913e5382b89978437c4f2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
