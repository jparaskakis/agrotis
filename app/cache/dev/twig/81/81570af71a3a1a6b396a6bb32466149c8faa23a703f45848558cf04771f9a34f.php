<?php

/* :default:pricing.html.twig */
class __TwigTemplate_b5811fa599545bd88bda5d1a7e2eaa941740e22bab3b969cd08ed17ecaf08b32 extends Twig_Template
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
        $__internal_a1f20483fb3f6a5c571520851be1b8413abaecb44d57e1d8e0d9b53ed8865bf7 = $this->env->getExtension("native_profiler");
        $__internal_a1f20483fb3f6a5c571520851be1b8413abaecb44d57e1d8e0d9b53ed8865bf7->enter($__internal_a1f20483fb3f6a5c571520851be1b8413abaecb44d57e1d8e0d9b53ed8865bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:pricing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1f20483fb3f6a5c571520851be1b8413abaecb44d57e1d8e0d9b53ed8865bf7->leave($__internal_a1f20483fb3f6a5c571520851be1b8413abaecb44d57e1d8e0d9b53ed8865bf7_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_b169b6638302707f3906d20f27d81df02b86c1706d280590008566c12bcc6c5b = $this->env->getExtension("native_profiler");
        $__internal_b169b6638302707f3906d20f27d81df02b86c1706d280590008566c12bcc6c5b->enter($__internal_b169b6638302707f3906d20f27d81df02b86c1706d280590008566c12bcc6c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "pricing";
        
        $__internal_b169b6638302707f3906d20f27d81df02b86c1706d280590008566c12bcc6c5b->leave($__internal_b169b6638302707f3906d20f27d81df02b86c1706d280590008566c12bcc6c5b_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_19b780fc849e521eb163eefcb9e5352fa7e2a48cdf0dd4f14ab011dd1c9045ca = $this->env->getExtension("native_profiler");
        $__internal_19b780fc849e521eb163eefcb9e5352fa7e2a48cdf0dd4f14ab011dd1c9045ca->enter($__internal_19b780fc849e521eb163eefcb9e5352fa7e2a48cdf0dd4f14ab011dd1c9045ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_19b780fc849e521eb163eefcb9e5352fa7e2a48cdf0dd4f14ab011dd1c9045ca->leave($__internal_19b780fc849e521eb163eefcb9e5352fa7e2a48cdf0dd4f14ab011dd1c9045ca_prof);

    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8afea281ff1cf6b3aa7a2b3970f5ebafe0c1c92662418f9726f3656192cc292e = $this->env->getExtension("native_profiler");
        $__internal_8afea281ff1cf6b3aa7a2b3970f5ebafe0c1c92662418f9726f3656192cc292e->enter($__internal_8afea281ff1cf6b3aa7a2b3970f5ebafe0c1c92662418f9726f3656192cc292e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_8afea281ff1cf6b3aa7a2b3970f5ebafe0c1c92662418f9726f3656192cc292e->leave($__internal_8afea281ff1cf6b3aa7a2b3970f5ebafe0c1c92662418f9726f3656192cc292e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_d69155058c5868340dee94a55a7e01eac2715ff1968563b128a5cf07673fe0d3 = $this->env->getExtension("native_profiler");
        $__internal_d69155058c5868340dee94a55a7e01eac2715ff1968563b128a5cf07673fe0d3->enter($__internal_d69155058c5868340dee94a55a7e01eac2715ff1968563b128a5cf07673fe0d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d69155058c5868340dee94a55a7e01eac2715ff1968563b128a5cf07673fe0d3->leave($__internal_d69155058c5868340dee94a55a7e01eac2715ff1968563b128a5cf07673fe0d3_prof);

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
