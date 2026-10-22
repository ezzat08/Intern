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

/* @mercury/includes/pager.twig */
class __TwigTemplate_a492f6b30d9e3e135bd7bcf0df36d4ba extends Template
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
        // line 1
        $context["pager_page"] = Twig\Extra\Html\HtmlExtension::htmlCva(["flex h-10 min-h-10 w-10 min-w-10 shrink-0 items-center justify-center rounded", "text-sm font-semibold tabular-nums md:text-base", "transition-colors duration-300"], ["isCurrent" => ["yes" => "bg-foreground font-bold text-white", "no" => "hover:bg-muted"]]);
        // line 16
        $context["list_classes"] = ["pager__items", "js-pager__items", "flex list-none items-center justify-center gap-1"];
        // line 17
        $context["pager_nav_link_classes"] = "flex items-center justify-center gap-1 py-2 rounded hover:bg-muted transition-colors duration-300";
        // line 18
        $context["pager_icon_link_classes"] = "pager__icon flex shrink-0 items-center justify-center";
        // line 19
        $context["pager_icon_ellipsis_classes"] = "pager__icon flex shrink-0 items-center justify-center";
        // line 20
        $context["var"] = ($context["value"] ?? null);
        // line 21
        $context["classes"] = ["pager", "my-4", "font-medium"];
        // line 22
        $context["ellipsis_container_classes"] = ["flex items-center justify-center rounded px-2 py-1.5"];
        // line 23
        yield "
";
        // line 24
        if ((($tmp = ($context["items"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "  <nav class=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["classes"] ?? null), " "), "html", null, true);
            yield "\" role=\"navigation\" aria-labelledby=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
            yield "\">
    ";
            // line 26
            if ((($context["pagination_heading_level"] ?? null) == "h1")) {
                // line 27
                yield "      <h1 id=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
                yield "\" class=\"sr-only\">";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
                yield "</h1>
    ";
            } elseif ((            // line 28
($context["pagination_heading_level"] ?? null) == "h2")) {
                // line 29
                yield "      <h2 id=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
                yield "\" class=\"sr-only\">";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
                yield "</h2>
    ";
            } elseif ((            // line 30
($context["pagination_heading_level"] ?? null) == "h3")) {
                // line 31
                yield "      <h3 id=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
                yield "\" class=\"sr-only\">";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
                yield "</h3>
    ";
            } elseif ((            // line 32
($context["pagination_heading_level"] ?? null) == "h4")) {
                // line 33
                yield "      <h4 id=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
                yield "\" class=\"sr-only\">";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
                yield "</h4>
    ";
            } elseif ((            // line 34
($context["pagination_heading_level"] ?? null) == "h5")) {
                // line 35
                yield "      <h5 id=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
                yield "\" class=\"sr-only\">";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
                yield "</h5>
    ";
            } elseif ((            // line 36
($context["pagination_heading_level"] ?? null) == "h6")) {
                // line 37
                yield "      <h6 id=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
                yield "\" class=\"sr-only\">";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
                yield "</h6>
    ";
            } else {
                // line 39
                yield "      <h2 id=\"";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
                yield "\" class=\"sr-only\">";
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
                yield "</h2>
    ";
            }
            // line 41
            yield "    <ul class=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["list_classes"] ?? null), " "), "html", null, true);
            yield "\">
      ";
            // line 43
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 44
                yield "        <li>
          <a
            href=\"";
                // line 46
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 46), "href", [], "any", false, false, true, 46), "html", null, true);
                yield "\"
            title=\"";
                // line 47
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
                yield "\"
            ";
                // line 48
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 48), "attributes", [], "any", false, false, true, 48), "addClass", [($context["pager_nav_link_classes"] ?? null), "ps-1 pe-2"], "method", false, false, true, 48), "href", "title"), "html", null, true);
                yield "
          >
            <span class=\"sr-only\">";
                // line 50
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
                yield "</span>
            <span aria-hidden=\"true\" class=\"pager__list-item text-sm whitespace-nowrap md:text-base\">
              <div class=\"flex gap-1\">
                <span class=\"";
                // line 53
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pager_icon_link_classes"] ?? null), "html", null, true);
                yield " translate-y-0.5\" aria-hidden=\"true\">
                  ";
                // line 54
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "mercury:icon", ["icon" => "caret-double-left", "icon_size" => "extra-small"]));
                // line 62
                yield "
                </span>
              </div>
            </span>
          </a>
        </li>
      ";
            }
            // line 69
            yield "      ";
            // line 70
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 71
                yield "        <li class=\"pager__item pager__item--previous\">
          <a
            href=\"";
                // line 73
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 73), "href", [], "any", false, false, true, 73), "html", null, true);
                yield "\"
            title=\"";
                // line 74
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                yield "\"
            rel=\"prev\"
            class=\"";
                // line 76
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pager_nav_link_classes"] ?? null), "html", null, true);
                yield " ml-2 pe-1 lg:pe-2\"
            ";
                // line 77
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 77), "attributes", [], "any", false, false, true, 77), "href", "title", "rel"), "html", null, true);
                yield "
          >
            <span class=\"sr-only\">";
                // line 79
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                yield "</span>
            <span class=\"";
                // line 80
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pager_icon_link_classes"] ?? null), "html", null, true);
                yield "\" aria-hidden=\"true\">
              ";
                // line 81
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "mercury:icon", ["icon" => "caret-left", "icon_size" => "extra-small"]));
                // line 89
                yield "
            </span>
          </a>
        </li>
      ";
            }
            // line 94
            yield "      ";
            // line 95
            yield "
      ";
            // line 96
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 96)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 97
                yield "        <li>
          <span class=\"";
                // line 98
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["ellipsis_container_classes"] ?? null), " "), "html", null, true);
                yield "\" role=\"presentation\">
            <span class=\"";
                // line 99
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pager_icon_ellipsis_classes"] ?? null), "html", null, true);
                yield "\" aria-hidden=\"true\">
              ";
                // line 100
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "mercury:icon", ["icon" => "dots-three", "icon_size" => "extra-small"]));
                // line 108
                yield "
            </span>
          </span>
        </li>
      ";
            }
            // line 113
            yield "      ";
            // line 114
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 114));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 115
                yield "        <li>
          ";
                // line 116
                $context["is_current_page"] = (((($context["current"] ?? null) == $context["key"])) ? ("yes") : ("no"));
                // line 117
                yield "          <a
            href=\"";
                // line 118
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 118), "html", null, true);
                yield "\"
            title=\"";
                // line 119
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
                yield "\"
            ";
                // line 120
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 120), "addClass", [CoreExtension::getAttribute($this->env, $this->source,                 // line 121
($context["pager_page"] ?? null), "apply", [["isCurrent" =>                 // line 122
($context["is_current_page"] ?? null)]], "method", false, false, true, 121)], "method", false, false, true, 120), "href", "title"), "html", null, true);
                // line 124
                yield "
          >
            <span class=\"sr-only\">";
                // line 126
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Page"));
                yield "</span>
            <span class=\"pager__list-item text-sm whitespace-nowrap md:text-base\">";
                // line 127
                if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
                    if (\array_key_exists("canvas_slot_ids", $context) && \in_array("key", $context["canvas_slot_ids"], TRUE)) {
                        yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "start", $context["canvas_uuid"], "key");
                    } else {
                        yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "start", $context["canvas_uuid"], "key");
                    }
                }
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["key"], "html", null, true);
                if ((isset($context["canvas_is_preview"]) && $context["canvas_is_preview"]) && \array_key_exists("canvas_uuid", $context)) {
                    if (\array_key_exists("canvas_slot_ids", $context) && \in_array("key", $context["canvas_slot_ids"], TRUE)) {
                        yield \sprintf('<!-- canvas-slot-%s-%s/%s -->', "end", $context["canvas_uuid"], "key");
                    } else {
                        yield \sprintf('<!-- canvas-prop-%s-%s/%s -->', "end", $context["canvas_uuid"], "key");
                    }
                }
                yield "</span>
          </a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 131
            yield "      ";
            // line 132
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 132)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 133
                yield "        <li>
          <span class=\"";
                // line 134
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["ellipsis_container_classes"] ?? null), " "), "html", null, true);
                yield "\" role=\"presentation\">
            <span class=\"";
                // line 135
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pager_icon_ellipsis_classes"] ?? null), "html", null, true);
                yield "\" aria-hidden=\"true\">
              ";
                // line 136
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "mercury:icon", ["icon" => "dots-three", "icon_size" => "extra-small"]));
                // line 144
                yield "
            </span>
          </span>
        </li>
      ";
            }
            // line 149
            yield "      ";
            // line 150
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 150)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 151
                yield "        <li class=\"pager__item pager__item--next\">
          <a
            href=\"";
                // line 153
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 153), "href", [], "any", false, false, true, 153), "html", null, true);
                yield "\"
            title=\"";
                // line 154
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                yield "\"
            rel=\"next\"
            class=\"";
                // line 156
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pager_nav_link_classes"] ?? null), "html", null, true);
                yield " mr-2 ps-1 lg:ps-2\"
            ";
                // line 157
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 157), "attributes", [], "any", false, false, true, 157), "href", "title", "rel"), "html", null, true);
                yield "
          >
            <span class=\"sr-only\">";
                // line 159
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                yield "</span>
            <span class=\"";
                // line 160
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pager_icon_link_classes"] ?? null), "html", null, true);
                yield "\" aria-hidden=\"true\">
              ";
                // line 161
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "mercury:icon", ["icon" => "caret-right", "icon_size" => "extra-small"]));
                // line 169
                yield "
            </span>
          </a>
        </li>
      ";
            }
            // line 174
            yield "      ";
            // line 175
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 175)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 176
                yield "        <li>
          <a
            href=\"";
                // line 178
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 178), "href", [], "any", false, false, true, 178), "html", null, true);
                yield "\"
            title=\"";
                // line 179
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
                yield "\"
            ";
                // line 180
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 180), "attributes", [], "any", false, false, true, 180), "addClass", [($context["pager_nav_link_classes"] ?? null), "pe-1 ps-2"], "method", false, false, true, 180), "href", "title"), "html", null, true);
                yield "
          >
            <span class=\"sr-only\">";
                // line 182
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last page"));
                yield "</span>
            <span aria-hidden=\"true\" class=\"pager__list-item text-sm whitespace-nowrap md:text-base\">
              <div class=\"flex gap-1\">
                <span class=\"";
                // line 185
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pager_icon_link_classes"] ?? null), "html", null, true);
                yield " translate-y-0.5\" aria-hidden=\"true\">
                  ";
                // line 186
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, "mercury:icon", ["icon" => "caret-double-right", "icon_size" => "extra-small"]));
                // line 194
                yield "
                </span>
              </div>
            </span>
          </a>
        </li>
      ";
            }
            // line 201
            yield "    </ul>
  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["value", "items", "heading_id", "pagination_heading_level", "ellipses", "current", "title"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@mercury/includes/pager.twig";
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
        return array (  424 => 201,  415 => 194,  413 => 186,  409 => 185,  403 => 182,  398 => 180,  394 => 179,  390 => 178,  386 => 176,  383 => 175,  381 => 174,  374 => 169,  372 => 161,  368 => 160,  364 => 159,  359 => 157,  355 => 156,  350 => 154,  346 => 153,  342 => 151,  339 => 150,  337 => 149,  330 => 144,  328 => 136,  324 => 135,  320 => 134,  317 => 133,  314 => 132,  312 => 131,  287 => 127,  283 => 126,  279 => 124,  277 => 122,  276 => 121,  275 => 120,  271 => 119,  267 => 118,  264 => 117,  262 => 116,  259 => 115,  254 => 114,  252 => 113,  245 => 108,  243 => 100,  239 => 99,  235 => 98,  232 => 97,  230 => 96,  227 => 95,  225 => 94,  218 => 89,  216 => 81,  212 => 80,  208 => 79,  203 => 77,  199 => 76,  194 => 74,  190 => 73,  186 => 71,  183 => 70,  181 => 69,  172 => 62,  170 => 54,  166 => 53,  160 => 50,  155 => 48,  151 => 47,  147 => 46,  143 => 44,  140 => 43,  135 => 41,  127 => 39,  119 => 37,  117 => 36,  110 => 35,  108 => 34,  101 => 33,  99 => 32,  92 => 31,  90 => 30,  83 => 29,  81 => 28,  74 => 27,  72 => 26,  65 => 25,  63 => 24,  60 => 23,  58 => 22,  56 => 21,  54 => 20,  52 => 19,  50 => 18,  48 => 17,  46 => 16,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@mercury/includes/pager.twig", "/var/www/html/web/themes/custom/mercury/templates/includes/pager.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 24, "for" => 114];
        static $filters = ["escape" => 25, "join" => 25, "t" => 27, "without" => 48];
        static $functions = ["html_cva" => 2, "include" => 55];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "if", 2 => "for"],
                [0 => "escape", 1 => "join", 2 => "t", 3 => "without"],
                [0 => "html_cva", 1 => "include"],
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
