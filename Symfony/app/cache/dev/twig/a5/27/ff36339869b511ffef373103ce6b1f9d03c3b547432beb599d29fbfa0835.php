<?php

/* ImieSkillsBundle:Skills:voir.html.twig */
class __TwigTemplate_a527ff36339869b511ffef373103ce6b1f9d03c3b547432beb599d29fbfa0835 extends Twig_Template
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
\t<head>
\t\t<title>Tp Fil Rouge</title>
\t\t<meta charset = 'utf-8'/>
\t\t";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "\t</head>
\t<body>
\t\t<table>
\t\t\t<theader>
\t\t\t\t<th>Nom</th>
\t\t\t\t<th>Prénom</th>
\t\t\t\t<th id=\"adresse\">Adresse</th>
\t\t\t\t<th>Code Postal</th>
\t\t\t\t<th>Ville</th>
\t\t\t\t<th>E-Mail</th>
\t\t\t\t<th>Disponibilité</th>
\t\t\t</theader>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom"), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom"), "html", null, true);
        echo "</td>
\t\t\t\t\t<td id=\"adresse\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresse"), "html", null, true);
        echo "
\t\t\t\t\t<td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "cp"), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "ville"), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 30
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dispo") == 1)) {
            // line 31
            echo "\t\t\t\t\t\tDisponible
\t\t\t\t\t\t";
        } else {
            // line 33
            echo "\t\t\t\t\t\tNon Disponible
\t\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
        <p>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imie_skills_lister", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
              <i class=\"icon-edit\"></i>
\t\t\t  modifier le user
            </a>
        </p>
        </p>
\t</body>
</html>";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t\t    ";
        // line 8
        echo "\t\t\t<link type=\"text/css\" href = \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\" />
\t\t";
    }

    public function getTemplateName()
    {
        return "ImieSkillsBundle:Skills:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 8,  101 => 7,  98 => 6,  86 => 40,  79 => 35,  75 => 33,  71 => 31,  69 => 30,  65 => 29,  61 => 28,  57 => 27,  53 => 26,  49 => 25,  45 => 24,  29 => 10,  27 => 6,  20 => 1,);
    }
}
