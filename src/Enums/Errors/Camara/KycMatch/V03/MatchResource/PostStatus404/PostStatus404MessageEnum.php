<?php

declare(strict_types=1);

namespace InfobipSDK\Enums\Errors\Camara\KycMatch\V03\MatchResource\PostStatus404;

enum PostStatus404MessageEnum: string
{
    case ThePhoneNumberProvidedIsNotAssociatedWithACustomerAccount = 'The phone number provided is not associated with a customer account';
}
