<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0;

/**
 * OptInCarouselFacebookTemplatePayload
 */
final class OptInCarouselFacebookTemplatePayload extends \InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\FacebookTemplatePayload
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'elements' => [
        'minItems' => 1,
        'maxItems' => 5,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Collections\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\OptInCarouselFacebookTemplatePayload\ElementsCollection $elements {
        set {
            $this->assigning('elements', $value);
            $this->elements = $value;
        }
    }
    public \InfobipSDK\Enums\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\ImageAspectRatio $imageAspectRatio;
    public string $notificationMessagesTimezone;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'elements' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->elements = new \InfobipSDK\Collections\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\OptInCarouselFacebookTemplatePayload\ElementsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\OptInCarouselTemplateElement::class)) : parent::assignMember($name, $value),
            'imageAspectRatio' => is_string($value) ? $this->imageAspectRatio = \InfobipSDK\Enums\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\ImageAspectRatio::from($value) : parent::assignMember($name, $value),
            'notificationMessagesTimezone' => is_string($value) ? $this->notificationMessagesTimezone = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
