<?php

namespace Abelesense\Corepackage;


interface ErrorInterface
{
    public function error(\Throwable $e);

}