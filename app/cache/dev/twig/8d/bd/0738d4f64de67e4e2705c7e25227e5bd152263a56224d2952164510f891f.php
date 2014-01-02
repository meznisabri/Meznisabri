<?php

/* CltBundle:Default:search.html.twig */
class __TwigTemplate_8dbd0738d4f64de67e4e2705c7e25227e5bd152263a56224d2952164510f891f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::Clttemplate.html.twig");

        $this->blocks = array(
            'FistList' => array($this, 'block_FistList'),
            'SecondList' => array($this, 'block_SecondList'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Clttemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_FistList($context, array $blocks = array())
    {
        echo " \t
<div class=\"first\">
\t\t\t<h2>Hot Deals</h2>
\t\t\t\t\t<ul>
                                              ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "Croisiereleft"));
        foreach ($context['_seq'] as $context["_key"] => $context["entityCroisiere"]) {
            // line 10
            echo "
\t\t\t                                
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"deals.html\"><img height=\"90\" width=\"140\" src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "entityCroisiere"), "getWebPath")), "html", null, true);
            echo "\" alt=\"\"/></a>
\t\t\t\t\t\t\t<span><a href=\"deals.html\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entityCroisiere"), "destination"), "html", null, true);
            echo "</a></span>
\t\t\t\t\t\t\t<p>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entityCroisiere"), "Description"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<a href=\"deals.html\" class=\"details\">See Details</a>
\t\t\t\t\t\t\t<a href=\"deals.html\" class=\"book\">Book Now!</a>
\t\t\t\t\t\t</li>
                                             

                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entityCroisiere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
\t\t\t\t\t</ul>
\t\t\t\t\t<a href=\"deals.html\">View all</a>
\t\t\t\t</div>
                            ";
    }

    // line 28
    public function block_SecondList($context, array $blocks = array())
    {
        echo " \t
\t\t\t\t<div>
\t\t\t\t\t<h2>Special Offers</h2>
\t\t\t\t\t<ul>
                                              ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "CroisiereRight"));
        foreach ($context['_seq'] as $context["_key"] => $context["entityCroisiere"]) {
            // line 33
            echo "
\t\t\t                                
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"deals.html\"><img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/clt/images/riverside-city.jpg"), "html", null, true);
            echo "\" alt=\"\"/></a>
\t\t\t\t\t\t\t<span><a href=\"deals.html\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entityCroisiere"), "destination"), "html", null, true);
            echo "</a></span>
\t\t\t\t\t\t\t<p>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entityCroisiere"), "Description"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<a href=\"deals.html\" class=\"details\">See Details</a>
\t\t\t\t\t\t\t<a href=\"deals.html\" class=\"book\">Book Now!</a>
\t\t\t\t\t\t</li>
                                             

                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entityCroisiere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
\t\t\t\t\t</ul>
\t\t\t\t\t<a href=\"offers.html\">View all</a>
\t\t\t\t</div>
                                                        ";
    }

    public function getTemplateName()
    {
        return "CltBundle:Default:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 4,  129 => 35,  160 => 88,  170 => 55,  76 => 26,  124 => 62,  110 => 53,  180 => 99,  175 => 97,  150 => 36,  114 => 8,  100 => 38,  148 => 83,  127 => 92,  137 => 68,  126 => 34,  113 => 45,  97 => 47,  81 => 37,  77 => 27,  84 => 28,  58 => 17,  70 => 23,  245 => 131,  231 => 126,  226 => 124,  222 => 123,  218 => 122,  210 => 120,  200 => 110,  192 => 116,  188 => 101,  184 => 100,  167 => 54,  90 => 43,  53 => 19,  134 => 81,  104 => 36,  34 => 7,  65 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 121,  177 => 65,  169 => 60,  140 => 55,  132 => 73,  128 => 49,  107 => 50,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 127,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 119,  179 => 51,  159 => 35,  143 => 71,  135 => 69,  119 => 9,  102 => 34,  71 => 30,  67 => 22,  63 => 19,  59 => 20,  94 => 44,  89 => 42,  85 => 38,  75 => 28,  68 => 25,  56 => 21,  87 => 33,  31 => 4,  28 => 4,  38 => 8,  26 => 12,  21 => 1,  201 => 92,  196 => 117,  183 => 82,  171 => 96,  166 => 71,  163 => 62,  158 => 87,  156 => 81,  151 => 86,  142 => 73,  138 => 72,  136 => 56,  121 => 46,  117 => 58,  105 => 52,  91 => 34,  62 => 15,  49 => 14,  25 => 5,  24 => 7,  19 => 2,  93 => 36,  88 => 32,  78 => 27,  46 => 13,  44 => 12,  27 => 4,  79 => 33,  72 => 29,  69 => 25,  47 => 17,  40 => 15,  37 => 9,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 105,  131 => 65,  123 => 60,  120 => 58,  115 => 55,  111 => 7,  108 => 52,  101 => 38,  98 => 32,  96 => 37,  83 => 32,  74 => 26,  66 => 25,  55 => 21,  52 => 17,  50 => 14,  43 => 11,  41 => 10,  35 => 8,  32 => 7,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 56,  168 => 72,  164 => 59,  162 => 36,  154 => 86,  149 => 51,  147 => 35,  144 => 75,  141 => 79,  133 => 55,  130 => 67,  125 => 66,  122 => 66,  116 => 43,  112 => 42,  109 => 56,  106 => 41,  103 => 49,  99 => 40,  95 => 67,  92 => 36,  86 => 39,  82 => 38,  80 => 29,  73 => 26,  64 => 24,  60 => 22,  57 => 21,  54 => 15,  51 => 18,  48 => 12,  45 => 14,  42 => 9,  39 => 7,  36 => 7,  33 => 6,  30 => 2,);
    }
}
