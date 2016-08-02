<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_714265c36fa3e5f36118ae6cf2e02799e0ad79fd9de39880a5179f6129312277 extends Twig_Template
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
        $__internal_ddb9e8e3029e59f9f049b372cdc52074d7c8d66e4dcb5728d70772b91349e3d6 = $this->env->getExtension("native_profiler");
        $__internal_ddb9e8e3029e59f9f049b372cdc52074d7c8d66e4dcb5728d70772b91349e3d6->enter($__internal_ddb9e8e3029e59f9f049b372cdc52074d7c8d66e4dcb5728d70772b91349e3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ddb9e8e3029e59f9f049b372cdc52074d7c8d66e4dcb5728d70772b91349e3d6->leave($__internal_ddb9e8e3029e59f9f049b372cdc52074d7c8d66e4dcb5728d70772b91349e3d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
