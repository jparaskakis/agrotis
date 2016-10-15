<?php

/* base.html.twig */
class __TwigTemplate_d8ccb236625202aeebb556ca7f1946b09d00fb7113b14e25c4dc61d016c90c2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77bb9ca85648887f48712fcb9451996547b56b9649dc2fd3f1360602a7fd2c74 = $this->env->getExtension("native_profiler");
        $__internal_77bb9ca85648887f48712fcb9451996547b56b9649dc2fd3f1360602a7fd2c74->enter($__internal_77bb9ca85648887f48712fcb9451996547b56b9649dc2fd3f1360602a7fd2c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_77bb9ca85648887f48712fcb9451996547b56b9649dc2fd3f1360602a7fd2c74->leave($__internal_77bb9ca85648887f48712fcb9451996547b56b9649dc2fd3f1360602a7fd2c74_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b8b3be2cbdda4e35affc8be68bb3f480daabf4f82bc709892aa3a3c607c1a1d = $this->env->getExtension("native_profiler");
        $__internal_0b8b3be2cbdda4e35affc8be68bb3f480daabf4f82bc709892aa3a3c607c1a1d->enter($__internal_0b8b3be2cbdda4e35affc8be68bb3f480daabf4f82bc709892aa3a3c607c1a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0b8b3be2cbdda4e35affc8be68bb3f480daabf4f82bc709892aa3a3c607c1a1d->leave($__internal_0b8b3be2cbdda4e35affc8be68bb3f480daabf4f82bc709892aa3a3c607c1a1d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b18c39ab608ff76698aa7e22518991b1bb5e5dc855c872d10caf22dcf7ca066e = $this->env->getExtension("native_profiler");
        $__internal_b18c39ab608ff76698aa7e22518991b1bb5e5dc855c872d10caf22dcf7ca066e->enter($__internal_b18c39ab608ff76698aa7e22518991b1bb5e5dc855c872d10caf22dcf7ca066e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b18c39ab608ff76698aa7e22518991b1bb5e5dc855c872d10caf22dcf7ca066e->leave($__internal_b18c39ab608ff76698aa7e22518991b1bb5e5dc855c872d10caf22dcf7ca066e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2438e2eecb2fbcce78dac97d7bcfcdbeaf1d171561c8ef415e2ba7727a923e6e = $this->env->getExtension("native_profiler");
        $__internal_2438e2eecb2fbcce78dac97d7bcfcdbeaf1d171561c8ef415e2ba7727a923e6e->enter($__internal_2438e2eecb2fbcce78dac97d7bcfcdbeaf1d171561c8ef415e2ba7727a923e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2438e2eecb2fbcce78dac97d7bcfcdbeaf1d171561c8ef415e2ba7727a923e6e->leave($__internal_2438e2eecb2fbcce78dac97d7bcfcdbeaf1d171561c8ef415e2ba7727a923e6e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5232b15407997c062db57dfec79cafd3ae461e2d04d35dbd32f8ca6311401405 = $this->env->getExtension("native_profiler");
        $__internal_5232b15407997c062db57dfec79cafd3ae461e2d04d35dbd32f8ca6311401405->enter($__internal_5232b15407997c062db57dfec79cafd3ae461e2d04d35dbd32f8ca6311401405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5232b15407997c062db57dfec79cafd3ae461e2d04d35dbd32f8ca6311401405->leave($__internal_5232b15407997c062db57dfec79cafd3ae461e2d04d35dbd32f8ca6311401405_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
