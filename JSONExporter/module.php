<?php

declare(strict_types=1);

    include_once __DIR__ . '/../libs/WebHookModule.php';
    include_once __DIR__ . '/fields.php';

    class JSONExporter extends WebHookModule
    {
        use JSONExporterFields;

        public function __construct($InstanceID)
        {
            parent::__construct($InstanceID, 'json/' . $InstanceID);
        }

        public function Create()
        {
            //Never delete this line!
            parent::Create();

            $this->RegisterPropertyString('ExportStructure', '[]');
            $this->RegisterPropertyString('ExportedVariables', '[]');
        }

        public function ApplyChanges()
        {
            //Never delete this line!
            parent::ApplyChanges();
        }

        public function GetConfigurationForm()
        {
            $data = json_decode(file_get_contents(__DIR__ . '/form.json'), true);

            foreach ($this->fields as $key => $field) {
                $data['elements'][0]['popup']['items'][1]['columns'][1]['edit']['options'][] = [
                    'caption' => $this->Translate($field['caption']),
                    'value'   => $key,
                ];
            }

            if (count(json_decode($this->ReadPropertyString('ExportStructure'), true)) != 0) {
                $data['elements'][1]['visible'] = true;
                $data['elements'][0]['popup']['items'][0]['visible'] = true;
            }

            foreach (json_decode($this->ReadPropertyString('ExportStructure'), true) as $structure) {
                $data['elements'][1]['columns'][] = [
                    'caption' => $structure['Ident'],
                    'name'    => $structure['Ident'],
                    'width'   => '250px',
                    'add'     => $this->fields[$structure['Value']]['add'],
                    'edit'    => $this->fields[$structure['Value']]['edit'],
                ];
            }
            return json_encode($data);
        }

        /**
         * This function will be called by the hook control. Visibility should be protected!
         */
        protected function ProcessHookData()
        {
            header('Content-Type: application/json; charset=utf-8');

            $map = [];
            foreach (json_decode($this->ReadPropertyString('ExportStructure'), true) as $structure) {
                $map[$structure['Ident']] = $structure['Value'];
            }

            $json = [];
            foreach (json_decode($this->ReadPropertyString('ExportedVariables'), true) as $structure) {
                $data = [];
                foreach ($structure as $key => $value) {
                    $code = $this->fields[$map[$key]]['data'];
                    if (is_array($code)) {
                        $code = implode(PHP_EOL, $code);
                    }
                    $data[$key] = eval($code);
                }
                $json[] = $data;
            }
            echo json_encode($json, JSON_PRETTY_PRINT);
        }
    }
