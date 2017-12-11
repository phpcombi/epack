<?php

namespace Combi\Epack;

require __DIR__."/../bootstrap.php";

use Tester\Assert;

class Result extends Vo {
    protected static $_defaults = [
        'aaa' => 1,
        'bbb' => 'xxx',
        'ccc' => false,
    ];
}
$a = new Result;
var_dump($a->toArray());

die(1);