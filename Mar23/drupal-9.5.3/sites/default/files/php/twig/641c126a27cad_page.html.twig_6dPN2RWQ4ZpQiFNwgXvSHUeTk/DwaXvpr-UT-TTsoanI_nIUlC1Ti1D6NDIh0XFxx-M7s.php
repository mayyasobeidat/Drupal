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

/* themes/yg_fitness_gym/templates/page.html.twig */
class __TwigTemplate_540ffe5ee147fb01fceff67e3f606eab extends \Twig\Template
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
            'header' => [$this, 'block_header'],
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
        echo "<body id=\"page-top\">
  
  
  

 
";
        // line 65
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 65), "fluid_container", [], "any", false, false, true, 65)) ? ("container-fluid") : (""));
        // line 66
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 66) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 66))) {
            // line 67
            echo "  
  ";
            // line 68
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 68)) {
                // line 69
                echo "
    <div id=\"fh5co-wrapper\">
    <div id=\"fh5co-page\">
    <div id=\"fh5co-header\">
    <div id=\"Home\">
      <header id=\"fh5co-header-section\">
        <div class=\"container\">
          <div class=\"nav-header\">
            <a href=\"#\" class=\"js-fh5co-nav-toggle fh5co-nav-toggle\"><i></i></a>
            ";
                // line 78
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
                echo "
            <!-- START #fh5co-menu-wrap -->
            <nav id=\"fh5co-menu-wrap\" role=\"navigation\">
             ";
                // line 81
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
                echo "
            
            </nav>
          </div>
        </div>
      </header>   
    </div>
    </div>
   


      ";
            }
            // line 92
            echo "  
";
        }
        // line 94
        echo "
";
        // line 96
        $this->displayBlock('main', $context, $blocks);
        // line 176
        echo "

  




<footer>
      <div id=\"footer\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-4 animate-box\">
             ";
        // line 188
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "aboutus", [], "any", false, false, true, 188), 188, $this->source), "html", null, true);
        echo "
            </div>

            <div class=\"col-md-4 animate-box\">
             ";
        // line 192
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "address", [], "any", false, false, true, 192), 192, $this->source), "html", null, true);
        echo "
            </div>
            <div class=\"col-md-4 animate-box\">
              <h3 class=\"section-title\">Drop us a line</h3>
              ";
        // line 196
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contact", [], "any", false, false, true, 196), 196, $this->source), "html", null, true);
        echo "
            </div>
          </div>
          <div class=\"row copy-right\">
              ";
        // line 200
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 200), 200, $this->source), "html", null, true);
        echo "
          </div>
        </div>
      </div>
    </footer>




  </div>
</div>

</body>";
    }

    // line 96
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "  <div role=\"main\" class=\"blog-container js-quickedit-main-content\">
    <div class=\"\">


      ";
        // line 102
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 102)) {
            // line 103
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 108
            echo "      ";
        }
        // line 109
        echo "
      ";
        // line 111
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 111)) {
            // line 112
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 117
            echo "      ";
        }
        // line 118
        echo "
      ";
        // line 120
        echo "      ";
        // line 121
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 122
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 122) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 122))) ? ("col-sm-6") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 123
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 123) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 123)))) ? ("col-sm-9") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 124
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 124) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 124)))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 125
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 125)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 125)))) ? ("") : (""))];
        // line 128
        echo "      <section class=\"main-content-region-1\" ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 128), 128, $this->source), "html", null, true);
        echo ">

        ";
        // line 131
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 131)) {
            // line 132
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 135
            echo "        ";
        }
        // line 136
        echo "
        ";
        // line 138
        echo "        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 139
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 142
            echo "        ";
        }
        // line 143
        echo "
        ";
        // line 145
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 146
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 149
            echo "        ";
        }
        // line 150
        echo "
        ";
        // line 152
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 152)) {
            // line 153
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 156
            echo "        ";
        }
        // line 157
        echo "
        ";
        // line 159
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 163
        echo "      </section>

      ";
        // line 166
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 166)) {
            // line 167
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 172
            echo "      ";
        }
        // line 173
        echo "   </div>
   </div>
";
    }

    // line 103
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 104
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            
          </div>
        ";
    }

    // line 112
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 113
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 114
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 132
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 133
        echo "            <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
        echo "</div>
          ";
    }

    // line 139
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 140
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 140, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 146
    public function block_action_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 147
        echo "            <ul class=\"action-links\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 147, $this->source), "html", null, true);
        echo "</ul>
          ";
    }

    // line 153
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 154
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 159
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 160
        echo "          <a id=\"main-content\"></a>
          ";
        // line 161
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 167
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 168
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 169
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    public function getTemplateName()
    {
        return "themes/yg_fitness_gym/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 169,  362 => 168,  358 => 167,  352 => 161,  349 => 160,  345 => 159,  338 => 154,  334 => 153,  327 => 147,  323 => 146,  316 => 140,  312 => 139,  305 => 133,  301 => 132,  294 => 114,  291 => 113,  287 => 112,  280 => 104,  276 => 103,  270 => 173,  267 => 172,  264 => 167,  261 => 166,  257 => 163,  254 => 159,  251 => 157,  248 => 156,  245 => 153,  242 => 152,  239 => 150,  236 => 149,  233 => 146,  230 => 145,  227 => 143,  224 => 142,  221 => 139,  218 => 138,  215 => 136,  212 => 135,  209 => 132,  206 => 131,  200 => 128,  198 => 125,  197 => 124,  196 => 123,  195 => 122,  194 => 121,  192 => 120,  189 => 118,  186 => 117,  183 => 112,  180 => 111,  177 => 109,  174 => 108,  171 => 103,  168 => 102,  162 => 97,  158 => 96,  141 => 200,  134 => 196,  127 => 192,  120 => 188,  106 => 176,  104 => 96,  101 => 94,  97 => 92,  82 => 81,  76 => 78,  65 => 69,  63 => 68,  60 => 67,  58 => 66,  56 => 65,  48 => 59,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_fitness_gym/templates/page.html.twig", "C:\\xampp\\htdocs\\Mar23\\drupal-9.5.3\\themes\\yg_fitness_gym\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 65, "if" => 66, "block" => 96);
        static $filters = array("escape" => 78);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
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
