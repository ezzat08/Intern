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

/* themes/custom/mercury/templates/navigation/breadcrumb.html.twig */
class __TwigTemplate_5c5af90b53cadcd7708c423498b391a6 extends Template
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
        // line 10
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("mercury/breadcrumb"), "html", null, true);
        yield "
";
        // line 11
        if ((($tmp = ($context["breadcrumb"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "  ";
            $context["needs_truncation"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["breadcrumb"] ?? null)) > 3);
            // line 13
            yield "
  ";
            // line 14
            $context["item_classes"] = "flex items-center text-sm md:text-md";
            // line 15
            yield "
  <nav aria-label=\"breadcrumb\" class=\"container mx-auto my-2 w-full md:my-3 2xl:my-4\">
    <h2 id=\"system-breadcrumb\" class=\"sr-only\">";
            // line 17
            yield "Breadcrumb";
            yield "</h2>
    <ol class=\"m-0 flex list-none flex-row items-center gap-1 p-0 font-body leading-none text-foreground md:gap-2\">
      ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumb"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 20
                yield "        ";
                $context["is_first"] = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 20);
                // line 21
                yield "        ";
                $context["is_last_two"] = (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "revindex", [], "any", false, false, true, 21) <= 2);
                // line 22
                yield "        ";
                $context["should_show"] = (( !(($tmp = ($context["needs_truncation"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["is_first"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = ($context["is_last_two"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp));
                // line 23
                yield "
        ";
                // line 24
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 25
                    yield "          <li class=\"gap-1 md:gap-2 2xl:text-base\">
            <a href=\"";
                    // line 26
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 26), "html", null, true);
                    yield "\" class=\"flex items-center no-underline hover:opacity-80\">
              ";
                    // line 27
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@mercury/components/icon/icon.twig", ["weight" => "bold", "icon" => "house", "icon_size" => "extra-small"]));
                    // line 36
                    yield "
              <span class=\"sr-only\">";
                    // line 37
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 37), "html", null, true);
                    yield "</span>
            </a>
          </li>
        ";
                }
                // line 41
                yield "
        ";
                // line 43
                yield "        ";
                if (((($tmp = ($context["needs_truncation"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 43) == 2))) {
                    // line 44
                    yield "          <li aria-hidden=\"true\">
            ";
                    // line 45
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@mercury/components/icon/icon.twig", ["weight" => "bold", "icon" => "dots-three", "icon_size" => "extra-small"]));
                    // line 54
                    yield "
          </li>
          <li aria-hidden=\"true\">
            ";
                    // line 57
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@mercury/components/icon/icon.twig", ["weight" => "bold", "icon" => "caret-right", "icon_size" => "extra-small"]));
                    // line 66
                    yield "
          </li>
        ";
                }
                // line 69
                yield "
        ";
                // line 71
                yield "        ";
                if ((($tmp = ($context["should_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 72
                    yield "          ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 72)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 73
                        yield "            <li class=\"";
                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["item_classes"] ?? null), "html", null, true);
                        yield " active\" aria-current=\"page\">";
                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 73), "html", null, true);
                        yield "</li>
          ";
                    } elseif (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                     // line 74
$context["item"], "url", [], "any", false, false, true, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = ($context["is_first"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                        // line 75
                        yield "            <li class=\"";
                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["item_classes"] ?? null), "html", null, true);
                        yield "\">
              <a href=\"";
                        // line 76
                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 76), "html", null, true);
                        yield "\" class=\"no-underline hover:underline hover:underline-offset-2 focus:underline\">";
                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 76), "html", null, true);
                        yield "</a>
            </li>
          ";
                    }
                    // line 79
                    yield "
          ";
                    // line 81
                    yield "          ";
                    if (( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (( !(($tmp = ($context["needs_truncation"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["is_last_two"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = ($context["is_first"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)))) {
                        // line 82
                        yield "            <li aria-hidden=\"true\">
              ";
                        // line 83
                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "@mercury/components/icon/icon.twig", ["weight" => "bold", "icon" => "caret-right", "icon_size" => "extra-small"]));
                        // line 92
                        yield "
            </li>
          ";
                    }
                    // line 95
                    yield "        ";
                }
                // line 96
                yield "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 97
            yield "    </ol>
  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["breadcrumb", "loop"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/mercury/templates/navigation/breadcrumb.html.twig";
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
        return array (  205 => 97,  190 => 96,  187 => 95,  182 => 92,  180 => 83,  177 => 82,  174 => 81,  171 => 79,  163 => 76,  158 => 75,  156 => 74,  149 => 73,  146 => 72,  143 => 71,  140 => 69,  135 => 66,  133 => 57,  128 => 54,  126 => 45,  123 => 44,  120 => 43,  117 => 41,  110 => 37,  107 => 36,  105 => 27,  101 => 26,  98 => 25,  96 => 24,  93 => 23,  90 => 22,  87 => 21,  84 => 20,  67 => 19,  62 => 17,  58 => 15,  56 => 14,  53 => 13,  50 => 12,  48 => 11,  44 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/mercury/templates/navigation/breadcrumb.html.twig", "/var/www/html/web/themes/custom/mercury/templates/navigation/breadcrumb.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 11, "set" => 12, "for" => 19];
        static $filters = ["escape" => 10, "length" => 12];
        static $functions = ["attach_library" => 10, "include" => 28];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if", 1 => "set", 2 => "for"],
                [0 => "escape", 1 => "length"],
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
