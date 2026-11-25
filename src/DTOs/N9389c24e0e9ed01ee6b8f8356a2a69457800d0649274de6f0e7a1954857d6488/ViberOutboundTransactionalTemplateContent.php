<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488;

/**
 * ViberOutboundTransactionalTemplateContent
 */
final class ViberOutboundTransactionalTemplateContent extends \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\ViberOutboundContent
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'templateId' => [
        'minLength' => 1,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Template language. Must match the 'lang' parameter from template creation. If not specified (OTP templates only), defaults to device language.
     */
    public string $language;
    /**
     * A range of variables which are specific per template. Omit it if template doesn't have parameters.
     */
    public \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\ViberOutboundTransactionalTemplateContent\ParametersMap $parameters;
    /**
     * Predefined code of a template to be sent.
     */
    public string $templateId {
        set {
            $this->assigning('templateId', $value);
            $this->templateId = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'language' => is_string($value) ? $this->language = $value : parent::assignMember($name, $value),
            'templateId' => is_string($value) ? $this->templateId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
