<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_46624b8b77b8197bf5230882edf90584ca4e729899d885cf775fedbe38422e70 extends Twig_Template
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
        $__internal_0b9632813dd9b15a269a690603885d2ff79fedf644b6e5ce3226b6bb33892aaa = $this->env->getExtension("native_profiler");
        $__internal_0b9632813dd9b15a269a690603885d2ff79fedf644b6e5ce3226b6bb33892aaa->enter($__internal_0b9632813dd9b15a269a690603885d2ff79fedf644b6e5ce3226b6bb33892aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0b9632813dd9b15a269a690603885d2ff79fedf644b6e5ce3226b6bb33892aaa->leave($__internal_0b9632813dd9b15a269a690603885d2ff79fedf644b6e5ce3226b6bb33892aaa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
