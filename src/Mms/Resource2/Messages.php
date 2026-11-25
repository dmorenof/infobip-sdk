<?php

declare(strict_types=1);

namespace InfobipSDK\Mms\Resource2;

final class Messages extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /mms/2/messages [operationId: send-mms-messages] */
    /**
     * Send MMS messages
     *
     * This method allows you to send MMS messages to a recipient or multiple recipients in one request.
     * Documentation: https://www.infobip.com/docs/mms
     */
    public static function post(\InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MmsUnificationRequest $payload): \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\ResponseEnvelopeMessageResponseMessageResponseDetails
    {
        return self::client()->resource(\InfobipSDK\Resources\Mms\Resource2\Messages::class)->post($payload);
    }

}
