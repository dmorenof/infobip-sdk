<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f;

/**
 * Subscription
 *
 * Subscription group.
 */
final class SubscriptionResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of applicationId/entityId pairs.
     */
    public \InfobipSDK\Collections\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\AgentOsNoIdSubscriptionRequest\CriteriaCollection $criteria;
    /**
     * List of events to subscribe.
     */
    public \InfobipSDK\Collections\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\SubscriptionResponse\EventsCollection $events;
    /**
     * List of keywords.
     */
    public \InfobipSDK\Collections\StringCollection $keywords;
    /**
     * Subscription group name.
     */
    public string $name;
    public \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlyProfileResponse $profile;
    /**
     * List of resources.
     */
    public \InfobipSDK\Collections\StringCollection $resources;
    /**
     * Subscription group identifier.
     */
    public string $subscriptionGroupId;
    /**
     * Subscription ID.
     */
    public string $subscriptionId;
    /**
     * List  of users.
     */
    public \InfobipSDK\Collections\StringCollection $users;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'criteria' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->criteria = new \InfobipSDK\Collections\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\AgentOsNoIdSubscriptionRequest\CriteriaCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\ApplicationEntityPair::class)) : parent::assignMember($name, $value),
            'keywords' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->keywords = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'profile' => $value instanceof \stdClass ? $this->profile = new \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlyProfileResponse($value) : parent::assignMember($name, $value),
            'resources' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->resources = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'subscriptionGroupId' => is_string($value) ? $this->subscriptionGroupId = $value : parent::assignMember($name, $value),
            'subscriptionId' => is_string($value) ? $this->subscriptionId = $value : parent::assignMember($name, $value),
            'users' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->users = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
