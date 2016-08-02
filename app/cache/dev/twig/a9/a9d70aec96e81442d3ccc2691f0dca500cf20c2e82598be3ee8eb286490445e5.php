<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_6fb7fa14a42374ad8ff1924e4bc7b772c354c5cfcc9cd05f38dc91e62cc1ee41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42f97bc73ccec107316e6a9d6e6aa6326f9e6858d37cdc68fee83604e816ed25 = $this->env->getExtension("native_profiler");
        $__internal_42f97bc73ccec107316e6a9d6e6aa6326f9e6858d37cdc68fee83604e816ed25->enter($__internal_42f97bc73ccec107316e6a9d6e6aa6326f9e6858d37cdc68fee83604e816ed25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42f97bc73ccec107316e6a9d6e6aa6326f9e6858d37cdc68fee83604e816ed25->leave($__internal_42f97bc73ccec107316e6a9d6e6aa6326f9e6858d37cdc68fee83604e816ed25_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_565ca8c96c1deeb1af3f440e697e35259e745b14edc5260856725aa9c1aa90ca = $this->env->getExtension("native_profiler");
        $__internal_565ca8c96c1deeb1af3f440e697e35259e745b14edc5260856725aa9c1aa90ca->enter($__internal_565ca8c96c1deeb1af3f440e697e35259e745b14edc5260856725aa9c1aa90ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_565ca8c96c1deeb1af3f440e697e35259e745b14edc5260856725aa9c1aa90ca->leave($__internal_565ca8c96c1deeb1af3f440e697e35259e745b14edc5260856725aa9c1aa90ca_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
