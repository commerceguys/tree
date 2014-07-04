<?php

namespace Tree\Storage;

use Tree\Provider\ProviderInterface;

/**
 * Defines a storage that is testable.
 *
 * Necessary for building fixtures for tests.
 */
interface TestableStorageInterface {

  /**
   * Sets the provider for this storage.
   */
  public function setProvider(ProviderInterface $provider);

  /**
   * Creates a memory representation of a tree item.
   *
   * @return \Tree\Storage\ItemInterface
   */
  public function create();

  /**
   * Saves a tree item to the underlying storage.
   *
   * @param \Tree\Storage\ItemInterface $item
   *   A \Tree\Storage\ItemInterface object.
   */
  public function save(ItemInterface $item);

  /**
   * Deletes a tree item from the underlying storage.
   *
   * @param int $item_id
   *   The ID of the tree item.
   */
  public function delete($item_id);

}
