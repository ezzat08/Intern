<?php

namespace Drupal\pp_news\Service;

use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\node\NodeInterface;

/**
 * Retrieves news articles related by category.
 */
class RelatedNewsService {

  /**
   * Constructs the related news service.
   */
  public function __construct(
    protected EntityTypeManagerInterface $entityTypeManager,
  ) {}

  /**
   * Gets published news sharing categories with the current article.
   *
   * @param \Drupal\node\NodeInterface $currentNode
   *   The current news article.
   * @param int $limit
   *   The maximum number of related articles.
   *
   * @return \Drupal\node\NodeInterface[]
   *   The related news articles.
   */
  public function getRelatedNews(
    NodeInterface $currentNode,
    int $limit = 5,
  ): array {
    if ($currentNode->bundle() !== 'berita') {
      return [];
    }

    $categoryIds = array_column(
      $currentNode->get('field_kategori_berita')->getValue(),
      'target_id'
    );

    $categoryIds = array_values(
      array_unique(array_filter($categoryIds))
    );

    if (empty($categoryIds)) {
      return [];
    }

    $limit = max(1, min($limit, 10));

    $storage = $this->entityTypeManager->getStorage('node');

    $nids = $storage->getQuery()
      ->accessCheck(TRUE)
      ->condition('type', 'berita')
      ->condition('status', 1)
      ->condition('nid', $currentNode->id(), '<>')
      ->condition('field_kategori_berita', $categoryIds, 'IN')
      ->sort('created', 'DESC')
      ->range(0, $limit)
      ->execute();

    if (empty($nids)) {
      return [];
    }

    return $storage->loadMultiple($nids);
  }

}
