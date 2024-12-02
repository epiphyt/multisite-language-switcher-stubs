<?php

namespace lloc\Msls {
    /**
     * Abstraction for the hook classes
     *
     * @package Msls
     */
    class MslsMain
    {
        /**
         * Instance of options
         *
         * @var MslsOptions
         */
        protected $options;
        /**
         * Collection of blog objects
         *
         * @var MslsBlogCollection
         */
        protected $collection;
        /**
         * Constructor
         *
         * @param MslsOptions        $options
         * @param MslsBlogCollection $collection
         */
        public final function __construct(\lloc\Msls\MslsOptions $options, \lloc\Msls\MslsBlogCollection $collection)
        {
        }
        public static function create() : object
        {
        }
        /**
         * Prints a message in the error log if WP_DEBUG is true
         *
         * @param mixed $message
         */
        public function debugger($message) : void
        {
        }
        /**
         * Get the input array
         *
         * @param int $object_id
         *
         * @return array<string, int>
         */
        public function get_input_array($object_id) : array
        {
        }
        /**
         * Checks if the current input comes from the autosave-functionality
         *
         * @param int $post_id
         *
         * @return bool
         */
        public function is_autosave($post_id) : bool
        {
        }
        /**
         * Checks for the nonce in the INPUT_POST
         *
         * @return boolean
         */
        public function verify_nonce() : bool
        {
        }
        /**
         * Delete
         *
         * @param int $object_id
         *
         * @codeCoverageIgnore
         */
        public function delete($object_id) : void
        {
        }
        /**
         * Save
         *
         * @param int    $object_id
         * @param string $class_name
         *
         * @codeCoverageIgnore
         */
        protected function save($object_id, $class_name) : void
        {
        }
    }
    /**
     * Handling of existing/not existing translations in the backend listings of
     * various post types
     *
     * @package Msls
     */
    class MslsCustomColumn extends \lloc\Msls\MslsMain
    {
        public static function init() : void
        {
        }
        protected function add_hooks() : void
        {
        }
        /**
         * Table header
         *
         * @param string[] $columns
         *
         * @return string[]
         */
        public function th(array $columns)
        {
        }
        /**
         * Table body
         *
         * @param string $column_name
         * @param int    $item_id
         */
        public function td($column_name, $item_id) : void
        {
        }
    }
    /**
     * Handling of existing/not existing translations in the backend
     * listings of various taxonomies
     *
     * @package Msls
     */
    final class MslsCustomColumnTaxonomy extends \lloc\Msls\MslsCustomColumn
    {
        /**
         * @param string $deprecated
         * @param string $column_name
         * @param int    $item_id
         */
        public function column_default($deprecated, $column_name, $item_id) : void
        {
        }
        /**
         * @codeCoverageIgnore
         *
         * @param int $object_id
         */
        public function delete($object_id) : void
        {
        }
    }
    /**
     * Adding custom filter to posts/pages table.
     *
     * @package Msls
     */
    final class MslsCustomFilter extends \lloc\Msls\MslsMain
    {
        /**
         * @codeCoverageIgnore
         */
        public static function init() : void
        {
        }
        /**
         * Echo's select tag with list of blogs
         *
         * @uses selected
         */
        public function add_filter() : void
        {
        }
        /**
         * Executes filter, excludes translated posts from WP_Query
         *
         * @param \WP_Query $query
         *
         * @return bool|\WP_Query
         */
        public function execute_filter(\WP_Query $query)
        {
        }
    }
    class MslsBlock
    {
        protected \lloc\Msls\MslsOptions $options;
        public function __construct(\lloc\Msls\MslsOptions $options)
        {
        }
        /**
         * @codeCoverageIgnore
         */
        public static function init() : void
        {
        }
        /**
         * Register block and shortcode.
         */
        public function register_block() : bool
        {
        }
    }
    /**
     * Class MslsRegistryInstance
     *
     * @package lloc\Msls
     */
    class MslsRegistryInstance
    {
        /**
         * Gets or creates an instance of the called class
         *
         * @return static
         */
        public static function instance()
        {
        }
    }
    /**
     * Generic class for overloading properties
     *
     * @example https://gist.githubusercontent.com/lloc/2c232cef3f910acf692f/raw/f4eb70f4b1f8dc90c212d85d65af40c6604a32b9/MslsGetSet.php
     *
     * @package Msls
     */
    class MslsGetSet extends \lloc\Msls\MslsRegistryInstance
    {
        /**
         * @var array<string, mixed>
         */
        protected $arr = array();
        /**
         * Overloads the set method.
         *
         * @param string $key
         * @param mixed  $value
         */
        public function __set($key, $value)
        {
        }
        /**
         * Overloads the get method.
         *
         * @param string $key
         *
         * @return mixed
         */
        public function __get($key)
        {
        }
        /**
         * Overloads the isset method.
         *
         * @param string $key
         *
         * @return bool
         */
        public function __isset($key)
        {
        }
        /**
         * Overloads the unset method.
         *
         * @param string $key
         */
        public function __unset($key)
        {
        }
        /**
         * Resets the properties container to an empty array.
         *
         * @return MslsGetSet
         */
        public function reset()
        {
        }
        /**
         * Checks if the array has a non-empty item with the specified key name.
         *
         * This is method is similar to the overloaded __isset-method since
         * __set cleans empty properties, but I use for example
         *
         *     $obj->has_value( $temp )
         *
         * and not
         *
         *     isset( $obj->$temp )
         *
         * which is the same but in my opinion a little bit ugly.
         *
         * @param string $key
         *
         * @return bool
         */
        public function has_value(string $key) : bool
        {
        }
        /**
         * Checks if the properties-container is empty.
         *
         * @return bool
         */
        public function is_empty()
        {
        }
        /**
         * Gets the complete properties-container as an array.
         *
         * @return array<string, mixed>
         */
        public function get_arr() : array
        {
        }
    }
    /**
     * General options class
     *
     * @package Msls
     * @property bool $activate_content_import
     * @property bool $activate_autocomplete
     * @property bool $output_current_blog
     * @property int $display
     * @property int $reference_user
     * @property int $content_priority
     * @property string $admin_display
     * @property string $admin_language
     * @property string $description
     * @property string $before_item
     * @property string $after_item
     * @property string $before_output
     * @property string $after_output
     */
    class MslsOptions extends \lloc\Msls\MslsGetSet
    {
        public const PREFIX = 'msls';
        public const SEPARATOR = '';
        protected string $name;
        protected bool $exists = false;
        protected bool $autoload = true;
        /**
         * @var array<int, mixed>
         */
        protected array $args;
        /**
         * Rewrite with front
         *
         * @var bool
         */
        public ?bool $with_front = null;
        /**
         * Factory method
         *
         * @codeCoverageIgnore
         *
         * @param int $id
         *
         * @return MslsOptions
         */
        public static function create($id = 0)
        {
        }
        /**
         * Determines if the current page is the main page (front page, search, 404).
         *
         * @return boolean
         */
        public static function is_main_page()
        {
        }
        /**
         * Determines if the current page is a category, tag or taxonomy page.
         *
         * @return boolean
         */
        public static function is_tax_page()
        {
        }
        /**
         * Determines if the current page is an archive page for a date, author, or any other post type.
         *
         * @return boolean
         */
        public static function is_query_page()
        {
        }
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        public function get_option_name() : string
        {
        }
        /**
         * Gets an element of arg by index
         *
         * The returned value will either be cast to the type of `$default` or, if nothing is set at this index, it will be the value of `$default`.
         *
         * @param int   $index
         * @param mixed $default
         *
         * @return mixed
         */
        public function get_arg(int $index, $default = null)
        {
        }
        /**
         * @param mixed $arr
         */
        public function save($arr) : void
        {
        }
        public function delete() : void
        {
        }
        /**
         * @param mixed $arr
         *
         * @return bool
         */
        public function set($arr) : bool
        {
        }
        /**
         * @param string $language
         *
         * @return string
         */
        public function get_permalink($language)
        {
        }
        /**
         * Get postlink
         *
         * @param string $language
         *
         * @return string
         */
        public function get_postlink($language)
        {
        }
        /**
         * Get the queried taxonomy
         *
         * @return string
         */
        public function get_tax_query()
        {
        }
        /**
         * Get current link
         *
         * @return string
         */
        public function get_current_link()
        {
        }
        /**
         * Is excluded
         *
         * @return bool
         */
        public function is_excluded()
        {
        }
        /**
         * Is content
         *
         * @return bool
         */
        public function is_content_filter() : bool
        {
        }
        /**
         * Get order
         *
         * @return string
         */
        public function get_order()
        {
        }
        /**
         * Get url
         *
         * @param string $dir
         *
         * @return string
         */
        public function get_url($dir)
        {
        }
        /**
         * Returns slug for a post type
         *
         * @todo This method is not used anywhere in the codebase. Should it be removed?
         *
         * @param string $post_type
         *
         * @return string
         */
        public function get_slug(string $post_type) : string
        {
        }
        /**
         * @param string $language
         *
         * @return string
         */
        public function get_icon($language)
        {
        }
        /**
         * Get flag url
         *
         * @param string $language
         *
         * @return string
         */
        public function get_flag_url($language)
        {
        }
        /**
         * Get all available languages
         *
         * @return array<string, string>
         */
        public function get_available_languages() : array
        {
        }
        /**
         * The 'blog'-slug-problem :/
         *
         * @param string      $url
         * @param MslsOptions $options
         *
         * @return string
         */
        public static function check_for_blog_slug($url, $options)
        {
        }
        /**
         * Get the icon type by the settings saved in admin_display
         *
         * @return string
         */
        public function get_icon_type() : string
        {
        }
    }
    /**
     * MslsOptionsQuery
     *
     * @package Msls
     */
    class MslsOptionsQuery extends \lloc\Msls\MslsOptions
    {
        /**
         * Rewrite with front
         *
         * @var bool
         */
        public ?bool $with_front = true;
        protected \lloc\Msls\MslsSqlCacher $sql_cache;
        public function __construct(\lloc\Msls\MslsSqlCacher $sql_cache)
        {
        }
        /**
         * @return array<string, mixed>
         */
        public static function get_params() : array
        {
        }
        /**
         * Factory method
         *
         * @param int $id This parameter is unused here
         *
         * @return ?MslsOptionsQuery
         */
        public static function create($id = 0) : ?\lloc\Msls\MslsOptionsQuery
        {
        }
        /**
         * Get postlink
         *
         * @param string $language
         *
         * @return string
         */
        public function get_postlink($language)
        {
        }
    }
}
namespace lloc\Msls\ContentImport {
    /**
     * Class Relations
     *
     * Manages and tracks the relations between elements managed by MSLS that are created in the context of an import.
     *
     * @package lloc\Msls\ContentImport
     */
    class Relations
    {
        public array $to_create = array();
        protected array $local_options = array();
        /**
         * @var ImportCoordinates
         */
        protected $import_coordinates;
        /**
         * Relations constructor.
         *
         * @param ImportCoordinates $import_coordinates
         */
        public function __construct(\lloc\Msls\ContentImport\ImportCoordinates $import_coordinates)
        {
        }
        /**
         * Merges the data from a Relations object into this one.
         *
         * @param Relations|null $relations
         */
        public function merge(\lloc\Msls\ContentImport\Relations $relations = null) : void
        {
        }
        /**
         * @return array
         */
        public function get_data() : array
        {
        }
        /**
         * Creates the relations between the source blog elements and the destination one.
         */
        public function create() : void
        {
        }
        protected function create_source_to_local() : void
        {
        }
        protected function create_local_to_source() : void
        {
        }
        /**
         * Sets a relation that should be created.
         *
         * @param MslsOptions $creator
         * @param string      $dest_lang
         * @param string      $dest_post_id
         */
        public function should_create(\lloc\Msls\MslsOptions $creator, $dest_lang, $dest_post_id) : void
        {
        }
    }
    class ImportCoordinates
    {
        const IMPORTERS_GLOBAL_KEY = 'msls_importers';
        /**
         * @var int
         */
        public $source_blog_id;
        /**
         * @var int
         */
        public $source_post_id;
        /**
         * @var int
         */
        public $dest_blog_id;
        /**
         * @var int
         */
        public $dest_post_id;
        /**
         * @var \WP_Post
         */
        public $source_post;
        /**
         * @var string
         */
        public $source_lang;
        /**
         * @var string
         */
        public $dest_lang;
        /**
         * @var array An array keeping track of which importer (slug) should be used for
         *            a specific import type, shape [ <import-type> => <slug> ]
         */
        public $importers = array();
        /**
         * Validates the coordinates.
         *
         * @return bool
         */
        public function validate()
        {
        }
        /**
         * Returns the importer (slug) for a specific type of imports.
         *
         * @param string $importer_type
         *
         * @return string|null The import slug if set or `null` if not set.
         */
        public function get_importer_for($importer_type)
        {
        }
        /**
         * Parses the importers from request superglobals.
         */
        public function parse_importers_from_request() : void
        {
        }
        /**
         * Sets the slug of the importer that should be used for a type of import.
         *
         * @param string $importer_type
         * @param string $slug
         */
        public function set_importer_for($importer_type, $slug) : void
        {
        }
    }
    class MetaBox extends \lloc\Msls\MslsRegistryInstance
    {
        protected array $data = array();
        /**
         * Renders the content import metabox.
         */
        public function render() : void
        {
        }
        protected function inline_thickbox_url(array $data = array()) : string
        {
        }
        public function print_modal_html() : void
        {
        }
        protected function inline_thickbox_html($echo = true, array $data = array()) : string
        {
        }
    }
}
namespace lloc\Msls\ContentImport\LogWriters {
    interface LogWriter
    {
        /**
         * Writes the log to the destination.
         *
         * @param array $data An array of data to log.
         *
         * @return mixed
         */
        public function write(array $data);
    }
    class AdminNoticeLogger extends \lloc\Msls\MslsRegistryInstance implements \lloc\Msls\ContentImport\LogWriters\LogWriter
    {
        protected string $transient = 'msls_last_import_log';
        /**
         * @var ImportCoordinates
         */
        protected $import_coordinates;
        public function write(array $data)
        {
        }
        /**
         * @param string $section_title
         * @param array  $entries
         * @param bool   $escape_entries
         *
         * @return string
         */
        protected function get_section_html($section_title, $entries, $escape_entries = true) : string
        {
        }
        /**
         * Shows the last log that was written.
         *
         * @param bool $echo
         *
         * @return ?string
         */
        public function show_last_log($echo = true) : ?string
        {
        }
        /**
         * @param ImportCoordinates $import_coordinates
         */
        public function set_import_coordinates($import_coordinates) : void
        {
        }
        /**
         * Returns the name of the transient where the logger will store the output HTML.
         *
         * @return string
         */
        public function get_transient() : string
        {
        }
    }
}
namespace lloc\Msls\ContentImport\Importers {
    interface Importer
    {
        /**
         * @param array $data
         *
         * @return array
         */
        public function import(array $data);
        /**
         * @param ImportCoordinates $import_coordinates
         *
         * @return mixed
         */
        public function set_import_coordinates(\lloc\Msls\ContentImport\ImportCoordinates $import_coordinates);
        /**
         * @return ImportLogger
         */
        public function get_logger();
        /**
         * @return Relations
         */
        public function get_relations();
        /**
         * Returns an array of information about the importer.
         *
         * @return \stdClass
         */
        public static function info();
    }
    class BaseImporter implements \lloc\Msls\ContentImport\Importers\Importer
    {
        /**
         * @var ImportCoordinates
         */
        public $import_coordinates;
        /**
         * @var ImportLogger
         */
        public $logger;
        /**
         * @var Relations
         */
        public $relations;
        /**
         * BaseImporter constructor.
         *
         * @param ImportLogger|null $logger
         * @param Relations|null $relations
         */
        public function __construct(\lloc\Msls\ContentImport\ImportCoordinates $import_coordinates, \lloc\Msls\ContentImport\ImportLogger $logger = null, \lloc\Msls\ContentImport\Relations $relations = null)
        {
        }
        /**
         * @param array $data
         *
         * @return array
         */
        public function import(array $data)
        {
        }
        /**
         * @param ImportCoordinates $import_coordinates
         *
         * @return mixed
         */
        public function set_import_coordinates(\lloc\Msls\ContentImport\ImportCoordinates $import_coordinates)
        {
        }
        /**
         * @return ImportLogger
         */
        public function get_logger()
        {
        }
        /**
         * @return Relations
         */
        public function get_relations()
        {
        }
        /**
         * Returns an array of information about the importer.
         *
         * @return \stdClass
         */
        public static function info()
        {
        }
    }
}
namespace lloc\Msls\ContentImport\Importers\PostMeta {
    class Duplicating extends \lloc\Msls\ContentImport\Importers\BaseImporter
    {
        const TYPE = 'duplicating';
        /**
         * Returns an array of information about the importer.
         *
         * @return \stdClass
         */
        public static function info()
        {
        }
        public function import(array $data)
        {
        }
        /**
         * Filters the post meta that should not be imported.
         *
         * @param array $meta
         *
         * @return array
         */
        public function filter_post_meta(array $meta)
        {
        }
    }
}
namespace lloc\Msls\ContentImport\Importers\PostThumbnail {
    /**
     * Class Linking
     *
     * Creates an attachment post for the post thumbnail in the destination blog without duplicating the attachment files.
     *
     * @package lloc\Msls\ContentImport\Importers\PostThumbnail
     */
    class Linking extends \lloc\Msls\ContentImport\Importers\BaseImporter
    {
        const TYPE = 'linking';
        /**
         * Returns an array of information about the importer.
         *
         * @return \stdClass
         */
        public static function info()
        {
        }
        public function import(array $data)
        {
        }
        /**
         * @param int $source_post_thumbnail_id
         *
         * @return array
         */
        protected function get_attachment_meta($source_post_thumbnail_id)
        {
        }
    }
}
namespace lloc\Msls\ContentImport\Importers {
    interface ImportersFactory
    {
        /**
         * Builds the Importer that should be used depending on the import coordinates.
         *
         * @param \lloc\Msls\ContentImport\ImportCoordinates $import_coordinates
         *
         * @return Importer
         */
        public function make(\lloc\Msls\ContentImport\ImportCoordinates $import_coordinates);
        /**
         * Returns the factory details.
         *
         * @return \stdClass
         */
        public function details();
        /**
         * Returns the slug of the default importer for this factory.
         *
         * @return string
         */
        public function selected();
    }
    abstract class ImportersBaseFactory extends \lloc\Msls\MslsRegistryInstance implements \lloc\Msls\ContentImport\Importers\ImportersFactory
    {
        /**
         * The type of this importers factory; should be overridden by child classes.
         */
        const TYPE = 'none';
        /**
         * @var array<string, string> An array defining the slug and Importer class relationships in
         *            the shape [ <slug> => <importer-class> ]
         */
        protected array $importers_map = array();
        /**
         * @return Importer
         */
        public function make(\lloc\Msls\ContentImport\ImportCoordinates $import_coordinates)
        {
        }
        /**
         * Returns the factory details.
         *
         * @return \stdClass
         */
        public function details()
        {
        }
        /**
         * Returns the slug of the selected importer for this factory.
         *
         * @return string
         */
        public function selected()
        {
        }
        /**
         * @return array<string, \stdClass>
         */
        protected function importers_info() : array
        {
        }
    }
    class PostFieldsImporters extends \lloc\Msls\ContentImport\Importers\ImportersBaseFactory
    {
        const TYPE = 'post-fields';
        /**
         * @var array<string, string>
         */
        protected array $importers_map = array(\lloc\Msls\ContentImport\Importers\PostFields\Duplicating::TYPE => \lloc\Msls\ContentImport\Importers\PostFields\Duplicating::class);
        /**
         * Returns the factory details.
         *
         * @return \stdClass
         */
        public function details()
        {
        }
    }
    class Map extends \lloc\Msls\MslsRegistryInstance
    {
        /**
         * Builds and returns an array of importers for the specified import coordinates.
         *
         * @param ImportCoordinates $import_coordinates
         *
         * @return array An array of importer instances in the shape [ <string: slug> => <Importer: $importer> ]
         */
        public function make(\lloc\Msls\ContentImport\ImportCoordinates $import_coordinates)
        {
        }
        /**
         * Returns a filtered list of factories that will provide the importers.
         *
         * @return array An associative array in the shape [ <string: $slug> => <ImportersFactory: $factory> ]
         * @since TBD
         *
         */
        public function factories()
        {
        }
    }
    class TermsImporters extends \lloc\Msls\ContentImport\Importers\ImportersBaseFactory
    {
        const TYPE = 'terms';
        /**
         * @var array<string, string>
         */
        protected array $importers_map = array(\lloc\Msls\ContentImport\Importers\Terms\ShallowDuplicating::TYPE => \lloc\Msls\ContentImport\Importers\Terms\ShallowDuplicating::class);
        /**
         * Returns the factory details.
         *
         * @return \stdClass
         */
        public function details()
        {
        }
    }
}
namespace lloc\Msls\ContentImport\Importers\Terms {
    /**
     * Class ShallowDuplicating
     *
     * Duplicates, if needed, the terms assigned to the post without recursion for hierarchical taxonomies.
     *
     * @package lloc\Msls\ContentImport\Importers\Terms
     */
    class ShallowDuplicating extends \lloc\Msls\ContentImport\Importers\BaseImporter
    {
        const TYPE = 'shallow-duplicating';
        /**
         * @var array
         */
        protected $reset_taxonomies = array();
        /**
         * Returns an array of information about the importer.
         *
         * @return \stdClass
         */
        public static function info()
        {
        }
        public function import(array $data)
        {
        }
        /**
         * @param \WP_Term           $term
         * @param MslsOptionsTaxTerm $msls_term
         * @param string             $dest_lang
         *
         * @return bool|int
         */
        protected function create_local_term(\WP_Term $term, \lloc\Msls\MslsOptionsTax $msls_term, $dest_lang)
        {
        }
        /**
         * @param array    $meta
         * @param \WP_Term $term
         *
         * @return array
         */
        protected function filter_term_meta(array $meta, \WP_Term $term)
        {
        }
        /**
         * @param int    $object_id
         * @param int    $dest_term_id
         * @param string $taxonomy
         *
         * @return array|\WP_Error
         */
        protected function update_object_terms($object_id, $dest_term_id, $taxonomy)
        {
        }
    }
}
namespace lloc\Msls\ContentImport\Importers {
    /**
     * Trait WithRequestPostAttributes
     *
     * @since   TBD
     *
     * @package lloc\Msls\ContentImport\Importers
     */
    trait WithRequestPostAttributes
    {
        /**
        * Returns the post type read from `$_REQUEST['post_type']` if any, or a default post type.
        *
        * @param string $default The default post type to return if none is specified in the `$_REQUEST` super-global.
        *
        * @return string Either the post type read from the `$_REQUEST` super-global, or the default value.
        \    *
        */
        protected function read_post_type_from_request($default = 'post')
        {
        }
    }
}
namespace lloc\Msls\ContentImport\Importers\PostFields {
    /**
     * Class Duplicating
     *
     * Overwrites the destination post fields with an exact copy of the source post fields.
     *
     * @package lloc\Msls\ContentImport\Importers\PostFields
     */
    class Duplicating extends \lloc\Msls\ContentImport\Importers\BaseImporter
    {
        use \lloc\Msls\ContentImport\Importers\WithRequestPostAttributes;
        const TYPE = 'duplicating';
        /**
         * Returns an array of information about the importer.
         *
         * @return \stdClass
         */
        public static function info()
        {
        }
        public function import(array $data)
        {
        }
        /**
         * Filters the post fields that should be duplicated from the source post to the destination one.
         *
         * @return array
         */
        public function filter_fields()
        {
        }
    }
}
namespace lloc\Msls\ContentImport\Importers {
    class PostThumbnailImporters extends \lloc\Msls\ContentImport\Importers\ImportersBaseFactory
    {
        const TYPE = 'post-thumbnail';
        /**
         * @var array<string, string>
         */
        protected array $importers_map = array(\lloc\Msls\ContentImport\Importers\PostThumbnail\Linking::TYPE => \lloc\Msls\ContentImport\Importers\PostThumbnail\Linking::class);
        /**
         * Returns the factory details.
         *
         * @return \stdClass
         */
        public function details()
        {
        }
    }
    class PostMetaImporters extends \lloc\Msls\ContentImport\Importers\ImportersBaseFactory
    {
        const TYPE = 'post-meta';
        /**
         * @var array<string, string>
         */
        protected array $importers_map = array(\lloc\Msls\ContentImport\Importers\PostMeta\Duplicating::TYPE => \lloc\Msls\ContentImport\Importers\PostMeta\Duplicating::class);
        /**
         * Returns the factory details.
         *
         * @return \stdClass
         */
        public function details()
        {
        }
    }
    class AttachmentsImporters extends \lloc\Msls\ContentImport\Importers\ImportersBaseFactory
    {
        const TYPE = 'attachments';
        /**
         * @var array<string, string>
         */
        protected array $importers_map = array(\lloc\Msls\ContentImport\Importers\Attachments\Linking::TYPE => \lloc\Msls\ContentImport\Importers\Attachments\Linking::class);
        /**
         * Returns the factory details.
         *
         * @return \stdClass
         */
        public function details()
        {
        }
    }
}
namespace lloc\Msls\ContentImport\Importers\Attachments {
    /**
     * Class Linking
     *
     * Post attachments are just left in place in the source blog.
     *
     * @package lloc\Msls\ContentImport\Importers\Attachments
     */
    class Linking extends \lloc\Msls\ContentImport\Importers\BaseImporter
    {
        const TYPE = 'linking';
        /**
         * Returns an array of information about the importer.
         *
         * @return \stdClass
         */
        public static function info()
        {
        }
        public function import(array $data)
        {
        }
    }
}
namespace lloc\Msls\ContentImport {
    /**
     * Class Service
     *
     * A service provider for the content import functionality.
     *
     * @package lloc\Msls\ContentImport
     */
    class Service extends \lloc\Msls\MslsRegistryInstance
    {
        /**
         * Hooks the classes that provide the content import functionality if the content import option is active.
         *
         * @return bool Whether the content import functionality support classes where hooked or not.
         */
        public function register() : bool
        {
        }
        /**
         * Hooks the filters and actions for this service provider.
         *
         * Differently from the `register` method this method will not check for options to hook.
         */
        public function hook() : void
        {
        }
    }
    class AttachmentPathFinder extends \lloc\Msls\MslsRegistryInstance
    {
        const LINKED = '_msls_linked';
        /**
         * @param array  $sources
         * @param mixed  $sizeArray
         * @param string $imageSrc
         * @param mixed  $imageMeta
         * @param int    $attachmentId
         * @return array<string, string>
         */
        public function filter_srcset(array $sources, $sizeArray, $imageSrc, $imageMeta, $attachmentId) : array
        {
        }
        /**
         * @param int $attachment_id
         * @return array|false
         */
        protected function has_import_data($attachment_id)
        {
        }
        /**
         * @param string $url
         * @param int    $attachment_id
         * @return string
         */
        public function filter_attachment_url($url, $attachment_id)
        {
        }
        /**
         * @param int   $attachment_id
         * @param array $msls_imported
         *
         * @return \WP_Post|false
         */
        protected function get_source_post($attachment_id, $msls_imported)
        {
        }
    }
    class ImportLogger
    {
        protected string $levels_delimiter = '/';
        /**
         * @var array<string, array>
         */
        protected array $data = array('info' => array(), 'error' => array(), 'success' => array());
        /**
         * @var ImportCoordinates
         */
        protected $import_coordinates;
        public function __construct(\lloc\Msls\ContentImport\ImportCoordinates $import_coordinates)
        {
        }
        /**
         * Merges the specified log data into this log.
         *
         * @param ImportLogger|null $logger
         */
        public function merge(\lloc\Msls\ContentImport\ImportLogger $logger = null) : void
        {
        }
        /**
         * @return array<string, array>
         */
        public function get_data() : array
        {
        }
        /**
         * Saves the log or prints it some place.
         */
        public function save() : void
        {
        }
        /**
         * Logs an error.
         *
         * @param string $where A location string using `/` as level format.
         * @param mixed  $what What should be stored in the log.
         */
        public function log_error($where, $what) : void
        {
        }
        /**
         * Logs something.
         *
         * @param string $where A location string using `/` as level format.
         * @param mixed  $what What should be stored in the log.
         * @param string $root Where to log the information.
         */
        protected function log($where, $what, $root = 'info') : void
        {
        }
        /**
         * @param array $path
         * @param mixed $what
         *
         * @return array
         */
        protected function build_nested_array($path, $what = '') : array
        {
        }
        /**
         * @param string $where
         *
         * @return array
         */
        protected function build_path(string $where) : array
        {
        }
        /**
         * Returns the string that will be used to split paths into levels.
         *
         * @return string
         */
        public function get_levels_delimiter() : string
        {
        }
        /**
         * Sets the string that will be used to split paths into levels.
         *
         * @param string $levels_delimiter
         */
        public function set_levels_delimiter($levels_delimiter) : void
        {
        }
        /**
         * Logs a success.
         *
         * @param string $where A location string using `/` as level format.
         * @param mixed  $what What should be stored in the log.
         */
        public function log_success($where, $what) : void
        {
        }
        /**
         * Logs some generic information.
         *
         * @param string $key
         * @param string $message
         */
        public function log_information($key, $message) : void
        {
        }
        /**
         * @param string $where
         *
         * @return mixed
         */
        public function get_error($where)
        {
        }
        /**
         * @param string $where
         *
         * @return mixed
         */
        protected function get_nested_value($where)
        {
        }
        /**
         * @param string $where
         *
         * @return mixed
         */
        public function get_success($where)
        {
        }
        /**
         * @param string $key
         *
         * @return mixed
         */
        public function get_information($key)
        {
        }
    }
    /**
     * Class ContentImporter
     *
     * Handles the request for a content import.
     *
     * @package lloc\Msls\ContentImport
     */
    class ContentImporter extends \lloc\Msls\MslsRegistryInstance
    {
        use \lloc\Msls\ContentImport\Importers\WithRequestPostAttributes;
        /**
         * @var MslsMain
         */
        protected $main;
        /**
         * @var ImportLogger
         */
        protected $logger;
        /**
         * @var Relations
         */
        protected $relations;
        /**
         * @var bool Whether the class should handle requests or not.
         */
        protected $handle = true;
        /**
         * @var int The ID of the post the class created while handling the request, if any.
         */
        protected $has_created_post = 0;
        /**
         * ContentImporter constructor.
         *
         * @param \lloc\Msls\MslsMain|null $main
         */
        public function __construct(\lloc\Msls\MslsMain $main = null)
        {
        }
        /**
         * @return \lloc\Msls\ContentImport\ImportLogger
         */
        public function get_logger()
        {
        }
        /**
         * @param \lloc\Msls\ContentImport\ImportLogger $logger
         */
        public function set_logger($logger) : void
        {
        }
        /**
         * @return \lloc\Msls\ContentImport\Relations
         */
        public function get_relations()
        {
        }
        /**
         * @param \lloc\Msls\ContentImport\Relations $relations
         */
        public function set_relations($relations) : void
        {
        }
        /**
         * Handles an import request happening during a post save or a template redirect.
         *
         * @param array|null $data
         *
         * @return array The updated, if needed, data array.
         */
        public function handle_import(array $data = array())
        {
        }
        /**
         * Whether the importer should run or not.
         *
         * @return bool
         */
        protected function pre_flight_check(array $data = array())
        {
        }
        /**
         * Parses the source blog and post IDs from the $_POST array validating them.
         *
         * @return array|bool
         */
        public function parse_sources()
        {
        }
        /**
         * @param int $blog_id
         *
         * @return int
         */
        protected function get_the_blog_post_ID($blog_id)
        {
        }
        protected function insert_blog_post($blog_id, array $data = array())
        {
        }
        public function handle($handle)
        {
        }
        /**
         * Imports content according to the provided coordinates.
         *
         * @param ImportCoordinates $import_coordinates
         * @param array             $post_fields An optional array of post fields; this can be
         *                                                         left empty if the method is not called as a consequence
         *                                                         of filtering the `wp_insert_post_data` filter.
         *
         * @return array An array of modified post fields.
         */
        public function import_content(\lloc\Msls\ContentImport\ImportCoordinates $import_coordinates, array $post_fields = array())
        {
        }
        /**
         * @param int   $blog_id
         * @param int   $post_id
         * @param array $data
         * @return array
         */
        protected function update_inserted_blog_post_data($blog_id, $post_id, array $data)
        {
        }
        /**
         * @param int $dest_blog_id
         * @param int $post_id
         * @return void
         */
        protected function redirect_to_blog_post($dest_blog_id, $post_id)
        {
        }
        /**
         * Filters whether the post should be considered empty or not.
         *
         * Empty posts would not be saved to database but it's fine if in
         * the context of a content import as it will be populated.
         *
         * @param bool $empty
         *
         * @return bool
         */
        public function filter_empty($empty)
        {
        }
    }
}
namespace lloc\Msls {
    /**
     * Supported content types
     *
     * @package Msls
     */
    abstract class MslsContentTypes extends \lloc\Msls\MslsRegistryInstance
    {
        /**
         * Request
         *
         * @var string
         */
        protected string $request;
        /**
         * Types
         *
         * @var string[]
         */
        protected array $types = array();
        /**
         * Factory method
         *
         * @return MslsContentTypes
         */
        public static function create()
        {
        }
        /**
         * Check for post_type
         *
         * @return bool
         */
        public function is_post_type()
        {
        }
        /**
         * Check for taxonomy
         *
         * @return bool
         */
        public function is_taxonomy()
        {
        }
        /**
         * Check if the current user can manage this content type
         *
         * Returns name of the content type if the user has access or an empty
         * string if the user can not access
         *
         * @return string
         */
        public function acl_request()
        {
        }
        /**
         * Getter
         *
         * @return string[]
         */
        public static abstract function get() : array;
        /**
         * Gets the request if it is an allowed content type
         *
         * @return string
         */
        public abstract function get_request() : string;
    }
    /**
     * MslsOptionsQueryMonth
     *
     * @package Msls
     */
    class MslsOptionsQueryMonth extends \lloc\Msls\MslsOptionsQuery
    {
        protected int $year;
        protected int $monthnum;
        public function __construct(\lloc\Msls\MslsSqlCacher $sql_cache)
        {
        }
        /**
         * @return array<string, mixed>
         */
        public static function get_params() : array
        {
        }
        /**
         * Check if the array has a non-empty item which has $language as a key
         *
         * @param string $language
         *
         * @return bool
         */
        public function has_value(string $language) : bool
        {
        }
        /**
         * Get current link
         *
         * @return string
         */
        public function get_current_link() : string
        {
        }
    }
    /**
     * Content types: Taxonomies (Tags, Categories, ...)
     *
     * @package Msls
     */
    class MslsTaxonomy extends \lloc\Msls\MslsContentTypes
    {
        /**
         * Post type
         *
         * @var string
         */
        protected $post_type = '';
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * @return string[]
         * @uses get_taxonomies
         */
        public static function get() : array
        {
        }
        /**
         * @return string
         */
        public function get_request() : string
        {
        }
        /**
         * Check for taxonomy
         *
         * @return bool
         */
        public function is_taxonomy()
        {
        }
        /**
         * Check if the current user can manage this content type
         *
         * Returns name of the content type if the user has access or an empty
         * string if the user can not access
         *
         * @return string
         */
        public function acl_request()
        {
        }
        /**
         * Get the requested post_type of the taxonomy
         *
         * @return string
         */
        public function get_post_type()
        {
        }
    }
    /**
     * Post Tag
     *
     * @package Msls
     */
    class MslsPostTag extends \lloc\Msls\MslsMain
    {
        const EDIT_ACTION = 'msls_post_tag_edit_input';
        const ADD_ACTION = 'msls_post_tag_add_input';
        /**
         * Suggest
         *
         * Echo a JSON-ified array of posts of the given post-type and
         * the requested search-term and then die silently
         */
        public static function suggest() : void
        {
        }
        public static function init() : void
        {
        }
        /**
         * Add the input fields to the add-screen of the taxonomies
         *
         * @param string $taxonomy
         */
        public function add_input(string $taxonomy) : void
        {
        }
        /**
         * Add the input fields to the edit-screen of the taxonomies
         *
         * @param \WP_Term $tag
         * @param string   $taxonomy
         */
        public function edit_input(\WP_Term $tag, string $taxonomy) : void
        {
        }
        /**
         * Print the input fields
         *
         * Returns true if the blog collection is not empty
         *
         * @param ?\WP_Term $tag
         * @param string    $title_format
         * @param string    $item_format
         *
         * @return boolean
         */
        public function the_input(?\WP_Term $tag, string $title_format, string $item_format) : bool
        {
        }
        /**
         * Set calls the save method if taxonomy is set
         *
         * @param int $term_id
         */
        public function set($term_id) : void
        {
        }
        /**
         * Sets the selected element in the data from the `$_GET` superglobal, if any.
         *
         * @param MslsOptionsTax $mydata
         *
         * @return MslsOptionsTax
         */
        public function maybe_set_linked_term(\lloc\Msls\MslsOptionsTax $mydata)
        {
        }
        /**
         * Get the title for the select field
         *
         * @return string
         */
        protected function get_select_title() : string
        {
        }
    }
    /**
     * Post Tag Classic
     *
     * @package Msls
     */
    class MslsPostTagClassic extends \lloc\Msls\MslsPostTag
    {
        const EDIT_ACTION = 'msls_post_tag_classic_edit_input';
        const ADD_ACTION = 'msls_post_tag_classic_add_input';
        /**
         * Add the input fields to the add-screen of the taxonomies
         *
         * @param string $taxonomy
         */
        public function add_input(string $taxonomy) : void
        {
        }
        /**
         * Add the input fields to the edit-screen of the taxonomies
         *
         * @param \WP_Term $tag
         * @param string   $taxonomy
         */
        public function edit_input(\WP_Term $tag, string $taxonomy) : void
        {
        }
        /**
         * Print the input fields
         * Returns true if the blog-collection is not empty
         *
         * @param ?\WP_Term $tag
         * @param string    $title_format
         * @param string    $item_format
         *
         * @return boolean
         */
        public function the_input(?\WP_Term $tag, string $title_format, string $item_format) : bool
        {
        }
        /**
         * Prints options inputs
         *
         * @param MslsBlog       $blog
         * @param string         $type
         * @param MslsOptionsTax $mydata
         * @param string         $item_format
         */
        public function print_option(\lloc\Msls\MslsBlog $blog, string $type, \lloc\Msls\MslsOptionsTax $mydata, string $item_format) : void
        {
        }
    }
    /**
     * Content types: Post types (Pages, Posts, ...)
     *
     * @package Msls
     */
    class MslsPostType extends \lloc\Msls\MslsContentTypes
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * @return string[]
         * @uses get_post_types
         */
        public static function get() : array
        {
        }
        /**
         * @return string
         */
        public function get_request() : string
        {
        }
        /**
         * Check for post_type
         *
         * @return bool
         */
        public function is_post_type()
        {
        }
    }
    /**
     * Stores the language input from post
     *
     * @example https://gist.githubusercontent.com/lloc/2c232cef3f910acf692f/raw/c78a78b42cb4c9e97a118523f7497f02b838a2ee/MslsLanguageArray.php
     * @package Msls
     */
    class MslsLanguageArray
    {
        /**
         * @var array<string, int>
         */
        protected array $arr;
        /**
         * Constructor
         *
         * @param array<string, mixed> $arr
         */
        public function __construct(array $arr = array())
        {
        }
        /**
         * Set a key-value-pair
         * - $key must be a string of length >= 2
         * - $value must be an integer > 0
         *
         * @param string $key
         * @param mixed  $value
         *
         * @return MslsLanguageArray
         */
        public function set($key, $value)
        {
        }
        /**
         * Get the value of the element with the specified key
         *
         * @param string $key
         *
         * @return int
         */
        public function get_val($key)
        {
        }
        /**
         * Get the filtered array without the specified element
         *
         * @param string $key
         *
         * @return array<string, int>
         */
        public function get_arr(string $key = '') : array
        {
        }
    }
    /**
     * Output in the frontend
     *
     * @package Msls
     */
    class MslsOutput extends \lloc\Msls\MslsMain
    {
        public static function init() : object
        {
        }
        /**
         * Holds the format for the output
         *
         * @var array<string, string>
         */
        protected array $tags;
        /**
         * @param ?int $display
         * @param bool $filter
         * @param bool $exists
         *
         * @return string[]
         */
        public function get(?int $display, bool $filter = false, $exists = false) : array
        {
        }
        /**
         * Get alternate links for the head section
         *
         * @return string
         */
        public function get_alternate_links()
        {
        }
        /**
         * Returns a string when the object will be treated like a string
         *
         * @return string
         */
        public function __toString()
        {
        }
        /**
         * Gets tags for the output
         *
         * @return array<string, string>
         */
        public function get_tags() : array
        {
        }
        /**
         * Sets tags for the output
         *
         * @param string[] $arr
         *
         * @return MslsOutput
         */
        public function set_tags(array $arr = array()) : \lloc\Msls\MslsOutput
        {
        }
        /**
         * Returns true if the requirements not fulfilled
         *
         * @param MslsOptions|null $thing
         * @param boolean          $exists
         * @param string           $language
         *
         * @return boolean
         */
        public function is_requirements_not_fulfilled($thing, $exists, $language)
        {
        }
    }
    /**
     * The standard widget of the Multisite Language Switcher
     *
     * @package Msls
     */
    class MslsWidget extends \WP_Widget
    {
        public const ID_BASE = 'mslswidget';
        public function __construct()
        {
        }
        public static function init() : void
        {
        }
        /**
         * @param array<string, mixed> $args
         * @param array<string, mixed> $instance
         *
         * @return void
         */
        public function widget($args, $instance)
        {
        }
        /**
         * Update widget in the backend
         *
         * @param array<string, mixed> $new_instance
         * @param array<string, mixed> $old_instance
         *
         * @return array<string, mixed>
         */
        public function update($new_instance, $old_instance)
        {
        }
        /**
         * Display an input-form in the backend
         *
         * @param array<string, mixed> $instance
         */
        public function form($instance)
        {
        }
    }
    /**
     * Administration of the options
     *
     * @method void activate_autocomplete()
     * @method void sort_by_description()
     * @method void exclude_current_blog()
     * @method void only_with_translation()
     * @method void output_current_blog()
     * @method void before_output()
     * @method void after_output()
     * @method void before_item()
     * @method void after_item()
     * @method void content_filter()
     *
     * @package Msls
     */
    final class MslsAdmin extends \lloc\Msls\MslsMain
    {
        public const MAX_REFERENCE_USERS = 100;
        /**
         * @codeCoverageIgnore
         */
        public static function init() : void
        {
        }
        /**
         * Let's do this simple
         *
         * @return string
         */
        public function get_menu_slug() : string
        {
        }
        /**
         * Gets the link for the switcher-settings in the wp-admin
         *
         * @return string
         */
        public function get_options_page_link() : string
        {
        }
        /**
         * You can use every method of the decorated object
         *
         * @param string $method
         * @param mixed  $args
         *
         * @return mixed
         */
        public function __call($method, $args)
        {
        }
        /**
         * There is something wrong? Here comes the message...
         *
         * @return bool
         */
        public function has_problems() : void
        {
        }
        /**
         * Render the options-page
         */
        public function render() : void
        {
        }
        /**
         * Create a submenu which contains links to all blogs of the current user
         *
         * @return string
         */
        public function subsubsub() : string
        {
        }
        /**
         * Register the form-elements
         */
        public function register() : void
        {
        }
        /**
         * Registers the fields in the language_section
         *
         * Returns the number of added fields
         *
         * @return int
         */
        public function language_section() : int
        {
        }
        /**
         * Registers the fields in the main_section
         *
         * Returns the number of added fields
         *
         * @return int
         */
        public function main_section() : int
        {
        }
        /**
         * Registers the fields in the advanced_section
         *
         * Returns the number of added fields
         *
         * @return int
         */
        public function advanced_section() : int
        {
        }
        /**
         * Registers the fields in the rewrites_section
         *
         * Returns the number of added fields
         *
         * @return int
         */
        public function rewrites_section() : int
        {
        }
        /**
         * Shows the select-form-field 'blog_language'
         */
        public function blog_language() : void
        {
        }
        /**
         * Shows the select-form-field 'display'
         */
        public function display() : void
        {
        }
        /**
         * Shows the select-form-field 'admin_display'
         */
        public function admin_display() : void
        {
        }
        /**
         * Shows the select-form-field 'reference_user'
         */
        public function reference_user() : void
        {
        }
        /**
         * The description for the current blog
         *
         * The language will be used ff there is no description.
         */
        public function description() : void
        {
        }
        /**
         * If the output in the_content is active you can set the priority too
         *
         * Default is 10. But may be there are other plugins active and you run into
         * trouble. So you can decide a higher (from 1) or a lower (to 100) priority
         * for the output
         */
        public function content_priority() : void
        {
        }
        /**
         * Rewrites slugs for registered post types
         *
         * @param mixed $key
         */
        public function render_rewrite($key) : void
        {
        }
        /**
         * Validates input before saving it
         *
         * @param array<string, mixed> $arr Values of the submitted form
         *
         * @return array<string, mixed>
         */
        public function validate(array $arr)
        {
        }
        /**
         * Filter which sets the global blog language
         *
         * @param string[] $arr
         *
         * @return string[]
         */
        public function set_blog_language(array $arr)
        {
        }
    }
    /**
     * Link type: Image and text
     *
     * @package Msls
     * @property string $txt
     * @property string $src
     * @property string $alt
     * @property string $url
     */
    class MslsLink extends \lloc\Msls\MslsGetSet
    {
        /**
         * Output format
         *
         * @var string
         */
        protected $format_string = '<img src="{src}" alt="{alt}"/> {txt}';
        /**
         * Gets all link types as array with "id => name"-items
         *
         * @return string[]
         */
        public static function get_types()
        {
        }
        /**
         * Gets the link description.
         *
         * @return string
         */
        public static function get_description() : string
        {
        }
        /**
         * Gets an array with all link descriptions
         *
         * @return array<string, string>
         */
        public static function get_types_description() : array
        {
        }
        /**
         * Factory: Creates a specific instance of MslsLink
         *
         * @param ?int $display
         *
         * @return MslsLink
         */
        public static function create(?int $display) : \lloc\Msls\MslsLink
        {
        }
        /**
         * Callback function (no lambda here because PHP 5.2 might be still in use)
         *
         * @param mixed $x
         *
         * @return string
         */
        public static function callback($x)
        {
        }
        /**
         * Handles the request to print the object
         *
         * @return string
         */
        public function __toString()
        {
        }
    }
    /**
     * Link type: Image only
     *
     * @package Msls
     */
    class MslsLinkImageOnly extends \lloc\Msls\MslsLink
    {
        /**
         * Output format
         *
         * @var string
         */
        protected $format_string = '<img src="{src}" alt="{alt}"/>';
        /**
         * Get the description
         *
         * @return string
         */
        public static function get_description() : string
        {
        }
    }
    /**
     * Meta box for the edit mode of the (custom) post types
     *
     * @package Msls
     */
    final class MslsMetaBox extends \lloc\Msls\MslsMain
    {
        public static function init() : void
        {
        }
        /**
         * Suggest
         *
         * Echo a JSON-ified array of posts of the given post-type and
         * the requested search-term and then die silently
         */
        public static function suggest() : void
        {
        }
        /**
         * @param MslsJson             $json
         * @param array<string, mixed> $args
         *
         * @return MslsJson
         */
        public static function get_suggested_fields(\lloc\Msls\MslsJson $json, array $args) : \lloc\Msls\MslsJson
        {
        }
        /**
         * Adds the meta box to the post types
         */
        public function add() : void
        {
        }
        /**
         * Render the classic select-box
         *
         * @uses selected
         */
        public function render_select() : void
        {
        }
        /**
         * @param string $type
         * @param ?int   $msls_id
         *
         * @return string
         */
        public function render_options($type, $msls_id) : string
        {
        }
        /**
         * @param int $post_id
         * @param int $msls_id
         *
         * @return string
         */
        public function render_option(int $post_id, ?int $msls_id) : string
        {
        }
        public function render_input() : void
        {
        }
        /**
         * Set
         *
         * @param int $post_id
         */
        public function set($post_id) : void
        {
        }
        /**
         * Sets the selected element in the data from the `$_GET` superglobal, if any.
         *
         * @param MslsOptionsPost $mydata
         *
         * @return MslsOptionsPost
         */
        public function maybe_set_linked_post(\lloc\Msls\MslsOptionsPost $mydata)
        {
        }
    }
    /**
     * Link type: Text and image
     *
     * @package Msls
     */
    class MslsLinkTextImage extends \lloc\Msls\MslsLink
    {
        /**
         * Output format
         *
         * @var string
         */
        protected $format_string = '{txt} <img src="{src}" alt="{alt}"/>';
        /**
         * Get the description
         *
         * @return string
         */
        public static function get_description() : string
        {
        }
    }
    /**
     * Internal representation of a blog
     *
     * @property int $userblog_id
     * @package Msls
     */
    class MslsBlog
    {
        /**
         * Constructor
         *
         * @param ?\StdClass $obj
         * @param string     $description
         */
        public function __construct($obj, $description)
        {
        }
        /**
         * Gets a member of the \StdClass-object by name
         *
         * The method return <em>null</em> if the requested member does not exists.
         *
         * @param string $key
         *
         * @return mixed|null
         */
        public final function __get($key)
        {
        }
        /**
         * Gets the description stored in this object
         *
         * The method returns the stored language if the description is empty.
         *
         * @return string
         */
        public function get_description() : string
        {
        }
        /**
         * Gets a customized title for the blog
         *
         * @param string $icon_type
         *
         * @return string
         */
        public function get_title(string $icon_type = 'flag') : string
        {
        }
        /**
         * Gets the language stored in this object
         *
         * @param string $default
         *
         * @return string
         */
        public function get_language($default = 'en_US')
        {
        }
        /**
         * Gets the alpha2-part of the language-code
         *
         * @return string
         */
        public function get_alpha2()
        {
        }
        /**
         * @param MslsOptions $options
         *
         * @return string|null
         */
        public function get_url($options)
        {
        }
        /**
         * @param MslsOptions $options
         *
         * @return string|null
         */
        protected function get_permalink($options)
        {
        }
        /**
         * Sort objects helper
         *
         * @param string $a
         * @param string $b
         *
         * @return int
         */
        public static function _cmp($a, $b)
        {
        }
        /**
         * Sort objects by language
         *
         * @param MslsBlog $a
         * @param MslsBlog $b
         *
         * @return int
         */
        public static function language(\lloc\Msls\MslsBlog $a, \lloc\Msls\MslsBlog $b)
        {
        }
        /**
         * Sort objects by description
         *
         * @param MslsBlog $a
         * @param MslsBlog $b
         *
         * @return int
         */
        public static function description(\lloc\Msls\MslsBlog $a, \lloc\Msls\MslsBlog $b)
        {
        }
        /**
         * @return string
         */
        public function get_blavatar() : string
        {
        }
    }
    /**
     * MslsOptionsTax
     *
     * @package Msls
     */
    class MslsOptionsTax extends \lloc\Msls\MslsOptions
    {
        public const SEPARATOR = '_term_';
        protected bool $autoload = false;
        /**
         * @param int $id
         *
         * @return MslsOptionsTax
         */
        public static function create($id = 0) : \lloc\Msls\MslsOptionsTax
        {
        }
        /**
         * Get the queried taxonomy
         *
         * @return string
         */
        public function get_tax_query()
        {
        }
        /**
         * Get postlink
         *
         * @param string $language
         *
         * @return string
         */
        public function get_postlink($language)
        {
        }
        /**
         * Get current link
         *
         * @return string
         */
        public function get_current_link()
        {
        }
        /**
         * Wraps the call to get_term_link
         *
         * @param int $term_id
         *
         * @return string
         */
        public function get_term_link($term_id)
        {
        }
    }
    /**
     * MslsOptionsTaxTerm
     *
     * @package Msls
     */
    class MslsOptionsTaxTerm extends \lloc\Msls\MslsOptionsTax
    {
        const BASE_OPTION = 'tag_base';
        const BASE_DEFINED = 'tag';
        /**
         * Rewrite with front
         *
         * @var bool
         */
        public ?bool $with_front = true;
        /**
         * Check and correct URL
         *
         * @param string             $url
         * @param MslsOptionsTaxTerm $options
         *
         * @return string
         */
        public function check_base($url, $options)
        {
        }
        protected static function get_base_defined(string $tax_query) : string
        {
        }
        protected static function get_base_option() : string
        {
        }
    }
    /**
     * MslsOptionsTaxTermCategory
     *
     * @package Msls
     */
    class MslsOptionsTaxTermCategory extends \lloc\Msls\MslsOptionsTaxTerm
    {
        /**
         * Base option
         *
         * @var string
         */
        const BASE_OPTION = 'category_base';
        /**
         * Base standard definition
         *
         * @var string
         */
        const BASE_DEFINED = 'category';
    }
    /**
     * MslsOptionsQueryPostType
     *
     * @package Msls
     */
    class MslsOptionsQueryPostType extends \lloc\Msls\MslsOptionsQuery
    {
        protected string $post_type;
        public function __construct(\lloc\Msls\MslsSqlCacher $sql_cache)
        {
        }
        public static function get_params() : array
        {
        }
        /**
         * Check if the array has a non-empty item which has $language as a key
         *
         * @param string $language
         *
         * @return bool
         */
        public function has_value(string $language) : bool
        {
        }
        /**
         * Get current link
         *
         * @return string
         */
        public function get_current_link()
        {
        }
    }
}
namespace lloc\Msls\Component {
    /**
     * Class Icon
     *
     * @package lloc\Msls\Component
     */
    abstract class Icon
    {
        /**
         * @var string[]
         */
        protected $map;
        /**
         * Icon constructor
         */
        public function __construct()
        {
        }
        /**
         * @param string $language
         * @param string $prefix
         * @param string $postfix
         *
         * @return string
         */
        protected function maybe(string $language, string $prefix = '', string $postfix = '') : string
        {
        }
        /**
         * @return string
         */
        protected abstract function get_include() : string;
        /**
         * @param string $language
         *
         * @return string
         */
        public abstract function get(string $language) : string;
    }
    /**
     * Abstract class Input
     *
     * @package lloc\Msls\Component
     */
    abstract class Component
    {
        const INPUT_PREFIX = 'msls_input_';
        const ALLOWED_HTML = array('form' => array('action' => array(), 'method' => array()), 'label' => array('for' => array()), 'option' => array('value' => array(), 'selected' => array()), 'select' => array('id' => array(), 'name' => array()), 'input' => array('type' => array(), 'class' => array(), 'id' => array(), 'name' => array(), 'value' => array(), 'size' => array(), 'readonly' => array()));
        /**
         * @return string
         */
        public abstract function render() : string;
        /**
         * Adds our input elements to the allowed HTML elements of a post
         */
        public static function get_allowed_html() : array
        {
        }
    }
}
namespace lloc\Msls\Component\Input {
    /**
     * Class Options
     *
     * @package lloc\Msls\Component\Input
     */
    final class Group extends \lloc\Msls\Component\Component
    {
        /**
         * Options constructor.
         *
         * @param string $glue
         */
        public function __construct(string $glue = ' ')
        {
        }
        /**
         * @param Component $input
         *
         * @return self
         */
        public function add(\lloc\Msls\Component\Component $input) : self
        {
        }
        /**
         * @return string
         */
        public function render() : string
        {
        }
    }
    /**
     * Class Label
     *
     * @package lloc\Msls\Component\Input
     */
    final class Label extends \lloc\Msls\Component\Component
    {
        /**
         * @param string $key
         * @param string $text
         */
        public function __construct(string $key, string $text)
        {
        }
        /**
         * @return string
         */
        public function render() : string
        {
        }
    }
    /**
     * Class Option
     *
     * @package lloc\Msls\Component\Input
     */
    final class Option extends \lloc\Msls\Component\Component
    {
        /**
         * @param string  $key
         * @param string  $value
         * @param ?string $selected
         */
        public function __construct(string $key, string $value, ?string $selected = null)
        {
        }
        /**
         * @return string
         */
        public function render() : string
        {
        }
    }
    final class Select extends \lloc\Msls\Component\Component
    {
        const RENDER_FILTER = 'msls_input_select_name';
        /**
         * @param string  $key Name and ID of the form-element
         * @param mixed[] $arr Options as associative array
         * @param ?string $selected Values which should be selected
         */
        public function __construct(string $key, array $arr, ?string $selected = null)
        {
        }
        /**
         * @return string
         */
        public function render() : string
        {
        }
    }
    /**
     * Class Checkbox
     *
     * @package lloc\Msls\Component\Input
     */
    final class Checkbox extends \lloc\Msls\Component\Component
    {
        /**
         * @param string $key
         * @param string $value
         */
        public function __construct(string $key, ?string $value)
        {
        }
        /**
         * @return string
         */
        public function render() : string
        {
        }
    }
    final class Text extends \lloc\Msls\Component\Component
    {
        const DEFAULT_SIZE = 30;
        /**
         * @param string      $key
         * @param string|null $value
         * @param int         $size
         * @param bool        $readonly
         */
        public function __construct(string $key, ?string $value, int $size = self::DEFAULT_SIZE, bool $readonly = false)
        {
        }
        /**
         * @return string
         */
        public function render() : string
        {
        }
    }
}
namespace lloc\Msls\Component {
    final class Wrapper extends \lloc\Msls\Component\Component
    {
        public function __construct(string $element, string $content)
        {
        }
        public function render() : string
        {
        }
    }
}
namespace lloc\Msls\Component\Icon {
    /**
     * Class IconPng
     *
     * @package lloc\Msls\Component
     */
    final class IconPng extends \lloc\Msls\Component\Icon
    {
        const FLAGS_FILE = 'flags/flags.php';
        /**
         * @param string $language
         *
         * @return string
         */
        public function get(string $language) : string
        {
        }
    }
    /**
     * Class IconSvg
     *
     * @package lloc\Msls\Component
     */
    final class IconSvg extends \lloc\Msls\Component\Icon
    {
        const FLAGS_FILE = 'css-flags/flags.php';
        /**
         * @param string $language
         *
         * @return string
         */
        public function get(string $language) : string
        {
        }
    }
    /**
     * Class IconLabel
     *
     * @package lloc\Msls\Component
     */
    final class IconLabel extends \lloc\Msls\Component\Icon
    {
        /**
         * @param string $language
         *
         * @return string
         */
        public function get(string $language) : string
        {
        }
    }
}
namespace lloc\Msls {
    /**
     * Post options
     *
     * @package Msls
     */
    class MslsOptionsPost extends \lloc\Msls\MslsOptions
    {
        public const SEPARATOR = '_';
        protected bool $autoload = false;
        /**
         * Get postlink
         *
         * @param string $language
         *
         * @return string
         */
        public function get_postlink($language)
        {
        }
        /**
         * Get current link
         *
         * @return string
         */
        public function get_current_link() : string
        {
        }
    }
    /**
     * Handles the icon links in the backend
     *
     * @package Msls
     */
    class MslsAdminIcon
    {
        /**
         * @var string
         */
        protected $icon_type = 'action';
        /**
         * @var string
         */
        protected $language;
        /**
         * @var string
         */
        public $origin_language;
        /**
         * @var string
         */
        protected $src;
        /**
         * @var string
         */
        protected $href;
        /**
         * @var int
         */
        protected $blog_id;
        /**
         * @var string
         */
        protected $type;
        /**
         * @var string
         */
        protected $path = 'post-new.php';
        /**
         * The current object ID
         *
         * @var int
         */
        protected $id;
        const TYPE_FLAG = 'flag';
        const TYPE_LABEL = 'label';
        /**
         * Constructor
         *
         * @param string $type
         */
        public function __construct(?string $type = null)
        {
        }
        /**
         * @return string
         */
        public function __toString()
        {
        }
        /**
         * @param ?string $type
         *
         * @return MslsAdminIcon|MslsAdminIconTaxonomy
         */
        public static function create(?string $type = null)
        {
        }
        /**
         * Set the icon path
         *
         * @param string $icon_type
         *
         * @return MslsAdminIcon
         */
        public function set_icon_type(string $icon_type) : \lloc\Msls\MslsAdminIcon
        {
        }
        /**
         * Set the path by type
         *
         * @return MslsAdminIcon
         */
        public function set_path() : \lloc\Msls\MslsAdminIcon
        {
        }
        /**
         * Set language
         *
         * @param string $language
         *
         * @return MslsAdminIcon
         */
        public function set_language(string $language) : \lloc\Msls\MslsAdminIcon
        {
        }
        /**
         * Set src
         *
         * @param string $src
         *
         * @return MslsAdminIcon
         */
        public function set_src(string $src) : \lloc\Msls\MslsAdminIcon
        {
        }
        /**
         * Set href
         *
         * @param int $id
         *
         * @return MslsAdminIcon
         */
        public function set_href(int $id) : \lloc\Msls\MslsAdminIcon
        {
        }
        /**
         * Sets the id of the object this icon is for
         *
         * @param int $id
         *
         * @return MslsAdminIcon
         */
        public function set_id(int $id) : \lloc\Msls\MslsAdminIcon
        {
        }
        /**
         * Sets the origin language for this icon
         *
         * @param string $origin_language
         *
         * @return MslsAdminIcon
         */
        public function set_origin_language(string $origin_language) : \lloc\Msls\MslsAdminIcon
        {
        }
        /**
         * Get image as html-tag
         *
         * @return string
         */
        public function get_img() : string
        {
        }
        /**
         * Get link as html-tag
         *
         * @return string
         */
        public function get_a() : string
        {
        }
        /**
         * Get icon as html-tag
         *
         * @return string
         */
        public function get_icon() : string
        {
        }
        /**
         * Creates new admin link
         *
         * @return string
         */
        public function get_edit_new() : string
        {
        }
    }
    /**
     * MslsOptionsQueryDay
     *
     * @package Msls
     */
    class MslsOptionsQueryDay extends \lloc\Msls\MslsOptionsQuery
    {
        protected int $year;
        protected int $monthnum;
        protected int $day;
        public function __construct(\lloc\Msls\MslsSqlCacher $sql_cache)
        {
        }
        public static function get_params() : array
        {
        }
        /**
         * Check if the array has a non-empty item which has $language as a key
         *
         * @param string $language
         *
         * @return bool
         */
        public function has_value(string $language) : bool
        {
        }
        /**
         * Get current link
         *
         * @return string
         */
        public function get_current_link()
        {
        }
    }
    /**
     * Registry instead of singletons
     *
     * @package Msls
     */
    class MslsRegistry
    {
        /**
         * Registry is a singleton
         *
         * @return MslsRegistry
         */
        public static function instance() : self
        {
        }
        /**
         * Static get_object calls get
         *
         * @param string $key
         *
         * @return mixed
         */
        public static function get_object($key)
        {
        }
        /**
         * Static set_object calls set
         *
         * @param string $key
         * @param mixed  $instance
         */
        public static function set_object(string $key, $instance) : void
        {
        }
    }
}
namespace lloc\Msls\Map {
    /**
     * Class HrefLang
     *
     * @package lloc\Msls\Map
     */
    class HrefLang
    {
        /**
         * @var array<string, string>
         */
        protected $map = array();
        /**
         * @param MslsBlogCollection $blogs
         */
        public function __construct(\lloc\Msls\MslsBlogCollection $blogs)
        {
        }
        /**
         * @param string $language
         *
         * @return string
         */
        protected function get_hreflang(string $language) : string
        {
        }
        /**
         * @param string $language
         *
         * @return string
         */
        public function get(string $language) : string
        {
        }
    }
}
namespace lloc\Msls {
    class MslsShortCode
    {
        public static function init() : void
        {
        }
        /**
         * Renders output using the widget's output
         *
         * @return string|false
         */
        public static function render_widget()
        {
        }
    }
    /**
     * Wrapper to avoid direct SQL without caching
     *
     * @example https://gist.githubusercontent.com/lloc/2c232cef3f910acf692f/raw/91e5fe9ada922a82a32b83eaabad1e2a2ee50338/MslsSqlCacher.php
     *
     * @method mixed get_var( string $sql )
     * @method array get_results( string $sql )
     * @method string prepare( string $sql, mixed $a, $b = '', $c = '' )
     * @method mixed query( string $sql )
     * @property string $posts
     * @property string $options
     * @property string $blogs
     * @property int $blogid
     * @property int $siteid
     *
     * @package Msls
     */
    class MslsSqlCacher
    {
        /**
         * Cache group
         */
        const CACHE_GROUP = 'msls-cache-group';
        /**
         * Database object
         */
        protected \wpdb $db;
        /**
         * Key for the cached result-set
         */
        protected string $cache_key;
        /**
         * Expiration time for the cache in seconds
         */
        protected int $expire;
        /**
         * Constructor
         */
        public function __construct(\wpdb $db, string $cache_key, int $expire = 0)
        {
        }
        /**
         * Factory
         *
         * @param string $caller
         * @param mixed  $params
         * @param int    $expire
         */
        public static function create(string $caller, $params, int $expire = 0) : self
        {
        }
        /**
         * Magic __get
         *
         * @return mixed
         */
        public function __get(string $name)
        {
        }
        /**
         * Call a method of the db-object with the needed args and cache the result
         *
         * @param string            $method
         * @param array<int|string> $args
         *
         * @return mixed
         */
        public function __call(string $method, array $args)
        {
        }
    }
    /**
     * OptionsQueryYear
     *
     * @package Msls
     */
    class MslsOptionsQueryYear extends \lloc\Msls\MslsOptionsQuery
    {
        protected int $year;
        public function __construct(\lloc\Msls\MslsSqlCacher $sql_cache)
        {
        }
        public static function get_params() : array
        {
        }
        /**
         * Check if the array has a non-empty item which has $language as a key
         *
         * @param string $language
         *
         * @return bool
         */
        public function has_value(string $language) : bool
        {
        }
        /**
         * Get current link
         *
         * @return string
         */
        public function get_current_link() : string
        {
        }
    }
    class MslsFields
    {
        const FIELD_BLOG_ID = 'blog_id';
        const FIELD_POST_TYPE = 'post_type';
        const FIELD_TAXONOMY = 'taxonomy';
        const FIELD_S = 's';
        const FIELD_ACTION = 'action';
        const FIELD_MSLS_FILTER = 'msls_filter';
        const FIELD_MSLS_NONCENAME = 'msls_noncename';
        const FIELD_MSLS_ID = 'msls_id';
        const FIELD_MSLS_LANG = 'msls_lang';
        const FIELD_MSLS_IMPORT = 'msls_import';
        const FIELD_POST = 'post';
        const CONFIG = array(self::FIELD_BLOG_ID => array(INPUT_POST, FILTER_SANITIZE_NUMBER_INT), self::FIELD_POST_TYPE => array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS), self::FIELD_TAXONOMY => array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS), self::FIELD_S => array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS), self::FIELD_ACTION => array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS), self::FIELD_MSLS_FILTER => array(INPUT_GET, FILTER_SANITIZE_NUMBER_INT), self::FIELD_MSLS_NONCENAME => array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS), self::FIELD_MSLS_ID => array(INPUT_GET, FILTER_SANITIZE_NUMBER_INT), self::FIELD_MSLS_LANG => array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS), self::FIELD_MSLS_IMPORT => array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS), self::FIELD_POST => array(INPUT_GET, FILTER_SANITIZE_NUMBER_INT));
    }
    /**
     * Provides functionalities for general hooks and activation/deactivation
     *
     * @package Msls
     */
    class MslsPlugin
    {
        /**
         * Injected MslsOptions object
         *
         * @var MslsOptions
         */
        protected $options;
        /**
         * MslsPlugin constructor.
         *
         * @param MslsOptions $options
         */
        public function __construct(\lloc\Msls\MslsOptions $options)
        {
        }
        /**
         * @codeCoverageIgnore
         */
        public static function init() : void
        {
        }
        public static function print_alternate_links() : void
        {
        }
        /**
         * Loads styles and some js if needed
         */
        public function custom_enqueue() : void
        {
        }
        /**
         * Wrapper for plugins_url
         *
         * @param string $path
         *
         * @return string
         */
        public static function plugins_url(string $path) : string
        {
        }
        /**
         * Wrapper for plugin_dir_path
         *
         * @param string $path
         *
         * @return string
         */
        public static function plugin_dir_path(string $path) : string
        {
        }
        /**
         * @param string $path
         *
         * @return string
         */
        public static function dirname(string $path) : string
        {
        }
        /**
         * @return string
         */
        public static function file() : string
        {
        }
        /**
         * @return string
         */
        public static function path() : string
        {
        }
        /**
         * Load textdomain
         *
         * The method should be executed always on init because we have some translatable string in the frontend too.
         */
        public function init_i18n_support() : void
        {
        }
        /**
         * Message handler
         *
         * Prints a message box to the screen.
         *
         * @param string $message
         * @param string $css_class
         *
         * @return boolean
         */
        public static function message_handler($message, $css_class = 'error')
        {
        }
        /**
         * Activate plugin
         */
        public static function activate() : void
        {
        }
        /**
         * Uninstall plugin
         *
         * The plugin data in all blogs of the current network will be
         * deleted after the uninstall procedure.
         *
         * @return boolean
         */
        public static function uninstall()
        {
        }
        /**
         * Cleanup the options
         *
         * Removes all values of the current blogs which are stored in the
         * options-table and returns true if it was successful.
         *
         * @return boolean
         */
        public static function cleanup()
        {
        }
    }
    class MslsContentFilter
    {
        protected \lloc\Msls\MslsOptions $options;
        public function __construct(\lloc\Msls\MslsOptions $options)
        {
        }
        public static function init() : void
        {
        }
        /**
         * @param string $content
         *
         * @return string
         */
        public function content_filter(string $content)
        {
        }
        /**
         * Create filter-string for msls_content_filter()
         *
         * @param string $pref
         * @param string $post
         *
         * @return string
         */
        public function filter_string($pref = '<p id="msls">', $post = '</p>')
        {
        }
        /**
         * @param string[] $links
         * @return string|null
         */
        public function format_available_languages(array $links) : ?string
        {
        }
    }
    /**
     * Collection of blog-objects
     *
     * @package Msls
     */
    class MslsBlogCollection extends \lloc\Msls\MslsRegistryInstance
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Returns the description of a configured blog or false if it is not configured
         *
         * @param int         $blog_id
         * @param string|bool $description
         *
         * @return string|bool
         */
        public static function get_configured_blog_description(int $blog_id, $description = false)
        {
        }
        /**
         * Gets the list of the blogs of the reference user
         * The first available user of the blog will be used if there is no
         * refrence user configured
         *
         * @param MslsOptions $options
         *
         * @return object[]|\stdClass[]
         */
        public function get_blogs_of_reference_user(\lloc\Msls\MslsOptions $options)
        {
        }
        /**
         * Get blog by language
         *
         * @param string $language
         *
         * @return MslsBlog|null
         */
        public function get_blog($language)
        {
        }
        /**
         * Gets blog_id by language
         *
         * @param string $language
         *
         * @return ?int
         */
        public function get_blog_id(string $language) : ?int
        {
        }
        /**
         * Get the id of the current blog
         *
         * @return int
         */
        public function get_current_blog_id()
        {
        }
        /**
         * Checks if blog is the current blog
         *
         * @param MslsBlog $blog
         *
         * @return bool
         */
        public function is_current_blog(\lloc\Msls\MslsBlog $blog)
        {
        }
        /**
         * Checks if current blog is in the collection
         *
         * @return bool
         */
        public function has_current_blog()
        {
        }
        /**
         * Gets current blog as object
         *
         * @return MslsBlog|null
         */
        public function get_current_blog()
        {
        }
        /**
         * Gets an array with all blog-objects
         *
         * @return MslsBlog[]
         */
        public function get_objects() : array
        {
        }
        /**
         * Gets a specific blog-object
         *
         * @param int $blog_id
         *
         * @return ?MslsBlog
         */
        public function get_object(int $blog_id) : ?\lloc\Msls\MslsBlog
        {
        }
        /**
         * Is plugin active in the blog with that blog_id
         *
         * @param int $blog_id
         *
         * @return bool
         */
        public function is_plugin_active($blog_id)
        {
        }
        /**
         * Gets only blogs where the plugin is active
         *
         * @return MslsBlog[]
         */
        public function get_plugin_active_blogs()
        {
        }
        /**
         * Gets an array of all - but not the current - blog-objects
         *
         * @return MslsBlog[]
         */
        public function get()
        {
        }
        /**
         * Gets an array with filtered blog-objects
         *
         * @param bool $filter
         *
         * @return MslsBlog[]
         */
        public function get_filtered(bool $filter = false) : array
        {
        }
        /**
         * Gets the registered users of the current blog
         *
         * @param string     $fields
         * @param int|string $number
         *
         * @return array<string, int>
         */
        public function get_users($fields = 'all', $number = '')
        {
        }
        /**
         * Returns a specific blog language.
         *
         * @param int    $blog_id
         * @param string $default
         *
         * @return string
         */
        public static function get_blog_language($blog_id = null, $default = 'en_US')
        {
        }
    }
    class MslsRequest
    {
        /**
         * @return array<int, int>
         */
        public static function get_config(string $name) : array
        {
        }
        public static function has_var(string $name, ?int $input_type = null) : bool
        {
        }
        /**
         * @return mixed
         */
        public static function get_var(string $name, ?int $input_type = null)
        {
        }
        /**
         * @param string $name
         * @param mixed  $default
         *
         * @return mixed
         */
        public static function get(string $name, $default)
        {
        }
        /**
         * @param string[] $keys
         *
         * @return bool
         */
        public static function isset(array $keys) : bool
        {
        }
        /**
         * Gets the request values for a list of keys.
         *
         * It will treat each key as a string and will return an array with every key as index and the value as a sanitized string.
         *
         * @param string[] $keys
         * @param mixed    $default
         *
         * @return array<string, mixed>
         */
        public static function get_request(array $keys, $default = '') : array
        {
        }
    }
}
namespace lloc\Msls\Query {
    /**
     * AbstractQuery
     *
     * @package Msls
     */
    abstract class AbstractQuery
    {
        protected \lloc\Msls\MslsSqlCacher $sql_cache;
        public function __construct(\lloc\Msls\MslsSqlCacher $sql_cache)
        {
        }
    }
    class YearPostsCounterQuery extends \lloc\Msls\Query\AbstractQuery
    {
        public function __invoke(int $year) : int
        {
        }
    }
    /**
     * Cleans up options
     *
     * @package Msls
     */
    class CleanupOptionsQuery extends \lloc\Msls\Query\AbstractQuery
    {
        public function __invoke() : bool
        {
        }
    }
    /**
     * Gets the number of published posts by an author
     *
     * @package Msls
     */
    class AuthorPostsCounterQuery extends \lloc\Msls\Query\AbstractQuery
    {
        public function __invoke(int $author_id) : int
        {
        }
    }
    /**
     * Gets the posts_ids of posts that have been translated to a specific language
     *
     * @package Msls
     */
    class TranslatedPostIdQuery extends \lloc\Msls\Query\AbstractQuery
    {
        /**
         * @return int[]
         */
        public function __invoke(string $language) : array
        {
        }
    }
    /**
     * Gets the number of published posts by a month
     *
     * @package Msls
     */
    class MonthPostsCounterQuery extends \lloc\Msls\Query\AbstractQuery
    {
        public function __invoke(int $year, int $monthnum) : int
        {
        }
    }
    /**
     * Gets the blog_ids of blogs in the network
     *
     * @package Msls
     */
    class BlogsInNetworkQuery extends \lloc\Msls\Query\AbstractQuery
    {
        /**
         * @return int[]
         */
        public function __invoke() : array
        {
        }
    }
    /**
     * Gets the number of published posts by a date
     *
     * @package Msls
     */
    class DatePostsCounterQuery extends \lloc\Msls\Query\AbstractQuery
    {
        public function __invoke(int $year, int $monthnum, int $day) : int
        {
        }
    }
}
namespace lloc\Msls {
    class MslsAdminBar
    {
        protected string $icon_type;
        protected \lloc\Msls\MslsBlogCollection $blog_collection;
        public function __construct(\lloc\Msls\MslsOptions $options, \lloc\Msls\MslsBlogCollection $blog_collection)
        {
        }
        public static function init() : void
        {
        }
        /**
         * Callback that updates the admin bar with the blog information
         */
        public function update_admin_bar(\WP_Admin_Bar $wp_admin_bar) : void
        {
        }
        /**
         * Adds node information to an existing node
         */
        public function add_node(\WP_Admin_Bar $wp_admin_bar, string $node_id, string $title) : bool
        {
        }
        /**
         * Gets a title with label orflag (depending on the settings) for the blog
         *
         * It uses a blavatar icon as prefix if $blavatar is set to true
         */
        protected function get_title(?\lloc\Msls\MslsBlog $blog, bool $blavatar = false) : ?string
        {
        }
    }
    /**
     * Container for an array which will used in JavaScript as object in JSON
     *
     * @example https://gist.githubusercontent.com/lloc/2c232cef3f910acf692f/raw/1c4f62e1de57ca48f19c37e3a63e7dc311b76b2f/MslsJson.php
     * @package Msls
     */
    class MslsJson
    {
        /**
         * @var array<int, array<string, string|int>>
         */
        protected array $arr = array();
        /** MslsLanguageArray
         * Adds a value label pair to the internal class container
         *
         * @param mixed $value
         * @param mixed $label
         *
         * @return MslsJson
         */
        public function add($value, $label)
        {
        }
        /**
         * Compare the item with the key "label" of the array $a and the array $b
         *
         * @param array<string, string> $a
         * @param array<string, string> $b
         *
         * @return int
         */
        public static function compare(array $a, array $b)
        {
        }
        /**
         * Get the array container sorted by label
         *
         * @return array<int, array<string, string|int>>
         */
        public function get() : array
        {
        }
        /**
         * Encodes object and returns it as a json-string
         *
         * @return string
         */
        public function encode() : string
        {
        }
        /**
         * Return the encoded object as a string using the encode-method
         *
         * @return string
         */
        public function __toString()
        {
        }
    }
    /**
     * MslsOptionsQueryAuthor
     *
     * @package Msls
     */
    class MslsOptionsQueryAuthor extends \lloc\Msls\MslsOptionsQuery
    {
        protected int $author_id;
        public function __construct(\lloc\Msls\MslsSqlCacher $sql_cache)
        {
        }
        /**
         * @return array<string, mixed>
         */
        public static function get_params() : array
        {
        }
        /**
         * Check if the array has a non-empty item which has $language as a key
         *
         * @param string $language
         *
         * @return bool
         */
        public function has_value(string $language) : bool
        {
        }
        /**
         * Get current link
         *
         * @return string
         */
        public function get_current_link()
        {
        }
    }
    /**
     * Link type: Text only
     *
     * @package Msls
     */
    class MslsLinkTextOnly extends \lloc\Msls\MslsLink
    {
        /**
         * Output format
         *
         * @var string
         */
        protected $format_string = '{txt}';
        /**
         * Get the description
         *
         * @return string
         */
        public static function get_description() : string
        {
        }
    }
    /**
     * Handles backend icons for taxonomies
     *
     * @package Msls
     */
    class MslsAdminIconTaxonomy extends \lloc\Msls\MslsAdminIcon
    {
        /**
         * Path
         *
         * @var string
         */
        protected $path = 'edit-tags.php';
        /**
         * Set href
         *
         * @param int $id
         *
         * @return MslsAdminIconTaxonomy
         * @uses get_edit_term_link()
         */
        public function set_href(int $id) : \lloc\Msls\MslsAdminIcon
        {
        }
        /**
         * Set the path by type
         *
         * @return MslsAdminIconTaxonomy
         */
        public function set_path() : \lloc\Msls\MslsAdminIcon
        {
        }
    }
}
namespace Composer\Autoload {
    class ComposerStaticInitb295695c4a8023a1a8ebe511195598c1
    {
        public static $prefixLengthsPsr4 = array('l' => array('lloc\\Msls\\' => 10), 'C' => array('Composer\\Installers\\' => 20));
        public static $prefixDirsPsr4 = array('lloc\\Msls\\' => array(0 => __DIR__ . '/../..' . '/includes'), 'Composer\\Installers\\' => array(0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers'));
        public static $classMap = array('Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php', 'Composer\\Installers\\AglInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/AglInstaller.php', 'Composer\\Installers\\AkauntingInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/AkauntingInstaller.php', 'Composer\\Installers\\AnnotateCmsInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/AnnotateCmsInstaller.php', 'Composer\\Installers\\AsgardInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/AsgardInstaller.php', 'Composer\\Installers\\AttogramInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/AttogramInstaller.php', 'Composer\\Installers\\BaseInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/BaseInstaller.php', 'Composer\\Installers\\BitrixInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/BitrixInstaller.php', 'Composer\\Installers\\BonefishInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/BonefishInstaller.php', 'Composer\\Installers\\BotbleInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/BotbleInstaller.php', 'Composer\\Installers\\CakePHPInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/CakePHPInstaller.php', 'Composer\\Installers\\ChefInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ChefInstaller.php', 'Composer\\Installers\\CiviCrmInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/CiviCrmInstaller.php', 'Composer\\Installers\\ClanCatsFrameworkInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ClanCatsFrameworkInstaller.php', 'Composer\\Installers\\CockpitInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/CockpitInstaller.php', 'Composer\\Installers\\CodeIgniterInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/CodeIgniterInstaller.php', 'Composer\\Installers\\Concrete5Installer' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/Concrete5Installer.php', 'Composer\\Installers\\ConcreteCMSInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ConcreteCMSInstaller.php', 'Composer\\Installers\\CroogoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/CroogoInstaller.php', 'Composer\\Installers\\DecibelInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/DecibelInstaller.php', 'Composer\\Installers\\DframeInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/DframeInstaller.php', 'Composer\\Installers\\DokuWikiInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/DokuWikiInstaller.php', 'Composer\\Installers\\DolibarrInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/DolibarrInstaller.php', 'Composer\\Installers\\DrupalInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/DrupalInstaller.php', 'Composer\\Installers\\ElggInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ElggInstaller.php', 'Composer\\Installers\\EliasisInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/EliasisInstaller.php', 'Composer\\Installers\\ExpressionEngineInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ExpressionEngineInstaller.php', 'Composer\\Installers\\EzPlatformInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/EzPlatformInstaller.php', 'Composer\\Installers\\ForkCMSInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ForkCMSInstaller.php', 'Composer\\Installers\\FuelInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/FuelInstaller.php', 'Composer\\Installers\\FuelphpInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/FuelphpInstaller.php', 'Composer\\Installers\\GravInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/GravInstaller.php', 'Composer\\Installers\\HuradInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/HuradInstaller.php', 'Composer\\Installers\\ImageCMSInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ImageCMSInstaller.php', 'Composer\\Installers\\Installer' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/Installer.php', 'Composer\\Installers\\ItopInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ItopInstaller.php', 'Composer\\Installers\\KanboardInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/KanboardInstaller.php', 'Composer\\Installers\\KnownInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/KnownInstaller.php', 'Composer\\Installers\\KodiCMSInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/KodiCMSInstaller.php', 'Composer\\Installers\\KohanaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/KohanaInstaller.php', 'Composer\\Installers\\LanManagementSystemInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/LanManagementSystemInstaller.php', 'Composer\\Installers\\LaravelInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/LaravelInstaller.php', 'Composer\\Installers\\LavaLiteInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/LavaLiteInstaller.php', 'Composer\\Installers\\LithiumInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/LithiumInstaller.php', 'Composer\\Installers\\MODULEWorkInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MODULEWorkInstaller.php', 'Composer\\Installers\\MODXEvoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MODXEvoInstaller.php', 'Composer\\Installers\\MagentoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MagentoInstaller.php', 'Composer\\Installers\\MajimaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MajimaInstaller.php', 'Composer\\Installers\\MakoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MakoInstaller.php', 'Composer\\Installers\\MantisBTInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MantisBTInstaller.php', 'Composer\\Installers\\MatomoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MatomoInstaller.php', 'Composer\\Installers\\MauticInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MauticInstaller.php', 'Composer\\Installers\\MayaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MayaInstaller.php', 'Composer\\Installers\\MediaWikiInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MediaWikiInstaller.php', 'Composer\\Installers\\MiaoxingInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MiaoxingInstaller.php', 'Composer\\Installers\\MicroweberInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MicroweberInstaller.php', 'Composer\\Installers\\ModxInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ModxInstaller.php', 'Composer\\Installers\\MoodleInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MoodleInstaller.php', 'Composer\\Installers\\OctoberInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/OctoberInstaller.php', 'Composer\\Installers\\OntoWikiInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/OntoWikiInstaller.php', 'Composer\\Installers\\OsclassInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/OsclassInstaller.php', 'Composer\\Installers\\OxidInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/OxidInstaller.php', 'Composer\\Installers\\PPIInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PPIInstaller.php', 'Composer\\Installers\\PantheonInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PantheonInstaller.php', 'Composer\\Installers\\PhiftyInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PhiftyInstaller.php', 'Composer\\Installers\\PhpBBInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PhpBBInstaller.php', 'Composer\\Installers\\PiwikInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PiwikInstaller.php', 'Composer\\Installers\\PlentymarketsInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PlentymarketsInstaller.php', 'Composer\\Installers\\Plugin' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/Plugin.php', 'Composer\\Installers\\PortoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PortoInstaller.php', 'Composer\\Installers\\PrestashopInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PrestashopInstaller.php', 'Composer\\Installers\\ProcessWireInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ProcessWireInstaller.php', 'Composer\\Installers\\PuppetInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PuppetInstaller.php', 'Composer\\Installers\\PxcmsInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PxcmsInstaller.php', 'Composer\\Installers\\RadPHPInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/RadPHPInstaller.php', 'Composer\\Installers\\ReIndexInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ReIndexInstaller.php', 'Composer\\Installers\\Redaxo5Installer' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/Redaxo5Installer.php', 'Composer\\Installers\\RedaxoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/RedaxoInstaller.php', 'Composer\\Installers\\RoundcubeInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/RoundcubeInstaller.php', 'Composer\\Installers\\SMFInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/SMFInstaller.php', 'Composer\\Installers\\ShopwareInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ShopwareInstaller.php', 'Composer\\Installers\\SilverStripeInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/SilverStripeInstaller.php', 'Composer\\Installers\\SiteDirectInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/SiteDirectInstaller.php', 'Composer\\Installers\\StarbugInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/StarbugInstaller.php', 'Composer\\Installers\\SyDESInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/SyDESInstaller.php', 'Composer\\Installers\\SyliusInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/SyliusInstaller.php', 'Composer\\Installers\\TaoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/TaoInstaller.php', 'Composer\\Installers\\TastyIgniterInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/TastyIgniterInstaller.php', 'Composer\\Installers\\TheliaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/TheliaInstaller.php', 'Composer\\Installers\\TuskInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/TuskInstaller.php', 'Composer\\Installers\\UserFrostingInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/UserFrostingInstaller.php', 'Composer\\Installers\\VanillaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/VanillaInstaller.php', 'Composer\\Installers\\VgmcpInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/VgmcpInstaller.php', 'Composer\\Installers\\WHMCSInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/WHMCSInstaller.php', 'Composer\\Installers\\WinterInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/WinterInstaller.php', 'Composer\\Installers\\WolfCMSInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/WolfCMSInstaller.php', 'Composer\\Installers\\WordPressInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/WordPressInstaller.php', 'Composer\\Installers\\YawikInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/YawikInstaller.php', 'Composer\\Installers\\ZendInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ZendInstaller.php', 'Composer\\Installers\\ZikulaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ZikulaInstaller.php', 'lloc\\Msls\\Component\\Component' => __DIR__ . '/../..' . '/includes/Component/Component.php', 'lloc\\Msls\\Component\\Icon' => __DIR__ . '/../..' . '/includes/Component/Icon.php', 'lloc\\Msls\\Component\\Icon\\IconLabel' => __DIR__ . '/../..' . '/includes/Component/Icon/IconLabel.php', 'lloc\\Msls\\Component\\Icon\\IconPng' => __DIR__ . '/../..' . '/includes/Component/Icon/IconPng.php', 'lloc\\Msls\\Component\\Icon\\IconSvg' => __DIR__ . '/../..' . '/includes/Component/Icon/IconSvg.php', 'lloc\\Msls\\Component\\Input\\Checkbox' => __DIR__ . '/../..' . '/includes/Component/Input/Checkbox.php', 'lloc\\Msls\\Component\\Input\\Group' => __DIR__ . '/../..' . '/includes/Component/Input/Group.php', 'lloc\\Msls\\Component\\Input\\Label' => __DIR__ . '/../..' . '/includes/Component/Input/Label.php', 'lloc\\Msls\\Component\\Input\\Option' => __DIR__ . '/../..' . '/includes/Component/Input/Option.php', 'lloc\\Msls\\Component\\Input\\Select' => __DIR__ . '/../..' . '/includes/Component/Input/Select.php', 'lloc\\Msls\\Component\\Input\\Text' => __DIR__ . '/../..' . '/includes/Component/Input/Text.php', 'lloc\\Msls\\Component\\Wrapper' => __DIR__ . '/../..' . '/includes/Component/Wrapper.php', 'lloc\\Msls\\ContentImport\\AttachmentPathFinder' => __DIR__ . '/../..' . '/includes/ContentImport/AttachmentPathFinder.php', 'lloc\\Msls\\ContentImport\\ContentImporter' => __DIR__ . '/../..' . '/includes/ContentImport/ContentImporter.php', 'lloc\\Msls\\ContentImport\\ImportCoordinates' => __DIR__ . '/../..' . '/includes/ContentImport/ImportCoordinates.php', 'lloc\\Msls\\ContentImport\\ImportLogger' => __DIR__ . '/../..' . '/includes/ContentImport/ImportLogger.php', 'lloc\\Msls\\ContentImport\\Importers\\AttachmentsImporters' => __DIR__ . '/../..' . '/includes/ContentImport/Importers/AttachmentsImporters.php', 'lloc\\Msls\\ContentImport\\Importers\\Attachments\\Linking' => __DIR__ . '/../..' . '/includes/ContentImport/Importers/Attachments/Linking.php', 'lloc\\Msls\\ContentImport\\Importers\\BaseImporter' => __DIR__ . '/../..' . '/includes/ContentImport/Importers/BaseImporter.php', 'lloc\\Msls\\ContentImport\\Importers\\Importer' => __DIR__ . '/../..' . '/includes/ContentImport/Importers/Importer.php', 'lloc\\Msls\\ContentImport\\Importers\\ImportersBaseFactory' => __DIR__ . '/../..' . '/includes/ContentImport/Importers/ImportersBaseFactory.php', 'lloc\\Msls\\ContentImport\\Importers\\ImportersFactory' => __DIR__ . '/../..' . '/includes/ContentImport/Importers/ImportersFactory.php', 'lloc\\Msls\\ContentImport\\Importers\\Map' => __DIR__ . '/../..' . '/includes/ContentImport/Importers/Map.php', 'lloc\\Msls\\ContentImport\\Importers\\PostFieldsImporters' => __DIR__ . '/../..' . '/includes/ContentImport/Importers/PostFieldsImporters.php', 'lloc\\Msls\\ContentImport\\Importers\\PostFields\\Duplicating' => __DIR__ . '/../..' . '/includes/ContentImport/Importers/PostFields/Duplicating.php', 'lloc\\Msls\\ContentImport\\Importers\\PostMetaImporters' => __DIR__ . '/../..' . '/includes/ContentImport/Importers/PostMetaImporters.php', 'lloc\\Msls\\ContentImport\\Importers\\PostMeta\\Duplicating' => __DIR__ . '/../..' . '/includes/ContentImport/Importers/PostMeta/Duplicating.php', 'lloc\\Msls\\ContentImport\\Importers\\PostThumbnailImporters' => __DIR__ . '/../..' . '/includes/ContentImport/Importers/PostThumbnailImporters.php', 'lloc\\Msls\\ContentImport\\Importers\\PostThumbnail\\Linking' => __DIR__ . '/../..' . '/includes/ContentImport/Importers/PostThumbnail/Linking.php', 'lloc\\Msls\\ContentImport\\Importers\\TermsImporters' => __DIR__ . '/../..' . '/includes/ContentImport/Importers/TermsImporters.php', 'lloc\\Msls\\ContentImport\\Importers\\Terms\\ShallowDuplicating' => __DIR__ . '/../..' . '/includes/ContentImport/Importers/Terms/ShallowDuplicating.php', 'lloc\\Msls\\ContentImport\\Importers\\WithRequestPostAttributes' => __DIR__ . '/../..' . '/includes/ContentImport/Importers/WithRequestPostAttributes.php', 'lloc\\Msls\\ContentImport\\LogWriters\\AdminNoticeLogger' => __DIR__ . '/../..' . '/includes/ContentImport/LogWriters/AdminNoticeLogger.php', 'lloc\\Msls\\ContentImport\\LogWriters\\LogWriter' => __DIR__ . '/../..' . '/includes/ContentImport/LogWriters/LogWriter.php', 'lloc\\Msls\\ContentImport\\MetaBox' => __DIR__ . '/../..' . '/includes/ContentImport/MetaBox.php', 'lloc\\Msls\\ContentImport\\Relations' => __DIR__ . '/../..' . '/includes/ContentImport/Relations.php', 'lloc\\Msls\\ContentImport\\Service' => __DIR__ . '/../..' . '/includes/ContentImport/Service.php', 'lloc\\Msls\\Map\\HrefLang' => __DIR__ . '/../..' . '/includes/Map/HrefLang.php', 'lloc\\Msls\\MslsAdmin' => __DIR__ . '/../..' . '/includes/MslsAdmin.php', 'lloc\\Msls\\MslsAdminBar' => __DIR__ . '/../..' . '/includes/MslsAdminBar.php', 'lloc\\Msls\\MslsAdminIcon' => __DIR__ . '/../..' . '/includes/MslsAdminIcon.php', 'lloc\\Msls\\MslsAdminIconTaxonomy' => __DIR__ . '/../..' . '/includes/MslsAdminIconTaxonomy.php', 'lloc\\Msls\\MslsBlock' => __DIR__ . '/../..' . '/includes/MslsBlock.php', 'lloc\\Msls\\MslsBlog' => __DIR__ . '/../..' . '/includes/MslsBlog.php', 'lloc\\Msls\\MslsBlogCollection' => __DIR__ . '/../..' . '/includes/MslsBlogCollection.php', 'lloc\\Msls\\MslsContentFilter' => __DIR__ . '/../..' . '/includes/MslsContentFilter.php', 'lloc\\Msls\\MslsContentTypes' => __DIR__ . '/../..' . '/includes/MslsContentTypes.php', 'lloc\\Msls\\MslsCustomColumn' => __DIR__ . '/../..' . '/includes/MslsCustomColumn.php', 'lloc\\Msls\\MslsCustomColumnTaxonomy' => __DIR__ . '/../..' . '/includes/MslsCustomColumnTaxonomy.php', 'lloc\\Msls\\MslsCustomFilter' => __DIR__ . '/../..' . '/includes/MslsCustomFilter.php', 'lloc\\Msls\\MslsFields' => __DIR__ . '/../..' . '/includes/MslsFields.php', 'lloc\\Msls\\MslsGetSet' => __DIR__ . '/../..' . '/includes/MslsGetSet.php', 'lloc\\Msls\\MslsJson' => __DIR__ . '/../..' . '/includes/MslsJson.php', 'lloc\\Msls\\MslsLanguageArray' => __DIR__ . '/../..' . '/includes/MslsLanguageArray.php', 'lloc\\Msls\\MslsLink' => __DIR__ . '/../..' . '/includes/MslsLink.php', 'lloc\\Msls\\MslsLinkImageOnly' => __DIR__ . '/../..' . '/includes/MslsLinkImageOnly.php', 'lloc\\Msls\\MslsLinkTextImage' => __DIR__ . '/../..' . '/includes/MslsLinkTextImage.php', 'lloc\\Msls\\MslsLinkTextOnly' => __DIR__ . '/../..' . '/includes/MslsLinkTextOnly.php', 'lloc\\Msls\\MslsMain' => __DIR__ . '/../..' . '/includes/MslsMain.php', 'lloc\\Msls\\MslsMetaBox' => __DIR__ . '/../..' . '/includes/MslsMetaBox.php', 'lloc\\Msls\\MslsOptions' => __DIR__ . '/../..' . '/includes/MslsOptions.php', 'lloc\\Msls\\MslsOptionsPost' => __DIR__ . '/../..' . '/includes/MslsOptionsPost.php', 'lloc\\Msls\\MslsOptionsQuery' => __DIR__ . '/../..' . '/includes/MslsOptionsQuery.php', 'lloc\\Msls\\MslsOptionsQueryAuthor' => __DIR__ . '/../..' . '/includes/MslsOptionsQueryAuthor.php', 'lloc\\Msls\\MslsOptionsQueryDay' => __DIR__ . '/../..' . '/includes/MslsOptionsQueryDay.php', 'lloc\\Msls\\MslsOptionsQueryMonth' => __DIR__ . '/../..' . '/includes/MslsOptionsQueryMonth.php', 'lloc\\Msls\\MslsOptionsQueryPostType' => __DIR__ . '/../..' . '/includes/MslsOptionsQueryPostType.php', 'lloc\\Msls\\MslsOptionsQueryYear' => __DIR__ . '/../..' . '/includes/MslsOptionsQueryYear.php', 'lloc\\Msls\\MslsOptionsTax' => __DIR__ . '/../..' . '/includes/MslsOptionsTax.php', 'lloc\\Msls\\MslsOptionsTaxTerm' => __DIR__ . '/../..' . '/includes/MslsOptionsTaxTerm.php', 'lloc\\Msls\\MslsOptionsTaxTermCategory' => __DIR__ . '/../..' . '/includes/MslsOptionsTaxTermCategory.php', 'lloc\\Msls\\MslsOutput' => __DIR__ . '/../..' . '/includes/MslsOutput.php', 'lloc\\Msls\\MslsPlugin' => __DIR__ . '/../..' . '/includes/MslsPlugin.php', 'lloc\\Msls\\MslsPostTag' => __DIR__ . '/../..' . '/includes/MslsPostTag.php', 'lloc\\Msls\\MslsPostTagClassic' => __DIR__ . '/../..' . '/includes/MslsPostTagClassic.php', 'lloc\\Msls\\MslsPostType' => __DIR__ . '/../..' . '/includes/MslsPostType.php', 'lloc\\Msls\\MslsRegistry' => __DIR__ . '/../..' . '/includes/MslsRegistry.php', 'lloc\\Msls\\MslsRegistryInstance' => __DIR__ . '/../..' . '/includes/MslsRegistryInstance.php', 'lloc\\Msls\\MslsRequest' => __DIR__ . '/../..' . '/includes/MslsRequest.php', 'lloc\\Msls\\MslsShortCode' => __DIR__ . '/../..' . '/includes/MslsShortCode.php', 'lloc\\Msls\\MslsSqlCacher' => __DIR__ . '/../..' . '/includes/MslsSqlCacher.php', 'lloc\\Msls\\MslsTaxonomy' => __DIR__ . '/../..' . '/includes/MslsTaxonomy.php', 'lloc\\Msls\\MslsWidget' => __DIR__ . '/../..' . '/includes/MslsWidget.php', 'lloc\\Msls\\Query\\AbstractQuery' => __DIR__ . '/../..' . '/includes/Query/AbstractQuery.php', 'lloc\\Msls\\Query\\AuthorPostsCounterQuery' => __DIR__ . '/../..' . '/includes/Query/AuthorPostsCounterQuery.php', 'lloc\\Msls\\Query\\BlogsInNetworkQuery' => __DIR__ . '/../..' . '/includes/Query/BlogsInNetworkQuery.php', 'lloc\\Msls\\Query\\CleanupOptionsQuery' => __DIR__ . '/../..' . '/includes/Query/CleanupOptionsQuery.php', 'lloc\\Msls\\Query\\DatePostsCounterQuery' => __DIR__ . '/../..' . '/includes/Query/DatePostsCounterQuery.php', 'lloc\\Msls\\Query\\MonthPostsCounterQuery' => __DIR__ . '/../..' . '/includes/Query/MonthPostsCounterQuery.php', 'lloc\\Msls\\Query\\TranslatedPostIdQuery' => __DIR__ . '/../..' . '/includes/Query/TranslatedPostIdQuery.php', 'lloc\\Msls\\Query\\YearPostsCounterQuery' => __DIR__ . '/../..' . '/includes/Query/YearPostsCounterQuery.php');
        public static function getInitializer(\Composer\Autoload\ClassLoader $loader)
        {
        }
    }
}
namespace {
    // autoload_real.php @generated by Composer
    class ComposerAutoloaderInitb295695c4a8023a1a8ebe511195598c1
    {
        public static function loadClassLoader($class)
        {
        }
        /**
         * @return \Composer\Autoload\ClassLoader
         */
        public static function getLoader()
        {
        }
    }
}
namespace Composer\Installers {
    abstract class BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array();
        /** @var Composer */
        protected $composer;
        /** @var PackageInterface */
        protected $package;
        /** @var IOInterface */
        protected $io;
        /**
         * Initializes base installer.
         */
        public function __construct(\Composer\Package\PackageInterface $package, \Composer\Composer $composer, \Composer\IO\IOInterface $io)
        {
        }
        /**
         * Return the install path based on package type.
         */
        public function getInstallPath(\Composer\Package\PackageInterface $package, string $frameworkType = '') : string
        {
        }
        /**
         * For an installer to override to modify the vars per installer.
         *
         * @param  array<string, string> $vars This will normally receive array{name: string, vendor: string, type: string}
         * @return array<string, string>
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
        /**
         * Gets the installer's locations
         *
         * @return array<string, string> map of package types => install path
         */
        public function getLocations(string $frameworkType)
        {
        }
        /**
         * Replace vars in a path
         *
         * @param  array<string, string> $vars
         */
        protected function templatePath(string $path, array $vars = array()) : string
        {
        }
        /**
         * Search through a passed paths array for a custom install path.
         *
         * @param  array<string, string[]|string> $paths
         * @return string|false
         */
        protected function mapCustomInstallPaths(array $paths, string $name, string $type, ?string $vendor = null)
        {
        }
        protected function pregReplace(string $pattern, string $replacement, string $subject) : string
        {
        }
    }
    class GravInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('plugin' => 'user/plugins/{$name}/', 'theme' => 'user/themes/{$name}/');
        /**
         * Format package name
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
    }
    class AttogramInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('module' => 'modules/{$name}/');
    }
    class DrupalInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('core' => 'core/', 'module' => 'modules/{$name}/', 'theme' => 'themes/{$name}/', 'library' => 'libraries/{$name}/', 'profile' => 'profiles/{$name}/', 'database-driver' => 'drivers/lib/Drupal/Driver/Database/{$name}/', 'drush' => 'drush/{$name}/', 'custom-theme' => 'themes/custom/{$name}/', 'custom-module' => 'modules/custom/{$name}/', 'custom-profile' => 'profiles/custom/{$name}/', 'drupal-multisite' => 'sites/{$name}/', 'console' => 'console/{$name}/', 'console-language' => 'console/language/{$name}/', 'config' => 'config/sync/', 'recipe' => 'recipes/{$name}');
    }
    class CiviCrmInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('ext' => 'ext/{$name}/');
    }
    class ItopInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('extension' => 'extensions/{$name}/');
    }
    class ReIndexInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('theme' => 'themes/{$name}/', 'plugin' => 'plugins/{$name}/');
    }
    class TheliaInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('module' => 'local/modules/{$name}/', 'frontoffice-template' => 'templates/frontOffice/{$name}/', 'backoffice-template' => 'templates/backOffice/{$name}/', 'email-template' => 'templates/email/{$name}/');
    }
    class SilverStripeInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('module' => '{$name}/', 'theme' => 'themes/{$name}/');
        /**
         * Return the install path based on package type.
         *
         * Relies on built-in BaseInstaller behaviour with one exception: silverstripe/framework
         * must be installed to 'sapphire' and not 'framework' if the version is <3.0.0
         */
        public function getInstallPath(\Composer\Package\PackageInterface $package, string $frameworkType = '') : string
        {
        }
    }
    /**
     * Plugin/theme installer for shopware
     * @author Benjamin Boit
     */
    class ShopwareInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('backend-plugin' => 'engine/Shopware/Plugins/Local/Backend/{$name}/', 'core-plugin' => 'engine/Shopware/Plugins/Local/Core/{$name}/', 'frontend-plugin' => 'engine/Shopware/Plugins/Local/Frontend/{$name}/', 'theme' => 'templates/{$name}/', 'plugin' => 'custom/plugins/{$name}/', 'frontend-theme' => 'themes/Frontend/{$name}/');
        /**
         * Transforms the names
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
    }
    class DokuWikiInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('plugin' => 'lib/plugins/{$name}/', 'template' => 'lib/tpl/{$name}/');
        /**
         * Format package name.
         *
         * For package type dokuwiki-plugin, cut off a trailing '-plugin',
         * or leading dokuwiki_ if present.
         *
         * For package type dokuwiki-template, cut off a trailing '-template' if present.
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
        /**
         * @param array<string, string> $vars
         * @return array<string, string>
         */
        protected function inflectPluginVars(array $vars) : array
        {
        }
        /**
         * @param array<string, string> $vars
         * @return array<string, string>
         */
        protected function inflectTemplateVars(array $vars) : array
        {
        }
    }
    class StarbugInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('module' => 'modules/{$name}/', 'theme' => 'themes/{$name}/', 'custom-module' => 'app/modules/{$name}/', 'custom-theme' => 'app/themes/{$name}/');
    }
    class ProcessWireInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('module' => 'site/modules/{$name}/');
        /**
         * Format package name to CamelCase
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
    }
    class SyliusInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('theme' => 'themes/{$name}/');
    }
    class PPIInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('module' => 'modules/{$name}/');
    }
    class ConcreteCMSInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('core' => 'concrete/', 'block' => 'application/blocks/{$name}/', 'package' => 'packages/{$name}/', 'theme' => 'application/themes/{$name}/', 'update' => 'updates/{$name}/');
    }
    class LaravelInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('library' => 'libraries/{$name}/');
    }
    class ElggInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('plugin' => 'mod/{$name}/');
    }
    class VanillaInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('plugin' => 'plugins/{$name}/', 'theme' => 'themes/{$name}/');
    }
    class YawikInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('module' => 'module/{$name}/');
        /**
         * Format package name to CamelCase
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
    }
    class RoundcubeInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('plugin' => 'plugins/{$name}/');
        /**
         * Lowercase name and changes the name to a underscores
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
    }
    class VgmcpInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('bundle' => 'src/{$vendor}/{$name}/', 'theme' => 'themes/{$name}/');
        /**
         * Format package name.
         *
         * For package type vgmcp-bundle, cut off a trailing '-bundle' if present.
         *
         * For package type vgmcp-theme, cut off a trailing '-theme' if present.
         *
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
        /**
         * @param array<string, string> $vars
         * @return array<string, string>
         */
        protected function inflectPluginVars(array $vars) : array
        {
        }
        /**
         * @param array<string, string> $vars
         * @return array<string, string>
         */
        protected function inflectThemeVars(array $vars) : array
        {
        }
    }
    class UserFrostingInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('sprinkle' => 'app/sprinkles/{$name}/');
    }
    class RadPHPInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('bundle' => 'src/{$name}/');
        /**
         * Format package name to CamelCase
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
    }
    class KnownInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('plugin' => 'IdnoPlugins/{$name}/', 'theme' => 'Themes/{$name}/', 'console' => 'ConsolePlugins/{$name}/');
    }
    class SMFInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('module' => 'Sources/{$name}/', 'theme' => 'Themes/{$name}/');
    }
    class PhiftyInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('bundle' => 'bundles/{$name}/', 'library' => 'libraries/{$name}/', 'framework' => 'frameworks/{$name}/');
    }
    class MakoInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('package' => 'app/packages/{$name}/');
    }
    class CockpitInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('module' => 'cockpit/modules/addons/{$name}/');
        /**
         * Format module name.
         *
         * Strip `module-` prefix from package name.
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
        /**
         * @param array<string, string> $vars
         * @return array<string, string>
         */
        public function inflectModuleVars(array $vars) : array
        {
        }
    }
    class CodeIgniterInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('library' => 'application/libraries/{$name}/', 'third-party' => 'application/third_party/{$name}/', 'module' => 'application/modules/{$name}/');
    }
    /**
     * An installer to handle TAO extensions.
     */
    class TaoInstaller extends \Composer\Installers\BaseInstaller
    {
        const EXTRA_TAO_EXTENSION_NAME = 'tao-extension-name';
        /** @var array<string, string> */
        protected $locations = array('extension' => '{$name}');
        public function inflectPackageVars(array $vars) : array
        {
        }
    }
    class KohanaInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('module' => 'modules/{$name}/');
    }
    class Plugin implements \Composer\Plugin\PluginInterface
    {
        public function activate(\Composer\Composer $composer, \Composer\IO\IOInterface $io) : void
        {
        }
        public function deactivate(\Composer\Composer $composer, \Composer\IO\IOInterface $io) : void
        {
        }
        public function uninstall(\Composer\Composer $composer, \Composer\IO\IOInterface $io) : void
        {
        }
    }
    class ExpressionEngineInstaller extends \Composer\Installers\BaseInstaller
    {
        public function getLocations(string $frameworkType) : array
        {
        }
    }
    class OctoberInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('module' => 'modules/{$name}/', 'plugin' => 'plugins/{$vendor}/{$name}/', 'theme' => 'themes/{$vendor}-{$name}/');
        /**
         * Format package name.
         *
         * For package type october-plugin, cut off a trailing '-plugin' if present.
         *
         * For package type october-theme, cut off a trailing '-theme' if present.
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
        /**
         * @param array<string, string> $vars
         * @return array<string, string>
         */
        protected function inflectPluginVars(array $vars) : array
        {
        }
        /**
         * @param array<string, string> $vars
         * @return array<string, string>
         */
        protected function inflectThemeVars(array $vars) : array
        {
        }
    }
    class WolfCMSInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('plugin' => 'wolf/plugins/{$name}/');
    }
    class LithiumInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('library' => 'libraries/{$name}/', 'source' => 'libraries/_source/{$name}/');
    }
    class ZendInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('library' => 'library/{$name}/', 'extra' => 'extras/library/{$name}/', 'module' => 'module/{$name}/');
    }
    class LavaLiteInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('package' => 'packages/{$vendor}/{$name}/', 'theme' => 'public/themes/{$name}/');
    }
    class MoodleInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('mod' => 'mod/{$name}/', 'admin_report' => 'admin/report/{$name}/', 'atto' => 'lib/editor/atto/plugins/{$name}/', 'tool' => 'admin/tool/{$name}/', 'assignment' => 'mod/assignment/type/{$name}/', 'assignsubmission' => 'mod/assign/submission/{$name}/', 'assignfeedback' => 'mod/assign/feedback/{$name}/', 'antivirus' => 'lib/antivirus/{$name}/', 'auth' => 'auth/{$name}/', 'availability' => 'availability/condition/{$name}/', 'block' => 'blocks/{$name}/', 'booktool' => 'mod/book/tool/{$name}/', 'cachestore' => 'cache/stores/{$name}/', 'cachelock' => 'cache/locks/{$name}/', 'calendartype' => 'calendar/type/{$name}/', 'communication' => 'communication/provider/{$name}/', 'customfield' => 'customfield/field/{$name}/', 'fileconverter' => 'files/converter/{$name}/', 'format' => 'course/format/{$name}/', 'coursereport' => 'course/report/{$name}/', 'contenttype' => 'contentbank/contenttype/{$name}/', 'customcertelement' => 'mod/customcert/element/{$name}/', 'datafield' => 'mod/data/field/{$name}/', 'dataformat' => 'dataformat/{$name}/', 'datapreset' => 'mod/data/preset/{$name}/', 'editor' => 'lib/editor/{$name}/', 'enrol' => 'enrol/{$name}/', 'filter' => 'filter/{$name}/', 'forumreport' => 'mod/forum/report/{$name}/', 'gradeexport' => 'grade/export/{$name}/', 'gradeimport' => 'grade/import/{$name}/', 'gradereport' => 'grade/report/{$name}/', 'gradingform' => 'grade/grading/form/{$name}/', 'h5plib' => 'h5p/h5plib/{$name}/', 'local' => 'local/{$name}/', 'logstore' => 'admin/tool/log/store/{$name}/', 'ltisource' => 'mod/lti/source/{$name}/', 'ltiservice' => 'mod/lti/service/{$name}/', 'media' => 'media/player/{$name}/', 'message' => 'message/output/{$name}/', 'mlbackend' => 'lib/mlbackend/{$name}/', 'mnetservice' => 'mnet/service/{$name}/', 'paygw' => 'payment/gateway/{$name}/', 'plagiarism' => 'plagiarism/{$name}/', 'portfolio' => 'portfolio/{$name}/', 'qbank' => 'question/bank/{$name}/', 'qbehaviour' => 'question/behaviour/{$name}/', 'qformat' => 'question/format/{$name}/', 'qtype' => 'question/type/{$name}/', 'quizaccess' => 'mod/quiz/accessrule/{$name}/', 'quiz' => 'mod/quiz/report/{$name}/', 'report' => 'report/{$name}/', 'repository' => 'repository/{$name}/', 'scormreport' => 'mod/scorm/report/{$name}/', 'search' => 'search/engine/{$name}/', 'theme' => 'theme/{$name}/', 'tiny' => 'lib/editor/tiny/plugins/{$name}/', 'tinymce' => 'lib/editor/tinymce/plugins/{$name}/', 'profilefield' => 'user/profile/field/{$name}/', 'webservice' => 'webservice/{$name}/', 'workshopallocation' => 'mod/workshop/allocation/{$name}/', 'workshopeval' => 'mod/workshop/eval/{$name}/', 'workshopform' => 'mod/workshop/form/{$name}/');
    }
    class HuradInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('plugin' => 'plugins/{$name}/', 'theme' => 'plugins/{$name}/');
        /**
         * Format package name to CamelCase
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
    }
    class CakePHPInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('plugin' => 'Plugin/{$name}/');
        /**
         * Format package name to CamelCase
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
        /**
         * Change the default plugin location when cakephp >= 3.0
         */
        public function getLocations(string $frameworkType) : array
        {
        }
        /**
         * Check if CakePHP version matches against a version
         *
         * @phpstan-param '='|'=='|'<'|'<='|'>'|'>='|'<>'|'!=' $matcher
         */
        protected function matchesCakeVersion(string $matcher, string $version) : bool
        {
        }
    }
    class RedaxoInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('addon' => 'redaxo/include/addons/{$name}/', 'bestyle-plugin' => 'redaxo/include/addons/be_style/plugins/{$name}/');
    }
    /**
     * An installer to handle MODX specifics when installing packages.
     */
    class ModxInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('extra' => 'core/packages/{$name}/');
    }
    class MauticInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('plugin' => 'plugins/{$name}/', 'theme' => 'themes/{$name}/', 'core' => 'app/');
        /**
         * Format package name of mautic-plugins to CamelCase
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
    }
    class MagentoInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('theme' => 'app/design/frontend/{$name}/', 'skin' => 'skin/frontend/default/{$name}/', 'library' => 'lib/{$name}/');
    }
    class Concrete5Installer extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('core' => 'concrete/', 'block' => 'application/blocks/{$name}/', 'package' => 'packages/{$name}/', 'theme' => 'application/themes/{$name}/', 'update' => 'updates/{$name}/');
    }
    class FuelphpInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('component' => 'components/{$name}/');
    }
    class FuelInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('module' => 'fuel/app/modules/{$name}/', 'package' => 'fuel/packages/{$name}/', 'theme' => 'fuel/app/themes/{$name}/');
    }
    class TastyIgniterInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = ['module' => 'app/{$name}/', 'extension' => 'extensions/{$vendor}/{$name}/', 'theme' => 'themes/{$name}/'];
        /**
         * Format package name.
         *
         * Cut off leading 'ti-ext-' or 'ti-theme-' if present.
         * Strip vendor name of characters that is not alphanumeric or an underscore
         *
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
        /**
         * @param array<string, string> $vars
         * @return array<string, string>
         */
        protected function inflectModuleVars(array $vars) : array
        {
        }
        /**
         * @param array<string, string> $vars
         * @param array<string, mixed> $extra
         * @return array<string, string>
         */
        protected function inflectExtensionVars(array $vars, array $extra) : array
        {
        }
        /**
         * @param array<string, string> $vars
         * @param array<string, mixed> $extra
         * @return array<string, string>
         */
        protected function inflectThemeVars(array $vars, array $extra) : array
        {
        }
    }
    class PrestashopInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('module' => 'modules/{$name}/', 'theme' => 'themes/{$name}/');
    }
    class OxidInstaller extends \Composer\Installers\BaseInstaller
    {
        const VENDOR_PATTERN = '/^modules\\/(?P<vendor>.+)\\/.+/';
        /** @var array<string, string> */
        protected $locations = array('module' => 'modules/{$name}/', 'theme' => 'application/views/{$name}/', 'out' => 'out/{$name}/');
        public function getInstallPath(\Composer\Package\PackageInterface $package, string $frameworkType = '') : string
        {
        }
        /**
         * Makes sure there is a vendormetadata.php file inside
         * the vendor folder if there is a vendor folder.
         */
        protected function prepareVendorDirectory(string $installPath) : void
        {
        }
    }
    /**
     * Composer installer for 3rd party Tusk utilities
     * @author Drew Ewing <drew@phenocode.com>
     */
    class TuskInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('task' => '.tusk/tasks/{$name}/', 'command' => '.tusk/commands/{$name}/', 'asset' => 'assets/tusk/{$name}/');
    }
    class AkauntingInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('module' => 'modules/{$name}');
        /**
         * Format package name to CamelCase
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
    }
    /**
     * Class PiwikInstaller
     *
     * @package Composer\Installers
     */
    class PiwikInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('plugin' => 'plugins/{$name}/');
        /**
         * Format package name to CamelCase
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
    }
    class PuppetInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('module' => 'modules/{$name}/');
    }
    class AglInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('module' => 'More/{$name}/');
        /**
         * Format package name to CamelCase
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
    }
    class ForkCMSInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = ['module' => 'src/Modules/{$name}/', 'theme' => 'src/Themes/{$name}/'];
        /**
         * Format package name.
         *
         * For package type fork-cms-module, cut off a trailing '-plugin' if present.
         *
         * For package type fork-cms-theme, cut off a trailing '-theme' if present.
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
        /**
         * @param array<string, string> $vars
         * @return array<string, string>
         */
        protected function inflectModuleVars(array $vars) : array
        {
        }
        /**
         * @param array<string, string> $vars
         * @return array<string, string>
         */
        protected function inflectThemeVars(array $vars) : array
        {
        }
    }
    class EliasisInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('component' => 'components/{$name}/', 'module' => 'modules/{$name}/', 'plugin' => 'plugins/{$name}/', 'template' => 'templates/{$name}/');
    }
    class Redaxo5Installer extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('addon' => 'redaxo/src/addons/{$name}/', 'bestyle-plugin' => 'redaxo/src/addons/be_style/plugins/{$name}/');
    }
    /**
     * Class MatomoInstaller
     *
     * @package Composer\Installers
     */
    class MatomoInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('plugin' => 'plugins/{$name}/');
        /**
         * Format package name to CamelCase
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
    }
    /**
     * Installer for Bitrix Framework. Supported types of extensions:
     * - `bitrix-d7-module` — copy the module to directory `bitrix/modules/<vendor>.<name>`.
     * - `bitrix-d7-component` — copy the component to directory `bitrix/components/<vendor>/<name>`.
     * - `bitrix-d7-template` — copy the template to directory `bitrix/templates/<vendor>_<name>`.
     *
     * You can set custom path to directory with Bitrix kernel in `composer.json`:
     *
     * ```json
     * {
     *      "extra": {
     *          "bitrix-dir": "s1/bitrix"
     *      }
     * }
     * ```
     *
     * @author Nik Samokhvalov <nik@samokhvalov.info>
     * @author Denis Kulichkin <onexhovia@gmail.com>
     */
    class BitrixInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array(
            'module' => '{$bitrix_dir}/modules/{$name}/',
            // deprecated, remove on the major release (Backward compatibility will be broken)
            'component' => '{$bitrix_dir}/components/{$name}/',
            // deprecated, remove on the major release (Backward compatibility will be broken)
            'theme' => '{$bitrix_dir}/templates/{$name}/',
            // deprecated, remove on the major release (Backward compatibility will be broken)
            'd7-module' => '{$bitrix_dir}/modules/{$vendor}.{$name}/',
            'd7-component' => '{$bitrix_dir}/components/{$vendor}/{$name}/',
            'd7-template' => '{$bitrix_dir}/templates/{$vendor}_{$name}/',
        );
        public function inflectPackageVars(array $vars) : array
        {
        }
        /**
         * {@inheritdoc}
         */
        protected function templatePath(string $path, array $vars = array()) : string
        {
        }
        /**
         * Duplicates search packages.
         *
         * @param array<string, string> $vars
         */
        protected function checkDuplicates(string $path, array $vars = array()) : void
        {
        }
    }
    class AsgardInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('module' => 'Modules/{$name}/', 'theme' => 'Themes/{$name}/');
        /**
         * Format package name.
         *
         * For package type asgard-module, cut off a trailing '-plugin' if present.
         *
         * For package type asgard-theme, cut off a trailing '-theme' if present.
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
        /**
         * @param array<string, string> $vars
         * @return array<string, string>
         */
        protected function inflectPluginVars(array $vars) : array
        {
        }
        /**
         * @param array<string, string> $vars
         * @return array<string, string>
         */
        protected function inflectThemeVars(array $vars) : array
        {
        }
    }
    class WHMCSInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('addons' => 'modules/addons/{$vendor}_{$name}/', 'fraud' => 'modules/fraud/{$vendor}_{$name}/', 'gateways' => 'modules/gateways/{$vendor}_{$name}/', 'notifications' => 'modules/notifications/{$vendor}_{$name}/', 'registrars' => 'modules/registrars/{$vendor}_{$name}/', 'reports' => 'modules/reports/{$vendor}_{$name}/', 'security' => 'modules/security/{$vendor}_{$name}/', 'servers' => 'modules/servers/{$vendor}_{$name}/', 'social' => 'modules/social/{$vendor}_{$name}/', 'support' => 'modules/support/{$vendor}_{$name}/', 'templates' => 'templates/{$vendor}_{$name}/', 'includes' => 'includes/{$vendor}_{$name}/');
    }
    /**
     *
     * Installer for kanboard plugins
     *
     * kanboard.net
     *
     * Class KanboardInstaller
     * @package Composer\Installers
     */
    class KanboardInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('plugin' => 'plugins/{$name}/');
    }
    class BotbleInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('plugin' => 'platform/plugins/{$name}/', 'theme' => 'platform/themes/{$name}/');
    }
    class WordPressInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('plugin' => 'wp-content/plugins/{$name}/', 'theme' => 'wp-content/themes/{$name}/', 'muplugin' => 'wp-content/mu-plugins/{$name}/', 'dropin' => 'wp-content/{$name}/');
    }
    /**
     * Plugin/theme installer for majima
     * @author David Neustadt
     */
    class MajimaInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('plugin' => 'plugins/{$name}/');
        /**
         * Transforms the names
         *
         * @param array<string, string> $vars
         * @return array<string, string>
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
    }
    class DframeInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('module' => 'modules/{$vendor}/{$name}/');
    }
    class PlentymarketsInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('plugin' => '{$name}/');
        /**
         * Remove hyphen, "plugin" and format to camelcase
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
    }
    class MiaoxingInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('plugin' => 'plugins/{$name}/');
    }
    class EzPlatformInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('meta-assets' => 'web/assets/ezplatform/', 'assets' => 'web/assets/ezplatform/{$name}/');
    }
    /**
     * An installer to handle MODX Evolution specifics when installing packages.
     */
    class MODXEvoInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('snippet' => 'assets/snippets/{$name}/', 'plugin' => 'assets/plugins/{$name}/', 'module' => 'assets/modules/{$name}/', 'template' => 'assets/templates/{$name}/', 'lib' => 'assets/lib/{$name}/');
    }
    class OntoWikiInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('extension' => 'extensions/{$name}/', 'theme' => 'extensions/themes/{$name}/', 'translation' => 'extensions/translations/{$name}/');
        /**
         * Format package name to lower case and remove ".ontowiki" suffix
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
    }
    class AnnotateCmsInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('module' => 'addons/modules/{$name}/', 'component' => 'addons/components/{$name}/', 'service' => 'addons/services/{$name}/');
    }
    class MODULEWorkInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('module' => 'modules/{$name}/');
    }
    class OsclassInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('plugin' => 'oc-content/plugins/{$name}/', 'theme' => 'oc-content/themes/{$name}/', 'language' => 'oc-content/languages/{$name}/');
    }
    class ChefInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('cookbook' => 'Chef/{$vendor}/{$name}/', 'role' => 'Chef/roles/{$name}/');
    }
    class Installer extends \Composer\Installer\LibraryInstaller
    {
        /**
         * Disables installers specified in main composer extra installer-disable
         * list
         */
        public function __construct(\Composer\IO\IOInterface $io, \Composer\Composer $composer, string $type = 'library', ?\Composer\Util\Filesystem $filesystem = null, ?\Composer\Installer\BinaryInstaller $binaryInstaller = null)
        {
        }
        /**
         * {@inheritDoc}
         */
        public function getInstallPath(\Composer\Package\PackageInterface $package)
        {
        }
        public function uninstall(\Composer\Repository\InstalledRepositoryInterface $repo, \Composer\Package\PackageInterface $package)
        {
        }
        /**
         * {@inheritDoc}
         *
         * @param string $packageType
         */
        public function supports($packageType)
        {
        }
        /**
         * Finds a supported framework type if it exists and returns it
         *
         * @return string|false
         */
        protected function findFrameworkType(string $type)
        {
        }
        /**
         * Get the second part of the regular expression to check for support of a
         * package type
         */
        protected function getLocationPattern(string $frameworkType) : string
        {
        }
        /**
         * Look for installers set to be disabled in composer's extra config and
         * remove them from the list of supported installers.
         *
         * Globals:
         *  - true, "all", and "*" - disable all installers.
         *  - false - enable all installers (useful with
         *     wikimedia/composer-merge-plugin or similar)
         */
        protected function removeDisabledInstallers() : void
        {
        }
    }
    class KodiCMSInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('plugin' => 'cms/plugins/{$name}/', 'media' => 'cms/media/vendor/{$name}/');
    }
    class PhpBBInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('extension' => 'ext/{$vendor}/{$name}/', 'language' => 'language/{$name}/', 'style' => 'styles/{$name}/');
    }
    class MediaWikiInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('core' => 'core/', 'extension' => 'extensions/{$name}/', 'skin' => 'skins/{$name}/');
        /**
         * Format package name.
         *
         * For package type mediawiki-extension, cut off a trailing '-extension' if present and transform
         * to CamelCase keeping existing uppercase chars.
         *
         * For package type mediawiki-skin, cut off a trailing '-skin' if present.
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
        /**
         * @param array<string, string> $vars
         * @return array<string, string>
         */
        protected function inflectExtensionVars(array $vars) : array
        {
        }
        /**
         * @param array<string, string> $vars
         * @return array<string, string>
         */
        protected function inflectSkinVars(array $vars) : array
        {
        }
    }
    class PantheonInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('script' => 'web/private/scripts/quicksilver/{$name}', 'module' => 'web/private/scripts/quicksilver/{$name}');
    }
    class ImageCMSInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('template' => 'templates/{$name}/', 'module' => 'application/modules/{$name}/', 'library' => 'application/libraries/{$name}/');
    }
    class PortoInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('container' => 'app/Containers/{$name}/');
    }
    /**
     * Class DolibarrInstaller
     *
     * @package Composer\Installers
     * @author  Raphaël Doursenaud <rdoursenaud@gpcsolutions.fr>
     */
    class DolibarrInstaller extends \Composer\Installers\BaseInstaller
    {
        //TODO: Add support for scripts and themes
        /** @var array<string, string> */
        protected $locations = array('module' => 'htdocs/custom/{$name}/');
    }
    class BonefishInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('package' => 'Packages/{$vendor}/{$name}/');
    }
    class MayaInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('module' => 'modules/{$name}/');
        /**
         * Format package name.
         *
         * For package type maya-module, cut off a trailing '-module' if present.
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
        /**
         * @param array<string, string> $vars
         * @return array<string, string>
         */
        protected function inflectModuleVars(array $vars) : array
        {
        }
    }
    class CroogoInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('plugin' => 'Plugin/{$name}/', 'theme' => 'View/Themed/{$name}/');
        /**
         * Format package name to CamelCase
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
    }
    class PxcmsInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('module' => 'app/Modules/{$name}/', 'theme' => 'themes/{$name}/');
        /**
         * Format package name.
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
        /**
         * For package type pxcms-module, cut off a trailing '-plugin' if present.
         *
         * @param array<string, string> $vars
         * @return array<string, string>
         */
        protected function inflectModuleVars(array $vars) : array
        {
        }
        /**
         * For package type pxcms-module, cut off a trailing '-plugin' if present.
         *
         * @param array<string, string> $vars
         * @return array<string, string>
         */
        protected function inflectThemeVars(array $vars) : array
        {
        }
    }
    class DecibelInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array */
        /** @var array<string, string> */
        protected $locations = array('app' => 'app/{$name}/');
    }
    class SyDESInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('module' => 'app/modules/{$name}/', 'theme' => 'themes/{$name}/');
        /**
         * Format module name.
         *
         * Strip `sydes-` prefix and a trailing '-theme' or '-module' from package name if present.
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
        /**
         * @param array<string, string> $vars
         * @return array<string, string>
         */
        public function inflectModuleVars(array $vars) : array
        {
        }
        /**
         * @param array<string, string> $vars
         * @return array<string, string>
         */
        protected function inflectThemeVars(array $vars) : array
        {
        }
    }
    class LanManagementSystemInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('plugin' => 'plugins/{$name}/', 'template' => 'templates/{$name}/', 'document-template' => 'documents/templates/{$name}/', 'userpanel-module' => 'userpanel/modules/{$name}/');
        /**
         * Format package name to CamelCase
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
    }
    class ClanCatsFrameworkInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('ship' => 'CCF/orbit/{$name}/', 'theme' => 'CCF/app/themes/{$name}/');
    }
    class ZikulaInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('module' => 'modules/{$vendor}-{$name}/', 'theme' => 'themes/{$vendor}-{$name}/');
    }
    class MantisBTInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('plugin' => 'plugins/{$name}/');
        /**
         * Format package name to CamelCase
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
    }
    class SiteDirectInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('module' => 'modules/{$vendor}/{$name}/', 'plugin' => 'plugins/{$vendor}/{$name}/');
        /**
         * @param array<string, string> $vars
         * @return array<string, string>
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
        /**
         * @param array<string, string> $vars
         * @return array<string, string>
         */
        protected function parseVars(array $vars) : array
        {
        }
    }
    class WinterInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('module' => 'modules/{$name}/', 'plugin' => 'plugins/{$vendor}/{$name}/', 'theme' => 'themes/{$name}/');
        /**
         * Format package name.
         *
         * For package type winter-plugin, cut off a trailing '-plugin' if present.
         *
         * For package type winter-theme, cut off a trailing '-theme' if present.
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
        /**
         * @param array<string, string> $vars
         * @return array<string, string>
         */
        protected function inflectModuleVars(array $vars) : array
        {
        }
        /**
         * @param array<string, string> $vars
         * @return array<string, string>
         */
        protected function inflectPluginVars(array $vars) : array
        {
        }
        /**
         * @param array<string, string> $vars
         * @return array<string, string>
         */
        protected function inflectThemeVars(array $vars) : array
        {
        }
    }
    class MicroweberInstaller extends \Composer\Installers\BaseInstaller
    {
        /** @var array<string, string> */
        protected $locations = array('module' => 'userfiles/modules/{$install_item_dir}/', 'module-skin' => 'userfiles/modules/{$install_item_dir}/templates/', 'template' => 'userfiles/templates/{$install_item_dir}/', 'element' => 'userfiles/elements/{$install_item_dir}/', 'vendor' => 'vendor/{$install_item_dir}/', 'components' => 'components/{$install_item_dir}/');
        /**
         * Format package name.
         *
         * For package type microweber-module, cut off a trailing '-module' if present
         *
         * For package type microweber-template, cut off a trailing '-template' if present.
         */
        public function inflectPackageVars(array $vars) : array
        {
        }
        /**
         * @param array<string, string> $vars
         * @return array<string, string>
         */
        protected function inflectTemplateVars(array $vars) : array
        {
        }
        /**
         * @param array<string, string> $vars
         * @return array<string, string>
         */
        protected function inflectTemplatesVars(array $vars) : array
        {
        }
        /**
         * @param array<string, string> $vars
         * @return array<string, string>
         */
        protected function inflectCoreVars(array $vars) : array
        {
        }
        /**
         * @param array<string, string> $vars
         * @return array<string, string>
         */
        protected function inflectModuleVars(array $vars) : array
        {
        }
        /**
         * @param array<string, string> $vars
         * @return array<string, string>
         */
        protected function inflectModulesVars(array $vars) : array
        {
        }
        /**
         * @param array<string, string> $vars
         * @return array<string, string>
         */
        protected function inflectSkinVars(array $vars) : array
        {
        }
        /**
         * @param array<string, string> $vars
         * @return array<string, string>
         */
        protected function inflectElementVars(array $vars) : array
        {
        }
    }
}
namespace {
    \define('MSLS_PLUGIN_VERSION', '2.9.4');
    \define('MSLS_PLUGIN_PATH', \plugin_basename(__FILE__));
    \define('MSLS_PLUGIN__FILE__', __FILE__);
    /**
     * Get the output for using the links to the translations in your code
     *
     * @package Msls
     *
     * @param mixed $attr
     *
     * @return string
     */
    function get_the_msls($attr) : string
    {
    }
    /**
     * Output the links to the translations in your template
     *
     * You can call this function directly like that
     *
     *     if ( function_exists ( 'the_msls' ) )
     *         the_msls();
     *
     * or just use it as shortcode [sc_msls]
     *
     * @package Msls
     * @uses get_the_msls
     *
     * @param string[] $arr
     */
    function the_msls(array $arr = array()) : void
    {
    }
    /**
     * Gets the URL of the country flag-icon for a specific locale
     *
     * @param string $locale
     *
     * @return string
     */
    function get_msls_flag_url(string $locale) : string
    {
    }
    /**
     * Gets the description for a blog for a specific locale
     *
     * @param string $locale
     *
     * @return string
     */
    function get_msls_blog_description(string $locale, string $default = '') : string
    {
    }
    /**
     * Gets the permalink for a translation of the current post in a given language
     *
     * @param string $locale
     * @param string $default
     *
     * @return string
     */
    function get_msls_permalink(string $locale, string $default = '') : string
    {
    }
    /**
     * Looks for the MslsBlog instance for a specific locale
     *
     * @param string $locale
     *
     * @return \lloc\Msls\MslsBlog|null
     */
    function msls_blog(string $locale) : ?\lloc\Msls\MslsBlog
    {
    }
    /**
     * Gets the MslsBlogCollection instance
     *
     * @return \lloc\Msls\MslsBlogCollection
     */
    function msls_blog_collection() : \lloc\Msls\MslsBlogCollection
    {
    }
    /**
     * Gets the MslsOptions instance
     *
     * @return \lloc\Msls\MslsOptions
     */
    function msls_options() : \lloc\Msls\MslsOptions
    {
    }
    /**
     * Gets the MslsContentTypes instance
     *
     * @return \lloc\Msls\MslsContentTypes
     */
    function msls_content_types() : \lloc\Msls\MslsContentTypes
    {
    }
    /**
     * Gets the MslsPostType instance
     *
     * @return \lloc\Msls\MslsPostType
     */
    function msls_post_type() : \lloc\Msls\MslsPostType
    {
    }
    /**
     * Gets the MslsTaxonomy instance
     *
     * @return \lloc\Msls\MslsTaxonomy
     */
    function msls_taxonomy() : \lloc\Msls\MslsTaxonomy
    {
    }
    /**
     * Gets the MslsOutput instance
     *
     * @return \lloc\Msls\MslsOutput
     */
    function msls_output() : \lloc\Msls\MslsOutput
    {
    }
    /**
     * Retrieves the MslsOptionsPost instance.
     *
     * @param int $id
     * @return \lloc\Msls\MslsOptionsPost
     */
    function msls_get_post(int $id) : \lloc\Msls\MslsOptionsPost
    {
    }
    /**
     * Retrieves the MslsOptionsTax instance.
     *
     * Determines the current query based on conditional tags:
     * - is_category
     * - is_tag
     * - is_tax
     *
     * @param int $id
     * @return \lloc\Msls\MslsOptionsTax
     */
    function msls_get_tax(int $id) : \lloc\Msls\MslsOptionsTax
    {
    }
    /**
     * Retrieves the MslsOptionsQuery instance.
     *
     * Determines the current query based on conditional tags:
     * - is_day
     * - is_month
     * - is_year
     * - is_author
     * - is_post_type_archive
     *
     * @return ?\lloc\Msls\MslsOptionsQuery
     */
    function msls_get_query() : ?\lloc\Msls\MslsOptionsQuery
    {
    }
    function includeIfExists(string $file) : ?\Composer\Autoload\ClassLoader
    {
    }
}