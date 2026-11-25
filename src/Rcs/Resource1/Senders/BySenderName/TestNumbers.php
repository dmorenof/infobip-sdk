<?php

declare(strict_types=1);

namespace InfobipSDK\Rcs\Resource1\Senders\BySenderName;

final class TestNumbers extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /rcs/1/senders/{senderName}/test-numbers [operationId: get-rcs-test-numbers] */
    /**
     * Get RCS test numbers
     *
     * Get RCS test numbers for given sender. Please note that information about status of test number was correct at the moment when test number was last time updated. If latest status for some test number is needed, [Get RCS test number](#channels/rcs/get-rcs-test-number) operation can be used.
     */
    public static function get(string $senderName, ?\InfobipSDK\GetParams\Rcs\Resource1\Senders\BySenderName\TestNumbers $params = null): \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTestNumberPageResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Rcs\Resource1\Senders\BySenderName\TestNumbers::class)->get($senderName, $params);
    }

    /** POST /rcs/1/senders/{senderName}/test-numbers [operationId: add-rcs-test-number] */
    /**
     * Add RCS test number
     *
     * Add test number for given RCS sender. Invitation to become tester will be sent to given number and once user accepts invitation it will be possible to send test traffic to given test number using given sender. Please note that following limits will apply when adding test number for RCS sender:
     * * It is allowed to add up to 20 test numbers per sender per day.
     * * It is allowed to add up to 200 test number per sender in total.
     */
    public static function post(string $senderName, \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\CreateRcsTestNumberApiRequest $payload): \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTestNumberRequestAcceptedResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Rcs\Resource1\Senders\BySenderName\TestNumbers::class)->post($senderName, $payload);
    }

    /** GET /rcs/1/senders/{senderName}/test-numbers/{testNumber} [operationId: get-rcs-test-number] */
    /**
     * Get RCS test number
     *
     * Get RCS test number. This operation will check current status of given test number and return most up to date result.
     */
    public static function getByTestNumber(\InfobipSDK\PathParams\Rcs\Resource1\Senders\BySenderName\TestNumbers\ByTestNumber $identifier): \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTestNumber
    {
        return self::client()->resource(\InfobipSDK\Resources\Rcs\Resource1\Senders\BySenderName\TestNumbers::class)->getByTestNumber($identifier);
    }

    /** PATCH /rcs/1/senders/{senderName}/test-numbers/{testNumber} [operationId: update-rcs-test-number-primary] */
    /**
     * Update primary flag of RCS test number
     *
     * Update primary flag of RCS test number.
     */
    public static function patchByTestNumber(\InfobipSDK\PathParams\Rcs\Resource1\Senders\BySenderName\TestNumbers\ByTestNumber $identifier, \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\UpdateRcsTestNumberPrimaryApiRequest $payload): \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTestNumber
    {
        return self::client()->resource(\InfobipSDK\Resources\Rcs\Resource1\Senders\BySenderName\TestNumbers::class)->patchByTestNumber($identifier, $payload);
    }

}
