<?php

namespace GetOlympus\Hermes\Application;

/**
 * Application interface
 *
 * @package    OlympusHermesTranslator
 * @subpackage Application
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 *
 */

interface ApplicationInterface
{
    /**
     * Load translations.
     *
     * @param  array   $translations
     * @param  string  $locale
     */
    public static function l($translations = [], $locale = 'default') : void;

    /**
     * Noop typo from WordPress.
     *
     * @param  string  $single
     * @param  string  $plural
     * @param  integer $number
     * @param  string  $domain
     *
     * @return string
     */
    public static function n($single, $plural, $number = 1, $domain = 'olympus-hermes') : string;

    /**
     * Prepare noop typo from WordPress.
     *
     * @param  string  $single
     * @param  string  $plural
     * @param  string  $domain
     *
     * @return string
     */
    public static function noop($single, $plural, $domain = 'olympus-hermes') : string;

    /**
     * Translate typo.
     *
     * @param  string  $message
     * @param  string  $domain
     *
     * @return string
     */
    public static function t($message, $domain = 'olympus-hermes') : string;
}
