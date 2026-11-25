<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf;

/**
 * WebhookAttachmentApiDoc
 *
 * Attachment. Present only for the DOCUMENT requirement type.
 */
final class WebhookAttachmentApiDoc extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ID of the document.
     */
    public string $documentId;
    public \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\DocumentType $documentType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'documentId' => is_string($value) ? $this->documentId = $value : parent::assignMember($name, $value),
            'documentType' => is_string($value) ? $this->documentType = \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\DocumentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
