<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f;

/**
 * ApplicationEntityPair
 *
 * Application and Entity pair to match. You can set the rule to match only Application or only Entity if necessary, omitting the other item.
 */
final class ApplicationEntityPair extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'applicationId' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
    'callsConfigurationId' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
    'entityId' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
];

    /**
     * CPaaS X property identifying an application, an use case or an environment on your system. Should only be set if you are using CPaaS X Applications with your traffic.
     */
    public string $applicationId {
        set {
            $this->assigning('applicationId', $value);
            $this->applicationId = $value;
        }
    }
    /**
     * CPaaS X calls configuration identifier. Should only be set if you are using CPaaS X Applications with your traffic.
     */
    public string $callsConfigurationId {
        set {
            $this->assigning('callsConfigurationId', $value);
            $this->callsConfigurationId = $value;
        }
    }
    /**
     * CPaaS X property identifying an unique actor on your system. Should only be set if you are using CPaaS X Applications with your traffic.
     */
    public string $entityId {
        set {
            $this->assigning('entityId', $value);
            $this->entityId = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'callsConfigurationId' => is_string($value) ? $this->callsConfigurationId = $value : parent::assignMember($name, $value),
            'entityId' => is_string($value) ? $this->entityId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
