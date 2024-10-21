<?php

/**
 * @copyright   Copyright (C) 2022-2024 Björn Rudner
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2024-10-21
 *
 * iTop module definition file
 */

SetupWebPage::AddModule(
    __FILE__, // Path to the current file, all other file names are relative to the directory containing this file
    'br-modifications/2.7.10',
    array(
        // Identification
        //
        'label' => 'Datamodel: Modifications for iTop',
        'category' => 'business',

        // Setup
        //
        'dependencies' => array(
            '(itop-config-mgmt/2.7.0 & itop-config-mgmt/<3.0.0)||itop-structure/3.0.0',
            // add iTop Extensions (install during setup)
            'itop-config-mgmt/2.7.10',
            'itop-datacenter-mgmt/2.7.10',
            'itop-storage-mgmt/2.7.10',
            'itop-virtualization-mgmt/2.7.10',
            'itop-endusers-devices/2.7.10',
            'itop-tickets/2.7.0',
            // add TeemIP Extensions (install from iTop Hub)
            'teemip-network-mgmt/3.0.1',
            'teemip-network-mgmt-extended/3.0.1',
            'teemip-ip-mgmt/3.0.1',
            'teemip-datacenter-mgmt-adaptor/2.7.0',
            'teemip-virtualization-mgmt-adaptor/2.7.0',
            'teemip-storage-mgmt-adaptor/2.7.0',
            'teemip-config-mgmt-adaptor/2.7.0',
            // add my own extensions here (clone from GitHub)
            'br-location-extension/2.7.9',
            'br-org-extension/2.7.4',
            'br-landscape/2.7.2',
            'br-lifecycle/2.7.4',
            'br-cpu-extension/2.7.3',
        ),
        'mandatory' => false,
        'visible' => true,

        // Components
        //
        'datamodel' => array(
            'model.br-modifications.php',
        ),
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
