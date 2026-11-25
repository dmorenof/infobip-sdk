<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2;

/**
 * MergeRequestDocsSchema
 */
final class MergeRequestDocsSchema extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'persons',
];

    protected const array VALIDATION = [
    'persons' => [
        'minItems' => 1,
        'maxItems' => 1000,
    ],
];

    public \InfobipSDK\Collections\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\MergeRequestDocsSchema\PersonsCollection $persons {
        set {
            $this->assigning('persons', $value);
            $this->persons = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'persons' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->persons = new \InfobipSDK\Collections\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\MergeRequestDocsSchema\PersonsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\MergePersonV3DocsSchema::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
