<?php

/* ::base.html.twig */
class __TwigTemplate_013f1cf3180ec6592996b35dcc90dd24228152b49469460005caeb902bc19c57 extends Twig_Template
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
        $__internal_99f3f183aff0061630f8f07951c77e9b0bceb6aba081ade6c9571a51e8c710cb = $this->env->getExtension("native_profiler");
        $__internal_99f3f183aff0061630f8f07951c77e9b0bceb6aba081ade6c9571a51e8c710cb->enter($__internal_99f3f183aff0061630f8f07951c77e9b0bceb6aba081ade6c9571a51e8c710cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_99f3f183aff0061630f8f07951c77e9b0bceb6aba081ade6c9571a51e8c710cb->leave($__internal_99f3f183aff0061630f8f07951c77e9b0bceb6aba081ade6c9571a51e8c710cb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0bd1e91d5c011c4fdf291949f21240e4ac9b4f4f0de89675814fe6a0aae3517f = $this->env->getExtension("native_profiler");
        $__internal_0bd1e91d5c011c4fdf291949f21240e4ac9b4f4f0de89675814fe6a0aae3517f->enter($__internal_0bd1e91d5c011c4fdf291949f21240e4ac9b4f4f0de89675814fe6a0aae3517f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0bd1e91d5c011c4fdf291949f21240e4ac9b4f4f0de89675814fe6a0aae3517f->leave($__internal_0bd1e91d5c011c4fdf291949f21240e4ac9b4f4f0de89675814fe6a0aae3517f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_527f4f71369970908b19265b010d59699b9197222c85f554fba86bf9e04fc09d = $this->env->getExtension("native_profiler");
        $__internal_527f4f71369970908b19265b010d59699b9197222c85f554fba86bf9e04fc09d->enter($__internal_527f4f71369970908b19265b010d59699b9197222c85f554fba86bf9e04fc09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_527f4f71369970908b19265b010d59699b9197222c85f554fba86bf9e04fc09d->leave($__internal_527f4f71369970908b19265b010d59699b9197222c85f554fba86bf9e04fc09d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6b3024337019c7ee38b5aa5dfb9ef312060b392cef77847e378f6c403cbcf6e = $this->env->getExtension("native_profiler");
        $__internal_d6b3024337019c7ee38b5aa5dfb9ef312060b392cef77847e378f6c403cbcf6e->enter($__internal_d6b3024337019c7ee38b5aa5dfb9ef312060b392cef77847e378f6c403cbcf6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d6b3024337019c7ee38b5aa5dfb9ef312060b392cef77847e378f6c403cbcf6e->leave($__internal_d6b3024337019c7ee38b5aa5dfb9ef312060b392cef77847e378f6c403cbcf6e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_57111c6e039317e8d4eb82ccc091dda9c63c63c8f3ca1ea6f43fa08e6232d714 = $this->env->getExtension("native_profiler");
        $__internal_57111c6e039317e8d4eb82ccc091dda9c63c63c8f3ca1ea6f43fa08e6232d714->enter($__internal_57111c6e039317e8d4eb82ccc091dda9c63c63c8f3ca1ea6f43fa08e6232d714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_57111c6e039317e8d4eb82ccc091dda9c63c63c8f3ca1ea6f43fa08e6232d714->leave($__internal_57111c6e039317e8d4eb82ccc091dda9c63c63c8f3ca1ea6f43fa08e6232d714_prof);

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
