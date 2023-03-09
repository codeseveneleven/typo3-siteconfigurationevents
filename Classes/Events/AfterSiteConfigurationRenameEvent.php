<?php

namespace Code711\SiteConfigurationEvents\Events;

class AfterSiteConfigurationRenameEvent
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
    public function getCurrentIdentifier(): string {
        return $this->currentIdentifier;
    }

    /**
     * @return string
     */
    public function getNewIdentifier(): string {
        return $this->newIdentifier;
    }

}
