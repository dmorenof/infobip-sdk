<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea;

/**
 * DefaultTemplateStructureApiData
 *
 * Structure of the created template. Can consist of body (mandatory), header, footer, buttons, carousel, limited time offer, call permission request and shortening options.
 */
final class DefaultTemplateStructureApiData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'body',
];

    protected const array READ_ONLY_FIELDS = [
    'type',
];

    public \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\BodyApiData $body;
    /**
     * Template buttons. Can contain 1 to 10 buttons which include up to 2 URL buttons, one phone number button, one `copy code` button and one `flow` button. `quick reply` and non `quick reply` buttons have to be grouped together.
     */
    public \InfobipSDK\Collections\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\CardApiData\ButtonsCollection $buttons;
    public \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\CallPermissionRequestApiData $callPermissionRequest;
    public \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\CarouselApiData $carousel;
    public \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\FooterApiData $footer;
    public \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\HeaderApiData $header;
    public \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\LimitedTimeOfferApiData $limitedTimeOffer;
    public \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\ShorteningOptionsApiData $shorteningOptions;
    /**
     * Template structure type.
     */
    public \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\DefaultTemplateStructureApiData\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'body' => $value instanceof \stdClass ? $this->body = new \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\BodyApiData($value) : parent::assignMember($name, $value),
            'carousel' => $value instanceof \stdClass ? $this->carousel = new \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\CarouselApiData($value) : parent::assignMember($name, $value),
            'footer' => $value instanceof \stdClass ? $this->footer = new \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\FooterApiData($value) : parent::assignMember($name, $value),
            'limitedTimeOffer' => $value instanceof \stdClass ? $this->limitedTimeOffer = new \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\LimitedTimeOfferApiData($value) : parent::assignMember($name, $value),
            'shorteningOptions' => $value instanceof \stdClass ? $this->shorteningOptions = new \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\ShorteningOptionsApiData($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\DefaultTemplateStructureApiData\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
