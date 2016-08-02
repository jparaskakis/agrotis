<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_57dc43b1fcccbe58f774b23ba633600d3825d275106f3690bd67fed557931302 extends Twig_Template
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
        $__internal_901aa05782a7a45e455a85886518322a692ebf4488629289e94a20a9a9f62f0f = $this->env->getExtension("native_profiler");
        $__internal_901aa05782a7a45e455a85886518322a692ebf4488629289e94a20a9a9f62f0f->enter($__internal_901aa05782a7a45e455a85886518322a692ebf4488629289e94a20a9a9f62f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_901aa05782a7a45e455a85886518322a692ebf4488629289e94a20a9a9f62f0f->leave($__internal_901aa05782a7a45e455a85886518322a692ebf4488629289e94a20a9a9f62f0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
