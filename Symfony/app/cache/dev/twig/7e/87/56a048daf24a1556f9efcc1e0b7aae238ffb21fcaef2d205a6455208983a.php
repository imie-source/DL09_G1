<?php

/* TpfilrougeskillsBundle:home:index.html.twig */
class __TwigTemplate_7e8756a048daf24a1556f9efcc1e0b7aae238ffb21fcaef2d205a6455208983a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TpfilrougeskillsBundle:Home:header.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "TpfilrougeskillsBundle:Home:header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "TpfilrougeskillsBundle:home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array ();
    }
}
