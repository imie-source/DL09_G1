<?php

/* ImieSkillsBundle:Skills:vue.html.twig */
class __TwigTemplate_36c89c88bf8ee7c9d3c45c72fef55749c8b4b1858c21f45916d45e1837bb813b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 2
        echo "    <link type=\"text/css\" href = \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/SkillsBundle/css/styleVoir.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\" />
    <link type=\"text/css\" href = \"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap-3.1.1-dist/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\" />
";
    }

    public function getTemplateName()
    {
        return "ImieSkillsBundle:Skills:vue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  29 => 2,  26 => 1,  22 => 6,  20 => 1,);
    }
}
