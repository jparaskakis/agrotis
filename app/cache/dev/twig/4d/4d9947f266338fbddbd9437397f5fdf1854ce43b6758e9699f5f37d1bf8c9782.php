<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_195cbfd0633ed9887c79f1ef82b03bf67165f8d27b7cb09dbb07bca9e4869341 extends Twig_Template
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
        $__internal_e1be8f5600193d82aeda25af98e4f9a35a227e7b359efe8038649ab674250f32 = $this->env->getExtension("native_profiler");
        $__internal_e1be8f5600193d82aeda25af98e4f9a35a227e7b359efe8038649ab674250f32->enter($__internal_e1be8f5600193d82aeda25af98e4f9a35a227e7b359efe8038649ab674250f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e1be8f5600193d82aeda25af98e4f9a35a227e7b359efe8038649ab674250f32->leave($__internal_e1be8f5600193d82aeda25af98e4f9a35a227e7b359efe8038649ab674250f32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
