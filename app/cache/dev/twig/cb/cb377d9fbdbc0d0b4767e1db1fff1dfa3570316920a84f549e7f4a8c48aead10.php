<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_6147ab4fc1f630d42d3b8ee1307ae7580526c6c9b72ab1f5978ccc538c08e333 extends Twig_Template
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
        $__internal_44579c5e72a1a784b34d0fabd5a7cf36782ee79e6693f645b0abd838e4bbd658 = $this->env->getExtension("native_profiler");
        $__internal_44579c5e72a1a784b34d0fabd5a7cf36782ee79e6693f645b0abd838e4bbd658->enter($__internal_44579c5e72a1a784b34d0fabd5a7cf36782ee79e6693f645b0abd838e4bbd658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_44579c5e72a1a784b34d0fabd5a7cf36782ee79e6693f645b0abd838e4bbd658->leave($__internal_44579c5e72a1a784b34d0fabd5a7cf36782ee79e6693f645b0abd838e4bbd658_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
