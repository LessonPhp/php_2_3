<?php

namespace App\Models;

use App\Db;
use App\Model;

class Article extends Model
{
    public const TABLE = 'news';

    public $title;
    public $content;
    public $author_id;

    /**
     * @param $name
     * @return bool|null
     */

    // переделала
    public function __get($name)
    {
        if('author' === $name) {
                return Author::findById($this->author_id);
            } else {
                return null;
            }
    }
    /**
     * @param $name
     * @return bool
     */

    // переделала
    public function __isset($name)
    {
        if ('author' === $name) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return array|bool
     */
    public static function findAllNews()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . self::TABLE . ' ORDER BY id DESC LIMIT 3';
        return $db->query($sql,
            [],
            self::class);
    }
}