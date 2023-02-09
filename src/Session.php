<?php

declare(strict_types=1);

namespace App;

final class Session implements FlashBagAwareSessionInterface
{
    public function getFlashBag(): FlashBag
    {
        return new FlashBag();
    }
}
