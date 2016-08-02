<?php

/* :default:modals.html.twig */
class __TwigTemplate_62df441baf05a2b80da3c5ffb2a2ab5eba9d2533fdd3931a857fa8da123b84b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0232c8b970b05a2a9da64d61c7a8f0f8bf7ce23d65a972c666437a64fe03179 = $this->env->getExtension("native_profiler");
        $__internal_b0232c8b970b05a2a9da64d61c7a8f0f8bf7ce23d65a972c666437a64fe03179->enter($__internal_b0232c8b970b05a2a9da64d61c7a8f0f8bf7ce23d65a972c666437a64fe03179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:modals.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"login_modal\" role=\"dialog\">
    <div class=\"modal-dialog\" style=\"width: 400px;\">
        <!-- Modal content-->
        <div class=\"modal-content\" style=\"height: 392px\">
            <div class=\"login_success\">Password Changed</div>
            <form id=\"login_form\" action=\"";
        // line 6
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
        // line 19
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

";
        
        $__internal_b0232c8b970b05a2a9da64d61c7a8f0f8bf7ce23d65a972c666437a64fe03179->leave($__internal_b0232c8b970b05a2a9da64d61c7a8f0f8bf7ce23d65a972c666437a64fe03179_prof);

    }

    public function getTemplateName()
    {
        return ":default:modals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 19,  29 => 6,  22 => 1,);
    }
}
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
/* */
