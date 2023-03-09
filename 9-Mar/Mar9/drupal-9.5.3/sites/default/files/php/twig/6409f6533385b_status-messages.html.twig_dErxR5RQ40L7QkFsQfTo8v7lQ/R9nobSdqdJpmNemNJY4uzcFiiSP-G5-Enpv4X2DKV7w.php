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

/* themes/zurb_foundation/templates/status-messages.html.twig */
class __TwigTemplate_fd333b8c4969ab1eb7b2e629c3d4dfbd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        if (($context["zurb_foundation_status_in_reveal"] ?? null)) {
            // line 25
            echo "  <div id=\"status-messages\" data-reveal class=\"reveal\" role=\"dialog\" data-animation-in=\"fade-in\" data-animation-out=\"fade-out\">
";
        }
        // line 27
        echo "
  <div data-drupal-messages>
  ";
        // line 29
        $this->displayBlock('messages', $context, $blocks);
        // line 75
        echo "  </div>

";
        // line 77
        if (($context["zurb_foundation_status_in_reveal"] ?? null)) {
            // line 78
            echo "  <button class=\"close-button\" aria-label=\"Dismiss alert\" type=\"button\" data-close>
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>
";
        }
    }

    // line 29
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 31
            echo "    ";
            // line 32
            $context["classes"] = [0 => "zurb-foundation-callout", 1 => "callout", 2 => "messages", 3 => ("messages--" . $this->sandbox->ensureToStringAllowed(            // line 36
$context["type"], 36, $this->source)), 4 => (((($__internal_compile_0 =             // line 37
($context["zurb_status_class_mapping"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["type"]] ?? null) : null)) ? ((($__internal_compile_1 = ($context["zurb_status_class_mapping"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["type"]] ?? null) : null)) : (""))];
            // line 40
            echo "    <div role=\"contentinfo\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["type"]] ?? null) : null), 40, $this->source), "html", null, true);
            echo "\" data-closable=\"fade-out\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 40), 40, $this->source), "role", "aria-label", "data-closable"), "html", null, true);
            echo ">

      ";
            // line 42
            if ( !($context["zurb_foundation_status_in_reveal"] ?? null)) {
                // line 43
                echo "        <button class=\"close-button\" aria-label=\"Dismiss alert\" type=\"button\" data-close>
          <span aria-hidden=\"true\">&times;</span>
        </button>
      ";
            }
            // line 47
            echo "
      ";
            // line 48
            if (($context["type"] == "error")) {
                // line 49
                echo "        <div role=\"alert\">
      ";
            }
            // line 51
            echo "
        ";
            // line 52
            if ((($__internal_compile_3 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["type"]] ?? null) : null)) {
                // line 53
                echo "          <h2 class=\"show-for-sr\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["type"]] ?? null) : null), 53, $this->source), "html", null, true);
                echo "</h2>
        ";
            }
            // line 55
            echo "
        ";
            // line 56
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 57
                echo "          <ul class=\"messages__list\">
            ";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 59
                    echo "              <li class=\"messages__item\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 59, $this->source), "html", null, true);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "          </ul>
        ";
            } else {
                // line 63
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"], 63, $this->source)), "html", null, true);
                echo "
        ";
            }
            // line 65
            echo "
      ";
            // line 66
            if (($context["type"] == "error")) {
                // line 67
                echo "        </div>
      ";
            }
            // line 69
            echo "    </div>

    ";
            // line 72
            echo "    ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 72);
            // line 73
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "  ";
    }

    public function getTemplateName()
    {
        return "themes/zurb_foundation/templates/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 74,  165 => 73,  162 => 72,  158 => 69,  154 => 67,  152 => 66,  149 => 65,  143 => 63,  139 => 61,  130 => 59,  126 => 58,  123 => 57,  121 => 56,  118 => 55,  112 => 53,  110 => 52,  107 => 51,  103 => 49,  101 => 48,  98 => 47,  92 => 43,  90 => 42,  82 => 40,  80 => 37,  79 => 36,  78 => 32,  76 => 31,  71 => 30,  67 => 29,  58 => 78,  56 => 77,  52 => 75,  50 => 29,  46 => 27,  42 => 25,  40 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/zurb_foundation/templates/status-messages.html.twig", "C:\\xampp\\htdocs\\Mar9\\drupal-9.5.3\\themes\\zurb_foundation\\templates\\status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 24, "block" => 29, "for" => 30, "set" => 32);
        static $filters = array("escape" => 40, "without" => 40, "length" => 56, "first" => 63);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'for', 'set'],
                ['escape', 'without', 'length', 'first'],
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
