<?php

declare(strict_types=1);

namespace App;

final class Request
{
    public function getSession(): SessionInterface
    {
        return new Session();
    }
}
