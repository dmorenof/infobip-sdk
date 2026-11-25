<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454;

/**
 * KakaoAlimMessageRequestOptions
 *
 * Options applicable to all messages in the request.
 */
final class KakaoAlimMessageRequestOptions extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Enums\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\ClientPriority $priority;
    public \InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\RequestSchedulingSettings $schedule;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'priority' => is_string($value) ? $this->priority = \InfobipSDK\Enums\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\ClientPriority::from($value) : parent::assignMember($name, $value),
            'schedule' => $value instanceof \stdClass ? $this->schedule = new \InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\RequestSchedulingSettings($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
