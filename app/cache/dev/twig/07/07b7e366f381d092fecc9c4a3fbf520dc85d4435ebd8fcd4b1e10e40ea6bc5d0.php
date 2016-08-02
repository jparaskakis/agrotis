<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_3b8a3f8f1caadfa0a13f720f3ce2bf120735ca6c83218f277999124269c6c99f extends Twig_Template
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
        $__internal_b707adabd7ee58f1ab4057863f0087db3073c447ec43281744936df69ce80bb8 = $this->env->getExtension("native_profiler");
        $__internal_b707adabd7ee58f1ab4057863f0087db3073c447ec43281744936df69ce80bb8->enter($__internal_b707adabd7ee58f1ab4057863f0087db3073c447ec43281744936df69ce80bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b707adabd7ee58f1ab4057863f0087db3073c447ec43281744936df69ce80bb8->leave($__internal_b707adabd7ee58f1ab4057863f0087db3073c447ec43281744936df69ce80bb8_prof);

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
