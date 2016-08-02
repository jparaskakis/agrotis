<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_d88e24c6ea0329338c347711f688abb85bfbd7b33c93e62757f7cb8369b0e7a3 extends Twig_Template
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
        $__internal_1172037cf8ab678ee83ebc135cf558380f03cbb673da4e3d4f779f5bdaedbfba = $this->env->getExtension("native_profiler");
        $__internal_1172037cf8ab678ee83ebc135cf558380f03cbb673da4e3d4f779f5bdaedbfba->enter($__internal_1172037cf8ab678ee83ebc135cf558380f03cbb673da4e3d4f779f5bdaedbfba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_1172037cf8ab678ee83ebc135cf558380f03cbb673da4e3d4f779f5bdaedbfba->leave($__internal_1172037cf8ab678ee83ebc135cf558380f03cbb673da4e3d4f779f5bdaedbfba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
