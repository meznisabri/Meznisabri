<?php

/* CroisiereBundle:Default:index.html.twig */
class __TwigTemplate_e2edae1ccc9ab3d20ae4bfe0018c246083f4634805beb423641a3983754f4f89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stepholder' => array($this, 'block_stepholder'),
            'form' => array($this, 'block_form'),
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
        echo "<!-- include Header menu -->
";
        // line 5
        $this->env->loadTemplate("CroisiereBundle:Default:header.html.twig")->display($context);
        // line 6
        echo "<!-- start content-outer -->
<div id=\"content-outer\">
<!-- start content -->
<div id=\"content\">


<div id=\"page-heading\"><h1>Add product</h1></div>


<table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" id=\"content-table\">
<tr>
\t<th rowspan=\"3\" class=\"sized\"><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/croisiere/images/shared/side_shadowleft.jpg"), "html", null, true);
        echo "\" width=\"20\" height=\"300\" alt=\"\" /></th>
\t<th class=\"topleft\"></th>
\t<td id=\"tbl-border-top\">&nbsp;</td>
\t<th class=\"topright\"></th>
\t<th rowspan=\"3\" class=\"sized\"><img src=";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/croisiere/\"images/shared/side_shadowright.jpg"), "html", null, true);
        echo "\" width=\"20\" height=\"300\" alt=\"\" /></th>
</tr>
<tr>
\t<td id=\"tbl-border-left\"></td>
\t<td>
\t<!--  start content-table-inner -->
\t<div id=\"content-table-inner\">
\t
\t<table border=\"0\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">
\t<tr valign=\"top\">
\t<td>
\t
\t
\t\t<!--  start step-holder -->
            ";
        // line 35
        $this->displayBlock('stepholder', $context, $blocks);
        // line 50
        echo "
\t\t<!--  end step-holder -->\t\t<!--  start id-form 

                
\t           ";
        // line 54
        $this->displayBlock('form', $context, $blocks);
        // line 59
        echo "
<!-- -->

\t<!-- end id-form  -->

\t</td>
\t<td>
\t<!--  start related-activities -->
       ";
        // line 67
        $this->env->loadTemplate("CroisiereBundle:Default:rightslider.html.twig")->display($context);
        // line 68
        echo "\t<!-- end related-activities -->

</td>
</tr>
<tr>
<td><img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/croisiere/images/shared/blank.gif"), "html", null, true);
        echo "\" width=\"695\" height=\"1\" alt=\"blank\" /></td>
<td></td>
</tr>
</table>
 
<div class=\"clear\"></div>
 

</div>
<!--  end content-table-inner  -->
</td>
<td id=\"tbl-border-right\"></td>
</tr>
<tr>
\t<th class=\"sized bottomleft\"></th>
\t<td id=\"tbl-border-bottom\">&nbsp;</td>
\t<th class=\"sized bottomright\"></th>
</tr>
</table>

<div class=\"clear\">&nbsp;</div>

</div>
<!--  end content -->
<div class=\"clear\">&nbsp;</div>
</div>
<!--  end content-outer -->

 

<div class=\"clear\">&nbsp;</div>
    
";
        // line 105
        $this->env->loadTemplate("CroisiereBundle:Default:footer.html.twig")->display($context);
        // line 106
        echo "
 
";
    }

    // line 35
    public function block_stepholder($context, array $blocks = array())
    {
        // line 36
        echo "
\t\t<div id=\"step-holder\">
\t\t\t<div class=\"step-no\">1</div>
\t\t\t<div class=\"step-dark-left\"><a href=\"\">Add product details</a></div>
\t\t\t<div class=\"step-dark-right\">&nbsp;</div>
\t\t\t<div class=\"step-no-off\">2</div>
\t\t\t<div class=\"step-light-left\">Select related products</div>
\t\t\t<div class=\"step-light-right\">&nbsp;</div>
\t\t\t<div class=\"step-no-off\">3</div>
\t\t\t<div class=\"step-light-left\">Preview</div>
\t\t\t<div class=\"step-light-round\">&nbsp;</div>
\t\t\t<div class=\"clear\"></div>
\t\t</div>
                 ";
    }

    // line 54
    public function block_form($context, array $blocks = array())
    {
        // line 55
        echo "                             ";
        $this->env->loadTemplate("CroisiereBundle:Default:form.html.twig")->display($context);
        // line 56
        echo "                    

 ";
    }

    public function getTemplateName()
    {
        return "CroisiereBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 55,  76 => 30,  124 => 47,  110 => 42,  180 => 99,  175 => 97,  150 => 36,  114 => 43,  100 => 36,  148 => 76,  127 => 92,  137 => 68,  126 => 67,  113 => 40,  97 => 68,  81 => 55,  77 => 50,  84 => 33,  58 => 21,  70 => 27,  245 => 131,  231 => 126,  226 => 124,  222 => 123,  218 => 122,  210 => 120,  200 => 110,  192 => 116,  188 => 101,  184 => 100,  167 => 54,  90 => 34,  53 => 30,  134 => 81,  104 => 73,  34 => 11,  65 => 26,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 121,  177 => 65,  169 => 60,  140 => 55,  132 => 69,  128 => 49,  107 => 50,  61 => 25,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 127,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 119,  179 => 51,  159 => 35,  143 => 71,  135 => 69,  119 => 59,  102 => 38,  71 => 27,  67 => 26,  63 => 25,  59 => 7,  94 => 36,  89 => 36,  85 => 59,  75 => 35,  68 => 26,  56 => 21,  87 => 33,  31 => 4,  28 => 3,  38 => 6,  26 => 6,  21 => 2,  201 => 92,  196 => 117,  183 => 82,  171 => 96,  166 => 71,  163 => 62,  158 => 67,  156 => 81,  151 => 86,  142 => 73,  138 => 72,  136 => 56,  121 => 46,  117 => 41,  105 => 55,  91 => 34,  62 => 20,  49 => 23,  25 => 5,  24 => 3,  19 => 1,  93 => 37,  88 => 38,  78 => 30,  46 => 17,  44 => 21,  27 => 4,  79 => 34,  72 => 27,  69 => 27,  47 => 21,  40 => 7,  37 => 14,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 105,  131 => 65,  123 => 60,  120 => 58,  115 => 55,  111 => 54,  108 => 38,  101 => 38,  98 => 37,  96 => 36,  83 => 54,  74 => 28,  66 => 25,  55 => 29,  52 => 20,  50 => 24,  43 => 20,  41 => 15,  35 => 6,  32 => 3,  29 => 9,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 56,  168 => 72,  164 => 59,  162 => 36,  154 => 58,  149 => 51,  147 => 35,  144 => 75,  141 => 106,  133 => 55,  130 => 67,  125 => 91,  122 => 62,  116 => 43,  112 => 42,  109 => 51,  106 => 41,  103 => 49,  99 => 45,  95 => 67,  92 => 34,  86 => 33,  82 => 31,  80 => 32,  73 => 35,  64 => 24,  60 => 22,  57 => 22,  54 => 25,  51 => 17,  48 => 22,  45 => 20,  42 => 19,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
