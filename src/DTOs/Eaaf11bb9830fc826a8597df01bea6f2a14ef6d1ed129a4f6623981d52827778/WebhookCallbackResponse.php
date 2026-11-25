<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Eaaf11bb9830fc826a8597df01bea6f2a14ef6d1ed129a4f6623981d52827778;

/**
 * WebhookCallbackResponse
 *
 * Response from the markup language callback containing instructions to execute.
 */
final class WebhookCallbackResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Array of markup language instructions defining the call flow.
     */
    public \InfobipSDK\Collections\Eaaf11bb9830fc826a8597df01bea6f2a14ef6d1ed129a4f6623981d52827778\WebhookCallbackResponse\ActionsCollection $actions;
}
