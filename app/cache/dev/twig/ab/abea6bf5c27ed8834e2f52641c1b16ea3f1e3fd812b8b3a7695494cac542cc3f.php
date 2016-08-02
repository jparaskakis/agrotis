<?php

/* :default:pricing.html.twig */
class __TwigTemplate_a9041d42392fef747080eb498563ad7edbfbdd32073b48d22d8d91b800d7fd94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:pricing.html.twig", 1);
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
        $__internal_9e9c6e1a9bc82ad6e2d371c5301b542bf2ba35c31d8d544084bf700c10458ae9 = $this->env->getExtension("native_profiler");
        $__internal_9e9c6e1a9bc82ad6e2d371c5301b542bf2ba35c31d8d544084bf700c10458ae9->enter($__internal_9e9c6e1a9bc82ad6e2d371c5301b542bf2ba35c31d8d544084bf700c10458ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:pricing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e9c6e1a9bc82ad6e2d371c5301b542bf2ba35c31d8d544084bf700c10458ae9->leave($__internal_9e9c6e1a9bc82ad6e2d371c5301b542bf2ba35c31d8d544084bf700c10458ae9_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_7889ec79d9f01ea706aae5c9b0a6f065edc712af83891b4920c14b4705238268 = $this->env->getExtension("native_profiler");
        $__internal_7889ec79d9f01ea706aae5c9b0a6f065edc712af83891b4920c14b4705238268->enter($__internal_7889ec79d9f01ea706aae5c9b0a6f065edc712af83891b4920c14b4705238268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "pricing";
        
        $__internal_7889ec79d9f01ea706aae5c9b0a6f065edc712af83891b4920c14b4705238268->leave($__internal_7889ec79d9f01ea706aae5c9b0a6f065edc712af83891b4920c14b4705238268_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_cad0b35db87582198b3693c71ca241ba1fce4fbbe9e4891924fa9c6561b2e7a8 = $this->env->getExtension("native_profiler");
        $__internal_cad0b35db87582198b3693c71ca241ba1fce4fbbe9e4891924fa9c6561b2e7a8->enter($__internal_cad0b35db87582198b3693c71ca241ba1fce4fbbe9e4891924fa9c6561b2e7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_cad0b35db87582198b3693c71ca241ba1fce4fbbe9e4891924fa9c6561b2e7a8->leave($__internal_cad0b35db87582198b3693c71ca241ba1fce4fbbe9e4891924fa9c6561b2e7a8_prof);

    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c6bf6889030d2a13b9139df0f610ddbe30846868e114ab5d7a14701970565aaf = $this->env->getExtension("native_profiler");
        $__internal_c6bf6889030d2a13b9139df0f610ddbe30846868e114ab5d7a14701970565aaf->enter($__internal_c6bf6889030d2a13b9139df0f610ddbe30846868e114ab5d7a14701970565aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_c6bf6889030d2a13b9139df0f610ddbe30846868e114ab5d7a14701970565aaf->leave($__internal_c6bf6889030d2a13b9139df0f610ddbe30846868e114ab5d7a14701970565aaf_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_b68cafa32974d5dced60baa16c47a34830185ac3f0a87ffad39fd4b65db3b2cf = $this->env->getExtension("native_profiler");
        $__internal_b68cafa32974d5dced60baa16c47a34830185ac3f0a87ffad39fd4b65db3b2cf->enter($__internal_b68cafa32974d5dced60baa16c47a34830185ac3f0a87ffad39fd4b65db3b2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "



    <body class=\"\">

    <section id=\"pricing\" class=\"section\">
        <div class=\"container\">
            <div class=\"title col-md-8 col-sm-10 col-xs-12\">
                <h1>Subscription <strong>plans</strong></h1>
                <hr>
            </div>
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <!-- Pricing Table -->
                <div class=\"plan animated hiding\" data-animation=\"fadeInUp\" data-delay=\"0\">
                    <div class=\"plan-heading\">



                        <h3>Producer - Freemium</h3>
                        <p>Trial Subscription</p>
                        <div class=\"circle-price\">
                            <span>\$0</span>
                        </div>
                    </div>
                    <ul>
                        <li><strong>Free</strong> setup</li>
                        <li><strong>24Hours</strong> live support</li>
                        <li><strong>10 </strong> Live Feeds</li>
                        <li><strong>1</strong> Active Bids</li>
                        <li><strong><del>Premium contacts</del></strong></li>
                        <li><strong><del>Personal Assistant</del></strong></li>
                        <li><strong>30</strong> days valid period</li>
                    </ul>
                    <div class=\"buy-now\">
                        <a class=\"btn btn-custom\" href=\"http://www.agrot-is.com/register/register.html\" >Register Now</a>
                    </div>
                </div>
                <!-- End Pricing Table -->
            </div>
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <!-- Pricing Table -->
                <div class=\"plan animated hiding\" data-animation=\"fadeInUp\" data-delay=\"0\">
                    <div class=\"plan-heading\">





                        <h3>Producer - Professional</h3>
                        <p>Professional Subscription</p>
                        <div class=\"circle-price\">
                            <span>\$50</span>
                        </div>
                    </div>
                    <ul>
                        <li><strong>Free</strong> setup</li>
                        <li><strong>24Hours</strong> live support</li>
                        <li><strong>Unlimited </strong> Live Feeds</li>
                        <li><strong>Unlimited</strong> Active Bids</li>
                        <li><strong><del>Premium contacts</del></strong></li>
                        <li><strong><del>Personal Assistant</del></strong></li>
                        <li><strong>360</strong> days valid period</li>
                    </ul>
                    <div class=\"buy-now\">
                        <a class=\"btn btn-custom\" href=\"http://www.agrot-is.com/register/register.html\" >Register Now</a>
                    </div>
                </div>
                <!-- End Pricing Table -->
            </div>
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <!-- Pricing Table -->
                <div class=\"plan animated hiding\" data-animation=\"fadeInUp\" data-delay=\"0\">
                    <div class=\"plan-heading\">
                        <h3>Business - Freemium</h3>
                        <p>Professional Subscription</p>
                        <div class=\"circle-price\">
                            <span>\$0</span>
                        </div>
                    </div>
                    <ul>
                        <li><strong>Free</strong> setup</li>
                        <li><strong>24Hours</strong> live support</li>
                        <li><strong>Unlimited </strong> Live Feeds</li>
                        <li><strong>Unlimited</strong> Active Bids</li>
                        <li><strong>Premium contacts</strong> </li>
                        <li><strong><del>Personal Assistant</del></strong></li>
                        <li><strong>360</strong> days valid period</li>
                    </ul>
                    <div class=\"buy-now\">
                        <a class=\"btn btn-custom\" href=\"http://www.agrot-is.com/register/register.html\" >Register Now</a>
                    </div>
                </div>
                <!-- End Pricing Table -->
            </div>
            <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <!-- Pricing Table -->
                <div class=\"plan animated hiding\" data-animation=\"fadeInUp\" data-delay=\"0\">
                    <div class=\"plan-heading\">
                        <h3>Business - Professional</h3>
                        <p>Premium Subscription</p>
                        <div class=\"circle-price\">
                            <span>\$80</span>
                        </div>
                    </div>
                    <ul>
                        <li><strong>Free</strong> setup</li>
                        <li><strong>24Hours</strong> live support</li>
                        <li><strong>Unlimited </strong> Live Feeds</li>
                        <li><strong>Unlimited</strong> Active Bids</li>
                        <li><strong>Premium contacts</strong></li>
                        <li><strong>Personal Assistant</strong></li>
                        <li><strong>360</strong> days valid period</li>
                    </ul>
                    <div class=\"buy-now\">
                        <a class=\"btn btn-custom\" href=\"http://www.agrot-is.com/register/register.html\" >Register Now</a>
                    </div>
                </div>
                <!-- End Pricing Table -->
            </div>
        </div>
    </section>



    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">

    <!-- Render Content From Shortcode -->
    <section id=\"numbers\" class=\"parallax ova_numbers\"><div class=\"parallax-overlay\"><div class=\"container\"><br class=\"center up\"></div></div></section>

    <footer><div class=\"container\">
            <ul class=\"social-list\">
                <li><a href=\"https://www.facebook.com/\" target=\"_blank\" data-mce-href=\"https://www.facebook.com/leutpits\">
                        <span class=\"social-icon\"><i class=\"fa fa-facebook\"></i></span></a><br data-mce-bogus=\"1\"></li>
                <li><a href=\"https://twitter.com/\" target=\"_blank\" data-mce-href=\"https://twitter.com/\">
                        <span class=\"social-icon\"><i class=\"fa fa-twitter\"></i></span></a><br data-mce-bogus=\"1\"></li>
            </ul>
            <p class=\"center grey\">2015 &copy; Agrot-IS. All rights reserved.</p></div></footer>










    </body>
    </html>







";
        
        $__internal_b68cafa32974d5dced60baa16c47a34830185ac3f0a87ffad39fd4b65db3b2cf->leave($__internal_b68cafa32974d5dced60baa16c47a34830185ac3f0a87ffad39fd4b65db3b2cf_prof);

    }

    public function getTemplateName()
    {
        return ":default:pricing.html.twig";
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
/* {% block body_id 'pricing' %}*/
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
/*     <section id="pricing" class="section">*/
/*         <div class="container">*/
/*             <div class="title col-md-8 col-sm-10 col-xs-12">*/
/*                 <h1>Subscription <strong>plans</strong></h1>*/
/*                 <hr>*/
/*             </div>*/
/*             <div class="col-md-3 col-sm-6 col-xs-12">*/
/*                 <!-- Pricing Table -->*/
/*                 <div class="plan animated hiding" data-animation="fadeInUp" data-delay="0">*/
/*                     <div class="plan-heading">*/
/* */
/* */
/* */
/*                         <h3>Producer - Freemium</h3>*/
/*                         <p>Trial Subscription</p>*/
/*                         <div class="circle-price">*/
/*                             <span>$0</span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <ul>*/
/*                         <li><strong>Free</strong> setup</li>*/
/*                         <li><strong>24Hours</strong> live support</li>*/
/*                         <li><strong>10 </strong> Live Feeds</li>*/
/*                         <li><strong>1</strong> Active Bids</li>*/
/*                         <li><strong><del>Premium contacts</del></strong></li>*/
/*                         <li><strong><del>Personal Assistant</del></strong></li>*/
/*                         <li><strong>30</strong> days valid period</li>*/
/*                     </ul>*/
/*                     <div class="buy-now">*/
/*                         <a class="btn btn-custom" href="http://www.agrot-is.com/register/register.html" >Register Now</a>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- End Pricing Table -->*/
/*             </div>*/
/*             <div class="col-md-3 col-sm-6 col-xs-12">*/
/*                 <!-- Pricing Table -->*/
/*                 <div class="plan animated hiding" data-animation="fadeInUp" data-delay="0">*/
/*                     <div class="plan-heading">*/
/* */
/* */
/* */
/* */
/* */
/*                         <h3>Producer - Professional</h3>*/
/*                         <p>Professional Subscription</p>*/
/*                         <div class="circle-price">*/
/*                             <span>$50</span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <ul>*/
/*                         <li><strong>Free</strong> setup</li>*/
/*                         <li><strong>24Hours</strong> live support</li>*/
/*                         <li><strong>Unlimited </strong> Live Feeds</li>*/
/*                         <li><strong>Unlimited</strong> Active Bids</li>*/
/*                         <li><strong><del>Premium contacts</del></strong></li>*/
/*                         <li><strong><del>Personal Assistant</del></strong></li>*/
/*                         <li><strong>360</strong> days valid period</li>*/
/*                     </ul>*/
/*                     <div class="buy-now">*/
/*                         <a class="btn btn-custom" href="http://www.agrot-is.com/register/register.html" >Register Now</a>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- End Pricing Table -->*/
/*             </div>*/
/*             <div class="col-md-3 col-sm-6 col-xs-12">*/
/*                 <!-- Pricing Table -->*/
/*                 <div class="plan animated hiding" data-animation="fadeInUp" data-delay="0">*/
/*                     <div class="plan-heading">*/
/*                         <h3>Business - Freemium</h3>*/
/*                         <p>Professional Subscription</p>*/
/*                         <div class="circle-price">*/
/*                             <span>$0</span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <ul>*/
/*                         <li><strong>Free</strong> setup</li>*/
/*                         <li><strong>24Hours</strong> live support</li>*/
/*                         <li><strong>Unlimited </strong> Live Feeds</li>*/
/*                         <li><strong>Unlimited</strong> Active Bids</li>*/
/*                         <li><strong>Premium contacts</strong> </li>*/
/*                         <li><strong><del>Personal Assistant</del></strong></li>*/
/*                         <li><strong>360</strong> days valid period</li>*/
/*                     </ul>*/
/*                     <div class="buy-now">*/
/*                         <a class="btn btn-custom" href="http://www.agrot-is.com/register/register.html" >Register Now</a>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- End Pricing Table -->*/
/*             </div>*/
/*             <div class="col-md-3 col-sm-6 col-xs-12">*/
/*                 <!-- Pricing Table -->*/
/*                 <div class="plan animated hiding" data-animation="fadeInUp" data-delay="0">*/
/*                     <div class="plan-heading">*/
/*                         <h3>Business - Professional</h3>*/
/*                         <p>Premium Subscription</p>*/
/*                         <div class="circle-price">*/
/*                             <span>$80</span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <ul>*/
/*                         <li><strong>Free</strong> setup</li>*/
/*                         <li><strong>24Hours</strong> live support</li>*/
/*                         <li><strong>Unlimited </strong> Live Feeds</li>*/
/*                         <li><strong>Unlimited</strong> Active Bids</li>*/
/*                         <li><strong>Premium contacts</strong></li>*/
/*                         <li><strong>Personal Assistant</strong></li>*/
/*                         <li><strong>360</strong> days valid period</li>*/
/*                     </ul>*/
/*                     <div class="buy-now">*/
/*                         <a class="btn btn-custom" href="http://www.agrot-is.com/register/register.html" >Register Now</a>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- End Pricing Table -->*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* */
/* */
/* */
/*     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">*/
/* */
/*     <!-- Render Content From Shortcode -->*/
/*     <section id="numbers" class="parallax ova_numbers"><div class="parallax-overlay"><div class="container"><br class="center up"></div></div></section>*/
/* */
/*     <footer><div class="container">*/
/*             <ul class="social-list">*/
/*                 <li><a href="https://www.facebook.com/" target="_blank" data-mce-href="https://www.facebook.com/leutpits">*/
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
/*     </body>*/
/*     </html>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
