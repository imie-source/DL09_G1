<?php

/* TpfilrougeskillsBundle:Skills:vue.html.twig */
class __TwigTemplate_ddc3dc03c8d2aff08159a6e0a85f0c1e7a0608a2dbcd3c8a3e4008b82a00a647 extends Twig_Template
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
                <h3>Formulaire User</h3>
                <section>
                    <form method=\"post\" ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                        <input type=\"submit\" value=\"Enregistrer\"/>
                        <input type=\"reset\" value=\"Annuler\"/>
                    </form>
                </section>
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
        return "TpfilrougeskillsBundle:Skills:vue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 39,  104 => 6,  165 => 6,  148 => 68,  146 => 67,  134 => 62,  124 => 57,  113 => 54,  97 => 50,  90 => 48,  126 => 58,  58 => 25,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 65,  132 => 51,  128 => 49,  107 => 51,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 6,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 28,  63 => 27,  59 => 14,  38 => 6,  94 => 49,  89 => 20,  85 => 25,  75 => 17,  68 => 29,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 46,  78 => 21,  46 => 7,  27 => 6,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 6,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 64,  136 => 56,  121 => 46,  117 => 55,  105 => 6,  91 => 27,  62 => 26,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 30,  69 => 25,  47 => 17,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 52,  108 => 36,  101 => 51,  98 => 6,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 11,  35 => 5,  32 => 8,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 70,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 60,  125 => 44,  122 => 43,  116 => 54,  112 => 42,  109 => 53,  106 => 36,  103 => 50,  99 => 49,  95 => 48,  92 => 47,  86 => 28,  82 => 22,  80 => 38,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 18,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 9,  33 => 4,  30 => 7,);
    }
}
