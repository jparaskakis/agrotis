<?php

/* default/dashboard_prod.html.twig */
class __TwigTemplate_8a3bddda4de61d217475988ff3d51f7f742bb3310059bc890e87dd9b162a39dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/dashboard_prod.html.twig", 1);
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
        $__internal_77e9fde28dd37b150c94e46edef224b439ff0eebb487304f55bac607b91ed833 = $this->env->getExtension("native_profiler");
        $__internal_77e9fde28dd37b150c94e46edef224b439ff0eebb487304f55bac607b91ed833->enter($__internal_77e9fde28dd37b150c94e46edef224b439ff0eebb487304f55bac607b91ed833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashboard_prod.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77e9fde28dd37b150c94e46edef224b439ff0eebb487304f55bac607b91ed833->leave($__internal_77e9fde28dd37b150c94e46edef224b439ff0eebb487304f55bac607b91ed833_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_af137ca3efbc73f1235fd46ea4fa87d9129707d4f24684a8d9228cc035ad4e11 = $this->env->getExtension("native_profiler");
        $__internal_af137ca3efbc73f1235fd46ea4fa87d9129707d4f24684a8d9228cc035ad4e11->enter($__internal_af137ca3efbc73f1235fd46ea4fa87d9129707d4f24684a8d9228cc035ad4e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "dashboard";
        
        $__internal_af137ca3efbc73f1235fd46ea4fa87d9129707d4f24684a8d9228cc035ad4e11->leave($__internal_af137ca3efbc73f1235fd46ea4fa87d9129707d4f24684a8d9228cc035ad4e11_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_89c361e276a330568252b599bf6ac70403a02da78615f5c3ab67269bab2ce2c8 = $this->env->getExtension("native_profiler");
        $__internal_89c361e276a330568252b599bf6ac70403a02da78615f5c3ab67269bab2ce2c8->enter($__internal_89c361e276a330568252b599bf6ac70403a02da78615f5c3ab67269bab2ce2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_89c361e276a330568252b599bf6ac70403a02da78615f5c3ab67269bab2ce2c8->leave($__internal_89c361e276a330568252b599bf6ac70403a02da78615f5c3ab67269bab2ce2c8_prof);

    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1b2f39a178bea543c0297e90a58e8a3a7ff2abef530e6f103fbd8f43407004a2 = $this->env->getExtension("native_profiler");
        $__internal_1b2f39a178bea543c0297e90a58e8a3a7ff2abef530e6f103fbd8f43407004a2->enter($__internal_1b2f39a178bea543c0297e90a58e8a3a7ff2abef530e6f103fbd8f43407004a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_1b2f39a178bea543c0297e90a58e8a3a7ff2abef530e6f103fbd8f43407004a2->leave($__internal_1b2f39a178bea543c0297e90a58e8a3a7ff2abef530e6f103fbd8f43407004a2_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce736d7dbdaca96b86e6f928715c41ee2eca27a5bcca61ffc3dc6a5b56ff427d = $this->env->getExtension("native_profiler");
        $__internal_ce736d7dbdaca96b86e6f928715c41ee2eca27a5bcca61ffc3dc6a5b56ff427d->enter($__internal_ce736d7dbdaca96b86e6f928715c41ee2eca27a5bcca61ffc3dc6a5b56ff427d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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


    ";
        // line 27
        echo "    <script src=\"http://maps.googleapis.com/maps/api/js\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.11.0.min.js"), "html", null, true);
        echo "\"></script>


    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/modal.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/ag_dashboard.css"), "html", null, true);
        echo "\">


    <div class=\"agcontainer\">
        <div class=\"sidebar\">
            <div class=\"avatar\" style=\"background: url('";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["avatar"]) ? $context["avatar"] : $this->getContext($context, "avatar")), "html", null, true);
        echo "')\"></div>
            <div class=\"line\">";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "</div>
            <ul class=\"sidebar_actions\">
                <li class=\"sidebar_action active\">Dashboard<span class=\"menu-icon fa fa-tachometer\"></span></li>
                <li class=\"sidebar_action\">Profile<span class=\"menu-icon fa fa-user\"></span></li>
                <li class=\"sidebar_action\">Add Product<span class=\"menu-icon fa fa-plus\"></span></li>
                <li class=\"sidebar_action\">View Offers<span class=\"menu-icon fa fa-location-arrow\"></span></li>
            </ul>
            <p class=\"position_bottom center grey\">2016 © Agrot-IS. All rights reserved.</p></div>
        </div>
        <div class=\"content\">
            <div id=\"googleMap\" style=\"width:100%;height:100%;\" ></div>
        </div>
    </div>


    <script>
        resize();
        getLocation();
        \$( window ).resize(function() {
            resize()
        });

        function resize(){
            var WINDOW_WIDTH = window.innerWidth;
            var WINDOW_HEIGHT = window.innerHeight;


            \$(\".content\").css(\"width\", WINDOW_WIDTH - 300);
            \$(\".content\").css(\"left\", 300);

        }

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            }
        }

        function initialize(lat, lon) {
            USER_LAT = lat;
            USER_LON = lon;
            var mapProp = {
                center:new google.maps.LatLng(lat,lon),
                zoom:7,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };


            var map=new google.maps.Map(document.getElementById(\"googleMap\"),mapProp);

        }

        function showPosition(position) {
            initialize( position.coords.latitude,  position.coords.longitude)
        }
    </script>
";
        
        $__internal_ce736d7dbdaca96b86e6f928715c41ee2eca27a5bcca61ffc3dc6a5b56ff427d->leave($__internal_ce736d7dbdaca96b86e6f928715c41ee2eca27a5bcca61ffc3dc6a5b56ff427d_prof);

    }

    public function getTemplateName()
    {
        return "default/dashboard_prod.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 39,  129 => 38,  121 => 33,  116 => 31,  110 => 28,  107 => 27,  98 => 20,  93 => 18,  89 => 17,  85 => 16,  81 => 15,  77 => 13,  71 => 12,  60 => 10,  49 => 9,  37 => 3,  11 => 1,);
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
/*     {#<script async defer src="https://maps.googleapis.com/maps/api/js?key= AIzaSyCSf9vDJJY8WbZ3xPfvOPkz1F6bAMM4unU&callback=getLocation" type="text/javascript"></script>#}*/
/*     <script src="http://maps.googleapis.com/maps/api/js"></script>*/
/*     <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>*/
/* */
/* */
/*     <link rel="stylesheet" href="{{ asset('css/modal.css') }}">*/
/* */
/*     <link rel="stylesheet" href="{{ asset('css/ag_dashboard.css') }}">*/
/* */
/* */
/*     <div class="agcontainer">*/
/*         <div class="sidebar">*/
/*             <div class="avatar" style="background: url('{{ avatar }}')"></div>*/
/*             <div class="line">{{ username }}</div>*/
/*             <ul class="sidebar_actions">*/
/*                 <li class="sidebar_action active">Dashboard<span class="menu-icon fa fa-tachometer"></span></li>*/
/*                 <li class="sidebar_action">Profile<span class="menu-icon fa fa-user"></span></li>*/
/*                 <li class="sidebar_action">Add Product<span class="menu-icon fa fa-plus"></span></li>*/
/*                 <li class="sidebar_action">View Offers<span class="menu-icon fa fa-location-arrow"></span></li>*/
/*             </ul>*/
/*             <p class="position_bottom center grey">2016 © Agrot-IS. All rights reserved.</p></div>*/
/*         </div>*/
/*         <div class="content">*/
/*             <div id="googleMap" style="width:100%;height:100%;" ></div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     <script>*/
/*         resize();*/
/*         getLocation();*/
/*         $( window ).resize(function() {*/
/*             resize()*/
/*         });*/
/* */
/*         function resize(){*/
/*             var WINDOW_WIDTH = window.innerWidth;*/
/*             var WINDOW_HEIGHT = window.innerHeight;*/
/* */
/* */
/*             $(".content").css("width", WINDOW_WIDTH - 300);*/
/*             $(".content").css("left", 300);*/
/* */
/*         }*/
/* */
/*         function getLocation() {*/
/*             if (navigator.geolocation) {*/
/*                 navigator.geolocation.getCurrentPosition(showPosition);*/
/*             }*/
/*         }*/
/* */
/*         function initialize(lat, lon) {*/
/*             USER_LAT = lat;*/
/*             USER_LON = lon;*/
/*             var mapProp = {*/
/*                 center:new google.maps.LatLng(lat,lon),*/
/*                 zoom:7,*/
/*                 mapTypeId:google.maps.MapTypeId.ROADMAP*/
/*             };*/
/* */
/* */
/*             var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);*/
/* */
/*         }*/
/* */
/*         function showPosition(position) {*/
/*             initialize( position.coords.latitude,  position.coords.longitude)*/
/*         }*/
/*     </script>*/
/* {% endblock %}*/
/* */
