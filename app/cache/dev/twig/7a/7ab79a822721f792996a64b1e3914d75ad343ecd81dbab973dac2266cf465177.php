<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_ad8ffd2400f53df7d461b2596b99b8d5cb3cf70dcca172efd2b28895363847ea extends Twig_Template
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
        $__internal_de889916828ae72b1c7ee7ccea31f7cf30f69650c799311a75d2167d8eb619d3 = $this->env->getExtension("native_profiler");
        $__internal_de889916828ae72b1c7ee7ccea31f7cf30f69650c799311a75d2167d8eb619d3->enter($__internal_de889916828ae72b1c7ee7ccea31f7cf30f69650c799311a75d2167d8eb619d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_de889916828ae72b1c7ee7ccea31f7cf30f69650c799311a75d2167d8eb619d3->leave($__internal_de889916828ae72b1c7ee7ccea31f7cf30f69650c799311a75d2167d8eb619d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
