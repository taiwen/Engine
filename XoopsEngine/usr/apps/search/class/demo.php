<?php
/**
 * Search demo class
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       The Xoops Engine http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @since           3.0
 * @category        Xoops_Module
 * @package         Search
 * @version         $Id$
 */

class App_Search_Demo
//class Search_Demo
{
    protected static $module = "search";

    public static function setModule($module)
    {
        static::$module = $module;
    }

    public static function index($queries, $type, $limit, $offset, $uid)
    {
        $params = compact("queries", "type", "limit", "offset", "uid");
        //Debug::e("Inside " . __METHOD__);
        //Debug::e($params);

        $router = XOOPS::registry("frontController")->getRouter();
        $results = array();
        $max = 1000;
        $count = 0;
        for ($i = $offset; $i < $max; $i++) {
            if (++$count > $limit) break;
            $item = array(
                "uid"       => 1,
                "time"      => time(),
                "link"      => $router->assemble(array("q" => "test-" . $i), "search"),
                "title"     => XOOPS::_("Search demo " . $i),
                "content"   => "Some content for term " . $i,
            );
            $results[] = $item;
        }
        return $results;
    }
}