<?php

/* CroisiereBundle:Bateau:index.html.twig */
class __TwigTemplate_da307d4f3f9d3496cf0bd3681568073f91df8b2c78023f8f53f712a204981397 extends Twig_Template
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
        echo "    <h1>Bateau list</h1>
\t<table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" id=\"product-table\">\t
      

                <th class=\"table-header-repeat line-left\">Id</th>
                <th class=\"table-header-repeat line-left\"><a href=\"\"> Nombateau</a></th>
                <th class=\"table-header-repeat line-left\"><a href=\"\">Categorie</a></th>
                <th class=\"table-header-repeat line-left\"><a href=\"\">Typebateau</a></th>
                <th class=\"table-header-repeat line-left\"><a href=\"\">Dateenservie</a></th>
                <th class=\"table-header-repeat line-left\"><a href=\"\">Nombrepassange</a></th>
                <th class=\"table-header-repeat line-left\"><a href=\"\">Tonnage</a></th>
                <th class=\"table-header-repeat line-left\"><a href=\"\">Longeur</a></th>
                <th class=\"table-header-repeat line-left\"><a href=\"\">Largeur</a></th>
                <th class=\"table-header-repeat line-left\"><a href=\"\">Vitesse</a></th>
                <th class=\"table-header-options line-left\"><a href=\"\">Action</a></th>

        
       
        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 28
            echo "            <tr>
                <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bateau_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nomBateau"), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "categorie"), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "typeBateau"), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            if ($this->getAttribute($this->getContext($context, "entity"), "dateEnservie")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateEnservie"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nombrePassange"), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "tonnage"), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "longeur"), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "largeur"), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "vitesse"), "html", null, true);
            echo "</td>
                <td class=\"options-width\">                  
                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bateau_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"title=\"Edit\" class=\"icon-1 info-tooltip\"></a>
                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bateau_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"title=\"delete\" class=\"icon-2 info-tooltip\"></a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    </table>

      
    ";
    }

    public function getTemplateName()
    {
        return "CroisiereBundle:Bateau:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 36,  148 => 76,  127 => 45,  137 => 68,  126 => 67,  113 => 40,  97 => 50,  81 => 34,  77 => 27,  84 => 31,  58 => 21,  70 => 28,  245 => 131,  231 => 126,  226 => 124,  222 => 123,  218 => 122,  210 => 120,  200 => 118,  192 => 116,  188 => 114,  184 => 113,  167 => 99,  90 => 49,  53 => 18,  134 => 81,  104 => 37,  34 => 5,  65 => 28,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 121,  177 => 65,  169 => 60,  140 => 55,  132 => 69,  128 => 49,  107 => 50,  61 => 27,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 127,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 119,  179 => 51,  159 => 35,  143 => 71,  135 => 69,  119 => 59,  102 => 46,  71 => 29,  67 => 26,  63 => 24,  59 => 7,  94 => 28,  89 => 45,  85 => 32,  75 => 17,  68 => 29,  56 => 24,  87 => 29,  31 => 4,  28 => 3,  38 => 8,  26 => 6,  21 => 2,  201 => 92,  196 => 117,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 81,  151 => 86,  142 => 73,  138 => 71,  136 => 56,  121 => 46,  117 => 41,  105 => 55,  91 => 40,  62 => 23,  49 => 10,  25 => 3,  24 => 3,  19 => 1,  93 => 28,  88 => 38,  78 => 31,  46 => 14,  44 => 15,  27 => 4,  79 => 34,  72 => 11,  69 => 10,  47 => 95,  40 => 7,  37 => 6,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 65,  123 => 60,  120 => 58,  115 => 55,  111 => 54,  108 => 38,  101 => 32,  98 => 34,  96 => 35,  83 => 35,  74 => 30,  66 => 34,  55 => 19,  52 => 32,  50 => 21,  43 => 8,  41 => 9,  35 => 6,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 36,  154 => 58,  149 => 51,  147 => 85,  144 => 49,  141 => 72,  133 => 55,  130 => 68,  125 => 44,  122 => 43,  116 => 43,  112 => 53,  109 => 51,  106 => 59,  103 => 49,  99 => 45,  95 => 42,  92 => 34,  86 => 33,  82 => 32,  80 => 17,  73 => 35,  64 => 26,  60 => 22,  57 => 23,  54 => 18,  51 => 17,  48 => 16,  45 => 14,  42 => 10,  39 => 10,  36 => 10,  33 => 4,  30 => 7,);
    }
}
