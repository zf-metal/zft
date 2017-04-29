<?php

namespace Prueba\Repository;

/**
 * TwoRepository
 *
 *
 *
 * @author Cristian Incarnato
 * @license MIT
 * @link
 */
class TwoRepository extends \Doctrine\ORM\EntityRepository
{

    public function save(\Prueba\Entity\Two $entity)
    {
        $this->getEntityManager()->persist($entity); $this->getEntityManager()->flush();
    }

    public function remove(\Prueba\Entity\Two $entity)
    {
        $this->getEntityManager()->remove($entity); $this->getEntityManager()->flush();
    }


}

