<?php 
include 'class_record.php';
?>

<?php

if (isset($targetFileName)) {
    require 'vendor/autoload.php'; // Include the Composer autoloader

    use PhpOffice\PhpSpreadsheet\IOFactory;

    try {
        $spreadsheet = IOFactory::load($targetFileName);
        $worksheet = $spreadsheet->getActiveSheet();

        echo '<h2>Uploaded Excel File Content</h2>';
        echo '<table border="1">';
        foreach ($worksheet->getRowIterator() as $row) {
            echo '<tr>';
            foreach ($row->getCellIterator() as $cell) {
                echo '<td>' . $cell->getValue() . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

?>
