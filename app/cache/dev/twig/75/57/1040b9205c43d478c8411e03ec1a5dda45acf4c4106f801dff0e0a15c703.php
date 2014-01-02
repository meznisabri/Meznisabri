<?php

/* CroisiereBundle:Agence:index.html.twig */
class __TwigTemplate_75571040b9205c43d478c8411e03ec1a5dda45acf4c4106f801dff0e0a15c703 extends Twig_Template
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

    // line 3
    public function block_stepholder($context, array $blocks = array())
    {
        // line 4
        echo "

    ";
    }

    // line 9
    public function block_form($context, array $blocks = array())
    {
        // line 10
        echo "
    
    \t<table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" id=\"product-table\">\t
        <th class=\"table-header-repeat line-left minwidth-1\"><a href=\"\">Nomagence</a></th>
        <th class=\"table-header-repeat line-left\"><a href=\"\">Description</a></th>
        <th class=\"table-header-options line-left\"><a href=\"\">Action</a></th>
    ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 17
            echo "        <tr>
        <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nomAgence"), "html", null, true);
            echo "</td>
        <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "description"), "html", null, true);
            echo "</td>
        <td class=\"options-width\">
        <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("agence_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\" title=\"Edit\" class=\"icon-1 info-tooltip\"></a>
        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("agence_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\" title=\"show\" class=\"icon-3 info-tooltip\"></a>\t           
        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("agence_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\" title=\"delete\" class=\"icon-2 info-tooltip\"></a>
        </td>
        </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
                                
        </table>
      <!--  start paging..................................................... -->
\t\t\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"paging-table\">
\t\t\t<tr>
\t\t\t<td>
\t\t\t\t<a href=\"\" class=\"page-far-left\"></a>
\t\t\t\t<a href=\"\" class=\"page-left\"></a>
\t\t\t\t<div id=\"page-info\">Page <strong>1</strong> / 15</div>
\t\t\t\t<a href=\"\" class=\"page-right\"></a>
\t\t\t\t<a href=\"\" class=\"page-far-right\"></a>
\t\t\t</td>
\t\t\t<td>
\t\t\t<select  class=\"styledselect_pages\">
\t\t\t\t<option value=\"\">Number of rows</option>
\t\t\t\t<option value=\"\">1</option>
\t\t\t\t<option value=\"\">2</option>
\t\t\t\t<option value=\"\">3</option>
\t\t\t</select>
\t\t\t</td>
\t\t\t</tr>
\t\t\t</table>
\t\t\t<!--  end paging................ -->
    ";
    }

    public function getTemplateName()
    {
        return "CroisiereBundle:Agence:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 88,  170 => 55,  76 => 26,  124 => 47,  110 => 53,  180 => 99,  175 => 97,  150 => 36,  114 => 55,  100 => 41,  148 => 83,  127 => 92,  137 => 68,  126 => 67,  113 => 60,  97 => 50,  81 => 28,  77 => 27,  84 => 28,  58 => 21,  70 => 29,  245 => 131,  231 => 126,  226 => 124,  222 => 123,  218 => 122,  210 => 120,  200 => 110,  192 => 116,  188 => 101,  184 => 100,  167 => 54,  90 => 43,  53 => 17,  134 => 81,  104 => 73,  34 => 5,  65 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 121,  177 => 65,  169 => 60,  140 => 55,  132 => 73,  128 => 49,  107 => 50,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 127,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 119,  179 => 51,  159 => 35,  143 => 71,  135 => 69,  119 => 63,  102 => 49,  71 => 30,  67 => 25,  63 => 21,  59 => 7,  94 => 44,  89 => 45,  85 => 38,  75 => 27,  68 => 25,  56 => 18,  87 => 40,  31 => 4,  28 => 3,  38 => 9,  26 => 6,  21 => 2,  201 => 92,  196 => 117,  183 => 82,  171 => 96,  166 => 71,  163 => 62,  158 => 87,  156 => 81,  151 => 86,  142 => 73,  138 => 72,  136 => 56,  121 => 46,  117 => 41,  105 => 55,  91 => 34,  62 => 15,  49 => 16,  25 => 5,  24 => 3,  19 => 1,  93 => 36,  88 => 32,  78 => 34,  46 => 12,  44 => 12,  27 => 4,  79 => 33,  72 => 29,  69 => 22,  47 => 13,  40 => 7,  37 => 6,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 105,  131 => 65,  123 => 60,  120 => 58,  115 => 55,  111 => 54,  108 => 52,  101 => 38,  98 => 38,  96 => 46,  83 => 54,  74 => 28,  66 => 25,  55 => 21,  52 => 17,  50 => 24,  43 => 8,  41 => 10,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 56,  168 => 72,  164 => 59,  162 => 36,  154 => 86,  149 => 51,  147 => 35,  144 => 75,  141 => 79,  133 => 55,  130 => 67,  125 => 66,  122 => 66,  116 => 43,  112 => 42,  109 => 56,  106 => 41,  103 => 49,  99 => 45,  95 => 67,  92 => 42,  86 => 39,  82 => 38,  80 => 29,  73 => 23,  64 => 24,  60 => 19,  57 => 20,  54 => 19,  51 => 18,  48 => 15,  45 => 14,  42 => 10,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}