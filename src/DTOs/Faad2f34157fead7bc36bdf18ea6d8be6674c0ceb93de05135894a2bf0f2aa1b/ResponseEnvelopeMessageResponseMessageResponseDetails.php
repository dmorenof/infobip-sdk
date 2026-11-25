<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b;

/**
 * ResponseEnvelopeMessageResponseMessageResponseDetails
 */
final class ResponseEnvelopeMessageResponseMessageResponseDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'messages',
];

    protected const array VALIDATION = [
    'messages' => [
        'minItems' => 1,
    ],
];

    /**
     * Unique ID assigned to the request if messaging multiple recipients or sending multiple messages via a single API request. If not provided, it will be auto-generated and returned in the API response. Typically used for fetching delivery reports and message logs.
     */
    public string $bulkId;
    /**
     * An array of message objects of a single message or multiple messages sent under one bulk ID.
     */
    public \InfobipSDK\Collections\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\ResponseEnvelopeMessageResponseMessageResponseDetails\MessagesCollection $messages {
        set {
            $this->assigning('messages', $value);
            $this->messages = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'messages' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->messages = new \InfobipSDK\Collections\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\ResponseEnvelopeMessageResponseMessageResponseDetails\MessagesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MessageResponseMessageResponseDetails::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
