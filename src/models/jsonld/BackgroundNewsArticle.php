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

namespace nystudio107\seomatic\models\jsonld;

use nystudio107\seomatic\models\jsonld\NewsArticle;

/**
 * BackgroundNewsArticle - A NewsArticle providing historical context,
 * definition and detail on a specific topic (aka "explainer" or
 * "backgrounder"). For example, an in-depth article or
 * frequently-asked-questions (FAQ) document on topics such as Climate Change
 * or the European Union. Other kinds of background material from a non-news
 * setting are often described using Book or Article, in particular
 * ScholarlyArticle. See also NewsArticle for related vocabulary from a
 * learning/education perspective.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @since     3.0.0
 * @see       http://schema.org/BackgroundNewsArticle
 */
class BackgroundNewsArticle extends NewsArticle
{
    // Static Public Properties
    // =========================================================================

    /**
     * The Schema.org Type Name
     *
     * @var string
     */
    static public $schemaTypeName = 'BackgroundNewsArticle';

    /**
     * The Schema.org Type Scope
     *
     * @var string
     */
    static public $schemaTypeScope = 'https://schema.org/BackgroundNewsArticle';

    /**
     * The Schema.org Type Description
     *
     * @var string
     */
    static public $schemaTypeDescription = 'A NewsArticle providing historical context, definition and detail on a specific topic (aka "explainer" or "backgrounder"). For example, an in-depth article or frequently-asked-questions (FAQ) document on topics such as Climate Change or the European Union. Other kinds of background material from a non-news setting are often described using Book or Article, in particular ScholarlyArticle. See also NewsArticle for related vocabulary from a learning/education perspective.';

    /**
     * The Schema.org Type Extends
     *
     * @var string
     */
    static public $schemaTypeExtends = 'NewsArticle';

    /**
     * The Schema.org composed Property Names
     *
     * @var array
     */
    static public $schemaPropertyNames = [];

    /**
     * The Schema.org composed Property Expected Types
     *
     * @var array
     */
    static public $schemaPropertyExpectedTypes = [];

    /**
     * The Schema.org composed Property Descriptions
     *
     * @var array
     */
    static public $schemaPropertyDescriptions = [];

    /**
     * The Schema.org composed Google Required Schema for this type
     *
     * @var array
     */
    static public $googleRequiredSchema = [];

    /**
     * The Schema.org composed Google Recommended Schema for this type
     *
     * @var array
     */
    static public $googleRecommendedSchema = [];

    // Public Properties
    // =========================================================================

    /**
     * A dateline is a brief piece of text included in news articles that
     * describes where and when the story was written or filed though the date is
     * often omitted. Sometimes only a placename is provided. Structured
     * representations of dateline-related information can also be expressed more
     * explicitly using locationCreated (which represents where a work was created
     * e.g. where a news report was written). For location depicted or described
     * in the content, use contentLocation. Dateline summaries are oriented more
     * towards human readers than towards automated processing, and can vary
     * substantially. Some examples: "BEIRUT, Lebanon, June 2.", "Paris, France",
     * "December 19, 2017 11:43AM Reporting from Washington", "Beijing/Moscow",
     * "QUEZON CITY, Philippines".
     *
     * @var string [schema.org types: Text]
     */
    public $dateline;

    /**
     * The number of the column in which the NewsArticle appears in the print
     * edition.
     *
     * @var string [schema.org types: Text]
     */
    public $printColumn;

    /**
     * The edition of the print product in which the NewsArticle appears.
     *
     * @var string [schema.org types: Text]
     */
    public $printEdition;

    /**
     * If this NewsArticle appears in print, this field indicates the name of the
     * page on which the article is found. Please note that this field is intended
     * for the exact page name (e.g. A5, B18).
     *
     * @var string [schema.org types: Text]
     */
    public $printPage;

    /**
     * If this NewsArticle appears in print, this field indicates the print
     * section in which the article appeared.
     *
     * @var string [schema.org types: Text]
     */
    public $printSection;

    // Static Protected Properties
    // =========================================================================

    /**
     * The Schema.org Property Names
     *
     * @var array
     */
    static protected $_schemaPropertyNames = [
        'dateline',
        'printColumn',
        'printEdition',
        'printPage',
        'printSection'
    ];

    /**
     * The Schema.org Property Expected Types
     *
     * @var array
     */
    static protected $_schemaPropertyExpectedTypes = [
        'dateline' => ['Text'],
        'printColumn' => ['Text'],
        'printEdition' => ['Text'],
        'printPage' => ['Text'],
        'printSection' => ['Text']
    ];

    /**
     * The Schema.org Property Descriptions
     *
     * @var array
     */
    static protected $_schemaPropertyDescriptions = [
        'dateline' => 'A dateline is a brief piece of text included in news articles that describes where and when the story was written or filed though the date is often omitted. Sometimes only a placename is provided. Structured representations of dateline-related information can also be expressed more explicitly using locationCreated (which represents where a work was created e.g. where a news report was written). For location depicted or described in the content, use contentLocation. Dateline summaries are oriented more towards human readers than towards automated processing, and can vary substantially. Some examples: "BEIRUT, Lebanon, June 2.", "Paris, France", "December 19, 2017 11:43AM Reporting from Washington", "Beijing/Moscow", "QUEZON CITY, Philippines".',
        'printColumn' => 'The number of the column in which the NewsArticle appears in the print edition.',
        'printEdition' => 'The edition of the print product in which the NewsArticle appears.',
        'printPage' => 'If this NewsArticle appears in print, this field indicates the name of the page on which the article is found. Please note that this field is intended for the exact page name (e.g. A5, B18).',
        'printSection' => 'If this NewsArticle appears in print, this field indicates the print section in which the article appeared.'
    ];

    /**
     * The Schema.org Google Required Schema for this type
     *
     * @var array
     */
    static protected $_googleRequiredSchema = [
    ];

    /**
     * The Schema.org composed Google Recommended Schema for this type
     *
     * @var array
     */
    static protected $_googleRecommendedSchema = [
    ];

    // Public Methods
    // =========================================================================

    /**
    * @inheritdoc
    */
    public function init()
    {
        parent::init();
        self::$schemaPropertyNames = array_merge(
            parent::$schemaPropertyNames,
            self::$_schemaPropertyNames
        );

        self::$schemaPropertyExpectedTypes = array_merge(
            parent::$schemaPropertyExpectedTypes,
            self::$_schemaPropertyExpectedTypes
        );

        self::$schemaPropertyDescriptions = array_merge(
            parent::$schemaPropertyDescriptions,
            self::$_schemaPropertyDescriptions
        );

        self::$googleRequiredSchema = array_merge(
            parent::$googleRequiredSchema,
            self::$_googleRequiredSchema
        );

        self::$googleRecommendedSchema = array_merge(
            parent::$googleRecommendedSchema,
            self::$_googleRecommendedSchema
        );
    }

    /**
    * @inheritdoc
    */
    public function rules()
    {
        $rules = parent::rules();
        $rules = array_merge($rules, [
            [['dateline','printColumn','printEdition','printPage','printSection'], 'validateJsonSchema'],
            [self::$_googleRequiredSchema, 'required', 'on' => ['google'], 'message' => 'This property is required by Google.'],
            [self::$_googleRecommendedSchema, 'required', 'on' => ['google'], 'message' => 'This property is recommended by Google.']
        ]);

        return $rules;
    }
}
