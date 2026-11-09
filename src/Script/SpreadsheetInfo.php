<?php
namespace Starbug\Importer\Spreadsheet\Script;

use PhpOffice\PhpSpreadsheet\IOFactory;

class SpreadsheetInfo {
  public function __invoke($argv) {
    $path = array_shift($argv);
    $type = IOFactory::identify($path);
    $reader = IOFactory::createReader($type);
    $data = $reader->listWorksheetInfo($path);
    echo json_encode($data, JSON_PRETTY_PRINT);
  }
}
