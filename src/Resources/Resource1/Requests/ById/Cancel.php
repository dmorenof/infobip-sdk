<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Resource1\Requests\ById;

final class Cancel extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /resources/1/requests/{id}/cancel [operationId: cancel-resource-request] */
    /**
     * Cancel resource request
     *
     * Cancels an existing resource request with Infobip. Resource request may only be canceled when in UPDATE_REQUESTED and UPDATE_REQUESTED_BY_INTERNAL_REVIEWER status.
     * Limited to ALPHANUMERIC_REGISTRATION, NUMBER_PURCHASE and RCS_SENDER_LAUNCH requests only.
     *
     */
    public static function post(string $id): void
    {
        self::client()->resource(\InfobipSDK\Resources\Resources\Resource1\Requests\ById\Cancel::class)->post($id);
    }

}
