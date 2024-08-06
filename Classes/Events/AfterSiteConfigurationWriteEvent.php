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

class AfterSiteConfigurationWriteEvent
{
    private string $siteIdentifier;
    /**
     * @var array<string,mixed>
     */
    private array $configuration;
    private bool $protectPlaceholders;

    /**
     * @param string $siteIdentifier
     * @param array<string,mixed> $configuration
     * @param bool $protectPlaceholders
     */
    public function __construct(string $siteIdentifier, array $configuration, bool $protectPlaceholders)
    {
        $this->siteIdentifier = $siteIdentifier;
        $this->configuration = $configuration;
        $this->protectPlaceholders = $protectPlaceholders;
    }

    /**
     * @return string
     */
    public function getSiteIdentifier(): string
    {
        return $this->siteIdentifier;
    }

    /**
     * @return array<string,mixed>
     */
    public function getConfiguration(): array
    {
        return $this->configuration;
    }

    /**
     * @return bool
     */
    public function isProtectPlaceholders(): bool
    {
        return $this->protectPlaceholders;
    }

}
