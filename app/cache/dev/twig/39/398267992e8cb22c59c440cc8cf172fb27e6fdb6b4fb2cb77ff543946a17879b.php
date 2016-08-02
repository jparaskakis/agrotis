<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_4f4c1de687b5d5b63b102826f12564402a87f7ceedc000a4e272bf05cf930a9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_abb276a1aca19f56ed90484a6473db616ab010312550782208356b78efa2e61f = $this->env->getExtension("native_profiler");
        $__internal_abb276a1aca19f56ed90484a6473db616ab010312550782208356b78efa2e61f->enter($__internal_abb276a1aca19f56ed90484a6473db616ab010312550782208356b78efa2e61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abb276a1aca19f56ed90484a6473db616ab010312550782208356b78efa2e61f->leave($__internal_abb276a1aca19f56ed90484a6473db616ab010312550782208356b78efa2e61f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f68de6d4bcf1466d9c20c4cd0e47d982a42d803d32155e2cb43f755f17cbdabe = $this->env->getExtension("native_profiler");
        $__internal_f68de6d4bcf1466d9c20c4cd0e47d982a42d803d32155e2cb43f755f17cbdabe->enter($__internal_f68de6d4bcf1466d9c20c4cd0e47d982a42d803d32155e2cb43f755f17cbdabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f68de6d4bcf1466d9c20c4cd0e47d982a42d803d32155e2cb43f755f17cbdabe->leave($__internal_f68de6d4bcf1466d9c20c4cd0e47d982a42d803d32155e2cb43f755f17cbdabe_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
