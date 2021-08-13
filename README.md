# Category Links plugin for Shopware 6

[![Latest Stable Version](https://img.shields.io/github/v/release/runelaenen/sw6-category-links?color=lightblue&label=stable&logo=github)](//packagist.org/packages/runelaenen/sw6-category-links)
[![Download plugin zip](https://img.shields.io/github/v/release/runelaenen/sw6-category-links.svg?label=.zip%20download&logo=github)](https://github.com/runelaenen/sw6-category-links/releases/latest)
[![Total Downloads](https://img.shields.io/packagist/dt/runelaenen/sw6-category-links?label=packagist%20downloads&logo=composer)](//packagist.org/packages/runelaenen/sw6-category-links)
[![GitHub Issues](https://img.shields.io/github/issues/runelaenen/sw6-category-links?logo=github)](https://github.com/runelaenen/sw6-category-links/issues)
[![GitHub Stars](https://img.shields.io/github/stars/runelaenen/sw6-category-links?logo=github)](https://github.com/runelaenen/sw6-category-links/stargazers)
[![License](https://poser.pugx.org/runelaenen/sw6-category-links/license)](//packagist.org/packages/runelaenen/sw6-category-links)

![Category Links plugin for Shopware 6](https://user-images.githubusercontent.com/3930922/109384793-9529e600-78ef-11eb-9927-b0a89867e26f.png)

## END OF LIFE
This functionality has been added to Shopware 6.4 so this plugin is not needed anymore.

Link your categories automatically to another Shopware category. No more typo's in manually entered urls, no more URL changes, ...

Use this plugin to put your footer categories in your header, or vice versa!

## How to install
### Composer install (recommended)
```
composer require runelaenen/sw6-category-links
bin/console plugin:refresh
bin/console plugin:install --activate RuneLaenenCategoryLinks
```
Builing the javascript & css will still be needed.
```
bin/build.sh
```
#### Plugin update (composer)
```
composer update runelaenen/sw6-category-links
bin/console plugin:update RuneLaenenCategoryLinks
```
Builing the javascript & css will still be needed.
```
bin/build.sh
```

### .zip install
1. Download the latest RuneLaenenCategoryLinks.zip from the [latest release](https://github.com/runelaenen/sw6-category-links/releases/latest).
2. Upload the zip in the Shopware Administration
3. Install & Activate the plugin

#### Plugin update (zip)
1. Download the latest RuneLaenenCategoryLinks.zip from the [latest release](https://github.com/runelaenen/sw6-category-links/releases/latest).
2. Upload the zip in the Shopware Administration
3. Update the plugin
