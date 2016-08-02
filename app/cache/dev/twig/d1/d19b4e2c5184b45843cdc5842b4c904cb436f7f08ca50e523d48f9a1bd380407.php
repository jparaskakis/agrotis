<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_cfd6ec3aa156fba30244aeb82cdde5e34e3de60f104423844fe7b804b7e7de1b extends Twig_Template
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
        $__internal_4efc58159f381bac5fe7648c0455534ce639e56a1163fa60ef28ed2cc4e367f5 = $this->env->getExtension("native_profiler");
        $__internal_4efc58159f381bac5fe7648c0455534ce639e56a1163fa60ef28ed2cc4e367f5->enter($__internal_4efc58159f381bac5fe7648c0455534ce639e56a1163fa60ef28ed2cc4e367f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_4efc58159f381bac5fe7648c0455534ce639e56a1163fa60ef28ed2cc4e367f5->leave($__internal_4efc58159f381bac5fe7648c0455534ce639e56a1163fa60ef28ed2cc4e367f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
