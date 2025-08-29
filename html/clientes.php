<?php
    include("../inc/dbinfo.inc");

    echo "<html>";
    echo "<head><title>Clientes</title></head>";
    echo "<body>";
    echo "<h1>Clientes</h1>";

    // Connect to MySQL server
    $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
    if (!$connection) {
        die("<p>Unable to connect to database server.</p>");
    }

    // Select database
    $db = mysqli_select_db($connection, DB_DATABASE);
    if (!$db) {
        die("<p>Unable to select database.</p>");
    }

    // Fetch clients
    $result = mysqli_query($connection, "SELECT * FROM clientes");
    if (!$result) {
        die("<p>Error fetching clients.</p>");
    }

    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nome</th><th>Email</th></tr>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
        echo "<td>" . htmlspecialchars($row['nome']) . "</td>";
        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    mysqli_close($connection);

    echo "</body>";
    echo "</html>";
?>
