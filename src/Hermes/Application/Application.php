<?php

namespace GetOlympus\Hermes\Application;

use GetOlympus\Hermes\Application\ApplicationInterface;

/**
 * Application controller
 *
 * @package    OlympusHermesTranslator
 * @subpackage Application
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 *
 */

abstract class Application implements ApplicationInterface
{
    /**
     * Load translations.
     *
     * @param  array   $translations
     * @param  string  $locale
     */
    public static function l($translations = [], $locale = 'default') : void
    {
        if (empty($translations)) {
            return;
        }

        // Define current locale and cache path
        $current = determine_locale();

        // Create MO file if current locale does not exist
        add_action('load_textdomain_mofile', function ($mofile, $domain) use ($translations, $current, $locale) {
            // Check if domain is concerned by translations
            if (!array_key_exists($domain, $translations)) {
                return $mofile;
            }

            // Change locale if needed
            if (!file_exists($mofile)) {
                $mofile = str_replace($current.'.mo', $locale.'.mo', $mofile);
            }

            return $mofile;
        }, 10, 2);

        // Iterate
        foreach ($translations as $domain => $languages) {
            $res = load_textdomain($domain, rtrim($languages, S).S.$domain.'-'.$current.'.mo');
        }
    }

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
    public static function n($single, $plural, $number = 1, $domain = 'olympus-hermes') : string
    {
        if (!function_exists('_n')) {
            return 1 === $number ? $single : $plural;
        }

        return _n($single, $plural, $number, $domain);
    }

    /**
     * Prepare noop typo from WordPress.
     *
     * @param  string  $single
     * @param  string  $plural
     * @param  string  $domain
     *
     * @return string
     */
    public static function noop($single, $plural, $domain = 'olympus-hermes') : string
    {
        if (!function_exists('_n_noop')) {
            return $single;
        }

        return _n_noop($single, $plural, $domain);
    }

    /**
     * Translate typo.
     *
     * @param  string  $message
     * @param  string  $domain
     *
     * @return string
     */
    public static function t($message, $domain = 'olympus-hermes') : string
    {
        if (!function_exists('__')) {
            return $message;
        }

        return __($message, $domain);
    }
}
