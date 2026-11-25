<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\KnowledgeBase\Resource1;

final class Search extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/knowledge-base/1/search',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Error',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\\PageCatalogRecordListItemResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\\SearchCriteria',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Search knowledge base
     *
     * Performs a full-text search across indexed, published knowledge base content using filter criteria provided in the request body. Draft content is not indexed. Results are paginated.
     */
    public function post(\InfobipSDK\PostParams\KnowledgeBase\Resource1\Search $params): \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\PageCatalogRecordListItemResponse
    {
        /** @var \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\PageCatalogRecordListItemResponse $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

}
