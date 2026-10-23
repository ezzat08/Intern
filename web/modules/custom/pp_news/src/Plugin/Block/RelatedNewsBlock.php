<?php

namespace Drupal\pp_news\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Datetime\DateFormatterInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\node\Entity\Node;
use Drupal\pp_news\Service\RelatedNewsService;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Provides a block displaying related news articles.
 *
 * @Block(
 *   id = "pp_news_related_news",
 *   admin_label = @Translation("Related Post"),
 *   category = @Translation("Custom")
 * )
 */
class RelatedNewsBlock extends BlockBase implements ContainerFactoryPluginInterface {

  /**
   * Constructs the related news block.
   */
  public function __construct(
    array $configuration,
    $plugin_id,
    $plugin_definition,
    protected RelatedNewsService $relatedNewsService,
    protected RouteMatchInterface $routeMatch,
    protected ConfigFactoryInterface $configFactory,
    protected DateFormatterInterface $dateFormatter,
    protected EntityTypeManagerInterface $entityTypeManager,
    protected RequestStack $requestStack,
  ) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
  }

  /**
   * {@inheritdoc}
   */
  public static function create(
    ContainerInterface $container,
    array $configuration,
    $plugin_id,
    $plugin_definition,
  ): static {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('pp_news.related_news'),
      $container->get('current_route_match'),
      $container->get('config.factory'),
      $container->get('date.formatter'),
      $container->get('entity_type.manager'),
      $container->get('request_stack'),
    );
  }

  /**
   * {@inheritdoc}
   */
  public function build(): array {
    // Get the current news article.
    $current_node = $this->routeMatch->getParameter('node');

    // Try the request attributes if the route parameter isn't a Node.
    if (!$current_node instanceof Node) {
      $request = $this->requestStack->getCurrentRequest();
$request_node = $request?->attributes->get('node');

if ($request_node instanceof Node) {
  $current_node = $request_node;
}
elseif (is_numeric($request_node)) {
  $current_node = $this->entityTypeManager
    ->getStorage('node')
    ->load($request_node);
}
    }

    // Only display related news on a Berita article page.
    if (!$current_node instanceof Node || $current_node->bundle() !== 'berita') {
      return [
        '#markup' => $this->t(
          'Debug: Current Berita article not detected. Route: @route',
          ['@route' => $this->routeMatch->getRouteName() ?? 'none']
        ),
        '#cache' => ['max-age' => 0],
      ];
    }

    // Read the article limit from PP News settings.
    $limit = (int) $this->configFactory
      ->get('pp_news.settings')
      ->get('related_news_limit');

    $limit = max(1, min($limit, 10));

    // Retrieve related news through the injected service.
    $nodes = $this->relatedNewsService->getRelatedNews(
      $current_node,
      $limit
    );

    if (empty($nodes)) {
      $category_ids = array_column(
        $current_node->get('field_kategori_berita')->getValue(),
        'target_id'
      );

      if (empty($category_ids)) {
        $message = 'Debug: No categories found for this article.';
      }
      else {
        $message = $this->t(
          'Debug: No related news found. Current node ID: @nid; categories: @categories',
          [
            '@nid' => $current_node->id(),
            '@categories' => implode(', ', $category_ids),
          ]
        );
      }

      return [
        '#markup' => $message,
        '#cache' => ['max-age' => 0],
      ];
    }

    $items = [];

    foreach ($nodes as $node) {
      // Render the referenced Media item using Drupal's field formatter.
      $image = [];

      if (!$node->get('field_gambar_utama')->isEmpty()) {
        $media = $node->get('field_gambar_utama')->entity;

        if ($media && !$media->get('field_media_image')->isEmpty()) {
          $image = $media->get('field_media_image')->view([
            'label' => 'hidden',
            'type' => 'image',
            'settings' => [
              'image_style' => '',
              'image_link' => '',
            ],
          ]);
        }
      }

      // Format the custom publication date.
      $date = '';

      if (!$node->get('field_tarikh_penerbitan_berita')->isEmpty()) {
        $date_value = $node->get('field_tarikh_penerbitan_berita')->value;
        $timestamp = strtotime($date_value);

        if ($timestamp !== FALSE) {
          $date = $this->dateFormatter->format(
            $timestamp,
            'custom',
            'j F Y'
          );
        }
      }

      // Get the introduction and limit its length.
      $excerpt = '';

      if (!$node->get('field_ringkasan_berita')->isEmpty()) {
        $excerpt = $node->get('field_ringkasan_berita')->value;
        $excerpt = trim(strip_tags($excerpt));
        $excerpt = \Drupal\Component\Utility\Unicode::truncate(
          $excerpt,
          180,
          TRUE,
          TRUE
        );
      }

      $items[] = [
        'title' => $node->label(),
        'url' => $node->toUrl()->toString(),
        'image' => $image,
        'date' => $date,
        'excerpt' => $excerpt,
      ];
    }

    return [
      '#theme' => 'pp_news_card_list',
      '#title' => $this->t('Related Post'),
      '#items' => $items,
      '#attached' => [
        'library' => [
          'pp_news/card_list',
        ],
      ],
      '#cache' => [
        'tags' => array_merge(
          [
            'node_list',
            'node_list:berita',
            'config:pp_news.settings',
          ],
          $current_node->getCacheTags()
        ),
        'contexts' => [
          'user.permissions',
          'url.path',
        ],
      ],
    ];
  }

}
