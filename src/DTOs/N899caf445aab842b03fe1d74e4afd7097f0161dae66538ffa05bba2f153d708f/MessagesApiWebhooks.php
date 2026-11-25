<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiWebhooks
 *
 * Provides options for configuring message webhooks.
 */
final class MessagesApiWebhooks extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'callbackData' => [
            'minLength' => 0,
            'maxLength' => 4000,
        ],
    ];

    /**
     * Additional data that can be used for identifying, managing, or monitoring a message. Data included here will also be automatically included in the message Delivery Report and Seen Report. The maximum value is 4000 characters.
     */
    public string $callbackData {
        set {
            $this->assigning('callbackData', $value);
            $this->callbackData = $value;
        }
    }
    /**
     * Preferred delivery report content type, `application/json` or `application/xml`.
     */
    public string $contentType;
    public \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiDelivery $delivery;
    public \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\SeenStatusReporting $seen;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'contentType' => is_string($value) ? $this->contentType = $value : parent::assignMember($name, $value),
            'delivery' => $value instanceof \stdClass ? $this->delivery = new \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiDelivery($value) : parent::assignMember($name, $value),
            'seen' => $value instanceof \stdClass ? $this->seen = new \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\SeenStatusReporting($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
