<?php

namespace Prueba\Repository;

/**
 * OneRepository
 *
 *
 *
 * @author Cristian Incarnato
 * @license MIT
 * @link
 */
class OneRepository extends \Doctrine\ORM\EntityRepository
{

    public function save(\Prueba\Entity\One $entity)
    {
        $this->getEntityManager()->persist($entity); $this->getEntityManager()->flush();
    }

    public function remove2(\Prueba\Entity\One $entity)
    {
        $this->getEntityManager()->remove($entity); $this->getEntityManager()->flush();
    }

    public function remove(\Prueba\Entity\One $entity)
    {
        $this->getEntityManager()->remove($entity); $this->getEntityManager()->flush();
    }


}

