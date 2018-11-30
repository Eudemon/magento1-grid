<?php
/**
 * Created by PhpStorm.
 * User: eudem
 * Date: 11/28/2018
 * Time: 8:29 PM
 */

class Randy_HalfLife_Model_Observer {

    /**
     * @param $observer
     * @return Randy_HalfLife_Model_Observer
     */
    public function salesOrderGridCollectionLoadBefore($observer)
    {
        $collection = $observer->getOrderGridCollection();
        //$collection->addAttributeToSelect('half_life_attribute');

        //get the attribute id of our custom eav
        $attributeId = Mage::getResourceModel('eav/entity_attribute')
            ->getIdByCode('catalog_product', 'half_life_attribute');

        //retrieve config value
        $configValue = Mage::getStoreConfig('radio_options/messages/radio_value');

        $select = $collection->getSelect();

        //join eav value to order grid
        $select->join('catalog_product_entity_int', '`catalog_product_entity_int`.entity_id=`main_table`.entity_id AND `catalog_product_entity_int`.attribute_id = ' . $attributeId,
            array('radio_active' => new Zend_Db_Expr('max(`catalog_product_entity_int`.value) > ' . $configValue, 'yes', 'no')));

        $select->group('main_table.entity_id');
    }
}

