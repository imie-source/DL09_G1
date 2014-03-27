<?php

/* TpfilrougeskillsBundle:skills:lister.html.twig */
class __TwigTemplate_a67d56b18fa0af62241b5a6ed6660e14f3dd03d96688d5fa3f1bd42fec67ab76 extends Twig_Template
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
        <meta charset = 'utf-8'/>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <table>
            <theader>
                <th>Nom</th>
                <th>Prénom</th>
                <th id=\"adresse\">Adresse</th>
                <th>Code Postal</th>
                <th>Ville</th>
                <th>E-Mail</th>
\t\t\t\t<th>Descriptif</th>
                <th>Disponibilité</th>
                </theader>
            <tbody>
               ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeUsers"]) ? $context["listeUsers"] : $this->getContext($context, "listeUsers")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 26
            echo "\t\t\t\t\t<tr id=\"listeUsers\">
\t\t\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td id=\"adresse\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresse"), "html", null, true);
            echo "
\t\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "cp"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "ville"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "descriptif"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 34
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dispo") == 1)) {
                // line 35
                echo "\t\t\t\t\t\t\t\t\tDisponible
\t\t\t\t\t\t\t\t";
            } else {
                // line 37
                echo "\t\t\t\t\t\t\t\t\tNon Disponible
\t\t\t\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
            // line 40
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id") == 2)) {
                // line 41
                echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tpfilrougeskills_voir", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
                echo "\" class=\"btn\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-edit\"></i>
\t\t\t\t\t\t\t\t\t\tmodifier le user
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
            }
            // line 48
            echo "\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </tbody>
        </table>
    </body>
</html>";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link type=\"text/css\" href = \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/skillsBundle/css/styleVoir.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\" />
\t\t\t<link type=\"text/css\" href = \"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap-3.1.1-dist/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\" />
\t\t\t<link type=\"text/css\" href = \"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap-3.1.1-dist/fonts/glyphicons-halflings-regular.ttf"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\" />
        ";
    }

    public function getTemplateName()
    {
        return "TpfilrougeskillsBundle:skills:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 9,  129 => 8,  124 => 7,  121 => 6,  114 => 50,  107 => 48,  98 => 42,  95 => 41,  93 => 40,  90 => 39,  86 => 37,  82 => 35,  80 => 34,  76 => 33,  72 => 32,  68 => 31,  64 => 30,  60 => 29,  56 => 28,  52 => 27,  49 => 26,  45 => 25,  29 => 11,  27 => 6,  20 => 1,);
    }
}
