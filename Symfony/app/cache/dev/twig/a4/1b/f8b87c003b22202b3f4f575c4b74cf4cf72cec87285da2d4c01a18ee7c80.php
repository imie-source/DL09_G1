<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_a41bf8b87c003b22202b3f4f575c4b74cf4cf72cec87285da2d4c01a18ee7c80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_contact");
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 39,  104 => 6,  165 => 6,  148 => 68,  146 => 67,  134 => 62,  124 => 57,  113 => 54,  97 => 50,  90 => 48,  126 => 58,  58 => 25,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 65,  132 => 51,  128 => 49,  107 => 51,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 6,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 28,  63 => 27,  59 => 14,  38 => 6,  94 => 49,  89 => 20,  85 => 25,  75 => 17,  68 => 29,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 46,  78 => 21,  46 => 7,  27 => 6,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 6,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 64,  136 => 56,  121 => 46,  117 => 55,  105 => 6,  91 => 27,  62 => 26,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 30,  69 => 25,  47 => 17,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 52,  108 => 36,  101 => 51,  98 => 6,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 10,  50 => 10,  43 => 7,  41 => 11,  35 => 5,  32 => 8,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 70,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 60,  125 => 44,  122 => 43,  116 => 54,  112 => 42,  109 => 53,  106 => 36,  103 => 50,  99 => 49,  95 => 48,  92 => 47,  86 => 28,  82 => 22,  80 => 38,  73 => 19,  64 => 17,  60 => 6,  57 => 12,  54 => 10,  51 => 18,  48 => 9,  45 => 17,  42 => 7,  39 => 9,  36 => 9,  33 => 4,  30 => 7,);
    }
}
