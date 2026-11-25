<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866;

/**
 * VoiceApiModel
 *
 * Used to define voice in which text will be synthesized. To get a list of the supported voices for chosen language use <a href="https://www.infobip.com/docs/api#channels/voice/get-voices" target="_blank">Get voices.</a>
 */
final class VoiceApiModel extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'gender',
        'name',
    ];

    protected const array VALIDATION = [
        'gender' => [
            'minLength' => 1,
            'maxLength' => 36,
        ],
        'name' => [
            'minLength' => 1,
            'maxLength' => 36,
        ],
    ];

    /**
     * Gender of the voice. Can be MALE or FEMALE.
     */
    public string $gender {
        set {
            $this->assigning('gender', $value);
            $this->gender = $value;
        }
    }
    /**
     * Name of the voice.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'gender' => is_string($value) ? $this->gender = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
