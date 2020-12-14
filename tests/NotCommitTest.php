<?php


namespace Yiisoft\Log\Target\Db\Tests;


use Yiisoft\Log\Logger;
use Yiisoft\Log\Target\Db\DbTarget;

class NotCommitTest extends TestCase
{
    protected static $database = null;
    protected static string $driverName = 'sqlite'; //@TODO move to config

    public function setUp(): void
    {
        parent::setUp();
        $databases = static::getParam('databases');
        static::$database = $databases[static::$driverName];
        $pdo_database = 'pdo_' . static::$driverName;

        if (!extension_loaded('pdo') || !extension_loaded($pdo_database)) {
            static::markTestSkipped('pdo and ' . $pdo_database . ' extension are required.');
        }

        /*
        $db = new DbTarget($container->get('db'), '{{%log}}');
        $db->setLevels([LogLevel::WARNING]);

         new Logger(['db' => $db]);
        */
        //$this->runConsoleAction('migrate/up', ['migrationPath' => '@Yiisoft/Log/migrations/', 'interactive' => false]);
    }

    public function testTimestamp() {
        $this->assertTrue(true);
    }

}