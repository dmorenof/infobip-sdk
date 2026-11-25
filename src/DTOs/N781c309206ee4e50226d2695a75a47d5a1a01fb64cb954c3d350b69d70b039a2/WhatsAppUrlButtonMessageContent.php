<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2;

/**
 * WhatsAppUrlButtonMessageContent
 */
final class WhatsAppUrlButtonMessageContent extends \InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\WhatsAppPublicMessageContent
{
    public const array REQUIRED_FIELDS = [];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public string $body;
    public string $displayText;
    public string $footer;
    public string $header;
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'body' => is_string($value) ? $this->body = $value : parent::assignMember($name, $value),
            'displayText' => is_string($value) ? $this->displayText = $value : parent::assignMember($name, $value),
            'footer' => is_string($value) ? $this->footer = $value : parent::assignMember($name, $value),
            'header' => is_string($value) ? $this->header = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
