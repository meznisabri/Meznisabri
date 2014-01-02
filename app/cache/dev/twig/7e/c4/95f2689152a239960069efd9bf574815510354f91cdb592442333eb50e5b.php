<?php

/* CroisiereBundle:TypeCabine:new.html.twig */
class __TwigTemplate_7ec495f2689152a239960069efd9bf574815510354f91cdb592442333eb50e5b extends Twig_Template
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

    // line 3
    public function block_stepholder($context, array $blocks = array())
    {
        // line 4
        echo "<div id=\"step-holder\">
\t\t\t<div class=\"step-no-off\">1</div>
\t\t\t<div class=\"step-light-left\"><a href=\"\">Add Cabine </a></div>
\t\t\t<div class=\"step-light-right\">&nbsp;</div>
\t\t\t<div class=\"step-no\">2</div>
\t\t\t<div class=\"step-dark-left\">Add Type Cabine</div>
\t\t\t<div class=\"clear\"></div>
\t\t</div>
                      
                        
\t\t\t<div class=\"clear\"></div>
\t\t</div>
";
    }

    // line 17
    public function block_form($context, array $blocks = array())
    {
        // line 18
        echo "    <h1>TypeCabine creation</h1>
";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
        echo "

        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\"  id=\"id-form\">
\t
        <tr>
        <th valign=\"top\"> nomAgence </th>
      
           
        <td>   ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nature"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
        <td></td>
        </tr>
       <tr>
        <th valign=\"top\"> nomAgence </th>
        <td>   ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nbrPlace"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
        <td></td>
        </tr>
          
                <tr>
        <th valign=\"top\"> nomAgence </th>
        <td>   ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'widget', array("attr" => array("class" => "form-textarea")));
        echo "</td>
        <td></td>
        </tr>
         <tr>
        <th valign=\"top\"> Affichable </th>
        <td>   ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "Affichable"), 'widget', array("attr" => array("class" => "inp-form")));
        echo "</td>
        <td></td>
        </tr>   
         <tr><td></td><td>     ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "submit"), 'widget', array("attr" => array("class" => "form-submit")));
        echo "
</td>
        </table>
        ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "

    
";
    }

    public function getTemplateName()
    {
        return "CroisiereBundle:TypeCabine:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 88,  170 => 55,  76 => 30,  124 => 47,  110 => 53,  180 => 99,  175 => 97,  150 => 36,  114 => 43,  100 => 41,  148 => 83,  127 => 92,  137 => 68,  126 => 67,  113 => 60,  97 => 50,  81 => 30,  77 => 33,  84 => 33,  58 => 21,  70 => 28,  245 => 131,  231 => 126,  226 => 124,  222 => 123,  218 => 122,  210 => 120,  200 => 110,  192 => 116,  188 => 101,  184 => 100,  167 => 54,  90 => 43,  53 => 18,  134 => 81,  104 => 73,  34 => 5,  65 => 27,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 121,  177 => 65,  169 => 60,  140 => 55,  132 => 73,  128 => 49,  107 => 50,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 127,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 119,  179 => 51,  159 => 35,  143 => 71,  135 => 69,  119 => 63,  102 => 49,  71 => 30,  67 => 26,  63 => 25,  59 => 7,  94 => 36,  89 => 45,  85 => 38,  75 => 27,  68 => 23,  56 => 21,  87 => 40,  31 => 4,  28 => 3,  38 => 6,  26 => 6,  21 => 2,  201 => 92,  196 => 117,  183 => 82,  171 => 96,  166 => 71,  163 => 62,  158 => 87,  156 => 81,  151 => 86,  142 => 73,  138 => 72,  136 => 56,  121 => 46,  117 => 41,  105 => 55,  91 => 34,  62 => 15,  49 => 14,  25 => 5,  24 => 3,  19 => 1,  93 => 36,  88 => 38,  78 => 33,  46 => 14,  44 => 14,  27 => 4,  79 => 35,  72 => 27,  69 => 24,  47 => 18,  40 => 7,  37 => 6,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 105,  131 => 65,  123 => 60,  120 => 58,  115 => 55,  111 => 54,  108 => 38,  101 => 38,  98 => 38,  96 => 46,  83 => 54,  74 => 28,  66 => 25,  55 => 21,  52 => 20,  50 => 24,  43 => 8,  41 => 15,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 56,  168 => 72,  164 => 59,  162 => 36,  154 => 86,  149 => 51,  147 => 35,  144 => 75,  141 => 79,  133 => 55,  130 => 67,  125 => 66,  122 => 66,  116 => 43,  112 => 42,  109 => 56,  106 => 56,  103 => 49,  99 => 45,  95 => 67,  92 => 42,  86 => 32,  82 => 38,  80 => 29,  73 => 32,  64 => 22,  60 => 21,  57 => 25,  54 => 19,  51 => 18,  48 => 17,  45 => 20,  42 => 10,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
