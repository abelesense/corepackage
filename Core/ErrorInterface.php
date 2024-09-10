<?php

namespace Core;

use Throwable;

interface ErrorInterface
{
    public function error(\Throwable $e);

}