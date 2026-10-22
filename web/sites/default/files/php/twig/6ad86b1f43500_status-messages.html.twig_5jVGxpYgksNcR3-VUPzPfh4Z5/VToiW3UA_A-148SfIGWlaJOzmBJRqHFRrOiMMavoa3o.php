<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/mercury/templates/misc/status-messages.html.twig */
class __TwigTemplate_fbaba7a903ac260145610ec5c399f183 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("mercury/messages"), "html", null, true);
        yield "
<div data-drupal-messages class=\"fixed bottom-4 z-50 flex flex-col gap-3 px-4 sm:right-4 sm:max-w-lg sm:p-0 md:max-w-xl xl:max-w-2xl\">
  ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 25
            yield "    ";
            if (($context["type"] == "status")) {
                // line 26
                yield "      ";
                $context["type_class"] = "bg-green-100 text-green-900";
                // line 27
                yield "      ";
                $context["type_icon"] = "check-circle";
                // line 28
                yield "      ";
                $context["close_button_class"] = "text-green-700 hover:text-green-900 hover:bg-green-200";
                // line 29
                yield "    ";
            } elseif (($context["type"] == "info")) {
                // line 30
                yield "      ";
                $context["type_class"] = "bg-blue-100 text-blue-900";
                // line 31
                yield "      ";
                $context["type_icon"] = "info";
                // line 32
                yield "      ";
                $context["close_button_class"] = "text-blue-700 hover:text-blue-900 hover:bg-blue-200";
                // line 33
                yield "    ";
            } elseif (($context["type"] == "warning")) {
                // line 34
                yield "      ";
                $context["type_class"] = "bg-yellow-100 text-yellow-900";
                // line 35
                yield "      ";
                $context["type_icon"] = "warning";
                // line 36
                yield "      ";
                $context["close_button_class"] = "text-yellow-700 hover:text-yellow-900 hover:bg-yellow-200";
                // line 37
                yield "    ";
            } elseif (($context["type"] == "error")) {
                // line 38
                yield "      ";
                $context["type_class"] = "bg-red-100 text-red-900";
                // line 39
                yield "      ";
                $context["type_icon"] = "x-circle";
                // line 40
                yield "      ";
                $context["close_button_class"] = "text-red-700 hover:text-red-900 hover:bg-red-200";
                // line 41
                yield "    ";
            }
            // line 42
            yield "    <div
      class=\"message-item flex max-h-[calc(100vh-12rem)] flex-row items-start gap-2 overflow-y-auto rounded-md p-4 shadow-lg transition-all duration-300 ease-out ";
            // line 43
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env,             // line 44
($context["type_class"] ?? null), "html", null, true);
            // line 45
            yield "\"
      data-message-item
      role=\"contentinfo\"
      aria-label=\"";
            // line 48
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v0 = ($context["status_headings"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[(($_v1 = $context["type"]) instanceof \Stringable ? (string) $_v1 : $_v1)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["status_headings"] ?? null), $context["type"], [], "array", false, false, true, 48)), "html", null, true);
            yield "\"
    >
      <div class=\"message-header flex shrink-0\">
        <div class=\"message-";
            // line 51
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["type"], "html", null, true);
            yield "-icon my-auto\">
          ";
            // line 52
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@mercury/components/icon/icon.twig", ["icon" =>             // line 56
($context["type_icon"] ?? null), "icon_size" => "medium"], false));
            // line 61
            yield "
        </div>
        <h2 class=\"visually-hidden\">";
            // line 63
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v2 = ($context["status_headings"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2[(($_v3 = $context["type"]) instanceof \Stringable ? (string) $_v3 : $_v3)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["status_headings"] ?? null), $context["type"], [], "array", false, false, true, 63)), "html", null, true);
            yield "</h2>
      </div>
      <div class=\"message-body my-auto grow text-base xl:text-lg [&_a]:underline [&_a]:underline-offset-2\">
        ";
            // line 66
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["messages"]) > 1)) {
                // line 67
                yield "          <ul class=\"flex list-none flex-col gap-2 px-0\">
            ";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 69
                    yield "              <li>";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["message"], "html", null, true);
                    yield "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 71
                yield "          </ul>
        ";
            } else {
                // line 73
                yield "          ";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["messages"]), "html", null, true);
                yield "
        ";
            }
            // line 75
            yield "      </div>
      <button
        type=\"button\"
        class=\"shrink-0 cursor-pointer rounded p-1 transition-colors ";
            // line 78
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["close_button_class"] ?? null), "html", null, true);
            yield "\"
        data-message-close
        aria-label=\"";
            // line 80
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Close message"));
            yield "\"
      >
        ";
            // line 82
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@mercury/components/icon/icon.twig", ["icon" => "x", "icon_size" => "small"], false));
            // line 91
            yield "
      </button>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 95
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["message_list", "status_headings"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/mercury/templates/misc/status-messages.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  194 => 95,  184 => 91,  182 => 82,  177 => 80,  172 => 78,  167 => 75,  161 => 73,  157 => 71,  147 => 69,  143 => 68,  140 => 67,  138 => 66,  132 => 63,  128 => 61,  126 => 56,  125 => 52,  121 => 51,  115 => 48,  110 => 45,  108 => 44,  107 => 43,  104 => 42,  101 => 41,  98 => 40,  95 => 39,  92 => 38,  89 => 37,  86 => 36,  83 => 35,  80 => 34,  77 => 33,  74 => 32,  71 => 31,  68 => 30,  65 => 29,  62 => 28,  59 => 27,  56 => 26,  53 => 25,  49 => 24,  44 => 22,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/mercury/templates/misc/status-messages.html.twig", "/var/www/html/web/themes/custom/mercury/templates/misc/status-messages.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 24, "if" => 25, "set" => 26];
        static $filters = ["escape" => 22, "length" => 66, "first" => 73, "t" => 80];
        static $functions = ["attach_library" => 22, "include" => 53];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "for", 1 => "if", 2 => "set"],
                [0 => "escape", 1 => "length", 2 => "first", 3 => "t"],
                [0 => "attach_library", 1 => "include"],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}
