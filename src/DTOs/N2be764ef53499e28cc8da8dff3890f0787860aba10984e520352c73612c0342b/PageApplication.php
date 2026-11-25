<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b;

/**
 * PageApplication
 */
final class PageApplication extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\PageInfo $paging;
    public \InfobipSDK\Collections\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\PageApplication\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'paging' => $value instanceof \stdClass ? $this->paging = new \InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\PageInfo($value) : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\PageApplication\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N2be764ef53499e28cc8da8dff3890f0787860aba10984e520352c73612c0342b\Application::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
