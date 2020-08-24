<?php

namespace Jonassiewertsen\ExternalLink;

use Statamic\Fields\Fieldtype;

class ExternalLink extends Fieldtype
{
    protected $icon = 'earth';

    /**
     * @return string
     */
    public static function title()
    {
        return 'External Link';
    }

    /**
     * Adding the https:// before saving
     *
     * @param $data
     *
     * @return string
     */
    public function process($data)
    {
        return 'https://' . $data;
    }


    /**
     * Removing the https:// before displaying in field
     *
     * @param $data
     *
     * @return mixed
     */
    public function preProcess($data)
    {
        return preg_replace('/^(http|https):\/\//i', '', $data);
    }
}
