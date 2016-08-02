<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_65179792b59dd055c9a5b01dd3178d406ce4e86a1e118d167a9fca5d62ff3c1d extends Twig_Template
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
        $__internal_1c2241b776faefb1b48e818f9fb73f309056636afcbc6bc53a983928938eb4fa = $this->env->getExtension("native_profiler");
        $__internal_1c2241b776faefb1b48e818f9fb73f309056636afcbc6bc53a983928938eb4fa->enter($__internal_1c2241b776faefb1b48e818f9fb73f309056636afcbc6bc53a983928938eb4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1c2241b776faefb1b48e818f9fb73f309056636afcbc6bc53a983928938eb4fa->leave($__internal_1c2241b776faefb1b48e818f9fb73f309056636afcbc6bc53a983928938eb4fa_prof);

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
