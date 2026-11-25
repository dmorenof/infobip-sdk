<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea;

/**
 * AuthenticationTemplateStructureApiData
 *
 * Structure of the created authentication template. Must consist of body, footer and button.
 */
final class AuthenticationTemplateStructureApiData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'body',
    'buttons',
    'footer',
];

    protected const array VALIDATION = [
    'buttons' => [
        'minItems' => 1,
        'maxItems' => 1,
    ],
];

    public \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\AuthenticationBodyApiData $body;
    /**
     * Authentication template buttons. Has to be either a 'copy code' button or 'one-tap' button.
     */
    public \InfobipSDK\Collections\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\AuthenticationTemplateStructureApiData\ButtonsCollection $buttons {
        set {
            $this->assigning('buttons', $value);
            $this->buttons = $value;
        }
    }
    public \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\AuthenticationFooterApiData $footer;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'body' => $value instanceof \stdClass ? $this->body = new \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\AuthenticationBodyApiData($value) : parent::assignMember($name, $value),
            'footer' => $value instanceof \stdClass ? $this->footer = new \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\AuthenticationFooterApiData($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
