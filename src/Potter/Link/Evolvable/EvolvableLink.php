<?php

declare(strict_types=1);

namespace Potter\Link\Evolvable;

use \Potter\Aware\{
    AwareInterface,
    AwareTrait
};
use Potter\Cloneable\{
    CloneableInterface,
    CloneableTrait
};
use Potter\Link\{
    LinkInterface,
    LinkTrait
};

final class EvolvableLink implements AwareInterface, CloneableInterface, EvolvableLinkInterface, LinkInterface
{
    use AwareTrait, CloneableTrait, EvolvableLinkTrait, LinkTrait;
    
    public function __construct(string $href = '', array $rels = [], array $attributes = [])
    {
        $this->setHref($href);
        $this->setRels($rels);
        $this->setAttributes($attributes);
    }
}
