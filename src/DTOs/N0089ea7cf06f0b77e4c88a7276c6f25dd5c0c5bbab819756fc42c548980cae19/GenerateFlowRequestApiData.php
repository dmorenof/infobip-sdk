<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19;

/**
 * GenerateFlowRequestApiData
 */
final class GenerateFlowRequestApiData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'prompt',
];

    protected const array VALIDATION = [
    'prompt' => [
        'minLength' => 1,
    ],
];

    /**
     * Prompt for flow generation.
     * Example: "Flow that contains form with name, surname and email of the user."
     */
    public string $prompt {
        set {
            $this->assigning('prompt', $value);
            $this->prompt = $value;
        }
    }
    /**
     * Optional identifier of a previous response. If provided, this request will update or modify the generatedFlow associated with the given responseId. Use this to refine or change an existing flow by referencing an earlier response.
     * Example: "12345"
     */
    public string $responseId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'prompt' => is_string($value) ? $this->prompt = $value : parent::assignMember($name, $value),
            'responseId' => is_string($value) ? $this->responseId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
