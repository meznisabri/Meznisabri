<?php

/* CroisiereBundle:Default:form.html.twig */
class __TwigTemplate_228c9dfec4c1feb34f2b218d899b53e040fb337c2d4ea137058877191d7a6954 extends Twig_Template
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
        echo "\t\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\"  id=\"id-form\">
\t\t<tr>
\t\t\t<th valign=\"top\">Product name:</th>
\t\t\t<td><input type=\"text\" class=\"inp-form\" /></td>
\t\t\t<td></td>
\t\t</tr>
\t\t<tr>
\t\t\t<th valign=\"top\">Product name:</th>
\t\t\t<td><input type=\"text\" class=\"inp-form-error\" /></td>
\t\t\t<td>
\t\t\t<div class=\"error-left\"></div>
\t\t\t<div class=\"error-inner\">This field is required.</div>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t<th valign=\"top\">Category:</th>
\t\t<td>\t
\t\t<select  class=\"styledselect_form_1\">
\t\t\t<option value=\"\">All</option>
\t\t\t<option value=\"\">Products</option>
\t\t\t<option value=\"\">Categories</option>
\t\t\t<option value=\"\">Clients</option>
\t\t\t<option value=\"\">News</option>
\t\t</select>
\t\t</td>
\t\t<td></td>
\t\t</tr>
\t\t<tr>
\t\t<th valign=\"top\">Sub Category:</th>
\t\t<td>\t
\t\t<select  class=\"styledselect_form_1\">
\t\t\t<option value=\"\">All</option>
\t\t\t<option value=\"\">Products</option>
\t\t\t<option value=\"\">Categories</option>
\t\t\t<option value=\"\">Clients</option>
\t\t\t<option value=\"\">News</option>
\t\t</select>
\t\t</td>
\t\t<td></td>
\t\t</tr> 
\t\t<tr>
\t\t\t<th valign=\"top\">Price:</th>
\t\t\t<td><input type=\"text\" class=\"inp-form\" /></td>
\t\t\t<td></td>
\t\t</tr>
\t\t<tr>
\t\t<th valign=\"top\">Select a date:</th>
\t\t<td class=\"noheight\">
\t\t
\t\t\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
\t\t\t<tr  valign=\"top\">
\t\t\t\t<td>
\t\t\t\t<form id=\"chooseDateForm\" action=\"#\">
\t\t\t\t
\t\t\t\t<select id=\"d\" class=\"styledselect-day\">
\t\t\t\t\t<option value=\"\">dd</option>
\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t<option value=\"4\">4</option>
\t\t\t\t\t<option value=\"5\">5</option>
\t\t\t\t\t<option value=\"6\">6</option>
\t\t\t\t\t<option value=\"7\">7</option>
\t\t\t\t\t<option value=\"8\">8</option>
\t\t\t\t\t<option value=\"9\">9</option>
\t\t\t\t\t<option value=\"10\">10</option>
\t\t\t\t\t<option value=\"11\">11</option>
\t\t\t\t\t<option value=\"12\">12</option>
\t\t\t\t\t<option value=\"13\">13</option>
\t\t\t\t\t<option value=\"14\">14</option>
\t\t\t\t\t<option value=\"15\">15</option>
\t\t\t\t\t<option value=\"16\">16</option>
\t\t\t\t\t<option value=\"17\">17</option>
\t\t\t\t\t<option value=\"18\">18</option>
\t\t\t\t\t<option value=\"19\">19</option>
\t\t\t\t\t<option value=\"20\">20</option>
\t\t\t\t\t<option value=\"21\">21</option>
\t\t\t\t\t<option value=\"22\">22</option>
\t\t\t\t\t<option value=\"23\">23</option>
\t\t\t\t\t<option value=\"24\">24</option>
\t\t\t\t\t<option value=\"25\">25</option>
\t\t\t\t\t<option value=\"26\">26</option>
\t\t\t\t\t<option value=\"27\">27</option>
\t\t\t\t\t<option value=\"28\">28</option>
\t\t\t\t\t<option value=\"29\">29</option>
\t\t\t\t\t<option value=\"30\">30</option>
\t\t\t\t\t<option value=\"31\">31</option>
\t\t\t\t</select>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<select id=\"m\" class=\"styledselect-month\">
\t\t\t\t\t\t<option value=\"\">mmm</option>
\t\t\t\t\t\t<option value=\"1\">Jan</option>
\t\t\t\t\t\t<option value=\"2\">Feb</option>
\t\t\t\t\t\t<option value=\"3\">Mar</option>
\t\t\t\t\t\t<option value=\"4\">Apr</option>
\t\t\t\t\t\t<option value=\"5\">May</option>
\t\t\t\t\t\t<option value=\"6\">Jun</option>
\t\t\t\t\t\t<option value=\"7\">Jul</option>
\t\t\t\t\t\t<option value=\"8\">Aug</option>
\t\t\t\t\t\t<option value=\"9\">Sep</option>
\t\t\t\t\t\t<option value=\"10\">Oct</option>
\t\t\t\t\t\t<option value=\"11\">Nov</option>
\t\t\t\t\t\t<option value=\"12\">Dec</option>
\t\t\t\t\t</select>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<select  id=\"y\"  class=\"styledselect-year\">
\t\t\t\t\t\t<option value=\"\">yyyy</option>
\t\t\t\t\t\t<option value=\"2005\">2005</option>
\t\t\t\t\t\t<option value=\"2006\">2006</option>
\t\t\t\t\t\t<option value=\"2007\">2007</option>
\t\t\t\t\t\t<option value=\"2008\">2008</option>
\t\t\t\t\t\t<option value=\"2009\">2009</option>
\t\t\t\t\t\t<option value=\"2010\">2010</option>
\t\t\t\t\t</select>
\t\t\t\t\t</form>
\t\t\t\t</td>
\t\t\t\t<td><a href=\"\"  id=\"date-pick\"><img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/croisiere/images/forms/icon_calendar.jpg"), "html", null, true);
        echo "\"   alt=\"\" /></a></td>
\t\t\t</tr>
\t\t\t</table>
\t\t
\t\t</td>
\t\t<td></td>
\t</tr>
\t<tr>
\t\t<th valign=\"top\">Description:</th>
\t\t<td><textarea rows=\"\" cols=\"\" class=\"form-textarea\"></textarea></td>
\t\t<td></td>
\t</tr>
\t<tr>
\t<th>Image 1:</th>
\t<td><input type=\"file\" class=\"file_1\" /></td>
\t<td>
\t<div class=\"bubble-left\"></div>
\t<div class=\"bubble-inner\">JPEG, GIF 5MB max per image</div>
\t<div class=\"bubble-right\"></div>
\t</td>
\t</tr>
\t<tr>
\t<th>Image 2:</th>
\t<td>  <input type=\"file\" class=\"file_1\" /></td>
\t<td><div class=\"bubble-left\"></div>
\t<div class=\"bubble-inner\">JPEG, GIF 5MB max per image</div>
\t<div class=\"bubble-right\"></div></td>
\t</tr>
\t<tr>
\t<th>Image 3:</th>
\t<td><input type=\"file\" class=\"file_1\" /></td>
\t<td><div class=\"bubble-left\"></div>
\t<div class=\"bubble-inner\">JPEG, GIF 5MB max per image</div>
\t<div class=\"bubble-right\"></div></td>
\t</tr>
\t<tr>
\t\t<th>&nbsp;</th>
\t\t<td valign=\"top\">
\t\t\t<input type=\"button\" value=\"\" class=\"form-submit\" />
\t\t\t<input type=\"reset\" value=\"\" class=\"form-reset\"  />
\t\t</td>
\t\t<td></td>
\t</tr>
\t</table>";
    }

    public function getTemplateName()
    {
        return "CroisiereBundle:Default:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 30,  124 => 47,  110 => 42,  180 => 99,  175 => 97,  150 => 78,  114 => 43,  100 => 36,  148 => 76,  127 => 92,  137 => 68,  126 => 67,  113 => 40,  97 => 40,  81 => 55,  77 => 27,  84 => 33,  58 => 26,  70 => 27,  245 => 131,  231 => 126,  226 => 124,  222 => 123,  218 => 122,  210 => 120,  200 => 110,  192 => 116,  188 => 101,  184 => 100,  167 => 99,  90 => 34,  53 => 30,  134 => 81,  104 => 37,  34 => 11,  65 => 26,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 121,  177 => 65,  169 => 60,  140 => 55,  132 => 69,  128 => 49,  107 => 50,  61 => 25,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 127,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 119,  179 => 51,  159 => 35,  143 => 71,  135 => 69,  119 => 59,  102 => 38,  71 => 27,  67 => 26,  63 => 25,  59 => 7,  94 => 36,  89 => 36,  85 => 34,  75 => 28,  68 => 26,  56 => 21,  87 => 33,  31 => 4,  28 => 3,  38 => 18,  26 => 6,  21 => 2,  201 => 92,  196 => 117,  183 => 82,  171 => 96,  166 => 71,  163 => 62,  158 => 67,  156 => 81,  151 => 86,  142 => 73,  138 => 72,  136 => 56,  121 => 46,  117 => 41,  105 => 55,  91 => 34,  62 => 20,  49 => 23,  25 => 5,  24 => 3,  19 => 1,  93 => 37,  88 => 38,  78 => 30,  46 => 17,  44 => 21,  27 => 4,  79 => 34,  72 => 27,  69 => 27,  47 => 21,  40 => 7,  37 => 14,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 119,  131 => 65,  123 => 60,  120 => 58,  115 => 55,  111 => 54,  108 => 38,  101 => 38,  98 => 37,  96 => 36,  83 => 35,  74 => 28,  66 => 25,  55 => 29,  52 => 20,  50 => 24,  43 => 20,  41 => 15,  35 => 6,  32 => 3,  29 => 9,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 36,  154 => 58,  149 => 51,  147 => 85,  144 => 75,  141 => 72,  133 => 55,  130 => 67,  125 => 91,  122 => 62,  116 => 43,  112 => 42,  109 => 51,  106 => 41,  103 => 49,  99 => 45,  95 => 42,  92 => 34,  86 => 33,  82 => 31,  80 => 32,  73 => 35,  64 => 24,  60 => 22,  57 => 22,  54 => 25,  51 => 21,  48 => 22,  45 => 20,  42 => 19,  39 => 10,  36 => 10,  33 => 13,  30 => 10,);
    }
}
