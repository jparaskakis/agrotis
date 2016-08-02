<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_a61d379b202c13008145d65e844f1a920792b96440f01227fb4f3662d82e7157 extends Twig_Template
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
        $__internal_03a6f5fec8d4796c89887253063f78033bf15f63a8f9f985702d311d6c93d388 = $this->env->getExtension("native_profiler");
        $__internal_03a6f5fec8d4796c89887253063f78033bf15f63a8f9f985702d311d6c93d388->enter($__internal_03a6f5fec8d4796c89887253063f78033bf15f63a8f9f985702d311d6c93d388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_03a6f5fec8d4796c89887253063f78033bf15f63a8f9f985702d311d6c93d388->leave($__internal_03a6f5fec8d4796c89887253063f78033bf15f63a8f9f985702d311d6c93d388_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
