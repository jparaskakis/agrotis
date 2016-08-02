<?php

/* default/support.html.twig */
class __TwigTemplate_2aa99816beb0ab73b2e06e40d026dc21b40636532d3c60a70e9ab60357e5c334 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/support.html.twig", 1);
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
        $__internal_bd7f25233498ee32dcff4bb161128f8fd7088511bb2520068754353f79012fcd = $this->env->getExtension("native_profiler");
        $__internal_bd7f25233498ee32dcff4bb161128f8fd7088511bb2520068754353f79012fcd->enter($__internal_bd7f25233498ee32dcff4bb161128f8fd7088511bb2520068754353f79012fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/support.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd7f25233498ee32dcff4bb161128f8fd7088511bb2520068754353f79012fcd->leave($__internal_bd7f25233498ee32dcff4bb161128f8fd7088511bb2520068754353f79012fcd_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_ec0343c0236462b28fe14c7bea08a80f49d032a18ad5b37b2905685821f9ca8c = $this->env->getExtension("native_profiler");
        $__internal_ec0343c0236462b28fe14c7bea08a80f49d032a18ad5b37b2905685821f9ca8c->enter($__internal_ec0343c0236462b28fe14c7bea08a80f49d032a18ad5b37b2905685821f9ca8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "support";
        
        $__internal_ec0343c0236462b28fe14c7bea08a80f49d032a18ad5b37b2905685821f9ca8c->leave($__internal_ec0343c0236462b28fe14c7bea08a80f49d032a18ad5b37b2905685821f9ca8c_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_9882293daa1bbd6b17b0a18699e7e4347476b402a5c60e7718a70c972841bebb = $this->env->getExtension("native_profiler");
        $__internal_9882293daa1bbd6b17b0a18699e7e4347476b402a5c60e7718a70c972841bebb->enter($__internal_9882293daa1bbd6b17b0a18699e7e4347476b402a5c60e7718a70c972841bebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_9882293daa1bbd6b17b0a18699e7e4347476b402a5c60e7718a70c972841bebb->leave($__internal_9882293daa1bbd6b17b0a18699e7e4347476b402a5c60e7718a70c972841bebb_prof);

    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f51c1c2600e81fb5988d34fc187e6f32134e2f17836b6316e330a0a94651a583 = $this->env->getExtension("native_profiler");
        $__internal_f51c1c2600e81fb5988d34fc187e6f32134e2f17836b6316e330a0a94651a583->enter($__internal_f51c1c2600e81fb5988d34fc187e6f32134e2f17836b6316e330a0a94651a583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_f51c1c2600e81fb5988d34fc187e6f32134e2f17836b6316e330a0a94651a583->leave($__internal_f51c1c2600e81fb5988d34fc187e6f32134e2f17836b6316e330a0a94651a583_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_54c703e0fa1ff979ecd1cb7e7dbc58e19f432c95fdec704c007c8b8a939c9611 = $this->env->getExtension("native_profiler");
        $__internal_54c703e0fa1ff979ecd1cb7e7dbc58e19f432c95fdec704c007c8b8a939c9611->enter($__internal_54c703e0fa1ff979ecd1cb7e7dbc58e19f432c95fdec704c007c8b8a939c9611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "



    <body class=\"\">



    <section class=\"section\" style=\"background-color: #fff !important;\">
        <div class=\"container title\" id=\"container\">

            <div class=\"title col-md-8 col-sm-10 col-xs-12\"><h1>SUPPORT CONTACT FORM</h1><hr/></div>
            <div class=\"col-md-6 col-sm-12 col-xs-12 title\">
                <div class=\"form-group\" id=\"validate\">
                    <label class=\"control-label\" for=\"inputSuccess1\">E-mail</label>
                    <input onblur=\"validate_mail()\" type=\"text\" class=\"form-control\" id=\"inputSuccess1\">
                </div>
            </div>
            <div class=\"col-md-6 col-sm-12 col-xs-12 title\">

                <label class=\"control-label\" for=\"report\">Select topic</label>
                <select id=\"report\" class=\"form-control\">
                    <option>I want some extra information</option>
                    <option>I want to report a bug</option>
                    <option>I have a problem with my payment</option>
                    <option>I have a problem with my payment</option>
                    <option>Other</option>
                </select>
            </div>
            <div class=\"col-md-6 col-sm-12 col-xs-12 title\">
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Feedback</label>
                    <textarea type=\"text\" id=\"message\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Write your message here\"></textarea>
                </div>
            </div>
            <div class=\"col-md-6 col-sm-12 col-xs-12 title\">
                <button type=\"button\" onclick=\"sendMail()\" class=\"btn btn-default agroButton\">Submit</button>
            </div>

        </div>

    </section>


    <script>
        document.getElementById(\"inputSuccess1\").value = \"\";
        document.getElementById(\"message\").value = \"\";

        function validate_mail(){
            var re = /^([\\w-]+(?:\\.[\\w-]+)*)@((?:[\\w-]+\\.)*\\w[\\w-]{0,66})\\.([a-z]{2,6}(?:\\.[a-z]{2})?)\$/i;
            if(re.test(document.getElementById(\"inputSuccess1\").value) == true){
                \$( \"#validate\" ).removeClass( \"has-error\" );
                \$( \"#validate\" ).addClass( \"has-success\" );

            }else{
                \$( \"#validate\" ).removeClass( \"has-success\" );
                \$( \"#validate\" ).addClass( \"has-error\" );

            }
        }

        function sendMail(){
            if(\$( \"#validate\" ).hasClass( \"has-success\" )){
                var email = document.getElementById(\"inputSuccess1\").value;
                var e = document.getElementById(\"report\");
                var topic = e.options[e.selectedIndex].text;
                var message = document.getElementById(\"message\").value;
                \$.ajax({
                            method: \"POST\",
                            url: \"\",
                            dataType: \"json\",
                            data: { email: email, topic: topic, message : message },
                        })
                        .complete(function( msg ) {
                            \$( \"#container\" ).fadeOut( \"slow\", function() {
                                document.getElementById(\"container\").innerHTML = '<div class=\"title col-md-8 col-sm-10 col-xs-12\"><h1>SUPPORT CONTACT FORM</h1><hr/></div>'+
                                        '<div class=\"col-md-12 col-sm-12 col-xs-12 title\"> <h1>THANK YOU FOR YOUR FEEDBACK <br> OUR SUPPORT TEAM WILL CONTACT YOU SOON!</h1></div>';
                                \$( \"#container\" ).fadeIn( \"slow\", function() {

                                });
                            });
                        });

            }
        }
    </script>


    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">

    <!-- Render Content From Shortcode -->
    <section id=\"numbers\" class=\"parallax ova_numbers\"><div class=\"parallax-overlay\"><div class=\"container\"><br class=\"center up\"></div></div></section>

    <footer><div class=\"container\">
            <ul class=\"social-list\">
                <li><a href=\"https://www.facebook.com/\" target=\"_blank\" data-mce-href=\"https://www.facebook.com/\">
                        <span class=\"social-icon\"><i class=\"fa fa-facebook\"></i></span></a><br data-mce-bogus=\"1\"></li>
                <li><a href=\"https://twitter.com/\" target=\"_blank\" data-mce-href=\"https://twitter.com/\">
                        <span class=\"social-icon\"><i class=\"fa fa-twitter\"></i></span></a><br data-mce-bogus=\"1\"></li>
            </ul>
            <p class=\"center grey\">2015 &copy; Agrot-IS. All rights reserved.</p></div></footer>










    <style>
        .ova_numbers{
            background-image: url(http://story-chaser.com/);

        }
        .ova_testimonials {
            background-image: url(http://story-chaser.com/images/bg/3.jpg);
        }

    </style>


    </body>
    </html>



";
        
        $__internal_54c703e0fa1ff979ecd1cb7e7dbc58e19f432c95fdec704c007c8b8a939c9611->leave($__internal_54c703e0fa1ff979ecd1cb7e7dbc58e19f432c95fdec704c007c8b8a939c9611_prof);

    }

    public function getTemplateName()
    {
        return "default/support.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 13,  71 => 12,  60 => 10,  49 => 9,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'support' %}*/
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
/* */
/* */
/*     <body class="">*/
/* */
/* */
/* */
/*     <section class="section" style="background-color: #fff !important;">*/
/*         <div class="container title" id="container">*/
/* */
/*             <div class="title col-md-8 col-sm-10 col-xs-12"><h1>SUPPORT CONTACT FORM</h1><hr/></div>*/
/*             <div class="col-md-6 col-sm-12 col-xs-12 title">*/
/*                 <div class="form-group" id="validate">*/
/*                     <label class="control-label" for="inputSuccess1">E-mail</label>*/
/*                     <input onblur="validate_mail()" type="text" class="form-control" id="inputSuccess1">*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-6 col-sm-12 col-xs-12 title">*/
/* */
/*                 <label class="control-label" for="report">Select topic</label>*/
/*                 <select id="report" class="form-control">*/
/*                     <option>I want some extra information</option>*/
/*                     <option>I want to report a bug</option>*/
/*                     <option>I have a problem with my payment</option>*/
/*                     <option>I have a problem with my payment</option>*/
/*                     <option>Other</option>*/
/*                 </select>*/
/*             </div>*/
/*             <div class="col-md-6 col-sm-12 col-xs-12 title">*/
/*                 <div class="form-group">*/
/*                     <label for="exampleInputEmail1">Feedback</label>*/
/*                     <textarea type="text" id="message" class="form-control" id="exampleInputEmail1" placeholder="Write your message here"></textarea>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-6 col-sm-12 col-xs-12 title">*/
/*                 <button type="button" onclick="sendMail()" class="btn btn-default agroButton">Submit</button>*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </section>*/
/* */
/* */
/*     <script>*/
/*         document.getElementById("inputSuccess1").value = "";*/
/*         document.getElementById("message").value = "";*/
/* */
/*         function validate_mail(){*/
/*             var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;*/
/*             if(re.test(document.getElementById("inputSuccess1").value) == true){*/
/*                 $( "#validate" ).removeClass( "has-error" );*/
/*                 $( "#validate" ).addClass( "has-success" );*/
/* */
/*             }else{*/
/*                 $( "#validate" ).removeClass( "has-success" );*/
/*                 $( "#validate" ).addClass( "has-error" );*/
/* */
/*             }*/
/*         }*/
/* */
/*         function sendMail(){*/
/*             if($( "#validate" ).hasClass( "has-success" )){*/
/*                 var email = document.getElementById("inputSuccess1").value;*/
/*                 var e = document.getElementById("report");*/
/*                 var topic = e.options[e.selectedIndex].text;*/
/*                 var message = document.getElementById("message").value;*/
/*                 $.ajax({*/
/*                             method: "POST",*/
/*                             url: "",*/
/*                             dataType: "json",*/
/*                             data: { email: email, topic: topic, message : message },*/
/*                         })*/
/*                         .complete(function( msg ) {*/
/*                             $( "#container" ).fadeOut( "slow", function() {*/
/*                                 document.getElementById("container").innerHTML = '<div class="title col-md-8 col-sm-10 col-xs-12"><h1>SUPPORT CONTACT FORM</h1><hr/></div>'+*/
/*                                         '<div class="col-md-12 col-sm-12 col-xs-12 title"> <h1>THANK YOU FOR YOUR FEEDBACK <br> OUR SUPPORT TEAM WILL CONTACT YOU SOON!</h1></div>';*/
/*                                 $( "#container" ).fadeIn( "slow", function() {*/
/* */
/*                                 });*/
/*                             });*/
/*                         });*/
/* */
/*             }*/
/*         }*/
/*     </script>*/
/* */
/* */
/*     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">*/
/* */
/*     <!-- Render Content From Shortcode -->*/
/*     <section id="numbers" class="parallax ova_numbers"><div class="parallax-overlay"><div class="container"><br class="center up"></div></div></section>*/
/* */
/*     <footer><div class="container">*/
/*             <ul class="social-list">*/
/*                 <li><a href="https://www.facebook.com/" target="_blank" data-mce-href="https://www.facebook.com/">*/
/*                         <span class="social-icon"><i class="fa fa-facebook"></i></span></a><br data-mce-bogus="1"></li>*/
/*                 <li><a href="https://twitter.com/" target="_blank" data-mce-href="https://twitter.com/">*/
/*                         <span class="social-icon"><i class="fa fa-twitter"></i></span></a><br data-mce-bogus="1"></li>*/
/*             </ul>*/
/*             <p class="center grey">2015 &copy; Agrot-IS. All rights reserved.</p></div></footer>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*     <style>*/
/*         .ova_numbers{*/
/*             background-image: url(http://story-chaser.com/);*/
/* */
/*         }*/
/*         .ova_testimonials {*/
/*             background-image: url(http://story-chaser.com/images/bg/3.jpg);*/
/*         }*/
/* */
/*     </style>*/
/* */
/* */
/*     </body>*/
/*     </html>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
