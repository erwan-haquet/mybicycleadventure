<?php

namespace App\AccountManagement\Domain\User\Constraint;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class UsernameIsNotAlreadyRegistered extends Constraint
{
    public $message = 'account_management.signup.username_already_exists';

    public function getTargets(): array|string
    {
        return self::CLASS_CONSTRAINT;
    }
}
