<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_27296933a409025e05d17ad5c04059e0c6296063815a609ed6643c7fe8e93f0f extends Twig_Template
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
        $__internal_0ba708d61df5ea5730b8fe69235e534fb290f94f0dedfc0e98ffe2345d556fcc = $this->env->getExtension("native_profiler");
        $__internal_0ba708d61df5ea5730b8fe69235e534fb290f94f0dedfc0e98ffe2345d556fcc->enter($__internal_0ba708d61df5ea5730b8fe69235e534fb290f94f0dedfc0e98ffe2345d556fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_0ba708d61df5ea5730b8fe69235e534fb290f94f0dedfc0e98ffe2345d556fcc->leave($__internal_0ba708d61df5ea5730b8fe69235e534fb290f94f0dedfc0e98ffe2345d556fcc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
