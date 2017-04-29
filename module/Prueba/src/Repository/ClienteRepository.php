<?php

namespace Prueba\Repository;

/**
 * ClienteRepository
 *
 *
 *
 * @author Cristian Incarnato
 * @license MIT
 * @link
 */
class ClienteRepository extends \Doctrine\ORM\EntityRepository
{

    public function save(\Prueba\Entity\Cliente $entity)
    {
        $this->getEntityManager()->persist($entity); $this->getEntityManager()->flush();
    }

    public function remove(\Prueba\Entity\Cliente $entity)
    {
        $this->getEntityManager()->remove($entity); $this->getEntityManager()->flush();
    }


}

