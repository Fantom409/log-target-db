/**
 * Database schema required by \Yii\Log\DbTarget.
 *
 * The indexes declared are not required. They are mainly used to improve the performance
 * of some queries about message levels and categories. Depending on your actual needs, you may
 * want to create additional indexes (e.g. index on `log_time`).
 *
 * @author Alexander Makarov <sam@rmcreative.ru>
 * @link http://www.yiiframework.com/
 * @copyright 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

drop table if exists "log";

create table "log"
(
   "id"          number(20) NOT NULL PRIMARY KEY,
   "level"       integer,
   "category"    varchar(255),
   "log_time"    number,
   "prefix"      text,
   "message"     text,
   key "idx_log_level" ("level"),
   key "idx_log_category" ("category")
);