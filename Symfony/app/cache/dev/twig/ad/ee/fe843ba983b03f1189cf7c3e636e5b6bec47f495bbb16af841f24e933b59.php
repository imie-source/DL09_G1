<?php

/* MoiTestBundle:Test:byebye.html.twig */
class __TwigTemplate_adeefe843ba983b03f1189cf7c3e636e5b6bec47f495bbb16af841f24e933b59 extends Twig_Template
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
        <title>This is my last page in Symfony 2</title>    
    </head>
    <body>
        <h1>ByeBye ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo "  !</h1>
        <p>
           Thank you for using my application. See you next. Bye !
        </p>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "MoiTestBundle:Test:byebye.html.twig";
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
