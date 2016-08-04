<?php

/* default/dashboard_buis.html.twig */
class __TwigTemplate_338eb4cd99a80ea6e651c323a447d687dd7d312d062c187917e8014ea75c3281 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/dashboard_buis.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5db16ffa5f5fc685b56ad831401810c3b1e449f3b1082828d6224ec2566a761 = $this->env->getExtension("native_profiler");
        $__internal_e5db16ffa5f5fc685b56ad831401810c3b1e449f3b1082828d6224ec2566a761->enter($__internal_e5db16ffa5f5fc685b56ad831401810c3b1e449f3b1082828d6224ec2566a761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashboard_buis.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5db16ffa5f5fc685b56ad831401810c3b1e449f3b1082828d6224ec2566a761->leave($__internal_e5db16ffa5f5fc685b56ad831401810c3b1e449f3b1082828d6224ec2566a761_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_b011b491812c8e8bf166bb9d467df9639c981ef7e2df97af1d4dc6338fe7b14a = $this->env->getExtension("native_profiler");
        $__internal_b011b491812c8e8bf166bb9d467df9639c981ef7e2df97af1d4dc6338fe7b14a->enter($__internal_b011b491812c8e8bf166bb9d467df9639c981ef7e2df97af1d4dc6338fe7b14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "dashboard";
        
        $__internal_b011b491812c8e8bf166bb9d467df9639c981ef7e2df97af1d4dc6338fe7b14a->leave($__internal_b011b491812c8e8bf166bb9d467df9639c981ef7e2df97af1d4dc6338fe7b14a_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_10994922a309dc69e1029d95e4019e846195cd5753ee51e2f2d607df8a6fea31 = $this->env->getExtension("native_profiler");
        $__internal_10994922a309dc69e1029d95e4019e846195cd5753ee51e2f2d607df8a6fea31->enter($__internal_10994922a309dc69e1029d95e4019e846195cd5753ee51e2f2d607df8a6fea31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_10994922a309dc69e1029d95e4019e846195cd5753ee51e2f2d607df8a6fea31->leave($__internal_10994922a309dc69e1029d95e4019e846195cd5753ee51e2f2d607df8a6fea31_prof);

    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b61d0c84249f1d894b7555e2d44bcc6a3ec2801e1fa2d696cc4d9d0513425be6 = $this->env->getExtension("native_profiler");
        $__internal_b61d0c84249f1d894b7555e2d44bcc6a3ec2801e1fa2d696cc4d9d0513425be6->enter($__internal_b61d0c84249f1d894b7555e2d44bcc6a3ec2801e1fa2d696cc4d9d0513425be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_b61d0c84249f1d894b7555e2d44bcc6a3ec2801e1fa2d696cc4d9d0513425be6->leave($__internal_b61d0c84249f1d894b7555e2d44bcc6a3ec2801e1fa2d696cc4d9d0513425be6_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a94ea2e7a6d9f6945ff8efefe6c508401adfd59771deccb0bb535775be07ec9 = $this->env->getExtension("native_profiler");
        $__internal_0a94ea2e7a6d9f6945ff8efefe6c508401adfd59771deccb0bb535775be07ec9->enter($__internal_0a94ea2e7a6d9f6945ff8efefe6c508401adfd59771deccb0bb535775be07ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
    <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-datepicker3.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-datepicker3.standalone.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/modal.css"), "html", null, true);
        echo "\">
    <!-- Fonts -->
    <link href=\"http://fonts.googleapis.com/css?family=Lato:300,400,700\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">


    <script async defer src=\"https://maps.googleapis.com/maps/api/js?key= AIzaSyCSf9vDJJY8WbZ3xPfvOPkz1F6bAMM4unU&callback=getLocation\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.11.0.min.js"), "html", null, true);
        echo "\"></script>


    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/modal.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/ag_dashboard.css"), "html", null, true);
        echo "\">


";
        
        $__internal_0a94ea2e7a6d9f6945ff8efefe6c508401adfd59771deccb0bb535775be07ec9->leave($__internal_0a94ea2e7a6d9f6945ff8efefe6c508401adfd59771deccb0bb535775be07ec9_prof);

    }

    public function getTemplateName()
    {
        return "default/dashboard_buis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 32,  114 => 30,  108 => 27,  98 => 20,  93 => 18,  89 => 17,  85 => 16,  81 => 15,  77 => 13,  71 => 12,  60 => 10,  49 => 9,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'dashboard' %}*/
/* */
/* {#*/
/*     the homepage is a special page which displays neither a header nor a footer.*/
/*     this is done with the 'trick' of defining empty Twig blocks without any content*/
/* #}*/
/* {% block header %}{% endblock %}*/
/* {% block footer %}{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">*/
/*     <link rel="stylesheet" href="{{ asset('css/app.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('css/style.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker3.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker3.standalone.css') }}">*/
/* */
/*     <link rel="stylesheet" href="{{ asset('css/modal.css') }}">*/
/*     <!-- Fonts -->*/
/*     <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" type="text/css">*/
/*     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">*/
/* */
/* */
/*     <script async defer src="https://maps.googleapis.com/maps/api/js?key= AIzaSyCSf9vDJJY8WbZ3xPfvOPkz1F6bAMM4unU&callback=getLocation" type="text/javascript"></script>*/
/*     <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>*/
/* */
/* */
/*     <link rel="stylesheet" href="{{ asset('css/modal.css') }}">*/
/* */
/*     <link rel="stylesheet" href="{{ asset('css/ag_dashboard.css') }}">*/
/* */
/* */
/* {% endblock %}*/
/* */
