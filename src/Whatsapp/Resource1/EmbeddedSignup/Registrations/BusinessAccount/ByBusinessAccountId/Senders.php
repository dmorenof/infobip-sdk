<?php

declare(strict_types=1);

namespace InfobipSDK\Whatsapp\Resource1\EmbeddedSignup\Registrations\BusinessAccount\ByBusinessAccountId;

final class Senders extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /whatsapp/1/embedded-signup/registrations/business-account/{businessAccountId}/senders [operationId: add-whatsapp-sender] */
    /**
     * Add WhatsApp sender
     *
     * Add a WhatsApp sender to your WhatsApp Business Account and initiate the verification process. If the sender is recognized as already verified, it will be automatically submitted for registration.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function post(int $businessAccountId, \InfobipSDK\DTOs\N30350ea3b42c85fe379e7561e2b43510ecd150d18a85f55710d4f6347f698f75\PhoneNumberRequest $payload): \InfobipSDK\DTOs\N30350ea3b42c85fe379e7561e2b43510ecd150d18a85f55710d4f6347f698f75\WhatsAppSenderRegistrationResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\EmbeddedSignup\Registrations\BusinessAccount\ByBusinessAccountId\Senders::class)->post($businessAccountId, $payload);
    }

}
