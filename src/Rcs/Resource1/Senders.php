<?php

declare(strict_types=1);

namespace InfobipSDK\Rcs\Resource1;

final class Senders extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /rcs/1/senders [operationId: get-rcs-senders] */
    /**
     * Get RCS senders
     *
     * Retrieve list of RCS senders.
     */
    public static function get(?\InfobipSDK\GetParams\Rcs\Resource1\Senders $params = null): \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsSenderPageResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Rcs\Resource1\Senders::class)->get($params);
    }

    /** POST /rcs/1/senders [operationId: create-rcs-sender] */
    /**
     * Create an RCS sender
     *
     * Create an RCS sender. Created RCS sender can immediately be used to send test messages to test numbers. See [Add RCS test number](#channels/rcs/add-rcs-test-number) operation for more details about adding test numbers for sender. Please note that following limits will apply when creating RCS sender:
     * * It is allowed to add up to 10 senders in total.
     *
     * Please contact your account manager if you need to add more senders.
     */
    public static function post(\InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\CreateRcsSenderApiRequest $payload): \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsSenderRequestAcceptedResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Rcs\Resource1\Senders::class)->post($payload);
    }

    /** GET /rcs/1/senders/{senderName} [operationId: get-rcs-sender] */
    /**
     * Get RCS sender
     *
     * Get a single RCS sender by sender name.
     */
    public static function getBySenderName(string $senderName): \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsSender
    {
        return self::client()->resource(\InfobipSDK\Resources\Rcs\Resource1\Senders::class)->getBySenderName($senderName);
    }

    /** PUT /rcs/1/senders/{senderName} [operationId: update-rcs-sender] */
    /**
     * Update an RCS sender
     *
     * Update an RCS sender. Please note that once sender is locked, it's not possible to update sender data anymore.
     */
    public static function putBySenderName(string $senderName, \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\EditRcsSenderApiRequest $payload): \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsSenderRequestAcceptedResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Rcs\Resource1\Senders::class)->putBySenderName($senderName, $payload);
    }
}
