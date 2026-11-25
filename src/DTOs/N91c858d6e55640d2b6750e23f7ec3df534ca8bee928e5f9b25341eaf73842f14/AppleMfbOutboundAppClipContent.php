<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * AppleMfbOutboundAppClipContent
 */
final class AppleMfbOutboundAppClipContent extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'storeRegion' => [
        'pattern' => '^[A-Z]{2}$',
    ],
    'url' => [
        'minLength' => 1,
        'pattern' => '',
    ],
];

    /**
     * ISO 3166 alpha-2 country code of the App Store region. By default it is 'US'. Set this value in case the App Clip is not in the US App Store.
     */
    public string $storeRegion {
        set {
            $this->assigning('storeRegion', $value);
            $this->storeRegion = $value;
        }
    }
    public \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbOutboundMessageContentType $type;
    /**
     * URL used by Apple Messages for Business to identify the App Clip
     */
    public string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'storeRegion' => is_string($value) ? $this->storeRegion = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\AppleMfbOutboundMessageContentType::from($value) : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
