<?php

/* TpfilrougeskillsBundle:skills:lister.html.twig */
class __TwigTemplate_4a6e6db4353dd4e9ec565506e0dfe76ef1b9eb8c40193c3b361a0839a8b772a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link type=\"text/css\" href = \"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/skills/css/reset.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\" />
        <link type=\"text/css\" href = \"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/skills/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\" />

    </head>

    <body>
        <div id=\"main\">
            <header>
                <figure>
                    <img id=\"logo_imie\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/skills/img/logo-imie.png"), "html", null, true);
        echo "\" alt=\"Logo I M I E\" />
                </figure>
                <form id=\"user\">
                    Ici un formulaire
                </form>
            </header>

            <nav>
                <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("tpfilrougeskills_accueil");
        echo "\">Accueil</a>
                <span>|</span>
                <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("tpfilrougeskills_lister", array("idRole" => 3));
        echo "\">Profil</a>
                <span>|</span>
                <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("tpfilrougeskills_listerProjet", array("idRole" => 3));
        echo "\">Projets</a>
                <span>|</span>
                <a href=\"#\">Compétences</a>
            </nav>
            <hr>

            <section>
                <table>
                    <theader>
                        <th class=\"nom\">Nom</th>
                        <th class=\"prenom\">Prénom</th>
                        <th class=\"adresse\">Adresse</th>
                        <th class=\"cp\">CP</th>
                        <th class=\"ville\">Ville</th>
                        <th class=\"mail\">E-Mail</th>
                        <th class=\"dispo\">Disponibilité</th>
                        <th class=\"edit\">Edit</th>
                    </theader>
                    <tbody>
                       ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["listeUsers"]) ? $context["listeUsers"] : $this->getContext($context, "listeUsers"))));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 49
            echo "                            <tr id=\"listeUsers\">
                                <td class=\"nom\">";
            // line 50
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom")), "html", null, true);
            echo "</td>
                                <td class=\"prenom\">";
            // line 51
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom")), "html", null, true);
            echo "</td>
                                <td class=\"adresse\">";
            // line 52
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresse")), "html", null, true);
            echo "</td>
                                <td class=\"cp\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "cp"), "html", null, true);
            echo "</td>
                                <td class=\"ville\">";
            // line 54
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "ville")), "html", null, true);
            echo "</td>
                                <td class=\"mail\"><a href=\"mailto:";
            // line 55
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email")), "html", null, true);
            echo "</a></td>
                                <td class=\"dispo\">
                                    ";
            // line 57
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dispo") == 1)) {
                // line 58
                echo "                                            Disponible
                                        ";
            } else {
                // line 60
                echo "                                            Non Disponible
                                    ";
            }
            // line 62
            echo "                                </td>
                                <td class=\"edit\">
                                    ";
            // line 64
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id") == 2)) {
                // line 65
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tpfilrougeskills_voir", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
                echo "\">éditer</a>
                                ";
            }
            // line 67
            echo "                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                    </tbody>
                </table>
            </section>
       
            <hr>
            <footer>
                Projet Cerberus | 1984 avec la participation de :<br>
                <p id=\"name\">Cédric \"Fabulous\" Prudent, Elvina \"Awesome\" Berneron, Ouahcène \"Magnificent\" Djaou, Anaël \"Amazing\" Tessier, Stéphane \"Steller\" Feuga.</p>
                <hr>
                <p id=\"copyright\">Copyright © 2013-2014 under <a href=\"http://www.gnu.org/licenses/gpl.html\">GNU/GPL v3</a>.</p>
            </footer>
        </div>
    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Projet Cerberus/1984 | Profil";
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
        return array (  171 => 6,  154 => 70,  146 => 67,  140 => 65,  138 => 64,  134 => 62,  130 => 60,  126 => 58,  124 => 57,  117 => 55,  113 => 54,  109 => 53,  105 => 52,  101 => 51,  97 => 50,  94 => 49,  90 => 48,  68 => 29,  63 => 27,  58 => 25,  47 => 17,  36 => 9,  32 => 8,  27 => 6,  20 => 1,);
    }
}
