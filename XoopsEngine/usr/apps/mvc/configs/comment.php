<?php
/**
 * Mvc module comment config
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
 * @package         Mvc
 * @version         $Id$
 */

return array(
    // For index action
    "index"    => array(
        "title"         => "Index",
        "controller"    => "index",
        "action"        => "index",
        "param_item"    => "id",
    ),
    // For test action
    "test"    => array(
        "title"         => "Test",
        "controller"    => "index",
        "action"        => "test",
        //"param"         => "id",
        "template"      => "comment.html",
    ),
);