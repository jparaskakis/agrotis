<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_8ab964abd53a86406ce0a61f1bf5ad2a597ce19aef46d8a11f4ef6e5c95bf5bc extends Twig_Template
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
        $__internal_950e2541d8bb9a6a4c13cfd2ca537472133605530be33e20dbc98483ef20919f = $this->env->getExtension("native_profiler");
        $__internal_950e2541d8bb9a6a4c13cfd2ca537472133605530be33e20dbc98483ef20919f->enter($__internal_950e2541d8bb9a6a4c13cfd2ca537472133605530be33e20dbc98483ef20919f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_950e2541d8bb9a6a4c13cfd2ca537472133605530be33e20dbc98483ef20919f->leave($__internal_950e2541d8bb9a6a4c13cfd2ca537472133605530be33e20dbc98483ef20919f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
