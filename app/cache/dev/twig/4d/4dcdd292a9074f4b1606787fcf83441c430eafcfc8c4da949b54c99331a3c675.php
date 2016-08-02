<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_58028c5166a58836ba8308b119f0425d69598603d9f0d836acf2abd5c99bfef6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_219615f7698bf3f1a2beae86d77b585e5969632eed3e1ade3e8092a2ab6133b1 = $this->env->getExtension("native_profiler");
        $__internal_219615f7698bf3f1a2beae86d77b585e5969632eed3e1ade3e8092a2ab6133b1->enter($__internal_219615f7698bf3f1a2beae86d77b585e5969632eed3e1ade3e8092a2ab6133b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_219615f7698bf3f1a2beae86d77b585e5969632eed3e1ade3e8092a2ab6133b1->leave($__internal_219615f7698bf3f1a2beae86d77b585e5969632eed3e1ade3e8092a2ab6133b1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_08d788cb91c382e932ed03ccfb43311029ae8913264a90f82e08d25c7e6caeab = $this->env->getExtension("native_profiler");
        $__internal_08d788cb91c382e932ed03ccfb43311029ae8913264a90f82e08d25c7e6caeab->enter($__internal_08d788cb91c382e932ed03ccfb43311029ae8913264a90f82e08d25c7e6caeab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_08d788cb91c382e932ed03ccfb43311029ae8913264a90f82e08d25c7e6caeab->leave($__internal_08d788cb91c382e932ed03ccfb43311029ae8913264a90f82e08d25c7e6caeab_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
