<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_816d7797820ec0c9bce863564b141f27d470fae46963c068859e90e373626c85 extends Twig_Template
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
        $__internal_f2df7c019ced9f4b424b436321ffb5e528de95fa4f438a0e1c9bab5b47355d16 = $this->env->getExtension("native_profiler");
        $__internal_f2df7c019ced9f4b424b436321ffb5e528de95fa4f438a0e1c9bab5b47355d16->enter($__internal_f2df7c019ced9f4b424b436321ffb5e528de95fa4f438a0e1c9bab5b47355d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f2df7c019ced9f4b424b436321ffb5e528de95fa4f438a0e1c9bab5b47355d16->leave($__internal_f2df7c019ced9f4b424b436321ffb5e528de95fa4f438a0e1c9bab5b47355d16_prof);

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
