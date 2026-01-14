<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\User;
use Authorization\IdentityInterface;

class UserPolicy
{
    public function canEdit(IdentityInterface $identity, User $user): bool
    {
        // Solo puede editarse a sí mismo
        return $identity->getIdentifier() === $user->id;
    }
}
