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

/* themes/yg_fitness_gym/templates/page--front.html.twig */
class __TwigTemplate_f034372e8099a01c2816dc39ba9dd1dd extends \Twig\Template
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
        echo "
 
";
        // line 61
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 61), "fluid_container", [], "any", false, false, true, 61)) ? ("container-fluid") : (""));
        // line 62
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 62) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 62))) {
            // line 63
            echo "  
  ";
            // line 64
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 64)) {
                // line 65
                echo "
    <div id=\"fh5co-wrapper\">
    <div id=\"fh5co-page\">
    <div id=\"fh5co-header\">
    <div id=\"Home\">
      <header id=\"fh5co-header-section\">
        <div class=\"container\">
          <div class=\"nav-header\">
            <a href=\"javascript:void(0)\" class=\"js-fh5co-nav-toggle fh5co-nav-toggle\"><i></i></a>
            ";
                // line 74
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                echo "
            <!-- START #fh5co-menu-wrap -->
            <nav id=\"fh5co-menu-wrap\" role=\"navigation\">
             ";
                // line 77
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                echo "
            
            </nav>
          </div>
        </div>
      </header>   
    </div>
    </div>
   


      ";
            }
            // line 88
            echo "  
";
        }
        // line 90
        echo "
";
        // line 92
        $this->displayBlock('main', $context, $blocks);
        // line 174
        echo "<footer id=\"Contact\">
      <div id=\"footer\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-4 animate-box\">
             ";
        // line 179
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "aboutus", [], "any", false, false, true, 179), 179, $this->source), "html", null, true);
        echo "
            </div>

            <div class=\"col-md-4 animate-box\">
             ";
        // line 183
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "address", [], "any", false, false, true, 183), 183, $this->source), "html", null, true);
        echo "
            </div>
            <div class=\"col-md-4 animate-box\">
              <h3 class=\"section-title\">Drop us a line</h3>
              ";
        // line 187
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contact", [], "any", false, false, true, 187), 187, $this->source), "html", null, true);
        echo "
            </div>
          </div>
          <div class=\"row copy-right\">
              ";
        // line 191
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 191), 191, $this->source), "html", null, true);
        echo "
          </div>
        </div>
      </div>
    </footer>




  </div>
</div>";
    }

    // line 92
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "  <div role=\"main\" class=\"blog-container js-quickedit-main-content\">
    <div class=\"\">


      ";
        // line 98
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 98)) {
            // line 99
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 104
            echo "      ";
        }
        // line 105
        echo "
      ";
        // line 107
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 107)) {
            // line 108
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 113
            echo "      ";
        }
        // line 114
        echo "
      ";
        // line 116
        echo "      ";
        // line 117
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 118
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 118) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 118))) ? ("col-sm-6") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 119
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 119) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 119)))) ? ("col-sm-9") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 120
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 120) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 120)))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 121
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 121)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 121)))) ? ("") : (""))];
        // line 124
        echo "
      
      <section class=\"main-content-region-1\" ";
        // line 126
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 126), 126, $this->source), "html", null, true);
        echo ">

        ";
        // line 129
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 129)) {
            // line 130
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 133
            echo "        ";
        }
        // line 134
        echo "
        ";
        // line 136
        echo "        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 137
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 140
            echo "        ";
        }
        // line 141
        echo "
        ";
        // line 143
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 144
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 147
            echo "        ";
        }
        // line 148
        echo "
        ";
        // line 150
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 150)) {
            // line 151
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 154
            echo "        ";
        }
        // line 155
        echo "
        ";
        // line 157
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 161
        echo "      </section>

      ";
        // line 164
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 164)) {
            // line 165
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 170
            echo "      ";
        }
        // line 171
        echo "   </div>
   </div>
";
    }

    // line 99
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            
          </div>
        ";
    }

    // line 108
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 110
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 130
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        echo "            <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
        echo "</div>
          ";
    }

    // line 137
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 138, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 144
    public function block_action_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 145
        echo "            <ul class=\"action-links\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 145, $this->source), "html", null, true);
        echo "</ul>
          ";
    }

    // line 151
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 152
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 152), 152, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 157
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 158
        echo "          <a id=\"main-content\"></a>
          ";
        // line 159
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 165
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 166
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 167
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    public function getTemplateName()
    {
        return "themes/yg_fitness_gym/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 167,  352 => 166,  348 => 165,  342 => 159,  339 => 158,  335 => 157,  328 => 152,  324 => 151,  317 => 145,  313 => 144,  306 => 138,  302 => 137,  295 => 131,  291 => 130,  284 => 110,  281 => 109,  277 => 108,  270 => 100,  266 => 99,  260 => 171,  257 => 170,  254 => 165,  251 => 164,  247 => 161,  244 => 157,  241 => 155,  238 => 154,  235 => 151,  232 => 150,  229 => 148,  226 => 147,  223 => 144,  220 => 143,  217 => 141,  214 => 140,  211 => 137,  208 => 136,  205 => 134,  202 => 133,  199 => 130,  196 => 129,  191 => 126,  187 => 124,  185 => 121,  184 => 120,  183 => 119,  182 => 118,  181 => 117,  179 => 116,  176 => 114,  173 => 113,  170 => 108,  167 => 107,  164 => 105,  161 => 104,  158 => 99,  155 => 98,  149 => 93,  145 => 92,  130 => 191,  123 => 187,  116 => 183,  109 => 179,  102 => 174,  100 => 92,  97 => 90,  93 => 88,  78 => 77,  72 => 74,  61 => 65,  59 => 64,  56 => 63,  54 => 62,  52 => 61,  48 => 59,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_fitness_gym/templates/page--front.html.twig", "C:\\xampp\\htdocs\\Mar23\\drupal-9.5.3\\themes\\yg_fitness_gym\\templates\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 61, "if" => 62, "block" => 92);
        static $filters = array("escape" => 74);
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
