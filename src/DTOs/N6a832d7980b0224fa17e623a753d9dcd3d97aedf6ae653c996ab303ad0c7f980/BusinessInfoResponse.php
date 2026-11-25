<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980;

/**
 * BusinessInfoResponse
 */
final class BusinessInfoResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'about',
    'address',
    'description',
    'displayName',
    'email',
    'vertical',
    'websites',
];

    /**
     * Manages the content of the sender\'s **About** section.
     * Example: "Infobip Business Account"
     */
    public string $about;
    /**
     * Street address of the business.
     * Example: "35-38 New Bridge Street, London EC4V 6BW"
     */
    public string $address;
    /**
     * Description of the business.
     * Example: "Infobip is a global cloud communications platform."
     */
    public string $description;
    /**
     * Display name of the phone number.
     * Example: "Infobip"
     */
    public string $displayName;
    /**
     * Email of the business.
     * Example: "info&#64;example.com"
     */
    public string $email;
    public \InfobipSDK\Enums\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\BusinessVertical $vertical;
    /**
     * Websites of the business.
     * Example: "https://www.infobip.com"
     */
    public \InfobipSDK\Collections\StringCollection $websites;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'about' => is_string($value) ? $this->about = $value : parent::assignMember($name, $value),
            'address' => is_string($value) ? $this->address = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'displayName' => is_string($value) ? $this->displayName = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'vertical' => is_string($value) ? $this->vertical = \InfobipSDK\Enums\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\BusinessVertical::from($value) : parent::assignMember($name, $value),
            'websites' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->websites = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
