<?php

declare(strict_types=1);

namespace App\Model;

use Nette;
use Nette\Security\IAuthenticator;
use Tracy\Debugger;


/**
 * Manages user-related operations such as authentication and adding new users.
 */
final class UserRepository implements IAuthenticator
{
}