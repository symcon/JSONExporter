<?php

declare(strict_types=1);

trait JSONExporterFields
{
    private $fields = [
        '' => [
            'caption' => 'Custom',
            'add'     => '',
            'edit'    => [
                'type' => 'ValidationTextBox'
            ],
            'data' => 'return $value;',
        ],
        'Variable.Value' => [
            'caption' => 'Variable (Value)',
            'add'     => 0,
            'edit'    => [
                'type' => 'SelectVariable'
            ],
            'data' => 'return GetValue($value);',
        ],
        'Variable.ValueFormatted' => [
            'caption' => 'Variable (Value Formatted)',
            'add'     => 0,
            'edit'    => [
                'type' => 'SelectVariable'
            ],
            'data' => 'return GetValueFormatted($value);',
        ],
        'Variable.Updated' => [
            'caption' => 'Variable (Updated, dd.mm.yyyy hh:mm:ss)',
            'add'     => 0,
            'edit'    => [
                'type' => 'SelectVariable'
            ],
            'data' => "return date('d.m.Y H:i:s', IPS_GetVariable(\$value)['VariableUpdated']);;",
        ],
        'Variable.UpdatedUnixTimestamp' => [
            'caption' => 'Variable (Updated, UnixTimestamp)',
            'add'     => 0,
            'edit'    => [
                'type' => 'SelectVariable'
            ],
            'data' => "return IPS_GetVariable(\$value)['VariableUpdated'];",
        ],
        'Variable.Changed' => [
            'caption' => 'Variable (Changed, dd.mm.yyyy hh:mm:ss)',
            'add'     => 0,
            'edit'    => [
                'type' => 'SelectVariable'
            ],
            'data' => "return date('d.m.Y H:i:s', IPS_GetVariable(\$value)['VariableChanged']);",
        ],
        'Variable.ChangedUnixTimestamp' => [
            'caption' => 'Variable (Changed, UnixTimestamp)',
            'add'     => 0,
            'edit'    => [
                'type' => 'SelectVariable'
            ],
            'data' => "return IPS_GetVariable(\$value)['VariableChanged'];",
        ],
        'Variable.Profile.Suffix' => [
            'caption' => 'Variable (Profile Suffix)',
            'add'     => 0,
            'edit'    => [
                'type' => 'SelectVariable'
            ],
            'data' => [
                '$variable = IPS_GetVariable($value);',
                "\$profile = \$variable['VariableCustomProfile'];",
                "if (\$profile == '') {",
                "\$profile = \$variable['VariableProfile'];",
                '}',
                "return IPS_GetVariableProfile(\$profile)['Suffix'];",
            ],
        ],
        'Variable.Profile.Digits' => [
            'caption' => 'Variable (Profile Digits)',
            'add'     => 0,
            'edit'    => [
                'type' => 'SelectVariable'
            ],
            'data' => [
                '$variable = IPS_GetVariable($value);',
                "\$profile = \$variable['VariableCustomProfile'];",
                "if (\$profile == '') {",
                "\$profile = \$variable['VariableProfile'];",
                '}',
                "return IPS_GetVariableProfile(\$profile)['Digits'];",
            ],
        ],
    ];
}