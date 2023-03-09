<?php

namespace Code711\SiteConfigurationEvents\Events;

class AfterSiteConfigurationDeleteEvent {
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
