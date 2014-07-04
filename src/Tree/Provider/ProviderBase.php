<?php

namespace Tree\Provider;

use Tree\Storage\ItemInterface;
use Tree\Storage\StorageInterface;

/**
 * Provides fallback implementations for some ProviderInterface methods.
 */
abstract class ProviderBase implements ProviderInterface {

  /**
   * The storage object used by this provider.
   *
   * @var \Tree\Storage\StorageInterface
   */
  public $storage;

  /**
   * Constructs a \Tree\Provider\ProviderBase object.
   */
  public function __construct(StorageInterface $storage) {
    $this->storage = $storage;
  }

  /**
   * {@inheritdoc}
   */
  public function preSave(ItemInterface $item) {
    // Nothing to do here.
  }

  /**
   * {@inheritdoc}
   */
  public function postInsert(ItemInterface $item) {
    // Nothing to do here.
  }

  /**
   * {@inheritdoc}
   */
  public function postUpdate(ItemInterface $item) {
    // Nothing to do here.
  }

  /**
   * {@inheritdoc}
   */
  public function postDelete($item_id) {
    // Nothing to do here.
  }

  /**
   * {@inheritdoc}
   */
  public function postLoad(ItemInterface $item) {
    // Nothing to do here.
  }

}
