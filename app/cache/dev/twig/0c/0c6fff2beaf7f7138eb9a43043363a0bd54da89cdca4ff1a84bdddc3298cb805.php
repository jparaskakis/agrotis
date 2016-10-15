<?php

/* default/dashboard_buis.html.twig */
class __TwigTemplate_66bf21f54f24074d7dc41be4a257e6cf8af0349d146db75bc9bced9fa10e233b extends Twig_Template
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
        $__internal_38044a338dd67055b187166100fd1923bab59c156cd37034af8b4f433158ccaf = $this->env->getExtension("native_profiler");
        $__internal_38044a338dd67055b187166100fd1923bab59c156cd37034af8b4f433158ccaf->enter($__internal_38044a338dd67055b187166100fd1923bab59c156cd37034af8b4f433158ccaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashboard_buis.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38044a338dd67055b187166100fd1923bab59c156cd37034af8b4f433158ccaf->leave($__internal_38044a338dd67055b187166100fd1923bab59c156cd37034af8b4f433158ccaf_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_41f3a373d6f998a534f99c8628edd3952bb90e9120f8566d73775eccaaa24a68 = $this->env->getExtension("native_profiler");
        $__internal_41f3a373d6f998a534f99c8628edd3952bb90e9120f8566d73775eccaaa24a68->enter($__internal_41f3a373d6f998a534f99c8628edd3952bb90e9120f8566d73775eccaaa24a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "dashboard";
        
        $__internal_41f3a373d6f998a534f99c8628edd3952bb90e9120f8566d73775eccaaa24a68->leave($__internal_41f3a373d6f998a534f99c8628edd3952bb90e9120f8566d73775eccaaa24a68_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_ef0741c3397c351a0dc6e0377f76214f70ca83547524a00a21ed4682fe99f2d0 = $this->env->getExtension("native_profiler");
        $__internal_ef0741c3397c351a0dc6e0377f76214f70ca83547524a00a21ed4682fe99f2d0->enter($__internal_ef0741c3397c351a0dc6e0377f76214f70ca83547524a00a21ed4682fe99f2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_ef0741c3397c351a0dc6e0377f76214f70ca83547524a00a21ed4682fe99f2d0->leave($__internal_ef0741c3397c351a0dc6e0377f76214f70ca83547524a00a21ed4682fe99f2d0_prof);

    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d808440d7661fbe775426cf2111e85dd4cc36b781868145424fffac0bd2e7792 = $this->env->getExtension("native_profiler");
        $__internal_d808440d7661fbe775426cf2111e85dd4cc36b781868145424fffac0bd2e7792->enter($__internal_d808440d7661fbe775426cf2111e85dd4cc36b781868145424fffac0bd2e7792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_d808440d7661fbe775426cf2111e85dd4cc36b781868145424fffac0bd2e7792->leave($__internal_d808440d7661fbe775426cf2111e85dd4cc36b781868145424fffac0bd2e7792_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a1c83d5856e1b217bfb4870cee9bdf4471b5dd979edbb01db11d59722c35663 = $this->env->getExtension("native_profiler");
        $__internal_7a1c83d5856e1b217bfb4870cee9bdf4471b5dd979edbb01db11d59722c35663->enter($__internal_7a1c83d5856e1b217bfb4870cee9bdf4471b5dd979edbb01db11d59722c35663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <legend><div class=\"modal_logo\"></div><div class=\"modal_action\">Add new Crop</div></legend>
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
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-table.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/modal.css"), "html", null, true);
        echo "\">
    <!-- Fonts -->
    <link href=\"http://fonts.googleapis.com/css?family=Lato:300,400,700\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">

    ";
        // line 162
        if (twig_in_filter("localhost", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "host", array()))) {
            // line 163
            echo "        <script src=\"http://maps.googleapis.com/maps/api/js\"></script>
    ";
        } else {
            // line 165
            echo "        <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyD9J_3yPsTcTvsXQhUniIOkSzP2RHc1p2Y&callback=getLocation\" type=\"text/javascript\"></script>
    ";
        }
        // line 167
        echo "    ";
        // line 168
        echo "
    <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.11.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/modernizr.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-table.js"), "html", null, true);
        echo "\"></script>

    <link rel=\"stylesheet\" href=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/modal.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/ag_dashboard.css"), "html", null, true);
        echo "\">

    <div class=\"full_loader\"><div class=\"icon rotating\"></div></div>
    <div class=\"agcontainer\">
        <div class=\"sidebar\">
            <div class=\"avatar\" style=\"background: url('";
        // line 182
        echo twig_escape_filter($this->env, (isset($context["avatar"]) ? $context["avatar"] : $this->getContext($context, "avatar")), "html", null, true);
        echo "')\"></div>
            <div class=\"line\">";
        // line 183
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "</div>
            <ul class=\"sidebar_actions\">
                <li id=\"dashboard\" class=\"sidebar_action\" onclick=\"displayDashboard()\">Dashboard<span class=\"menu-icon fa fa-tachometer\"></span></li>
                <li id=\"profile\" class=\"sidebar_action\" onclick=\"displayProfile()\">Profile<span class=\"menu-icon fa fa-user\"></span></li>
                <li id=\"offers\" class=\"sidebar_action\" onclick=\"displayOffers()\">View Offers<span class=\"menu-icon fa fa-location-arrow\"></span></li>
                <li id=\"products\" class=\"sidebar_action\" onclick=\"displayProducts()\">View Crops<span class=\"menu-icon fa fa-tasks\"></span></li>
                <li id=\"products\" class=\"sidebar_action\" onclick=\"logout()\">Logout<span class=\"menu-icon fa fa-close\"></span></li>
            </ul>
            <div class=\"sidebar_filter\">
                <div class=\"info\">Filter Crops</div>
                <div class=\"info_tag\">Filter by Product</div>
                <select id=\"filter_product\">
                    <option value=\"0\">Select product to filter</option>
                    ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 197
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "                </select>
                <div class=\"info_tag\">Filter by Producer</div>
                <select id=\"filter_producer\">
                    <option value=\"0\">Select producer to filter</option>
                    ";
        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["producers"]) ? $context["producers"] : $this->getContext($context, "producers")));
        foreach ($context['_seq'] as $context["_key"] => $context["producer"]) {
            // line 204
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["producer"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["producer"], "username", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "                </select>
                <div class=\"info_tag\">Filter by range</div>
                <div class=\"form-group\">
                    <div class=\"col-md-6\">
                        <input type=\"text\" id=\"filter_min_distance\" name=\"filter_min_distance\" class=\"form-control\" placeholder=\"Min Range\"/>
                    </div>
                    <div class=\"col-md-6\">
                        <input type=\"text\" id=\"filter_max_distance\" name=\"filter_max_distance\" class=\"form-control\" placeholder=\"Max Range\"/>
                    </div>
                </div>
                <div class=\"apply_filter\" onclick=\"applyFilters()\">Apply Filters</div>
            </div>
            <p class=\"position_bottom center grey\">2016 © Agrot-IS. All rights reserved.</p></div>
    </div>
    <div class=\"content\">

    </div>
    </div>


    <script>


        var USER_OBJ = null;
        var PRODUCTS_OBJ = null;

        var SERVER_ADDR = \"http://www.agrot-is.net/\";

        function applyFilters(){

            var product_id = \$(\"#filter_product\").val();
            var producer_id = \$(\"#filter_producer\").val();
            var min = \$(\"#filter_min_distance\").val();
            var max = \$(\"#filter_max_distance\").val();
            var url = window.location.href;


            var newURL = url.split(\"?\")[0];
            newURL += '?product_id='+product_id+\"&producer_id=\"+producer_id+\"&min=\"+min+\"&max=\"+max;

            window.location.href = newURL;
//            window.location.reload()
        }

        function displayDashboard(){
            var url = location.href;
            location.href = \"#dashboard\";

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
            var url = location.href;
            location.href = \"#profile\";
            var INNER_HTML = '<div id=\"googleMap\" style=\"width:100%;height:100%;\" ></div>';
            \$(\".content\").html(INNER_HTML);
            getLocation();

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
                \$(\"#rPdate\").addClass(\"error_input\");
                return;
            } else {
                \$(\"#rPdate\").removeClass(\"error_input\")
            }

            if (today > expirationDate) {
                \$(\"#rEdate\").addClass(\"error_input\");
                return;
            } else {
                \$(\"#rEdate\").removeClass(\"error_input\");

            }



            jQuery.ajax({
                url: SERVER_ADDR+\"createCrop\",
                type: 'POST',
                dataType: \"json\",
                data: {
                    username_toSearch: '";
        // line 333
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

            var url = location.href;
            location.href = \"#product\";

            var INNER_HTML = '<div id=\"googleMap\" style=\"width:100%;height:100%;\" ></div>';
            \$(\".content\").html(INNER_HTML);
            getLocation();

            \$(\"#add_product_modal\").modal('show')

            \$(\".sidebar_action\").removeClass(\"active\");
            \$(\"#product\").addClass(\"active\")
        }

        function displayOffers(){

            var url = location.href;
            location.href = \"#offers\";

            var INNER_HTML = '<div class=\"row\">' +
                    '<div class=\"col-lg-12\">' +
                    '<div class=\"panel panel-default\">' +
                    '<div class=\"panel-heading\">Producer Offers</div>' +
                    '<div class=\"panel-body\">' +
                    '<table id=\"allOffers\" data-toggle=\"table\" data-url=\"x\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"id\" data-sort-order=\"desc\">' +
                    '<thead>' +
                    '<tr>' +
                    '<th data-field=\"id\" data-sortable=\"true\" style=\"max-width: 50px\">Id</th>' +
                    '<th data-field=\"producer\" data-sortable=\"false\">Producer Name</th>' +
                    '<th data-field=\"cropProduct\" data-sortable=\"true\">Product</th>' +
                    '<th data-field=\"amount\" data-sortable=\"true\">Amount</th>' +
                    '<th data-field=\"price\" data-sortable=\"true\">Price</th>' +
                    '<th data-field=\"message\" data-sortable=\"true\">Buyer Message</th>' +
                    '<th data-field=\"cropPD\" data-sortable=\"true\">Production Date</th>' +
                    '<th data-field=\"cropED\" data-sortable=\"true\">Expiration Date</th>' +
                    '<th data-field=\"edit\" data-sortable=\"true\" class=\"alignright\">Actions</th>' +
                    '</tr>' +
                    '</thead>' +
                    '</table>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>';

            \$(\".content\").html(INNER_HTML);

            \$('#allOffers').bootstrapTable({
                data: ";
        // line 420
        echo (isset($context["offers_json"]) ? $context["offers_json"] : $this->getContext($context, "offers_json"));
        echo ",
                pageSize: 30,
                onClickRow: function (row, \$element) {
                    ROW_CLICKED = \$element
                }
            });

            \$(\".sidebar_action\").removeClass(\"active\");
            \$(\"#offers\").addClass(\"active\")
        }

        function acceptOffer(offerId){
            respondToOffer(\"true\", offerId);
        }

        function deleteOffer(offerId){
            respondToOffer(\"false\", offerId);
        }

        function respondToOffer(accepted, offerId){
            \$.ajax({
                url: SERVER_ADDR + \"respondToOffer\",
                type: 'POST',
                dataType: \"json\",
                data: {
                    username_toSearch: '";
        // line 445
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "',
                    isAccepted: accepted,
                    offer_id: offerId,
                },
                headers: {'Access-Control-Allow-Origin': '*'},
                crossDomain: true,
                complete: function (data) {
                    window.location.reload(true)
                }
            });
        }

        function deleteCrop(crop_id){
            \$.ajax({
                url: SERVER_ADDR + \"deleteCrop\",
                type: 'POST',
                dataType: \"json\",
                data: {
                    username_toSearch: '";
        // line 463
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "',
                    crop_id: crop_id,
                },
                headers: {'Access-Control-Allow-Origin': '*'},
                crossDomain: true,
                complete: function (data) {
                    window.location.reload(true)
                }
            });
        }

        function displayProducts(){

            var url = location.href;
            location.href = \"#crops\";

            var INNER_HTML = '<div class=\"row\">' +
                    '<div class=\"col-lg-12\">' +
                    '<div class=\"panel panel-default\">' +
                    '<div class=\"panel-heading\">Producer Offers</div>' +
                    '<div class=\"panel-body\">' +
                    '<table id=\"allCrops\" data-toggle=\"table\" data-url=\"x\" data-show-toggle=\"true\" data-show-columns=\"true\" data-search=\"true\" data-select-item-name=\"toolbar1\" data-pagination=\"true\" data-sort-name=\"id\" data-sort-order=\"desc\">' +
                    '<thead>' +
                    '<tr>' +
                    '<th data-field=\"id\" data-sortable=\"true\" style=\"max-width: 50px\">Id</th>' +
                    '<th data-field=\"cropProduct\" data-sortable=\"true\">Product</th>' +
                    '<th data-field=\"producer\" data-sortable=\"true\">Producer</th>' +
                    '<th data-field=\"distance\" data-sortable=\"true\">Distance</th>' +
                    '<th data-field=\"amount\" data-sortable=\"true\">Available</th>' +
                    '<th data-field=\"price\" data-sortable=\"true\">Price</th>' +
                    '<th data-field=\"cropPD\" data-sortable=\"true\">Production Date</th>' +
                    '<th data-field=\"cropED\" data-sortable=\"true\">Expiration Date</th>' +
                    '<th data-field=\"edit\" data-sortable=\"true\" class=\"alignright\">Actions</th>' +
                    '</tr>' +
                    '</thead>' +
                    '</table>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>';

            \$(\".content\").html(INNER_HTML);

            \$('#allCrops').bootstrapTable({
                data: ";
        // line 507
        echo (isset($context["crops_json"]) ? $context["crops_json"] : $this->getContext($context, "crops_json"));
        echo ",
                pageSize: 30,
                onClickRow: function (row, \$element) {
                    ROW_CLICKED = \$element
                }
            });

            \$(\".sidebar_action\").removeClass(\"active\")
            \$(\"#products\").addClass(\"active\")
        }

        \$( document ).ready(function() {
            resize();
            getUser();
//            displayDashboard();

            var dateToday = new Date();
            \$('#rEdate').datepicker({
                format: 'dd/mm/yyyy',
            });
            \$('#rPdate').datepicker({
                format: 'dd/mm/yyyy',
            });

            var hash = window.location.hash.substring(1);
            console.log(hash)
            if(hash === \"dashboard\" ){
                displayDashboard();
            }else if(hash === \"profile\"){
                displayProfile();
            }else if(hash === \"product\"){
                displayProduct();
            }else if(hash === \"offers\"){
                displayOffers()
            }else if(hash === \"crops\"){
                displayProducts();
            }else{
//                displayDashboard();
                var INNER_HTML = '<div id=\"googleMap\" style=\"width:100%;height:100%;\" ></div>';
                \$(\".content\").html(INNER_HTML);
                getLocation();
                \$(\".sidebar_action\").removeClass(\"active\");
                \$(\"#dashboard\").addClass(\"active\")
            }


            \$(\".agcontainer .sidebar\").css(\"min-height\", \"865px\")
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
                url: \"http://www.agrot-is.net/\" + \"getUser\",
                type: 'GET',
                dataType: \"JSON\",
                data: {
                    username: '";
        // line 577
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "',
                },
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
        // line 636
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

            var icon = {
                url: '";
        // line 714
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "', // url
                scaledSize: new google.maps.Size(40, 40), // scaled size
                origin: new google.maps.Point(0,0), // origin
                anchor: new google.maps.Point(20, 20) // anchor
            };

            ";
        // line 720
        $context["index"] = 1;
        // line 721
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["crops"]) ? $context["crops"] : $this->getContext($context, "crops")));
        foreach ($context['_seq'] as $context["_key"] => $context["crop"]) {
            // line 722
            echo "

            var contentString_";
            // line 724
            echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
            echo " = '<div id=\"content\" style=\"width:500px !important\">'+
                    '<div id=\"siteNotice\">'+
                    '";
            // line 726
            echo $this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), $this->getAttribute($this->getAttribute($context["crop"], "producer", array()), "id", array()), array(), "array");
            echo "'+
                    '</div>'+
                    '</div>';


            var infowindow_";
            // line 731
            echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
            echo " = new google.maps.InfoWindow({
                content: contentString_";
            // line 732
            echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
            echo "
            });


            var myLatLng_";
            // line 736
            echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
            echo " = {lat: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["crop"], "producer", array()), "registrationLat", array()), "html", null, true);
            echo ", lng: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["crop"], "producer", array()), "registrationLon", array()), "html", null, true);
            echo "};
            var marker_";
            // line 737
            echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
            echo " = new google.maps.Marker({
                position: myLatLng_";
            // line 738
            echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
            echo ",
                map: map,
                icon: icon,
                animation: google.maps.Animation.DROP,
                title: '";
            // line 742
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["crop"], "product", array()), "description", array()), "html", null, true);
            echo "'
            });

            marker_";
            // line 745
            echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
            echo ".addListener('click', function() {
                infowindow_";
            // line 746
            echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
            echo ".open(map, marker_";
            echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
            echo ");
            });

            ";
            // line 749
            $context["index"] = ((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) + 1);
            // line 750
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 751
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

        function logout(){
            window.location = \"/logout\"
        }




    </script>
";
        
        $__internal_7a1c83d5856e1b217bfb4870cee9bdf4471b5dd979edbb01db11d59722c35663->leave($__internal_7a1c83d5856e1b217bfb4870cee9bdf4471b5dd979edbb01db11d59722c35663_prof);

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
        return array (  985 => 751,  979 => 750,  977 => 749,  969 => 746,  965 => 745,  959 => 742,  952 => 738,  948 => 737,  940 => 736,  933 => 732,  929 => 731,  921 => 726,  916 => 724,  912 => 722,  907 => 721,  905 => 720,  896 => 714,  815 => 636,  753 => 577,  680 => 507,  633 => 463,  612 => 445,  584 => 420,  494 => 333,  365 => 206,  354 => 204,  350 => 203,  344 => 199,  333 => 197,  329 => 196,  313 => 183,  309 => 182,  301 => 177,  296 => 175,  291 => 173,  287 => 172,  283 => 171,  278 => 169,  275 => 168,  273 => 167,  269 => 165,  265 => 163,  263 => 162,  255 => 157,  250 => 155,  246 => 154,  242 => 153,  238 => 152,  234 => 151,  193 => 112,  182 => 110,  178 => 109,  166 => 100,  77 => 13,  71 => 12,  60 => 10,  49 => 9,  37 => 3,  11 => 1,);
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
/*                         <legend><div class="modal_logo"></div><div class="modal_action">Add new Crop</div></legend>*/
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
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap-table.css') }}">*/
/* */
/*     <link rel="stylesheet" href="{{ asset('css/modal.css') }}">*/
/*     <!-- Fonts -->*/
/*     <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" type="text/css">*/
/*     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">*/
/* */
/*     {% if 'localhost' in app.request.host  %}*/
/*         <script src="http://maps.googleapis.com/maps/api/js"></script>*/
/*     {% else %}*/
/*         <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9J_3yPsTcTvsXQhUniIOkSzP2RHc1p2Y&callback=getLocation" type="text/javascript"></script>*/
/*     {% endif %}*/
/*     {#<script async defer src="https://maps.googleapis.com/maps/api/js?key= AIzaSyCSf9vDJJY8WbZ3xPfvOPkz1F6bAMM4unU&callback=getLocation" type="text/javascript"></script>#}*/
/* */
/*     <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>*/
/*     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>*/
/*     <script src="{{ asset('js/modernizr.js') }}"></script>*/
/*     <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>*/
/*     <script src="{{ asset('js/bootstrap-table.js') }}"></script>*/
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
/*                 <li id="offers" class="sidebar_action" onclick="displayOffers()">View Offers<span class="menu-icon fa fa-location-arrow"></span></li>*/
/*                 <li id="products" class="sidebar_action" onclick="displayProducts()">View Crops<span class="menu-icon fa fa-tasks"></span></li>*/
/*                 <li id="products" class="sidebar_action" onclick="logout()">Logout<span class="menu-icon fa fa-close"></span></li>*/
/*             </ul>*/
/*             <div class="sidebar_filter">*/
/*                 <div class="info">Filter Crops</div>*/
/*                 <div class="info_tag">Filter by Product</div>*/
/*                 <select id="filter_product">*/
/*                     <option value="0">Select product to filter</option>*/
/*                     {% for product in products %}*/
/*                         <option value="{{ product.id }}">{{ product.description }}</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*                 <div class="info_tag">Filter by Producer</div>*/
/*                 <select id="filter_producer">*/
/*                     <option value="0">Select producer to filter</option>*/
/*                     {% for producer in producers %}*/
/*                         <option value="{{ producer.id }}">{{ producer.username }}</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*                 <div class="info_tag">Filter by range</div>*/
/*                 <div class="form-group">*/
/*                     <div class="col-md-6">*/
/*                         <input type="text" id="filter_min_distance" name="filter_min_distance" class="form-control" placeholder="Min Range"/>*/
/*                     </div>*/
/*                     <div class="col-md-6">*/
/*                         <input type="text" id="filter_max_distance" name="filter_max_distance" class="form-control" placeholder="Max Range"/>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="apply_filter" onclick="applyFilters()">Apply Filters</div>*/
/*             </div>*/
/*             <p class="position_bottom center grey">2016 © Agrot-IS. All rights reserved.</p></div>*/
/*     </div>*/
/*     <div class="content">*/
/* */
/*     </div>*/
/*     </div>*/
/* */
/* */
/*     <script>*/
/* */
/* */
/*         var USER_OBJ = null;*/
/*         var PRODUCTS_OBJ = null;*/
/* */
/*         var SERVER_ADDR = "http://www.agrot-is.net/";*/
/* */
/*         function applyFilters(){*/
/* */
/*             var product_id = $("#filter_product").val();*/
/*             var producer_id = $("#filter_producer").val();*/
/*             var min = $("#filter_min_distance").val();*/
/*             var max = $("#filter_max_distance").val();*/
/*             var url = window.location.href;*/
/* */
/* */
/*             var newURL = url.split("?")[0];*/
/*             newURL += '?product_id='+product_id+"&producer_id="+producer_id+"&min="+min+"&max="+max;*/
/* */
/*             window.location.href = newURL;*/
/* //            window.location.reload()*/
/*         }*/
/* */
/*         function displayDashboard(){*/
/*             var url = location.href;*/
/*             location.href = "#dashboard";*/
/* */
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
/*             var url = location.href;*/
/*             location.href = "#profile";*/
/*             var INNER_HTML = '<div id="googleMap" style="width:100%;height:100%;" ></div>';*/
/*             $(".content").html(INNER_HTML);*/
/*             getLocation();*/
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
/*                 $("#rPdate").addClass("error_input");*/
/*                 return;*/
/*             } else {*/
/*                 $("#rPdate").removeClass("error_input")*/
/*             }*/
/* */
/*             if (today > expirationDate) {*/
/*                 $("#rEdate").addClass("error_input");*/
/*                 return;*/
/*             } else {*/
/*                 $("#rEdate").removeClass("error_input");*/
/* */
/*             }*/
/* */
/* */
/* */
/*             jQuery.ajax({*/
/*                 url: SERVER_ADDR+"createCrop",*/
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
/* */
/*             var url = location.href;*/
/*             location.href = "#product";*/
/* */
/*             var INNER_HTML = '<div id="googleMap" style="width:100%;height:100%;" ></div>';*/
/*             $(".content").html(INNER_HTML);*/
/*             getLocation();*/
/* */
/*             $("#add_product_modal").modal('show')*/
/* */
/*             $(".sidebar_action").removeClass("active");*/
/*             $("#product").addClass("active")*/
/*         }*/
/* */
/*         function displayOffers(){*/
/* */
/*             var url = location.href;*/
/*             location.href = "#offers";*/
/* */
/*             var INNER_HTML = '<div class="row">' +*/
/*                     '<div class="col-lg-12">' +*/
/*                     '<div class="panel panel-default">' +*/
/*                     '<div class="panel-heading">Producer Offers</div>' +*/
/*                     '<div class="panel-body">' +*/
/*                     '<table id="allOffers" data-toggle="table" data-url="x" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="id" data-sort-order="desc">' +*/
/*                     '<thead>' +*/
/*                     '<tr>' +*/
/*                     '<th data-field="id" data-sortable="true" style="max-width: 50px">Id</th>' +*/
/*                     '<th data-field="producer" data-sortable="false">Producer Name</th>' +*/
/*                     '<th data-field="cropProduct" data-sortable="true">Product</th>' +*/
/*                     '<th data-field="amount" data-sortable="true">Amount</th>' +*/
/*                     '<th data-field="price" data-sortable="true">Price</th>' +*/
/*                     '<th data-field="message" data-sortable="true">Buyer Message</th>' +*/
/*                     '<th data-field="cropPD" data-sortable="true">Production Date</th>' +*/
/*                     '<th data-field="cropED" data-sortable="true">Expiration Date</th>' +*/
/*                     '<th data-field="edit" data-sortable="true" class="alignright">Actions</th>' +*/
/*                     '</tr>' +*/
/*                     '</thead>' +*/
/*                     '</table>' +*/
/*                     '</div>' +*/
/*                     '</div>' +*/
/*                     '</div>' +*/
/*                     '</div>';*/
/* */
/*             $(".content").html(INNER_HTML);*/
/* */
/*             $('#allOffers').bootstrapTable({*/
/*                 data: {{ offers_json | raw }},*/
/*                 pageSize: 30,*/
/*                 onClickRow: function (row, $element) {*/
/*                     ROW_CLICKED = $element*/
/*                 }*/
/*             });*/
/* */
/*             $(".sidebar_action").removeClass("active");*/
/*             $("#offers").addClass("active")*/
/*         }*/
/* */
/*         function acceptOffer(offerId){*/
/*             respondToOffer("true", offerId);*/
/*         }*/
/* */
/*         function deleteOffer(offerId){*/
/*             respondToOffer("false", offerId);*/
/*         }*/
/* */
/*         function respondToOffer(accepted, offerId){*/
/*             $.ajax({*/
/*                 url: SERVER_ADDR + "respondToOffer",*/
/*                 type: 'POST',*/
/*                 dataType: "json",*/
/*                 data: {*/
/*                     username_toSearch: '{{ username }}',*/
/*                     isAccepted: accepted,*/
/*                     offer_id: offerId,*/
/*                 },*/
/*                 headers: {'Access-Control-Allow-Origin': '*'},*/
/*                 crossDomain: true,*/
/*                 complete: function (data) {*/
/*                     window.location.reload(true)*/
/*                 }*/
/*             });*/
/*         }*/
/* */
/*         function deleteCrop(crop_id){*/
/*             $.ajax({*/
/*                 url: SERVER_ADDR + "deleteCrop",*/
/*                 type: 'POST',*/
/*                 dataType: "json",*/
/*                 data: {*/
/*                     username_toSearch: '{{ username }}',*/
/*                     crop_id: crop_id,*/
/*                 },*/
/*                 headers: {'Access-Control-Allow-Origin': '*'},*/
/*                 crossDomain: true,*/
/*                 complete: function (data) {*/
/*                     window.location.reload(true)*/
/*                 }*/
/*             });*/
/*         }*/
/* */
/*         function displayProducts(){*/
/* */
/*             var url = location.href;*/
/*             location.href = "#crops";*/
/* */
/*             var INNER_HTML = '<div class="row">' +*/
/*                     '<div class="col-lg-12">' +*/
/*                     '<div class="panel panel-default">' +*/
/*                     '<div class="panel-heading">Producer Offers</div>' +*/
/*                     '<div class="panel-body">' +*/
/*                     '<table id="allCrops" data-toggle="table" data-url="x" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="id" data-sort-order="desc">' +*/
/*                     '<thead>' +*/
/*                     '<tr>' +*/
/*                     '<th data-field="id" data-sortable="true" style="max-width: 50px">Id</th>' +*/
/*                     '<th data-field="cropProduct" data-sortable="true">Product</th>' +*/
/*                     '<th data-field="producer" data-sortable="true">Producer</th>' +*/
/*                     '<th data-field="distance" data-sortable="true">Distance</th>' +*/
/*                     '<th data-field="amount" data-sortable="true">Available</th>' +*/
/*                     '<th data-field="price" data-sortable="true">Price</th>' +*/
/*                     '<th data-field="cropPD" data-sortable="true">Production Date</th>' +*/
/*                     '<th data-field="cropED" data-sortable="true">Expiration Date</th>' +*/
/*                     '<th data-field="edit" data-sortable="true" class="alignright">Actions</th>' +*/
/*                     '</tr>' +*/
/*                     '</thead>' +*/
/*                     '</table>' +*/
/*                     '</div>' +*/
/*                     '</div>' +*/
/*                     '</div>' +*/
/*                     '</div>';*/
/* */
/*             $(".content").html(INNER_HTML);*/
/* */
/*             $('#allCrops').bootstrapTable({*/
/*                 data: {{ crops_json | raw }},*/
/*                 pageSize: 30,*/
/*                 onClickRow: function (row, $element) {*/
/*                     ROW_CLICKED = $element*/
/*                 }*/
/*             });*/
/* */
/*             $(".sidebar_action").removeClass("active")*/
/*             $("#products").addClass("active")*/
/*         }*/
/* */
/*         $( document ).ready(function() {*/
/*             resize();*/
/*             getUser();*/
/* //            displayDashboard();*/
/* */
/*             var dateToday = new Date();*/
/*             $('#rEdate').datepicker({*/
/*                 format: 'dd/mm/yyyy',*/
/*             });*/
/*             $('#rPdate').datepicker({*/
/*                 format: 'dd/mm/yyyy',*/
/*             });*/
/* */
/*             var hash = window.location.hash.substring(1);*/
/*             console.log(hash)*/
/*             if(hash === "dashboard" ){*/
/*                 displayDashboard();*/
/*             }else if(hash === "profile"){*/
/*                 displayProfile();*/
/*             }else if(hash === "product"){*/
/*                 displayProduct();*/
/*             }else if(hash === "offers"){*/
/*                 displayOffers()*/
/*             }else if(hash === "crops"){*/
/*                 displayProducts();*/
/*             }else{*/
/* //                displayDashboard();*/
/*                 var INNER_HTML = '<div id="googleMap" style="width:100%;height:100%;" ></div>';*/
/*                 $(".content").html(INNER_HTML);*/
/*                 getLocation();*/
/*                 $(".sidebar_action").removeClass("active");*/
/*                 $("#dashboard").addClass("active")*/
/*             }*/
/* */
/* */
/*             $(".agcontainer .sidebar").css("min-height", "865px")*/
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
/*                 url: "http://www.agrot-is.net/" + "getUser",*/
/*                 type: 'GET',*/
/*                 dataType: "JSON",*/
/*                 data: {*/
/*                     username: '{{ username }}',*/
/*                 },*/
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
/* */
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
/*             var icon = {*/
/*                 url: '{{ asset('images/logo.png') }}', // url*/
/*                 scaledSize: new google.maps.Size(40, 40), // scaled size*/
/*                 origin: new google.maps.Point(0,0), // origin*/
/*                 anchor: new google.maps.Point(20, 20) // anchor*/
/*             };*/
/* */
/*             {% set index = 1 %}*/
/*             {% for crop in crops %}*/
/* */
/* */
/*             var contentString_{{ index }} = '<div id="content" style="width:500px !important">'+*/
/*                     '<div id="siteNotice">'+*/
/*                     '{{ info[crop.producer.id] |raw}}'+*/
/*                     '</div>'+*/
/*                     '</div>';*/
/* */
/* */
/*             var infowindow_{{ index }} = new google.maps.InfoWindow({*/
/*                 content: contentString_{{ index }}*/
/*             });*/
/* */
/* */
/*             var myLatLng_{{ index }} = {lat: {{ crop.producer.registrationLat }}, lng: {{ crop.producer.registrationLon }}};*/
/*             var marker_{{ index }} = new google.maps.Marker({*/
/*                 position: myLatLng_{{ index }},*/
/*                 map: map,*/
/*                 icon: icon,*/
/*                 animation: google.maps.Animation.DROP,*/
/*                 title: '{{ crop.product.description }}'*/
/*             });*/
/* */
/*             marker_{{ index }}.addListener('click', function() {*/
/*                 infowindow_{{ index }}.open(map, marker_{{ index }});*/
/*             });*/
/* */
/*             {% set index = index + 1 %}*/
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
/* */
/*         function logout(){*/
/*             window.location = "/logout"*/
/*         }*/
/* */
/* */
/* */
/* */
/*     </script>*/
/* {% endblock %}*/
/* */
