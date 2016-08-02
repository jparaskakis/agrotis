<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b6180976b8f6b5f826a5d66c92462a03ae6a40715449593001a0b358b975f4a3 extends Twig_Template
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
        $__internal_4ba7ff640ad0e0be37c6229906b88f96cfff612d9acc5cb7ad3fa98edabba041 = $this->env->getExtension("native_profiler");
        $__internal_4ba7ff640ad0e0be37c6229906b88f96cfff612d9acc5cb7ad3fa98edabba041->enter($__internal_4ba7ff640ad0e0be37c6229906b88f96cfff612d9acc5cb7ad3fa98edabba041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_4ba7ff640ad0e0be37c6229906b88f96cfff612d9acc5cb7ad3fa98edabba041->leave($__internal_4ba7ff640ad0e0be37c6229906b88f96cfff612d9acc5cb7ad3fa98edabba041_prof);

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
