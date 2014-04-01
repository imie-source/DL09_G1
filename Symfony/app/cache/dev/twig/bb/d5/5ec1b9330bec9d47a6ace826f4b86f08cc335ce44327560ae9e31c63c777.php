<?php

/* TpfilrougeskillsBundle:skills:index.html.twig */
class __TwigTemplate_bbd55ec1b9330bec9d47a6ace826f4b86f08cc335ce44327560ae9e31c63c777 extends Twig_Template
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
                <article id=\"hello\">
                    Bonjour, Hello, Guten Tag, صباح الخير, barev, Demat, 您好, 안녕하세요, Dobar dan, Hyvää päivää, Gia, Jó napot kívánok, Buongiorno, God dag, Dzień dobry, Bună ziua, Добрый день, สวัสดีครับ , Günaydin, Pozdravljeni, שלום, こんにちは !
                </article>
                <article id=\"matrice\">
                    Bravo, vous êtes maintenant connecté à la matrice. Il ne vous reste plus qu'à participer à un projet (ou continuer de participer à un projet).
                </article>
                
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
        echo "Projet Cerberus/1984 | index";
    }

    public function getTemplateName()
    {
        return "TpfilrougeskillsBundle:skills:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 6,  68 => 29,  63 => 27,  58 => 25,  47 => 17,  36 => 9,  32 => 8,  27 => 6,  20 => 1,);
    }
}
