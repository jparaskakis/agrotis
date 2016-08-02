<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_965d37c2cd368973e8f48bc2a61e932e02497e4264b26864f61203ba2aab1eb6 extends Twig_Template
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
        $__internal_6e4e138015007c9fd5f788a20cb93298f5ded1e26f5804986d91888d064ba1b9 = $this->env->getExtension("native_profiler");
        $__internal_6e4e138015007c9fd5f788a20cb93298f5ded1e26f5804986d91888d064ba1b9->enter($__internal_6e4e138015007c9fd5f788a20cb93298f5ded1e26f5804986d91888d064ba1b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6e4e138015007c9fd5f788a20cb93298f5ded1e26f5804986d91888d064ba1b9->leave($__internal_6e4e138015007c9fd5f788a20cb93298f5ded1e26f5804986d91888d064ba1b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
