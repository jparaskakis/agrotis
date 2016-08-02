<?php

/* FOSUserBundle:Group:new_content.html.twig */
class __TwigTemplate_1ab85c80ea667e1e555c585377b6804d1c1305d2db0caabd2d68189133ded3cf extends Twig_Template
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
        $__internal_a90ab878c0ed3f7791b06c5ab582a0da9cab5ebfa9daa840c9caa8c72c3e8a88 = $this->env->getExtension("native_profiler");
        $__internal_a90ab878c0ed3f7791b06c5ab582a0da9cab5ebfa9daa840c9caa8c72c3e8a88->enter($__internal_a90ab878c0ed3f7791b06c5ab582a0da9cab5ebfa9daa840c9caa8c72c3e8a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_group_new");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_new\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_a90ab878c0ed3f7791b06c5ab582a0da9cab5ebfa9daa840c9caa8c72c3e8a88->leave($__internal_a90ab878c0ed3f7791b06c5ab582a0da9cab5ebfa9daa840c9caa8c72c3e8a88_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  29 => 2,  22 => 1,);
    }
}
/* <form action="{{ path('fos_user_group_new') }}" {{ form_enctype(form) }} method="POST" class="fos_user_group_new">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'group.new.submit'|trans([], 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>*/
/* */
