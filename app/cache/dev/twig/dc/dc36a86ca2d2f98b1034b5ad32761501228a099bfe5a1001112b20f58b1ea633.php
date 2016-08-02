<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_657b0805c90d1955358a36ddf32cfe993b2cc4043fb355666f725b1d93d3f5f4 extends Twig_Template
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
        $__internal_a146da04b44fec7bf1b3a2b35334be45e2a845d676d65ea0c620abf7fba54225 = $this->env->getExtension("native_profiler");
        $__internal_a146da04b44fec7bf1b3a2b35334be45e2a845d676d65ea0c620abf7fba54225->enter($__internal_a146da04b44fec7bf1b3a2b35334be45e2a845d676d65ea0c620abf7fba54225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_a146da04b44fec7bf1b3a2b35334be45e2a845d676d65ea0c620abf7fba54225->leave($__internal_a146da04b44fec7bf1b3a2b35334be45e2a845d676d65ea0c620abf7fba54225_prof);

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
