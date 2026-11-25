<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N62b589527d7474f21f086ddb07e8698e9fcfbbe16400c91718f1ab58d998c3f1;

/**
 * MMSMoWebhookRequest
 */
final class MMSMoWebhookRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'messageCount' => [
            'format' => 'int32',
        ],
        'pendingMessageCount' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Number of returned messages in this request.
     * Format: int32
     */
    public int $messageCount {
        set {
            $this->assigning('messageCount', $value);
            $this->messageCount = $value;
        }
    }
    /**
     * Number of remaining new messages on Infobip servers ready to be returned in the next request.
     * Format: int32
     */
    public int $pendingMessageCount {
        set {
            $this->assigning('pendingMessageCount', $value);
            $this->pendingMessageCount = $value;
        }
    }
    public \InfobipSDK\Collections\N62b589527d7474f21f086ddb07e8698e9fcfbbe16400c91718f1ab58d998c3f1\MMSMoWebhookRequest\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messageCount' => is_int($value) ? $this->messageCount = $value : parent::assignMember($name, $value),
            'pendingMessageCount' => is_int($value) ? $this->pendingMessageCount = $value : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N62b589527d7474f21f086ddb07e8698e9fcfbbe16400c91718f1ab58d998c3f1\MMSMoWebhookRequest\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MMSMoWebhookResult::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
