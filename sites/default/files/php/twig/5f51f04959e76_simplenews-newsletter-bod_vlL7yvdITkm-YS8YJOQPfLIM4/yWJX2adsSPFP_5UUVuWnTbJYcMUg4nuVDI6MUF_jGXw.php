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

/* modules/contrib/simplenews/templates/simplenews-newsletter-body.html.twig */
class __TwigTemplate_3586720e6edd8308580b13c3d082e503e0ece9a25fb38fc9425fdc784a03bb0b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 45];
        $filters = ["escape" => 42];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
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
        // line 41
        echo "
<h2>";
        // line 42
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</h2>
";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["build"] ?? null)), "html", null, true);
        echo "

";
        // line 45
        if ( !($context["opt_out_hidden"] ?? null)) {
            // line 46
            echo "    ";
            if ((($context["format"] ?? null) == "html")) {
                // line 47
                echo "        <p class=\"newsletter-footer\"><a
                    href=\"[simplenews-subscriber:unsubscribe-url]\">";
                // line 48
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["unsubscribe_text"] ?? null)), "html", null, true);
                echo "</a>
        </p>
    ";
            } else {
                // line 51
                echo "        -- ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["unsubscribe_text"] ?? null)), "html", null, true);
                echo " : [simplenews-subscriber:unsubscribe-url]
    ";
            }
        }
        // line 54
        echo "
";
        // line 55
        if ((($context["key"] ?? null) == "test")) {
            // line 56
            echo "    - - - ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["test_message"] ?? null)), "html", null, true);
            echo " - - -
";
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/simplenews/templates/simplenews-newsletter-body.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 56,  91 => 55,  88 => 54,  81 => 51,  75 => 48,  72 => 47,  69 => 46,  67 => 45,  62 => 43,  58 => 42,  55 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/simplenews/templates/simplenews-newsletter-body.html.twig", "/var/www/cms/drupal/modules/contrib/simplenews/templates/simplenews-newsletter-body.html.twig");
    }
}
