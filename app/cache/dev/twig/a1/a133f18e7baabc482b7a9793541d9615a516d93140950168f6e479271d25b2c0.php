<?php

/* ::base.html.twig */
class __TwigTemplate_cb543584b7e014aee4b8fd5d281303a0a469386b5996cf28219495ef12ba3340 extends Twig_Template
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
        $__internal_a0f974895a77ce12646347da67522508632f302c5eb133a2a27971a9d87a65ce = $this->env->getExtension("native_profiler");
        $__internal_a0f974895a77ce12646347da67522508632f302c5eb133a2a27971a9d87a65ce->enter($__internal_a0f974895a77ce12646347da67522508632f302c5eb133a2a27971a9d87a65ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a0f974895a77ce12646347da67522508632f302c5eb133a2a27971a9d87a65ce->leave($__internal_a0f974895a77ce12646347da67522508632f302c5eb133a2a27971a9d87a65ce_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4ecff5874ac08a03c8687332d1345131abc165b20969de5f985fa51a832a365 = $this->env->getExtension("native_profiler");
        $__internal_b4ecff5874ac08a03c8687332d1345131abc165b20969de5f985fa51a832a365->enter($__internal_b4ecff5874ac08a03c8687332d1345131abc165b20969de5f985fa51a832a365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b4ecff5874ac08a03c8687332d1345131abc165b20969de5f985fa51a832a365->leave($__internal_b4ecff5874ac08a03c8687332d1345131abc165b20969de5f985fa51a832a365_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4eaa71e5cf473f40403435100b5e99cead50ddf4ea7996e1412269761af97b21 = $this->env->getExtension("native_profiler");
        $__internal_4eaa71e5cf473f40403435100b5e99cead50ddf4ea7996e1412269761af97b21->enter($__internal_4eaa71e5cf473f40403435100b5e99cead50ddf4ea7996e1412269761af97b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4eaa71e5cf473f40403435100b5e99cead50ddf4ea7996e1412269761af97b21->leave($__internal_4eaa71e5cf473f40403435100b5e99cead50ddf4ea7996e1412269761af97b21_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d74733e9a166b212a6c410a9d1eeacc58dd298ee0dd9015dae2e70d2b9bd5558 = $this->env->getExtension("native_profiler");
        $__internal_d74733e9a166b212a6c410a9d1eeacc58dd298ee0dd9015dae2e70d2b9bd5558->enter($__internal_d74733e9a166b212a6c410a9d1eeacc58dd298ee0dd9015dae2e70d2b9bd5558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d74733e9a166b212a6c410a9d1eeacc58dd298ee0dd9015dae2e70d2b9bd5558->leave($__internal_d74733e9a166b212a6c410a9d1eeacc58dd298ee0dd9015dae2e70d2b9bd5558_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_18865036efde4dad2d3740025167054937fe230ec4bf4083cd1fdeb6591d1424 = $this->env->getExtension("native_profiler");
        $__internal_18865036efde4dad2d3740025167054937fe230ec4bf4083cd1fdeb6591d1424->enter($__internal_18865036efde4dad2d3740025167054937fe230ec4bf4083cd1fdeb6591d1424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_18865036efde4dad2d3740025167054937fe230ec4bf4083cd1fdeb6591d1424->leave($__internal_18865036efde4dad2d3740025167054937fe230ec4bf4083cd1fdeb6591d1424_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
