<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_3e3da222cd28649df492b55ab02e4e278f4cf4abc394a4fe37f12887ed9b605d extends Twig_Template
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
        $__internal_24ad197a74ab484f681eb52fc1cdbeaabd9facc7cbf4d2e093f7a3474a8fbc08 = $this->env->getExtension("native_profiler");
        $__internal_24ad197a74ab484f681eb52fc1cdbeaabd9facc7cbf4d2e093f7a3474a8fbc08->enter($__internal_24ad197a74ab484f681eb52fc1cdbeaabd9facc7cbf4d2e093f7a3474a8fbc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_24ad197a74ab484f681eb52fc1cdbeaabd9facc7cbf4d2e093f7a3474a8fbc08->leave($__internal_24ad197a74ab484f681eb52fc1cdbeaabd9facc7cbf4d2e093f7a3474a8fbc08_prof);

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
