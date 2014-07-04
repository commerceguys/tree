<?php

namespace Tree\Provider;

use Tree\Storage\ItemInterface;
use Tree\Storage\QueryInterface;

/**
 * The interface defining a provider for a tree.
 */
interface ProviderInterface {

  /**
   * Gets the parent of an item.
   *
   * @param \Tree\Storage\ItemInterface $item
   *   A tree storage item object.
   * @param \Tree\Storage\QueryInterface $query
   *   (optional) A tree query object. Defaults to NULL.
   *
   * @return \Tree\Storage\QueryInterface
   *   A tree query object.
   */
  public function parentOf(ItemInterface $item, QueryInterface $query = NULL);

  /**
   * Gets the whole ancestry of an item.
   *
   * @param \Tree\Storage\ItemInterface $item
   *   A tree storage item object.
   * @param \Tree\Storage\QueryInterface $query
   *   (optional) A tree query object. Defaults to NULL.
   *
   * @return \Tree\Storage\QueryInterface
   *   A tree query object.
   */
  public function ancestorsOf(ItemInterface $item, QueryInterface $query = NULL);

  /**
   * Gets the children of an item.
   *
   * @param \Tree\Storage\ItemInterface $item
   *   A tree storage item object.
   * @param \Tree\Storage\QueryInterface $query
   *   (optional) A tree query object. Defaults to NULL.
   *
   * @return \Tree\Storage\QueryInterface
   *   A tree query object.
   */
  public function childrenOf(ItemInterface $item, QueryInterface $query = NULL);

  /**
   * Gets the siblings of an item.
   *
   * @param \Tree\Storage\ItemInterface $item
   *   A tree storage item object.
   * @param \Tree\Storage\QueryInterface $query
   *   (optional) A tree query object. Defaults to NULL.
   *
   * @return \Tree\Storage\QueryInterface
   *   A tree query object.
   */
  public function siblingsOf(ItemInterface $item, QueryInterface $query = NULL);

  /**
   * Gets the descendants of an item.
   *
   * @param \Tree\Storage\ItemInterface $item
   *   A tree storage item object.
   * @param \Tree\Storage\QueryInterface $query
   *   (optional) A tree query object. Defaults to NULL.
   *
   * @return \Tree\Storage\QueryInterface
   *   A tree query object.
   */
  public function descendantsOf(ItemInterface $item, QueryInterface $query = NULL);

  /**
   * Gets the root item of an item.
   *
   * @param \Tree\Storage\ItemInterface $item
   *   A tree storage item object.
   * @param \Tree\Storage\QueryInterface $query
   *   (optional) A tree query object. Defaults to NULL.
   *
   * @return \Tree\Storage\QueryInterface
   *   A tree query object.
   */
  public function rootOf(ItemInterface $item, QueryInterface $query = NULL);

  /**
   * Gets all the root items of the tree.
   *
   * @param \Tree\Storage\QueryInterface $query
   *   (optional) A tree query object. Defaults to NULL.
   *
   * @return \Tree\Storage\QueryInterface
   *   A tree query object.
   */
  public function getRoots(QueryInterface $query = NULL);

  /**
   * Acts before an insert or an update.
   *
   * @param \Tree\Storage\ItemInterface $item
   *   A tree storage item object.
   */
  public function preSave(ItemInterface $item);

  /**
   * Acts after insertion has happened.
   *
   * @param \Tree\Storage\ItemInterface $item
   *   A tree storage item object.
   */
  public function postInsert(ItemInterface $item);

  /**
   * Acts after update has happened.
   *
   * @param \Tree\Storage\ItemInterface $item
   *   A tree storage item object.
   */
  public function postUpdate(ItemInterface $item);

  /**
   * Acts after deletion has happend.
   *
   * @param int $item_id
   */
  public function postDelete($item_id);

  /**
   * Acts after load has happened.
   */
  public function postLoad(ItemInterface $item);

}
