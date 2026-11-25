<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1;

/**
 * EmailMessageRequestOptions
 *
 * Options applicable to all messages in the request.
 */
final class EmailMessageRequestOptions extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Enums\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\ClientPriority $clientPriority;
    public \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\EmailRequestSchedulingSettings $schedule;
    public \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\EmailUrlOptions $tracking;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'clientPriority' => is_string($value) ? $this->clientPriority = \InfobipSDK\Enums\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\ClientPriority::from($value) : parent::assignMember($name, $value),
            'schedule' => $value instanceof \stdClass ? $this->schedule = new \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\EmailRequestSchedulingSettings($value) : parent::assignMember($name, $value),
            'tracking' => $value instanceof \stdClass ? $this->tracking = new \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\EmailUrlOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
