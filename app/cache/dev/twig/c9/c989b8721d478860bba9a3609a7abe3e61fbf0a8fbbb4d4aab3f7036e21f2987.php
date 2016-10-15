<?php

/* default/homepage.html.twig */
class __TwigTemplate_b7dbd1e1768fe995a4642052de3036bde9de0262a1e80a2b3f00e5101dcef432 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89a0d7ce9155b6f9da3d135272a9da2ea05233e5731a2f223cfe50b9385fc8d9 = $this->env->getExtension("native_profiler");
        $__internal_89a0d7ce9155b6f9da3d135272a9da2ea05233e5731a2f223cfe50b9385fc8d9->enter($__internal_89a0d7ce9155b6f9da3d135272a9da2ea05233e5731a2f223cfe50b9385fc8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        // line 1
        echo "
<head>
    <meta charset=\"UTF-8\"/>

    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,600,500,700,300' rel='stylesheet' type='text/css'>
    <link href='https://cdn.jsdelivr.net/open-dyslexic/2.1.0/ttf/OpenDyslexic-Bold.ttf' rel='stylesheet' type='text/css'>
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
    ";
        // line 21
        if (twig_in_filter("localhost", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "host", array()))) {
            // line 22
            echo "        <script src=\"http://maps.googleapis.com/maps/api/js\"></script>
    ";
        } else {
            // line 24
            echo "        <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyD9J_3yPsTcTvsXQhUniIOkSzP2RHc1p2Y&callback=getLocation\" type=\"text/javascript\"></script>
    ";
        }
        // line 26
        echo "
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.11.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/utilGlobal.js"), "html", null, true);
        echo "\"></script>

</head>

<style>
    .error_notification{
        width: 100%;
        background: red;
        color: white;
        text-align: center;
        line-height: 40px;
        height: 0px;
        /* Set our transitions up. */
        -webkit-transition: height 0.5s;
        -moz-transition: height 0.5s;
        transition: height 0.5s;
    }

    .close_notification{
        position: absolute;
        width: 10px;
        height: 40px;
        left:40px;
        font-size: 30px;
        cursor: pointer;
    }

    .login_success{
        width: 100%;
        height: 40px;
        height: 40px;
        margin-bottom: 15px;
        background: green;
        color: white;
        text-align: center;
        line-height: 40px;
        display:none;
        /* Set our transitions up. */
        -webkit-transition: height 0.5s;
        -moz-transition: height 0.5s;
        transition: height 0.5s;
    }

    .success_notification{
        width: 100%;
        background: green;
        color: white;
        text-align: center;
        line-height: 40px;
        height: 0px;
        /* Set our transitions up. */
        -webkit-transition: height 0.5s;
        -moz-transition: height 0.5s;
        transition: height 0.5s;
    }

    .success_notification a{
        color: white;
        text-decoration: underline;
    }

    .success_notification a:hover{
        background: transparent !important;
        background-color: transparent !important;
        cursor: pointer;
    }


    .error_notification a{
        color: white;
        text-decoration: underline;
    }

    .error_notification a:hover{
        background: transparent !important;
        background-color: transparent !important;
        cursor: pointer;
    }

    #login_form, #registration_form, #reminder_form{
        float: left;
        position: absolute;
        z-index: 10000;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
    }

    label{
        float: left;
    }


    .modal_logo{
        background: url(\"/images/logo.png\");
        width: 100%;
        height: 50px;
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
    }
    .modal_action{
        width: 100%;
        height:20px;
        line-height: 20px;
        color: #37245c;
        text-align: center;
        font-size: 20px;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    #login_form label, #reminder_form label, #registration_form label{
        font-weight: normal !important;
        font-size: 15px !important;
    }


</style>


<div class=\"modal fade\" id=\"login_modal\" role=\"dialog\">
    <div class=\"modal-dialog\" style=\"width: 400px;\">
        <!-- Modal content-->
        <div class=\"modal-content\" style=\"height: 392px\">
            <div class=\"login_success\">Password Changed</div>
            <form id=\"login_form\" action=\"";
        // line 156
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" style=\"width: 350px; margin-top: 22px;\">
                <fieldset style=\"height: 300px;\">

                    <legend> <div class=\"modal_logo\"></div><div class=\"modal_action\">Login Form</div></legend>
                    <div class=\"form-group\">
                        <label for=\"username\">Username / Alias</label>
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"\" class=\"form-control\"/>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"password\">Password</label>
                        <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\"/>
                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\"
                           value=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                    <button type=\"submit\" class=\"login-but btn btn-primary\">
                        Sign In
                    </button>
                    <br>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"register_modal\" role=\"dialog\">
    <div class=\"modal-dialog\" style=\"width: 400px;\">
        <!-- Modal content-->
        <div class=\"modal-content\" style=\"height: 780px\">
            <form id=\"registration_form\" style=\"width: 350px;margin-top: 19px;\">
                <fieldset>
                    <legend><div class=\"modal_logo\"></div><div class=\"modal_action\">Register Form</div></legend>
                    <div class=\"form-group\">
                        <label for=\"username\">Username / Alias</label><label id=\"username_error\" class=\"error_register\">Username Exists</label>
                        <input type=\"text\" id=\"r_username\" name=\"username\" class=\"form-control\"/>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"username\">E-mail</label><label id=\"email_error\"  class=\"error_register\">E-mail  Exists</label>
                        <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\"/>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"password\">Password</label><label id=\"password_error\" class=\"error_register\">Password  Cannot be empty</label>
                        <input type=\"password\" id=\"r_password\" name=\"password\" class=\"form-control\"/>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"password\">Account Type</label><label id=\"account_error\" class=\"error_register\">Please select an Account</label>
                        <select id=\"account_type\">
                            <option value=\"0\">I am a/an...</option>
                            ";
        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 204
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "description", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "                        </select>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"loader\"><div class=\"icon rotating\"></div> </div>
                        <div id=\"googleMap\" style=\"width:100%;height:200px;\" ></div>

                    </div>
                    <div style=\"margin-top: 15px\" onclick=\"registeUser()\"
                         class=\"login-but btn btn-primary\"> Sign Up
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<div class=\"error_notification\"></div>
<div class=\"success_notification\"></div>




<div class=\"col-md-12\" style=\"padding: 0px !important;\">
    ";
        // line 229
        $this->displayBlock('body', $context, $blocks);
        // line 345
        echo "</div>

<script src=\"http://code.jquery.com/jquery-1.11.0.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
<script src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/modernizr.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<script>

    var host = location.host;

    var userid = '";
        // line 356
        echo twig_escape_filter($this->env, (isset($context["userid"]) ? $context["userid"] : $this->getContext($context, "userid")), "html", null, true);
        echo "';
    if(host.indexOf(\"localhost\") != -1 || host.indexOf(\"127.0.0.1\") != -1 ){
        var SERVER_ADDR = \"http://localhost:8000/\";
    }else if(host.indexOf(\"www\") != -1){
        var SERVER_ADDR = \"http://www.agrot-is.net/\";
    }else{
        var SERVER_ADDR = \"http://agrot-is.net/\";
    }


    function goTo(link) {
        window.open(link);
    }



    function OnWindowResize() {

    }

    \$(window).ready(function () {
        OnWindowResize();
    });
    document.addEventListener(\"DOMContentLoaded\", function (event) {
        OnWindowResize();
        \$(window).resize(function () {
            OnWindowResize();
        });
    });

    function displayLogin() {
        if (userid != \"none\") {
            window.location = \"/dashboard\";
        } else {
            \$(\"#remind_modal\").modal(\"hide\")
            \$(\"#login_modal\").modal(\"show\")
        }

    }

    function register() {
        getLocation();
        \$(\"#register_modal\").modal(\"show\")

    }


    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        }
    }

    function showPosition(position) {
        initialize( position.coords.latitude,  position.coords.longitude)
    }

    var USER_LAT = -1;
    var USER_LON = -1;
    function initialize(lat, lon) {
        USER_LAT = lat;
        USER_LON = lon;
        var mapProp = {
            center:new google.maps.LatLng(lat,lon),
            zoom:15,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };


        var map=new google.maps.Map(document.getElementById(\"googleMap\"),mapProp);

        var myLatLng = {lat: lat, lng: lon};

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Your position'
        });

        \$(\"#googleMap\").css(\"display\", \"block\")
        setTimeout(function(){\$(\".loader\").css(\"display\", \"none\")}, 1500)


    }

    function logout() {
        window.location = \"/logout\";
    }

    function goToDashboard() {
        window.location = \"/dashboard\";
    }


    var error = '";
        // line 450
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
        echo "';
    var username = '";
        // line 451
        echo twig_escape_filter($this->env, (isset($context["uid"]) ? $context["uid"] : $this->getContext($context, "uid")), "html", null, true);
        echo "';
    var success = '";
        // line 452
        echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : $this->getContext($context, "success")), "html", null, true);
        echo "';

    if(error == \"User account is disabled.\"){
        error = \"\"
        success = \"Have you activated your user account? Please use the activation link in the e-mail we sent you. If you didn't receive an email click <a href='/resend_email?uid=\"+username+\"'>resend email</a>\"
    }

    function showErrorNotification(){
        \$(\".error_notification\").html('<div class=\"close_notification\" onclick=\"closeErrorNotification()\">&times;</div>'+error);
        \$(\".error_notification\").css(\"height\", \"40px\");
    }

    function closeErrorNotification(){
        \$(\".error_notification\").html('');
        \$(\".error_notification\").css(\"height\", \"0px\");
    }


    function showSuccessNotification(){
        \$(\".success_notification\").html('<div class=\"close_notification\" onclick=\"closeSuccessNotification()\">&times;</div>'+success);
        \$(\".success_notification\").css(\"height\", \"40px\");
    }

    function closeSuccessNotification(){
        \$(\".success_notification\").html('');
        \$(\".success_notification\").css(\"height\", \"0px\");
    }

    if(error != ''){
        showErrorNotification();
    }
    if(success != ''){
        showSuccessNotification();
    }


    function registeUser() {
        var username = \$(\"#r_username\").val();
        var password = \$(\"#r_password\").val();
        var email = \$(\"#email\").val();
        var account = \$(\"#account_type\").val();

        var username_el = \$(\"#username_error\");
        var email_el = \$(\"#email_error\");
        var password_el = \$(\"#password_error\");
        var account_el = \$(\"#account_error\");

        email_el.css(\"display\", \"none\");
        username_el.css(\"display\", \"none\");
        password_el.css(\"display\", \"none\");
        account_el.css(\"display\", \"none\");

        var can_go_through = true;
        if (username == \"\") {
            username_el.css(\"display\", \"block\");
            username_el.html(\"Username is a required field\");
            can_go_through = false;
        }
        if (password == \"\") {
            password_el.css(\"display\", \"block\");
            password_el.html(\"Password is a required field\")
            can_go_through = false;
        }
        if (email == \"\") {
            email_el.css(\"display\", \"block\");
            email_el.html(\"Email is a required field\");
            can_go_through = false;
        }
        if (account == \"0\") {
            account_el.css(\"display\", \"block\");
            account_el.html(\"Account type is a required field\");
            can_go_through = false;
        }

        if (can_go_through) {
            jQuery.ajax({
                url: SERVER_ADDR + \"createUser\",
                type: 'POST',
                dataType: \"json\",
                data: {
                    username: username,
                    password: password,
                    email: email,
                    account_type: account,
                    lat: USER_LAT,
                    lon: USER_LON,
                },
                headers: {'Access-Control-Allow-Origin': '*'},
                crossDomain: true,
                complete: function (data) {
                    var result1 = data.responseText;
                    if (window.DOMParser) {
                        parser = new DOMParser();
                        xmlDoc = parser.parseFromString(result1, \"text/xml\");
                    }
                    else {
                        xmlDoc = new ActiveXObject(\"Microsoft.XMLDOM\");
                        xmlDoc.async = false;
                        xmlDoc.loadXML(result1);
                    }
                    console.log(data.responseText);
                    if (data.responseText.indexOf(\"<error\") != -1) {
                        var error = xmlDoc.getElementsByTagName(\"error\")[0];
                        var id = error.getAttribute(\"id\");

                        if (id == \"101\") {
                            username_el.css(\"display\", \"block\");
                            username_el.html(\"This username is in use\");
                        } else {
                            email_el.css(\"display\", \"block\");
                            email_el.html(\"This email is in use\");
                        }
                    } else {
                        \$(\"#username\").val(username);
                        \$(\"#password\").val(password);
                        \$(\"#login_form\").submit();
                    }


                }
            });
        }

    }


</script>
";
        
        $__internal_89a0d7ce9155b6f9da3d135272a9da2ea05233e5731a2f223cfe50b9385fc8d9->leave($__internal_89a0d7ce9155b6f9da3d135272a9da2ea05233e5731a2f223cfe50b9385fc8d9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_86f8ea1f84d51184d12df776e1e79832c7fd77cef4d0b8b2dbc30d933b35732a = $this->env->getExtension("native_profiler");
        $__internal_86f8ea1f84d51184d12df776e1e79832c7fd77cef4d0b8b2dbc30d933b35732a->enter($__internal_86f8ea1f84d51184d12df776e1e79832c7fd77cef4d0b8b2dbc30d933b35732a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Agrot-IS Platform";
        
        $__internal_86f8ea1f84d51184d12df776e1e79832c7fd77cef4d0b8b2dbc30d933b35732a->leave($__internal_86f8ea1f84d51184d12df776e1e79832c7fd77cef4d0b8b2dbc30d933b35732a_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ee82bdef5e0f1f8c3bb21fa34e47e49644ab11905ec523a2ab1ae5d458c26bd2 = $this->env->getExtension("native_profiler");
        $__internal_ee82bdef5e0f1f8c3bb21fa34e47e49644ab11905ec523a2ab1ae5d458c26bd2->enter($__internal_ee82bdef5e0f1f8c3bb21fa34e47e49644ab11905ec523a2ab1ae5d458c26bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-datepicker3.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-datepicker3.standalone.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/landing.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/modal.css"), "html", null, true);
        echo "\">
        <!-- Fonts -->
        <link href=\"http://fonts.googleapis.com/css?family=Lato:300,400,700\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">
    ";
        
        $__internal_ee82bdef5e0f1f8c3bb21fa34e47e49644ab11905ec523a2ab1ae5d458c26bd2->leave($__internal_ee82bdef5e0f1f8c3bb21fa34e47e49644ab11905ec523a2ab1ae5d458c26bd2_prof);

    }

    // line 229
    public function block_body($context, array $blocks = array())
    {
        $__internal_03239e6d34b6e3d0e4a11d959fbe6293a81a7f38acd3ff6e14b1ea5a2a783406 = $this->env->getExtension("native_profiler");
        $__internal_03239e6d34b6e3d0e4a11d959fbe6293a81a7f38acd3ff6e14b1ea5a2a783406->enter($__internal_03239e6d34b6e3d0e4a11d959fbe6293a81a7f38acd3ff6e14b1ea5a2a783406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 230
        echo "
        <div class=\"navigation_bar\">
            ";
        // line 232
        if ((null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 233
            echo "                <div class=\"menu_item\" style=\"float: right\" onclick=\"displayLogin()\">Login</div>
                <div class=\"menu_item\" style=\"float: right\" onclick=\"register()\">Register</div>
            ";
        } else {
            // line 236
            echo "                ";
            // line 237
            echo "                <div class=\"avatar_placeholder\">
                    <div class=\"avatar\" style=\"background: url('";
            // line 238
            echo twig_escape_filter($this->env, (isset($context["avatar"]) ? $context["avatar"] : $this->getContext($context, "avatar")), "html", null, true);
            echo "'); background-size: cover;\">
                        <ul>
                            <li onclick=\"displayLogin()\">Dashboard</li>
                            <li onclick=\"logout()\">Logout</li>
                        </ul>
                    </div>
                </div>
            ";
        }
        // line 246
        echo "            <div class=\"logo\"></div>
            <div class=\"menu_item pricing\">Pricing</div>
            <div class=\"menu_item support\">Support</div>
        </div>
        <div class=\"header_top\"></div>

        <div class=\"container\">
            <div class=\"title col-md-8 col-sm-10 col-xs-12\">
                <h1>About <strong>Agrot-IS</strong></h1>
            </div>
            <br><br>
            <p class=\"title about-text\">The Agrot-IS is an innovative online transaction platform for agricultural products.
                Get informed, discover and purchase agricultural products available in a wide variety and low price.
                Take part in live transactions and make the best deal. !</p>


            <div class=\"promo-line\">
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"row\">
                        <div class=\"promo right animated fadeInLeft visible\" data-animation=\"fadeInLeft\">
                            <div class=\"col-md-2 col-sm-3 promo-icon-box\">
                                <div class=\"promo-icon\">
                                    <i class=\"fa fa-user fa-2x\"></i>
                                </div>
                            </div>
                            <div class=\"col-md-10 col-sm-9\">
                                <h4>Who we are</h4>
                                <p>We are an inovative team developing apps and platforms which transform agriculture into a modern business</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"row\">
                        <div class=\"promo animated fadeInRight visible\" data-animation=\"fadeInRight\">
                            <div class=\"col-md-2 col-sm-3 promo-icon-box\">
                                <div class=\"promo-icon\">
                                    <i class=\"fa fa-bullseye fa-2x\"></i>
                                </div>
                            </div>
                            <div class=\"col-md-10 col-sm-9\">
                                <h4>Our mission</h4>
                                <p>Our mission is to bring producers and industries together in a modern environment.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"promo-line\">
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"row\">
                        <div class=\"promo right animated fadeInLeft visible\" data-animation=\"fadeInLeft\">
                            <div class=\"col-md-2 col-sm-3 promo-icon-box\">
                                <div class=\"promo-icon\">
                                    <i class=\"fa fa-lock fa-2x\"></i>
                                </div>
                            </div>
                            <div class=\"col-md-10 col-sm-9\">
                                <h4>How we treat data</h4>
                                <p>We do not collect or share personally identifiable information but currently evaluate models that provide partners with metrics and accountability.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"row\">
                        <div class=\"promo animated fadeInRight visible\" data-animation=\"fadeInRight\">
                            <div class=\"col-md-2 col-sm-3 promo-icon-box\">
                                <div class=\"promo-icon\">
                                    <i class=\"fa fa-heart fa-2x\"></i>
                                </div>
                            </div>
                            <div class=\"col-md-10 col-sm-9\">
                                <h4>We love our clients</h4>
                                <p>Our clients are our priority. Use our state of the art platform with 24hours live support.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer><div class=\"container\">
                    <ul class=\"social-list\">
                        <li><a href=\"https://www.facebook.com/\" target=\"_blank\" data-mce-href=\"https://www.facebook.com/\">
                                <span class=\"social-icon\"><i class=\"fa fa-facebook\"></i></span></a><br data-mce-bogus=\"1\"></li>
                        <li><a href=\"https://twitter.com/\" target=\"_blank\" data-mce-href=\"https://twitter.com/\">
                                <span class=\"social-icon\"><i class=\"fa fa-twitter\"></i></span></a><br data-mce-bogus=\"1\"></li>
                    </ul>
                    <p class=\"center grey\">2016 © Agrot-IS. All rights reserved.</p></div>
            </footer>
        </div>








    ";
        
        $__internal_03239e6d34b6e3d0e4a11d959fbe6293a81a7f38acd3ff6e14b1ea5a2a783406->leave($__internal_03239e6d34b6e3d0e4a11d959fbe6293a81a7f38acd3ff6e14b1ea5a2a783406_prof);

    }

    public function getTemplateName()
    {
        return "default/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  633 => 246,  622 => 238,  619 => 237,  617 => 236,  612 => 233,  610 => 232,  606 => 230,  600 => 229,  588 => 15,  584 => 14,  580 => 13,  576 => 12,  572 => 11,  568 => 10,  565 => 9,  559 => 8,  547 => 5,  412 => 452,  408 => 451,  404 => 450,  307 => 356,  299 => 351,  295 => 350,  291 => 349,  285 => 345,  283 => 229,  258 => 206,  247 => 204,  243 => 203,  206 => 169,  190 => 156,  59 => 28,  55 => 27,  52 => 26,  48 => 24,  44 => 22,  42 => 21,  39 => 20,  37 => 8,  31 => 5,  25 => 1,);
    }
}
/* */
/* <head>*/
/*     <meta charset="UTF-8"/>*/
/* */
/*     <title>{% block title %}Agrot-IS Platform{% endblock %}</title>*/
/*     <link href='https://fonts.googleapis.com/css?family=Poppins:400,600,500,700,300' rel='stylesheet' type='text/css'>*/
/*     <link href='https://cdn.jsdelivr.net/open-dyslexic/2.1.0/ttf/OpenDyslexic-Bold.ttf' rel='stylesheet' type='text/css'>*/
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">*/
/*         <link rel="stylesheet" href="{{ asset('css/app.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('css/style.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker3.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker3.standalone.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('css/landing.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('css/modal.css') }}">*/
/*         <!-- Fonts -->*/
/*         <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" type="text/css">*/
/*         <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">*/
/*     {% endblock %}*/
/* */
/*     {% if 'localhost' in app.request.host  %}*/
/*         <script src="http://maps.googleapis.com/maps/api/js"></script>*/
/*     {% else %}*/
/*         <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9J_3yPsTcTvsXQhUniIOkSzP2RHc1p2Y&callback=getLocation" type="text/javascript"></script>*/
/*     {% endif %}*/
/* */
/*     <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>*/
/*     <script src="{{ asset('js/utilGlobal.js') }}"></script>*/
/* */
/* </head>*/
/* */
/* <style>*/
/*     .error_notification{*/
/*         width: 100%;*/
/*         background: red;*/
/*         color: white;*/
/*         text-align: center;*/
/*         line-height: 40px;*/
/*         height: 0px;*/
/*         /* Set our transitions up. *//* */
/*         -webkit-transition: height 0.5s;*/
/*         -moz-transition: height 0.5s;*/
/*         transition: height 0.5s;*/
/*     }*/
/* */
/*     .close_notification{*/
/*         position: absolute;*/
/*         width: 10px;*/
/*         height: 40px;*/
/*         left:40px;*/
/*         font-size: 30px;*/
/*         cursor: pointer;*/
/*     }*/
/* */
/*     .login_success{*/
/*         width: 100%;*/
/*         height: 40px;*/
/*         height: 40px;*/
/*         margin-bottom: 15px;*/
/*         background: green;*/
/*         color: white;*/
/*         text-align: center;*/
/*         line-height: 40px;*/
/*         display:none;*/
/*         /* Set our transitions up. *//* */
/*         -webkit-transition: height 0.5s;*/
/*         -moz-transition: height 0.5s;*/
/*         transition: height 0.5s;*/
/*     }*/
/* */
/*     .success_notification{*/
/*         width: 100%;*/
/*         background: green;*/
/*         color: white;*/
/*         text-align: center;*/
/*         line-height: 40px;*/
/*         height: 0px;*/
/*         /* Set our transitions up. *//* */
/*         -webkit-transition: height 0.5s;*/
/*         -moz-transition: height 0.5s;*/
/*         transition: height 0.5s;*/
/*     }*/
/* */
/*     .success_notification a{*/
/*         color: white;*/
/*         text-decoration: underline;*/
/*     }*/
/* */
/*     .success_notification a:hover{*/
/*         background: transparent !important;*/
/*         background-color: transparent !important;*/
/*         cursor: pointer;*/
/*     }*/
/* */
/* */
/*     .error_notification a{*/
/*         color: white;*/
/*         text-decoration: underline;*/
/*     }*/
/* */
/*     .error_notification a:hover{*/
/*         background: transparent !important;*/
/*         background-color: transparent !important;*/
/*         cursor: pointer;*/
/*     }*/
/* */
/*     #login_form, #registration_form, #reminder_form{*/
/*         float: left;*/
/*         position: absolute;*/
/*         z-index: 10000;*/
/*         top: 0;*/
/*         bottom: 0;*/
/*         left: 0;*/
/*         right: 0;*/
/*         margin: auto;*/
/*     }*/
/* */
/*     label{*/
/*         float: left;*/
/*     }*/
/* */
/* */
/*     .modal_logo{*/
/*         background: url("/images/logo.png");*/
/*         width: 100%;*/
/*         height: 50px;*/
/*         background-size: contain;*/
/*         background-position: center;*/
/*         background-repeat: no-repeat;*/
/*     }*/
/*     .modal_action{*/
/*         width: 100%;*/
/*         height:20px;*/
/*         line-height: 20px;*/
/*         color: #37245c;*/
/*         text-align: center;*/
/*         font-size: 20px;*/
/*         margin-top: 10px;*/
/*         margin-bottom: 10px;*/
/*     }*/
/* */
/*     #login_form label, #reminder_form label, #registration_form label{*/
/*         font-weight: normal !important;*/
/*         font-size: 15px !important;*/
/*     }*/
/* */
/* */
/* </style>*/
/* */
/* */
/* <div class="modal fade" id="login_modal" role="dialog">*/
/*     <div class="modal-dialog" style="width: 400px;">*/
/*         <!-- Modal content-->*/
/*         <div class="modal-content" style="height: 392px">*/
/*             <div class="login_success">Password Changed</div>*/
/*             <form id="login_form" action="{{ path('login_check') }}" method="post" style="width: 350px; margin-top: 22px;">*/
/*                 <fieldset style="height: 300px;">*/
/* */
/*                     <legend> <div class="modal_logo"></div><div class="modal_action">Login Form</div></legend>*/
/*                     <div class="form-group">*/
/*                         <label for="username">Username / Alias</label>*/
/*                         <input type="text" id="username" name="_username" value="" class="form-control"/>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label for="password">Password</label>*/
/*                         <input type="password" id="password" name="_password" class="form-control"/>*/
/*                     </div>*/
/*                     <input type="hidden" name="_csrf_token"*/
/*                            value="{{ csrf_token('authenticate') }}"/>*/
/*                     <button type="submit" class="login-but btn btn-primary">*/
/*                         Sign In*/
/*                     </button>*/
/*                     <br>*/
/*                 </fieldset>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="modal fade" id="register_modal" role="dialog">*/
/*     <div class="modal-dialog" style="width: 400px;">*/
/*         <!-- Modal content-->*/
/*         <div class="modal-content" style="height: 780px">*/
/*             <form id="registration_form" style="width: 350px;margin-top: 19px;">*/
/*                 <fieldset>*/
/*                     <legend><div class="modal_logo"></div><div class="modal_action">Register Form</div></legend>*/
/*                     <div class="form-group">*/
/*                         <label for="username">Username / Alias</label><label id="username_error" class="error_register">Username Exists</label>*/
/*                         <input type="text" id="r_username" name="username" class="form-control"/>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label for="username">E-mail</label><label id="email_error"  class="error_register">E-mail  Exists</label>*/
/*                         <input type="text" id="email" name="email" class="form-control"/>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label for="password">Password</label><label id="password_error" class="error_register">Password  Cannot be empty</label>*/
/*                         <input type="password" id="r_password" name="password" class="form-control"/>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label for="password">Account Type</label><label id="account_error" class="error_register">Please select an Account</label>*/
/*                         <select id="account_type">*/
/*                             <option value="0">I am a/an...</option>*/
/*                             {% for category in categories %}*/
/*                                 <option value="{{ category.id }}">{{ category.description }}</option>*/
/*                             {% endfor %}*/
/*                         </select>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <div class="loader"><div class="icon rotating"></div> </div>*/
/*                         <div id="googleMap" style="width:100%;height:200px;" ></div>*/
/* */
/*                     </div>*/
/*                     <div style="margin-top: 15px" onclick="registeUser()"*/
/*                          class="login-but btn btn-primary"> Sign Up*/
/*                     </div>*/
/*                 </fieldset>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="error_notification"></div>*/
/* <div class="success_notification"></div>*/
/* */
/* */
/* */
/* */
/* <div class="col-md-12" style="padding: 0px !important;">*/
/*     {% block body %}*/
/* */
/*         <div class="navigation_bar">*/
/*             {% if app.user is  null %}*/
/*                 <div class="menu_item" style="float: right" onclick="displayLogin()">Login</div>*/
/*                 <div class="menu_item" style="float: right" onclick="register()">Register</div>*/
/*             {% else %}*/
/*                 {#<div class="login_box" onclick="displayLogin()" style="left: 86%; width: 115px;">Dashboard</div>#}*/
/*                 <div class="avatar_placeholder">*/
/*                     <div class="avatar" style="background: url('{{ avatar }}'); background-size: cover;">*/
/*                         <ul>*/
/*                             <li onclick="displayLogin()">Dashboard</li>*/
/*                             <li onclick="logout()">Logout</li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endif %}*/
/*             <div class="logo"></div>*/
/*             <div class="menu_item pricing">Pricing</div>*/
/*             <div class="menu_item support">Support</div>*/
/*         </div>*/
/*         <div class="header_top"></div>*/
/* */
/*         <div class="container">*/
/*             <div class="title col-md-8 col-sm-10 col-xs-12">*/
/*                 <h1>About <strong>Agrot-IS</strong></h1>*/
/*             </div>*/
/*             <br><br>*/
/*             <p class="title about-text">The Agrot-IS is an innovative online transaction platform for agricultural products.*/
/*                 Get informed, discover and purchase agricultural products available in a wide variety and low price.*/
/*                 Take part in live transactions and make the best deal. !</p>*/
/* */
/* */
/*             <div class="promo-line">*/
/*                 <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                     <div class="row">*/
/*                         <div class="promo right animated fadeInLeft visible" data-animation="fadeInLeft">*/
/*                             <div class="col-md-2 col-sm-3 promo-icon-box">*/
/*                                 <div class="promo-icon">*/
/*                                     <i class="fa fa-user fa-2x"></i>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-10 col-sm-9">*/
/*                                 <h4>Who we are</h4>*/
/*                                 <p>We are an inovative team developing apps and platforms which transform agriculture into a modern business</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                     <div class="row">*/
/*                         <div class="promo animated fadeInRight visible" data-animation="fadeInRight">*/
/*                             <div class="col-md-2 col-sm-3 promo-icon-box">*/
/*                                 <div class="promo-icon">*/
/*                                     <i class="fa fa-bullseye fa-2x"></i>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-10 col-sm-9">*/
/*                                 <h4>Our mission</h4>*/
/*                                 <p>Our mission is to bring producers and industries together in a modern environment.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="promo-line">*/
/*                 <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                     <div class="row">*/
/*                         <div class="promo right animated fadeInLeft visible" data-animation="fadeInLeft">*/
/*                             <div class="col-md-2 col-sm-3 promo-icon-box">*/
/*                                 <div class="promo-icon">*/
/*                                     <i class="fa fa-lock fa-2x"></i>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-10 col-sm-9">*/
/*                                 <h4>How we treat data</h4>*/
/*                                 <p>We do not collect or share personally identifiable information but currently evaluate models that provide partners with metrics and accountability.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                     <div class="row">*/
/*                         <div class="promo animated fadeInRight visible" data-animation="fadeInRight">*/
/*                             <div class="col-md-2 col-sm-3 promo-icon-box">*/
/*                                 <div class="promo-icon">*/
/*                                     <i class="fa fa-heart fa-2x"></i>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-10 col-sm-9">*/
/*                                 <h4>We love our clients</h4>*/
/*                                 <p>Our clients are our priority. Use our state of the art platform with 24hours live support.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <footer><div class="container">*/
/*                     <ul class="social-list">*/
/*                         <li><a href="https://www.facebook.com/" target="_blank" data-mce-href="https://www.facebook.com/">*/
/*                                 <span class="social-icon"><i class="fa fa-facebook"></i></span></a><br data-mce-bogus="1"></li>*/
/*                         <li><a href="https://twitter.com/" target="_blank" data-mce-href="https://twitter.com/">*/
/*                                 <span class="social-icon"><i class="fa fa-twitter"></i></span></a><br data-mce-bogus="1"></li>*/
/*                     </ul>*/
/*                     <p class="center grey">2016 © Agrot-IS. All rights reserved.</p></div>*/
/*             </footer>*/
/*         </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*     {% endblock %}*/
/* </div>*/
/* */
/* <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>*/
/* <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>*/
/* <script src="{{ asset('js/app.js') }}"></script>*/
/* <script src="{{ asset('js/modernizr.js') }}"></script>*/
/* <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>*/
/* <script>*/
/* */
/*     var host = location.host;*/
/* */
/*     var userid = '{{ userid }}';*/
/*     if(host.indexOf("localhost") != -1 || host.indexOf("127.0.0.1") != -1 ){*/
/*         var SERVER_ADDR = "http://localhost:8000/";*/
/*     }else if(host.indexOf("www") != -1){*/
/*         var SERVER_ADDR = "http://www.agrot-is.net/";*/
/*     }else{*/
/*         var SERVER_ADDR = "http://agrot-is.net/";*/
/*     }*/
/* */
/* */
/*     function goTo(link) {*/
/*         window.open(link);*/
/*     }*/
/* */
/* */
/* */
/*     function OnWindowResize() {*/
/* */
/*     }*/
/* */
/*     $(window).ready(function () {*/
/*         OnWindowResize();*/
/*     });*/
/*     document.addEventListener("DOMContentLoaded", function (event) {*/
/*         OnWindowResize();*/
/*         $(window).resize(function () {*/
/*             OnWindowResize();*/
/*         });*/
/*     });*/
/* */
/*     function displayLogin() {*/
/*         if (userid != "none") {*/
/*             window.location = "/dashboard";*/
/*         } else {*/
/*             $("#remind_modal").modal("hide")*/
/*             $("#login_modal").modal("show")*/
/*         }*/
/* */
/*     }*/
/* */
/*     function register() {*/
/*         getLocation();*/
/*         $("#register_modal").modal("show")*/
/* */
/*     }*/
/* */
/* */
/*     function getLocation() {*/
/*         if (navigator.geolocation) {*/
/*             navigator.geolocation.getCurrentPosition(showPosition);*/
/*         }*/
/*     }*/
/* */
/*     function showPosition(position) {*/
/*         initialize( position.coords.latitude,  position.coords.longitude)*/
/*     }*/
/* */
/*     var USER_LAT = -1;*/
/*     var USER_LON = -1;*/
/*     function initialize(lat, lon) {*/
/*         USER_LAT = lat;*/
/*         USER_LON = lon;*/
/*         var mapProp = {*/
/*             center:new google.maps.LatLng(lat,lon),*/
/*             zoom:15,*/
/*             mapTypeId:google.maps.MapTypeId.ROADMAP*/
/*         };*/
/* */
/* */
/*         var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);*/
/* */
/*         var myLatLng = {lat: lat, lng: lon};*/
/* */
/*         var marker = new google.maps.Marker({*/
/*             position: myLatLng,*/
/*             map: map,*/
/*             title: 'Your position'*/
/*         });*/
/* */
/*         $("#googleMap").css("display", "block")*/
/*         setTimeout(function(){$(".loader").css("display", "none")}, 1500)*/
/* */
/* */
/*     }*/
/* */
/*     function logout() {*/
/*         window.location = "/logout";*/
/*     }*/
/* */
/*     function goToDashboard() {*/
/*         window.location = "/dashboard";*/
/*     }*/
/* */
/* */
/*     var error = '{{ error }}';*/
/*     var username = '{{ uid }}';*/
/*     var success = '{{ success }}';*/
/* */
/*     if(error == "User account is disabled."){*/
/*         error = ""*/
/*         success = "Have you activated your user account? Please use the activation link in the e-mail we sent you. If you didn't receive an email click <a href='/resend_email?uid="+username+"'>resend email</a>"*/
/*     }*/
/* */
/*     function showErrorNotification(){*/
/*         $(".error_notification").html('<div class="close_notification" onclick="closeErrorNotification()">&times;</div>'+error);*/
/*         $(".error_notification").css("height", "40px");*/
/*     }*/
/* */
/*     function closeErrorNotification(){*/
/*         $(".error_notification").html('');*/
/*         $(".error_notification").css("height", "0px");*/
/*     }*/
/* */
/* */
/*     function showSuccessNotification(){*/
/*         $(".success_notification").html('<div class="close_notification" onclick="closeSuccessNotification()">&times;</div>'+success);*/
/*         $(".success_notification").css("height", "40px");*/
/*     }*/
/* */
/*     function closeSuccessNotification(){*/
/*         $(".success_notification").html('');*/
/*         $(".success_notification").css("height", "0px");*/
/*     }*/
/* */
/*     if(error != ''){*/
/*         showErrorNotification();*/
/*     }*/
/*     if(success != ''){*/
/*         showSuccessNotification();*/
/*     }*/
/* */
/* */
/*     function registeUser() {*/
/*         var username = $("#r_username").val();*/
/*         var password = $("#r_password").val();*/
/*         var email = $("#email").val();*/
/*         var account = $("#account_type").val();*/
/* */
/*         var username_el = $("#username_error");*/
/*         var email_el = $("#email_error");*/
/*         var password_el = $("#password_error");*/
/*         var account_el = $("#account_error");*/
/* */
/*         email_el.css("display", "none");*/
/*         username_el.css("display", "none");*/
/*         password_el.css("display", "none");*/
/*         account_el.css("display", "none");*/
/* */
/*         var can_go_through = true;*/
/*         if (username == "") {*/
/*             username_el.css("display", "block");*/
/*             username_el.html("Username is a required field");*/
/*             can_go_through = false;*/
/*         }*/
/*         if (password == "") {*/
/*             password_el.css("display", "block");*/
/*             password_el.html("Password is a required field")*/
/*             can_go_through = false;*/
/*         }*/
/*         if (email == "") {*/
/*             email_el.css("display", "block");*/
/*             email_el.html("Email is a required field");*/
/*             can_go_through = false;*/
/*         }*/
/*         if (account == "0") {*/
/*             account_el.css("display", "block");*/
/*             account_el.html("Account type is a required field");*/
/*             can_go_through = false;*/
/*         }*/
/* */
/*         if (can_go_through) {*/
/*             jQuery.ajax({*/
/*                 url: SERVER_ADDR + "createUser",*/
/*                 type: 'POST',*/
/*                 dataType: "json",*/
/*                 data: {*/
/*                     username: username,*/
/*                     password: password,*/
/*                     email: email,*/
/*                     account_type: account,*/
/*                     lat: USER_LAT,*/
/*                     lon: USER_LON,*/
/*                 },*/
/*                 headers: {'Access-Control-Allow-Origin': '*'},*/
/*                 crossDomain: true,*/
/*                 complete: function (data) {*/
/*                     var result1 = data.responseText;*/
/*                     if (window.DOMParser) {*/
/*                         parser = new DOMParser();*/
/*                         xmlDoc = parser.parseFromString(result1, "text/xml");*/
/*                     }*/
/*                     else {*/
/*                         xmlDoc = new ActiveXObject("Microsoft.XMLDOM");*/
/*                         xmlDoc.async = false;*/
/*                         xmlDoc.loadXML(result1);*/
/*                     }*/
/*                     console.log(data.responseText);*/
/*                     if (data.responseText.indexOf("<error") != -1) {*/
/*                         var error = xmlDoc.getElementsByTagName("error")[0];*/
/*                         var id = error.getAttribute("id");*/
/* */
/*                         if (id == "101") {*/
/*                             username_el.css("display", "block");*/
/*                             username_el.html("This username is in use");*/
/*                         } else {*/
/*                             email_el.css("display", "block");*/
/*                             email_el.html("This email is in use");*/
/*                         }*/
/*                     } else {*/
/*                         $("#username").val(username);*/
/*                         $("#password").val(password);*/
/*                         $("#login_form").submit();*/
/*                     }*/
/* */
/* */
/*                 }*/
/*             });*/
/*         }*/
/* */
/*     }*/
/* */
/* */
/* </script>*/
/* */
