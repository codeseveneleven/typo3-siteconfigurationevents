# TYPO3 Site Configuration Events

[![Latest Stable Version](https://poser.pugx.org/code711/siteconfigurationevents/v/stable.svg)](https://extensions.typo3.org/code711/siteconfigurationevents/)
[![TYPO3 12](https://img.shields.io/badge/TYPO3-1-orange.svg)](https://get.typo3.org/version/12)
[![Total Downloads](https://poser.pugx.org/code711/siteconfigurationevents/d/total.svg)](https://packagist.org/packages/code711/siteconfigurationevents)
[![Monthly Downloads](https://poser.pugx.org/code711/siteconfigurationevents/d/monthly)](https://packagist.org/packages/code711/siteconfigurationevents)

This extension will provide PSR-14 events for the SiteConfiguration Class methods write, rename and delete. This way 3rd party extensions can attach to these events when a site configuration has been created or updated

## Installation

<pre>composer req code711/siteconfigurationevents</pre>

## Usage

This extension will XCLASS <pre>\TYPO3\CMS\Core\Configuration\SiteConfiguration</pre> and add 1 event to the write method and each 1 event to the rename and delete methods, before calling the respective parent methods. No further changes are done to the Core class/

The following PSR-14 events will then be available.

### AfterSiteConfigurationWriteEvent

Receives the immutable (string)$siteIdentifier, the immutable $configuration array which has been written to the yaml file, and the immutable $protectPlaceholders boolean

### AfterSiteConfigurationRenameEvent

Receives (string)$currentIdentifier and the (string)$newIdentifier

### AfterSiteConfigurationDeleteEvent

Receives the removed (string)$siteIdentifier
