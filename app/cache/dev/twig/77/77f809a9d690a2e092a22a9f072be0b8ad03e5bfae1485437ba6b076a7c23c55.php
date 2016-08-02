<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_a2f98e65ccbdd50486408427a3c09da73fd71b0babb5da67ef2ece75f1a21d21 extends Twig_Template
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
        $__internal_e3dee5a54852aac8a6faa821fd180fac4933e82877072674be417affb8c3c541 = $this->env->getExtension("native_profiler");
        $__internal_e3dee5a54852aac8a6faa821fd180fac4933e82877072674be417affb8c3c541->enter($__internal_e3dee5a54852aac8a6faa821fd180fac4933e82877072674be417affb8c3c541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_e3dee5a54852aac8a6faa821fd180fac4933e82877072674be417affb8c3c541->leave($__internal_e3dee5a54852aac8a6faa821fd180fac4933e82877072674be417affb8c3c541_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
