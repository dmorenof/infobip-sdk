<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F6fe07754dbab8be58eaa18cf7a5d306bd0a320e1642529931d05084863a1fb3;

/**
 * GetViberTemplatesResponse
 *
 * List of templates per page.
 */
final class GetViberTemplatesResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'templates',
    ];

    public \InfobipSDK\DTOs\F6fe07754dbab8be58eaa18cf7a5d306bd0a320e1642529931d05084863a1fb3\Paging $paging;
    /**
     * List of templates for requested page.
     */
    public \InfobipSDK\Collections\F6fe07754dbab8be58eaa18cf7a5d306bd0a320e1642529931d05084863a1fb3\GetViberTemplatesResponse\TemplatesCollection $templates;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'paging' => $value instanceof \stdClass ? $this->paging = new \InfobipSDK\DTOs\F6fe07754dbab8be58eaa18cf7a5d306bd0a320e1642529931d05084863a1fb3\Paging($value) : parent::assignMember($name, $value),
            'templates' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->templates = new \InfobipSDK\Collections\F6fe07754dbab8be58eaa18cf7a5d306bd0a320e1642529931d05084863a1fb3\GetViberTemplatesResponse\TemplatesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\F6fe07754dbab8be58eaa18cf7a5d306bd0a320e1642529931d05084863a1fb3\ViberTemplateResponseNoDates::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
