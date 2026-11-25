<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * InteractiveListMessage
 */
final class InteractiveListMessage extends \Dmorenof\SdkRuntime\DTO
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
        'minLength' => 0,
        'maxLength' => 4000,
    ],
    'entityId' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
    'from' => [
        'minLength' => 1,
        'maxLength' => 24,
    ],
    'messageId' => [
        'minLength' => 0,
        'maxLength' => 200,
    ],
    'notifyUrl' => [
        'minLength' => 0,
        'maxLength' => 2048,
        'pattern' => '',
    ],
    'to' => [
        'minLength' => 1,
        'maxLength' => 150,
    ],
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
     * Custom client data that will be included in a [Delivery Report](#channels/whatsapp/receive-whatsapp-delivery-reports).
     */
    public string $callbackData {
        set {
            $this->assigning('callbackData', $value);
            $this->callbackData = $value;
        }
    }
    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveListContent $content;
    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\MessageContext $context;
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
     * Registered WhatsApp sender number. Must be in international format and comply with [WhatsApp's requirements](https://www.infobip.com/docs/whatsapp/get-started/sender-registration#phone-number-what-you-need-to-know).
     */
    public string $from {
        set {
            $this->assigning('from', $value);
            $this->from = $value;
        }
    }
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
     * The URL on your callback server to which delivery and seen reports will be sent. [Delivery report format](#channels/whatsapp/receive-whatsapp-delivery-reports), [Seen report format](#channels/whatsapp/receive-whatsapp-seen-reports).
     */
    public string $notifyUrl {
        set {
            $this->assigning('notifyUrl', $value);
            $this->notifyUrl = $value;
        }
    }
    /**
     * Message recipient number in international format or WhatsApp business-scoped user ID.
     */
    public string $to {
        set {
            $this->assigning('to', $value);
            $this->to = $value;
        }
    }
    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\UrlOptions $urlOptions;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'content' => $value instanceof \stdClass ? $this->content = new \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\InteractiveListContent($value) : parent::assignMember($name, $value),
            'context' => $value instanceof \stdClass ? $this->context = new \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\MessageContext($value) : parent::assignMember($name, $value),
            'entityId' => is_string($value) ? $this->entityId = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'notifyUrl' => is_string($value) ? $this->notifyUrl = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            'urlOptions' => $value instanceof \stdClass ? $this->urlOptions = new \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\UrlOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
