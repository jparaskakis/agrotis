<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_62558c801655f10f993903579a2602a8dee61ba8e52d37ee718d5071fc1327cc extends Twig_Template
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
        $__internal_2e776c9669d2634d0fb94da07bd6aae5d0e4640d6441b8b7eb4b593bdf5ac2ce = $this->env->getExtension("native_profiler");
        $__internal_2e776c9669d2634d0fb94da07bd6aae5d0e4640d6441b8b7eb4b593bdf5ac2ce->enter($__internal_2e776c9669d2634d0fb94da07bd6aae5d0e4640d6441b8b7eb4b593bdf5ac2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_2e776c9669d2634d0fb94da07bd6aae5d0e4640d6441b8b7eb4b593bdf5ac2ce->leave($__internal_2e776c9669d2634d0fb94da07bd6aae5d0e4640d6441b8b7eb4b593bdf5ac2ce_prof);

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
