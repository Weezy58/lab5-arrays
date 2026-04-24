<?php
/**
 * ICS 2371 — Lab 5: Arrays and Array Operations
 * Task 2: Built-in Array Functions [6 marks]
 *
 * @author     [WAYNE NAUM]
 * @student    [ENE212-0085/2023]
 * @lab        Lab 5 of 14
 * @unit       ICS 2371
 * @date       [23 april 2026]
 */

// Working dataset — use this array for ALL exercises below
$scores = [72, 45, 88, 91, 63, 77, 55, 88, 49, 95, 63, 70];

// ══════════════════════════════════════════════════════════════
// EXERCISE A — Counting & Summing
// ═════════════════════════════════════════════════════════════
/**
 * Exercise A — Counting & Summing
 * Basic calculations for total count, sum, and average.
 */
$scores = [85, 91, 72, 88, 91, 65, 98, 77];

// count() — total number of scores
$count = count($scores);
echo "Total number of scores: " . $count . "\n";

// array_sum() — total marks
$total_marks = array_sum($scores);
echo "Total marks: " . $total_marks . "\n";

// Average to 2 decimal places
$average = $total_marks / $count;
echo "Average score: " . number_format($average, 2) . "\n";
?>



// ══════════════════════════════════════════════════════════════
// EXERCISE B — Sorting
// ══════════════════════════════════════════════════════════════
<?php
/**
 * Exercise B — Sorting
 * Demonstrating index modification and persistence.
 */

// sort() ascending
sort($scores);
echo "Ascending: " . implode(", ", $scores) . "\n";

// rsort() descending
rsort($scores);
echo "Descending: " . implode(", ", $scores) . "\n";

// Sort ascending then reverse
sort($scores);
$reversed = array_reverse($scores);
echo "Ascending then reversed: " . implode(", ", $reversed) . "\n";

/**
 * Why sort() modifies the original array:
 * sort() uses "pass by reference," meaning it works directly on the memory 
 * address of the variable rather than creating a copy. This saves memory.
 */
?>




// ══════════════════════════════════════════════════════════════
// EXERCISE C — Searching
// ══════════════════════════════════════════════════════════════
<?php
/**
 * Exercise C — Searching
 * Locating values and handling boolean/integer returns.
 */

// in_array() checks
echo "Contains 88: " . (in_array(88, $scores) ? "true" : "false") . "\n";
echo "Contains 100: " . (in_array(100, $scores) ? "true" : "false") . "\n";

// array_search() for index
$index = array_search(91, $scores);
echo "Index of 91: " . $index . "\n";

// Safe handling of false
$search_val = 100;
$result = array_search($search_val, $scores);
if ($result !== false) {
    echo "Found $search_val at index: " . $result . "\n";
} else {
    echo "Value $search_val not found.\n";
}
?>



// ══════════════════════════════════════════════════════════════
// EXERCISE D — Transformation Functions
// ══════════════════════════════════════════════════════════════
<?php
/**
 * Exercise D — Transformation
 * Changing the structure and presentation of array data.
 */

// array_unique() — remove duplicates
$unique = array_unique($scores);
echo "Unique scores: " . implode(", ", $unique) . "\n";

/**
 * array_slice($scores, 2, 5) parameters:
 * 1. $scores: The source array.
 * 2. 2: Starting index (offset).
 * 3. 5: Number of elements to extract (length).
 */
$sliced = array_slice($scores, 2, 5);
echo "Sliced (2, 5): " . implode(", ", $sliced) . "\n";

// implode() — convert to string
echo "Imploded string: " . implode(", ", $scores) . "\n";

// array_reverse() — reverse order
$final_reverse = array_reverse($scores);
echo "Reversed: " . implode(", ", $final_reverse) . "\n";
?>
