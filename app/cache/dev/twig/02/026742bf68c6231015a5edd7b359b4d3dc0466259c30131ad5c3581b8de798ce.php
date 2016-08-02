<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_363c583264c9240b3bf5a4c2a22cf8cda184e76ef702ac67b819674aa6515f23 extends Twig_Template
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
        $__internal_698b8f575a5cefbe5e46e8af4e4a72984aca33df658e9bc99bf836a212f93965 = $this->env->getExtension("native_profiler");
        $__internal_698b8f575a5cefbe5e46e8af4e4a72984aca33df658e9bc99bf836a212f93965->enter($__internal_698b8f575a5cefbe5e46e8af4e4a72984aca33df658e9bc99bf836a212f93965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_698b8f575a5cefbe5e46e8af4e4a72984aca33df658e9bc99bf836a212f93965->leave($__internal_698b8f575a5cefbe5e46e8af4e4a72984aca33df658e9bc99bf836a212f93965_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
