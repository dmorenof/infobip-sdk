<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0;

/**
 * UtilityTextParameter
 *
 * Values for the placeholders in the template body. Each value names the placeholder it fills. May be empty when the body has no placeholders.
 */
final class UtilityTextParameter extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'parameterName',
        'text',
    ];

    protected const array VALIDATION = [
        'parameterName' => [
            'minLength' => 0,
            'maxLength' => 2048,
        ],
        'text' => [
            'minLength' => 0,
            'maxLength' => 2048,
        ],
    ];

    /**
     * Name of the placeholder this value fills. Templates have to be created with parameter format NAMED, positional templates are not supported.
     */
    public string $parameterName {
        set {
            $this->assigning('parameterName', $value);
            $this->parameterName = $value;
        }
    }
    /**
     * The text placed in the template's placeholder.
     */
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'parameterName' => is_string($value) ? $this->parameterName = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
