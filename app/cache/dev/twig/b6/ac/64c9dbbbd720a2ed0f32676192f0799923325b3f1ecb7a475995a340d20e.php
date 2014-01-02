<?php

/* CroisiereBundle:Pension:edit.html.twig */
class __TwigTemplate_b6ac64c9dbbbd720a2ed0f32676192f0799923325b3f1ecb7a475995a340d20e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Pension edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "edit_form"), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("pension");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "CroisiereBundle:Pension:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 25,  245 => 131,  231 => 126,  226 => 124,  222 => 123,  218 => 122,  210 => 120,  200 => 118,  192 => 116,  188 => 114,  184 => 113,  167 => 99,  90 => 49,  53 => 26,  134 => 81,  104 => 35,  34 => 4,  65 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 121,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 107,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 127,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 119,  179 => 51,  159 => 35,  143 => 84,  135 => 53,  119 => 42,  102 => 32,  71 => 30,  67 => 23,  63 => 108,  59 => 7,  94 => 28,  89 => 36,  85 => 32,  75 => 17,  68 => 18,  56 => 21,  87 => 21,  31 => 4,  28 => 3,  38 => 6,  26 => 6,  21 => 2,  201 => 92,  196 => 117,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 86,  142 => 59,  138 => 82,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 14,  25 => 3,  24 => 3,  19 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 14,  44 => 15,  27 => 4,  79 => 18,  72 => 11,  69 => 10,  47 => 95,  40 => 7,  37 => 5,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 53,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 32,  74 => 39,  66 => 34,  55 => 15,  52 => 32,  50 => 25,  43 => 14,  41 => 7,  35 => 6,  32 => 9,  29 => 8,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 36,  154 => 58,  149 => 51,  147 => 85,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 62,  109 => 51,  106 => 59,  103 => 32,  99 => 55,  95 => 28,  92 => 21,  86 => 28,  82 => 31,  80 => 17,  73 => 26,  64 => 22,  60 => 6,  57 => 18,  54 => 33,  51 => 17,  48 => 16,  45 => 10,  42 => 10,  39 => 10,  36 => 10,  33 => 4,  30 => 7,);
    }
}
