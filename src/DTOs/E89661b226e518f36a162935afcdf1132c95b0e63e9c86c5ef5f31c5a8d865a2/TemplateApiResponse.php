<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

/**
 * TemplateApiResponse
 *
 * List of templates.
 * Example: {"id":"c4391685-b21a-4c21-a470-5453e9382752","name":"Template name","language":"English","languageCode":"en","channel":"SMS","external":false,"content":"Simple text content","createdAt":"2024-01-01T00:00:00.000+00:00","updatedAt":"2024-01-01T00:00:00.000+00:00","tags":[{"name":"Template tag","createdAt":"2024-12-10T00:00:00.000+00:00","updatedAt":"2024-12-10T00:00:00.000+00:00"}],"attachments":[]}
 */
final class TemplateApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of template attachments.
     */
    public \InfobipSDK\Collections\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\TemplateApiResponse\AttachmentsCollection $attachments;
    public \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\MessageChannel $channel;
    /**
     * Template content.
     */
    public \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\TemplateApiResponse\ContentDTO $content;
    public \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ContentType $contentType;
    /**
     * Timestamp when template was created.
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Boolean flag that indicates whether the template is external, WhatsApp pre-registered, or internal user-defined.
     * If the flag is true, then the template is WhatsApp pre-registered, otherwise, it is user-defined.
     */
    public bool $external;
    /**
     * Template id.
     */
    public string $id;
    /**
     * Language used when constructing template content.
     */
    public string $language;
    /**
     * Language code used when constructing template content.
     */
    public string $languageCode;
    /**
     * Template name.
     */
    public string $name;
    public string $sender;
    /**
     * List of template tags.
     */
    public \InfobipSDK\Collections\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\TemplateApiResponse\TagsCollection $tags;
    /**
     * Timestamp when template was updated.
     * Format: date-time
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'attachments' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->attachments = new \InfobipSDK\Collections\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\TemplateApiResponse\AttachmentsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\TemplateFileApiResponse::class)) : parent::assignMember($name, $value),
            'channel' => is_string($value) ? $this->channel = \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\MessageChannel::from($value) : parent::assignMember($name, $value),
            'contentType' => is_string($value) ? $this->contentType = \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\ContentType::from($value) : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'external' => is_bool($value) ? $this->external = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'language' => is_string($value) ? $this->language = $value : parent::assignMember($name, $value),
            'languageCode' => is_string($value) ? $this->languageCode = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            'tags' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->tags = new \InfobipSDK\Collections\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\TemplateApiResponse\TagsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\TemplateTagApiResponse::class)) : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
