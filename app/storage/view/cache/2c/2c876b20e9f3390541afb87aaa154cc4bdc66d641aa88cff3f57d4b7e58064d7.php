<?php

/* home/user/test.html */
class __TwigTemplate_a02bfaffd81686af4ea4b7fdd5042a5d9a873c899ebea0357b65d8db14a057c2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layouts/index.html", "home/user/test.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/index.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<div id=\"container\" class=\"cls-container\">
\t\t<div id=\"bg-overlay\" class=\"bg-img\" style=\"background-image: url(/assets/img/bg-img/bg-img-3.jpg);\"></div>
\t\t\t
\t\t<div class=\"cls-content\">
\t\t    <div class=\"cls-content-sm panel\">
\t\t        <div class=\"panel-body\">
\t\t            <div class=\"mar-ver pad-btm\">
\t\t                <h3 class=\"h4 mar-no\">Account Login</h3>
\t\t                <p class=\"text-muted\">Sign In to your account</p>
\t\t            </div>
\t\t            <form action=\"index.html\">
\t\t                <div class=\"form-group\">
\t\t                    <input type=\"text\" class=\"form-control\" placeholder=\"Username\" autofocus>
\t\t                </div>
\t\t                <div class=\"form-group\">
\t\t                    <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
\t\t                </div>
\t\t                <div class=\"checkbox pad-btm text-left\">
\t\t                    <input id=\"demo-form-checkbox\" class=\"magic-checkbox\" type=\"checkbox\">
\t\t                    <label for=\"demo-form-checkbox\">Remember me</label>
\t\t                </div>
\t\t                <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">Sign In</button>
\t\t            </form>
\t\t        </div>
\t\t
\t\t        <div class=\"pad-all\">
\t\t            <a href=\"pages-password-reminder.html\" class=\"btn-link mar-rgt\">Forgot password ?</a>
\t\t            <a href=\"pages-register.html\" class=\"btn-link mar-lft\">Create a new account</a>
\t\t
\t\t            <div class=\"media pad-top bord-top\">
\t\t                <div class=\"pull-right\">
\t\t                    <a href=\"#\" class=\"pad-rgt\"><i class=\"demo-psi-facebook icon-lg text-primary\"></i></a>
\t\t                    <a href=\"#\" class=\"pad-rgt\"><i class=\"demo-psi-twitter icon-lg text-info\"></i></a>
\t\t                    <a href=\"#\" class=\"pad-rgt\"><i class=\"demo-psi-google-plus icon-lg text-danger\"></i></a>
\t\t                </div>
\t\t                <div class=\"media-body text-left\">
\t\t                    Login with
\t\t                </div>
\t\t            </div>
\t\t        </div>
\t\t    </div>
\t\t</div>

\t</div>
";
    }

    public function getTemplateName()
    {
        return "home/user/test.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts/index.html\" %}

{% block content %}

<div id=\"container\" class=\"cls-container\">
\t\t<div id=\"bg-overlay\" class=\"bg-img\" style=\"background-image: url(/assets/img/bg-img/bg-img-3.jpg);\"></div>
\t\t\t
\t\t<div class=\"cls-content\">
\t\t    <div class=\"cls-content-sm panel\">
\t\t        <div class=\"panel-body\">
\t\t            <div class=\"mar-ver pad-btm\">
\t\t                <h3 class=\"h4 mar-no\">Account Login</h3>
\t\t                <p class=\"text-muted\">Sign In to your account</p>
\t\t            </div>
\t\t            <form action=\"index.html\">
\t\t                <div class=\"form-group\">
\t\t                    <input type=\"text\" class=\"form-control\" placeholder=\"Username\" autofocus>
\t\t                </div>
\t\t                <div class=\"form-group\">
\t\t                    <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
\t\t                </div>
\t\t                <div class=\"checkbox pad-btm text-left\">
\t\t                    <input id=\"demo-form-checkbox\" class=\"magic-checkbox\" type=\"checkbox\">
\t\t                    <label for=\"demo-form-checkbox\">Remember me</label>
\t\t                </div>
\t\t                <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\">Sign In</button>
\t\t            </form>
\t\t        </div>
\t\t
\t\t        <div class=\"pad-all\">
\t\t            <a href=\"pages-password-reminder.html\" class=\"btn-link mar-rgt\">Forgot password ?</a>
\t\t            <a href=\"pages-register.html\" class=\"btn-link mar-lft\">Create a new account</a>
\t\t
\t\t            <div class=\"media pad-top bord-top\">
\t\t                <div class=\"pull-right\">
\t\t                    <a href=\"#\" class=\"pad-rgt\"><i class=\"demo-psi-facebook icon-lg text-primary\"></i></a>
\t\t                    <a href=\"#\" class=\"pad-rgt\"><i class=\"demo-psi-twitter icon-lg text-info\"></i></a>
\t\t                    <a href=\"#\" class=\"pad-rgt\"><i class=\"demo-psi-google-plus icon-lg text-danger\"></i></a>
\t\t                </div>
\t\t                <div class=\"media-body text-left\">
\t\t                    Login with
\t\t                </div>
\t\t            </div>
\t\t        </div>
\t\t    </div>
\t\t</div>

\t</div>
{% endblock %}", "home/user/test.html", "/home/echo/workspace/qFramework/app/view/home/user/test.html");
    }
}
