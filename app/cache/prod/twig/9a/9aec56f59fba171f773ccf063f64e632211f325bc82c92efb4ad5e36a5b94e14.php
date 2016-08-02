<?php

/* :default:dashboard_buis.html.twig */
class __TwigTemplate_b3fd6da84827bf83859c41602e5aeee472113c9179f99136c72478f0970f6c0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:dashboard_buis.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        echo "dashboard";
    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "



    <body class=\"\">

    <section id=\"about\" class=\"section\">
        <div class=\"container\">
            <div class=\"title col-md-8 col-sm-10 col-xs-12\">
                <h1>About <strong>Agrot-IS</strong></h1>
                <hr>
            </div>
            <!-- About Text -->
            </br> </br> <p class=\"about-text\">The Agrot-IS is an innovative online transaction platform for agricultural products.
                Get informed, discover and purchase agricultural products available in a wide variety and low price.
                Take part in live transactions and make the best deal. !</p>
            <!-- About Text -->
            <div class=\"promo-line\">
                <div class=\"col-md-6 col-sm-6 col-xs-12\">
                    <div class=\"row\">
                        <div class=\"promo right animated hiding\" data-animation=\"fadeInLeft\">
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
                        <div class=\"promo animated hiding\" data-animation=\"fadeInRight\">
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
                        <div class=\"promo right animated hiding\" data-animation=\"fadeInLeft\">
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
                        <div class=\"promo animated hiding\" data-animation=\"fadeInRight\">
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
        </div>
    </section>





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











    </body>
    </html>




";
    }

    public function getTemplateName()
    {
        return ":default:dashboard_buis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  47 => 12,  42 => 10,  37 => 9,  31 => 3,  11 => 1,);
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
/* */
/* */
/*     <body class="">*/
/* */
/*     <section id="about" class="section">*/
/*         <div class="container">*/
/*             <div class="title col-md-8 col-sm-10 col-xs-12">*/
/*                 <h1>About <strong>Agrot-IS</strong></h1>*/
/*                 <hr>*/
/*             </div>*/
/*             <!-- About Text -->*/
/*             </br> </br> <p class="about-text">The Agrot-IS is an innovative online transaction platform for agricultural products.*/
/*                 Get informed, discover and purchase agricultural products available in a wide variety and low price.*/
/*                 Take part in live transactions and make the best deal. !</p>*/
/*             <!-- About Text -->*/
/*             <div class="promo-line">*/
/*                 <div class="col-md-6 col-sm-6 col-xs-12">*/
/*                     <div class="row">*/
/*                         <div class="promo right animated hiding" data-animation="fadeInLeft">*/
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
/*                         <div class="promo animated hiding" data-animation="fadeInRight">*/
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
/*                         <div class="promo right animated hiding" data-animation="fadeInLeft">*/
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
/*                         <div class="promo animated hiding" data-animation="fadeInRight">*/
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
/*         </div>*/
/*     </section>*/
/* */
/* */
/* */
/* */
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
/* */
/*     </body>*/
/*     </html>*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
