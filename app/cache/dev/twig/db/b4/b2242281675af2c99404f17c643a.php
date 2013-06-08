<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_dbb4b2242281675af2c99404f17c643a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Redirection Intercepted";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getContext($context, "location"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getContext($context, "location"), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  102 => 33,  63 => 9,  59 => 7,  253 => 149,  249 => 148,  245 => 147,  237 => 145,  233 => 144,  222 => 140,  219 => 139,  201 => 139,  90 => 40,  65 => 11,  53 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 146,  235 => 74,  229 => 143,  224 => 71,  220 => 70,  214 => 70,  208 => 9,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 71,  119 => 68,  107 => 36,  71 => 13,  38 => 6,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 70,  114 => 42,  84 => 28,  70 => 26,  67 => 15,  61 => 20,  87 => 20,  94 => 22,  89 => 20,  85 => 23,  75 => 28,  68 => 12,  56 => 9,  31 => 8,  26 => 3,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 35,  62 => 24,  49 => 17,  28 => 3,  24 => 2,  21 => 2,  25 => 4,  19 => 1,  93 => 28,  88 => 6,  78 => 18,  46 => 14,  44 => 11,  27 => 7,  79 => 29,  72 => 24,  69 => 25,  47 => 9,  40 => 7,  37 => 6,  22 => 1,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 37,  101 => 32,  98 => 17,  96 => 30,  83 => 30,  74 => 11,  66 => 25,  55 => 38,  52 => 21,  50 => 15,  43 => 8,  41 => 9,  35 => 5,  32 => 6,  29 => 3,  209 => 82,  203 => 152,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 82,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 36,  112 => 42,  109 => 41,  106 => 36,  103 => 37,  99 => 30,  95 => 34,  92 => 28,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 39,  54 => 10,  51 => 37,  48 => 16,  45 => 9,  42 => 8,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}
