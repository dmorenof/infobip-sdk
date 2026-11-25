<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2;

/**
 * WhatsAppListMessageContent
 */
final class WhatsAppListMessageContent extends \InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\WhatsAppPublicMessageContent
{
    public const array REQUIRED_FIELDS = [];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public string $body;
    public string $button;
    public string $footer;
    public \InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\WhatsAppHeader $header;
    public \InfobipSDK\Collections\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\WhatsAppListMessageContent\SectionsCollection $sections;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'body' => is_string($value) ? $this->body = $value : parent::assignMember($name, $value),
            'button' => is_string($value) ? $this->button = $value : parent::assignMember($name, $value),
            'footer' => is_string($value) ? $this->footer = $value : parent::assignMember($name, $value),
            'sections' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->sections = new \InfobipSDK\Collections\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\WhatsAppListMessageContent\SectionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N781c309206ee4e50226d2695a75a47d5a1a01fb64cb954c3d350b69d70b039a2\PublicWhatsAppListSection::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
