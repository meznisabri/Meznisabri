<?php

/* AcmeDemoBundle::layout.html.twig */
class __TwigTemplate_6dfb9a9132ccb890cb895a0c2da310ec9a84d1fd89829096c5aad0fef2fb6c17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"flash-message\">
            <em>Notice</em>: ";
            // line 13
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('content_header', $context, $blocks);
        // line 26
        echo "
    <div class=\"block\">
        ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "    </div>

    ";
        // line 31
        if (array_key_exists("code", $context)) {
            // line 32
            echo "        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">";
            // line 34
            echo $this->getContext($context, "code");
            echo "</div>
        </div>
    ";
        }
    }

    // line 17
    public function block_content_header($context, array $blocks = array())
    {
        // line 18
        echo "        <ul id=\"menu\">
            ";
        // line 19
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 22
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
    }

    // line 19
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 20
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\">Demo Home</a></li>
            ";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 190,  315 => 161,  295 => 147,  276 => 135,  262 => 125,  242 => 111,  232 => 104,  223 => 99,  211 => 181,  194 => 99,  185 => 94,  146 => 64,  23 => 4,  129 => 35,  160 => 88,  170 => 55,  76 => 17,  124 => 62,  110 => 22,  180 => 99,  175 => 97,  150 => 65,  114 => 8,  100 => 38,  148 => 83,  127 => 28,  137 => 68,  126 => 34,  113 => 45,  97 => 47,  81 => 37,  77 => 27,  84 => 29,  58 => 6,  70 => 23,  245 => 131,  231 => 126,  226 => 124,  222 => 123,  218 => 122,  210 => 120,  200 => 110,  192 => 116,  188 => 95,  184 => 100,  167 => 54,  90 => 32,  53 => 10,  134 => 81,  104 => 36,  34 => 3,  65 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 154,  298 => 91,  294 => 90,  285 => 140,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 118,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 121,  177 => 65,  169 => 60,  140 => 55,  132 => 73,  128 => 49,  107 => 50,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 127,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 119,  179 => 51,  159 => 68,  143 => 71,  135 => 69,  119 => 9,  102 => 17,  71 => 17,  67 => 22,  63 => 19,  59 => 7,  94 => 34,  89 => 42,  85 => 38,  75 => 28,  68 => 18,  56 => 11,  87 => 33,  31 => 3,  28 => 2,  38 => 8,  26 => 12,  21 => 1,  201 => 92,  196 => 135,  183 => 82,  171 => 96,  166 => 71,  163 => 62,  158 => 87,  156 => 81,  151 => 86,  142 => 63,  138 => 72,  136 => 56,  121 => 55,  117 => 19,  105 => 18,  91 => 34,  62 => 15,  49 => 14,  25 => 5,  24 => 7,  19 => 2,  93 => 36,  88 => 31,  78 => 26,  46 => 17,  44 => 12,  27 => 4,  79 => 33,  72 => 29,  69 => 25,  47 => 8,  40 => 5,  37 => 4,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 105,  131 => 65,  123 => 90,  120 => 20,  115 => 55,  111 => 7,  108 => 19,  101 => 38,  98 => 32,  96 => 37,  83 => 32,  74 => 26,  66 => 25,  55 => 5,  52 => 32,  50 => 218,  43 => 10,  41 => 5,  35 => 8,  32 => 8,  29 => 5,  209 => 82,  203 => 78,  199 => 171,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 56,  168 => 72,  164 => 59,  162 => 36,  154 => 66,  149 => 51,  147 => 35,  144 => 75,  141 => 79,  133 => 56,  130 => 55,  125 => 66,  122 => 66,  116 => 43,  112 => 49,  109 => 56,  106 => 41,  103 => 49,  99 => 40,  95 => 67,  92 => 35,  86 => 39,  82 => 28,  80 => 29,  73 => 16,  64 => 13,  60 => 22,  57 => 21,  54 => 33,  51 => 12,  48 => 30,  45 => 189,  42 => 94,  39 => 9,  36 => 4,  33 => 3,  30 => 7,);
    }
}
