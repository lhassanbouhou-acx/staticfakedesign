<?php
/*
 * DesignBundle.
 *
 * @package   DesignBundle
 *
 * @author    florian
 * @copyright 2018 Novactive
 * @license   https://github.com/Novactive/NovaHtmlIntegrationBundle/blob/master/LICENSE
 */

declare( strict_types=1 );

namespace ErdnaxelaWeb\StaticFakeDesign\Value;

use Symfony\Component\VarExporter\LazyGhostTrait;

class AbstractContent
{
    use LazyGhostTrait;

    /**
     * @param string $name
     * @param ContentFieldsCollection $fields
     */
    public function __construct(
        public readonly string $name = "",
        public readonly ContentFieldsCollection  $fields
    )
    {
    }
}
