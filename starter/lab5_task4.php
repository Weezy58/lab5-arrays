<?php
/**
 * ICS 2371 — Lab 5: Arrays and Array Operations
 * Task 4: Engineering Analysis Using Arrays & Loops [6 marks]
 *
 * IMPORTANT: Pseudocode AND flowchart required in PDF report
 * before writing code.
 *
 * @author     [wayne naum]
 * @student    [ENE212-0085/2023]
 * @lab        Lab 5 of 14
 * @unit       ICS 2371
 * @date       [Date completed]
 */

// ── Scenario: Bridge Load Sensor Analysis ────────────────────
// A bridge has 8 load sensors recording weight in tonnes.
// Analyse the readings to support a structural safety report.

$sensor_readings = [12.4, 8.7, 15.2, 19.8, 7.3, 14.6, 11.9, 16.3];
$sensor_labels   = ["S1", "S2", "S3", "S4", "S5", "S6", "S7", "S8"];
$max_safe_load   = 18.0; // tonnes — safety threshold

// ── STEP 1: Basic statistics ─────────────────────────────────
$total = 0;
$max = $sensor_readings[0];
$min = $sensor_readings[0];
$max_sensor = $sensor_labels[0];
$min_sensor = $sensor_labels[0];

for ($i = 0; $i < count($sensor_readings); $i++) {

    $total += $sensor_readings[$i];

    // track maximum
    if ($sensor_readings[$i] > $max) {
        $max = $sensor_readings[$i];
        $max_sensor = $sensor_labels[$i];
    }

    // track minimum
    if ($sensor_readings[$i] < $min) {
        $min = $sensor_readings[$i];
        $min_sensor = $sensor_labels[$i];
    }
}

$mean = $total / count($sensor_readings);

// output
echo "<p><b>STEP 1: BASIC STATISTICS</b></p>";
echo "Total: $total <br>";
echo "Mean: $mean <br>";
echo "Max: $max ($max_sensor) <br>";
echo "Min: $min ($min_sensor) <br>";


// ── STEP 2: Above-average count ──────────────────────────────
$above_avg = [];
$count = 0;

for ($i = 0; $i < count($sensor_readings); $i++) {

    if ($sensor_readings[$i] > $mean) {
        $above_avg[] = $sensor_labels[$i];
        $count++;
    }
}

echo "<p><b>STEP 2: ABOVE AVERAGE</b></p>";
echo "$count of 8 sensors recorded above-average load <br>";
echo "Sensors above average: " . implode(", ", $above_avg) . "<br>";

// ── STEP 3: Safety threshold check ───────────────────────────
echo "<p><b>STEP 3: SAFETY REPORT</b></p>";
echo "Sensor | Reading | Status <br>";

for ($i = 0; $i < count($sensor_readings); $i++) {

    if ($sensor_readings[$i] > $max_safe_load) {
        $status = "UNSAFE";
    } else {
        $status = "SAFE";
    }

    echo $sensor_labels[$i] . " | " . $sensor_readings[$i] . " | " . $status . "<br>";
}



// ── STEP 4: Sorted safety report ─────────────────────────────
// Bubble sort (descending) + keep labels aligned
for ($i = 0; $i < count($sensor_readings); $i++) {

    for ($j = 0; $j < count($sensor_readings) - $i - 1; $j++) {

        if ($sensor_readings[$j] < $sensor_readings[$j + 1]) {

            // swap readings
            $temp = $sensor_readings[$j];
            $sensor_readings[$j] = $sensor_readings[$j + 1];
            $sensor_readings[$j + 1] = $temp;

            // swap labels (important: keeps data linked)
            $temp_label = $sensor_labels[$j];
            $sensor_labels[$j] = $sensor_labels[$j + 1];
            $sensor_labels[$j + 1] = $temp_label;
        }
    }
}

echo "<p><b>STEP 4: SORTED SAFETY REPORT (DESC)</b></p>";
echo "Sensor | Reading | Status <br>";

for ($i = 0; $i < count($sensor_readings); $i++) {

    if ($sensor_readings[$i] > $max_safe_load) {
        $status = "UNSAFE";
    } else {
        $status = "SAFE";
    }

    echo $sensor_labels[$i] . " | " . $sensor_readings[$i] . " | " . $status . "<br>";
}

?>
