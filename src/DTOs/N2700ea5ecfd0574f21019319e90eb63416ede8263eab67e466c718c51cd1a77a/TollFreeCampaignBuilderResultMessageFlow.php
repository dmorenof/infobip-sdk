<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * TollFreeCampaignBuilderResultMessageFlow
 *
 * Campaign message flow for Toll Free Number campaigns
 */
final class TollFreeCampaignBuilderResultMessageFlow extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Example message
     */
    public string $exampleMessage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'exampleMessage' => is_string($value) ? $this->exampleMessage = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
