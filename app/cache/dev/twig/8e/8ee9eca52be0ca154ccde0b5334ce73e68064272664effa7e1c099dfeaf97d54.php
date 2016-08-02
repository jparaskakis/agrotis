<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_7aff17cc12dbfae237219fa859b7c33b007e897f2dc31b072b228b969f695c93 extends Twig_Template
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
        $__internal_7579c629d11f76cd8a2a6c509238c1f3368a77ba7c92077fa1ce9471b77935cb = $this->env->getExtension("native_profiler");
        $__internal_7579c629d11f76cd8a2a6c509238c1f3368a77ba7c92077fa1ce9471b77935cb->enter($__internal_7579c629d11f76cd8a2a6c509238c1f3368a77ba7c92077fa1ce9471b77935cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_7579c629d11f76cd8a2a6c509238c1f3368a77ba7c92077fa1ce9471b77935cb->leave($__internal_7579c629d11f76cd8a2a6c509238c1f3368a77ba7c92077fa1ce9471b77935cb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
