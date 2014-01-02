<?php

/* CroisiereBundle:Bateau:new2.html.twig */
class __TwigTemplate_e1269947271b22dc94417aa3805be1f48fe027882f6055eb74e581d6c4ccdbd0 extends Twig_Template
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
\t\t\t<div class=\"step-dark-right\">&nbsp;</div>
\t\t\t<div class=\"step-no-off\">3</div>
\t\t\t<div class=\"step-light-left\">Add Cabine</div>
\t\t\t<div class=\"step-light-round\">&nbsp;</div>                      
\t\t\t<div class=\"clear\"></div>
\t\t</div>
";
    }

    // line 16
    public function block_form($context, array $blocks = array())
    {
        // line 17
        echo "
";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
        echo "

        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\"  id=\"id-form\">
        <tr>
        <th valign=\"top\"> nomBateau </th>
        <td>   ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nomBateau"), 'widget');
        echo "</td>
        <td></td>
        </tr>
        <tr>
        <th valign=\"top\"> categorie </th>
        <td>   ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "categorie"), 'widget');
        echo " </td>
        <td></td>
        </tr>
        <tr>
        <th valign=\"top\"> typeBateau </th>
        <td>   ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "typeBateau"), 'widget');
        echo " </td>
        <td></td>
        </tr>
        <tr>
        <th valign=\"top\"> dateEnservie </th>
        <td>   ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateEnservie"), 'widget');
        echo "</td>
        <td></td>
        </tr>
        
        <tr>
        <th valign=\"top\"> nombrePassange </th>
        <td>   ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nombrePassange"), 'widget');
        echo "</td>
        <td></td>
        </tr>
        <tr>
        <th valign=\"top\"> tonnage </th>
        <td>   ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "tonnage"), 'widget');
        echo "</td>
        <td></td>
        </tr>
        <tr>
        <th valign=\"top\"> longeur </th>
        <td>   ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "longeur"), 'widget');
        echo "</td>
        <td></td>
        </tr>
          <tr>
        <th valign=\"top\"> largeur </th>
        <td>   ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "largeur"), 'widget');
        echo "</td>
        <td></td>
        </tr>
          <tr>
        <th valign=\"top\"> vitesse </th>
        <td>   ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "vitesse"), 'widget');
        echo "</td>
        <td></td>
        </tr>
            <tr>
        <th valign=\"top\"> TypeCabine </th>
        <td>   ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "TypeCabine"), 'widget');
        echo "</td>
        <td></td>
        </tr>
            
  <tr><td></td><td>     ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "submit"), 'widget', array("attr" => array("class" => "form-submit")));
        echo "
      </td></tr>
        </table>
        ";
        // line 76
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "


        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 81
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
        return "CroisiereBundle:Bateau:new2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 76,  127 => 64,  137 => 68,  126 => 67,  113 => 60,  97 => 50,  81 => 40,  77 => 27,  84 => 31,  58 => 21,  70 => 28,  245 => 131,  231 => 126,  226 => 124,  222 => 123,  218 => 122,  210 => 120,  200 => 118,  192 => 116,  188 => 114,  184 => 113,  167 => 99,  90 => 49,  53 => 23,  134 => 81,  104 => 37,  34 => 5,  65 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 121,  177 => 65,  169 => 60,  140 => 55,  132 => 69,  128 => 49,  107 => 50,  61 => 107,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 127,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 119,  179 => 51,  159 => 35,  143 => 71,  135 => 69,  119 => 59,  102 => 32,  71 => 29,  67 => 25,  63 => 24,  59 => 7,  94 => 28,  89 => 45,  85 => 32,  75 => 17,  68 => 18,  56 => 24,  87 => 29,  31 => 4,  28 => 3,  38 => 8,  26 => 6,  21 => 2,  201 => 92,  196 => 117,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 81,  151 => 86,  142 => 73,  138 => 71,  136 => 56,  121 => 46,  117 => 44,  105 => 55,  91 => 40,  62 => 23,  49 => 10,  25 => 3,  24 => 3,  19 => 1,  93 => 28,  88 => 6,  78 => 33,  46 => 9,  44 => 15,  27 => 4,  79 => 34,  72 => 11,  69 => 10,  47 => 95,  40 => 7,  37 => 6,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 65,  123 => 60,  120 => 40,  115 => 55,  111 => 54,  108 => 36,  101 => 32,  98 => 34,  96 => 37,  83 => 35,  74 => 39,  66 => 34,  55 => 19,  52 => 32,  50 => 21,  43 => 8,  41 => 9,  35 => 6,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 36,  154 => 58,  149 => 51,  147 => 85,  144 => 49,  141 => 72,  133 => 55,  130 => 68,  125 => 44,  122 => 43,  116 => 43,  112 => 62,  109 => 51,  106 => 59,  103 => 49,  99 => 45,  95 => 44,  92 => 21,  86 => 38,  82 => 31,  80 => 17,  73 => 35,  64 => 26,  60 => 6,  57 => 23,  54 => 18,  51 => 17,  48 => 16,  45 => 14,  42 => 10,  39 => 10,  36 => 10,  33 => 4,  30 => 7,);
    }
}
