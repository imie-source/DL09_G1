<?php

/* ImieSkillsBundle:Default:index.html.twig */
class __TwigTemplate_a8bdb52213d70399b2d7800aa030251ed75aaaf9a822709066928845480d85ea extends Twig_Template
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
        echo "<!DOCTYPE>
<html>
    <head>
        <title>Gestion des compétences</title>
    </head>
    <body>
        Hello ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "ImieSkillsBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }
}
