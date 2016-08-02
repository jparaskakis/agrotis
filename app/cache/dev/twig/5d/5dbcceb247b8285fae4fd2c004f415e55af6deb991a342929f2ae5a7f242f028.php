<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_00c7ecd86887b7c09334dc0778c6b94a9252223a50df5c47e62a7e1b3dbec209 extends Twig_Template
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
        $__internal_30b3cc063812f765333ede5065b553ae6cd72ce33597a1c88c87e2bc3df325f3 = $this->env->getExtension("native_profiler");
        $__internal_30b3cc063812f765333ede5065b553ae6cd72ce33597a1c88c87e2bc3df325f3->enter($__internal_30b3cc063812f765333ede5065b553ae6cd72ce33597a1c88c87e2bc3df325f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_30b3cc063812f765333ede5065b553ae6cd72ce33597a1c88c87e2bc3df325f3->leave($__internal_30b3cc063812f765333ede5065b553ae6cd72ce33597a1c88c87e2bc3df325f3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
