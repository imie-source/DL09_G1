<?php

/* MoiTestBundle:Test:index.html.twig */
class __TwigTemplate_6977b73fc2270a0786f807677d871c86f92fd843392a92eea46208df55fc91c8 extends Twig_Template
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
        // line 2
        echo "
<!DOCTYPE html>
<html>
    <head>
        <title>This is my first page in Symfony 2</title>    
\t</head>
\t<body>
        <h1>Hello ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo "  !</h1>
        <p>
            Welcome to this page! it is just used for testing if symfony 2 works. 
\t\t\tYou will have this page when you start my application.
\t\t\tThank you for using my site.
\t\t</p>
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "MoiTestBundle:Test:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 9,  19 => 2,);
    }
}
