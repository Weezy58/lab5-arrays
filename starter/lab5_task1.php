<?php
/**
 * ICS 2371 — Lab 5: Arrays and Array Operations
 * Task 1: Array Declaration, Initialisation & Traversal [6 marks]
 *
 * @author     [WAYNE NAUM]
 * @student    [ENE212-0085/2023]
 * @lab        Lab 5 of 14
 * @unit       ICS 2371
 * @date       [23 april 2026]
 */

// ══════════════════════════════════════════════════════════════
// EXERCISE A — Indexed Array: Sensor Readings
// ══════════════════════════════════════════════════════════════
// Declare the array
$temperatures = [36.5, 37.1, 38.4, 36.9, 39.2, 37.8];

// Print the array
print_r($temperatures);

echo "\n\n";

// Access 3rd and 5th elements (index 2 and 4)
echo "3rd element: " . $temperatures[2] . "°C\n";
echo "5th element: " . $temperatures[4] . "°C\n";

echo "\n";

// Traverse using for loop
for ($i = 0; $i < count($temperatures); $i++) {
    echo "Reading [$i]: " . $temperatures[$i] . "°C\n";
}

echo "\n";

// Traverse using foreach
foreach ($temperatures as $index => $value) {
    echo "Reading [$index]: " . $value . "°C\n";
}

?>



// ══════════════════════════════════════════════════════════════
// EXERCISE B — Associative Array: Student Record
// ══════════════════════════════════════════════════════════════
•	// Declare an associative array (key => value pairs)
•	$student = [
•	    "name" => "WAYNE NAUM",
•	    "reg_number" => "ENE212-0085/2023",
•	    "course" => "Electrical & Electronics Engineering",
•	    "year" => 3,
•	    "gpa" => 3.7
•	];
•	
•	// print_r() shows the full array structure (good for seeing everything at once)
•	print_r($student);
•	
•	echo "\n\n";
•	
•	// Loop through each item in the array
•	// $key = label (like "name")
•	// $value = actual data (like "Alexander Sila")
•	foreach ($student as $key => $value) {
•	    // "." joins text together in PHP
•	    echo $key . ": " . $value . "\n";
•	}
•	




// ══════════════════════════════════════════════════════════════
// EXERCISE C — Array Modification
// ══════════════════════════════════════════════════════════════
<?php
// Initialize the fruits array and print initial count
$fruits = ["mango", "banana", "avocado"];
echo "Initial count: " . count($fruits) . "\n";

// Step 1: Add "pawpaw" using array_push() and print modifications
array_push($fruits, "pawpaw");
print_r($fruits);
echo "Count after array_push: " . count($fruits) . "\n";

// Step 2: Add "guava" using [] syntax and print modifications
$fruits[] = "guava";
print_r($fruits);
echo "Count after [] syntax: " . count($fruits) . "\n";

// Step 3: Remove the last element ("guava") using array_pop() and print modifications
$removed_element = array_pop($fruits);
print_r($fruits);
echo "Count after array_pop: " . count($fruits) . "\n";

// Step 4: Remove "banana" (index 1) using unset() and print modifications
unset($fruits[1]);
print_r($fruits);
echo "Count after unset: " . count($fruits) . "\n";
?>



// ══════════════════════════════════════════════════════════════
// EXERCISE D — Nested Array
// ══════════════════════════════════════════════════════════════
<?php
// Declare a nested associative array containing student lab results
$lab_results = [
    "student_1" => [
        "name" => "John Doe",
        "cat_total" => 25,
        "exam" => 60
    ],
    "student_2" => [
        "name" => "Jane Smith",
        "cat_total" => 28,
        "exam" => 65
    ],
    "student_3" => [
        "name" => "Alex Munene",
        "cat_total" => 22,
        "exam" => 55
    ]
];

// Traverse the outer array to access each student's data
foreach ($lab_results as $student_id => $details) {
    echo "Results for " . strtoupper($student_id) . ":\n";
    
    // Traverse the inner associative array to print specific attributes
    foreach ($details as $key => $value) {
        // Formating the key for better readability (e.g., replacing underscores with spaces)
        $label = ucwords(str_replace("_", " ", $key));
        echo "- $label: $value\n";
    }
    
    echo "--------------------------\n";
}
?>
