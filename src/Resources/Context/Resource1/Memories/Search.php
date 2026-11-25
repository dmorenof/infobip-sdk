<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Context\Resource1\Memories;

final class Search extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/context/1/memories/search',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\\PersonMemorySearchApiResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\\SearchPersonMemoriesApiRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Search person interaction memories
     *
     * Searches the interaction memories of a person and returns the most relevant ones, best match first. Memories are matched by meaning and by keywords, and ranked by relevance and recency.
     * Identify the person with `identifier`. Its `type` selects which identifier field is required:
     * - `PERSON_ID`: the person is identified by `personId`, for example `{"type": "PERSON_ID", "personId": 12345}`.
     *
     * The result is not paginated. It contains:
     * - `results`: at most `maxResults` memories (default 10, maximum 50), each with a relevance `score`.
     * - `currentFacts`: the latest value of each fact found in the returned memories.
     *
     * To restrict the search to a time window, use either `relativeTimeRange` or both `from` and `to`, not both. If the window contains no matches, it is widened step by step, `expandedSearch` is set to `true`, and `searchedTimeRange` shows the window that was actually searched.
     * An empty `results` list means no relevant memories were found; it is not an error.
     */
    public function post(\InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\SearchPersonMemoriesApiRequest $payload): \InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\PersonMemorySearchApiResponse
    {
        /** @var \InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\PersonMemorySearchApiResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
