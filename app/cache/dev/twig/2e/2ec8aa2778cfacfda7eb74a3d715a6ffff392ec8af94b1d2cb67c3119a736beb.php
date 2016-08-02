<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_74f4b41e729128aba46ed38cff6182eb7731d7332b8da0f7344eb13e0aaa792a extends Twig_Template
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
        $__internal_693302cc0e3bff941001315f42bed1bdde4ab6b5424924d34ceedfc38413b38f = $this->env->getExtension("native_profiler");
        $__internal_693302cc0e3bff941001315f42bed1bdde4ab6b5424924d34ceedfc38413b38f->enter($__internal_693302cc0e3bff941001315f42bed1bdde4ab6b5424924d34ceedfc38413b38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_693302cc0e3bff941001315f42bed1bdde4ab6b5424924d34ceedfc38413b38f->leave($__internal_693302cc0e3bff941001315f42bed1bdde4ab6b5424924d34ceedfc38413b38f_prof);

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
