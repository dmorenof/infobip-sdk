<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980;

/**
 * BusinessInfoRequest
 */
final class BusinessInfoRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'about' => [
        'minLength' => 0,
        'maxLength' => 130,
    ],
    'address' => [
        'minLength' => 0,
        'maxLength' => 256,
    ],
    'description' => [
        'minLength' => 0,
        'maxLength' => 512,
    ],
    'email' => [
        'minLength' => 0,
        'maxLength' => 128,
    ],
    'logoUrl' => [
        'minLength' => 0,
        'maxLength' => 2048,
        'pattern' => '',
    ],
    'websites' => [
        'minItems' => 0,
        'maxItems' => 2,
    ],
];

    /**
     * Manages the content of the sender\'s **About** section.
     * Example: "Infobip Business Account"
     */
    public string $about {
        set {
            $this->assigning('about', $value);
            $this->about = $value;
        }
    }
    /**
     * Street address of the business.
     * Example: "35-38 New Bridge Street, London EC4V 6BW"
     */
    public string $address {
        set {
            $this->assigning('address', $value);
            $this->address = $value;
        }
    }
    /**
     * Description of the business.
     * Example: "Infobip is a global cloud communications platform."
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * Email of the business.
     * Example: "info&#64;example.com"
     * Format: email
     */
    public string $email {
        set {
            $this->assigning('email', $value);
            $this->email = $value;
        }
    }
    /**
     * URL of the business' logo. Must be a valid URL starting with `https://` or `http://`. Supported logo types are `JPEG`, `PNG`. Log file should be at least 192x192 pixels and at most 640x640 pixels.
     * Example: "https://example.com/logo"
     */
    public string $logoUrl {
        set {
            $this->assigning('logoUrl', $value);
            $this->logoUrl = $value;
        }
    }
    public \InfobipSDK\Enums\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\BusinessVertical $vertical;
    /**
     * Websites of the business.
     * Example: "https://www.infobip.com"
     */
    public \InfobipSDK\Collections\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\BusinessInfoRequest\WebsitesCollection $websites {
        set {
            $this->assigning('websites', $value);
            $this->websites = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'about' => is_string($value) ? $this->about = $value : parent::assignMember($name, $value),
            'address' => is_string($value) ? $this->address = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'logoUrl' => is_string($value) ? $this->logoUrl = $value : parent::assignMember($name, $value),
            'vertical' => is_string($value) ? $this->vertical = \InfobipSDK\Enums\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\BusinessVertical::from($value) : parent::assignMember($name, $value),
            'websites' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->websites = new \InfobipSDK\Collections\N6a832d7980b0224fa17e623a753d9dcd3d97aedf6ae653c996ab303ad0c7f980\BusinessInfoRequest\WebsitesCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
