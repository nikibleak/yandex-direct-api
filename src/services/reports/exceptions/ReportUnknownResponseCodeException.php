<?php

namespace directapi\services\reports\exceptions;

class ReportUnknownResponseCodeException extends \ErrorException
{
    public function __construct(int $code)
    {
        parent::__construct('Unknown response code: ' . $code);
    }
}
