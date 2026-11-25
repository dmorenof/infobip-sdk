<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * Play
 *
 * Play action plays an audio file or stream to the caller.
 */
final class Play extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'action',
    'content',
];

    protected const array VALIDATION = [
    'loopCount' => [
        'minimum' => 0,
        'exclusiveMinimum' => 0,
        'format' => 'int32',
    ],
];

    /**
     * Action discriminator.
     */
    public \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Play\ActionEnum $action;
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\OneOfPlayContent $content;
    /**
     * Number of times to loop the content.
     * Format: int32
     */
    public int $loopCount {
        set {
            $this->assigning('loopCount', $value);
            $this->loopCount = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'action' => is_string($value) ? $this->action = \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Play\ActionEnum::from($value) : parent::assignMember($name, $value),
            'loopCount' => is_int($value) ? $this->loopCount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
