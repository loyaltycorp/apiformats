<?php
declare(strict_types=1);

namespace EoneoPay\ApiFormats\Exceptions;

use EoneoPay\ApiFormats\Interfaces\ApiFormatsExceptionInterface;
use EoneoPay\Utils\Exceptions\CriticalException;

class InvalidSupportedRequestFormatsConfigException extends CriticalException implements ApiFormatsExceptionInterface
{
    // Exception for invalid formats configuration
}
