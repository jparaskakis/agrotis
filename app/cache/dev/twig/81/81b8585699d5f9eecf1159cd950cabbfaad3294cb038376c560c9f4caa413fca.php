<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_6a3143acc951aca8fe0a35bc8c882322951c3930fd7282e9905634166558c22a extends Twig_Template
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
        $__internal_a5e0222a16fdaa8112d418aed97888ce5994a04f3f0639402bcc6ad9d10500df = $this->env->getExtension("native_profiler");
        $__internal_a5e0222a16fdaa8112d418aed97888ce5994a04f3f0639402bcc6ad9d10500df->enter($__internal_a5e0222a16fdaa8112d418aed97888ce5994a04f3f0639402bcc6ad9d10500df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_a5e0222a16fdaa8112d418aed97888ce5994a04f3f0639402bcc6ad9d10500df->leave($__internal_a5e0222a16fdaa8112d418aed97888ce5994a04f3f0639402bcc6ad9d10500df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
