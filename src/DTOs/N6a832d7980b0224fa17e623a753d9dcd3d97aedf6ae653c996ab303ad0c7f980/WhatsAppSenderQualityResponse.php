<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980;

/**
 * WhatsAppSenderQualityResponse
 */
final class WhatsAppSenderQualityResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'results',
];

    /**
     * List of the quality information related to specific senders.
     */
    public \InfobipSDK\Collections\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\WhatsAppSenderQualityResponse\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\WhatsAppSenderQualityResponse\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\WhatsAppSenderQuality::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
