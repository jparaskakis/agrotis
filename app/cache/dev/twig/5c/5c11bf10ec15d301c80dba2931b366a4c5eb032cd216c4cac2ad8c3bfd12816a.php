<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_8504465b117e1db0266146b2249025c139d2f5a5ab5793bfcb612d7fa4d6aee7 extends Twig_Template
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
        $__internal_70a6724284692e93c707b89d6f86d35bb5c714531f1edfcf6934735c4c91a1c5 = $this->env->getExtension("native_profiler");
        $__internal_70a6724284692e93c707b89d6f86d35bb5c714531f1edfcf6934735c4c91a1c5->enter($__internal_70a6724284692e93c707b89d6f86d35bb5c714531f1edfcf6934735c4c91a1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_70a6724284692e93c707b89d6f86d35bb5c714531f1edfcf6934735c4c91a1c5->leave($__internal_70a6724284692e93c707b89d6f86d35bb5c714531f1edfcf6934735c4c91a1c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
