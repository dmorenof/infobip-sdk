<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * TemplateCardContent
 *
 * Carousel cards. Should be defined in the correct order. It can have between one and ten cards.
 */
final class TemplateCardContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'header',
    ];

    protected const array VALIDATION = [
        'buttons' => [
            'minItems' => 1,
            'maxItems' => 2,
        ],
    ];

    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\TemplateBodyContent $body;
    /**
     * Card buttons. Define buttons only for `quick reply` or `dynamic URL` buttons (in the required order). For static URL button, omit the buttons section.
     */
    public \InfobipSDK\Collections\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\TemplateCardContent\ButtonsCollection $buttons {
        set {
            $this->assigning('buttons', $value);
            $this->buttons = $value;
        }
    }
    public \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\TemplateHeaderContent $header;
}
