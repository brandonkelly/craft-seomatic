<?php
/**
 * SEOmatic plugin for Craft CMS 3.x
 *
 * A turnkey SEO implementation for Craft CMS that is comprehensive, powerful,
 * and flexible
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2017 nystudio107
 */

/**
 * @author    nystudio107
 * @package   Seomatic
 * @since     3.0.0
 */

return [
    '*' => [
        'seoTitle'                => '{entry.title}',
        'siteNamePosition'        => 'before',
        'seoDescription'          => 'Entry SEO Description',
        'seoKeywords'             => 'Entry SEO Keywords',
        'seoImage'                => '',
        'seoImageDescription'     => 'Entry SEO Image Description',
        'canonicalUrl'            => '{entry.url}',
        'robots'                  => 'all',
        'ogType'                  => 'website',
        'ogTitle'                 => '{seomatic.meta.seoTitle}',
        'ogSiteNamePosition'      => '{seomatic.meta.siteNamePosition}',
        'ogDescription'           => '{seomatic.meta.seoDescription}',
        'ogImage'                 => '{seomatic.meta.seoImage}',
        'ogImageDescription'      => '{seomatic.meta.seoImageDescription}',
        'twitterCard'             => 'summary',
        'twitterCreator'          => '{seomatic.site.twitterHandle}',
        'twitterTitle'            => '{seomatic.meta.seoTitle}',
        'twitterSiteNamePosition' => '{seomatic.meta.siteNamePosition}',
        'twitterDescription'      => '{seomatic.meta.seoDescription}',
        'twitterImage'            => '{seomatic.meta.seoImage}',
        'twitterImageDescription' => '{seomatic.meta.seoImageDescription}',
    ],
];
