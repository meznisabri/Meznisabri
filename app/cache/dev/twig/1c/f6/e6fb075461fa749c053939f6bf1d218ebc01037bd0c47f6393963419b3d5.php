<?php

/* CroisiereBundle:Default:TableauTypeCabine.html.twig */
class __TwigTemplate_1cf6e6fb075461fa749c053939f6bf1d218ebc01037bd0c47f6393963419b3d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

<table>
    <tr><td>
          <h1>Type Cabine</h1></td>
        <td class=\"options-width\">
        </td>
</table>
<table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" id=\"product-table\">\t
        <th class=\"table-header-repeat line-left minwidth-1\"><a href=\"\">nature</a></th>
        <th class=\"table-header-repeat line-left\"><a href=\"\">nbrPlace</a></th>
                <th class=\"table-header-repeat line-left\"><a href=\"\">description</a></th>
        <th class=\"table-header-repeat line-left\"><a href=\"\">Affichable</a></th>

                    

        <th class=\"table-header-options line-left\"><a href=\"\"> Action</a></th>
            ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "BateauTypeCabine"));
        foreach ($context['_seq'] as $context["_key"] => $context["BTypeCabine"]) {
            // line 19
            echo "            <tr>
<td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bateautypecabine_show", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "BTypeCabine"), "TypeCabine"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "BTypeCabine"), "TypeCabine"), "nature"), "html", null, true);
            echo "</a></td>
<td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bateautypecabine_show", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "BTypeCabine"), "TypeCabine"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "BTypeCabine"), "TypeCabine"), "nbrPlace"), "html", null, true);
            echo "</a></td>
<td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bateautypecabine_show", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "BTypeCabine"), "TypeCabine"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "BTypeCabine"), "TypeCabine"), "description"), "html", null, true);
            echo "</a></td>
      <td>
";
            // line 24
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "BTypeCabine"), "TypeCabine"), "Affichable") == 1)) {
                // line 25
                echo "True               
";
            } else {
                // line 27
                echo "False
 ";
            }
            // line 28
            echo "    
      </td>
                <td>
                
                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bateautypecabine_show", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "BTypeCabine"), "TypeCabine"), "id"))), "html", null, true);
            echo "\"title=\"Edit\" class=\"icon-1 info-tooltip\"></a>
                    
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bateautypecabine_edit", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "BTypeCabine"), "TypeCabine"), "id"))), "html", null, true);
            echo "\"title=\"Edit\" class=\"icon-2 info-tooltip\"></a>
                    
         
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['BTypeCabine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
</table>";
    }

    public function getTemplateName()
    {
        return "CroisiereBundle:Default:TableauTypeCabine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 30,  124 => 47,  110 => 42,  180 => 99,  175 => 97,  150 => 78,  114 => 43,  100 => 36,  148 => 76,  127 => 92,  137 => 68,  126 => 67,  113 => 40,  97 => 40,  81 => 55,  77 => 27,  84 => 33,  58 => 26,  70 => 27,  245 => 131,  231 => 126,  226 => 124,  222 => 123,  218 => 122,  210 => 120,  200 => 110,  192 => 116,  188 => 101,  184 => 100,  167 => 99,  90 => 34,  53 => 30,  134 => 81,  104 => 37,  34 => 11,  65 => 26,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 121,  177 => 65,  169 => 60,  140 => 55,  132 => 69,  128 => 49,  107 => 50,  61 => 25,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 127,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 119,  179 => 51,  159 => 35,  143 => 71,  135 => 69,  119 => 59,  102 => 38,  71 => 27,  67 => 26,  63 => 25,  59 => 7,  94 => 36,  89 => 36,  85 => 34,  75 => 28,  68 => 26,  56 => 21,  87 => 33,  31 => 4,  28 => 3,  38 => 18,  26 => 6,  21 => 2,  201 => 92,  196 => 117,  183 => 82,  171 => 96,  166 => 71,  163 => 62,  158 => 67,  156 => 81,  151 => 86,  142 => 73,  138 => 72,  136 => 56,  121 => 46,  117 => 41,  105 => 55,  91 => 34,  62 => 20,  49 => 23,  25 => 5,  24 => 3,  19 => 1,  93 => 37,  88 => 38,  78 => 30,  46 => 17,  44 => 21,  27 => 4,  79 => 34,  72 => 27,  69 => 27,  47 => 21,  40 => 7,  37 => 14,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 65,  123 => 60,  120 => 58,  115 => 55,  111 => 54,  108 => 38,  101 => 38,  98 => 37,  96 => 36,  83 => 35,  74 => 28,  66 => 25,  55 => 29,  52 => 20,  50 => 24,  43 => 20,  41 => 15,  35 => 6,  32 => 3,  29 => 9,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 36,  154 => 58,  149 => 51,  147 => 85,  144 => 75,  141 => 72,  133 => 55,  130 => 67,  125 => 91,  122 => 62,  116 => 43,  112 => 42,  109 => 51,  106 => 41,  103 => 49,  99 => 45,  95 => 42,  92 => 34,  86 => 33,  82 => 31,  80 => 32,  73 => 35,  64 => 24,  60 => 22,  57 => 22,  54 => 25,  51 => 21,  48 => 22,  45 => 20,  42 => 19,  39 => 10,  36 => 10,  33 => 13,  30 => 10,);
    }
}