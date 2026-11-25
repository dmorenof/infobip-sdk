<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913;

/**
 * RcsTestNumberUpdateWebhookResponse
 *
 * Webhook response containing RCS test number update events
 */
final class RcsTestNumberUpdateWebhookResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'results',
];

    /**
     * Collection of RCS test number update events.
     */
    public \InfobipSDK\Collections\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTestNumberUpdateWebhookResponse\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTestNumberUpdateWebhookResponse\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\RcsTestNumberUpdateEvent::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
