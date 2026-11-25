<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * TemplateDataContent
 *
 * Template data. Values have to be set as registered in the template.
 */
final class TemplateDataContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'body',
    ];

    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\TemplateBodyContent $body;
    /**
     * Template buttons. Should be defined in the correct order, only if `quick reply`, `dynamic URL`, `copy code` or `flow`  buttons have been registered. It can have up to ten buttons including a maximum of two `dynamic URL` buttons, one `copy code` button and one `flow` button. When `catalog`, `multi product` or `order details` button is used it needs to be the only button.
     */
    public \InfobipSDK\Collections\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\TemplateDataContent\ButtonsCollection $buttons;
    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\TemplateCarouselContent $carousel;
    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\TemplateHeaderContent $header;
    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\TemplateLimitedTimeOfferContent $limitedTimeOffer;
    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\TemplateOrderStatusContent $orderStatus;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'buttons' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->buttons = new \InfobipSDK\Collections\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\TemplateDataContent\ButtonsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\TemplateButtonContent::class)) : parent::assignMember($name, $value),
            'carousel' => $value instanceof \stdClass ? $this->carousel = new \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\TemplateCarouselContent($value) : parent::assignMember($name, $value),
            'limitedTimeOffer' => $value instanceof \stdClass ? $this->limitedTimeOffer = new \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\TemplateLimitedTimeOfferContent($value) : parent::assignMember($name, $value),
            'orderStatus' => $value instanceof \stdClass ? $this->orderStatus = new \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\TemplateOrderStatusContent($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
