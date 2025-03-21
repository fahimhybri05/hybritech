<?php

namespace Flat3\Lodata\Helper\DBAL\DBAL4;

use Doctrine\DBAL\Driver\PDO\Connection;
use InvalidArgumentException;
use PDO;

trait ConnectsToDatabase
{
    public function connect(array $params): Connection
    {
        if (!isset($params['pdo']) || !$params['pdo'] instanceof PDO) {
            throw new InvalidArgumentException('Laravel requires the "pdo" property to be set and be a PDO instance.');
        }

        return new Connection($params['pdo']);
    }
}
