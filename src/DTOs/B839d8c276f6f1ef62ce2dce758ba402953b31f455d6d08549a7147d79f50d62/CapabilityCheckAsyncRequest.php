<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * CapabilityCheckAsyncRequest
 */
final class CapabilityCheckAsyncRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'phoneNumbers',
        'sender',
    ];

    protected const array VALIDATION = [
        'phoneNumbers' => [
            'minItems' => 1,
            'maxItems' => 10000,
        ],
        'sender' => [
            'minLength' => 1,
        ],
    ];

    /**
     * The preferred content type for the RCS capability check report.
     */
    public \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\CapabilityCheckAsyncRequest\ContentTypeEnum $notifyContentType;
    /**
     * The URL of your callback server where the RCS capability check report will be sent. The schema for this endpoint is documented at [Receive Capability Check result](#channels/rcs/receive-capability-check-result).If notifyUrl is empty, events will be sent to the URL you added via Subscription API. The event name is CapCheck.
     */
    public string $notifyUrl;
    public \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\CapabilityCheckOptions $options;
    /**
     * A list of phone numbers to check for RCS capability (for example, `["441134960001", "441134960002"]`).
     */
    public \InfobipSDK\Collections\StringCollection $phoneNumbers {
        set {
            $this->assigning('phoneNumbers', $value);
            $this->phoneNumbers = $value;
        }
    }
    /**
     * Identifier of an RCS sender that will be used to send message.
     */
    public string $sender {
        set {
            $this->assigning('sender', $value);
            $this->sender = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'notifyContentType' => is_string($value) ? $this->notifyContentType = \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\CapabilityCheckAsyncRequest\ContentTypeEnum::from($value) : parent::assignMember($name, $value),
            'notifyUrl' => is_string($value) ? $this->notifyUrl = $value : parent::assignMember($name, $value),
            'options' => $value instanceof \stdClass ? $this->options = new \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\CapabilityCheckOptions($value) : parent::assignMember($name, $value),
            'phoneNumbers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->phoneNumbers = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
