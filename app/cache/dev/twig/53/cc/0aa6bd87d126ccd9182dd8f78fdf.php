<?php

/* sitereservationBundle:Site:guestoffers.html.twig */
class __TwigTemplate_53cc0aa6bd87d126ccd9182dd8f78fdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Hot Offers";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t\t<div class=\"row\">
\t\t<div class=\"12u\">
\t\t\t";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "offers"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 7
            echo "\t\t\t\t\t\t<div class=\"4u\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<section class=\"";
            // line 9
            if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                echo "first";
            } elseif (($this->getAttribute($this->getContext($context, "loop"), "index") == 2)) {
                echo "middle";
            } else {
                echo "last";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t<h1>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "offer"), "name"), "html", null, true);
            echo "<h1>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<p>";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "offer"), "datefrom")), "html", null, true);
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "offer"), "dateto")), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</div>
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 17
        echo "\t\t</div>
\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "sitereservationBundle:Site:guestoffers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 9,  59 => 7,  253 => 149,  249 => 148,  245 => 147,  237 => 145,  233 => 144,  222 => 140,  219 => 139,  201 => 139,  90 => 40,  65 => 21,  53 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 146,  235 => 74,  229 => 143,  224 => 71,  220 => 70,  214 => 70,  208 => 9,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 71,  119 => 68,  107 => 36,  71 => 19,  38 => 4,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 70,  114 => 42,  84 => 28,  70 => 20,  67 => 15,  61 => 20,  87 => 20,  94 => 22,  89 => 20,  85 => 25,  75 => 23,  68 => 14,  56 => 9,  31 => 5,  26 => 6,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 31,  62 => 23,  49 => 17,  28 => 3,  24 => 3,  21 => 2,  25 => 4,  19 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  44 => 14,  27 => 4,  79 => 13,  72 => 24,  69 => 25,  47 => 9,  40 => 7,  37 => 10,  22 => 1,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 37,  101 => 32,  98 => 17,  96 => 31,  83 => 25,  74 => 11,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 9,  35 => 3,  32 => 9,  29 => 2,  209 => 82,  203 => 152,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 82,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 36,  112 => 42,  109 => 41,  106 => 36,  103 => 37,  99 => 30,  95 => 34,  92 => 33,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 19,  54 => 10,  51 => 14,  48 => 12,  45 => 17,  42 => 6,  39 => 13,  36 => 5,  33 => 4,  30 => 7,);
    }
}
