<?php

namespace HMS\Repositories\Doctrine;

use HMS\Entities\Profile;
use Doctrine\ORM\EntityRepository;
use HMS\Repositories\ProfileRepository;

class DoctrineProfileRepository extends EntityRepository implements ProfileRepository
{
    /**
     * save Profile to the DB.
     * @param  User $user
     */
    public function save(Profile $Profile)
    {
        $this->_em->persist($profile);
        $this->_em->flush();
    }
}
