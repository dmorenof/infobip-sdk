<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2;

/**
 * LiveChatDocumentInboundMessageContent
 * Example: {"url":"http://example.com","caption":"Document caption","type":"DOCUMENT"}
 */
final class LiveChatDocumentInboundMessageContent extends \InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\LiveChatPublicInboundMessageContent
{
    public const array REQUIRED_FIELDS = [];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public string $caption;
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'caption' => is_string($value) ? $this->caption = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
