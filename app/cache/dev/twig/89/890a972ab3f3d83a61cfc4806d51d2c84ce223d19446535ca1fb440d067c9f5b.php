<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_792c7944eb4615c18d542a260c503b73c010b0a4a2e9db02e049fca68847fb70 extends Twig_Template
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
        $__internal_d9b55cda7aabe3ff68442aff40b9cfaa1bacae121de1945351b1f11ea89b914e = $this->env->getExtension("native_profiler");
        $__internal_d9b55cda7aabe3ff68442aff40b9cfaa1bacae121de1945351b1f11ea89b914e->enter($__internal_d9b55cda7aabe3ff68442aff40b9cfaa1bacae121de1945351b1f11ea89b914e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d9b55cda7aabe3ff68442aff40b9cfaa1bacae121de1945351b1f11ea89b914e->leave($__internal_d9b55cda7aabe3ff68442aff40b9cfaa1bacae121de1945351b1f11ea89b914e_prof);

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
