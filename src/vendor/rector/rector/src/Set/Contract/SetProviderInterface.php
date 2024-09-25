<?php

declare (strict_types=1);
namespace Rector\Set\Contract;

interface SetProviderInterface
{
    /**
     * @return SetInterface[]
     */
    public function provide() : array;
}
