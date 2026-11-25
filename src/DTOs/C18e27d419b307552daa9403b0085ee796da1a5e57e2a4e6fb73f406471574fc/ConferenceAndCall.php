<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C18e27d419b307552daa9403b0085ee796da1a5e57e2a4e6fb73f406471574fc;

/**
 * ConferenceAndCall
 */
final class ConferenceAndCall extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N431fb79b0e816230968e14ba1e1c6fadb75cfde9cb3c381f4217b2777f48153f\Call $call;
    public \InfobipSDK\DTOs\C18e27d419b307552daa9403b0085ee796da1a5e57e2a4e6fb73f406471574fc\Conference $conference;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'call' => $value instanceof \stdClass ? $this->call = new \InfobipSDK\DTOs\N431fb79b0e816230968e14ba1e1c6fadb75cfde9cb3c381f4217b2777f48153f\Call($value) : parent::assignMember($name, $value),
            'conference' => $value instanceof \stdClass ? $this->conference = new \InfobipSDK\DTOs\C18e27d419b307552daa9403b0085ee796da1a5e57e2a4e6fb73f406471574fc\Conference($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
