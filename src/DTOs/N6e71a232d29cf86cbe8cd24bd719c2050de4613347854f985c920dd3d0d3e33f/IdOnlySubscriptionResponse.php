<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f;

/**
 * Subscription
 *
 * Subscription group.
 */
final class IdOnlySubscriptionResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlyProfileResponse $profile;
    /**
     * Subscription ID.
     */
    public string $subscriptionId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'profile' => $value instanceof \stdClass ? $this->profile = new \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlyProfileResponse($value) : parent::assignMember($name, $value),
            'subscriptionId' => is_string($value) ? $this->subscriptionId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
