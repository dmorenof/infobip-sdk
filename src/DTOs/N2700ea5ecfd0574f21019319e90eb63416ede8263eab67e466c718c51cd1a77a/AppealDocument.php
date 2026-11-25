<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * AppealDocument
 *
 * A document attached to a brand identity appeal.
 */
final class AppealDocument extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'documentId',
];

    /**
     * ID of the previously uploaded document.
     * Format: uuid
     */
    public string $documentId;
    /**
     * Classification of the document type. Choose the type that matches what the appeal needs to resolve.
     * * `IRS_CP575` - IRS EIN confirmation letter (CP-575), proving the legal business name and Tax ID. Submit this when the brand was rejected because its Tax ID could not be verified.
     * * `IRS_TAX_EXEMPT_STATUS_LETTER` - IRS letter evidencing 501(c) tax-exempt status: a determination letter (Letter 947, Letter 948, or Letter 948E) or a letter of intent (Letter 5822). Submit this when the brand is registered but its non-profit status has not been confirmed.
     * * `OTHER` - Any additional document supporting the appeal.
     * Defaults to OTHER if not specified.
     *
     */
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\AppealDocument\DocumentTypeEnum $documentType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'documentId' => is_string($value) ? $this->documentId = $value : parent::assignMember($name, $value),
            'documentType' => is_string($value) ? $this->documentType = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\AppealDocument\DocumentTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
