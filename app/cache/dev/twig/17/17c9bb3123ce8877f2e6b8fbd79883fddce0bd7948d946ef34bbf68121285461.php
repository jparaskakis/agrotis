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
        $__internal_57a0be4a84feb383feb2c7bbb7ca701bb3283e3f1927de2e6d7af8380ca7c210 = $this->env->getExtension("native_profiler");
        $__internal_57a0be4a84feb383feb2c7bbb7ca701bb3283e3f1927de2e6d7af8380ca7c210->enter($__internal_57a0be4a84feb383feb2c7bbb7ca701bb3283e3f1927de2e6d7af8380ca7c210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashboard_prod.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57a0be4a84feb383feb2c7bbb7ca701bb3283e3f1927de2e6d7af8380ca7c210->leave($__internal_57a0be4a84feb383feb2c7bbb7ca701bb3283e3f1927de2e6d7af8380ca7c210_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_de76e1f5c9b5858ca585beea46aa86d01591a29557d7ccc42c89538887362bb7 = $this->env->getExtension("native_profiler");
        $__internal_de76e1f5c9b5858ca585beea46aa86d01591a29557d7ccc42c89538887362bb7->enter($__internal_de76e1f5c9b5858ca585beea46aa86d01591a29557d7ccc42c89538887362bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "dashboard";
        
        $__internal_de76e1f5c9b5858ca585beea46aa86d01591a29557d7ccc42c89538887362bb7->leave($__internal_de76e1f5c9b5858ca585beea46aa86d01591a29557d7ccc42c89538887362bb7_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_0f102e32d053648ac083fcf0d7e27a5d0dbafd0969897212247b9fff58f6da25 = $this->env->getExtension("native_profiler");
        $__internal_0f102e32d053648ac083fcf0d7e27a5d0dbafd0969897212247b9fff58f6da25->enter($__internal_0f102e32d053648ac083fcf0d7e27a5d0dbafd0969897212247b9fff58f6da25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_0f102e32d053648ac083fcf0d7e27a5d0dbafd0969897212247b9fff58f6da25->leave($__internal_0f102e32d053648ac083fcf0d7e27a5d0dbafd0969897212247b9fff58f6da25_prof);

    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        $__internal_366b38f6391ec99b9f7f1253587940d8924358c098053a08788acacb162579c5 = $this->env->getExtension("native_profiler");
        $__internal_366b38f6391ec99b9f7f1253587940d8924358c098053a08788acacb162579c5->enter($__internal_366b38f6391ec99b9f7f1253587940d8924358c098053a08788acacb162579c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_366b38f6391ec99b9f7f1253587940d8924358c098053a08788acacb162579c5->leave($__internal_366b38f6391ec99b9f7f1253587940d8924358c098053a08788acacb162579c5_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_50316a312300e5204604e6379b3a27606301afd40cff55c20567a3395a56c370 = $this->env->getExtension("native_profiler");
        $__internal_50316a312300e5204604e6379b3a27606301afd40cff55c20567a3395a56c370->enter($__internal_50316a312300e5204604e6379b3a27606301afd40cff55c20567a3395a56c370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "

    <div class=\"modal fade\" id=\"profile_modal\" role=\"dialog\">
        <div class=\"modal-dialog\" style=\"width: 800px;\">
            <div id=\"update_user_loading\" class=\"loader_\"><div class=\"centered_logo rotating\"></div><div class=\"centered_message\"></div></div>
            <!-- Modal content-->
            <div class=\"modal-content\" style=\"height: 790px\">
                <div class=\"error_message\"></div>
                <form id=\"profile_form\" style=\"width: 800px;margin-top: 40px;\">
                    <fieldset>
                        <legend><div class=\"modal_logo\"></div><div class=\"modal_action\">Update your profile</div></legend>
                        <div class=\"form-group\">
                            <div class=\"col-md-6\">
                                <label for=\"username\">Username / Alias</label><label id=\"username_error\" class=\"error_register\">Username Exists</label>
                                <input type=\"text\" id=\"r_username\" name=\"r_username\" class=\"form-control\" placeholder=\"Username\"/>
                            </div>
                            <div class=\"col-md-6\">
                                <label for=\"email\">E-mail</label><label id=\"email_error\" class=\"error_register\">E-mail  Exists</label>
                                <input type=\"text\" id=\"r_email\" name=\"r_email\" class=\"form-control\" placeholder=\"Email Address\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-md-6\">
                                <label for=\"r_fname\">First Name</label>
                                <input type=\"text\" id=\"r_fname\" name=\"r_fname\" class=\"form-control\" placeholder=\"First Password\"/>
                            </div>
                            <div class=\"col-md-6\">
                                <label for=\"r_lname\">Last Name</label>
                                <input type=\"text\" id=\"r_lname\" name=\"r_lname\" class=\"form-control\" placeholder=\"Last Name\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-md-6\">
                                <label for=\"password1\">Password</label><label id=\"password_error\" class=\"error_register\">Password Cannot be empty</label>
                                <input type=\"password\" id=\"r_password1\" name=\"password1\" class=\"form-control\" placeholder=\"Change Password\"/>
                            </div>
                            <div class=\"col-md-6\">
                                <label for=\"password2\">Repeat Password</label><label id=\"password_error\" class=\"error_register\">Password Cannot be empty</label>
                                <input type=\"password\" id=\"r_password2\" name=\"password2\" class=\"form-control\" placeholder=\"Repeat Password\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-md-6\">
                                <label for=\"r_phone\">Phone</label>
                                <input type=\"text\" id=\"r_phone\" name=\"r_phone\" class=\"form-control\" placeholder=\"Phone Number\"/>
                            </div>
                            <div class=\"col-md-6\">
                                <label for=\"r_address\">Address</label>
                                <input type=\"text\" id=\"r_address\" name=\"r_address\" class=\"form-control\" placeholder=\"Address\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-md-6\">
                                <label for=\"lat\">Registered Latitude</label>
                                <input type=\"text\" id=\"r_lat\" disabled name=\"lat\" class=\"form-control\"/>
                            </div>
                            <div class=\"col-md-6\">
                                <label for=\"lon\">Registered Longtitude</label>
                                <input type=\"text\" id=\"r_lon\" disabled name=\"lon\" class=\"form-control\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div id=\"profile_loader\" class=\"loader\"><div class=\"icon rotating\"></div> </div>
                            <div id=\"googleMap_profile\" style=\"width:95%; height:200px; margin-left: 2.5%; margin-top: 15px; float: left;\" ></div>

                        </div>
                        <div style=\"margin-top: 15px\" onclick=\"saveUser()\" class=\"update-but btn\"> Save </div>
                        <div style=\"margin-top: 15px\" onclick=\"refreshPosition()\" class=\"refresh-but btn\"> Refresh GeoData </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>


    <div class=\"modal fade\" id=\"add_product_modal\" role=\"dialog\">
        <div class=\"modal-dialog\" style=\"width: 400px;\">
            <div id=\"create_product_loading\" class=\"loader_\"><div class=\"centered_logo rotating\"></div><div class=\"centered_message\"></div></div>
            <!-- Modal content-->
            <div class=\"modal-content\" style=\"height: 700px\">
                <div class=\"error_message\"></div>
                <form id=\"profile_form\" style=\"width: 400px;margin-top: 40px;\">
                    <fieldset>
                        <legend><div class=\"modal_logo\"></div><div class=\"modal_action\">Add new Product</div></legend>
                        <div class=\"form-group\">
                            <div class=\"col-md-12\" style=\"margin-top: 10px;\">
                                <label for=\"p_producer\">Producer</label><label id=\"username_error\" class=\"error_register\">Username Exists</label>
                                <input type=\"text\" id=\"p_producer\" name=\"p_producer\" disabled class=\"form-control\" placeholder=\"Username\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "\"/>
                            </div>

                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-md-12\" style=\"margin-top: 10px;\">
                                <label for=\"p_product\">Product</label>
                                <select id=\"p_product\">
                                    <option value=\"0\">Please select product</option>
                                    ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 110
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-md-12\" style=\"margin-top: 10px;\">
                                <label for=\"p_price\">Price</label><label id=\"password_error\" class=\"error_register\">Password Cannot be empty</label>
                                <input type=\"text\" id=\"p_price\" name=\"p_price\" class=\"form-control\" placeholder=\"Price per Unit\"/>
                            </div>
                        </div>
                        <div class=\"form-group\" >
                            <div class=\"col-md-12\" style=\"margin-top: 10px;\">
                                <label for=\"p_amount\">Amount</label><label id=\"password_error\" class=\"error_register\">Password Cannot be empty</label>
                                <input  type=\"text\" id=\"p_amount\" name=\"p_amount\" class=\"form-control\" placeholder=\"Amount\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-md-12\" style=\"margin-top: 10px;\">
                                <label for=\"rPdate\">Produced Date</label>
                                <input type=\"text\" class=\"new_request_input_date\" id=\"rPdate\" placeholder=\"  /       /  \"><i class=\"fa fa-calendar\" style=\"font-size: 20px; margin-left: 10px; line-height: 30px; float: left;\" onclick=\"showCal('#rPdate')\"></i>
                            </div>

                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-md-12\" style=\"margin-top: 10px;\">
                                <label for=\"rPdate\">Expiration Date</label>
                                <input type=\"text\" class=\"new_request_input_date\" id=\"rEdate\" placeholder=\"  /       /  \"><i class=\"fa fa-calendar\" style=\"font-size: 20px; margin-left: 10px; line-height: 30px; float: left;\" onclick=\"showCal('#rEdate')\"></i>
                            </div>

                        </div>

                        <div style=\"margin-top: 20px\" onclick=\"saveProduct()\" class=\"update-but btn\"> Save </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>

    <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-datepicker3.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-datepicker3.standalone.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/modal.css"), "html", null, true);
        echo "\">
    <!-- Fonts -->
    <link href=\"http://fonts.googleapis.com/css?family=Lato:300,400,700\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">

    ";
        // line 161
        if (twig_in_filter("localhost", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "host", array()))) {
            // line 162
            echo "        <script src=\"http://maps.googleapis.com/maps/api/js\"></script>
    ";
        } else {
            // line 164
            echo "        <script async defer src=\"https://maps.googleapis.com/maps/api/js?key= AIzaSyCSf9vDJJY8WbZ3xPfvOPkz1F6bAMM4unU&callback=getLocation\" type=\"text/javascript\"></script>
    ";
        }
        // line 166
        echo "    ";
        // line 167
        echo "
    <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.11.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/modernizr.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>

    <link rel=\"stylesheet\" href=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/modal.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/ag_dashboard.css"), "html", null, true);
        echo "\">

    <div class=\"full_loader\"><div class=\"icon rotating\"></div></div>
    <div class=\"agcontainer\">
        <div class=\"sidebar\">
            <div class=\"avatar\" style=\"background: url('";
        // line 180
        echo twig_escape_filter($this->env, (isset($context["avatar"]) ? $context["avatar"] : $this->getContext($context, "avatar")), "html", null, true);
        echo "')\"></div>
            <div class=\"line\">";
        // line 181
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "</div>
            <ul class=\"sidebar_actions\">
                <li id=\"dashboard\" class=\"sidebar_action\" onclick=\"displayDashboard()\">Dashboard<span class=\"menu-icon fa fa-tachometer\"></span></li>
                <li id=\"profile\" class=\"sidebar_action\" onclick=\"displayProfile()\">Profile<span class=\"menu-icon fa fa-user\"></span></li>
                <li id=\"product\" class=\"sidebar_action\" onclick=\"displayProduct()\">Add Product<span class=\"menu-icon fa fa-plus\"></span></li>
                <li id=\"offers\" class=\"sidebar_action\" onclick=\"displayOffers()\">View Offers<span class=\"menu-icon fa fa-location-arrow\"></span></li>
                <li id=\"products\" class=\"sidebar_action\" onclick=\"displayProducts()\">View Products<span class=\"menu-icon fa fa-tasks\"></span></li>
            </ul>
            <p class=\"position_bottom center grey\">2016 © Agrot-IS. All rights reserved.</p></div>
        </div>
        <div class=\"content\">

        </div>
    </div>


    <script>


        var USER_OBJ = null;
        var PRODUCTS_OBJ = null;

        var host = location.host;
        if(host.indexOf(\"localhost\") != -1 || host.indexOf(\"127.0.0.1\") != -1 ){
            var SERVER_ADDR = \"http://localhost:8000/\";
        }else if(host.indexOf(\"www\") != -1){
            var SERVER_ADDR = \"http://www.agrot-is.net/\";
        }else{
            var SERVER_ADDR = \"http://agrot-is.net/\";
        }

        function displayDashboard(){
            var INNER_HTML = '<div id=\"googleMap\" style=\"width:100%;height:100%;\" ></div>';
            \$(\".content\").html(INNER_HTML);
            getLocation();
            \$(\".sidebar_action\").removeClass(\"active\");
            \$(\"#dashboard\").addClass(\"active\")
        }


        function refreshPosition(){
            getLocation2()
        }

        function displayProfile(){


            \$(\"#r_username\").val(USER_OBJ.getAttribute(\"username\"))
            \$(\"#r_email\").val(USER_OBJ.getAttribute(\"email\"))
            \$(\"#r_fname\").val(USER_OBJ.getAttribute(\"fname\"))
            \$(\"#r_lname\").val(USER_OBJ.getAttribute(\"lname\"))
            \$(\"#r_address\").val(USER_OBJ.getAttribute(\"address\"))
            \$(\"#r_phone\").val(USER_OBJ.getAttribute(\"phone\"))
            \$(\"#r_lat\").val(USER_OBJ.getAttribute(\"lat\"))
            \$(\"#r_lon\").val(USER_OBJ.getAttribute(\"lon\"))

            \$(\"#profile_loader\").css(\"display\", \"none\")
            showPosition_2(\"googleMap_profile\", parseFloat(USER_OBJ.getAttribute(\"lat\")), parseFloat(USER_OBJ.getAttribute(\"lon\")));


            \$(\"#profile_modal\").modal('show');
            \$(\".sidebar_action\").removeClass(\"active\");
            \$(\"#profile\").addClass(\"active\")

        }

        function saveProduct(){
            var errorMessageEL = \$(\".error_message\");
            errorMessageEL.html(\"\");
            errorMessageEL.removeClass(\"error\");
            errorMessageEL.removeClass(\"success\");

            var username = \$(\"#p_producer\").val();
            var product = \$(\"#p_product\").val();
            var price = \$(\"#p_price\").val();
            var amount = \$(\"#p_amount\").val();
            var pDate = \$(\"#rPdate\").val();
            var eDate = \$(\"#rEdate\").val();


            var today = new Date();
            var producedDate = new Date(pDate.replace(/(\\d{2})[-/](\\d{2})[-/](\\d+)/, \"\$2/\$1/\$3\"));
            var expirationDate = new Date(eDate.replace(/(\\d{2})[-/](\\d{2})[-/](\\d+)/, \"\$2/\$1/\$3\"));


            if (today < producedDate) {
                \$(\"#rPdate\").addClass(\"error_input\")
                console.log(\"PRODUCED DATE IN FUTURE\")
                return;
            } else {
                console.log(\"PRODUCED DATE OK\")
                \$(\"#rPdate\").removeClass(\"error_input\")
            }

            if (today > expirationDate) {
                \$(\"#rEdate\").addClass(\"error_input\")
                console.log(\"EXPIRATION DATE IN PAST\")
                return;
            } else {
                \$(\"#rEdate\").removeClass(\"error_input\")
                console.log(\"EXPIRATION DATE OK\")

            }



            jQuery.ajax({
                url: SERVER_ADDR+\"createProduct\",
                type: 'POST',
                dataType: \"json\",
                data: {
                    username_toSearch: '";
        // line 292
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "',
                    product: product,
                    price: price,
                    amount: amount,
                    pDate: pDate,
                    eDate: eDate,
                },
                headers: {'Access-Control-Allow-Origin': '*'},
                crossDomain: true,
                complete: function (data) {
                    \$(\".assign_button\").removeClass(\"disabled\");

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
                    var error = xmlDoc.getElementsByTagName(\"error\");
                    if (error.length > 0) {

                        displayLoader(\"create_product_loading\", \"An error occured when processing the request\");
                        setTimeout(function(){removeLoader(\"create_product_loading\")}, 3000);
                    } else {


                        displayLoader(\"create_product_loading\", \"Product Saved!\");
                        setTimeout(function(){removeLoader(\"create_product_loading\")}, 2000);

                    }

                }
            });
        }

        function displayProduct(){
            \$(\"#add_product_modal\").modal('show')

            \$(\".sidebar_action\").removeClass(\"active\");
            \$(\"#product\").addClass(\"active\")
        }

        function displayOffers(){
            \$(\".sidebar_action\").removeClass(\"active\");
            \$(\"#offers\").addClass(\"active\")
        }

        function displayProducts(){
            \$(\".sidebar_action\").removeClass(\"active\")
            \$(\"#products\").addClass(\"active\")
        }

        \$( document ).ready(function() {
            resize();
            getUser();
            displayDashboard();

            var dateToday = new Date();
            \$('#rEdate').datepicker({
                format: 'dd/mm/yyyy',
            });
            \$('#rPdate').datepicker({
                format: 'dd/mm/yyyy',
            });
        });


        \$( window ).resize(function() {
            resize()
        });

        function resize(){
            var WINDOW_WIDTH = window.innerWidth;
            var WINDOW_HEIGHT = window.innerHeight;
            var content_element = \$(\".content\");

            content_element.css(\"width\", WINDOW_WIDTH - 300);
            content_element.css(\"left\", 300);

        }

        function getUser(){
            \$.ajax({
                url: SERVER_ADDR + \"getUser\",
                type: 'POST',
                dataType: \"json\",
                data: {
                    username: '";
        // line 383
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "',
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
                    USER_OBJ = xmlDoc.getElementsByTagName(\"User\")[0];
                    PRODUCTS_OBJ = xmlDoc.getElementsByTagName(\"Product\")[0];

                    \$(\".sidebar.avatar\").css(\"background\", \"url('\"+USER_OBJ.getAttribute('avatar')+\"')\")
                    \$(\".full_loader\").css(\"display\",\"none\");
                }
            });
        }
        function saveUser(){

            var errorMessageEL = \$(\".error_message\");
            errorMessageEL.html(\"\");
            errorMessageEL.removeClass(\"error\");
            errorMessageEL.removeClass(\"success\");

            var username = \$(\"#r_username\").val();
            var email = \$(\"#r_email\").val();
            var fname = \$(\"#r_fname\").val();
            var lname = \$(\"#r_lname\").val();
            var address = \$(\"#r_address\").val();
            var phone = \$(\"#r_phone\").val();
            var lat = \$(\"#r_lat\").val();
            var lon = \$(\"#r_lon\").val();

            var pass1 = \$(\"#r_password1\").val();
            var pass2 = \$(\"#r_password2\").val();

            if (pass1 != \"\") {
                if (pass1 != pass2) {
                    errorMessageEL.html(\"Passwords don't match\");
                    errorMessageEL.addClass(\"error\")
                    \$(\"#r_password1\").addClass(\"error_input\");
                    \$(\"#r_password2\").addClass(\"error_input\");

                    setTimeout(function(){removeLoader(\"update_user_loading\")}, 1000);
                    return;
                }
            }


            jQuery.ajax({
                url: SERVER_ADDR+\"updateUser\",
                type: 'POST',
                dataType: \"json\",
                data: {
                    username_toSearch: '";
        // line 443
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "',
                    username: username,
                    email: email,
                    pass1: pass1,
                    pass2: pass2,
                    fname: fname,
                    lname: lname,
                    address: address,
                    phone: phone,
                    lat: lat,
                    lon: lon,
                },
                headers: {'Access-Control-Allow-Origin': '*'},
                crossDomain: true,
                complete: function (data) {
                    \$(\".assign_button\").removeClass(\"disabled\");

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
                    var error = xmlDoc.getElementsByTagName(\"error\");
                    if (error.length > 0) {
                        if (error[0].getAttribute(\"id\") == \"1\") {
                            displayLoader(\"update_user_loading\", \"This Username/Alias already exists. Reverting changes...\");
                            \$(\"#r_username\").addClass(\"error_input\");
                        } else if (error[0].getAttribute(\"id\") == \"2\") {
                            displayLoader(\"update_user_loading\", \"This Email address already exists. Reverting changes...\");
                            \$(\"#r_email\").addClass(\"error_input\");
                        } else {
                            displayLoader(\"update_user_loading\", \"An error occured when processing the request\");
                        }
                        setTimeout(function(){removeLoader(\"update_user_loading\")}, 3000);
                    } else {


                        displayLoader(\"update_user_loading\", \"User Saved!\");
                        setTimeout(function(){removeLoader(\"update_user_loading\")}, 2000);

                    }

                }
            });

        }


        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            }
        }

        function getLocation2() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition2);
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

            ";
        // line 520
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offers"]) ? $context["offers"] : $this->getContext($context, "offers")));
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 521
            echo "            var myLatLng = {lat: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["offer"], "user", array()), "registrationLat", array()), "html", null, true);
            echo ", lng: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["offer"], "user", array()), "registrationLon", array()), "html", null, true);
            echo "};
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: '";
            // line 525
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "message", array()), "html", null, true);
            echo "'
            });
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 528
        echo "        }

        function showPosition(position) {
            initialize( position.coords.latitude,  position.coords.longitude)
        }

        function showPosition2(position) {
            showPosition_2(\"googleMap_profile\", position.coords.latitude,  position.coords.longitude)

            \$(\"#r_lat\").val(position.coords.latitude);
            \$(\"#r_lon\").val(position.coords.longitude)
        }


        function showPosition_2(id, lat, lon) {

            var mapProp = {
                center:new google.maps.LatLng(lat,lon),
                zoom:7,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };



            var map=new google.maps.Map(document.getElementById(id),mapProp);


            var myLatLng = {lat: lat, lng: lon};
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Your Location'
            });

            google.maps.event.trigger(map, \"resize\");
            setTimeout(function (){ google.maps.event.trigger(map, \"resize\"); map.setCenter(new google.maps.LatLng(lat,lon)); }, 2000 )

        }

        function displayLoader(loader_id, message) {
            \$(\".centered_message\").html(message);
            \$(\"#\"+loader_id).css(\"display\", \"block\")

        }
        function removeLoader(loader_id) {
            \$(\".centered_message\").html(\"Loading\");
            \$(\"#\"+loader_id).css(\"display\", \"none\")

        }

        function showCal(id) {
            \$(id).focus();
        }
    </script>
";
        
        $__internal_50316a312300e5204604e6379b3a27606301afd40cff55c20567a3395a56c370->leave($__internal_50316a312300e5204604e6379b3a27606301afd40cff55c20567a3395a56c370_prof);

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
        return array (  679 => 528,  670 => 525,  660 => 521,  656 => 520,  576 => 443,  513 => 383,  419 => 292,  305 => 181,  301 => 180,  293 => 175,  288 => 173,  283 => 171,  279 => 170,  274 => 168,  271 => 167,  269 => 166,  265 => 164,  261 => 162,  259 => 161,  251 => 156,  246 => 154,  242 => 153,  238 => 152,  234 => 151,  193 => 112,  182 => 110,  178 => 109,  166 => 100,  77 => 13,  71 => 12,  60 => 10,  49 => 9,  37 => 3,  11 => 1,);
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
/* */
/*     <div class="modal fade" id="profile_modal" role="dialog">*/
/*         <div class="modal-dialog" style="width: 800px;">*/
/*             <div id="update_user_loading" class="loader_"><div class="centered_logo rotating"></div><div class="centered_message"></div></div>*/
/*             <!-- Modal content-->*/
/*             <div class="modal-content" style="height: 790px">*/
/*                 <div class="error_message"></div>*/
/*                 <form id="profile_form" style="width: 800px;margin-top: 40px;">*/
/*                     <fieldset>*/
/*                         <legend><div class="modal_logo"></div><div class="modal_action">Update your profile</div></legend>*/
/*                         <div class="form-group">*/
/*                             <div class="col-md-6">*/
/*                                 <label for="username">Username / Alias</label><label id="username_error" class="error_register">Username Exists</label>*/
/*                                 <input type="text" id="r_username" name="r_username" class="form-control" placeholder="Username"/>*/
/*                             </div>*/
/*                             <div class="col-md-6">*/
/*                                 <label for="email">E-mail</label><label id="email_error" class="error_register">E-mail  Exists</label>*/
/*                                 <input type="text" id="r_email" name="r_email" class="form-control" placeholder="Email Address"/>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <div class="col-md-6">*/
/*                                 <label for="r_fname">First Name</label>*/
/*                                 <input type="text" id="r_fname" name="r_fname" class="form-control" placeholder="First Password"/>*/
/*                             </div>*/
/*                             <div class="col-md-6">*/
/*                                 <label for="r_lname">Last Name</label>*/
/*                                 <input type="text" id="r_lname" name="r_lname" class="form-control" placeholder="Last Name"/>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <div class="col-md-6">*/
/*                                 <label for="password1">Password</label><label id="password_error" class="error_register">Password Cannot be empty</label>*/
/*                                 <input type="password" id="r_password1" name="password1" class="form-control" placeholder="Change Password"/>*/
/*                             </div>*/
/*                             <div class="col-md-6">*/
/*                                 <label for="password2">Repeat Password</label><label id="password_error" class="error_register">Password Cannot be empty</label>*/
/*                                 <input type="password" id="r_password2" name="password2" class="form-control" placeholder="Repeat Password"/>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <div class="col-md-6">*/
/*                                 <label for="r_phone">Phone</label>*/
/*                                 <input type="text" id="r_phone" name="r_phone" class="form-control" placeholder="Phone Number"/>*/
/*                             </div>*/
/*                             <div class="col-md-6">*/
/*                                 <label for="r_address">Address</label>*/
/*                                 <input type="text" id="r_address" name="r_address" class="form-control" placeholder="Address"/>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <div class="col-md-6">*/
/*                                 <label for="lat">Registered Latitude</label>*/
/*                                 <input type="text" id="r_lat" disabled name="lat" class="form-control"/>*/
/*                             </div>*/
/*                             <div class="col-md-6">*/
/*                                 <label for="lon">Registered Longtitude</label>*/
/*                                 <input type="text" id="r_lon" disabled name="lon" class="form-control"/>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <div id="profile_loader" class="loader"><div class="icon rotating"></div> </div>*/
/*                             <div id="googleMap_profile" style="width:95%; height:200px; margin-left: 2.5%; margin-top: 15px; float: left;" ></div>*/
/* */
/*                         </div>*/
/*                         <div style="margin-top: 15px" onclick="saveUser()" class="update-but btn"> Save </div>*/
/*                         <div style="margin-top: 15px" onclick="refreshPosition()" class="refresh-but btn"> Refresh GeoData </div>*/
/*                     </fieldset>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     <div class="modal fade" id="add_product_modal" role="dialog">*/
/*         <div class="modal-dialog" style="width: 400px;">*/
/*             <div id="create_product_loading" class="loader_"><div class="centered_logo rotating"></div><div class="centered_message"></div></div>*/
/*             <!-- Modal content-->*/
/*             <div class="modal-content" style="height: 700px">*/
/*                 <div class="error_message"></div>*/
/*                 <form id="profile_form" style="width: 400px;margin-top: 40px;">*/
/*                     <fieldset>*/
/*                         <legend><div class="modal_logo"></div><div class="modal_action">Add new Product</div></legend>*/
/*                         <div class="form-group">*/
/*                             <div class="col-md-12" style="margin-top: 10px;">*/
/*                                 <label for="p_producer">Producer</label><label id="username_error" class="error_register">Username Exists</label>*/
/*                                 <input type="text" id="p_producer" name="p_producer" disabled class="form-control" placeholder="Username" value="{{ username }}"/>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <div class="col-md-12" style="margin-top: 10px;">*/
/*                                 <label for="p_product">Product</label>*/
/*                                 <select id="p_product">*/
/*                                     <option value="0">Please select product</option>*/
/*                                     {% for product in products %}*/
/*                                         <option value="{{ product.id }}">{{ product.description }}</option>*/
/*                                     {% endfor %}*/
/*                                 </select>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <div class="col-md-12" style="margin-top: 10px;">*/
/*                                 <label for="p_price">Price</label><label id="password_error" class="error_register">Password Cannot be empty</label>*/
/*                                 <input type="text" id="p_price" name="p_price" class="form-control" placeholder="Price per Unit"/>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group" >*/
/*                             <div class="col-md-12" style="margin-top: 10px;">*/
/*                                 <label for="p_amount">Amount</label><label id="password_error" class="error_register">Password Cannot be empty</label>*/
/*                                 <input  type="text" id="p_amount" name="p_amount" class="form-control" placeholder="Amount"/>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <div class="col-md-12" style="margin-top: 10px;">*/
/*                                 <label for="rPdate">Produced Date</label>*/
/*                                 <input type="text" class="new_request_input_date" id="rPdate" placeholder="  /       /  "><i class="fa fa-calendar" style="font-size: 20px; margin-left: 10px; line-height: 30px; float: left;" onclick="showCal('#rPdate')"></i>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <div class="col-md-12" style="margin-top: 10px;">*/
/*                                 <label for="rPdate">Expiration Date</label>*/
/*                                 <input type="text" class="new_request_input_date" id="rEdate" placeholder="  /       /  "><i class="fa fa-calendar" style="font-size: 20px; margin-left: 10px; line-height: 30px; float: left;" onclick="showCal('#rEdate')"></i>*/
/*                             </div>*/
/* */
/*                         </div>*/
/* */
/*                         <div style="margin-top: 20px" onclick="saveProduct()" class="update-but btn"> Save </div>*/
/* */
/*                     </fieldset>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
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
/*     {% if 'localhost' in app.request.host  %}*/
/*         <script src="http://maps.googleapis.com/maps/api/js"></script>*/
/*     {% else %}*/
/*         <script async defer src="https://maps.googleapis.com/maps/api/js?key= AIzaSyCSf9vDJJY8WbZ3xPfvOPkz1F6bAMM4unU&callback=getLocation" type="text/javascript"></script>*/
/*     {% endif %}*/
/*     {#<script async defer src="https://maps.googleapis.com/maps/api/js?key= AIzaSyCSf9vDJJY8WbZ3xPfvOPkz1F6bAMM4unU&callback=getLocation" type="text/javascript"></script>#}*/
/* */
/*     <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>*/
/*     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>*/
/*     <script src="{{ asset('js/modernizr.js') }}"></script>*/
/*     <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>*/
/* */
/*     <link rel="stylesheet" href="{{ asset('css/modal.css') }}">*/
/* */
/*     <link rel="stylesheet" href="{{ asset('css/ag_dashboard.css') }}">*/
/* */
/*     <div class="full_loader"><div class="icon rotating"></div></div>*/
/*     <div class="agcontainer">*/
/*         <div class="sidebar">*/
/*             <div class="avatar" style="background: url('{{ avatar }}')"></div>*/
/*             <div class="line">{{ username }}</div>*/
/*             <ul class="sidebar_actions">*/
/*                 <li id="dashboard" class="sidebar_action" onclick="displayDashboard()">Dashboard<span class="menu-icon fa fa-tachometer"></span></li>*/
/*                 <li id="profile" class="sidebar_action" onclick="displayProfile()">Profile<span class="menu-icon fa fa-user"></span></li>*/
/*                 <li id="product" class="sidebar_action" onclick="displayProduct()">Add Product<span class="menu-icon fa fa-plus"></span></li>*/
/*                 <li id="offers" class="sidebar_action" onclick="displayOffers()">View Offers<span class="menu-icon fa fa-location-arrow"></span></li>*/
/*                 <li id="products" class="sidebar_action" onclick="displayProducts()">View Products<span class="menu-icon fa fa-tasks"></span></li>*/
/*             </ul>*/
/*             <p class="position_bottom center grey">2016 © Agrot-IS. All rights reserved.</p></div>*/
/*         </div>*/
/*         <div class="content">*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     <script>*/
/* */
/* */
/*         var USER_OBJ = null;*/
/*         var PRODUCTS_OBJ = null;*/
/* */
/*         var host = location.host;*/
/*         if(host.indexOf("localhost") != -1 || host.indexOf("127.0.0.1") != -1 ){*/
/*             var SERVER_ADDR = "http://localhost:8000/";*/
/*         }else if(host.indexOf("www") != -1){*/
/*             var SERVER_ADDR = "http://www.agrot-is.net/";*/
/*         }else{*/
/*             var SERVER_ADDR = "http://agrot-is.net/";*/
/*         }*/
/* */
/*         function displayDashboard(){*/
/*             var INNER_HTML = '<div id="googleMap" style="width:100%;height:100%;" ></div>';*/
/*             $(".content").html(INNER_HTML);*/
/*             getLocation();*/
/*             $(".sidebar_action").removeClass("active");*/
/*             $("#dashboard").addClass("active")*/
/*         }*/
/* */
/* */
/*         function refreshPosition(){*/
/*             getLocation2()*/
/*         }*/
/* */
/*         function displayProfile(){*/
/* */
/* */
/*             $("#r_username").val(USER_OBJ.getAttribute("username"))*/
/*             $("#r_email").val(USER_OBJ.getAttribute("email"))*/
/*             $("#r_fname").val(USER_OBJ.getAttribute("fname"))*/
/*             $("#r_lname").val(USER_OBJ.getAttribute("lname"))*/
/*             $("#r_address").val(USER_OBJ.getAttribute("address"))*/
/*             $("#r_phone").val(USER_OBJ.getAttribute("phone"))*/
/*             $("#r_lat").val(USER_OBJ.getAttribute("lat"))*/
/*             $("#r_lon").val(USER_OBJ.getAttribute("lon"))*/
/* */
/*             $("#profile_loader").css("display", "none")*/
/*             showPosition_2("googleMap_profile", parseFloat(USER_OBJ.getAttribute("lat")), parseFloat(USER_OBJ.getAttribute("lon")));*/
/* */
/* */
/*             $("#profile_modal").modal('show');*/
/*             $(".sidebar_action").removeClass("active");*/
/*             $("#profile").addClass("active")*/
/* */
/*         }*/
/* */
/*         function saveProduct(){*/
/*             var errorMessageEL = $(".error_message");*/
/*             errorMessageEL.html("");*/
/*             errorMessageEL.removeClass("error");*/
/*             errorMessageEL.removeClass("success");*/
/* */
/*             var username = $("#p_producer").val();*/
/*             var product = $("#p_product").val();*/
/*             var price = $("#p_price").val();*/
/*             var amount = $("#p_amount").val();*/
/*             var pDate = $("#rPdate").val();*/
/*             var eDate = $("#rEdate").val();*/
/* */
/* */
/*             var today = new Date();*/
/*             var producedDate = new Date(pDate.replace(/(\d{2})[-/](\d{2})[-/](\d+)/, "$2/$1/$3"));*/
/*             var expirationDate = new Date(eDate.replace(/(\d{2})[-/](\d{2})[-/](\d+)/, "$2/$1/$3"));*/
/* */
/* */
/*             if (today < producedDate) {*/
/*                 $("#rPdate").addClass("error_input")*/
/*                 console.log("PRODUCED DATE IN FUTURE")*/
/*                 return;*/
/*             } else {*/
/*                 console.log("PRODUCED DATE OK")*/
/*                 $("#rPdate").removeClass("error_input")*/
/*             }*/
/* */
/*             if (today > expirationDate) {*/
/*                 $("#rEdate").addClass("error_input")*/
/*                 console.log("EXPIRATION DATE IN PAST")*/
/*                 return;*/
/*             } else {*/
/*                 $("#rEdate").removeClass("error_input")*/
/*                 console.log("EXPIRATION DATE OK")*/
/* */
/*             }*/
/* */
/* */
/* */
/*             jQuery.ajax({*/
/*                 url: SERVER_ADDR+"createProduct",*/
/*                 type: 'POST',*/
/*                 dataType: "json",*/
/*                 data: {*/
/*                     username_toSearch: '{{ username }}',*/
/*                     product: product,*/
/*                     price: price,*/
/*                     amount: amount,*/
/*                     pDate: pDate,*/
/*                     eDate: eDate,*/
/*                 },*/
/*                 headers: {'Access-Control-Allow-Origin': '*'},*/
/*                 crossDomain: true,*/
/*                 complete: function (data) {*/
/*                     $(".assign_button").removeClass("disabled");*/
/* */
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
/*                     var error = xmlDoc.getElementsByTagName("error");*/
/*                     if (error.length > 0) {*/
/* */
/*                         displayLoader("create_product_loading", "An error occured when processing the request");*/
/*                         setTimeout(function(){removeLoader("create_product_loading")}, 3000);*/
/*                     } else {*/
/* */
/* */
/*                         displayLoader("create_product_loading", "Product Saved!");*/
/*                         setTimeout(function(){removeLoader("create_product_loading")}, 2000);*/
/* */
/*                     }*/
/* */
/*                 }*/
/*             });*/
/*         }*/
/* */
/*         function displayProduct(){*/
/*             $("#add_product_modal").modal('show')*/
/* */
/*             $(".sidebar_action").removeClass("active");*/
/*             $("#product").addClass("active")*/
/*         }*/
/* */
/*         function displayOffers(){*/
/*             $(".sidebar_action").removeClass("active");*/
/*             $("#offers").addClass("active")*/
/*         }*/
/* */
/*         function displayProducts(){*/
/*             $(".sidebar_action").removeClass("active")*/
/*             $("#products").addClass("active")*/
/*         }*/
/* */
/*         $( document ).ready(function() {*/
/*             resize();*/
/*             getUser();*/
/*             displayDashboard();*/
/* */
/*             var dateToday = new Date();*/
/*             $('#rEdate').datepicker({*/
/*                 format: 'dd/mm/yyyy',*/
/*             });*/
/*             $('#rPdate').datepicker({*/
/*                 format: 'dd/mm/yyyy',*/
/*             });*/
/*         });*/
/* */
/* */
/*         $( window ).resize(function() {*/
/*             resize()*/
/*         });*/
/* */
/*         function resize(){*/
/*             var WINDOW_WIDTH = window.innerWidth;*/
/*             var WINDOW_HEIGHT = window.innerHeight;*/
/*             var content_element = $(".content");*/
/* */
/*             content_element.css("width", WINDOW_WIDTH - 300);*/
/*             content_element.css("left", 300);*/
/* */
/*         }*/
/* */
/*         function getUser(){*/
/*             $.ajax({*/
/*                 url: SERVER_ADDR + "getUser",*/
/*                 type: 'POST',*/
/*                 dataType: "json",*/
/*                 data: {*/
/*                     username: '{{ username }}',*/
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
/*                     USER_OBJ = xmlDoc.getElementsByTagName("User")[0];*/
/*                     PRODUCTS_OBJ = xmlDoc.getElementsByTagName("Product")[0];*/
/* */
/*                     $(".sidebar.avatar").css("background", "url('"+USER_OBJ.getAttribute('avatar')+"')")*/
/*                     $(".full_loader").css("display","none");*/
/*                 }*/
/*             });*/
/*         }*/
/*         function saveUser(){*/
/* */
/*             var errorMessageEL = $(".error_message");*/
/*             errorMessageEL.html("");*/
/*             errorMessageEL.removeClass("error");*/
/*             errorMessageEL.removeClass("success");*/
/* */
/*             var username = $("#r_username").val();*/
/*             var email = $("#r_email").val();*/
/*             var fname = $("#r_fname").val();*/
/*             var lname = $("#r_lname").val();*/
/*             var address = $("#r_address").val();*/
/*             var phone = $("#r_phone").val();*/
/*             var lat = $("#r_lat").val();*/
/*             var lon = $("#r_lon").val();*/
/* */
/*             var pass1 = $("#r_password1").val();*/
/*             var pass2 = $("#r_password2").val();*/
/* */
/*             if (pass1 != "") {*/
/*                 if (pass1 != pass2) {*/
/*                     errorMessageEL.html("Passwords don't match");*/
/*                     errorMessageEL.addClass("error")*/
/*                     $("#r_password1").addClass("error_input");*/
/*                     $("#r_password2").addClass("error_input");*/
/* */
/*                     setTimeout(function(){removeLoader("update_user_loading")}, 1000);*/
/*                     return;*/
/*                 }*/
/*             }*/
/* */
/* */
/*             jQuery.ajax({*/
/*                 url: SERVER_ADDR+"updateUser",*/
/*                 type: 'POST',*/
/*                 dataType: "json",*/
/*                 data: {*/
/*                     username_toSearch: '{{ username }}',*/
/*                     username: username,*/
/*                     email: email,*/
/*                     pass1: pass1,*/
/*                     pass2: pass2,*/
/*                     fname: fname,*/
/*                     lname: lname,*/
/*                     address: address,*/
/*                     phone: phone,*/
/*                     lat: lat,*/
/*                     lon: lon,*/
/*                 },*/
/*                 headers: {'Access-Control-Allow-Origin': '*'},*/
/*                 crossDomain: true,*/
/*                 complete: function (data) {*/
/*                     $(".assign_button").removeClass("disabled");*/
/* */
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
/*                     var error = xmlDoc.getElementsByTagName("error");*/
/*                     if (error.length > 0) {*/
/*                         if (error[0].getAttribute("id") == "1") {*/
/*                             displayLoader("update_user_loading", "This Username/Alias already exists. Reverting changes...");*/
/*                             $("#r_username").addClass("error_input");*/
/*                         } else if (error[0].getAttribute("id") == "2") {*/
/*                             displayLoader("update_user_loading", "This Email address already exists. Reverting changes...");*/
/*                             $("#r_email").addClass("error_input");*/
/*                         } else {*/
/*                             displayLoader("update_user_loading", "An error occured when processing the request");*/
/*                         }*/
/*                         setTimeout(function(){removeLoader("update_user_loading")}, 3000);*/
/*                     } else {*/
/* */
/* */
/*                         displayLoader("update_user_loading", "User Saved!");*/
/*                         setTimeout(function(){removeLoader("update_user_loading")}, 2000);*/
/* */
/*                     }*/
/* */
/*                 }*/
/*             });*/
/* */
/*         }*/
/* */
/* */
/*         function getLocation() {*/
/*             if (navigator.geolocation) {*/
/*                 navigator.geolocation.getCurrentPosition(showPosition);*/
/*             }*/
/*         }*/
/* */
/*         function getLocation2() {*/
/*             if (navigator.geolocation) {*/
/*                 navigator.geolocation.getCurrentPosition(showPosition2);*/
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
/*             {% for offer in offers %}*/
/*             var myLatLng = {lat: {{ offer.user.registrationLat }}, lng: {{ offer.user.registrationLon }}};*/
/*             var marker = new google.maps.Marker({*/
/*                 position: myLatLng,*/
/*                 map: map,*/
/*                 title: '{{ offer.message }}'*/
/*             });*/
/*             {% endfor %}*/
/*         }*/
/* */
/*         function showPosition(position) {*/
/*             initialize( position.coords.latitude,  position.coords.longitude)*/
/*         }*/
/* */
/*         function showPosition2(position) {*/
/*             showPosition_2("googleMap_profile", position.coords.latitude,  position.coords.longitude)*/
/* */
/*             $("#r_lat").val(position.coords.latitude);*/
/*             $("#r_lon").val(position.coords.longitude)*/
/*         }*/
/* */
/* */
/*         function showPosition_2(id, lat, lon) {*/
/* */
/*             var mapProp = {*/
/*                 center:new google.maps.LatLng(lat,lon),*/
/*                 zoom:7,*/
/*                 mapTypeId:google.maps.MapTypeId.ROADMAP*/
/*             };*/
/* */
/* */
/* */
/*             var map=new google.maps.Map(document.getElementById(id),mapProp);*/
/* */
/* */
/*             var myLatLng = {lat: lat, lng: lon};*/
/*             var marker = new google.maps.Marker({*/
/*                 position: myLatLng,*/
/*                 map: map,*/
/*                 title: 'Your Location'*/
/*             });*/
/* */
/*             google.maps.event.trigger(map, "resize");*/
/*             setTimeout(function (){ google.maps.event.trigger(map, "resize"); map.setCenter(new google.maps.LatLng(lat,lon)); }, 2000 )*/
/* */
/*         }*/
/* */
/*         function displayLoader(loader_id, message) {*/
/*             $(".centered_message").html(message);*/
/*             $("#"+loader_id).css("display", "block")*/
/* */
/*         }*/
/*         function removeLoader(loader_id) {*/
/*             $(".centered_message").html("Loading");*/
/*             $("#"+loader_id).css("display", "none")*/
/* */
/*         }*/
/* */
/*         function showCal(id) {*/
/*             $(id).focus();*/
/*         }*/
/*     </script>*/
/* {% endblock %}*/
/* */
