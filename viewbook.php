<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>View Book</title>
</head>
<body>
    <h2>Book Detail</h2>

    <p>Id: <?php echo htmlspecialchars($books->id); ?></p>
    <p>Title: <?php echo htmlspecialchars($books->title); ?></p>
    <p>Author: <?php echo htmlspecialchars($books->author); ?></p>
    <p>Description: <?php echo htmlspecialchars($books->description); ?></p>

    <p><a href="index.php">Back to book list</a></p>
</body>
</html>