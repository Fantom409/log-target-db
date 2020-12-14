<?php

declare(strict_types=1);

namespace Yiisoft\Log\Target\Db\Tests;

use Yiisoft\Yii\Console\Controllers\MigrateController;

/**
 * MigrateController that writes output via echo instead of using output stream. Allows us to buffer it.
 */
class EchoMigrateController extends MigrateController
{
    public function stdout($string)
    {
        echo $string;
    }
}
