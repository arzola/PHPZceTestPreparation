<?php

// Set counter
$i = 0;
// Increase counter within the scope
// of the function
$closure = function () use ($i){ $i++; };
// Run the function
$closure();
// The global count hasn't changed
echo $i; // Returns 0

// Reset count
$i = 0;
// Increase counter within the scope
// of the function but pass it as a reference
$closure = function () use (&$i){ $i++; };
// Run the function
$closure();
// The global count has increased
echo $i; // Returns 1