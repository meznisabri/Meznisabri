<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_36e81e1c420346d02b06ae6e8cd089c4b77f09298a08df1f227b1c3e39186a46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\">
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " / ";
        echo ((($this->getAttribute($this->getContext($context, "collector"), "memoryLimit") == (-1))) ? ("&infin;") : (twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memoryLimit") / 1024) / 1024)))));
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 160,  386 => 159,  378 => 157,  371 => 156,  367 => 155,  358 => 151,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  307 => 128,  302 => 125,  296 => 121,  293 => 120,  290 => 119,  281 => 114,  259 => 103,  253 => 100,  155 => 47,  152 => 46,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 158,  373 => 156,  361 => 152,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  325 => 129,  323 => 128,  320 => 127,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  256 => 96,  248 => 97,  233 => 87,  216 => 79,  213 => 78,  207 => 75,  197 => 69,  191 => 67,  181 => 65,  178 => 59,  172 => 57,  363 => 153,  357 => 123,  353 => 149,  351 => 141,  344 => 119,  332 => 116,  327 => 114,  324 => 113,  321 => 135,  318 => 111,  306 => 107,  303 => 122,  300 => 121,  297 => 104,  291 => 102,  288 => 118,  274 => 110,  265 => 105,  263 => 95,  255 => 101,  212 => 78,  202 => 77,  190 => 76,  174 => 65,  161 => 63,  806 => 488,  803 => 487,  792 => 485,  788 => 484,  784 => 482,  771 => 481,  745 => 476,  742 => 475,  723 => 473,  706 => 472,  702 => 470,  698 => 469,  694 => 468,  690 => 467,  686 => 466,  682 => 465,  678 => 464,  675 => 463,  673 => 462,  656 => 461,  645 => 460,  630 => 455,  625 => 453,  621 => 452,  618 => 451,  616 => 450,  602 => 449,  565 => 414,  547 => 411,  530 => 410,  527 => 409,  525 => 408,  520 => 406,  515 => 404,  244 => 136,  165 => 60,  153 => 56,  329 => 131,  315 => 131,  295 => 147,  276 => 111,  262 => 98,  242 => 111,  232 => 88,  223 => 99,  211 => 181,  194 => 68,  185 => 66,  146 => 64,  23 => 4,  129 => 35,  160 => 88,  170 => 56,  76 => 17,  124 => 62,  110 => 22,  180 => 99,  175 => 58,  150 => 55,  114 => 8,  100 => 36,  148 => 83,  127 => 35,  137 => 68,  126 => 34,  113 => 38,  97 => 41,  81 => 23,  77 => 25,  84 => 24,  58 => 14,  70 => 15,  245 => 131,  231 => 83,  226 => 84,  222 => 83,  218 => 122,  210 => 77,  200 => 72,  192 => 116,  188 => 90,  184 => 63,  167 => 54,  90 => 20,  53 => 12,  134 => 39,  104 => 32,  34 => 5,  65 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 150,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 154,  298 => 120,  294 => 90,  285 => 140,  283 => 115,  278 => 106,  268 => 85,  264 => 84,  258 => 94,  252 => 118,  247 => 78,  241 => 93,  229 => 87,  220 => 81,  214 => 121,  177 => 65,  169 => 60,  140 => 55,  132 => 73,  128 => 49,  107 => 50,  61 => 12,  273 => 96,  269 => 107,  254 => 92,  243 => 92,  240 => 86,  238 => 85,  235 => 89,  230 => 82,  227 => 86,  224 => 81,  221 => 77,  219 => 76,  217 => 75,  208 => 76,  204 => 119,  179 => 51,  159 => 68,  143 => 51,  135 => 62,  119 => 40,  102 => 24,  71 => 17,  67 => 14,  63 => 18,  59 => 16,  94 => 21,  89 => 42,  85 => 24,  75 => 19,  68 => 30,  56 => 11,  87 => 41,  31 => 4,  28 => 3,  38 => 7,  26 => 9,  21 => 1,  201 => 92,  196 => 92,  183 => 82,  171 => 96,  166 => 54,  163 => 53,  158 => 80,  156 => 58,  151 => 86,  142 => 63,  138 => 72,  136 => 48,  121 => 55,  117 => 39,  105 => 25,  91 => 33,  62 => 27,  49 => 14,  25 => 35,  24 => 7,  19 => 1,  93 => 36,  88 => 32,  78 => 26,  46 => 13,  44 => 10,  27 => 3,  79 => 18,  72 => 18,  69 => 17,  47 => 11,  40 => 11,  37 => 5,  22 => 1,  246 => 96,  157 => 56,  145 => 52,  139 => 49,  131 => 45,  123 => 42,  120 => 31,  115 => 55,  111 => 7,  108 => 19,  101 => 31,  98 => 30,  96 => 30,  83 => 32,  74 => 27,  66 => 25,  55 => 9,  52 => 12,  50 => 22,  43 => 9,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 75,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 59,  162 => 59,  154 => 66,  149 => 51,  147 => 43,  144 => 42,  141 => 51,  133 => 56,  130 => 46,  125 => 42,  122 => 41,  116 => 39,  112 => 36,  109 => 27,  106 => 51,  103 => 49,  99 => 23,  95 => 67,  92 => 27,  86 => 39,  82 => 19,  80 => 27,  73 => 16,  64 => 17,  60 => 20,  57 => 19,  54 => 33,  51 => 13,  48 => 9,  45 => 10,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
