<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_f02bdfdfa4146f1a5978a96372492e9934993921acecef5a1733ef0a02fd480f extends Twig_Template
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
        $__internal_d38911adffa690555b9905958797347aa8cb1829b5970a2b90b62bf23665d532 = $this->env->getExtension("native_profiler");
        $__internal_d38911adffa690555b9905958797347aa8cb1829b5970a2b90b62bf23665d532->enter($__internal_d38911adffa690555b9905958797347aa8cb1829b5970a2b90b62bf23665d532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_d38911adffa690555b9905958797347aa8cb1829b5970a2b90b62bf23665d532->leave($__internal_d38911adffa690555b9905958797347aa8cb1829b5970a2b90b62bf23665d532_prof);

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
