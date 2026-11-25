<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb;

/**
 * LogResponseLogViberBotOutboundContent
 */
final class LogResponseLogViberBotOutboundContent extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\CursorPageInfo $cursor;
    /**
     * An array of message log results, one object per each message log entry.
     */
    public \InfobipSDK\Collections\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\LogResponseLogViberBotOutboundContent\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cursor' => $value instanceof \stdClass ? $this->cursor = new \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\CursorPageInfo($value) : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\LogResponseLogViberBotOutboundContent\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\LogViberBotOutboundContent::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
