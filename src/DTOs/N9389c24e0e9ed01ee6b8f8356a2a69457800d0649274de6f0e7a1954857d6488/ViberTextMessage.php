<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488;

/**
 * ViberTextMessage
 *
 * An array of messages being sent.
 */
final class ViberTextMessage extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'content',
    'from',
    'to',
];

    protected const array VALIDATION = [
    'applicationId' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
    'callbackData' => [
        'minLength' => 1,
        'maxLength' => 4000,
    ],
    'entityId' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
    'from' => [
        'minLength' => 2,
        'maxLength' => 20,
    ],
    'messageId' => [
        'minLength' => 1,
        'maxLength' => 50,
    ],
    'notifyUrl' => [
        'minLength' => 0,
        'maxLength' => 2048,
        'pattern' => '',
    ],
    'to' => [
        'minLength' => 1,
        'pattern' => '^[0-9]{1,15}$',
    ],
    'trackingData' => [
        'minLength' => 1,
        'maxLength' => 100,
    ],
];

    protected const array WRITE_ONLY_FIELDS = [
    'applicationId',
    'entityId',
];

    /**
     * Required for application use in a send request for outbound traffic. Returned in notification events. For more details, see our [documentation](https://www.infobip.com/docs/cpaas-x/application-and-entity-management).
     */
    public string $applicationId {
        set {
            $this->assigning('applicationId', $value);
            $this->applicationId = $value;
        }
    }
    /**
     * Defines if the message should be charged using Viber's session rate if applicable. The session rate is not supported for text messages with buttons.
     */
    public bool $applySessionRate;
    /**
     * Custom client's data that will be included in Delivery Report.
     */
    public string $callbackData {
        set {
            $this->assigning('callbackData', $value);
            $this->callbackData = $value;
        }
    }
    public \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\TextContent $content;
    /**
     * Required for entity use in a send request for outbound traffic. Returned in notification events. For more details, see our [documentation](https://www.infobip.com/docs/cpaas-x/application-and-entity-management).
     */
    public string $entityId {
        set {
            $this->assigning('entityId', $value);
            $this->entityId = $value;
        }
    }
    /**
     * Registered Viber Sender name.
     */
    public string $from {
        set {
            $this->assigning('from', $value);
            $this->from = $value;
        }
    }
    public \InfobipSDK\Enums\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\Label $label;
    /**
     * The ID that uniquely identifies the message sent.
     */
    public string $messageId {
        set {
            $this->assigning('messageId', $value);
            $this->messageId = $value;
        }
    }
    /**
     * The URL on your callback server to which delivery and seen reports will be sent. [Delivery report format](#channels/viber/receive-viber-delivery-reports), [Seen report format](#channels/viber/receive-viber-seen-reports).
     */
    public string $notifyUrl {
        set {
            $this->assigning('notifyUrl', $value);
            $this->notifyUrl = $value;
        }
    }
    public \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\SmsFailover $smsFailover;
    /**
     * Message recipient number. Must be in international format and must be internationally reachable (Example: `385977666618`).
     */
    public string $to {
        set {
            $this->assigning('to', $value);
            $this->to = $value;
        }
    }
    /**
     * Defines if the message should be sent only to the end user's [primary device](https://www.infobip.com/docs/viber/business-messages/api) (phone or tablet).
     */
    public bool $toPrimaryDeviceOnly;
    /**
     * Custom client's data that will be passed back with user's reply.
     */
    public string $trackingData {
        set {
            $this->assigning('trackingData', $value);
            $this->trackingData = $value;
        }
    }
    public \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\UrlOptions $urlOptions;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'applySessionRate' => is_bool($value) ? $this->applySessionRate = $value : parent::assignMember($name, $value),
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'content' => $value instanceof \stdClass ? $this->content = new \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\TextContent($value) : parent::assignMember($name, $value),
            'entityId' => is_string($value) ? $this->entityId = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'label' => is_string($value) ? $this->label = \InfobipSDK\Enums\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\Label::from($value) : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'notifyUrl' => is_string($value) ? $this->notifyUrl = $value : parent::assignMember($name, $value),
            'smsFailover' => $value instanceof \stdClass ? $this->smsFailover = new \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\SmsFailover($value) : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            'toPrimaryDeviceOnly' => is_bool($value) ? $this->toPrimaryDeviceOnly = $value : parent::assignMember($name, $value),
            'trackingData' => is_string($value) ? $this->trackingData = $value : parent::assignMember($name, $value),
            'urlOptions' => $value instanceof \stdClass ? $this->urlOptions = new \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\UrlOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
