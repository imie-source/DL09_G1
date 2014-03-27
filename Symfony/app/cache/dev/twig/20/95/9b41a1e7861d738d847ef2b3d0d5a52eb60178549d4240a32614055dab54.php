<?php

/* TpfilrougeskillsBundle:skills:listeModifProjet.html.twig */
class __TwigTemplate_20959b41a1e7861d738d847ef2b3d0d5a52eb60178549d4240a32614055dab54 extends Twig_Template
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
        echo "<!DOCTYPE>
<html lang='fr'>
    <head>
        <title>Tp Fil Rouge</title>
       <!DOCTYPE>
<html lang='fr'>
    <head>
        <title>Tp Fil Rouge</title>
        <meta charset = 'utf-8'/>
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    </head>
    <body>
        <table>
            <theader>
                <th>Nom Projet</th>
                <th>Description</th>
                <th>Avancement</th>
                <th>Date de début</th>
                <th>Date de fin</th>
                </theader>
            <tbody>
               ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeProjets"]) ? $context["listeProjets"] : $this->getContext($context, "listeProjets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 27
            echo "\t\t\t\t\t<tr id=\"listeProjets\">
\t\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "nomProjet"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "descriptionProjet"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "avancement"), "html", null, true);
            echo "
\t\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "dateDebut"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "dateFin"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tpfilrougeskills_voirProjet", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id"))), "html", null, true);
            echo "\" class=\"btn\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-edit\"></i>
\t\t\t\t\t\t\t\t\t\tmodifier le projet
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            </tbody>
        </table>
    </body>
</html>";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "            <link type=\"text/css\" href = \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/skillsBundle/css/styleVoir.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\" />
\t\t\t<link type=\"text/css\" href = \"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap-3.1.1-dist/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\" />
\t\t\t<link type=\"text/css\" href = \"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap-3.1.1-dist/fonts/glyphicons-halflings-regular.ttf"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\" />
        ";
    }

    public function getTemplateName()
    {
        return "TpfilrougeskillsBundle:skills:listeModifProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 13,  102 => 12,  97 => 11,  94 => 10,  87 => 41,  74 => 34,  69 => 32,  65 => 31,  61 => 30,  57 => 29,  53 => 28,  50 => 27,  46 => 26,  33 => 15,  31 => 10,  20 => 1,);
    }
}
