<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * TenDlcAiReviewRequest
 *
 * Request to submit 10DLC campaign info for AI compliance review with full details
 */
final class TenDlcAiReviewRequest extends \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignInfoReviewRequest
{
    public const array REQUIRED_FIELDS = [
    'brandName',
    'brandSupportEmail',
    'brandWebsite',
    'customerCareEmail',
    'messageExamples',
    'programDescription',
    'reviewType',
];

    protected const array VALIDATION = [
    'brandName' => [
        'minLength' => 1,
    ],
    'brandSupportEmail' => [
        'minLength' => 1,
    ],
    'brandWebsite' => [
        'minLength' => 1,
    ],
    'ctaWebsite' => [
        'minLength' => 1,
    ],
    'ctas' => [
        'minItems' => 1,
    ],
    'customerCareEmail' => [
        'minLength' => 1,
    ],
    'helpMessage' => [
        'minLength' => 1,
    ],
    'messageExamples' => [
        'minItems' => 1,
    ],
    'messageFlow' => [
        'minLength' => 1,
    ],
    'optInMessage' => [
        'minLength' => 1,
    ],
    'optOutMessage' => [
        'minLength' => 1,
    ],
    'programDescription' => [
        'minLength' => 1,
    ],
    'useCases' => [
        'minItems' => 1,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Whether the campaign is age-gated (18+)
     */
    public bool $ageGated;
    /**
     * CTA website URL
     */
    public string $ctaWebsite {
        set {
            $this->assigning('ctaWebsite', $value);
            $this->ctaWebsite = $value;
        }
    }
    /**
     * List of call-to-action texts
     */
    public \InfobipSDK\Collections\StringCollection $ctas {
        set {
            $this->assigning('ctas', $value);
            $this->ctas = $value;
        }
    }
    /**
     * Whether the campaign involves direct lending
     */
    public bool $directLending;
    /**
     * The message sent to a user after they have asked for help.
     */
    public string $helpMessage {
        set {
            $this->assigning('helpMessage', $value);
            $this->helpMessage = $value;
        }
    }
    /**
     * Message flow description
     */
    public string $messageFlow {
        set {
            $this->assigning('messageFlow', $value);
            $this->messageFlow = $value;
        }
    }
    /**
     * The message sent to the user after they have subscribed.
     */
    public string $optInMessage {
        set {
            $this->assigning('optInMessage', $value);
            $this->optInMessage = $value;
        }
    }
    /**
     * The message sent to a user after they have asked to stop receiving messages.
     */
    public string $optOutMessage {
        set {
            $this->assigning('optOutMessage', $value);
            $this->optOutMessage = $value;
        }
    }
    /**
     * The use cases for this campaign.
     */
    public \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\TenDlcAiReviewRequest\UseCasesCollection $useCases {
        set {
            $this->assigning('useCases', $value);
            $this->useCases = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ageGated' => is_bool($value) ? $this->ageGated = $value : parent::assignMember($name, $value),
            'ctaWebsite' => is_string($value) ? $this->ctaWebsite = $value : parent::assignMember($name, $value),
            'ctas' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->ctas = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'directLending' => is_bool($value) ? $this->directLending = $value : parent::assignMember($name, $value),
            'helpMessage' => is_string($value) ? $this->helpMessage = $value : parent::assignMember($name, $value),
            'messageFlow' => is_string($value) ? $this->messageFlow = $value : parent::assignMember($name, $value),
            'optInMessage' => is_string($value) ? $this->optInMessage = $value : parent::assignMember($name, $value),
            'optOutMessage' => is_string($value) ? $this->optOutMessage = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
