<?php

namespace Prueba\Options;

/**
 * ModuleOptions
 *
 *
 *
 * @author Cristian Incarnato
 * @license MIT
 * @link
 */
class ModuleOptions extends \Zend\Stdlib\AbstractOptions
{

    private $sharedPath = '';

    private $relativePath = '/public';

    public function getSharedPath()
    {
        return $this->sharedPath;
    }

    public function setSharedPath($sharedPath)
    {
        $this->sharedPath= $sharedPath;
    }

    public function getRelativePath()
    {
        return $this->relativePath;
    }

    public function setRelativePath($relativePath)
    {
        $this->relativePath= $relativePath;
    }


}

