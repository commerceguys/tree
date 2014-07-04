<?php

namespace Tree\Storage;

/**
 * Defines an abstract query for trees.
 */
interface QueryInterface {

  /**
   * Applies a condition to the query.
   *
   * @param string $column
   *   The name of the tree column to check ('id', 'parent', 'weight' or
   *   'depth').
   * @param mixed $value
   *   The value to test the column against. In most cases, this is a scalar.
   *   For more complex options, it is an array. The meaning of each element in
   *   the array is dependent on the $operator.
   * @param string $operator
   *   The comparison operator, such as =, <, or >=. It also accepts more
   *   complex options such as IN, LIKE, or BETWEEN. Defaults to IN if $value is
   *   an array, and = otherwise.
   *
   * @return $this
   *   The called object.
   */
  public function condition($column, $value, $operator = NULL);

  /**
   * Sets a condition that the specified column is NULL.
   *
   * @param string $column
   *   The name of the tree column to check ('id', 'parent', 'weight' or
   *   'depth').
   *
   * @return $this
   *   The called object.
   */
  public function isNull($column);

  /**
   * Sets a condition that the specified column is not NULL.
   *
   * @param string $column
   *   The name of the tree column to check ('id', 'parent', 'weight' or
   *   'depth').
   *
   * @return $this
   *   The called object.
   */
  public function isNotNull($column);

  /**
   * Sets a condition that is always false.
   *
   * @return $this
   *   The called object.
   */
  public function alwaysFalse();

  /**
   * Orders the result set by a given column.
   *
   * If called multiple times, the query will order by each specified field in
   * the order this method is called.
   *
   * @param string $column
   *   The name of the tree column to check ('id', 'parent', 'weight' or
   *   'depth').
   * @param string $direction
   *   The direction to sort ('ASC' or 'DESC').
   *
   * @return $this
   *   The called object.
   */
  public function orderBy($column, $direction = 'ASC');

  /**
   * Runs the query.
   *
   * @return \Tree\Storage\ItemInterface[]
   *   An array of \Tree\Storage\ItemInterface objects.
   */
  public function execute();

}
