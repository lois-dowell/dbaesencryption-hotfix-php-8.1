<?php

namespace Codiant\DBAESEncrypt\Database;

use Illuminate\Database\MySqlConnection;

use Codiant\DBAESEncrypt\Database\Schema\MySqlBuilderEncrypt;
use Codiant\DBAESEncrypt\Database\Query\Grammars\MySqlGrammarEncrypt as QueryGrammar;

class MySqlConnectionEncrypt extends MySqlConnection
{
    /**
     * Get the default query grammar instance.
     *
     * @return \Codiant\DBAESEncrypt\Database\Query\Grammars\MySqlGrammarEncrypt
     */
    protected function getDefaultQueryGrammar()
    {
        return $this->withTablePrefix(new QueryGrammar);
    }
}
