<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_06db03465c54af6793c203df9c48c46ee5cc6f7541a941fdee162106beaffe0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_9ddf3d4a7a41c753a75eb5e8614e98681e0c3ddb78fd81f39cb4a707a8c3cefc = $this->env->getExtension("native_profiler");
        $__internal_9ddf3d4a7a41c753a75eb5e8614e98681e0c3ddb78fd81f39cb4a707a8c3cefc->enter($__internal_9ddf3d4a7a41c753a75eb5e8614e98681e0c3ddb78fd81f39cb4a707a8c3cefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ddf3d4a7a41c753a75eb5e8614e98681e0c3ddb78fd81f39cb4a707a8c3cefc->leave($__internal_9ddf3d4a7a41c753a75eb5e8614e98681e0c3ddb78fd81f39cb4a707a8c3cefc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f691859233d15ce98fc47025103601533411512366553a89caae59342084c236 = $this->env->getExtension("native_profiler");
        $__internal_f691859233d15ce98fc47025103601533411512366553a89caae59342084c236->enter($__internal_f691859233d15ce98fc47025103601533411512366553a89caae59342084c236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_f691859233d15ce98fc47025103601533411512366553a89caae59342084c236->leave($__internal_f691859233d15ce98fc47025103601533411512366553a89caae59342084c236_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
