<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_fc8f3d723f3f191501c938b3b5dd55efb7307bf898477b3ddc528558b5856c81 extends Twig_Template
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
        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        ";
        // line 5
        if (array_key_exists("invalid_username", $context)) {
            // line 6
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => $this->getContext($context, "invalid_username")), "FOSUserBundle"), "html", null, true);
            echo "</p>
        ";
        }
        // line 8
        echo "        <label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 4,  129 => 35,  160 => 88,  170 => 55,  76 => 26,  124 => 62,  110 => 53,  180 => 99,  175 => 97,  150 => 36,  114 => 8,  100 => 41,  148 => 83,  127 => 92,  137 => 68,  126 => 34,  113 => 60,  97 => 47,  81 => 37,  77 => 27,  84 => 28,  58 => 21,  70 => 29,  245 => 131,  231 => 126,  226 => 124,  222 => 123,  218 => 122,  210 => 120,  200 => 110,  192 => 116,  188 => 101,  184 => 100,  167 => 54,  90 => 43,  53 => 19,  134 => 81,  104 => 36,  34 => 11,  65 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 121,  177 => 65,  169 => 60,  140 => 55,  132 => 73,  128 => 49,  107 => 50,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 127,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 119,  179 => 51,  159 => 35,  143 => 71,  135 => 69,  119 => 9,  102 => 34,  71 => 30,  67 => 22,  63 => 21,  59 => 20,  94 => 44,  89 => 42,  85 => 38,  75 => 27,  68 => 25,  56 => 21,  87 => 40,  31 => 6,  28 => 5,  38 => 9,  26 => 6,  21 => 1,  201 => 92,  196 => 117,  183 => 82,  171 => 96,  166 => 71,  163 => 62,  158 => 87,  156 => 81,  151 => 86,  142 => 73,  138 => 72,  136 => 56,  121 => 46,  117 => 58,  105 => 52,  91 => 34,  62 => 15,  49 => 14,  25 => 5,  24 => 3,  19 => 2,  93 => 36,  88 => 32,  78 => 27,  46 => 17,  44 => 12,  27 => 5,  79 => 33,  72 => 29,  69 => 25,  47 => 17,  40 => 15,  37 => 6,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 105,  131 => 65,  123 => 60,  120 => 58,  115 => 55,  111 => 7,  108 => 52,  101 => 38,  98 => 32,  96 => 46,  83 => 28,  74 => 26,  66 => 25,  55 => 21,  52 => 17,  50 => 18,  43 => 12,  41 => 10,  35 => 8,  32 => 7,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 56,  168 => 72,  164 => 59,  162 => 36,  154 => 86,  149 => 51,  147 => 35,  144 => 75,  141 => 79,  133 => 55,  130 => 67,  125 => 66,  122 => 66,  116 => 43,  112 => 42,  109 => 56,  106 => 41,  103 => 49,  99 => 40,  95 => 67,  92 => 31,  86 => 39,  82 => 38,  80 => 29,  73 => 26,  64 => 24,  60 => 22,  57 => 21,  54 => 19,  51 => 18,  48 => 15,  45 => 14,  42 => 16,  39 => 10,  36 => 5,  33 => 6,  30 => 3,);
    }
}
