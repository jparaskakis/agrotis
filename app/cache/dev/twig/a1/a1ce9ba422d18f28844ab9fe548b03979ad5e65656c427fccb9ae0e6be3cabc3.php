<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d22d628ae7b5eb12fbf85eb74389ff166c4697282177eb3e90297b562927b12e extends Twig_Template
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
        $__internal_420a8f13fdb7753629d0a1f1e1a48ced7409e14d1ee27c312919bad8c52ca6d9 = $this->env->getExtension("native_profiler");
        $__internal_420a8f13fdb7753629d0a1f1e1a48ced7409e14d1ee27c312919bad8c52ca6d9->enter($__internal_420a8f13fdb7753629d0a1f1e1a48ced7409e14d1ee27c312919bad8c52ca6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_420a8f13fdb7753629d0a1f1e1a48ced7409e14d1ee27c312919bad8c52ca6d9->leave($__internal_420a8f13fdb7753629d0a1f1e1a48ced7409e14d1ee27c312919bad8c52ca6d9_prof);

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
