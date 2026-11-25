<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454;

/**
 * LogResponseLogKakaoAlimOutboundContent
 */
final class LogResponseLogKakaoAlimOutboundContent extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\CursorPageInfo $cursor;
    /**
     * An array of message log results, one object per each message log entry.
     */
    public \InfobipSDK\Collections\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\LogResponseLogKakaoAlimOutboundContent\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cursor' => $value instanceof \stdClass ? $this->cursor = new \InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\CursorPageInfo($value) : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\LogResponseLogKakaoAlimOutboundContent\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\LogKakaoAlimOutboundContent::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
