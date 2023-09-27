<?php

namespace Eminos\StatamicGroup\Fieldtypes;

use Statamic\Fields\Fieldtype;

class GroupFieldtype extends Fieldtype
{
    protected $icon = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M7 8v5h6V8H7M2 3h3v1h13V3h3v3h-1v13h1v3h-3v-1H5v1H2v-3h1V6H2V3m3 16v1h13v-1h1V6h-1V5H5v1H4v13h1M6 7h8v4h3v7H8v-4H6V7m8 7H9v3h7v-5h-2v2M3 4v1h1V4H3m16 0v1h1V4h-1m0 16v1h1v-1h-1M3 20v1h1v-1H3Z"/></svg>';

    /**
     * The blank/default value.
     *
     * @return array
     */
    public function defaultValue()
    {
        return null;
    }

    /**
     * Pre-process the data before it gets sent to the publish page.
     *
     * @param mixed $data
     * @return array|mixed
     */
    public function preProcess($data)
    {
        return $data;
    }

    /**
     * Process the data before it gets saved.
     *
     * @param mixed $data
     * @return array|mixed
     */
    public function process($data)
    {
        return $data;
    }

    protected function configFieldItems(): array
    {
        return [
            'show_header' => [
                'display' => 'Show header',
                'type' => 'toggle',
                'default' => false,
            ],
            'show_toggle' => [
                'display' => 'Show toggle',
                'type' => 'toggle',
                'default' => false,
                'if' => [
                    'show_header' => true,
                ],
            ],
            'toggle_controls_visibility' => [
                'display' => 'Toggle controls fields\' visibility',
                'type' => 'toggle',
                'default' => false,
                'if' => [
                    'show_header' => true,
                    'show_toggle' => true,
                ],
            ],
            'save_toggle_state' => [
                'display' => 'Save toggle state',
                'type' => 'toggle',
                'default' => false,
                'if' => [
                    'show_header' => true,
                    'show_toggle' => true,
                ],
            ],
        ];
    }
}
