<?php

declare(strict_types=1);
include_once __DIR__ . '/stubs/Validator.php';
class JSONExporterValidationTest extends TestCaseSymconValidation
{
    public function testValidateJSONExporter(): void
    {
        $this->validateLibrary(__DIR__ . '/..');
    }
    public function testValidateJSONExporterModule(): void
    {
        $this->validateModule(__DIR__ . '/../JSONExporter');
    }
}