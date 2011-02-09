<?php
/**
 * Zend Framework for Xoops Engine
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
 * @category        Xoops_Zend
 * @package         Form
 * @version         $Id$
 */

class Xoops_Zend_Form_Element_Language extends Zend_Form_Element_Select
{
    /**
     * Constructor
     *
     * @param  string|array|Zend_Config $spec Element name or configuration
     * @param  string|array|Zend_Config $options Element value or configuration
     * @return void
     */
    public function __construct($spec, $options = null)
    {
        parent::__construct($spec, $options);
        $this->setServiceOptions();
    }

    protected function setServiceOptions()
    {
        // Available translations
        $iterator = new DirectoryIterator(Xoops::path('language'));
        // Container for available locales
        $languageList = array();
        foreach ($iterator as $fileinfo) {
            if (!$fileinfo->isDir() || $fileinfo->isDot()) {
                continue;
            }

            $languageName = $fileinfo->getFilename();
            $languageTitle = $languageName;
            $localeFile = $fileinfo->getPathname() . '/locale.ini';
            if (file_exists($localeFile)) {
                $locale = parse_ini_file($localeFile);
                if (!empty($locale['name'])) {
                    $languageTitle = $locale['name'] . ' (' . $languageTitle . ')';
                }
            }

            $languageList[$languageName] = $languageTitle;
        }

        $this->setMultiOptions($languageList);
    }
}