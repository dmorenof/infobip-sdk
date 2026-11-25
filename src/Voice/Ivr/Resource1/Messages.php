<?php

declare(strict_types=1);

namespace InfobipSDK\Voice\Ivr\Resource1;

final class Messages extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /voice/ivr/1/messages [operationId: send-voice-messages-with-an-ivr-scenario] */
    /**
     * Launch IVR Scenario
     *
     * This method allows you to start an outbound IVR toward a multiple destinations.
     */
    public static function post(\InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\LaunchScenarioRequest $payload): \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\StandardVoiceResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Voice\Ivr\Resource1\Messages::class)->post($payload);
    }

}
