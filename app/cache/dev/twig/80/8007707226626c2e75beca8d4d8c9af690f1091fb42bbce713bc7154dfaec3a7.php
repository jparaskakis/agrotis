<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ae2433db7e264b5b146a066fd2c19506558d1508c6cc8bdc9e8c9671173c48eb extends Twig_Template
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
        $__internal_bbc28dea72f4fdac9f080de1e2d068eb048a2c1158fe99836ec84b9b23f47e55 = $this->env->getExtension("native_profiler");
        $__internal_bbc28dea72f4fdac9f080de1e2d068eb048a2c1158fe99836ec84b9b23f47e55->enter($__internal_bbc28dea72f4fdac9f080de1e2d068eb048a2c1158fe99836ec84b9b23f47e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_bbc28dea72f4fdac9f080de1e2d068eb048a2c1158fe99836ec84b9b23f47e55->leave($__internal_bbc28dea72f4fdac9f080de1e2d068eb048a2c1158fe99836ec84b9b23f47e55_prof);

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
