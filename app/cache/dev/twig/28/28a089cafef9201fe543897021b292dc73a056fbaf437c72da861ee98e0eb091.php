<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_f6329db219315450bf777e32ad1e17fbdb713cf873e3c3257eb949cb2efba9c7 extends Twig_Template
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
        $__internal_aa7df2c7c759d5a06fe8b71e1202c1aba55cb85a72f93b5a181aa23f4294c521 = $this->env->getExtension("native_profiler");
        $__internal_aa7df2c7c759d5a06fe8b71e1202c1aba55cb85a72f93b5a181aa23f4294c521->enter($__internal_aa7df2c7c759d5a06fe8b71e1202c1aba55cb85a72f93b5a181aa23f4294c521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_aa7df2c7c759d5a06fe8b71e1202c1aba55cb85a72f93b5a181aa23f4294c521->leave($__internal_aa7df2c7c759d5a06fe8b71e1202c1aba55cb85a72f93b5a181aa23f4294c521_prof);

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
