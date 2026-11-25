<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77;

/**
 * CreateAudienceRequest
 */
final class CreateAudienceRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'adAccountId',
        'name',
        'pageId',
    ];

    protected const array VALIDATION = [
        'adAccountId' => [
            'minLength' => 1,
            'maxLength' => 100,
        ],
        'description' => [
            'minLength' => 0,
            'maxLength' => 1024,
        ],
        'name' => [
            'minLength' => 1,
            'maxLength' => 255,
        ],
        'pageId' => [
            'minLength' => 1,
            'maxLength' => 100,
        ],
    ];

    /**
     * Facebook ad account ID.
     * Example: "act_3339405976215927"
     */
    public string $adAccountId {
        set {
            $this->assigning('adAccountId', $value);
            $this->adAccountId = $value;
        }
    }
    /**
     * Custom audience description.
     * Example: "Q3 campaign target users"
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * Custom audience name.
     * Example: "My CRM Audience"
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * Facebook page ID linked to marketing messages.
     * Example: "108968269613427"
     */
    public string $pageId {
        set {
            $this->assigning('pageId', $value);
            $this->pageId = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'adAccountId' => is_string($value) ? $this->adAccountId = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'pageId' => is_string($value) ? $this->pageId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
