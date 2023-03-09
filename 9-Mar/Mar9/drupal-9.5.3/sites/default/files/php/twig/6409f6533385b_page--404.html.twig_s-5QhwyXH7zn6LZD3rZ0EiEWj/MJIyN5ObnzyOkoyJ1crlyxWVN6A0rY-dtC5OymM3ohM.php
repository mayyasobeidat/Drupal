<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/yg_music/templates/page--404.html.twig */
class __TwigTemplate_a5808007fe733a1eb049f58e42fb4b00 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <title>YG Music</title>
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <meta name=\"description\" content=\"YG Music is a Free HTMl Template developed by Drupal Developers Studio\">
  <meta name=\"keywords\" content=\"Drupal 8 theme, free drupal theme, free drupal 8 theme, business drupal theme, corporate drupal themes\">  
  </head>

<body>

<!-- Start NavBar -->
<header class=\"main-menu-area\" id=\"main-menu\">
  <nav class=\"navbar navbar-expand-lg navbar-white site-navigation navbar-togglable\">

    <div class=\"container\">
         ";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
        echo "
           <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"fa fa-bars\"></span>
      </button>

      <div class=\"collapse navbar-collapse \" id=\"navbarCollapse\">        
              ";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
        echo "
          
        <div class=\"social-header\">
          <a href=\"";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 85, $this->source), "html", null, true);
        echo "\"><i class=\"fa fa-facebook-f\"></i></a>
          <a href=\"";
        // line 86
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 86, $this->source), "html", null, true);
        echo "\"><i class=\"fa fa-twitter\"></i></a>
          <a href=\"";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null), 87, $this->source), "html", null, true);
        echo "\"><i class=\"fa fa-linkedin\"></i></a>            
          <a href=\"";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest"] ?? null), 88, $this->source), "html", null, true);
        echo "\"><i class=\"fa fa-pinterest\"></i></a>
        </div>
      </div> 

     </div>
  </nav>
</header>
<!-- End Navbar -->
  <!--  Start top banner section  -->
<section id=\"top-banner\" style=\"background-image: url(/yg_music/images/top-banner-1.jpg);\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12 mx-auto text-center top-banner-caption\">
      <h1>404</h1>
      </div>
    </div>
  </div>
  </section>
<!--  End top banner section  -->
  
";
        // line 109
        echo "<div id=\"page-not-found\">
  <div class=\"container\">  
    <div class=\"row\"> 
      <div class=\"col-xs-12 col-md-12 text-center\">
        <div class=\"section-title\">
          <h1>404</h1>
          <h2>Page Not Found</h2>
        </div>        
        <div class=\"page-not-found-text\">
          <p>Sorry! The page you are trying to reach does not exist, or has been moved.</p>
          <a href=\"";
        // line 119
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 119, $this->source), "html", null, true);
        echo "\" class=\"btn btn-custom btn-lg page-scroll\">Back To Home</a>
        </div>
      </div>      
    </div>
  </div>
</div>

 

 <!-- Start footer section -->
<footer class=\"dark-wrapper inverse-text\">
    <div class=\"sub-footer\">
      <div class=\"container inner text-center\"> 
        <ul class=\"social social-bg social-s\">
          <li><a href=\"";
        // line 133
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 133, $this->source), "html", null, true);
        echo "\"><i class=\"fa fa-twitter\"></i></a></li>
          <li><a href=\"";
        // line 134
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 134, $this->source), "html", null, true);
        echo "\"><i class=\"fa fa-facebook-f\"></i></a></li>
          <li><a href=\"";
        // line 135
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest"] ?? null), 135, $this->source), "html", null, true);
        echo "\"><i class=\"fa fa-pinterest\"></i></a></li>
          <li><a href=\"";
        // line 136
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["vimeo"] ?? null), 136, $this->source), "html", null, true);
        echo "\"><i class=\"fa fa-vimeo\"></i></a></li>
          <li><a href=\"";
        // line 137
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram"] ?? null), 137, $this->source), "html", null, true);
        echo "\"><i class=\"fa fa-instagram\"></i></a></li>
        </ul>        
        <p>&copy; 2018<span> <a href=\"#\"> YG Music</a></span>. All rights reserved. Developed by <a href=\"https://www.drupaldevelopersstudio.com/\" target=\"_blank\">Drupal Developers Studio</a></p>
      </div> 
    </div>
  </footer>
<!-- End footer Section -->  
</body>";
    }

    public function getTemplateName()
    {
        return "themes/yg_music/templates/page--404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 137,  149 => 136,  145 => 135,  141 => 134,  137 => 133,  120 => 119,  108 => 109,  85 => 88,  81 => 87,  77 => 86,  73 => 85,  67 => 82,  58 => 76,  39 => 59,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_music/templates/page--404.html.twig", "C:\\xampp\\htdocs\\Mar9\\drupal-9.5.3\\themes\\yg_music\\templates\\page--404.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 76);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
