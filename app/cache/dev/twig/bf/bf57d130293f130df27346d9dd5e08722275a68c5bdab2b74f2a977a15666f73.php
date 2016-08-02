<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_64f6ab24a18dd60116493a054f04e83232df4b2c33a529b12ef54ef760976ba2 extends Twig_Template
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
        $__internal_ac50bef01d8a9b6f076bfc7951e8c3f64c31218aabb70fcd6863698aa29f98ec = $this->env->getExtension("native_profiler");
        $__internal_ac50bef01d8a9b6f076bfc7951e8c3f64c31218aabb70fcd6863698aa29f98ec->enter($__internal_ac50bef01d8a9b6f076bfc7951e8c3f64c31218aabb70fcd6863698aa29f98ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_ac50bef01d8a9b6f076bfc7951e8c3f64c31218aabb70fcd6863698aa29f98ec->leave($__internal_ac50bef01d8a9b6f076bfc7951e8c3f64c31218aabb70fcd6863698aa29f98ec_prof);

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
