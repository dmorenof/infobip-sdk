<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * LogResponseLogAppleMfbOutboundContent
 */
final class LogResponseLogAppleMfbOutboundContent extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\CursorPageInfo $cursor;
    /**
     * An array of message log results, one object per each message log entry.
     */
    public \InfobipSDK\Collections\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\LogResponseLogAppleMfbOutboundContent\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cursor' => $value instanceof \stdClass ? $this->cursor = new \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\CursorPageInfo($value) : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\LogResponseLogAppleMfbOutboundContent\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\LogAppleMfbOutboundContent::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
