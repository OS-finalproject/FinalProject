<?php

/* sitereservationBundle:Site:home.html.twig */
class __TwigTemplate_c2276e8d7fccfdac23651307e406289e extends Twig_Template
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
        echo "Index";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"12u\">
\t\t\t\t\t\t\t<!-- Banner -->
\t\t\t\t\t\t\t\t<section class=\"box\">
\t\t\t\t\t\t\t\t\t\t\t<div id=\"sliderFrame\">
\t\t\t\t\t\t\t\t\t        \t<div id=\"ribbon\"></div>
\t\t\t\t\t\t\t\t\t        \t\t<div id=\"slider\">
\t\t\t\t\t\t\t\t\t            <a href=\"http://www.menucool.com/jquery-slider\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t                <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/image-slider-1.jpg"), "html", null, true);
        echo "\" alt=\"Welcome to Menucool.com\" />
\t\t\t\t\t\t\t\t\t            </a>
\t\t\t\t\t\t\t\t\t            <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/image-slider-2.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t<img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/image-slider-3.jpg"), "html", null, true);
        echo "\" alt=\"Pure Javascript. No jQuery. No flash.\" />
\t\t\t\t\t\t\t\t\t            <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/image-slider-4.jpg"), "html", null, true);
        echo "\" alt=\"#htmlcaption\" />
\t\t\t\t\t\t\t\t\t            <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/image-slider-5.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t\t        <div id=\"htmlcaption\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t            <em>HTML</em> caption. Link to <a href=\"http://www.google.com/\">Google</a>.
\t\t\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"12u\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Intro -->
\t\t\t\t\t\t\t\t<section id=\"intro\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"4u\">
\t\t\t\t\t\t\t\t\t\t\t\t<section class=\"first\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pennant pennant-alt2\"><span class=\"icon64 icon64-3\"></span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>Agenda</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>If you want to save your time and enjoy yourself, So you need our Agenda</p>
\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"4u\">
\t\t\t\t\t\t\t\t\t\t\t\t<section class=\"middle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pennant pennant-alt\"><span class=\"icon64 icon64-2\"></span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>We have alot of Offers, Check them</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p><form method=\"\" action=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tSearch&nbsp;<input type=\"search\" name=\"keyword\" placeholder=\"Type your Search Words\"><br /><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p><input type=\"submit\" value=\"Search\" class=\"button\"></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form></p>
\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"4u\">
\t\t\t\t\t\t\t\t\t\t\t\t<section class=\"last\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>Our Service Providers</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t\t<a class=\"button button-big\" href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sitereservation_GuestOffers"), "html", null, true);
        echo "\">Start your tour</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "sitereservationBundle:Site:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 68,  65 => 17,  61 => 16,  57 => 15,  53 => 14,  48 => 12,  38 => 4,  35 => 3,  29 => 2,);
    }
}
