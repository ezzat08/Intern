# Balai Berita theme notes

## Template suggestions and Twig debug

Twig debug is enabled for the local DDEV environment through
`sites/development.services.yml`. Inspect the HTML source around a rendered
element to see Drupal's template suggestion comments. Suggestions are ordered
from general to specific. For example, the Berita content type in the `full`
view mode resolves to `node--berita--full.html.twig`; its reusable teaser uses
`node--berita--teaser.html.twig`. After adding or renaming a template, rebuild
Drupal's cache so the theme registry discovers it.

## Twig compared with Laravel Blade

Twig and Blade are both server-side templating systems designed to keep display
logic separate from application logic. They share familiar features: escaped
output, conditionals, loops, includes, reusable partials, filters/helpers and
template inheritance. Twig prints a variable with `{{ value }}` and uses
`{% ... %}` for control structures, while Blade uses directives such as
`@if`, `@foreach`, `@include` and `@extends`. Both escape ordinary output by
default, which reduces accidental cross-site scripting when templates render
editor-provided content.

The main difference is how each template engine fits its framework. Blade is
closely integrated with Laravel and compiles templates into PHP, so Laravel
developers can use service-container helpers, route helpers and even PHP when
needed. Twig intentionally exposes a smaller, controlled API. In Drupal, Twig
receives render arrays and theme variables prepared by preprocess hooks. Drupal
then adds its own concepts: template suggestions, cache metadata, attributes,
field render arrays and Single Directory Components. A Drupal template should
therefore render the supplied values instead of querying entities or services
inside Twig.

Blade components commonly use tags and named slots. Drupal SDC provides a
similar component model, but pairs the Twig markup with a YAML schema that
documents and validates props and slots. The News card in this theme declares
its text values as props and its rendered media field as an image slot. Both
engines support reuse, but Drupal's render pipeline makes cacheability and
structured render arrays especially important; Laravel views more commonly
receive already-prepared PHP objects or arrays directly from controllers.
