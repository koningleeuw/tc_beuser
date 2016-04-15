<?php
namespace dkd\TcBeuser\Utility;

/***************************************************************
*  Copyright notice
*
*  (c) 2006 Ivan Kartolo (ivan.kartolo@dkd.de)
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
use TYPO3\CMS\Backend\Utility\IconUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/**
 * class.tx_tcbeuser_pwd_wizard.php
 *
 * DESCRIPTION HERE
 * $Id$
 *
 * @author Ivan Kartolo <ivan.kartolo@dkd.de>
 */
class PwdWizardUtility
{

    public $backPath = '../../../../typo3/';

    public function main($PA, $pObj)
    {
        $output = '<script src="'.ExtensionManagementUtility::extRelPath('tc_beuser').'mod2/pwdgen.js" type="text/javascript"></script>';
        $onclick = 'pass = mkpass();' .
                    'document.'.$PA['formName'].'[\''.$PA['itemName'].'\'].value = pass;';
        $onclick .= implode('', $PA['fieldChangeFunc']);

        $output .= '<a href="#" onclick="'.htmlspecialchars($onclick).'">'.
            IconUtility::getSpriteIcon('actions-move-left', array('title' => $GLOBALS['LANG']->sL('LLL:EXT:tc_beuser/mod2/locallang.xml:password-wizard', 1))).
            '</a>';
        return $output;
    }
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/tc_beuser/class.tx_tcbeuser_pwd_wizard.php']) {
    include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/tc_beuser/class.tx_tcbeuser_pwd_wizard.php']);
}
