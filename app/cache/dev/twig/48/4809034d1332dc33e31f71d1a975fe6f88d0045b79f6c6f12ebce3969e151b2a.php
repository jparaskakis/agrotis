<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_9de11e347da2070ec0d020c525bbfbd31f8e41f9cc3628589c74261deeffcba1 extends Twig_Template
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
        $__internal_bc6b469ed46f17560a50a0288e93f9f913769f1585dfb8e9b092f77381c24a6c = $this->env->getExtension("native_profiler");
        $__internal_bc6b469ed46f17560a50a0288e93f9f913769f1585dfb8e9b092f77381c24a6c->enter($__internal_bc6b469ed46f17560a50a0288e93f9f913769f1585dfb8e9b092f77381c24a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_bc6b469ed46f17560a50a0288e93f9f913769f1585dfb8e9b092f77381c24a6c->leave($__internal_bc6b469ed46f17560a50a0288e93f9f913769f1585dfb8e9b092f77381c24a6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
