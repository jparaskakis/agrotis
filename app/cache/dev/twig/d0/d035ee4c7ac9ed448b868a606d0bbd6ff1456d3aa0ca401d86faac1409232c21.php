<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_7a4f4d57e2736bb2f6a6346f50c9cc1f6c838c6f5c4fbd0974d066d997c5de93 extends Twig_Template
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
        $__internal_a7a5796cf0e40dfc1c298653457265f4781fe7a8978660022fa975c22306c6cd = $this->env->getExtension("native_profiler");
        $__internal_a7a5796cf0e40dfc1c298653457265f4781fe7a8978660022fa975c22306c6cd->enter($__internal_a7a5796cf0e40dfc1c298653457265f4781fe7a8978660022fa975c22306c6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_a7a5796cf0e40dfc1c298653457265f4781fe7a8978660022fa975c22306c6cd->leave($__internal_a7a5796cf0e40dfc1c298653457265f4781fe7a8978660022fa975c22306c6cd_prof);

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
