<?php

declare(strict_types=1);

namespace InfobipSDK\Whatsapp\Resource1\Message\Interactive;

final class OrderDetails extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /whatsapp/1/message/interactive/order-details [operationId: send-whatsapp-interactive-order-details-message] */
    /**
     * Send WhatsApp interactive order-details message
     *
     * Send an interactive order-details message to a single recipient. <br/> An order-details message is a structured message containing essential information about the customer's selected products. Alternatively, a [single](#channels/whatsapp/send-whatsapp-interactive-product-message) or [multi-product](#channels/whatsapp/send-whatsapp-interactive-multi-product-message) interactive message can serve this purpose. <br/> Interactive order-details messages can only be successfully delivered if the recipient has contacted the business within the last 24 hours, otherwise [template message](#channels/whatsapp/send-whatsapp-template-message) should be used. <br/> The API response will not contain the final delivery status, use [Delivery Reports](#channels/whatsapp/receive-whatsapp-delivery-reports) instead.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public static function post(\InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveOrderDetailsMessage $payload): \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\SingleMessageInfo
    {
        return self::client()->resource(\InfobipSDK\Resources\Whatsapp\Resource1\Message\Interactive\OrderDetails::class)->post($payload);
    }
}
