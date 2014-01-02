<?php

/* CroisiereBundle:Default:TableauEscale.html.twig */
class __TwigTemplate_424e6f2ecc2ac7f49dc97a8f3be2ea941827dcc365732e865e7daa7c15ae398a extends Twig_Template
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
            <h1>Escale</h1></td>
        <td class=\"options-width\">
<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("escale_new", array("id" => $this->getContext($context, "idCroisiere"))), "html", null, true);
        echo "\" title=\"Ajouter\" class=\"icon-1 icon-5\"></a>
        </td>
</table>
<table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" id=\"product-table\">\t
        <th class=\"table-header-repeat line-left minwidth-1\"><a href=\"\">Nomport</a></th>
        <th class=\"table-header-repeat line-left\"><a href=\"\">Datedebutescale</a></th>
        <th class=\"table-header-repeat line-left\"><a href=\"\">heureDebutEscale</a></th>
        <th class=\"table-header-repeat line-left\"><a href=\"\">Datefinescale</a></th>
         <th class=\"table-header-repeat line-left\"><a href=\"\">heureFinEscale</a></th>
     <th class=\"table-header-repeat line-left\"><a href=\"\">description</a></th>
     <th class=\"table-header-repeat line-left\"><a href=\"\">photo</a></th>
     
        <th class=\"table-header-options line-left\"><a href=\"\"> Action</a></th>
        <tr>
                ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entityEscale"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nomPort"), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDebutEscale"), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "heureDebutEscale"), "H:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFinEscale"), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "heureFinEscale"), "H:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "description"), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "photo"), "html", null, true);
            echo "</td>
            
        <td class=\"options-width\">
        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("escale_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\" title=\"Edit\" class=\"icon-1 info-tooltip\"></a>
        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("escale_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\" title=\"show\" class=\"icon-3 info-tooltip\"></a>\t           
        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("escale_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\" title=\"delete\" class=\"icon-2 info-tooltip\"></a>
        </td>
        </tr>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "CroisiereBundle:Default:TableauEscale.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 99,  175 => 97,  150 => 78,  114 => 57,  100 => 36,  148 => 76,  127 => 92,  137 => 68,  126 => 67,  113 => 40,  97 => 50,  81 => 55,  77 => 27,  84 => 31,  58 => 19,  70 => 31,  245 => 131,  231 => 126,  226 => 124,  222 => 123,  218 => 122,  210 => 120,  200 => 110,  192 => 116,  188 => 101,  184 => 100,  167 => 99,  90 => 42,  53 => 30,  134 => 81,  104 => 37,  34 => 5,  65 => 28,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 121,  177 => 65,  169 => 60,  140 => 55,  132 => 69,  128 => 49,  107 => 50,  61 => 27,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 127,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 119,  179 => 51,  159 => 35,  143 => 71,  135 => 69,  119 => 59,  102 => 46,  71 => 30,  67 => 26,  63 => 25,  59 => 7,  94 => 38,  89 => 60,  85 => 32,  75 => 27,  68 => 26,  56 => 23,  87 => 33,  31 => 4,  28 => 3,  38 => 15,  26 => 6,  21 => 2,  201 => 92,  196 => 117,  183 => 82,  171 => 96,  166 => 71,  163 => 62,  158 => 67,  156 => 81,  151 => 86,  142 => 73,  138 => 72,  136 => 56,  121 => 46,  117 => 41,  105 => 55,  91 => 40,  62 => 20,  49 => 17,  25 => 5,  24 => 3,  19 => 1,  93 => 28,  88 => 38,  78 => 30,  46 => 14,  44 => 15,  27 => 4,  79 => 34,  72 => 27,  69 => 24,  47 => 21,  40 => 7,  37 => 6,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 65,  123 => 60,  120 => 58,  115 => 55,  111 => 54,  108 => 38,  101 => 32,  98 => 47,  96 => 36,  83 => 35,  74 => 30,  66 => 34,  55 => 29,  52 => 22,  50 => 21,  43 => 20,  41 => 9,  35 => 6,  32 => 3,  29 => 9,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 36,  154 => 58,  149 => 51,  147 => 85,  144 => 75,  141 => 72,  133 => 55,  130 => 67,  125 => 91,  122 => 62,  116 => 43,  112 => 53,  109 => 51,  106 => 52,  103 => 49,  99 => 45,  95 => 42,  92 => 34,  86 => 32,  82 => 31,  80 => 17,  73 => 35,  64 => 25,  60 => 24,  57 => 23,  54 => 18,  51 => 17,  48 => 16,  45 => 16,  42 => 10,  39 => 10,  36 => 10,  33 => 4,  30 => 7,);
    }
}
