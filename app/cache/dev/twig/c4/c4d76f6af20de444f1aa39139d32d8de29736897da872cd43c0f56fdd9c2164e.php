<?php

/* NelmioApiDocBundle::resource.html.twig */
class __TwigTemplate_55e9c44228baed2513ef9cab32bca2431092eeaeb4b9c4c2fa34366b683d35a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NelmioApiDocBundle::layout.html.twig", "NelmioApiDocBundle::resource.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NelmioApiDocBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d64a01e53a95fe4e8c7fe1dfc6ecefda53e274bd238f5dda36e351d77f380f2b = $this->env->getExtension("native_profiler");
        $__internal_d64a01e53a95fe4e8c7fe1dfc6ecefda53e274bd238f5dda36e351d77f380f2b->enter($__internal_d64a01e53a95fe4e8c7fe1dfc6ecefda53e274bd238f5dda36e351d77f380f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d64a01e53a95fe4e8c7fe1dfc6ecefda53e274bd238f5dda36e351d77f380f2b->leave($__internal_d64a01e53a95fe4e8c7fe1dfc6ecefda53e274bd238f5dda36e351d77f380f2b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d8df89a79bee271a6526e836cc64258b0d67dbd4e650ff10fd0b7850ab5ddb63 = $this->env->getExtension("native_profiler");
        $__internal_d8df89a79bee271a6526e836cc64258b0d67dbd4e650ff10fd0b7850ab5ddb63->enter($__internal_d8df89a79bee271a6526e836cc64258b0d67dbd4e650ff10fd0b7850ab5ddb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    ";
        // line 8
        $this->loadTemplate("NelmioApiDocBundle::method.html.twig", "NelmioApiDocBundle::resource.html.twig", 8)->display($context);
        // line 9
        echo "                </ul>
            </li>
        </ul>
    </li>
";
        
        $__internal_d8df89a79bee271a6526e836cc64258b0d67dbd4e650ff10fd0b7850ab5ddb63->leave($__internal_d8df89a79bee271a6526e836cc64258b0d67dbd4e650ff10fd0b7850ab5ddb63_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::resource.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "NelmioApiDocBundle::layout.html.twig" %}*/
/* */
/* {% block content %}*/
/*     <li class="resource">*/
/*         <ul class="endpoints">*/
/*             <li class="endpoint">*/
/*                 <ul class="operations">*/
/*                     {% include 'NelmioApiDocBundle::method.html.twig' %}*/
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*     </li>*/
/* {% endblock content %}*/
/* */
