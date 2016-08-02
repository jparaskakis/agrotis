<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_358f8c49dd2c0561a0334940e8c67deb8ce7a3b60b5469e6681e6d0f89aa81ec extends Twig_Template
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
        $__internal_661dd6fc9214cd24cc554c590c19043bfa924fc2493f6c5f4fdb901975f7ff6d = $this->env->getExtension("native_profiler");
        $__internal_661dd6fc9214cd24cc554c590c19043bfa924fc2493f6c5f4fdb901975f7ff6d->enter($__internal_661dd6fc9214cd24cc554c590c19043bfa924fc2493f6c5f4fdb901975f7ff6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_661dd6fc9214cd24cc554c590c19043bfa924fc2493f6c5f4fdb901975f7ff6d->leave($__internal_661dd6fc9214cd24cc554c590c19043bfa924fc2493f6c5f4fdb901975f7ff6d_prof);

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
