<?php
declare(strict_types=1);

namespace Tests\EoneoPay\ApiFormats\Exceptions;

use EoneoPay\ApiFormats\Exceptions\InvalidEncoderException;
use EoneoPay\Utils\Interfaces\BaseExceptionInterface;
use Tests\EoneoPay\ApiFormats\TestCases\BridgeLaravelExceptionsTestCase;

class InvalidEncoderExceptionTest extends BridgeLaravelExceptionsTestCase
{
    /**
     * Exception should return valid codes.
     *
     * @return void
     */
    public function testGettersFromBaseExceptionInterface(): void
    {
        $this->processExceptionCodesTest(
            new InvalidEncoderException(),
            BaseExceptionInterface::DEFAULT_ERROR_CODE_RUNTIME,
            BaseExceptionInterface::DEFAULT_ERROR_SUB_CODE,
            BaseExceptionInterface::DEFAULT_STATUS_CODE_RUNTIME
        );
    }
}
