<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B888d833f5e2077036527211f9d9a5502285e1c742cd8459a9d3ad85cb1fa1f5;

/**
 * PreviewResponse
 */
final class PreviewResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Message content supplied in the request.
     */
    public string $originalText;
    /**
     * Allows for previewing the original message content once additional language configuration has been applied to it.
     */
    public \InfobipSDK\Collections\B888d833f5e2077036527211f9d9a5502285e1c742cd8459a9d3ad85cb1fa1f5\PreviewResponse\PreviewsCollection $previews;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'originalText' => is_string($value) ? $this->originalText = $value : parent::assignMember($name, $value),
            'previews' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->previews = new \InfobipSDK\Collections\B888d833f5e2077036527211f9d9a5502285e1c742cd8459a9d3ad85cb1fa1f5\PreviewResponse\PreviewsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\Preview::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
