<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_e0ad41ef3ec65d0092907cae9bf2a9a1f55f3dd5bae5a4f29394634820820cee extends Twig_Template
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
        $__internal_eaa0b55bac9a92d644712e289dbe0eaa39f33eb610a7657ecf0da1094f0f4949 = $this->env->getExtension("native_profiler");
        $__internal_eaa0b55bac9a92d644712e289dbe0eaa39f33eb610a7657ecf0da1094f0f4949->enter($__internal_eaa0b55bac9a92d644712e289dbe0eaa39f33eb610a7657ecf0da1094f0f4949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_eaa0b55bac9a92d644712e289dbe0eaa39f33eb610a7657ecf0da1094f0f4949->leave($__internal_eaa0b55bac9a92d644712e289dbe0eaa39f33eb610a7657ecf0da1094f0f4949_prof);

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
