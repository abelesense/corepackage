<?php

namespace Abelesense\Corepackage;


use Abelesense\Corepackage\ErrorInterface;

class TableLoggerService implements ErrorInterface
{
    public function error(\Throwable $e): void
    {

        $message = $e->getMessage();
        $file = $e->getFile();
        $line = $e->getLine();
        $datetime = date('Y-m-d H:i:s');

        $errorLog = new ErrorLogRepository();
        $errorLog->add($message, $file, $line, $datetime);
    }

}