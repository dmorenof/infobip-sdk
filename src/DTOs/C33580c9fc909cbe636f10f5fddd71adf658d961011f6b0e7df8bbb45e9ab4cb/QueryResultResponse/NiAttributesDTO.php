<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C33580c9fc909cbe636f10f5fddd71adf658d961011f6b0e7df8bbb45e9ab4cb\QueryResultResponse;

/**
 * List of query results for attributes provided on number intelligence query request.
 */
final class NiAttributesDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Object representing if national identity number and MSISDN matches.
     */
    public \InfobipSDK\DTOs\C33580c9fc909cbe636f10f5fddd71adf658d961011f6b0e7df8bbb45e9ab4cb\QueryResultResponse\NiAttributes\IdentityNumberDTO $nationalIdentityNumber;
    /**
     * Object representing SIM swap occurrence.
     */
    public \InfobipSDK\DTOs\C33580c9fc909cbe636f10f5fddd71adf658d961011f6b0e7df8bbb45e9ab4cb\QueryResultResponse\NiAttributes\SimSwapDTO $simSwap;

}
