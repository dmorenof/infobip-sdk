<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * Campaign
 */
class Campaign extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'name',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a.ExternalTenDlcCampaign' => 'InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\ExternalTenDlcCampaign',
    '2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a.TenDlcCampaign' => 'InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\TenDlcCampaign',
    '2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a.TollFreeCampaign' => 'InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\TollFreeCampaign',
    'EXTERNAL_TEN_DIGIT_LONG_CODE' => 'InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\ExternalTenDlcCampaign',
    'TEN_DIGIT_LONG_CODE' => 'InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\TenDlcCampaign',
    'TOLL_FREE_NUMBER' => 'InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\TollFreeCampaign',
];

    protected const array VALIDATION = [
    'name' => [
        'minLength' => 1,
        'maxLength' => 30,
        'pattern' => '[A-Za-z0-9_ ]*',
    ],
    'referenceId' => [
        'minLength' => 0,
        'maxLength' => 50,
    ],
];

    protected const array READ_ONLY_FIELDS = [
    'createdDate',
    'id',
    'lastModifiedDate',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * CPaaS X property identifying an application, a use case or an environment on your system. It should only be set if you are using CPaaS X Applications with your traffic.
     */
    public string $applicationId;
    public \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignFeedback $campaignFeedback;
    /**
     * The date and time when the campaign was created.
     * Format: date-time
     */
    public string $createdDate;
    /**
     * CPaaS X property identifying an unique actor on your system. Should only be set if you are using CPaaS X Applications with your traffic.
     */
    public string $entityId;
    /**
     * The identifier for the campaign.
     * Format: uuid
     */
    public string $id;
    /**
     * The date and time when the campaign was last modified.
     * Format: date-time
     */
    public string $lastModifiedDate;
    /**
     * The name of the campaign.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    public \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\PriorityInfo $priority;
    /**
     * Unique user defined ID for the campaign. While not required, it is recommended to supply a referenceId as the uniqueness constraint will help ensure a campaign is not accidentally created multiple times. Subsequent create requests with the same referenceId will be rejected with an error.
     */
    public string $referenceId {
        set {
            $this->assigning('referenceId', $value);
            $this->referenceId = $value;
        }
    }
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignStage $stage;
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'campaignFeedback' => $value instanceof \stdClass ? $this->campaignFeedback = new \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignFeedback($value) : parent::assignMember($name, $value),
            'createdDate' => is_string($value) ? $this->createdDate = $value : parent::assignMember($name, $value),
            'entityId' => is_string($value) ? $this->entityId = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'lastModifiedDate' => is_string($value) ? $this->lastModifiedDate = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'priority' => $value instanceof \stdClass ? $this->priority = new \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\PriorityInfo($value) : parent::assignMember($name, $value),
            'referenceId' => is_string($value) ? $this->referenceId = $value : parent::assignMember($name, $value),
            'stage' => is_string($value) ? $this->stage = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignStage::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
