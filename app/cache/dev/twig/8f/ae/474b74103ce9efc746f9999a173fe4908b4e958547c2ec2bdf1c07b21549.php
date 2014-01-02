<?php

/* CroisiereBundle:Bateau:new.html.twig */
class __TwigTemplate_8fae474b74103ce9efc746f9999a173fe4908b4e958547c2ec2bdf1c07b21549 extends Twig_Template
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
        echo "<div id=\"step-holder\">
\t\t\t<div class=\"step-no-off\">1</div>
\t\t\t<div class=\"step-light-left\"><a href=\"\">Add Agence </a></div>
\t\t\t<div class=\"step-light-right\">&nbsp;</div>
\t\t\t<div class=\"step-no\">2</div>
\t\t\t<div class=\"step-dark-left\">Add Bateau</div>
                        <div class=\"step-dark-right\">&nbsp;</div>
\t\t\t<div class=\"step-no-off\">3</div>
\t\t\t<div class=\"step-light-left\">Add Cabine</div>
                        <div class=\"step-light-right\">&nbsp;</div>
                        <div class=\"step-no-off\">4</div>
\t\t\t<div class=\"step-light-left\">Add Croisiere</div>
                        <div class=\"step-light-round\">&nbsp;</div>                      

\t\t\t<div class=\"clear\"></div>
\t\t</div>
";
    }

    // line 21
    public function block_form($context, array $blocks = array())
    {
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
        echo "
        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\"  id=\"id-form\">
        <tr>
        <th valign=\"top\"> nomBateau </th>
        <td>   ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nomBateau"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
        <td></td>
        </tr>
        <tr>
        <th valign=\"top\"> categorie </th>
        <td>   ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "categorie"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
        <td></td>
        </tr>
        <tr>
        <th valign=\"top\"> typeBateau </th>
        <td>   ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "typeBateau"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
        <td></td>
        </tr>
        <tr>
        <th valign=\"top\"> dateEnservie </th>
        <td> ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateEnservie"), 'widget', array("attr" => array("class" => "inp-form")));
        echo " </td>
        <td><a href=\"\"id=\"date-pick\"><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/croisiere/images/forms/icon_calendar.jpg"), "html", null, true);
        echo "\"alt=\"\" /></a></td>
        <td></td>
        </tr>
        <tr>
        <th valign=\"top\"> nombrePassange </th>
        <td>   ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nombrePassange"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
        <td></td>
        </tr>
        <tr>
        <th valign=\"top\"> tonnage </th>
        <td>   ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "tonnage"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
        <td></td>
        </tr>
        <tr>
        <th valign=\"top\"> longeur </th>
        <td>   ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "longeur"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
        <td></td>
        </tr>
          <tr>
        <th valign=\"top\"> largeur </th>
        <td>   ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "largeur"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
        <td></td>
        </tr>
          <tr>
        <th valign=\"top\"> vitesse </th>
        <td>   ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "vitesse"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
        <td></td>
        </tr>   
          <tr>
        <th valign=\"top\"> Affichable </th>
        <td>   ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "Affichable"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
        <td></td>
        </tr>   
  <tr><td></td><td>     ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "submit"), 'widget', array("attr" => array("class" => "form-submit")));
        echo "
      </td></tr>
        </table>
        ";
        // line 78
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "











<h1>Agence</h1>
<table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" id=\"product-table\">\t
        <th class=\"table-header-repeat line-left minwidth-1\"><a href=\"\">Nomagence</a></th>
        <th class=\"table-header-repeat line-left\"><a href=\"\">Description</a></th>
        <th class=\"table-header-options line-left\"><a href=\"\"> Action</a></th>
        <tr>
        <td>";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity2"), "nomAgence"), "html", null, true);
        echo "</td>
        <td>";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity2"), "description"), "html", null, true);
        echo "</td>
        <td class=\"options-width\">
        <a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("agence_edit", array("id" => $this->getAttribute($this->getContext($context, "entity2"), "id"))), "html", null, true);
        echo "\" title=\"Edit\" class=\"icon-1 info-tooltip\"></a>
        <a href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("agence_show", array("id" => $this->getAttribute($this->getContext($context, "entity2"), "id"))), "html", null, true);
        echo "\" title=\"show\" class=\"icon-3 info-tooltip\"></a>\t           
        <a href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("agence_delete", array("id" => $this->getAttribute($this->getContext($context, "entity2"), "id"))), "html", null, true);
        echo "\" title=\"delete\" class=\"icon-2 info-tooltip\"></a>
        </td>
        </tr>                                
        </table>



        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("bateau");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "CroisiereBundle:Bateau:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 99,  175 => 97,  150 => 78,  114 => 57,  100 => 36,  148 => 76,  127 => 45,  137 => 68,  126 => 67,  113 => 40,  97 => 50,  81 => 34,  77 => 27,  84 => 31,  58 => 21,  70 => 31,  245 => 131,  231 => 126,  226 => 124,  222 => 123,  218 => 122,  210 => 120,  200 => 110,  192 => 116,  188 => 101,  184 => 100,  167 => 99,  90 => 42,  53 => 18,  134 => 81,  104 => 37,  34 => 5,  65 => 28,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 121,  177 => 65,  169 => 60,  140 => 55,  132 => 69,  128 => 49,  107 => 50,  61 => 27,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 127,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 119,  179 => 51,  159 => 35,  143 => 71,  135 => 69,  119 => 59,  102 => 46,  71 => 29,  67 => 26,  63 => 24,  59 => 7,  94 => 28,  89 => 45,  85 => 32,  75 => 17,  68 => 29,  56 => 24,  87 => 29,  31 => 4,  28 => 3,  38 => 8,  26 => 6,  21 => 2,  201 => 92,  196 => 117,  183 => 82,  171 => 96,  166 => 71,  163 => 62,  158 => 67,  156 => 81,  151 => 86,  142 => 73,  138 => 72,  136 => 56,  121 => 46,  117 => 41,  105 => 55,  91 => 40,  62 => 26,  49 => 10,  25 => 3,  24 => 3,  19 => 1,  93 => 28,  88 => 38,  78 => 36,  46 => 14,  44 => 15,  27 => 4,  79 => 34,  72 => 11,  69 => 10,  47 => 95,  40 => 7,  37 => 6,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 65,  123 => 60,  120 => 58,  115 => 55,  111 => 54,  108 => 38,  101 => 32,  98 => 47,  96 => 35,  83 => 35,  74 => 30,  66 => 34,  55 => 22,  52 => 21,  50 => 21,  43 => 8,  41 => 9,  35 => 6,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 36,  154 => 58,  149 => 51,  147 => 85,  144 => 75,  141 => 72,  133 => 55,  130 => 67,  125 => 44,  122 => 62,  116 => 43,  112 => 53,  109 => 51,  106 => 52,  103 => 49,  99 => 45,  95 => 42,  92 => 34,  86 => 41,  82 => 32,  80 => 17,  73 => 35,  64 => 26,  60 => 22,  57 => 23,  54 => 18,  51 => 17,  48 => 16,  45 => 14,  42 => 10,  39 => 10,  36 => 10,  33 => 4,  30 => 7,);
    }
}
