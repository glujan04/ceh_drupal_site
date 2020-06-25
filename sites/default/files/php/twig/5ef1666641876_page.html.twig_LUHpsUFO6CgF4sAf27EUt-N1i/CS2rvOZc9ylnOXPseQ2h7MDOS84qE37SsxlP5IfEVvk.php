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

/* themes/ceh_theme/templates/page.html.twig */
class __TwigTemplate_58277cb4805d3e45e5064358f42dbfef3940647d1f016a02c400d70281268525 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 54, "if" => 66, "block" => 120];
        $filters = ["t" => 57, "escape" => 99, "date" => 219];
        $functions = ["path" => 59];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['t', 'escape', 'date'],
                ['path']
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
        // line 54
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : ("container"));
        // line 56
        echo "<div id=\"cookie_message\" class=\"cookie_message\"> 
 <div class=\"message\"><p><strong>";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Important information about cookies:"));
        echo "</strong><br>";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("The website uses its own cookies to 
improve the browsing experience. The cookies used do not contain any personal information. If you continue browsing the site we will understand that you have accepted their use."));
        // line 58
        echo "</p></div>
 <div class=\"cookie_policy\"><a href=\"";
        // line 59
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("entity.node.canonical", ["node" => 8]));
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Find more information on cookies and how to block them in our Cookies Policy."));
        echo "</a></div>
 <div class=\"\"> <button id=\"accept_cookie\" type=\"button\" class=\"btn btn-accept\">";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Accept"));
        echo "</button>
 <button id=\"close_cookie\" type=\"button\" class=\"btn btn-daccept\">";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Close"));
        echo "</button> </div>
</div>
<header class=\"account-masthead\">
  <div class=\"container\">
    <ul class=\"top_nav pull-right\">
     ";
        // line 66
        if (($context["logged_in"] ?? null)) {
            // line 67
            echo "      ";
            if (($context["is_admin"] ?? null)) {
                // line 68
                echo "      <li><a href=\"/admin\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Admin panel"));
                echo "</a></li>
      ";
            }
            // line 70
            echo "      <li><a href=\"/node/add\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Add content"));
            echo "</a></li>
      <li><a href=\"/user/logout\">";
            // line 71
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Log out"));
            echo "</a></li>
     ";
        } else {
            // line 73
            echo "      <li><a href=\"/user/login\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Log in"));
            echo "</a></li>
     ";
        }
        // line 75
        echo "    </ul>
  </div>
</header>
<header class=\"ceh_header\">
  <nav class=\"navbar\">
    <div class=\"container\">
      <!-- 
Brand and toggle get grouped for better mobile display -->
      <div class=\"navbar-header\">
        <button
          type=\"button\"
          class=\"navbar-toggle collapsed\"
          data-toggle=\"collapse\"
          data-target=\"#bs-nav-navbar-collapse-1\"
          aria-expanded=\"false\"
        >
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"https://catalogoelhierro.idomdev.es";
        // line 96
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("/en/"));
        echo "\"
          ><img
            alt=\"Smart Costa Del Sol\"
            src=\"";
        // line 99
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/images/a2f6392d6a3cb3d9e4cf2c7ac5b7336e.svg\"
        /></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class=\"collapse navbar-collapse\" id=\"bs-nav-navbar-collapse-1\">
        <ul class=\"nav navbar-nav navbar-right ceh_nav\">
          <li><a href=\"https://catalogoelhierro.idomdev.es";
        // line 106
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("/en/"));
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Description of the initiative"));
        echo "</a></li>
          <li><a href=\"https://catalogoelhierro.idomdev.es";
        // line 107
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("/en/"));
        echo "dataset\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Datasets"));
        echo "</a></li>
          <li><a href=\"https://catalogoelhierro.idomdev.es";
        // line 108
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("/en/"));
        echo "sparql\">SPARQL</a></li>
          <li><a href=";
        // line 109
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("entity.node.canonical", ["node" => 10]));
        echo ">API</a></li>
          <li><a href=\"https://catalogoelhierro.idomdev.es";
        // line 110
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("/en/"));
        echo "stats\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Statistics"));
        echo "</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
</header>

";
        // line 120
        $this->displayBlock('main', $context, $blocks);
        // line 170
        echo "<footer class=\"ceh_footer\">
    <div class=\"footer_menu\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-4\">
            <a href=\"https://catalogoelhierro.idomdev.es";
        // line 175
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("/en/"));
        echo "\"><img class=\"footer_logo\" alt=\"costa del sol\" src=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/images/a2f6392d6a3cb3d9e4cf2c7ac5b7336e.svg\"></a>
            <div><strong class=\"text-uppercase text-small\">";
        // line 176
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Quick Access"));
        echo "</strong></div>
            <div class=\"list-group footer_nav\">
             <a href=\"https://catalogoelhierro.idomdev.es";
        // line 178
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("/en/"));
        echo "\" class=\"list-group-item\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Description of the initiative"));
        echo "</a>
             <a href=\"https://catalogoelhierro.idomdev.es";
        // line 179
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("/en/"));
        echo "dataset\" class=\"list-group-item\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Datasets"));
        echo "</a>
             <a href=\"";
        // line 180
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("/en/"));
        echo "noticias\" class=\"list-group-item\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("News, information and updates"));
        echo "</a>
             <a href=\"";
        // line 181
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("/en/"));
        echo "apps\" class=\"list-group-item\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Applications"));
        echo "</a>
           </div>
          </div>
          <div class=\"col-md-4\">
           <div class=\"list-group footer_nav\">
             <a href=\"https://catalogoelhierro.idomdev.es";
        // line 186
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("/en/"));
        echo "stats\" class=\"list-group-item\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Statistics"));
        echo "</a>
             <a href=\"";
        // line 187
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("/en/"));
        echo "documentos\" class=\"list-group-item\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Documentation and help"));
        echo "</a>
             <a href=\"";
        // line 188
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("entity.node.canonical", ["node" => 11]));
        echo "\" class=\"list-group-item\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Terms and licenses"));
        echo "</a>
             <a href=\"";
        // line 189
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("entity.node.canonical", ["node" => 16]));
        echo "\" class=\"list-group-item\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Participate"));
        echo "</a>
             <a href=\"https://catalogoelhierro.idomdev.es";
        // line 190
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("/en/"));
        echo "sparql\" class=\"list-group-item\">SPARQL</a>
             <a href=\"";
        // line 191
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("entity.node.canonical", ["node" => 10]));
        echo "\" class=\"list-group-item\">API</a>
           </div>
          </div>
          <div class=\"col-md-4\">
           <div class=\"list-group footer_nav\">
             <a href=\"";
        // line 196
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("entity.node.canonical", ["node" => 5]));
        echo "\" class=\"list-group-item\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Privacy Policy"));
        echo "</a>
             <a href=\"";
        // line 197
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("entity.node.canonical", ["node" => 8]));
        echo "\" class=\"list-group-item\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Cookie Policy"));
        echo "</a>
           </div>
           <div><br><strong class=\"text-uppercase text-small\">";
        // line 199
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Language"));
        echo "</strong></div>
            <div class=\"dropdown\">
             <button style=\"width:100%; text-align: left;\" class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"language_select\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              ";
        // line 202
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Select"));
        echo "
              <span class=\"caret\" style=\"float: right; margin: 10px;\"></span>
             </button>
             <ul style=\"width:100%;\" class=\"dropdown-menu\" aria-labelledby=\"language_select\">
              <li><a id=\"spanish_link\" href=\"/\">";
        // line 206
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Spanish"));
        echo "</a></li>
              <li><a id=\"english_link\" href=\"/en\">";
        // line 207
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("English"));
        echo "</a></li>
             </ul>
           </div>
           <br>
          </div>
        </div>
      </div>
    </div>
    <div class=\"footer_rights\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-8\">
            <p>";
        // line 219
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Open Data Portal of the Smart Costa del Sol Initiative"));
        echo " © ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("All rights reserved"));
        echo "</p>
          </div>
          <div class=\"col-md-4 links\">
            <p class=\"pull-right\">
              <a href=\"";
        // line 223
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("entity.node.canonical", ["node" => 17]));
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Legal Warning"));
        echo "</a> | <a href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("entity.node.canonical", ["node" => 9]));
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Accessibility"));
        echo "</a>
              <img src=\"";
        // line 224
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/images/aa.png\" alt=\"aa\">
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
";
    }

    // line 120
    public function block_main($context, array $blocks = [])
    {
        // line 121
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " js-quickedit-main-content\">
  <div class=\"homepage-wrapper\">
    <div class=\"row\">

      ";
        // line 126
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 127
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 132
            echo "      ";
        }
        // line 133
        echo "
      ";
        // line 135
        echo "      ";
        // line 136
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 137
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 138
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-12") : ("")), 2 => ((($this->getAttribute(        // line 139
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("col-sm-12") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 140
($context["page"] ?? null), "sidebar_first", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-12") : (""))];
        // line 143
        echo "      <section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">

        ";
        // line 146
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 147
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 150
            echo "        ";
        }
        // line 151
        echo "
        ";
        // line 153
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 154
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 157
            echo "        ";
        }
        // line 158
        echo "
        ";
        // line 160
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 164
        echo "      </section>

    </div>
  </div>
  </div>
";
    }

    // line 127
    public function block_header($context, array $blocks = [])
    {
        // line 128
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 129
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 147
    public function block_highlighted($context, array $blocks = [])
    {
        // line 148
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "</div>
          ";
    }

    // line 154
    public function block_help($context, array $blocks = [])
    {
        // line 155
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
    }

    // line 160
    public function block_content($context, array $blocks = [])
    {
        // line 161
        echo "          <a id=\"main-content\"></a>
          ";
        // line 162
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "themes/ceh_theme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  465 => 162,  462 => 161,  459 => 160,  452 => 155,  449 => 154,  442 => 148,  439 => 147,  432 => 129,  429 => 128,  426 => 127,  417 => 164,  414 => 160,  411 => 158,  408 => 157,  405 => 154,  402 => 153,  399 => 151,  396 => 150,  393 => 147,  390 => 146,  384 => 143,  382 => 140,  381 => 139,  380 => 138,  379 => 137,  378 => 136,  376 => 135,  373 => 133,  370 => 132,  367 => 127,  364 => 126,  356 => 121,  353 => 120,  341 => 224,  331 => 223,  320 => 219,  305 => 207,  301 => 206,  294 => 202,  288 => 199,  281 => 197,  275 => 196,  267 => 191,  263 => 190,  257 => 189,  251 => 188,  245 => 187,  239 => 186,  229 => 181,  223 => 180,  217 => 179,  211 => 178,  206 => 176,  200 => 175,  193 => 170,  191 => 120,  177 => 110,  173 => 109,  169 => 108,  163 => 107,  157 => 106,  147 => 99,  141 => 96,  118 => 75,  112 => 73,  107 => 71,  102 => 70,  96 => 68,  93 => 67,  91 => 66,  83 => 61,  79 => 60,  73 => 59,  70 => 58,  65 => 57,  62 => 56,  60 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ceh_theme/templates/page.html.twig", "/var/www/cms/drupal/themes/ceh_theme/templates/page.html.twig");
    }
}
