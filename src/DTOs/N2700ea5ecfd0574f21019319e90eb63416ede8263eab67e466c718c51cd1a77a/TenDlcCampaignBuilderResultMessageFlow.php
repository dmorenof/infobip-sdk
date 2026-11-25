<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * TenDlcCampaignBuilderResultMessageFlow
 *
 * Campaign message flow for 10DLC campaigns
 */
final class TenDlcCampaignBuilderResultMessageFlow extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * First example message
     */
    public string $exampleMessage1;
    /**
     * Second example message
     */
    public string $exampleMessage2;
    /**
     * Help response message
     */
    public string $helpMessage;
    /**
     * Opt-in confirmation message
     */
    public string $optInMessage;
    /**
     * Opt-out response message
     */
    public string $optOutMessage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'exampleMessage1' => is_string($value) ? $this->exampleMessage1 = $value : parent::assignMember($name, $value),
            'exampleMessage2' => is_string($value) ? $this->exampleMessage2 = $value : parent::assignMember($name, $value),
            'helpMessage' => is_string($value) ? $this->helpMessage = $value : parent::assignMember($name, $value),
            'optInMessage' => is_string($value) ? $this->optInMessage = $value : parent::assignMember($name, $value),
            'optOutMessage' => is_string($value) ? $this->optOutMessage = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
