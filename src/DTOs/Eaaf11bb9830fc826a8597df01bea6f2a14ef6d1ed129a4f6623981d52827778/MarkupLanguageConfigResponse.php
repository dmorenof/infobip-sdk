<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Eaaf11bb9830fc826a8597df01bea6f2a14ef6d1ed129a4f6623981d52827778;

/**
 * MarkupLanguageConfigResponse
 *
 * Markup language configuration response object.
 */
final class MarkupLanguageConfigResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'httpMethod',
        'markupUrl',
        'name',
    ];

    /**
     * Timestamp when the configuration was created, in ISO-8601 UTC format (yyyy-MM-dd'T'HH:mm:ss.SSSZ).
     * Example: "2025-04-04T11:38:01.724Z"
     * Format: date-time
     */
    public string $createTime;
    /**
     * URL where error notifications will be sent.
     */
    public string $errorUrl;
    /**
     * HTTP method for callbacks (e.g., POST, GET).
     */
    public string $httpMethod;
    /**
     * Unique identifier of the configuration.
     * Format: int64
     */
    public int $id;
    /**
     * URL where markup script is hosted.
     */
    public string $markupUrl;
    /**
     * Configuration name.
     */
    public string $name;
    /**
     * URL where notifications will be sent.
     */
    public string $notifyUrl;
    /**
     * Timestamp when the configuration was last updated, in ISO-8601 UTC format (yyyy-MM-dd'T'HH:mm:ss.SSSZ).
     * Example: "2025-04-04T11:38:01.724Z"
     * Format: date-time
     */
    public string $updateTime;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createTime' => is_string($value) ? $this->createTime = $value : parent::assignMember($name, $value),
            'errorUrl' => is_string($value) ? $this->errorUrl = $value : parent::assignMember($name, $value),
            'httpMethod' => is_string($value) ? $this->httpMethod = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'markupUrl' => is_string($value) ? $this->markupUrl = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'notifyUrl' => is_string($value) ? $this->notifyUrl = $value : parent::assignMember($name, $value),
            'updateTime' => is_string($value) ? $this->updateTime = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
