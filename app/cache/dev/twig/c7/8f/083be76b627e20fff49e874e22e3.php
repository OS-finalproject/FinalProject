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
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<!--
        Dopetrope 2.0 by HTML5 UP
        html5up.net | @n33co
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html  xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"de\" lang=\"de\">
    <head>
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"keywords\" content=\"\" />
\t\t\t";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "e8b7ee0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e8b7ee0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/e8b7ee0.css");
            // line 14
            echo "        <noscript>
            <link href=\"http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900,300italic\" rel=\"stylesheet\" />
            <link rel=\"stylesheet\" href=\"http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css\" />
            <link rel=\"stylesheet\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/skel-noscript.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style-desktop.css"), "html", null, true);
            echo "\" />
            <link href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/js-image-slider.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/generic.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
        </noscript>
\t\t\t";
        }
        unset($context["asset_url"]);
        // line 24
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script> 
        <!-- <script src=\"http://code.jquery.com/jquery-1.10.0.min.js\"></script>
        <script src=\"http://code.jquery.com/jquery-migrate-1.2.1.min.js\"></script> -->
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.dropotron-1.3.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/config.js"), "html", null, true);
        echo "\"></script> 
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/skel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/skel-ui.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/js-image-slider.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/popupScript.js"), "html", null, true);
        echo "\"></script>
        <script src=\"http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js\"></script>
        <!--[if lte IE 8]><script src=\"js/html5shiv.js\"></script><link rel=\"stylesheet\" href=\"css/ie8.css\" /><![endif]-->
    </head>
    <body class=\"homepage\">
        
       ";
        // line 39
        $context["type"] = $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "type"), "method");
        // line 40
        echo "        
        <!-- Header Wrapper -->
        <div id=\"header-wrapper\">
            <div class=\"container\">
                
                ";
        // line 45
        if ($this->getContext($context, "type")) {
            // line 46
            echo "                
                    <div align=\"right\" class=\"actions\">
                        hi,<a class=\"button\" data-inline=\"true\" href=\"#\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "username"), "method"), "html", null, true);
            echo "</a>
                        <a class=\"button\" href=\"#\">sign out</a>
                    </div>                
                
                ";
        } else {
            // line 53
            echo "                
                    <div align=\"right\" class=\"actions\">
                        <a class=\"button\" data-inline=\"true\" href=\"#\">log in</a>
                        <a class=\"button topopup\" href=\"#\">sign up</a>
                    </div>
                
                ";
        }
        // line 60
        echo "                <div class=\"row\">
                    <div class=\"12u\">

                        <!-- Header -->
                        <section id=\"header\">
                            <!-- Logo -->
                            <h1><a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sitereservation_homepage"), "html", null, true);
        echo "\">Agenda</a></h1>

                            <!-- Nav -->
                            
                            ";
        // line 70
        if (($this->getContext($context, "type") == "user")) {
            // line 71
            echo "                            
                                    <nav id=\"nav\">
                                        <ul>
                                            <li class=\"current_page_item\"><a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sitereservation_homepage"), "html", null, true);
            echo "\">Home</a></li>
                                            <li>
                                                <a href=\"\">Service Providers</a>
                                                <!-- <ul>
                                                        <li><a href=\"#\"></a></li>
                                                        <li><a href=\"#\"></a></li>
                                                        <li><a href=\"#\"></a></li>
                                                        <li>
                                                                <a href=\"\"></a>
                                                                <ul>
                                                                        <li><a href=\"#\"></a></li>
                                                                        <li><a href=\"#\"></a></li>
                                                                        <li><a href=\"#\"></a></li>
                                                                </ul> -->
                                            </li>
                                            <li><a href=\"\">About</a></li>
                                            <li><a href=\"\">Contact Us</a></li>
                                        </ul>
                                    </nav>
                            
                            ";
        } elseif (($this->getContext($context, "type") == "company")) {
            // line 95
            echo "                            
                            ";
        } elseif (($this->getContext($context, "type") == "admin")) {
            // line 97
            echo "                            
                            ";
        } else {
            // line 99
            echo "                            
                            ";
        }
        // line 101
        echo "
                        </section>

                    </div>
                </div>

\t\t\t\t\t";
        // line 107
        $this->displayBlock('body', $context, $blocks);
        // line 108
        echo "            </div>
        </div>
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
        // line 135
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
        // line 149
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

        <!-- Footer Wrapper -->
        <div id=\"footer-wrapper\">

            <!-- Footer -->
            <section id=\"footer\" class=\"container\">
                <div class=\"row\">
                    <div class=\"4u\">
                    </div>

                    <div class=\"4u\">

                        <section>
                            <header>
                                <h2>Vitae tempor lorem</h2>
                            </header>
                            <ul class=\"social\">
                                <li class=\"facebook\"><a href=\"#\" class=\"icon48 icon48-1\">Facebook</a></li>
                                <li class=\"twitter\"><a href=\"http://twitter.com/n33co\" class=\"icon48 icon48-2\">Twitter</a></li>
                                <li class=\"dribbble\"><a href=\"http://dribbble.com/n33\" class=\"icon48 icon48-3\">Dribbble</a></li>
                                <li class=\"linkedin\"><a href=\"#\" class=\"icon48 icon48-4\">LinkedIn</a></li>
                                <li class=\"tumblr\"><a href=\"#\" class=\"icon48 icon48-5\">Tumblr</a></li>
                                <li class=\"googleplus\"><a href=\"#\" class=\"icon48 icon48-6\">Google+</a></li>
                            </ul>
                            <ul class=\"contact\">
                                <li>
                                    <h3>Address</h3>
                                    <p>
                                        Untitled Incorporated<br />
                                        1234 Somewhere Road Suite #5432<br />
                                        Nashville, TN 00000-0000
                                    </p>
                                </li>
                                <li>
                                    <h3>Mail</h3>
                                    <p><a href=\"#\">someone@untitled.tld</a></p>
                                </li>
                                <li>
                                    <h3>Phone</h3>
                                    <p>(800) 000-0000</p>
                                </li>
                            </ul>
                        </section>

                    </div>
                </div>

            </section>
        </div>

    </body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Home";
    }

    // line 107
    public function block_body($context, array $blocks = array())
    {
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
        return array (  330 => 107,  324 => 9,  257 => 149,  240 => 135,  211 => 108,  209 => 107,  201 => 101,  197 => 99,  193 => 97,  189 => 95,  165 => 74,  160 => 71,  158 => 70,  151 => 66,  143 => 60,  134 => 53,  126 => 48,  122 => 46,  120 => 45,  113 => 40,  111 => 39,  102 => 33,  98 => 32,  94 => 31,  90 => 30,  86 => 29,  82 => 28,  78 => 27,  71 => 24,  64 => 21,  60 => 20,  56 => 19,  52 => 18,  48 => 17,  43 => 14,  38 => 13,  31 => 9,  21 => 1,);
    }
}
