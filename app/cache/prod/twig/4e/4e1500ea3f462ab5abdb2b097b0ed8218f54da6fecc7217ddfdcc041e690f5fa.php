<?php

/* :default:modals.html.twig */
class __TwigTemplate_cbcd6c4b459a3e2a9e6a2ae1990ff1878274df9d19db3627d352612a6d4d9911 extends Twig_Template
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
        return array (  42 => 19,  26 => 6,  19 => 1,);
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
