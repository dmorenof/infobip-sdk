<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742;

/**
 * LogResponseLogPushOutboundContent
 */
final class LogResponseLogPushOutboundContent extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\CursorPageInfo $cursor;
    /**
     * An array of message log results, one object per each message log entry.
     */
    public \InfobipSDK\Collections\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\LogResponseLogPushOutboundContent\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cursor' => $value instanceof \stdClass ? $this->cursor = new \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\CursorPageInfo($value) : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\LogResponseLogPushOutboundContent\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\LogPushOutboundContent::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
