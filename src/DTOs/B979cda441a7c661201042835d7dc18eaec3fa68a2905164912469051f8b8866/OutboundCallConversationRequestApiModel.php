<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866;

/**
 * OutboundCallConversationRequestApiModel
 * Example: {"from":"385998779621","to":"38761123123","agentId":"2010EA93ABC142E812C19F529BCBD22F","voiceClientType":"PSTN"}
 */
final class OutboundCallConversationRequestApiModel extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'agentId',
        'from',
        'to',
    ];

    /**
     * Id of the agent originating the call.
     */
    public string $agentId;
    /**
     * DID number that is used to originate the call. DID numbers can be configured through the portal, or using the 'Purchase a number' endpoint.
     */
    public string $from;
    /**
     * Destination number.
     */
    public string $to;
    public \InfobipSDK\Enums\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\VoiceClientType $voiceClientType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'agentId' => is_string($value) ? $this->agentId = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            'voiceClientType' => is_string($value) ? $this->voiceClientType = \InfobipSDK\Enums\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\VoiceClientType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
