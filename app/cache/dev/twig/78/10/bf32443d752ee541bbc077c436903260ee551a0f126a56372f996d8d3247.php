<?php

/* CroisiereBundle:Default:header.html.twig */
class __TwigTemplate_7810bf32443d752ee541bbc077c436903260ee551a0f126a56372f996d8d3247 extends Twig_Template
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
        echo "<!-- Start: page-top-outer -->
<div id=\"page-top-outer\">    

<!-- Start: page-top -->
<div id=\"page-top\">

\t<!-- start ugo -->
\t<div id=\"logo\">
\t<a href=\"\"><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/croisiere/images/shared/logo.png"), "html", null, true);
        echo "\" width=\"156\" height=\"40\" alt=\"\" /></a>
\t</div>
\t<!-- end logo -->
\t
\t<!--  start top-search -->
\t<div id=\"top-search\">
\t\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
\t\t<tr>
\t\t<td><input type=\"text\" value=\"Search\" onblur=\"if (this.value=='') { this.value='Search'; }\" onfocus=\"if (this.value=='Search') { this.value=''; }\" class=\"top-search-inp\" /></td>
\t\t<td>
\t\t 
\t\t<select  class=\"styledselect\">
\t\t\t<option value=\"\">All</option>
\t\t\t<option value=\"\">Products</option>
\t\t\t<option value=\"\">Categories</option>
\t\t\t<option value=\"\">Clients</option>
\t\t\t<option value=\"\">News</option>
\t\t</select> 
\t\t 
\t\t</td>
\t\t<td>
\t\t<input type=\"image\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/croisiere/images/shared/top_search_btn.gif"), "html", null, true);
        echo "\"  />
\t\t</td>
\t\t</tr>
\t\t</table>
\t</div>
 \t<!--  end top-search -->
 \t<div class=\"clear\"></div>

</div>
<!-- End: page-top -->

</div>
<!-- End: page-top-outer -->
\t
<div class=\"clear\">&nbsp;</div>
 
<!--  start nav-outer-repeat................................................................................................. START -->
<div class=\"nav-outer-repeat\"> 
<!--  start nav-outer -->
<div class=\"nav-outer\"> 

\t\t<!-- start nav-right -->
\t\t<div id=\"nav-right\">
\t\t
\t\t\t<div class=\"nav-divider\">&nbsp;</div>
\t\t\t<div class=\"showhide-account\"><img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/croisiere/images/shared/nav/nav_myaccount.gif"), "html", null, true);
        echo "\" width=\"93\" height=\"14\" alt=\"\" /></div>
\t\t\t<div class=\"nav-divider\">&nbsp;</div>
\t\t\t
                        
                        
                        <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" id=\"logout\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/croisiere/images/shared/nav/nav_logout.gif"), "html", null, true);
        echo "\" width=\"64\" height=\"14\" alt=\"\" /></a>
\t\t\t<div class=\"clear\">&nbsp;</div>
\t\t
\t\t\t<!--  start account-content -->\t
\t\t\t<div class=\"account-content\">
\t\t\t<div class=\"account-drop-inner\">
\t\t\t\t<a href=\"\" id=\"acc-settings\">Settings</a>
\t\t\t\t<div class=\"clear\">&nbsp;</div>
\t\t\t\t<div class=\"acc-line\">&nbsp;</div>
\t\t\t\t<a href=\"\" id=\"acc-details\">Personal details </a>
\t\t\t\t<div class=\"clear\">&nbsp;</div>
\t\t\t\t<div class=\"acc-line\">&nbsp;</div>
\t\t\t\t<a href=\"\" id=\"acc-project\">Project details</a>
\t\t\t\t<div class=\"clear\">&nbsp;</div>
\t\t\t\t<div class=\"acc-line\">&nbsp;</div>
\t\t\t\t<a href=\"\" id=\"acc-inbox\">Inbox</a>
\t\t\t\t<div class=\"clear\">&nbsp;</div>
\t\t\t\t<div class=\"acc-line\">&nbsp;</div>
\t\t\t\t<a href=\"\" id=\"acc-stats\">Statistics</a> 
\t\t\t</div>
\t\t\t</div>

\t\t
\t\t</div>




\t\t<div class=\"nav\">
                                        <!--  start nav -->

";
        // line 91
        $this->env->loadTemplate("CroisiereBundle:Default:menu.html.twig")->display($context);
        // line 92
        echo "
<!--  end nav ................................................... END -->

</div>
<div class=\"clear\"></div>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->
 
 <div class=\"clear\"></div>
 ";
    }

    public function getTemplateName()
    {
        return "CroisiereBundle:Default:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 99,  175 => 97,  150 => 78,  114 => 57,  100 => 36,  148 => 76,  127 => 92,  137 => 68,  126 => 67,  113 => 40,  97 => 50,  81 => 55,  77 => 27,  84 => 31,  58 => 19,  70 => 31,  245 => 131,  231 => 126,  226 => 124,  222 => 123,  218 => 122,  210 => 120,  200 => 110,  192 => 116,  188 => 101,  184 => 100,  167 => 99,  90 => 42,  53 => 30,  134 => 81,  104 => 37,  34 => 5,  65 => 28,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 121,  177 => 65,  169 => 60,  140 => 55,  132 => 69,  128 => 49,  107 => 50,  61 => 27,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 127,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 119,  179 => 51,  159 => 35,  143 => 71,  135 => 69,  119 => 59,  102 => 46,  71 => 30,  67 => 26,  63 => 25,  59 => 7,  94 => 38,  89 => 60,  85 => 32,  75 => 27,  68 => 29,  56 => 24,  87 => 33,  31 => 4,  28 => 3,  38 => 15,  26 => 6,  21 => 2,  201 => 92,  196 => 117,  183 => 82,  171 => 96,  166 => 71,  163 => 62,  158 => 67,  156 => 81,  151 => 86,  142 => 73,  138 => 72,  136 => 56,  121 => 46,  117 => 41,  105 => 55,  91 => 40,  62 => 20,  49 => 17,  25 => 5,  24 => 3,  19 => 1,  93 => 28,  88 => 38,  78 => 34,  46 => 14,  44 => 15,  27 => 4,  79 => 34,  72 => 43,  69 => 24,  47 => 95,  40 => 7,  37 => 6,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 65,  123 => 60,  120 => 58,  115 => 55,  111 => 54,  108 => 38,  101 => 32,  98 => 47,  96 => 35,  83 => 35,  74 => 30,  66 => 34,  55 => 29,  52 => 18,  50 => 21,  43 => 8,  41 => 9,  35 => 6,  32 => 3,  29 => 9,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 36,  154 => 58,  149 => 51,  147 => 85,  144 => 75,  141 => 72,  133 => 55,  130 => 67,  125 => 91,  122 => 62,  116 => 43,  112 => 53,  109 => 51,  106 => 52,  103 => 49,  99 => 45,  95 => 42,  92 => 34,  86 => 41,  82 => 32,  80 => 17,  73 => 35,  64 => 26,  60 => 22,  57 => 23,  54 => 18,  51 => 17,  48 => 16,  45 => 16,  42 => 10,  39 => 10,  36 => 10,  33 => 4,  30 => 7,);
    }
}
