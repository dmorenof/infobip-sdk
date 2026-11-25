<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913;

/**
 * ProviderSenderLaunchStatus
 *
 * List of providers in the country and their launch status.
 */
final class ProviderSenderLaunchStatus extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
        'status',
        'updatedAt',
    ];

    /**
     * Detailed feedback for rejection if the sender launch has been rejected by the provider. Present only if launch request has been created with `structuredFeedback` opt-in feature. Please check [Submit resource request](#platform/resources/resource-request/submit-resource-request) for more details.
     */
    public \InfobipSDK\Collections\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\ProviderSenderLaunchStatus\FeedbackCollection $feedback;
    /**
     * Name of the provider.
     */
    public string $name;
    /**
     * Reason for rejection if the sender launch has been rejected by the provider. Present only if launch request has been created without `structuredFeedback` opt-in feature. Please check [Submit resource request](#platform/resources/resource-request/submit-resource-request) for more details.
     */
    public string $rejectionReason;
    public \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\ProviderLaunchStatus $status;
    /**
     * Timestamp when the provider status was last updated.
     * Format: date-time
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'feedback' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->feedback = new \InfobipSDK\Collections\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\ProviderSenderLaunchStatus\FeedbackCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\ProviderSenderLaunchFeedback::class)) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'rejectionReason' => is_string($value) ? $this->rejectionReason = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913\ProviderLaunchStatus::from($value) : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
