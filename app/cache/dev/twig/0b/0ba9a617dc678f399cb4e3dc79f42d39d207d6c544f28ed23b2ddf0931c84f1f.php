<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_bcf65d0b94ac1d454a01399127fc7758aa79c5db195bc417b55ad7f06c9799cf extends Twig_Template
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
        $__internal_a1268cf90e6b8586a555e4f7a2f9e4d915864db72a6abbb209c29b29d3a01fa0 = $this->env->getExtension("native_profiler");
        $__internal_a1268cf90e6b8586a555e4f7a2f9e4d915864db72a6abbb209c29b29d3a01fa0->enter($__internal_a1268cf90e6b8586a555e4f7a2f9e4d915864db72a6abbb209c29b29d3a01fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a1268cf90e6b8586a555e4f7a2f9e4d915864db72a6abbb209c29b29d3a01fa0->leave($__internal_a1268cf90e6b8586a555e4f7a2f9e4d915864db72a6abbb209c29b29d3a01fa0_prof);

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
