<?php

namespace Tree\Provider;

use Tree\Storage\QueryInterface;

/**
 * A tree provider that supports querying in tree order.
 */
interface OrderableProviderInterface extends ProviderInterface {

  public function orderByTree(QueryInterface $query);

}
