<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_17d6b760771c4bfdd11cb9bd9ee2e21c3a502d936a547aa2c1632e5dd4321ee6 extends Twig_Template
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
        $__internal_9937b7c6af19ce59daac46c49862ba31ae117553b000fe36c5b4c2ca8db8b46a = $this->env->getExtension("native_profiler");
        $__internal_9937b7c6af19ce59daac46c49862ba31ae117553b000fe36c5b4c2ca8db8b46a->enter($__internal_9937b7c6af19ce59daac46c49862ba31ae117553b000fe36c5b4c2ca8db8b46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_9937b7c6af19ce59daac46c49862ba31ae117553b000fe36c5b4c2ca8db8b46a->leave($__internal_9937b7c6af19ce59daac46c49862ba31ae117553b000fe36c5b4c2ca8db8b46a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
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
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans([], 'FOSUserBundle') }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
