<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_54dbc44606e3b465e3c245a5b8404fea31f473609ff80e8cedf3299f4ad9b752 extends Twig_Template
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
        $__internal_61a66bda1b68f009bc581af4d1b62d747ee73dc5235d83e33679c3216b68c185 = $this->env->getExtension("native_profiler");
        $__internal_61a66bda1b68f009bc581af4d1b62d747ee73dc5235d83e33679c3216b68c185->enter($__internal_61a66bda1b68f009bc581af4d1b62d747ee73dc5235d83e33679c3216b68c185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_61a66bda1b68f009bc581af4d1b62d747ee73dc5235d83e33679c3216b68c185->leave($__internal_61a66bda1b68f009bc581af4d1b62d747ee73dc5235d83e33679c3216b68c185_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
