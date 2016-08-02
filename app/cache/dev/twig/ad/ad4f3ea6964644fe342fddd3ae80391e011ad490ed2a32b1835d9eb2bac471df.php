<?php

/* base.html.twig */
class __TwigTemplate_efe76250ec76908d9f9abe9d2e80a1eb211b15aaab8d5a6de00ce9c0c2323f92 extends Twig_Template
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
        $__internal_8a193044d90a21a8931e5e30dcd8f56500596f5fb26d0a898a38e34f1ddf930f = $this->env->getExtension("native_profiler");
        $__internal_8a193044d90a21a8931e5e30dcd8f56500596f5fb26d0a898a38e34f1ddf930f->enter($__internal_8a193044d90a21a8931e5e30dcd8f56500596f5fb26d0a898a38e34f1ddf930f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8a193044d90a21a8931e5e30dcd8f56500596f5fb26d0a898a38e34f1ddf930f->leave($__internal_8a193044d90a21a8931e5e30dcd8f56500596f5fb26d0a898a38e34f1ddf930f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c60f0db51c930a5ce8aa551f8071570ed0bd4bb2fba54a6af64ae5ec1589ad2 = $this->env->getExtension("native_profiler");
        $__internal_8c60f0db51c930a5ce8aa551f8071570ed0bd4bb2fba54a6af64ae5ec1589ad2->enter($__internal_8c60f0db51c930a5ce8aa551f8071570ed0bd4bb2fba54a6af64ae5ec1589ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8c60f0db51c930a5ce8aa551f8071570ed0bd4bb2fba54a6af64ae5ec1589ad2->leave($__internal_8c60f0db51c930a5ce8aa551f8071570ed0bd4bb2fba54a6af64ae5ec1589ad2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_193f881fe389906dd9a1824d1a4ebd922a56675d8789a4c65592ff9974abc438 = $this->env->getExtension("native_profiler");
        $__internal_193f881fe389906dd9a1824d1a4ebd922a56675d8789a4c65592ff9974abc438->enter($__internal_193f881fe389906dd9a1824d1a4ebd922a56675d8789a4c65592ff9974abc438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_193f881fe389906dd9a1824d1a4ebd922a56675d8789a4c65592ff9974abc438->leave($__internal_193f881fe389906dd9a1824d1a4ebd922a56675d8789a4c65592ff9974abc438_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee1fb1fa37a704ed4873701b4412bd3b4e190022f4e1998eefc8311a657cb0a9 = $this->env->getExtension("native_profiler");
        $__internal_ee1fb1fa37a704ed4873701b4412bd3b4e190022f4e1998eefc8311a657cb0a9->enter($__internal_ee1fb1fa37a704ed4873701b4412bd3b4e190022f4e1998eefc8311a657cb0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ee1fb1fa37a704ed4873701b4412bd3b4e190022f4e1998eefc8311a657cb0a9->leave($__internal_ee1fb1fa37a704ed4873701b4412bd3b4e190022f4e1998eefc8311a657cb0a9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b2e73a61768b6e46881bd27a6a1b223bd317024d8b02054323870f082ca33f0f = $this->env->getExtension("native_profiler");
        $__internal_b2e73a61768b6e46881bd27a6a1b223bd317024d8b02054323870f082ca33f0f->enter($__internal_b2e73a61768b6e46881bd27a6a1b223bd317024d8b02054323870f082ca33f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b2e73a61768b6e46881bd27a6a1b223bd317024d8b02054323870f082ca33f0f->leave($__internal_b2e73a61768b6e46881bd27a6a1b223bd317024d8b02054323870f082ca33f0f_prof);

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
