<?php
include 'database.php'; // Use your existing connection

// Fetch all bookings
$sql = "SELECT * FROM bookings";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Bookings - Galactic Voyages</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>View Bookings</h1>
        <p>See all upcoming space adventures!</p>
        <a href="index.php" class="btn">Back to Home</a>
    </header>

    <section id="booking-list">
        <h2>All Bookings</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Destination</th>
                <th>Travel Date</th>
                <th>Passengers</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['destination']}</td>
                            <td>{$row['travel_date']}</td>
                            <td>{$row['passengers']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No bookings found</td></tr>";
            }
            $conn->close();
            ?>
        </table>
    </section>
</body>
</html>
