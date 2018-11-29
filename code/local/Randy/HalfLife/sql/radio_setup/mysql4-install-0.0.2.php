<?php
/**
 * Created by PhpStorm.
 * User: eudem
 * Date: 11/28/2018
 * Time: 7:23 PM
 */

$installer = $this;

$setup = new Mage_Eav_Model_Entity_Setup('core_setup');
$installer->startSetup();

$setup->addAttribute('catalog_product', 'half_life_attribute', array(
    'type'              => 'int',
    'backend'           => '',
    'frontend'          => '',
    'label'             => 'Half-life (seconds)',
    'group'                => 'General',
    'input'             => 'text',
    'class'             => '',
    'source'            => '',
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'visible'           => false,
    'required'          => false,
    'user_defined'      => true,
    'default'           => '',
    'searchable'        => true,
    'filterable'        => false,
    'comparable'        => false,
    'visible_on_front'  => false,
    'used_in_product_listing' => true,
    'unique'            => false,
    'apply_to'             => array('simple', 'configurable', 'virtual', 'downloadable'),
    'is_configurable'   => false,
    'is_used_for_promo_rules' => true,
));
$installer->endSetup();