<?php

/* sitereservationBundle:Site:sucompany.html.twig */
class __TwigTemplate_0c74c7977a7c793d7e6e48b061dbf001 extends Twig_Template
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
\t\t\t\t\t\t\t\t\t<div  style=\"position:relative;left:375px;\">
\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sitereservation_submitcompanysu"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<div><div style=\"width:150px;float:left;\">Name</div><div><input type=\"text\" name=\"Name\"></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div><div style=\"width:150px;float:left;\">Email</div><div><input type=\"email\" name=\"email\"></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div><div style=\"width:150px;float:left;\">Password</div><div><input type=\"password\" name=\"passwd\"></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div><div style=\"width:150px;float:left;\">ConfirmPassword</div><div><input type=\"password\" name=\"confPasswd\"></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div><div style=\"width:150px;float:left;\">Website</div><div><input type=\"url\" name=\"website\"></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div><div style=\"width:150px;float:left;\">Activity</div><div><select name=\"activity\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Travel</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">Tourism</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">Shopping</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">Resturant</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div><div style=\"position:relative;left:100px;top:20px;\"><input type=\"submit\" class=\"button\" value=\"Sign Up\"></div></div>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "sitereservationBundle:Site:sucompany.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  38 => 4,  35 => 3,  29 => 2,);
    }
}
