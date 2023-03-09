<?php

namespace Code711\SiteConfigurationEvents\Events;

class AfterSiteConfigurationWriteEvent {
    private string $siteIdentifier;
    private array $configuration;
    private bool $protectPlaceholders;
    public function __construct(string $siteIdentifier, array $configuration, bool $protectPlaceholders ) {
        $this->siteIdentifier = $siteIdentifier;
        $this->configuration = $configuration;
        $this->protectPlaceholders = $protectPlaceholders;
    }

    /**
     * @return string
     */
    public function getSiteIdentifier(): string {
        return $this->siteIdentifier;
    }

    /**
     * @return array
     */
    public function getConfiguration(): array {
        return $this->configuration;
    }

    /**
     * @return bool
     */
    public function isProtectPlaceholders(): bool {
        return $this->protectPlaceholders;
    }


}
