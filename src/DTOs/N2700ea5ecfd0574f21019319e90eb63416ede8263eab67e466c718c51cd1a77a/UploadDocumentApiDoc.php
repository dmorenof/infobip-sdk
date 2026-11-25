<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * UploadDocumentApiDoc
 */
final class UploadDocumentApiDoc extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'document',
];

    /**
     * CPaaS X property identifying an application, a use case or an environment on your system. It should only be set if you are using CPaaS X Applications with your traffic.
     */
    public string $applicationId;
    /**
     * The document file to be uploaded.
     * Format: binary
     */
    public string|\Psr\Http\Message\UploadedFileInterface $document;
    /**
     * CPaaS X property identifying an unique actor on your system. Should only be set if you are using CPaaS X Applications with your traffic.
     */
    public string $entityId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'entityId' => is_string($value) ? $this->entityId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
