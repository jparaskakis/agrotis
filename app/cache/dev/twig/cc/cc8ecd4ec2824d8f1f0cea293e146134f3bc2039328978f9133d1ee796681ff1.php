<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_199f0280e05a95fdec2fdb9453e6ce1692c248971054e2fadf630843ad0a02d6 extends Twig_Template
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
        $__internal_ee403c4c8e96a975ff38effb4b123bb0f6e27ebed6b995fed5a263c5f76a6e33 = $this->env->getExtension("native_profiler");
        $__internal_ee403c4c8e96a975ff38effb4b123bb0f6e27ebed6b995fed5a263c5f76a6e33->enter($__internal_ee403c4c8e96a975ff38effb4b123bb0f6e27ebed6b995fed5a263c5f76a6e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_ee403c4c8e96a975ff38effb4b123bb0f6e27ebed6b995fed5a263c5f76a6e33->leave($__internal_ee403c4c8e96a975ff38effb4b123bb0f6e27ebed6b995fed5a263c5f76a6e33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
