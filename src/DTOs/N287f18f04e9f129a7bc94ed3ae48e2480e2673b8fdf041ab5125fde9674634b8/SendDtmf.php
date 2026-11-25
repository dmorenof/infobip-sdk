<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * SendDtmf
 *
 * SendDtmf action sends DTMF digits on a call.
 */
final class SendDtmf extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'action',
    'dtmf',
];

    protected const array VALIDATION = [
    'dtmf' => [
        'minLength' => 1,
    ],
];

    /**
     * Action discriminator.
     */
    public \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\SendDtmf\ActionEnum $action;
    /**
     * DTMF digits to send. `W` and `w` characters are supported to introduce one-second and half-second pause.
     */
    public string $dtmf {
        set {
            $this->assigning('dtmf', $value);
            $this->dtmf = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'action' => is_string($value) ? $this->action = \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\SendDtmf\ActionEnum::from($value) : parent::assignMember($name, $value),
            'dtmf' => is_string($value) ? $this->dtmf = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
