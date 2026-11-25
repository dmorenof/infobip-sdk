<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3;

/**
 * PublicReputationDetail
 *
 * Last known reputation metrics.
 */
final class PublicReputationDetail extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'flagStatus',
];

    /**
     * Do recipients answer calls from this number?
     */
    public \InfobipSDK\Enums\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\PublicReputationDetail\DesirabilityMetricEnum $desirabilityMetric;
    /**
     * Do recipients stay on the line?
     */
    public \InfobipSDK\Enums\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\PublicReputationDetail\EngagementMetricEnum $engagementMetric;
    /**
     * Category of spam flag (e.g. Telemarketer, Survey).
     * Example: "Telemarketer"
     */
    public string $flagCategory;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PublicHiyaFlagStatus $flagStatus;
    /**
     * Is the number well-established or fresh/new?
     */
    public \InfobipSDK\Enums\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\PublicReputationDetail\MaturityMetricEnum $maturityMetric;
    /**
     * Do recipients block or report the caller?
     */
    public \InfobipSDK\Enums\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\PublicReputationDetail\ReactionMetricEnum $reactionMetric;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'desirabilityMetric' => is_string($value) ? $this->desirabilityMetric = \InfobipSDK\Enums\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\PublicReputationDetail\DesirabilityMetricEnum::from($value) : parent::assignMember($name, $value),
            'engagementMetric' => is_string($value) ? $this->engagementMetric = \InfobipSDK\Enums\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\PublicReputationDetail\EngagementMetricEnum::from($value) : parent::assignMember($name, $value),
            'flagCategory' => is_string($value) ? $this->flagCategory = $value : parent::assignMember($name, $value),
            'flagStatus' => is_string($value) ? $this->flagStatus = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PublicHiyaFlagStatus::from($value) : parent::assignMember($name, $value),
            'maturityMetric' => is_string($value) ? $this->maturityMetric = \InfobipSDK\Enums\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\PublicReputationDetail\MaturityMetricEnum::from($value) : parent::assignMember($name, $value),
            'reactionMetric' => is_string($value) ? $this->reactionMetric = \InfobipSDK\Enums\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\PublicReputationDetail\ReactionMetricEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
