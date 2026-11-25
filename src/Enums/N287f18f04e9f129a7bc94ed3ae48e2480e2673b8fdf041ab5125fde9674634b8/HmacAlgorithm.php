<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

enum HmacAlgorithm: string
{
    case HMACMD5 = 'HMAC_MD5';
    case HMACSHA1 = 'HMAC_SHA_1';
    case HMACSHA224 = 'HMAC_SHA_224';
    case HMACSHA256 = 'HMAC_SHA_256';
    case HMACSHA384 = 'HMAC_SHA_384';
    case HMACSHA512 = 'HMAC_SHA_512';
}
