<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f;

enum HmacAlgorithm: string
{
    case HMACMD5 = 'HMAC_MD5';
    case HMACSHA1 = 'HMAC_SHA_1';
    case HMACSHA224 = 'HMAC_SHA_224';
    case HMACSHA256 = 'HMAC_SHA_256';
    case HMACSHA384 = 'HMAC_SHA_384';
    case HMACSHA512 = 'HMAC_SHA_512';
}
