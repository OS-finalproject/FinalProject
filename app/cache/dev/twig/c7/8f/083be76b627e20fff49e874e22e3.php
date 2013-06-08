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
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "e8b7ee0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e8b7ee0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/e8b7ee0.css");
            // line 14
            echo "\t\t<noscript>
\t\t\t<link href=\"http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900,300italic\" rel=\"stylesheet\" />
\t\t\t<link rel=\"stylesheet\" href=\"http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css\" />
\t\t\t<link rel=\"stylesheet\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/skel-noscript.css"), "html", null, true);
            echo "\" />
\t\t\t<link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
            echo "\" />
\t\t\t<link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style-desktop.css"), "html", null, true);
            echo "\" />
\t\t\t<link href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/js-image-slider.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
    \t\t<link href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/generic.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t\t</noscript>
\t\t\t";
        }
        unset($context["asset_url"]);
        // line 24
        echo "\t\t<!--[if lte IE 8]><script src=\"js/html5shiv.js\"></script><link rel=\"stylesheet\" href=\"css/ie8.css\" /><![endif]-->
\t</head>
\t<body class=\"homepage\">
\t\t<!-- Header Wrapper -->
\t\t\t<div id=\"header-wrapper\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div align=\"right\" class=\"actions\">
\t\t\t\t\t\t<a class=\"button\" data-inline=\"true\" href=\"#\">log in</a>
\t\t\t\t\t\t<a class=\"button topopup\" href=\"#\">sign up</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"12u\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Header -->
\t\t\t\t\t\t\t\t<section id=\"header\">
\t\t\t\t\t\t\t\t\t<!-- Logo -->
\t\t\t\t\t\t\t\t\t\t<h1><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sitereservation_homepage"), "html", null, true);
        echo "\">Agenda</a></h1>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- Nav -->
\t\t\t\t\t\t\t\t\t\t<nav id=\"nav\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"current_page_item\"><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sitereservation_homepage"), "html", null, true);
        echo "\">Home</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Service Providers</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">About</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Contact Us</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</nav>

\t\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t";
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t    <div id=\"toPopup\">
\t\t\t        <div class=\"close\"></div>
\t\t\t       \t<span class=\"ecs_tooltip\">Press Esc to close <span class=\"arrow\"></span></span>
\t\t\t\t\t<div id=\"popup_content\"> <!--your content start-->
                                            
                                            
\t\t\t\t\t\t\t<section class=\"box\">
                                                            <div class=\"signIn\">
                                                                <div class=\"signInDiv\">
                                                                        <center><span id=\"signInError\"></span></center>
                                                                   <!-- <form method=\"POST\">-->
                                                                        <table>
                                                                        <tr>   
                                                                        <td><lebal>Email</lebal></td>
                                                                        <td><input type=\"text\" name=\"signInEmail\"  /></td>
                                                                        </tr>
                                                                        <tr>    
                                                                        <td><p></p></td>
                                                                        </tr>        
                                                                        <tr>   
                                                                        <td><lebal>Password</lebal></td>
                                                                        <td><input type=\"password\" name=\"signInPassword\" /></td>
                                                                        </tr>   
                                                                        </table>
                                                                        <center><input type=\"checkbox\" name=\"rememderMe\" value=\"rememderMe\" />&nbsp;<label>Remember Me</label></center>
                                                                        <input  class=\"button\" style=\"margin-left:65%;margin-top:5%;\" value=\"Login\" type=\"button\" id=\"signInButton\" name=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sitereservation_signIn"), "html", null, true);
        echo "\" />    
                                                                            
                                                                    
                                                                    <!--</form>-->
                                                                </div>    
                                                                <div class=\"signInVerticalLine\">
                                                                </div>                                                                       
                                                                <div class=\"signInDiv\" >
                                                                <br/>    
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"button\">Sign up as a Customer</a>
\t\t\t\t\t\t\t\t</div>
                                                                <br/>    
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sitereservation_companysignup"), "html", null, true);
        echo "\" class=\"button\">Sign up as a Company</a>
\t\t\t\t\t\t\t\t</div>
                                                                </div>        
                                                             </div>       
\t\t\t\t\t\t\t</section>
                                                        
        \t\t\t</div> <!--your content end-->
    \t\t\t</div> <!--toPopup end-->
\t\t\t\t<div class=\"loader\"></div>
\t\t\t   \t<div id=\"backgroundPopup\"></div>\t
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
        // line 172
        $this->displayBlock('javascripts', $context, $blocks);
        // line 185
        echo "\t</body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Home";
    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
    }

    // line 172
    public function block_javascripts($context, array $blocks = array())
    {
        // line 173
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script> 
\t\t\t<!-- <script src=\"http://code.jquery.com/jquery-1.10.0.min.js\"></script>
\t\t\t<script src=\"http://code.jquery.com/jquery-migrate-1.2.1.min.js\"></script> -->
\t\t\t<script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.dropotron-1.3.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/config.js"), "html", null, true);
        echo "\"></script> 
\t\t\t<script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/skel.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/skel-ui.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/js-image-slider.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/popupScript.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js\"></script>
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
        return array (  289 => 182,  285 => 181,  281 => 180,  277 => 179,  273 => 178,  269 => 177,  265 => 176,  258 => 173,  255 => 172,  250 => 70,  244 => 9,  239 => 185,  237 => 172,  174 => 112,  157 => 98,  128 => 71,  126 => 70,  98 => 45,  90 => 40,  72 => 24,  65 => 21,  61 => 20,  57 => 19,  53 => 18,  49 => 17,  44 => 14,  39 => 13,  32 => 9,  22 => 1,);
    }
}
