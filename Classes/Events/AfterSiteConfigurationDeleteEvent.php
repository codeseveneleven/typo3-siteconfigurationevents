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

namespace Code711\SiteConfigurationEvents\Events;

final class AfterSiteConfigurationDeleteEvent
{
    private string $siteIdentifier;
    public function __construct(string $siteIdentifier)
    {
        $this->siteIdentifier = $siteIdentifier;
    }

    /**
     * @return string
     */
    public function getSiteIdentifier(): string
    {
        return $this->siteIdentifier;
    }

}
