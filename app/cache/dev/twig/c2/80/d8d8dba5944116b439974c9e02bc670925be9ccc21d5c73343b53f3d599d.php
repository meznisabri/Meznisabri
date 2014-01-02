<?php

/* CroisiereBundle:imageCros:index.html.twig */
class __TwigTemplate_c280d8d8dba5944116b439974c9e02bc670925be9ccc21d5c73343b53f3d599d extends Twig_Template
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
        echo "<h1>imageCros list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Url</th>
                <th>Alt</th>
                <th>File</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imagecros_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "url"), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "alt"), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "file"), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imagecros_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imagecros_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("imagecros_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "CroisiereBundle:imageCros:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 88,  170 => 55,  76 => 26,  124 => 62,  110 => 53,  180 => 99,  175 => 97,  150 => 36,  114 => 55,  100 => 41,  148 => 83,  127 => 92,  137 => 68,  126 => 67,  113 => 60,  97 => 47,  81 => 37,  77 => 27,  84 => 28,  58 => 21,  70 => 29,  245 => 131,  231 => 126,  226 => 124,  222 => 123,  218 => 122,  210 => 120,  200 => 110,  192 => 116,  188 => 101,  184 => 100,  167 => 54,  90 => 43,  53 => 19,  134 => 81,  104 => 73,  34 => 5,  65 => 27,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 121,  177 => 65,  169 => 60,  140 => 55,  132 => 73,  128 => 49,  107 => 50,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 127,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 119,  179 => 51,  159 => 35,  143 => 71,  135 => 69,  119 => 63,  102 => 49,  71 => 30,  67 => 22,  63 => 21,  59 => 20,  94 => 44,  89 => 42,  85 => 38,  75 => 27,  68 => 25,  56 => 21,  87 => 40,  31 => 4,  28 => 3,  38 => 9,  26 => 6,  21 => 2,  201 => 92,  196 => 117,  183 => 82,  171 => 96,  166 => 71,  163 => 62,  158 => 87,  156 => 81,  151 => 86,  142 => 73,  138 => 72,  136 => 56,  121 => 46,  117 => 58,  105 => 52,  91 => 34,  62 => 15,  49 => 14,  25 => 5,  24 => 3,  19 => 1,  93 => 36,  88 => 32,  78 => 34,  46 => 17,  44 => 12,  27 => 4,  79 => 33,  72 => 29,  69 => 22,  47 => 13,  40 => 7,  37 => 6,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 105,  131 => 65,  123 => 60,  120 => 58,  115 => 55,  111 => 55,  108 => 52,  101 => 38,  98 => 38,  96 => 46,  83 => 54,  74 => 26,  66 => 25,  55 => 21,  52 => 17,  50 => 18,  43 => 8,  41 => 10,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 56,  168 => 72,  164 => 59,  162 => 36,  154 => 86,  149 => 51,  147 => 35,  144 => 75,  141 => 79,  133 => 55,  130 => 67,  125 => 66,  122 => 66,  116 => 43,  112 => 42,  109 => 56,  106 => 41,  103 => 49,  99 => 40,  95 => 67,  92 => 35,  86 => 39,  82 => 38,  80 => 29,  73 => 32,  64 => 24,  60 => 22,  57 => 20,  54 => 19,  51 => 18,  48 => 15,  45 => 14,  42 => 10,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
