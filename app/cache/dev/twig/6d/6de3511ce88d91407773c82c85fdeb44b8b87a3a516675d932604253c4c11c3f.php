<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_d32cce8a740f5046d2b2c0358a33b7e690392e09cd39e47515cd6668ae18a261 extends Twig_Template
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
        $__internal_fb13eca132281439acc568bb0e83eef51c5100248546b790cd21c0c89cf83cc0 = $this->env->getExtension("native_profiler");
        $__internal_fb13eca132281439acc568bb0e83eef51c5100248546b790cd21c0c89cf83cc0->enter($__internal_fb13eca132281439acc568bb0e83eef51c5100248546b790cd21c0c89cf83cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_fb13eca132281439acc568bb0e83eef51c5100248546b790cd21c0c89cf83cc0->leave($__internal_fb13eca132281439acc568bb0e83eef51c5100248546b790cd21c0c89cf83cc0_prof);

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
