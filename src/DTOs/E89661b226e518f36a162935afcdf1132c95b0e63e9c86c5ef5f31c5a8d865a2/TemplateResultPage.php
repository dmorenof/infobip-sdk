<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

/**
 * TemplateResultPage
 * Example: {"templates":[{"id":"c4391685-b21a-4c21-a470-5453e9382752","name":"First template name","language":"English","languageCode":"en","channel":"SMS","external":false,"content":"Simple English text content","createdAt":"2024-01-01T00:00:00.000+00:00","updatedAt":"2024-01-01T00:00:00.000+00:00","tags":[{"name":"First template tag","createdAt":"2024-01-01T00:00:00.000+00:00","updatedAt":"2024-01-01T00:00:00.000+00:00"}],"attachments":[]},{"id":"e2fafe40-ea15-49c8-ae9b-aa07131a0096","name":"Second template name","language":"Spanish","languageCode":"es","channel":"SMS","external":false,"content":"Simple Spanish text content","createdAt":"2024-01-01T00:00:00.000+00:00","updatedAt":"2024-01-01T00:00:00.000+00:00","tags":[{"name":"Second template tag","createdAt":"2024-01-01T00:00:00.000+00:00","updatedAt":"2024-01-01T00:00:00.000+00:00"}],"attachments":[{"id":"e2fafe40-ea15-49c8-ae9b-aa07131a0096","fileName":"Second template file","fileExtension":"txt","fileSize":1024,"contentType":"text/plain","publicLink":"https://example.com/second-template-file.txt","thumbLink":"https://example.com/second-template-file-thumb.png","uploadedAt":"2024-01-01T00:00:00.000+00:00"},{"id":"e2fafe40-ea15-49c8-ae9b-aa07131a0096","fileName":"Second template image","fileExtension":"png","fileSize":2048,"contentType":"image/png","publicLink":"https://example.com/second-template-image.png","thumbLink":"https://example.com/second-template-image-thumb.png","uploadedAt":"2024-01-01T00:00:00.000+00:00"}]}],"pagination":{"totalItems":2,"page":0,"limit":10,"orderBy":"createdAt:DESC"}}
 */
final class TemplateResultPage extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\Pagination $pagination;
    /**
     * List of templates.
     */
    public \InfobipSDK\Collections\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\TemplateResultPage\TemplatesCollection $templates;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'pagination' => $value instanceof \stdClass ? $this->pagination = new \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\Pagination($value) : parent::assignMember($name, $value),
            'templates' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->templates = new \InfobipSDK\Collections\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\TemplateResultPage\TemplatesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\TemplateApiResponse::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
