<?php

/* TpfilrougeskillsBundle:skills:listeModifProjet.html.twig */
class __TwigTemplate_9f726a1fc687d97528fd5b9ae4da34bcfa2c724e907377d1f1fbc5f08a46ff4f extends Twig_Template
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
                        <th class=\"nomProjet\">Nom Projet</th>
                        <th class=\"description\">Description</th>
                        <th class=\"avancement\">Avancement</th>
                        <th class=\"dateDebut\">Date de début</th>
                        <th class=\"dateFin\">Date de fin</th>
                        <th class=\"edit\">Editer</th>
                    </theader>
                    <tbody>
                       ";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["listeProjets"]) ? $context["listeProjets"] : $this->getContext($context, "listeProjets"))));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 47
            echo "                            <tr id=\"listeProjets\">
                                <td class=\"nomProjet\">";
            // line 48
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "nomProjet")), "html", null, true);
            echo "</td>
                                <td class=\"description\">";
            // line 49
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "descriptionProjet")), "html", null, true);
            echo "</td>
                                <td class=\"avancement\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "avancement"), "html", null, true);
            echo " %</td>
                                <td class=\"dateDebut\">";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "dateDebut"), "d/m/Y"), "html", null, true);
            echo "</td>
                                <td class=\"dateFin\">";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "dateFin"), "d/m/Y"), "html", null, true);
            echo "</td>
                                <td class=\"edit\">
                                        <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tpfilrougeskills_voirProjet", array("id" => $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "id"))), "html", null, true);
            echo "\">éditer</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
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
        return "TpfilrougeskillsBundle:skills:listeModifProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 6,  126 => 58,  116 => 54,  111 => 52,  107 => 51,  103 => 50,  99 => 49,  95 => 48,  92 => 47,  88 => 46,  68 => 29,  63 => 27,  58 => 25,  47 => 17,  36 => 9,  32 => 8,  27 => 6,  20 => 1,);
    }
}
