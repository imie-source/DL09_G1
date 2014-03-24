<?php

/* ImieSkillsBundle:Skills:lister.html.twig */
class __TwigTemplate_e6ca5d5a357ce26bb087157e0797b4b0daf455729b1467842c9e7c604a69de12 extends Twig_Template
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
        // line 10
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
                <th>Disponibilité</th>
                </theader>
            <tbody>
               ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeUsers"]) ? $context["listeUsers"] : $this->getContext($context, "listeUsers")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 24
            echo "\t\t\t\t\t<tr id=\"listeUsers\">
\t\t\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td id=\"adresse\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresse"), "html", null, true);
            echo "
\t\t\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "cp"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "ville"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 31
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dispo") == 1)) {
                // line 32
                echo "\t\t\t\t\t\t\t\t\tDisponible
\t\t\t\t\t\t\t\t";
            } else {
                // line 34
                echo "\t\t\t\t\t\t\t\t\tNon Disponible
\t\t\t\t\t\t\t\t";
            }
            // line 36
            echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
            // line 37
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id") == 5)) {
                echo " 
\t\t\t\t\t\t\t<td><a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imie_skills_voir", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
                echo "\" class=\"btn\">
\t\t\t\t\t\t\t\t  <i class=\"icon-edit\"></i>
\t\t\t\t\t\t\t\t  modifier le user
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
            }
            // line 44
            echo "\t\t\t\t\t</tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/SkillsBundle/css/styleVoir.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\" />
\t\t\t<link type=\"text/css\" href = \"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap-3.1.1-dist/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\" />
        ";
    }

    public function getTemplateName()
    {
        return "ImieSkillsBundle:Skills:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 8,  118 => 7,  115 => 6,  108 => 46,  101 => 44,  92 => 38,  88 => 37,  85 => 36,  81 => 34,  77 => 32,  75 => 31,  71 => 30,  67 => 29,  63 => 28,  59 => 27,  55 => 26,  51 => 25,  48 => 24,  44 => 23,  29 => 10,  27 => 6,  20 => 1,);
    }
}
