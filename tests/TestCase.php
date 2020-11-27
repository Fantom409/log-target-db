<?php

declare(strict_types=1);

namespace Yiisoft\Log\Target\Db\Tests;

use Psr\Container\ContainerInterface;
use Yiisoft\Composer\Config\Builder;
use Yiisoft\Di\Container;
use PHPUnit\Framework\TestCase as ParentTestCase;

abstract class TestCase extends ParentTestCase
{
    private ?ContainerInterface $container = null;
    private $params = [ //@TODO move to config
        'databases' => [
            'sqlite' => 'sqlite'
        ]
    ];

    protected function setUp(): void
    {
        parent::setUp();

        parent::setUp();
        $databases = static::getParam('databases');
        static::$database = $databases[static::$driverName];
        $pdo_database = 'pdo_' . static::$driverName;
        //$config = require Builder::path('tests');
        $this->container = new Container([]);
    }

    protected function tearDown(): void
    {
        $this->container = null;
        parent::tearDown();
    }

    protected function getParam(string $paramName): array {
        return $this->params[$paramName] ?? [];
    }

    protected function destroyApplication() {

    }

    protected function mockApplication($param, $param2, $param3) {

    }
}
