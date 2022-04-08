<?php

trait JSONExporterFields {
    private $fields = [
        "" => [
            "caption" => "Custom",
            "add" => "",
            "edit" => [
                "type" => "ValidationTextBox"
            ],
            "data" => "return \$value;",
        ],
        "Variable.Value" => [
            "caption" => "Variable (Value)",
            "add" => 0,
            "edit" => [
                "type" => "SelectVariable"
            ],
            "data" => "return GetValue(\$value);",
        ],
        "Variable.ValueFormatted" => [
            "caption" => "Variable (Value Formatted)",
            "add" => 0,
            "edit" => [
                "type" => "SelectVariable"
            ],
            "data" => "return GetValueFormatted(\$value);",
        ],
        "Variable.Profile.Suffix" => [
            "caption" => "Variable (Profile Suffix)",
            "add" => 0,
            "edit" => [
                "type" => "SelectVariable"
            ],
            "data" => "",
        ],
        "Variable.Profile.Digits" => [
            "caption" => "Variable (Profile Digits)",
            "add" => 0,
            "edit" => [
                "type" => "SelectVariable"
            ],
            "data" => "",
        ],
    ];
}