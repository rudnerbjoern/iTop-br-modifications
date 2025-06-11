<?php

/**
 * @copyright   Copyright (C) 2022-2024 Björn Rudner
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2024-12-02
 *
 * iTop module definition file
 */

/** @disregard P1009 Undefined type SetupWebPage */
SetupWebPage::AddModule(
    __FILE__, // Path to the current file, all other file names are relative to the directory containing this file
    'br-modifications/3.1.5',
    array(
        // Identification
        //
        'label' => 'Datamodel: Modifications for iTop',
        'category' => 'business',

        // Setup
        //
        'dependencies' => array(
            // add iTop Extensions (install during setup)
            'itop-config-mgmt/3.1.0',
            'itop-datacenter-mgmt/3.1.0',
            'itop-storage-mgmt/3.1.0',
            'itop-virtualization-mgmt/3.1.0',
            'itop-endusers-devices/3.1.0',
            'itop-tickets/3.1.0',
            // add TeemIP Extensions (install from iTop Hub or clone from GitHub)
            'teemip-network-mgmt-extended/3.1.3', // https://store.itophub.io/en_US/products/teemip-network-mgmt-extended
            'teemip-ip-mgmt/3.2.0', // https://store.itophub.io/en_US/products/teemip-core-ip-mgmt
            'teemip-datacenter-mgmt-adaptor/3.0.0', // https://store.itophub.io/en_US/products/teemip-core-ip-mgmt
            'teemip-virtualization-mgmt-adaptor/3.0.0', // https://store.itophub.io/en_US/products/teemip-core-ip-mgmt
            'teemip-storage-mgmt-adaptor/3.0.0', // https://store.itophub.io/en_US/products/teemip-core-ip-mgmt
            'teemip-config-mgmt-adaptor/3.0.0', // https://store.itophub.io/en_US/products/teemip-core-ip-mgmt
            // add Combodo Extensions (install from iTop Hub or clone from GitHub)
            'combodo-vsphere-datamodel/1.1.0', // https://github.com/Combodo/combodo-vsphere-datamodel
            // add my own extensions here (clone from GitHub)
            'br-location-extension/3.1.9', // https://github.com/rudnerbjoern/iTop-br-location-extension
            'br-org-extension/3.1.4', // https://github.com/rudnerbjoern/iTop-br-org-extension
            'br-landscape/3.1.2', // https://github.com/rudnerbjoern/iTop-br-landscape
            'br-lifecycle/3.1.4', // https://github.com/rudnerbjoern/iTop-br-lifecycle
            'br-cpu-extension/3.1.3', // https://github.com/rudnerbjoern/iTop-br-cpu-extension
        ),

        'mandatory' => false,
        'visible' => true,

        // Components
        //
        'datamodel' => array(),
        'webservice' => array(),
        'data.struct' => array(
            // add your 'structure' definition XML files here,
        ),
        'data.sample' => array(
            // add your sample data XML files here,
        ),

        // Documentation
        //
        'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
        'doc.more_information' => '', // hyperlink to more information, if any

        // Default settings
        //
        'settings' => array(
            // Module specific settings go here, if any
        ),
    )
);
