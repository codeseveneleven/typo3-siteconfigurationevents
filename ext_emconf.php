<?php

/*
 * This file is part of the TYPO3 project.
 *
 * @author Frank Berger <fberger@sudhaus7.de>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

$EM_CONF['siteconfigurationevents'] = [
    'title' => '(Code711) Site Configuration Events',
    'description' => 'This extension will provide PSR-14 events for the SiteConfiguration Class methods write, rename and delete. This way 3rd party extensions can attach to these events when a site configuration has been created or updated',
    'category' => 'misc',
    'version' => '1.2.1',
    'state' => 'stable',
    'clearcacheonload' => 1,
    'author' => 'Frank Berger',
    'author_email' => 'fberger@code711.de',
    'author_company' => 'Code711, a label of Sudhaus7, B-Factor GmbH and 12bis3 GbR',
    'constraints' => [
        'depends' => [
            'typo3' => '13.0.0-13.99.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
            'siteconfiggitsync' => '0.0.0-99.99.99',
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Code711\\SiteConfigurationEvents\\' => 'Classes',
        ],
    ],
];
