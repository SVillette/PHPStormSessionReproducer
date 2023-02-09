<?php

declare(strict_types=1);

namespace App;

interface FlashBagAwareSessionInterface extends SessionInterface
{
    public function getFlashBag(): FlashBag;
}
