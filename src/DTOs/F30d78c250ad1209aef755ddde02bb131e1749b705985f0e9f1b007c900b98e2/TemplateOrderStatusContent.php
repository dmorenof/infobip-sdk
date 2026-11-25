<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * TemplateOrderStatusContent
 *
 * Template order status. Should be defined, only if template contains order status.
 */
final class TemplateOrderStatusContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'orderStatuses',
];

    /**
     * Array of order statuses information.
     */
    public \InfobipSDK\Collections\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\TemplateOrderStatusContent\OrderStatusesCollection $orderStatuses;

}
