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

final class AfterSiteConfigurationRenameEvent
{
    private string $currentIdentifier;
    private string $newIdentifier;

    public function __construct(string $currentIdentifier, string $newIdentifier)
    {
        $this->currentIdentifier = $currentIdentifier;
        $this->newIdentifier = $newIdentifier;
    }

    /**
     * @return string
     */
    public function getCurrentIdentifier(): string
    {
        return $this->currentIdentifier;
    }

    /**
     * @return string
     */
    public function getNewIdentifier(): string
    {
        return $this->newIdentifier;
    }

}
