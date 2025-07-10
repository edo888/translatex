<?php
// usage example: php make_tsv.php devtest_english_1-100.txt tx_paid_en_es_1-100.txt tx_paid_en_es_1-30.csv 30
$file1 = $argv[1];
$file2 = $argv[2];
$output = $argv[3];
$lines = $argv[4];

// Read lines from both files into arrays
$lines1 = file($file1, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$lines2 = file($file2, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

if (count($lines1) !== count($lines2)) {
    die("Both files must have exactly same number of lines.");
}

// Open output file for writing
$out = fopen($output, 'w');

// Loop through lines and write to output file
for ($i = 0; $i < $lines; $i++) {
    // Create row as array, tab-separated
    $row = [$lines1[$i], $lines2[$i]];
    fputcsv($out, $row, "\t"); // "\t" makes it tab-separated
}

// Close output file
fclose($out);

echo "Done! Output written to $output\n";