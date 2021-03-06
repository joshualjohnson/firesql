<?php

/**
 *    __  _____   ___   __          __
 *   / / / /   | <  /  / /   ____ _/ /_  _____
 *  / / / / /| | / /  / /   / __ `/ __ `/ ___/
 * / /_/ / ___ |/ /  / /___/ /_/ / /_/ (__  )
 * `____/_/  |_/_/  /_____/`__,_/_.___/____/
 *
 * @package FireSql
 * @author UA1 Labs Developers https://ua1.us
 * @copyright Copyright (c) UA1 Labs
 */

$statements = $this->getSqlStatements();
if (!empty($statements)) {
    foreach ($statements as $statement) {
        echo $this->renderTrace($statement->getTrace());
        echo $this->renderCode($statement->getStatement());
        echo $this->renderLabel($statement->getTime() . ' milliseconds');
        echo $this->renderSeparator();
    }
} else {
    echo $this->renderLabel('No SQL Statements Executed...');
}
