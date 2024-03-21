<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Complaint</title>
</head>
<body>
    <h2>Submit Complaint</h2>
    <form action="submit_complaint.php" method="post">
        <label for="type">Type of Complaint:</label>
        <select name="type" id="type">
            <option value="child_labor">Child Labor</option>
            <option value="child_marriage">Child Marriage</option>
            <option value="human_trafficking">Human Trafficking</option>
        </select><br><br>
        <label for="state">State:</label>
        <input type="text" name="state" id="state" required><br><br>
        <label for="district">District:</label>
        <input type="text" name="district" id="district" required><br><br>
        <label for="pincode">Pincode:</label>
        <input type="text" name="pincode" id="pincode" required><br><br>
        <label for="evidence">Evidence:</label>
        <input type="file" name="evidence" id="evidence" accept="image/*"><br><br>
        <label for="description">Description:</label><br>
        <textarea name="description" id="description" rows="4" cols="50"></textarea><br><br>
        <input type="submit" value="Submit Complaint">
    </form>
</body>
</html>