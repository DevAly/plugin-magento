<?php
/**
 * PayZen V2-Payment Module version 1.9.1 for Magento 1.4-1.9. Support contact : support@payzen.eu.
 *
 * NOTICE OF LICENSE
 *
 * This source file is licensed under the Open Software License version 3.0
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/osl-3.0.php
 *
 * @author    Lyra Network (http://www.lyra-network.com/)
 * @copyright 2014-2018 Lyra Network and contributors
 * @license   https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @category  payment
 * @package   payzen
 */

/**
 * Custom renderer for the use Oney in one-time payment field.
 */
class Lyra_Payzen_Block_Adminhtml_System_Config_Field_Standard_UseOney
    extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    /**
     * Render field HTML.
     *
     * @param Varien_Data_Form_Element_Abstract $element
     * @return string
     */
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
        // get configured features
        $features = Lyra_Payzen_Helper_Data::$pluginFeatures;

        if (! $features['oney']) {
            return '';
        }

        return parent::render($element);
    }
}
