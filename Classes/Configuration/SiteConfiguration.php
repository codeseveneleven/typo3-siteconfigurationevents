<?php

declare(strict_types=1);

/*
 * This file is part of the TYPO3 project.
 *
 * @author Frank Berger <fberger@code711.de>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace Code711\SiteConfigurationEvents\Configuration;

use Code711\SiteConfigurationEvents\Events\AfterSiteConfigurationDeleteEvent;
use Code711\SiteConfigurationEvents\Events\AfterSiteConfigurationRenameEvent;
use Code711\SiteConfigurationEvents\Events\AfterSiteConfigurationWriteEvent;
use Code711\SiteConfigurationEvents\Events\BeforeSiteConfigurationWriteEvent;
use TYPO3\CMS\Core\EventDispatcher\EventDispatcher;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class SiteConfiguration extends \TYPO3\CMS\Core\Configuration\SiteConfiguration
{

    /**
     * @param string $siteIdentifier
     * @param array<string,mixed> $configuration
     * @param bool $protectPlaceholders
     *
     * @throws \TYPO3\CMS\Core\Configuration\Exception\SiteConfigurationWriteException
     */
    public function write(string $siteIdentifier, array $configuration, bool $protectPlaceholders = false): void
    {
        parent::write($siteIdentifier, $configuration, $protectPlaceholders);

        $this->eventDispatcher->dispatch(  new AfterSiteConfigurationWriteEvent( $siteIdentifier, $configuration,
            $protectPlaceholders) );
    }

    public function rename(string $currentIdentifier, string $newIdentifier): void
    {
        parent::rename($currentIdentifier, $newIdentifier);
        $this->eventDispatcher->dispatch(new AfterSiteConfigurationRenameEvent( $currentIdentifier, $newIdentifier));
    }

    public function delete(string $siteIdentifier): void
    {
        parent::delete($siteIdentifier);
        $this->eventDispatcher->dispatch( new AfterSiteConfigurationDeleteEvent( $siteIdentifier ));
    }
}
