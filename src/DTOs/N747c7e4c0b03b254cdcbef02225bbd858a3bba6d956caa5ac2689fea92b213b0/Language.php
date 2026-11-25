<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0;

/**
 * Language
 *
 * Template language. It has to be the same language the template was created with.
 */
final class Language extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'code',
];

    protected const array VALIDATION = [
    'code' => [
        'minLength' => 0,
        'maxLength' => 5,
    ],
];

    /**
     * The code of the language the template was created with, for example en or en_US.
     * Example: "en"
     */
    public string $code {
        set {
            $this->assigning('code', $value);
            $this->code = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'code' => is_string($value) ? $this->code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
