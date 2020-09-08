<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/views_bootstrap/templates/views-bootstrap-carousel.html.twig */
class __TwigTemplate_8cffbf9a55c0110f62f09e389c736b946d1978b70a3a5e047f8fe590a91186e1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 27, "for" => 29, "set" => 30];
        $filters = ["escape" => 22, "join" => 31, "t" => 60];
        $functions = ["attach_library" => 22];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 'join', 't'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("views_bootstrap/components"), "html", null, true);
        echo "

<div id=\"";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null)), "html", null, true);
        echo "\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["interval"] ?? null)), "html", null, true);
        echo "\" data-pause=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pause"] ?? null)), "html", null, true);
        echo "\" data-wrap=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrap"] ?? null)), "html", null, true);
        echo "\">

  ";
        // line 27
        echo "  ";
        if (($context["indicators"] ?? null)) {
            // line 28
            echo "    <ol class=\"carousel-indicators\">
      ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["row"]) {
                // line 30
                echo "        ";
                $context["indicator_classes"] = [0 => (($this->getAttribute($context["loop"], "first", [])) ? ("active") : (""))];
                // line 31
                echo "        <li class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["indicator_classes"] ?? null)), " "), "html", null, true);
                echo "\" data-target=\"#";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null)), "html", null, true);
                echo "\" data-slide-to=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"]), "html", null, true);
                echo "\"></li>
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "    </ol>
  ";
        }
        // line 35
        echo "
  ";
        // line 37
        echo "  <div class=\"carousel-inner\" role=\"listbox\">
    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 39
            echo "      ";
            $context["row_classes"] = [0 => "item", 1 => (($this->getAttribute($context["loop"], "first", [])) ? ("active") : (""))];
            // line 40
            echo "      <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["row_classes"] ?? null)), " "), "html", null, true);
            echo "\">
        ";
            // line 41
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "image", [])), "html", null, true);
            echo "
        ";
            // line 42
            if (($this->getAttribute($context["row"], "title", []) || $this->getAttribute($context["row"], "description", []))) {
                // line 43
                echo "          <div class=\"carousel-caption\">
            ";
                // line 44
                if ($this->getAttribute($context["row"], "title", [])) {
                    // line 45
                    echo "              <h3>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "title", [])), "html", null, true);
                    echo "</h3>
            ";
                }
                // line 47
                echo "            ";
                if ($this->getAttribute($context["row"], "description", [])) {
                    // line 48
                    echo "              <p>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "description", [])), "html", null, true);
                    echo "</p>
            ";
                }
                // line 50
                echo "          </div>
        ";
            }
            // line 52
            echo "      </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "  </div>

  ";
        // line 57
        echo "  ";
        if (($context["navigation"] ?? null)) {
            // line 58
            echo "    <a class=\"left carousel-control\" href=\"#";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null)), "html", null, true);
            echo "\" role=\"button\" data-slide=\"prev\">
      <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">";
            // line 60
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Previous"));
            echo "</span>
    </a>
    <a class=\"right carousel-control\" href=\"#";
            // line 62
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null)), "html", null, true);
            echo "\" role=\"button\" data-slide=\"next\">
      <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">";
            // line 64
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Next"));
            echo "</span>
    </a>
  ";
        }
        // line 67
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/views_bootstrap/templates/views-bootstrap-carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 67,  221 => 64,  216 => 62,  211 => 60,  205 => 58,  202 => 57,  198 => 54,  183 => 52,  179 => 50,  173 => 48,  170 => 47,  164 => 45,  162 => 44,  159 => 43,  157 => 42,  153 => 41,  148 => 40,  145 => 39,  128 => 38,  125 => 37,  122 => 35,  118 => 33,  97 => 31,  94 => 30,  77 => 29,  74 => 28,  71 => 27,  60 => 24,  55 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/views_bootstrap/templates/views-bootstrap-carousel.html.twig", "/var/www/cms/drupal/modules/views_bootstrap/templates/views-bootstrap-carousel.html.twig");
    }
}
