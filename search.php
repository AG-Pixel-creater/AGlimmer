<?php
if (isset($_GET['query'])) {
    $query = htmlspecialchars($_GET['query']);
    echo "<h1>Search Results for: " . $query . "</h1>";
    // Simulate search results for demonstration
    echo "<p>Result 1 for " . $query . "</p>";
    echo "<p>Result 2 for " . $query . "</p>";
    echo "<p>Result 3 for " . $query . "</p>";
} else {
    echo "<h1>No query provided.</h1>";
}
?>
