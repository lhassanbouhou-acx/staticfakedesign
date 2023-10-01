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

declare(strict_types=1);

namespace ErdnaxelaWeb\StaticFakeDesign\Value;

use DateTime;

class TaxonomyEntry extends AbstractContent
{
    public function __construct(
        public readonly int $id,
        string $name,
        string $type,
        DateTime $creationDate,
        DateTime $modificationDate,
        ContentFieldsCollection $fields
    ) {
        parent::__construct($name, $type, $creationDate, $modificationDate, $fields);
    }
}
