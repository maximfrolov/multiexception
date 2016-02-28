<?php

namespace MaximFrolov\MultiException;

/**
 * Class MultiException
 * @package MaximFrolov\MultiException
 */
class MultiException
    extends \Exception
    implements \ArrayAccess, \Iterator
{

    use TCollection;

}