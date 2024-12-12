<?php 
  // Read data from JSON file
  $jsonFile = 'database.json';
  $registeredData = [];
  if (file_exists($jsonFile)) {
    $registeredData = json_decode(file_get_contents($jsonFile), true);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Users</title>
    <style>
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        img {
            width: 100px; /* Set a fixed width for images */
            height: auto; /* Maintain aspect ratio */
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Registered Users</h2>
    <div style="text-align: center;">
        <a href="index.php">Back to Registration</a>
    </div>
    <?php if (empty($registeredData)): ?>
        <p style="text-align: center;">No registered users found.</p>
    <?php else: ?>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Image</th>
            </tr>
            <?php foreach ($registeredData as $user): ?>
                <tr>
                    <td><?php echo htmlspecialchars($user['name']); ?></td>
                    <td><?php echo htmlspecialchars($user['email']); ?></td>
                    <td>
                        <img src="<?php echo htmlspecialchars($user['image']); ?>" alt="User Image">
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>
</html>