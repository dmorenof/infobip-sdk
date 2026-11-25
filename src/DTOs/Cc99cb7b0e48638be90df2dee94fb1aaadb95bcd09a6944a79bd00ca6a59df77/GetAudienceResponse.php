<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77;

/**
 * GetAudienceResponse
 *
 * List of custom audiences.
 */
final class GetAudienceResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Facebook ad account ID.
     * Example: "act_3339405976215927"
     */
    public string $adAccountId;
    /**
     * Custom audience description.
     * Example: "Q3 campaign target users"
     */
    public string $description;
    /**
     * Meta custom audience ID.
     * Example: "52512562968362"
     */
    public string $id;
    /**
     * Custom audience name.
     * Example: "My CRM Audience"
     */
    public string $name;
    /**
     * Facebook page ID.
     * Example: "108968269613427"
     */
    public string $pageId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'adAccountId' => is_string($value) ? $this->adAccountId = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'pageId' => is_string($value) ? $this->pageId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
