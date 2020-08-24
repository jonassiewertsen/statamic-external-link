<?php

namespace Jonassiewertsen\ExternalLink;

class ExternalLink extends \Statamic\Fields\Fieldtype
{
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
