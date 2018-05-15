<?php

/* layouts/index.html */
class __TwigTemplate_52486d1b470e04fdda6b24c0bb314cbb616027649dbd05db2c0a194173aa0a7c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'content' => array($this, 'block_content'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Login page | Nifty - Admin Template</title>


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href=\"/assets/css/bootstrap.min.css\" rel=\"stylesheet\">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href=\"/assets/css/nifty.min.css\" rel=\"stylesheet\">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href=\"/assets/css/demo/nifty-demo-icons.min.css\" rel=\"stylesheet\">


        
    <!--Demo [ DEMONSTRATION ]-->
    <link href=\"/assets/css/demo/nifty-demo.min.css\" rel=\"stylesheet\">


    <!--Magic Checkbox [ OPTIONAL ]-->
    <link href=\"/assets/plugins/magic-check/css/magic-check.min.css\" rel=\"stylesheet\">





    
    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href=\"/assets/plugins/pace/pace.min.css\" rel=\"stylesheet\">
    
    ";
        // line 48
        $this->displayBlock('style', $context, $blocks);
        // line 49
        echo "</head>

<body>
\t
    ";
        // line 53
        $this->displayBlock('content', $context, $blocks);
        // line 54
        echo "    

    <script src=\"/assets/plugins/pace/pace.min.js\"></script>

    <!--jQuery [ REQUIRED ]-->
    <script src=\"/assets/js/jquery-2.2.4.min.js\"></script>

    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src=\"/assets/js/bootstrap.min.js\"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src=\"/assets/js/nifty.min.js\"></script>
    
    <!--Background Image [ DEMONSTRATION ]-->
    <script src=\"/assets/js/demo/bg-images.js\"></script>
    ";
        // line 70
        $this->displayBlock('script', $context, $blocks);
        // line 71
        echo "\t\t</body>
</html>
";
    }

    // line 48
    public function block_style($context, array $blocks = array())
    {
    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
    }

    // line 70
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layouts/index.html";
    }

    public function getDebugInfo()
    {
        return array (  121 => 70,  116 => 53,  111 => 48,  105 => 71,  103 => 70,  85 => 54,  83 => 53,  77 => 49,  75 => 48,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Login page | Nifty - Admin Template</title>


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href=\"/assets/css/bootstrap.min.css\" rel=\"stylesheet\">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href=\"/assets/css/nifty.min.css\" rel=\"stylesheet\">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href=\"/assets/css/demo/nifty-demo-icons.min.css\" rel=\"stylesheet\">


        
    <!--Demo [ DEMONSTRATION ]-->
    <link href=\"/assets/css/demo/nifty-demo.min.css\" rel=\"stylesheet\">


    <!--Magic Checkbox [ OPTIONAL ]-->
    <link href=\"/assets/plugins/magic-check/css/magic-check.min.css\" rel=\"stylesheet\">





    
    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href=\"/assets/plugins/pace/pace.min.css\" rel=\"stylesheet\">
    
    {% block style %}{% endblock %}
</head>

<body>
\t
    {% block content %}{% endblock %}
    

    <script src=\"/assets/plugins/pace/pace.min.js\"></script>

    <!--jQuery [ REQUIRED ]-->
    <script src=\"/assets/js/jquery-2.2.4.min.js\"></script>

    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src=\"/assets/js/bootstrap.min.js\"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src=\"/assets/js/nifty.min.js\"></script>
    
    <!--Background Image [ DEMONSTRATION ]-->
    <script src=\"/assets/js/demo/bg-images.js\"></script>
    {% block script %}{% endblock %}
\t\t</body>
</html>
", "layouts/index.html", "/vagrant_data/cue/app/view/layouts/index.html");
    }
}
