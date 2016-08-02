<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_53f24b767b31960ac9b3ae6a8a8ee23358203d2ad75283bb23d226d1141f45b0 extends Twig_Template
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
        $__internal_a9ad08f6a842d86b65a6651d1d7b82303f03b76b9f61766649b420ddb740836a = $this->env->getExtension("native_profiler");
        $__internal_a9ad08f6a842d86b65a6651d1d7b82303f03b76b9f61766649b420ddb740836a->enter($__internal_a9ad08f6a842d86b65a6651d1d7b82303f03b76b9f61766649b420ddb740836a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a9ad08f6a842d86b65a6651d1d7b82303f03b76b9f61766649b420ddb740836a->leave($__internal_a9ad08f6a842d86b65a6651d1d7b82303f03b76b9f61766649b420ddb740836a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
