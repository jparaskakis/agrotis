<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0c5fc7b40dcb88fe5c8d2e54fde9a88bd1ca92aea87d8106c2d8863fc7bcce8e extends Twig_Template
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
        $__internal_ed7da60bf5961c36d7c249cb576d33b5d8c1a1127841d8cdd4d3ad673a9b280c = $this->env->getExtension("native_profiler");
        $__internal_ed7da60bf5961c36d7c249cb576d33b5d8c1a1127841d8cdd4d3ad673a9b280c->enter($__internal_ed7da60bf5961c36d7c249cb576d33b5d8c1a1127841d8cdd4d3ad673a9b280c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_ed7da60bf5961c36d7c249cb576d33b5d8c1a1127841d8cdd4d3ad673a9b280c->leave($__internal_ed7da60bf5961c36d7c249cb576d33b5d8c1a1127841d8cdd4d3ad673a9b280c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
