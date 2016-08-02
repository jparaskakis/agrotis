<?php

/* default/pricing.html.twig */
class __TwigTemplate_9c25de125554fb442a1ca88b076bb794ea30be8ca31d922e75a4c485c9e19ba1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/pricing.html.twig", 1);
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
        $__internal_8798b3147649a13317cc594ffbffc7ee8021d2bba4f9925ae35954d13f352db2 = $this->env->getExtension("native_profiler");
        $__internal_8798b3147649a13317cc594ffbffc7ee8021d2bba4f9925ae35954d13f352db2->enter($__internal_8798b3147649a13317cc594ffbffc7ee8021d2bba4f9925ae35954d13f352db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/pricing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8798b3147649a13317cc594ffbffc7ee8021d2bba4f9925ae35954d13f352db2->leave($__internal_8798b3147649a13317cc594ffbffc7ee8021d2bba4f9925ae35954d13f352db2_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_5211cc3dfdf43108a816da76ba08258a92a78b68bde5b5c9858e09bcd39922c9 = $this->env->getExtension("native_profiler");
        $__internal_5211cc3dfdf43108a816da76ba08258a92a78b68bde5b5c9858e09bcd39922c9->enter($__internal_5211cc3dfdf43108a816da76ba08258a92a78b68bde5b5c9858e09bcd39922c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "pricing";
        
        $__internal_5211cc3dfdf43108a816da76ba08258a92a78b68bde5b5c9858e09bcd39922c9->leave($__internal_5211cc3dfdf43108a816da76ba08258a92a78b68bde5b5c9858e09bcd39922c9_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_2b79eba2475d0292f8a7b514fc78b1f0c8de81d51076e9f150541a93081e2331 = $this->env->getExtension("native_profiler");
        $__internal_2b79eba2475d0292f8a7b514fc78b1f0c8de81d51076e9f150541a93081e2331->enter($__internal_2b79eba2475d0292f8a7b514fc78b1f0c8de81d51076e9f150541a93081e2331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_2b79eba2475d0292f8a7b514fc78b1f0c8de81d51076e9f150541a93081e2331->leave($__internal_2b79eba2475d0292f8a7b514fc78b1f0c8de81d51076e9f150541a93081e2331_prof);

    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1f4dbf6066e35740d1a1e4c52c03818aa29208405d228e82c869d28df0a27d30 = $this->env->getExtension("native_profiler");
        $__internal_1f4dbf6066e35740d1a1e4c52c03818aa29208405d228e82c869d28df0a27d30->enter($__internal_1f4dbf6066e35740d1a1e4c52c03818aa29208405d228e82c869d28df0a27d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_1f4dbf6066e35740d1a1e4c52c03818aa29208405d228e82c869d28df0a27d30->leave($__internal_1f4dbf6066e35740d1a1e4c52c03818aa29208405d228e82c869d28df0a27d30_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_26e8c6738f91fe5f96f36d01a2bfe8234afefc729e2b7774c0bf11cc74ca197b = $this->env->getExtension("native_profiler");
        $__internal_26e8c6738f91fe5f96f36d01a2bfe8234afefc729e2b7774c0bf11cc74ca197b->enter($__internal_26e8c6738f91fe5f96f36d01a2bfe8234afefc729e2b7774c0bf11cc74ca197b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_26e8c6738f91fe5f96f36d01a2bfe8234afefc729e2b7774c0bf11cc74ca197b->leave($__internal_26e8c6738f91fe5f96f36d01a2bfe8234afefc729e2b7774c0bf11cc74ca197b_prof);

    }

    public function getTemplateName()
    {
        return "default/pricing.html.twig";
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
