<!DOCTYPE html>
<html>
<head>
    <title>Report Illegal Activities</title>
</head>
<body>
    <h1>Report Illegal Activities</h1>
    <form action="submit.php" method="post">
        <label for="type">Type of Incident:</label><br>
        <select id="type" name="type">
            <option value="child_labor">Child Labor</option>
            <option value="child_marriage">Child Marriage</option>
            <option value="human_trafficking">Human Trafficking</option>
            <!-- Add more options as needed -->
        </select><br><br>

        <label for="location">Location:</label><br>
        <input type="text" id="location" name="location" required><br><br>

        <label for="datetime">Date and Time of Incident:</label><br>
        <input type="datetime-local" id="datetime" name="datetime" required><br><br>

        <label for="description">Description of Incident:</label><br>
        <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>

        <label for="evidence">Upload Supporting Evidence:</label><br>
        <input type="file" id="evidence" name="evidence"><br><br>

        <input type="submit" value="Submit Report">
    </form>
</body>
</html>