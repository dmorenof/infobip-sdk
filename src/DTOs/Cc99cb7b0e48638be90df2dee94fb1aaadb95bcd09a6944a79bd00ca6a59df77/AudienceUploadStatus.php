<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77;

/**
 * AudienceUploadStatus
 */
final class AudienceUploadStatus extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'adAccountId',
    'batchUploadingStatus',
    'customAudienceId',
    'notificationType',
    'pageId',
    'reportedAt',
];

    /**
     * Ad Account ID owning the custom audience.
     */
    public string $adAccountId;
    /**
     * Meta Application ID that received the webhook.
     */
    public string $appId;
    /**
     * Lower bound of the approximate number of people in this Custom Audience.
     * Format: int64
     */
    public int $approximateCountLowerBound;
    /**
     * Upper bound of the approximate number of people in this Custom Audience.
     * Format: int64
     */
    public int $approximateCountUpperBound;
    /**
     * Status of the upload for this batch of uploaded customers (e.g. SUCCESS).
     */
    public string $batchUploadingStatus;
    /**
     * Business ID associated with the page.
     */
    public string $businessId;
    /**
     * Custom Audience ID that was updated.
     */
    public string $customAudienceId;
    public \InfobipSDK\Enums\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\NotificationType $notificationType;
    /**
     * Number of uploaded customer rows processed in this batch.
     * Format: int64
     */
    public int $numRows;
    /**
     * Page ID for which the custom audience upload was processed.
     */
    public string $pageId;
    /**
     * Date and time when the upload status was reported. Has the following format: yyyy-MM-dd'T'HH:mm:ss.SSS'Z'.
     * Format: date-time
     */
    public string $reportedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'adAccountId' => is_string($value) ? $this->adAccountId = $value : parent::assignMember($name, $value),
            'appId' => is_string($value) ? $this->appId = $value : parent::assignMember($name, $value),
            'approximateCountLowerBound' => is_int($value) ? $this->approximateCountLowerBound = $value : parent::assignMember($name, $value),
            'approximateCountUpperBound' => is_int($value) ? $this->approximateCountUpperBound = $value : parent::assignMember($name, $value),
            'batchUploadingStatus' => is_string($value) ? $this->batchUploadingStatus = $value : parent::assignMember($name, $value),
            'businessId' => is_string($value) ? $this->businessId = $value : parent::assignMember($name, $value),
            'customAudienceId' => is_string($value) ? $this->customAudienceId = $value : parent::assignMember($name, $value),
            'notificationType' => is_string($value) ? $this->notificationType = \InfobipSDK\Enums\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\NotificationType::from($value) : parent::assignMember($name, $value),
            'numRows' => is_int($value) ? $this->numRows = $value : parent::assignMember($name, $value),
            'pageId' => is_string($value) ? $this->pageId = $value : parent::assignMember($name, $value),
            'reportedAt' => is_string($value) ? $this->reportedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
