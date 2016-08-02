<?php

/* @NelmioApiDoc/resource.html.twig */
class __TwigTemplate_e5eeeaaba4a4b64526c481476bd8a5e41e01e30b7461f69006bda0da68f17256 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NelmioApiDocBundle::layout.html.twig", "@NelmioApiDoc/resource.html.twig", 1);
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
        $__internal_fd02ceba4c0462c2a1509ee3e04a51fa96524e23aee30c4042aac721e2b91113 = $this->env->getExtension("native_profiler");
        $__internal_fd02ceba4c0462c2a1509ee3e04a51fa96524e23aee30c4042aac721e2b91113->enter($__internal_fd02ceba4c0462c2a1509ee3e04a51fa96524e23aee30c4042aac721e2b91113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NelmioApiDoc/resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd02ceba4c0462c2a1509ee3e04a51fa96524e23aee30c4042aac721e2b91113->leave($__internal_fd02ceba4c0462c2a1509ee3e04a51fa96524e23aee30c4042aac721e2b91113_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ad5295677167377a62ee23a24e60aad9efa41a23b0682db6c2bf0b148f1bddb2 = $this->env->getExtension("native_profiler");
        $__internal_ad5295677167377a62ee23a24e60aad9efa41a23b0682db6c2bf0b148f1bddb2->enter($__internal_ad5295677167377a62ee23a24e60aad9efa41a23b0682db6c2bf0b148f1bddb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    ";
        // line 8
        $this->loadTemplate("NelmioApiDocBundle::method.html.twig", "@NelmioApiDoc/resource.html.twig", 8)->display($context);
        // line 9
        echo "                </ul>
            </li>
        </ul>
    </li>
";
        
        $__internal_ad5295677167377a62ee23a24e60aad9efa41a23b0682db6c2bf0b148f1bddb2->leave($__internal_ad5295677167377a62ee23a24e60aad9efa41a23b0682db6c2bf0b148f1bddb2_prof);

    }

    public function getTemplateName()
    {
        return "@NelmioApiDoc/resource.html.twig";
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
