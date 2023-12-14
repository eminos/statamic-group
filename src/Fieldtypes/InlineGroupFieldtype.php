<?php

namespace Eminos\StatamicInlineGroup\Fieldtypes;

use Statamic\Fields\Fieldtype;

class InlineGroupFieldtype extends Fieldtype
{
    protected $icon = 'group';

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
