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

/* themes/yg_music/templates/page--front.html.twig */
class __TwigTemplate_8efabff82357c45a345d5f4c8b8313fe extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "
<html lang=\"en\">
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
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
        echo "
           <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"fa fa-bars\"></span>
      </button>

      <div class=\"collapse navbar-collapse \" id=\"navbarCollapse\">        
              ";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
        echo "
          
        <div class=\"social-header\">
          <a href=\"";
        // line 86
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 86, $this->source), "html", null, true);
        echo "\"><i class=\"fa fa-facebook-f\"></i></a>
          <a href=\"";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 87, $this->source), "html", null, true);
        echo "\"><i class=\"fa fa-twitter\"></i></a>
          <a href=\"";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null), 88, $this->source), "html", null, true);
        echo "\"><i class=\"fa fa-linkedin\"></i></a>            
          <a href=\"";
        // line 89
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest"] ?? null), 89, $this->source), "html", null, true);
        echo "\"><i class=\"fa fa-pinterest\"></i></a>
        </div>
      </div> 

     </div>
  </nav>
</header>
<!-- End Navbar -->


";
        // line 99
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, true, 99)) {
            // line 100
            echo "    <div class=\"page-header\">
     <div class=\"container\">
        <div id=\"page-title\">
           ";
            // line 103
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>
";
        }
        // line 108
        echo "

          ";
        // line 110
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slider", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
        echo "

";
        // line 113
        $this->displayBlock('main', $context, $blocks);
        // line 182
        echo "

 <!-- Start footer section -->
<footer class=\"dark-wrapper inverse-text\">
    <div class=\"sub-footer\">
      <div class=\"container inner text-center\"> 
        <ul class=\"social social-bg social-s\">
          <li><a href=\"";
        // line 189
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 189, $this->source), "html", null, true);
        echo "\"><i class=\"fa fa-twitter\"></i></a></li>
          <li><a href=\"";
        // line 190
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 190, $this->source), "html", null, true);
        echo "\"><i class=\"fa fa-facebook-f\"></i></a></li>
          <li><a href=\"";
        // line 191
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest"] ?? null), 191, $this->source), "html", null, true);
        echo "\"><i class=\"fa fa-pinterest\"></i></a></li>
          <li><a href=\"";
        // line 192
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["vimeo"] ?? null), 192, $this->source), "html", null, true);
        echo "\"><i class=\"fa fa-vimeo\"></i></a></li>
          <li><a href=\"";
        // line 193
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram"] ?? null), 193, $this->source), "html", null, true);
        echo "\"><i class=\"fa fa-instagram\"></i></a></li>
        </ul>        
        <p>&copy; 2018<span> <a href=\"#\"> YG Music</a></span>. All rights reserved. Developed by <a href=\"https://www.drupaldevelopersstudio.com/\" target=\"_blank\">Drupal Developers Studio</a></p>
      </div> 
    </div>
  </footer>
<!-- End footer Section -->  
</body>";
    }

    // line 113
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 114
        echo "  <div role=\"main\" class=\"blog-container js-quickedit-main-content\">
    
      ";
        // line 117
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 117)) {
            // line 118
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 123
            echo "      ";
        }
        // line 124
        echo "
      ";
        // line 126
        echo "      ";
        // line 127
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 128
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 128) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 128))) ? ("col-sm-6") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 129
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 129) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 129)))) ? ("col-sm-9") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 130
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 130) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 130)))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 131
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 131)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 131)))) ? ("") : (""))];
        // line 134
        echo "      <section class=\"main-content-region-1\" ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 134), 134, $this->source), "html", null, true);
        echo ">

        ";
        // line 137
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 137)) {
            // line 138
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 141
            echo "        ";
        }
        // line 142
        echo "
        ";
        // line 144
        echo "        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 145
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 148
            echo "        ";
        }
        // line 149
        echo "
        ";
        // line 151
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 152
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 155
            echo "        ";
        }
        // line 156
        echo "
        ";
        // line 158
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 158)) {
            // line 159
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 162
            echo "        ";
        }
        // line 163
        echo "
        ";
        // line 165
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 169
        echo "      </section>

      ";
        // line 172
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 172)) {
            // line 173
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 178
            echo "      ";
        }
        // line 179
        echo "  
   </div>
";
    }

    // line 118
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 119
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 120
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 138
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 139
        echo "            <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
        echo "</div>
          ";
    }

    // line 145
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 146
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 146, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 152
    public function block_action_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 153
        echo "            <ul class=\"action-links\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 153, $this->source), "html", null, true);
        echo "</ul>
          ";
    }

    // line 159
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 160
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 165
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 166
        echo "          <a id=\"main-content\"></a>
          ";
        // line 167
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 173
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 174
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 175
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 175), 175, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    public function getTemplateName()
    {
        return "themes/yg_music/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 175,  349 => 174,  345 => 173,  339 => 167,  336 => 166,  332 => 165,  325 => 160,  321 => 159,  314 => 153,  310 => 152,  303 => 146,  299 => 145,  292 => 139,  288 => 138,  281 => 120,  278 => 119,  274 => 118,  268 => 179,  265 => 178,  262 => 173,  259 => 172,  255 => 169,  252 => 165,  249 => 163,  246 => 162,  243 => 159,  240 => 158,  237 => 156,  234 => 155,  231 => 152,  228 => 151,  225 => 149,  222 => 148,  219 => 145,  216 => 144,  213 => 142,  210 => 141,  207 => 138,  204 => 137,  198 => 134,  196 => 131,  195 => 130,  194 => 129,  193 => 128,  192 => 127,  190 => 126,  187 => 124,  184 => 123,  181 => 118,  178 => 117,  174 => 114,  170 => 113,  158 => 193,  154 => 192,  150 => 191,  146 => 190,  142 => 189,  133 => 182,  131 => 113,  126 => 110,  122 => 108,  114 => 103,  109 => 100,  107 => 99,  94 => 89,  90 => 88,  86 => 87,  82 => 86,  76 => 83,  67 => 77,  47 => 59,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_music/templates/page--front.html.twig", "C:\\xampp\\htdocs\\Mar9\\drupal-9.5.3\\themes\\yg_music\\templates\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 99, "block" => 113, "set" => 127);
        static $filters = array("escape" => 77);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'set'],
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
