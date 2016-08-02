<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0bfcd7457a04caf2e0e8c07dd5f9c17c6b6b14a6a390b695161fc6bf274fcd0a extends Twig_Template
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
        $__internal_c03a268b0d67a00b6c626843dd562d4fcb92aef40d254aac7c39c1597a002e69 = $this->env->getExtension("native_profiler");
        $__internal_c03a268b0d67a00b6c626843dd562d4fcb92aef40d254aac7c39c1597a002e69->enter($__internal_c03a268b0d67a00b6c626843dd562d4fcb92aef40d254aac7c39c1597a002e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c03a268b0d67a00b6c626843dd562d4fcb92aef40d254aac7c39c1597a002e69->leave($__internal_c03a268b0d67a00b6c626843dd562d4fcb92aef40d254aac7c39c1597a002e69_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_28bf5bf3635e03d678aa95d057c44174f51f4cc1319d74451a308d52876a36f5 = $this->env->getExtension("native_profiler");
        $__internal_28bf5bf3635e03d678aa95d057c44174f51f4cc1319d74451a308d52876a36f5->enter($__internal_28bf5bf3635e03d678aa95d057c44174f51f4cc1319d74451a308d52876a36f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_28bf5bf3635e03d678aa95d057c44174f51f4cc1319d74451a308d52876a36f5->leave($__internal_28bf5bf3635e03d678aa95d057c44174f51f4cc1319d74451a308d52876a36f5_prof);

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
