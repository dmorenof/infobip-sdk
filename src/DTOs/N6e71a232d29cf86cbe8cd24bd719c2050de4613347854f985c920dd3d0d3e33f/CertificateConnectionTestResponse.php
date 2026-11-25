<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f;

/**
 * CertificateConnectionTestResponse
 */
final class CertificateConnectionTestResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Existing certificate identifier.
     */
    public string $certificateId;
    /**
     * Contains reasons why the connection test was failed.
     */
    public \InfobipSDK\Collections\StringCollection $failReasons;
    /**
     * Contains a hint how the client can fix the errors.
     */
    public string $hint;
    public \InfobipSDK\Enums\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\ConnectionTestResult $result;
    /**
     * A webhook URL over which a connectivity test will be performed.
     */
    public string $webhookUrl;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'certificateId' => is_string($value) ? $this->certificateId = $value : parent::assignMember($name, $value),
            'failReasons' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->failReasons = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'hint' => is_string($value) ? $this->hint = $value : parent::assignMember($name, $value),
            'result' => is_string($value) ? $this->result = \InfobipSDK\Enums\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\ConnectionTestResult::from($value) : parent::assignMember($name, $value),
            'webhookUrl' => is_string($value) ? $this->webhookUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
