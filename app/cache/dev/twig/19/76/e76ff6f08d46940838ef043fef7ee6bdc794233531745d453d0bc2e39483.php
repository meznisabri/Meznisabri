<?php

/* CroisiereBundle:BateauTypeCabine:new.html.twig */
class __TwigTemplate_1976e76ff6f08d46940838ef043fef7ee6bdc794233531745d453d0bc2e39483 extends Twig_Template
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

    // line 8
    public function block_stepholder($context, array $blocks = array())
    {
        // line 9
        echo "<div id=\"step-holder\">
\t\t\t<div class=\"step-no-off\">1</div>
\t\t\t<div class=\"step-light-left\"><a href=\"\">Add Agence </a></div>
\t\t\t<div class=\"step-light-right\">&nbsp;</div>
\t\t\t<div class=\"step-no-off\">2</div>
\t\t\t<div class=\"step-light-left\">Add Bateau</div>
\t\t\t<div class=\"step-light-right\">&nbsp;</div>
\t\t\t<div class=\"step-no\">3</div>
\t\t\t<div class=\"step-dark-left\">Add Type Cabine</div>
                        <div class=\"step-dark-right\">&nbsp;</div>
                        <div class=\"step-no-off\">4</div>
\t\t\t<div class=\"step-light-left\">Add Croisiere</div>
\t\t\t<div class=\"clear\"></div>
\t\t</div>
";
    }

    // line 25
    public function block_form($context, array $blocks = array())
    {
        // line 26
        echo "

";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
        echo "

        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\"  id=\"id-form\">
        
         <tr>
        <th valign=\"top\"> Cabine </th>
        <td>   ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form2"), "Cabine"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
        <td></td>
        </tr>
        <tr>
        <th valign=\"top\"> nature Chambre </th>
        <td>   ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form2"), "nature"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
        <td></td>
        </tr>
        <tr>
        <th valign=\"top\"> nbrPlace Chambre </th>
        <td>   ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form2"), "nbrPlace"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
        <td></td>
        </tr>
        <tr>
        <th valign=\"top\"> description </th>
        <td>   ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form2"), "description"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
        <td></td>
        </tr>
          <tr>
      <tr>
        <th valign=\"top\"> Photo </th>
        <td>   ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form3"), "Photo"), 'widget', array("attr" => array("class" => "file_1")));
        echo "</td>
      
        <td></td>
        </tr>
        <tr><td></td><td>     ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "submit"), 'widget', array("attr" => array("class" => "form-submit")));
        echo "
      </td></tr>
        </table>
     ";
        // line 62
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "











<h1>Agence</h1>

<table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" id=\"product-table\">\t
        <th class=\"table-header-repeat line-left minwidth-1\"><a href=\"\">Nomagence</a></th>
        <th class=\"table-header-repeat line-left\"><a href=\"\">Description</a></th>
        <th class=\"table-header-options line-left\"><a href=\"\"> Action</a></th>
        <tr>
        <td>";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity2"), "nomAgence"), "html", null, true);
        echo "</td>
        <td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity2"), "description"), "html", null, true);
        echo "</td>
        <td class=\"options-width\">
        <a href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("agence_edit", array("id" => $this->getAttribute($this->getContext($context, "entity2"), "id"))), "html", null, true);
        echo "\" title=\"Edit\" class=\"icon-1 info-tooltip\"></a>
        <a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("agence_show", array("id" => $this->getAttribute($this->getContext($context, "entity2"), "id"))), "html", null, true);
        echo "\" title=\"show\" class=\"icon-3 info-tooltip\"></a>\t           
        <a href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("agence_delete", array("id" => $this->getAttribute($this->getContext($context, "entity2"), "id"))), "html", null, true);
        echo "\" title=\"delete\" class=\"icon-2 info-tooltip\"></a>
        </td>
        </tr>                                
</table>





<table>
    <tr><td>
            <h1>Bateau</h1></td>
        <td class=\"options-width\">
<a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bateau_new", array("id" => $this->getAttribute($this->getContext($context, "entity2"), "id"))), "html", null, true);
        echo "\" title=\"Ajouter\" class=\"icon-1 icon-5\"></a>
        </td>
</table>
<table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" id=\"product-table\">\t
        <th class=\"table-header-repeat line-left\"><a href=\"\"> Nom</a></th>
                <th class=\"table-header-repeat line-left\"><a href=\"\">Categorie</a></th>
                <th class=\"table-header-repeat line-left\"><a href=\"\">Typebateau</a></th>
                <th class=\"table-header-repeat line-left\"><a href=\"\">Date</a></th>
                <th class=\"table-header-repeat line-left\"><a href=\"\">Nbrpassange</a></th>
                <th class=\"table-header-repeat line-left\"><a href=\"\">Tonnage</a></th>
                <th class=\"table-header-repeat line-left\"><a href=\"\">Longeur</a></th>
                <th class=\"table-header-repeat line-left\"><a href=\"\">Largeur</a></th>
                <th class=\"table-header-repeat line-left\"><a href=\"\">Vitesse</a></th>
                <th class=\"table-header-options line-left\"><a href=\"\">Action</a></th>
                 ";
        // line 113
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entityBateau"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity2"]) {
            // line 114
            echo "                <tr>
                    
                <td>";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity2"), "nomBateau"), "html", null, true);
            echo "</td>
                <td>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity2"), "categorie"), "html", null, true);
            echo "</td>
                <td>";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity2"), "typeBateau"), "html", null, true);
            echo "</td>
                <td>";
            // line 119
            if ($this->getAttribute($this->getContext($context, "entity2"), "dateEnservie")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity2"), "dateEnservie"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity2"), "nombrePassange"), "html", null, true);
            echo "</td>
                <td>";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity2"), "tonnage"), "html", null, true);
            echo "</td>
                <td>";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity2"), "longeur"), "html", null, true);
            echo "</td>
                <td>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity2"), "largeur"), "html", null, true);
            echo "</td>
                <td>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity2"), "vitesse"), "html", null, true);
            echo "</td>
                <td class=\"options-width\">                  
                    <a href=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bateau_edit", array("id" => $this->getAttribute($this->getContext($context, "entity2"), "id"))), "html", null, true);
            echo "\"title=\"Edit\" class=\"icon-1 info-tooltip\"></a>
                    <a href=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bateau_delete", array("id" => $this->getAttribute($this->getContext($context, "entity2"), "id"))), "html", null, true);
            echo "\"title=\"delete\" class=\"icon-2 info-tooltip\"></a>
                </td>    
                </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "
        </table>



";
    }

    public function getTemplateName()
    {
        return "CroisiereBundle:BateauTypeCabine:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 131,  231 => 126,  226 => 124,  222 => 123,  218 => 122,  210 => 120,  200 => 118,  192 => 116,  188 => 114,  184 => 113,  167 => 99,  90 => 49,  53 => 26,  134 => 81,  104 => 35,  34 => 4,  65 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 121,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 107,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 127,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 119,  179 => 51,  159 => 35,  143 => 84,  135 => 53,  119 => 42,  102 => 32,  71 => 17,  67 => 23,  63 => 108,  59 => 7,  94 => 28,  89 => 20,  85 => 32,  75 => 17,  68 => 18,  56 => 17,  87 => 21,  31 => 3,  28 => 3,  38 => 6,  26 => 6,  21 => 2,  201 => 92,  196 => 117,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 86,  142 => 59,  138 => 82,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 17,  25 => 3,  24 => 3,  19 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 17,  44 => 12,  27 => 4,  79 => 18,  72 => 11,  69 => 10,  47 => 95,  40 => 7,  37 => 5,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 53,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 32,  74 => 39,  66 => 34,  55 => 15,  52 => 32,  50 => 25,  43 => 14,  41 => 7,  35 => 6,  32 => 9,  29 => 8,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 36,  154 => 58,  149 => 51,  147 => 85,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 62,  109 => 51,  106 => 59,  103 => 32,  99 => 55,  95 => 28,  92 => 21,  86 => 28,  82 => 44,  80 => 17,  73 => 26,  64 => 26,  60 => 6,  57 => 28,  54 => 33,  51 => 14,  48 => 30,  45 => 10,  42 => 10,  39 => 6,  36 => 10,  33 => 4,  30 => 7,);
    }
}
