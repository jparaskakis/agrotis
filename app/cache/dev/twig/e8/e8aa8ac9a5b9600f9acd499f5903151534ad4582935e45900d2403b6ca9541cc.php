<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_251dc628df981600bc6725295b4a1f3f940b5c4ccffa289deeae058ee663f613 extends Twig_Template
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
        $__internal_1b27e59148692bd8a8e1c55becd564b3eee5a189921c03232958a3c2764d05c1 = $this->env->getExtension("native_profiler");
        $__internal_1b27e59148692bd8a8e1c55becd564b3eee5a189921c03232958a3c2764d05c1->enter($__internal_1b27e59148692bd8a8e1c55becd564b3eee5a189921c03232958a3c2764d05c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_1b27e59148692bd8a8e1c55becd564b3eee5a189921c03232958a3c2764d05c1->leave($__internal_1b27e59148692bd8a8e1c55becd564b3eee5a189921c03232958a3c2764d05c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
