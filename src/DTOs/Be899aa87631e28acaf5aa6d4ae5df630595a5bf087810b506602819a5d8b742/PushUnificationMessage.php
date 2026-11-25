<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742;

/**
 * PushUnificationMessage
 *
 * An array of message objects of a single message or multiple messages sent under one bulk ID.
 */
final class PushUnificationMessage extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'content',
        'destinations',
        'sender',
    ];

    protected const array VALIDATION = [
        'destinations' => [
            'minItems' => 1,
        ],
        'sender' => [
            'minLength' => 1,
        ],
    ];

    public \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushOutboundContent $content;
    /**
     * An array of destination objects for where messages are being sent. A valid destination is required. When using a `MULTIPLE` type, at least one property is required.
     */
    public \InfobipSDK\Collections\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushUnificationMessage\DestinationsCollection $destinations {
        set {
            $this->assigning('destinations', $value);
            $this->destinations = $value;
        }
    }
    public \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushUnificationMessageOptions $options;
    /**
     * Use Application Code or Application ID of application profile, [application profile](https://www.infobip.com/docs/mobile-push/get-started/mobile-application-profile#copy-application-code-create-and-enable-a-mobile-application-profile), created in Infobip web interface.
     */
    public string $sender {
        set {
            $this->assigning('sender', $value);
            $this->sender = $value;
        }
    }
    public \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\Webhooks $webhooks;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'options' => $value instanceof \stdClass ? $this->options = new \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushUnificationMessageOptions($value) : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            'webhooks' => $value instanceof \stdClass ? $this->webhooks = new \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\Webhooks($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
