<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N18564d7c4791a7efa60d2b6c8cb85f3f93b60abdd39e67aaeb1d653e4aff3ecd;

/**
 * TemplatesResponse
 */
final class V1TemplatesApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of all templates for given sender.
     */
    public \InfobipSDK\Collections\N18564d7c4791a7efa60d2b6c8cb85f3f93b60abdd39e67aaeb1d653e4aff3ecd\V1TemplatesApiResponse\TemplatesCollection $templates;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'templates' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->templates = new \InfobipSDK\Collections\N18564d7c4791a7efa60d2b6c8cb85f3f93b60abdd39e67aaeb1d653e4aff3ecd\V1TemplatesApiResponse\TemplatesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N18564d7c4791a7efa60d2b6c8cb85f3f93b60abdd39e67aaeb1d653e4aff3ecd\V1TemplateApiResponse::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
