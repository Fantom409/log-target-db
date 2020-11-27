<?php

declare(strict_types=1);

namespace Yiisoft\Log\Target\Db\Tests;

/**
 * @group db
 * @group mysql
 * @group log
 */
class MySQLTargetTest extends DbTargetTest
{
    protected static $driverName = 'mysql';
}
