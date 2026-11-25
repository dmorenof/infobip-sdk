<?php

declare(strict_types=1);

namespace InfobipSDK\Mms\Resource1;

final class Advanced extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /mms/1/advanced [operationId: send-mms-message] */
    /**
     * Send MMS message
     *
     * This method allows you to send one MMS or bulk MMS to a recipient or multiple recipients in one request.
     * Documentation: https://www.infobip.com/docs/mms
     *
     * @deprecated
     */
    public static function post(\InfobipSDK\DTOs\Ce93fb2fe51c89086b5064c5562c417f51be44b14f40606d3932f527a3fd02d9\MmsAdvancedRequest $payload): \InfobipSDK\DTOs\Ce93fb2fe51c89086b5064c5562c417f51be44b14f40606d3932f527a3fd02d9\SendResult
    {
        return self::client()->resource(\InfobipSDK\Resources\Mms\Resource1\Advanced::class)->post($payload);
    }

}
