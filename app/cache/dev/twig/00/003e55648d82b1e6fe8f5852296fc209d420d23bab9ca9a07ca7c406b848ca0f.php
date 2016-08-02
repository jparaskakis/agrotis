<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b0f87fa3ba20b35f54ea7fab1246a165c0914c449e0a8df599b83ca9774ec4a4 extends Twig_Template
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
        $__internal_45bf19b92f606321266b427062ebe9d3e1c59ecf246ea9eeac123e208a56c40f = $this->env->getExtension("native_profiler");
        $__internal_45bf19b92f606321266b427062ebe9d3e1c59ecf246ea9eeac123e208a56c40f->enter($__internal_45bf19b92f606321266b427062ebe9d3e1c59ecf246ea9eeac123e208a56c40f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_45bf19b92f606321266b427062ebe9d3e1c59ecf246ea9eeac123e208a56c40f->leave($__internal_45bf19b92f606321266b427062ebe9d3e1c59ecf246ea9eeac123e208a56c40f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
