<?php

/* TpfilrougeskillsBundle:skills:vue.html.twig */
class __TwigTemplate_9153921204f66426d18ddf3fa35363c79f5ac1223468b2b91fe30df558ea1091 extends Twig_Template
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
        // line 5
        echo "<h3>Formulaire User</h3>
<div class=\"well\">
  <form method=\"post\" ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t<input type=\"submit\" value=\"Enregistrer\" class=\"btn btn-primary\"  />
\t<input type=\"reset\" value=\"Annuler\" class=\"btn btn-primary\"  />
  </form>
</div>";
    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 2
        echo "\t\t    ";
        // line 3
        echo "\t\t\t<link type=\"text/css\" href = \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap-3.1.1-dist/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\" />
";
    }

    public function getTemplateName()
    {
        return "TpfilrougeskillsBundle:skills:vue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 3,  42 => 2,  39 => 1,  30 => 8,  26 => 7,  22 => 5,  20 => 1,);
    }
}
