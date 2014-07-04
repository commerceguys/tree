<?php

namespace Tree\Storage;

/**
 * Defines an abstract item stored in a tree.
 *
 * Every tree item contains four public properties:
 *   - id: the ID of this item
 *   - parent: the ID of the parent of this item in the tree
 *   - weight: the weight of this item among its siblings
 *   - depth: the depth of this item
 */
interface ItemInterface {
}
