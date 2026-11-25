<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * LineOaMessageRequestOptions
 *
 * Options applicable to all messages in the request.
 */
final class LineOaMessageRequestOptions extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\ClientPriority $priority;
    public \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\RequestSchedulingSettings $schedule;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'priority' => is_string($value) ? $this->priority = \InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\ClientPriority::from($value) : parent::assignMember($name, $value),
            'schedule' => $value instanceof \stdClass ? $this->schedule = new \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\RequestSchedulingSettings($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
