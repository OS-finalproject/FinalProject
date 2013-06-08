<?php

/* ::base.html.twig */
class __TwigTemplate_c78f083be76b627e20fff49e874e22e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<!--
\tDopetrope 2.0 by HTML5 UP
\thtml5up.net | @n33co
\tFree for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html  xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de\" lang=\"de\">
\t<head>
\t\t<title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
\t\t<meta name=\"description\" content=\"\" />
\t\t<meta name=\"keywords\" content=\"\" />
\t\t\t";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "\t\t<!--[if lte IE 8]><script src=\"js/html5shiv.js\"></script><link rel=\"stylesheet\" href=\"css/ie8.css\" /><![endif]-->
\t</head>
\t<body class=\"homepage\">
\t\t<!-- Header Wrapper -->
\t\t\t<div id=\"header-wrapper\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div align=\"right\">
\t\t\t\t\t\t<a class=\"button topopup\" href=\"#\">log in</a>
\t\t\t\t\t\t<a class=\"button\" href=\"\">sign up</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"12u\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Header -->
\t\t\t\t\t\t\t\t<section id=\"header\">
\t\t\t\t\t\t\t\t\t<!-- Logo -->
\t\t\t\t\t\t\t\t\t\t<h1><a href=\"#\">Dopetrope</a></h1>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Nav -->
\t\t\t\t\t\t\t\t\t\t<nav id=\"nav\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"current_page_item\"><a href=\"index.html\">Home</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Service Providers</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Lorem ipsum dolor</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Magna phasellus</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Etiam dolore nisl</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Phasellus consequat</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Magna phasellus</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Etiam dolore nisl</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Veroeros feugiat</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Veroeros feugiat</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">About</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Contact Us</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</nav>

\t\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"12u\">

\t\t\t\t\t\t\t<!-- Banner -->
\t\t\t\t\t\t\t\t<section id=\"banner\"><center>
\t\t\t\t\t\t\t\t\t<ul class=\"bxslider\">
\t\t\t\t\t\t\t\t\t  <li><img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic04.jpg"), "html", null, true);
        echo "\" /></li>
\t\t\t\t\t\t\t\t\t  <li><img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic05.jpg"), "html", null, true);
        echo "\" /></li>
\t\t\t\t\t\t\t\t\t  <li><img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic06.jpg"), "html", null, true);
        echo "\" /></li>
\t\t\t\t\t\t\t\t\t  <li><img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic07.jpg"), "html", null, true);
        echo "\" /></li>
\t\t\t\t\t\t\t\t\t  <li><img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic08.jpg"), "html", null, true);
        echo "\" /></li>
\t\t\t\t\t\t\t\t\t  <li><img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic09.jpg"), "html", null, true);
        echo "\" /></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 88
        $this->displayBlock('body', $context, $blocks);
        // line 89
        echo "\t\t\t\t</div>
\t\t\t</div>\t
\t\t\t\t

\t\t<!-- Footer Wrapper -->
\t\t\t<div id=\"footer-wrapper\">
\t\t\t\t
\t\t\t\t<!-- Footer -->
\t\t\t\t\t<section id=\"footer\" class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"4u\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"4u\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t<header>
\t\t\t\t\t\t\t\t\t\t<h2>Vitae tempor lorem</h2>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<ul class=\"social\">
\t\t\t\t\t\t\t\t\t\t<li class=\"facebook\"><a href=\"#\" class=\"icon48 icon48-1\">Facebook</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"twitter\"><a href=\"http://twitter.com/n33co\" class=\"icon48 icon48-2\">Twitter</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"dribbble\"><a href=\"http://dribbble.com/n33\" class=\"icon48 icon48-3\">Dribbble</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"linkedin\"><a href=\"#\" class=\"icon48 icon48-4\">LinkedIn</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"tumblr\"><a href=\"#\" class=\"icon48 icon48-5\">Tumblr</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"googleplus\"><a href=\"#\" class=\"icon48 icon48-6\">Google+</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<ul class=\"contact\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<h3>Address</h3>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\tUntitled Incorporated<br />
\t\t\t\t\t\t\t\t\t\t\t\t1234 Somewhere Road Suite #5432<br />
\t\t\t\t\t\t\t\t\t\t\t\tNashville, TN 00000-0000
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<h3>Mail</h3>
\t\t\t\t\t\t\t\t\t\t\t<p><a href=\"#\">someone@untitled.tld</a></p>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<h3>Phone</h3>
\t\t\t\t\t\t\t\t\t\t\t<p>(800) 000-0000</p>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</section>
\t\t\t</div>
\t\t";
        // line 141
        $this->displayBlock('javascripts', $context, $blocks);
        // line 164
        echo "\t</body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Home";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "\t\t\t<noscript>
\t\t\t<link href=\"http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900,300italic\" rel=\"stylesheet\" />
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/skel-noscript.css"), "html", null, true);
        echo "\" />
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style-desktop.css"), "html", null, true);
        echo "\" />
\t\t\t<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.bxslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t\t</noscript>
\t\t\t";
    }

    // line 88
    public function block_body($context, array $blocks = array())
    {
    }

    // line 141
    public function block_javascripts($context, array $blocks = array())
    {
        // line 142
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script> 
\t\t\t<!-- <script src=\"http://code.jquery.com/jquery-1.10.0.min.js\"></script>
\t\t\t<script src=\"http://code.jquery.com/jquery-migrate-1.2.1.min.js\"></script> -->
\t\t\t<script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.dropotron-1.3.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/config.js"), "html", null, true);
        echo "\"></script> 
\t\t\t<script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/skel.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/skel-ui.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.bxslider.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script>
\t\t\t\$(document).ready(function(){
\t\t\t\t  \$('.bxslider').bxSlider({
\t\t\t\t  \t  mode: 'horizontal',
\t\t\t\t\t  useCSS: true,
\t\t\t\t\t  infiniteLoop: true,
\t\t\t\t\t  hideControlOnEnd: false,
\t\t\t\t\t  speed: 2000
\t\t\t\t  });
\t\t\t\t  
\t\t\t\t});
\t\t\t</script>
\t\t";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 150,  254 => 149,  250 => 148,  246 => 147,  242 => 146,  238 => 145,  231 => 142,  228 => 141,  223 => 88,  216 => 19,  212 => 18,  208 => 17,  204 => 16,  200 => 14,  197 => 13,  191 => 9,  186 => 164,  184 => 141,  130 => 89,  128 => 88,  118 => 81,  114 => 80,  110 => 79,  106 => 78,  102 => 77,  98 => 76,  42 => 22,  40 => 13,  33 => 9,  23 => 1,);
    }
}
