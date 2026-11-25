<?php

declare(strict_types=1);

namespace InfobipSDK\Whatsapp\Resource1\Senders\BySender\Message\ByMessageId;

final class Read extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /whatsapp/1/senders/{sender}/message/{messageId}/read [operationId: mark-whatsapp-message-as-read] */
    /**
     * Mark as read
     *
     * Mark WhatsApp messages sent by end-users as read.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function post(\InfobipSDK\PathParams\Whatsapp\Resource1\Senders\BySender\Message\ByMessageId\Read $identifier): void
    {
        self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender\Message\ByMessageId\Read::class)->post($identifier);
    }

}
