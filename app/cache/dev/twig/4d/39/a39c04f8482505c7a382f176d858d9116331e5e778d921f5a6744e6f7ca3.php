<?php

/* ::Clttemplate.html.twig */
class __TwigTemplate_4d39a39c04f8482505c7a382f176d858d9116331e5e778d921f5a6744e6f7ca3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::baseClt.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'Find' => array($this, 'block_Find'),
            'content' => array($this, 'block_content'),
            'FistList' => array($this, 'block_FistList'),
            'SecondList' => array($this, 'block_SecondList'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseClt.html.twig";
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
        $this->displayBlock('header', $context, $blocks);
        // line 94
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 189
        echo "        
                ";
        // line 190
        $this->displayBlock('footer', $context, $blocks);
        // line 218
        echo "
";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "
\t<div id=\"header\">
\t\t\t<ul id=\"navigation\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"index.html\" id=\"home\">Home</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" id=\"email\">Email</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<p>Talk to a travel professional <span>1-999-666-888</span></p>
\t\t\t<a href=\"index.html\" id=\"logo\"><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/clt/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"logo\"/></a>
\t\t\t<ul class=\"navigation\">
\t\t\t\t<li class=\"selected first\">
\t\t\t\t\t<a href=\"destinations.html\">Cruises &amp; Destinations</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"ships.html\">Ships &amp; Activities</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"cruises.html\">Prepare for your Cruises</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t    <div id=\"featured\">
\t\t\t\t<div class=\"first\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"selected first\">
\t\t\t\t\t\t\t<a href=\"featured.html\">Featured Destinations</a>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a href=\"featured.html\"><img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/clt/images/couples.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t\t\t\t\t\t<p>This website template has been designed by <a href=\"http://www.freewebsitetemplates.com/\">Free Website Templates</a> for you, for free. You can replace all this text with your own text.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"deals.html\">Hot Deals</a>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a href=\"deals.html\"><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/clt/images/riverside.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t\t\t\t\t\t<p>You can remove any link to our website from this website template, you're free to use this website template without linking back to us.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"offers.html\">Special Offers</a>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a href=\"offers.html\"><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/clt/images/mountains.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t\t\t\t\t\t<p>If you're having problems editing this website template, then don't hesitate to ask for help on the <a href=\"http://www.freewebsitetemplates.com/forum/\">Forum</a>.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
                               ";
        // line 55
        $this->displayBlock('Find', $context, $blocks);
        // line 90
        echo "
\t\t\t</div>
\t\t</div> 
            ";
    }

    // line 55
    public function block_Find($context, array $blocks = array())
    {
        // line 56
        echo "

  

<div>
\t\t\t\t\t<h3>Find A Cruise</h3>
\t\t\t\t
                                      ";
        // line 63
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
        echo "
                                            ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "destination"), 'widget');
        echo "
                                            ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "Bateau"), 'widget');
        echo "
                                            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "portsDedepart"), 'widget');
        echo "

                                        ";
        // line 68
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "
                                        

\t\t\t\t\t<div>
\t\t\t\t\t\t<h3>Already Booked?</h3>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"excursions.html\">Check out our Excursions</a>
\t\t\t\t\t\t\t\t<p>You can remove any link to our website from this website template.</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"restaurant.html\">Check out our Specialty Restaurant</a>
\t\t\t\t\t\t\t\t<p>You're free to use this website template without linking back to us.</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"activities.html\">Check out our Special Activities</a>
\t\t\t\t\t\t\t\t<p>Please don't hesitate to ask for help on the <a href=\"http://www.freewebsitetemplates.com/forum/\">Forum</a>.</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
                            ";
    }

    // line 94
    public function block_content($context, array $blocks = array())
    {
        // line 95
        echo "

\t\t<div id=\"content\">
\t\t\t<div>
\t\t\t";
        // line 99
        $this->displayBlock('FistList', $context, $blocks);
        // line 135
        echo "                            ";
        $this->displayBlock('SecondList', $context, $blocks);
        // line 171
        echo "
\t\t\t\t<div id=\"news\">
\t\t\t\t\t<h2>Get Updated</h2>
\t\t\t\t\t<a href=\"http://twitter.com/fwtemplates\">Follow us <font>Twitter</font></a>
\t\t\t\t\t<a href=\"http://facebook.com/freewebsitetemplates\">Like us in <font>Facebook</font></a>
\t\t\t\t\t<a href=\"#\">Visit our <font>Blog</font></a>
\t\t\t\t\t<a href=\"http://www.youtube.com/fwtemplates\">Watch us in <font>YouTube</font></a>
\t\t\t\t\t
\t\t\t\t\t<div>
\t\t\t\t\t\t<h3>Brochure</h3>
\t\t\t\t\t\t<a href=\"#\" id=\"download\"><img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/clt/images/brochure.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t\t\t\t<a href=\"#\">Download Brochure</a>
\t\t\t\t\t\t<p>This website template has been designed by <a href=\"http://www.freewebsitetemplates.com/\">Free Website Templates</a> for you, for free. You can replace all this text with your own text.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t</div>
\t\t</div>
                ";
    }

    // line 99
    public function block_FistList($context, array $blocks = array())
    {
        echo " \t
                            <div class=\"first\">
\t\t\t\t\t<h2>Hot Deals</h2>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"deals.html\"><img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/clt/images/riverside-city.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t\t\t\t\t<span><a href=\"deals.html\">Donec Nisl Justo</a></span>
\t\t\t\t\t\t\t<p>7 Days &amp; 3 Days at Aliquam iaculis velit</p>
\t\t\t\t\t\t\t<a href=\"deals.html\" class=\"details\">See Details</a>
\t\t\t\t\t\t\t<a href=\"deals.html\" class=\"book\">Book Now!</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"deals.html\"><img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/clt/images/kayaks.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t\t\t\t\t<span><a href=\"deals.html\">Pellentesque</a></span>
\t\t\t\t\t\t\t<p>Maecenas gravida lacus mauris, at interdum ligula</p>
\t\t\t\t\t\t\t<a href=\"deals.html\" class=\"details\">See Details</a>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"deals.html\" class=\"book\">Book Now!</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"deals.html\"><img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/clt/images/castle.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t\t\t\t\t<span><a href=\"deals.html\">QUISQUE</a></span>
\t\t\t\t\t\t\t<p>Pellentesque molestie arcu vitae lectus</p>
\t\t\t\t\t\t\t<a href=\"deals.html\" class=\"details\">See Details</a>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"deals.html\" class=\"book\">Book Now!</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"deals.html\"><img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/clt/images/girl-swimming.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t\t\t\t\t<span><a href=\"deals.html\">ODIOLOREM</a></span>
\t\t\t\t\t\t\t<p>Nullam viverra nisi et elit pretium venenatis</p>
\t\t\t\t\t\t\t<a href=\"deals.html\" class=\"details\">See Details</a>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"deals.html\" class=\"book\">Book Now!</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<a href=\"deals.html\">View all</a>
\t\t\t\t</div>
                            ";
    }

    // line 135
    public function block_SecondList($context, array $blocks = array())
    {
        echo " \t
\t\t\t\t<div>
\t\t\t\t\t<h2>Special Offers</h2>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"offers.html\"><img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/clt/images/palace.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t\t\t\t\t<span><a href=\"offers.html\">Pellentesque</a></span>
\t\t\t\t\t\t\t<p>Maecenas gravida lacus mauris, at interdum ligula</p>
\t\t\t\t\t\t\t<a href=\"offers.html\" class=\"details\">See Details</a>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"offers.html\" class=\"book\">Book Now!</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"offers.html\"><img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/clt/images/couples2.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t\t\t\t\t<span><a href=\"offers.html\">QUISQUE</a></span>
\t\t\t\t\t\t\t<p>Pellentesque molestie arcu vitae lectus</p>
\t\t\t\t\t\t\t<a href=\"offers.html\" class=\"details\">See Details</a>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"offers.html\" class=\"book\">Book Now!</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"offers.html\"><img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/clt/images/mountain-view.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t\t\t\t\t<span><a href=\"offers.html\">DONEC NISL JUSTO</a></span>
\t\t\t\t\t\t\t<p>7 Days &amp; 3 Days at Aliquam iaculis velit</p>
\t\t\t\t\t\t\t<a href=\"offers.html\" class=\"details\">See Details</a>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"offers.html\" class=\"book\">Book Now!</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"offers.html\"><img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/clt/images/ancient-place.jpg"), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t\t\t\t\t\t<span><a href=\"offers.html\">ODIOLOREM</a></span>
\t\t\t\t\t\t\t<p>Nullam viverra nisi et elit pretium venenatis</p>
\t\t\t\t\t\t\t<a href=\"offers.html\" class=\"details\">See Details</a>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"offers.html\" class=\"book\">Book Now!</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<a href=\"offers.html\">View all</a>
\t\t\t\t</div>
                                                        ";
    }

    // line 190
    public function block_footer($context, array $blocks = array())
    {
        echo "  
\t\t<div id=\"footer\">
\t\t\t<div>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"about.html\">The Company</a></li>
\t\t\t\t\t<li><a href=\"blog.html\">Visit our Blog</a></li>
\t\t\t\t\t<li><a href=\"#\">Brochure download</a></li>
\t\t\t\t</ul>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"destinations.html\">Cruises &amp; Destinations</a></li>
\t\t\t\t\t<li><a href=\"ships.html\">Ships &amp; Activities</a></li>
\t\t\t\t\t<li><a href=\"cruises.html\">Prepare for your Cruises</a></li>
\t\t\t\t</ul>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"featured.html\">Featured Destination</a></li>
\t\t\t\t\t<li><a href=\"deals.html\">Hot Deals</a></li>
\t\t\t\t\t<li><a href=\"offers.html\">Special Offers</a></li>
\t\t\t\t</ul>
\t\t\t\t<form action=\"\">
\t\t\t\t\t<span>Always Get Updated for</span>
\t\t\t\t\t<h2>Hot Deals &amp; Special Offers</h2>
\t\t\t\t\t<input type=\"text\" value=\"Enter email address\" id=\"email\" onblur=\"this.value=!this.value?'Enter email address':this.value;\" onfocus=\"this.select()\" onclick=\"this.value='';\" />
\t\t\t\t\t<input type=\"submit\" id=\"submit\" value=\"\"/>
\t\t\t\t</form>
\t\t\t\t<p>&#169; Copyright 2012. All Rights Reserved.</p>
\t\t\t</div>
\t\t</div>
            ";
    }

    public function getTemplateName()
    {
        return "::Clttemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 190,  315 => 161,  295 => 147,  276 => 135,  262 => 125,  242 => 111,  232 => 104,  223 => 99,  211 => 181,  194 => 99,  185 => 94,  146 => 64,  23 => 4,  129 => 35,  160 => 88,  170 => 55,  76 => 26,  124 => 62,  110 => 53,  180 => 99,  175 => 97,  150 => 65,  114 => 8,  100 => 38,  148 => 83,  127 => 92,  137 => 68,  126 => 34,  113 => 45,  97 => 47,  81 => 37,  77 => 27,  84 => 28,  58 => 6,  70 => 23,  245 => 131,  231 => 126,  226 => 124,  222 => 123,  218 => 122,  210 => 120,  200 => 110,  192 => 116,  188 => 95,  184 => 100,  167 => 54,  90 => 43,  53 => 19,  134 => 81,  104 => 36,  34 => 3,  65 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 154,  298 => 91,  294 => 90,  285 => 140,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 118,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 121,  177 => 65,  169 => 60,  140 => 55,  132 => 73,  128 => 49,  107 => 50,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 127,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 119,  179 => 51,  159 => 68,  143 => 71,  135 => 69,  119 => 9,  102 => 42,  71 => 17,  67 => 22,  63 => 19,  59 => 20,  94 => 44,  89 => 42,  85 => 38,  75 => 28,  68 => 25,  56 => 21,  87 => 33,  31 => 4,  28 => 4,  38 => 8,  26 => 12,  21 => 1,  201 => 92,  196 => 135,  183 => 82,  171 => 96,  166 => 71,  163 => 62,  158 => 87,  156 => 81,  151 => 86,  142 => 63,  138 => 72,  136 => 56,  121 => 55,  117 => 58,  105 => 52,  91 => 34,  62 => 15,  49 => 14,  25 => 5,  24 => 7,  19 => 2,  93 => 36,  88 => 32,  78 => 27,  46 => 13,  44 => 12,  27 => 4,  79 => 33,  72 => 29,  69 => 25,  47 => 17,  40 => 5,  37 => 4,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 105,  131 => 65,  123 => 90,  120 => 58,  115 => 55,  111 => 7,  108 => 52,  101 => 38,  98 => 32,  96 => 37,  83 => 32,  74 => 26,  66 => 25,  55 => 5,  52 => 17,  50 => 218,  43 => 11,  41 => 10,  35 => 8,  32 => 7,  29 => 5,  209 => 82,  203 => 78,  199 => 171,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 56,  168 => 72,  164 => 59,  162 => 36,  154 => 66,  149 => 51,  147 => 35,  144 => 75,  141 => 79,  133 => 56,  130 => 55,  125 => 66,  122 => 66,  116 => 43,  112 => 49,  109 => 56,  106 => 41,  103 => 49,  99 => 40,  95 => 67,  92 => 35,  86 => 39,  82 => 38,  80 => 29,  73 => 26,  64 => 24,  60 => 22,  57 => 21,  54 => 15,  51 => 18,  48 => 190,  45 => 189,  42 => 94,  39 => 7,  36 => 7,  33 => 6,  30 => 2,);
    }
}
