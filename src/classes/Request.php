<?php

namespace Combi\Epack;

use Combi\{
    Helper as helper,
    Runtime as rt
};
use Combi\Core;
use Combi\Core\Meta\Extensions;

abstract class Request extends Core\Meta\Struct
    implements \ArrayAccess, \JsonSerializable {
    use Extensions\JsonSerializable,
        Extensions\ArrayAccess,
        Extensions\Overloaded;
}