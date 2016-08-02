<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_07fe1de0dbe229c233ce0a356efd37149ca269dfad251a9182bfc477f045e3c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e40b1a065ac140f602fe9da2341c8263cb2a3c35e7d1827f7894934ab6d89f5 = $this->env->getExtension("native_profiler");
        $__internal_8e40b1a065ac140f602fe9da2341c8263cb2a3c35e7d1827f7894934ab6d89f5->enter($__internal_8e40b1a065ac140f602fe9da2341c8263cb2a3c35e7d1827f7894934ab6d89f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8e40b1a065ac140f602fe9da2341c8263cb2a3c35e7d1827f7894934ab6d89f5->leave($__internal_8e40b1a065ac140f602fe9da2341c8263cb2a3c35e7d1827f7894934ab6d89f5_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_30ac715399595669cb5557bc21dd19b9531eeff7216302f7b249af08d47bc472 = $this->env->getExtension("native_profiler");
        $__internal_30ac715399595669cb5557bc21dd19b9531eeff7216302f7b249af08d47bc472->enter($__internal_30ac715399595669cb5557bc21dd19b9531eeff7216302f7b249af08d47bc472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_30ac715399595669cb5557bc21dd19b9531eeff7216302f7b249af08d47bc472->leave($__internal_30ac715399595669cb5557bc21dd19b9531eeff7216302f7b249af08d47bc472_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e177a925457db6aa758bce372a5184655fc10e2838a76942e5848cc7025a5d59 = $this->env->getExtension("native_profiler");
        $__internal_e177a925457db6aa758bce372a5184655fc10e2838a76942e5848cc7025a5d59->enter($__internal_e177a925457db6aa758bce372a5184655fc10e2838a76942e5848cc7025a5d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e177a925457db6aa758bce372a5184655fc10e2838a76942e5848cc7025a5d59->leave($__internal_e177a925457db6aa758bce372a5184655fc10e2838a76942e5848cc7025a5d59_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_551164fe43c139cbd18d85eab581742cfb9da89bf31a099b6d9f17abb3c0350a = $this->env->getExtension("native_profiler");
        $__internal_551164fe43c139cbd18d85eab581742cfb9da89bf31a099b6d9f17abb3c0350a->enter($__internal_551164fe43c139cbd18d85eab581742cfb9da89bf31a099b6d9f17abb3c0350a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_551164fe43c139cbd18d85eab581742cfb9da89bf31a099b6d9f17abb3c0350a->leave($__internal_551164fe43c139cbd18d85eab581742cfb9da89bf31a099b6d9f17abb3c0350a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
