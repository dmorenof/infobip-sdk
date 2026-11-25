<?php

declare(strict_types=1);

namespace InfobipSDK\Whatsapp\Resource1\EmbeddedSignup\Registrations\Senders\BySender;

final class Verification extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /whatsapp/1/embedded-signup/registrations/senders/{sender}/verification [operationId: verify-whatsapp-sender] */
    /**
     * Verify WhatsApp sender
     *
     * Verify your WhatsApp sender and submit it for registration.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function post(string $sender, \InfobipSDK\DTOs\N30350ea3b42c85fe379e7561e2b43510ecd150d18a85f55710d4f6347f698f75\VerifyCodeRequest $payload): void
    {
        self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\EmbeddedSignup\Registrations\Senders\BySender\Verification::class)->post($sender, $payload);
    }

    /** PUT /whatsapp/1/embedded-signup/registrations/senders/{sender}/verification [operationId: retry-whatsapp-sender-verification] */
    /**
     * Retry WhatsApp sender verification
     *
     * Retry the WhatsApp sender verification process in the event of a non-delivered verification code.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function put(string $sender, \InfobipSDK\DTOs\N30350ea3b42c85fe379e7561e2b43510ecd150d18a85f55710d4f6347f698f75\OtpRequest $payload): void
    {
        self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\EmbeddedSignup\Registrations\Senders\BySender\Verification::class)->put($sender, $payload);
    }

}
