<?php

/* @NelmioApiDoc/Components/version.html.twig */
class __TwigTemplate_308d5047f59ca836f9ed972a7266a641f1cc489f7dc7e827c4f4d07dfb36c2a6 extends Twig_Template
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
        $__internal_27d373beca61496a3d1b7df462dc3fe3fec498ed2b879f12812cb16e04d10800 = $this->env->getExtension("native_profiler");
        $__internal_27d373beca61496a3d1b7df462dc3fe3fec498ed2b879f12812cb16e04d10800->enter($__internal_27d373beca61496a3d1b7df462dc3fe3fec498ed2b879f12812cb16e04d10800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NelmioApiDoc/Components/version.html.twig"));

        // line 1
        if ((twig_test_empty((isset($context["sinceVersion"]) ? $context["sinceVersion"] : $this->getContext($context, "sinceVersion"))) && twig_test_empty((isset($context["untilVersion"]) ? $context["untilVersion"] : $this->getContext($context, "untilVersion"))))) {
            // line 2
            echo "*
";
        } else {
            // line 4
            echo "    ";
            if ( !twig_test_empty((isset($context["sinceVersion"]) ? $context["sinceVersion"] : $this->getContext($context, "sinceVersion")))) {
                echo "&gt;=";
                echo twig_escape_filter($this->env, (isset($context["sinceVersion"]) ? $context["sinceVersion"] : $this->getContext($context, "sinceVersion")), "html", null, true);
            }
            // line 5
            echo "    ";
            if ( !twig_test_empty((isset($context["untilVersion"]) ? $context["untilVersion"] : $this->getContext($context, "untilVersion")))) {
                // line 6
                echo "        ";
                if ( !twig_test_empty((isset($context["sinceVersion"]) ? $context["sinceVersion"] : $this->getContext($context, "sinceVersion")))) {
                    echo ",";
                }
                echo "&lt;=";
                echo twig_escape_filter($this->env, (isset($context["untilVersion"]) ? $context["untilVersion"] : $this->getContext($context, "untilVersion")), "html", null, true);
                echo "
    ";
            }
        }
        
        $__internal_27d373beca61496a3d1b7df462dc3fe3fec498ed2b879f12812cb16e04d10800->leave($__internal_27d373beca61496a3d1b7df462dc3fe3fec498ed2b879f12812cb16e04d10800_prof);

    }

    public function getTemplateName()
    {
        return "@NelmioApiDoc/Components/version.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  34 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if sinceVersion is empty and untilVersion is empty %}*/
/* **/
/* {% else %}*/
/*     {% if sinceVersion is not empty %}&gt;={{ sinceVersion }}{% endif %}*/
/*     {% if untilVersion is not empty %}*/
/*         {% if sinceVersion is not empty %},{% endif %}&lt;={{ untilVersion }}*/
/*     {% endif %}*/
/* {% endif %}*/
/* */
