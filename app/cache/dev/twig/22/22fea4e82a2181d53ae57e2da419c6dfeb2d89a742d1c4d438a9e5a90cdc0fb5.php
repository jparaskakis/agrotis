<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_6591b00aaa8749b647960c1e7b3df9c67e7c8e3c6d53637878d16049e6252873 extends Twig_Template
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
        $__internal_a2e9eaedc46e087bf4b6ea9880f581a05f61b6ca6af56965489af928acf0834f = $this->env->getExtension("native_profiler");
        $__internal_a2e9eaedc46e087bf4b6ea9880f581a05f61b6ca6af56965489af928acf0834f->enter($__internal_a2e9eaedc46e087bf4b6ea9880f581a05f61b6ca6af56965489af928acf0834f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a2e9eaedc46e087bf4b6ea9880f581a05f61b6ca6af56965489af928acf0834f->leave($__internal_a2e9eaedc46e087bf4b6ea9880f581a05f61b6ca6af56965489af928acf0834f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
