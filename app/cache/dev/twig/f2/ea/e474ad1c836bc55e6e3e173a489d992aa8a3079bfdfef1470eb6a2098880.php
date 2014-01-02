<?php

/* CroisiereBundle:Pension:index.html.twig */
class __TwigTemplate_f2eae474ad1c836bc55e6e3e173a489d992aa8a3079bfdfef1470eb6a2098880 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::template.html.twig");

        $this->blocks = array(
            'stepholder' => array($this, 'block_stepholder'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stepholder($context, array $blocks = array())
    {
        // line 3
        echo "

    ";
    }

    // line 8
    public function block_form($context, array $blocks = array())
    {
        // line 9
        echo "    <h1>Pension list</h1>
<table>
<td class=\"options-width\">
<a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("pension_new");
        echo "\" title=\"Ajouter\" class=\"icon-1 icon-5\"></a>
        </td>
    </table>
    <table class=\"records_list\">
   <table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" id=\"product-table\">\t
       <th class=\"table-header-repeat line-left minwidth-1\"><a href=\"\">Id</a></th>
        <th class=\"table-header-repeat line-left\"><a href=\"\">Typepension</a></th>
        <th class=\"table-header-options line-left\"><a href=\"\">Action</a></th>
              
        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pension_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "typePension"), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pension_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pension_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
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
        // line 37
        echo "        </tbody>
    </table>

  
    ";
    }

    public function getTemplateName()
    {
        return "CroisiereBundle:Pension:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 31,  58 => 21,  70 => 25,  245 => 131,  231 => 126,  226 => 124,  222 => 123,  218 => 122,  210 => 120,  200 => 118,  192 => 116,  188 => 114,  184 => 113,  167 => 99,  90 => 49,  53 => 26,  134 => 81,  104 => 35,  34 => 4,  65 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 121,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 107,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 127,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 119,  179 => 51,  159 => 35,  143 => 84,  135 => 53,  119 => 42,  102 => 32,  71 => 24,  67 => 23,  63 => 108,  59 => 7,  94 => 28,  89 => 36,  85 => 32,  75 => 17,  68 => 18,  56 => 21,  87 => 21,  31 => 4,  28 => 3,  38 => 8,  26 => 6,  21 => 2,  201 => 92,  196 => 117,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 86,  142 => 59,  138 => 82,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 22,  49 => 14,  25 => 3,  24 => 3,  19 => 1,  93 => 28,  88 => 6,  78 => 28,  46 => 12,  44 => 15,  27 => 4,  79 => 18,  72 => 11,  69 => 10,  47 => 95,  40 => 7,  37 => 5,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 53,  108 => 36,  101 => 32,  98 => 31,  96 => 37,  83 => 32,  74 => 39,  66 => 34,  55 => 15,  52 => 32,  50 => 25,  43 => 14,  41 => 9,  35 => 6,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 36,  154 => 58,  149 => 51,  147 => 85,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 62,  109 => 51,  106 => 59,  103 => 32,  99 => 55,  95 => 28,  92 => 21,  86 => 28,  82 => 31,  80 => 17,  73 => 26,  64 => 26,  60 => 6,  57 => 18,  54 => 33,  51 => 17,  48 => 16,  45 => 10,  42 => 10,  39 => 10,  36 => 10,  33 => 4,  30 => 7,);
    }
}
