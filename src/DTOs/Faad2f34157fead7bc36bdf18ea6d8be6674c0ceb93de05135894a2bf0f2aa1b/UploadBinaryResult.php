<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b;

/**
 * UploadBinaryResult
 */
final class UploadBinaryResult extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ID that uniquely identifies the uploaded content.
     * Example: "B44419205B27012D82F3BAD7B7EB37BAC884DBC91685390C3232D2191DC9D5EAF32F119D3530679F9B251AB689B4A60D7C2EB5A5EBB75C305367140D512E6B5D04200E7FFA5E84EAF37590C33F22B973514126755981CB170D86A7506CB38265280478A5B4EF2A7D11E9F24F286E7E315DFB1FF9BFEE08E036584074A1B76F097D9EC77E3FDD0FCC08362243E306F99F"
     */
    public string $uploadedContentId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'uploadedContentId' => is_string($value) ? $this->uploadedContentId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
