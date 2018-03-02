<?php

namespace Jane\OpenApi\Naming;

use Doctrine\Common\Inflector\Inflector;
use Jane\OpenApi\Operation\Operation;

class OperationIdNaming implements OperationNamingInterface
{
    public function getFunctionName(Operation $operation): string
    {
        return Inflector::camelize($this->getOperationId($operation));
    }

    public function getEndpointName(Operation $operation): string
    {
        return Inflector::classify($this->getOperationId($operation));
    }
    
    private function getOperationId(Operation $operation): string
    {
        $operationId = (string) $operation->getOperation()->getOperationId();
        // Remove invalid characters.
        $operationId = preg_replace('/[^a-z0-9 ]+/iu', '_', $operationId);
        return trim($operationId);
    }
}
