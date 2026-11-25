<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f;

/**
 * SMS
 *
 * Subscription group.
 */
final class SmsSubscriptionRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'events',
        'profile',
        'subscriptionId',
    ];

    protected const array VALIDATION = [
        'criteria' => [
            'minItems' => 0,
            'maxItems' => 255,
        ],
        'events' => [
            'minItems' => 0,
            'maxItems' => 255,
        ],
        'keywords' => [
            'minItems' => 0,
            'maxItems' => 255,
        ],
        'name' => [
            'minLength' => 1,
            'maxLength' => 255,
        ],
        'resources' => [
            'minItems' => 0,
            'maxItems' => 255,
        ],
        'subscriptionGroupId' => [
            'minLength' => 0,
            'maxLength' => 255,
        ],
        'subscriptionId' => [
            'minLength' => 1,
            'maxLength' => 255,
        ],
        'users' => [
            'minItems' => 0,
            'maxItems' => 255,
        ],
    ];

    /**
     * Application and Entity pair to match. You can set the rule to match only Application or only Entity if necessary, omitting the other item.
     */
    public \InfobipSDK\Collections\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\AgentOsNoIdSubscriptionRequest\CriteriaCollection $criteria {
        set {
            $this->assigning('criteria', $value);
            $this->criteria = $value;
        }
    }
    /**
     * List of events available for a subscription. Note that a set of events available for each channel is different; subscription to events that are unavailable for a certain channel will be ignored. For more details, see the [availability table](https://www.infobip.com/docs/cpaas-x/subscriptions-management/event-subscriptions). If configuring inbound Subscription, check [inbound message configuration docs](https://www.infobip.com/docs/cpaas-x/subscriptions-management/inbound-message-configuration).
     */
    public \InfobipSDK\Collections\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\SmsSubscriptionRequest\EventsCollection $events {
        set {
            $this->assigning('events', $value);
            $this->events = $value;
        }
    }
    /**
     * List of keywords to match. Route inbound messages by their first word. A customer texting STOP or ORDER to your number triggers only the subscriptions matching that keyword.
     */
    public \InfobipSDK\Collections\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\AgentOsNoIdSubscriptionRequest\KeywordsCollection $keywords {
        set {
            $this->assigning('keywords', $value);
            $this->keywords = $value;
        }
    }
    /**
     * A human-readable description for your subscription, can be changed at a later point.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    public \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\ProfileRequest $profile;
    /**
     * List of resources to match. At the moment, this could only be a sender name (whether numeric or alpha) used on message submit.
     */
    public \InfobipSDK\Collections\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\AgentOsNoIdSubscriptionRequest\ResourcesCollection $resources {
        set {
            $this->assigning('resources', $value);
            $this->resources = $value;
        }
    }
    /**
     * Subscription group identifier. Subscriptions with different group IDs for the same event will each receive the event independently, enabling multi-webhook delivery.
     */
    public string $subscriptionGroupId {
        set {
            $this->assigning('subscriptionGroupId', $value);
            $this->subscriptionGroupId = $value;
        }
    }
    /**
     * Subscription ID. Used as part of a URL path and must not include any characters that require URL encoding. You cannot change the ID once a subscription is created.
     */
    public string $subscriptionId {
        set {
            $this->assigning('subscriptionId', $value);
            $this->subscriptionId = $value;
        }
    }
    /**
     * List of users to match. You can provide usernames from your account.
     */
    public \InfobipSDK\Collections\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\AgentOsNoIdSubscriptionRequest\ResourcesCollection $users {
        set {
            $this->assigning('users', $value);
            $this->users = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'criteria' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->criteria = new \InfobipSDK\Collections\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\AgentOsNoIdSubscriptionRequest\CriteriaCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\ApplicationEntityPair::class)) : parent::assignMember($name, $value),
            'keywords' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->keywords = new \InfobipSDK\Collections\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\AgentOsNoIdSubscriptionRequest\KeywordsCollection($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'profile' => $value instanceof \stdClass ? $this->profile = new \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\ProfileRequest($value) : parent::assignMember($name, $value),
            'resources' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->resources = new \InfobipSDK\Collections\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\AgentOsNoIdSubscriptionRequest\ResourcesCollection($value) : parent::assignMember($name, $value),
            'subscriptionGroupId' => is_string($value) ? $this->subscriptionGroupId = $value : parent::assignMember($name, $value),
            'subscriptionId' => is_string($value) ? $this->subscriptionId = $value : parent::assignMember($name, $value),
            'users' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->users = new \InfobipSDK\Collections\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\AgentOsNoIdSubscriptionRequest\ResourcesCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
