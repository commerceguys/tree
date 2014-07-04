<?php

namespace Tree\Storage;

/**
 * Defines an abstract storage for trees.
 */
interface StorageInterface {

  /**
   * Builds a query for this tree.
   *
   * @return \Tree\Storage\QueryInterface
   *   A \Tree\Storage\QueryInterface object.
   */
  public function query();

}
