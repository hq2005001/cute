<?php

/* index/index.html */
class __TwigTemplate_1e5634ffc515567224123da5d6f1c4b9db633d36ea8ad136ced3e97d68339546 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>My Webpage</title>
    </head>
    <body>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "  
        ";
            // line 8
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo ",  
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo " 
        ";
        // line 10
        echo twig_escape_filter($this->env, ($context["data"] ?? null), "html", null, true);
        echo " 
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "index/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  45 => 9,  37 => 8,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <title>My Webpage</title>
    </head>
    <body>
        {% for i in range(0, 3) %}  
        {{ i }},  
        {% endfor %} 
        {{ data }} 
    </body>
</html>", "index/index.html", "/home/echo/workspace/qFramework/app/view/index/index.html");
    }
}
