<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_128ce2aa6226cf44197f86129fa8ba7a29cdf3ac85900216e3ea886963cfd63b extends Twig_Template
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
        $__internal_0e1a3a6e5dacfeedfee9194cfa1b71a191d5714bc6fe3545b2067819d0eea191 = $this->env->getExtension("native_profiler");
        $__internal_0e1a3a6e5dacfeedfee9194cfa1b71a191d5714bc6fe3545b2067819d0eea191->enter($__internal_0e1a3a6e5dacfeedfee9194cfa1b71a191d5714bc6fe3545b2067819d0eea191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_0e1a3a6e5dacfeedfee9194cfa1b71a191d5714bc6fe3545b2067819d0eea191->leave($__internal_0e1a3a6e5dacfeedfee9194cfa1b71a191d5714bc6fe3545b2067819d0eea191_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
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
/* <form action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST" class="fos_user_registration_register">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>*/
/* */
