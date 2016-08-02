<?php

/* base.html.twig */
class __TwigTemplate_00e76056d59b5d3f733f2c084f393262181479e8f808415f78e9150a7c462a9c extends Twig_Template
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
        $__internal_d1c5a8cacfc2c4a330e7c95f96e3a0f2ef9e1d480a11b0319c4263ce065aad5f = $this->env->getExtension("native_profiler");
        $__internal_d1c5a8cacfc2c4a330e7c95f96e3a0f2ef9e1d480a11b0319c4263ce065aad5f->enter($__internal_d1c5a8cacfc2c4a330e7c95f96e3a0f2ef9e1d480a11b0319c4263ce065aad5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d1c5a8cacfc2c4a330e7c95f96e3a0f2ef9e1d480a11b0319c4263ce065aad5f->leave($__internal_d1c5a8cacfc2c4a330e7c95f96e3a0f2ef9e1d480a11b0319c4263ce065aad5f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_573c2af3a19fab7d3c4fa21d5e12b8284d5c8bb0481ddafc70447abe79d6b97e = $this->env->getExtension("native_profiler");
        $__internal_573c2af3a19fab7d3c4fa21d5e12b8284d5c8bb0481ddafc70447abe79d6b97e->enter($__internal_573c2af3a19fab7d3c4fa21d5e12b8284d5c8bb0481ddafc70447abe79d6b97e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_573c2af3a19fab7d3c4fa21d5e12b8284d5c8bb0481ddafc70447abe79d6b97e->leave($__internal_573c2af3a19fab7d3c4fa21d5e12b8284d5c8bb0481ddafc70447abe79d6b97e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_595db79182341d1f954d8b6f3d8900b60f577e0ae70cbe4225034965dceaacab = $this->env->getExtension("native_profiler");
        $__internal_595db79182341d1f954d8b6f3d8900b60f577e0ae70cbe4225034965dceaacab->enter($__internal_595db79182341d1f954d8b6f3d8900b60f577e0ae70cbe4225034965dceaacab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_595db79182341d1f954d8b6f3d8900b60f577e0ae70cbe4225034965dceaacab->leave($__internal_595db79182341d1f954d8b6f3d8900b60f577e0ae70cbe4225034965dceaacab_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_55a49c618622238486d7402fc2984f2e160fbe7ade5c916c752b76df476de5e6 = $this->env->getExtension("native_profiler");
        $__internal_55a49c618622238486d7402fc2984f2e160fbe7ade5c916c752b76df476de5e6->enter($__internal_55a49c618622238486d7402fc2984f2e160fbe7ade5c916c752b76df476de5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_55a49c618622238486d7402fc2984f2e160fbe7ade5c916c752b76df476de5e6->leave($__internal_55a49c618622238486d7402fc2984f2e160fbe7ade5c916c752b76df476de5e6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_402e9d66be5f82ce3d079a90b84b330ce5c47ed19698782755cdf4fddb5a5a97 = $this->env->getExtension("native_profiler");
        $__internal_402e9d66be5f82ce3d079a90b84b330ce5c47ed19698782755cdf4fddb5a5a97->enter($__internal_402e9d66be5f82ce3d079a90b84b330ce5c47ed19698782755cdf4fddb5a5a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_402e9d66be5f82ce3d079a90b84b330ce5c47ed19698782755cdf4fddb5a5a97->leave($__internal_402e9d66be5f82ce3d079a90b84b330ce5c47ed19698782755cdf4fddb5a5a97_prof);

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
