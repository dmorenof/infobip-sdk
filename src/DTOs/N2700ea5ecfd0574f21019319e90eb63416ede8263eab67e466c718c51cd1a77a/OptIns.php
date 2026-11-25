<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * OptIns
 */
final class OptIns extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\InteractiveVoiceResponseOptIn $interactiveVoiceResponse;
    public \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\KeywordOptIn $keyword;
    public \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\VerbalOptIn $verbal;
    public \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\WebOptIn $web;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'interactiveVoiceResponse' => $value instanceof \stdClass ? $this->interactiveVoiceResponse = new \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\InteractiveVoiceResponseOptIn($value) : parent::assignMember($name, $value),
            'keyword' => $value instanceof \stdClass ? $this->keyword = new \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\KeywordOptIn($value) : parent::assignMember($name, $value),
            'verbal' => $value instanceof \stdClass ? $this->verbal = new \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\VerbalOptIn($value) : parent::assignMember($name, $value),
            'web' => $value instanceof \stdClass ? $this->web = new \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\WebOptIn($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
