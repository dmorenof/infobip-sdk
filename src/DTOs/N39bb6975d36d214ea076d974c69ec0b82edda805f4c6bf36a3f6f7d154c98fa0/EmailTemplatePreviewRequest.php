<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0;

/**
 * EmailTemplatePreviewRequest
 */
final class EmailTemplatePreviewRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * A map of placeholder names and their replacement values.
     * Example: {"firstName":"Joe"}
     */
    public \InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\EmailTemplatePreviewRequest\PlaceholdersMap $placeholders;
}
