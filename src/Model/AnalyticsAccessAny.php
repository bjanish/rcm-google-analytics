<?php

namespace Reliv\RcmGoogleAnalytics\Model;

/**
 * Class AnalyticsAccessAny
 *
 * Defines the rules for access to change analytic settings for a site
 *
 * PHP version 5
 *
 * @category  Reliv
 * @package   moduleNameHere
 * @author    James Jervis <jjervis@relivinc.com>
 * @copyright 2015 Reliv International
 * @license   License.txt New BSD License
 * @version   Release: <package_version>
 * @link      https://github.com/reliv
 */

class AnalyticsAccessAny implements AnalyticsAccessInterface
{
    /**
     * has Access
     *
     * @return boolean
     */
    public function hasAccess()
    {
        // no restrictions
        return true;
    }
}
