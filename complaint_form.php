<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Complaint</title>
<style>
    *{
            background-image:url("https://www.humanium.org/en/wp-content/uploads/2020/01/shutterstock_648575884-scaled.jpg");
            background-attachment: fixed;
            background-position:auto;
            background-repeat:no-repeat;
            background-size:cover;
            align-items:center;
    }
    body {
        align-items:center;
        justify-content:center; 
        display:flex;
        height:150%;
    }
    .field{
        color:red;
        border:solid;
        display:box;
        align-items:center;
        /* display:box; */
        justify-content:center;
        font: inherit;
        font-family:Roboto;
        font-size:20px;
        color:white;
        background-color:white;
    }
    input[type=submit]{
    color: white;
    background-color:red;
    font-size:12px;
    display: flex;
    width: auto;
    padding: 12px;
    border: 1px solid;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 3px;
    margin-bottom: 16px;
    resize: vertical;
    height:20px;
    }
    ::placeholder {
    color: black; /* Change the color */
    font-size: 1.5em; /* Adjust the font size */
    
    }
    input{
        width: 300px;
        height: 20px;
    }

    /* .myform{
        align-items:center;
        display:box;
        justify-content:center;
        text-align:center;
    } */
    </style>
</head>
<body>
    
   
    <fieldset class="field">
        <legend> <h2>Submit Complaint</h2></legend>
    <form class="myform" action="submit_complaint.php" method="post" enctype="multipart/form-data">
        <label for="type">Type of Complaint:</label>
        <select name="type" id="type">
            <option value="-------">select</option>
            <option value="child_labor">Child Labor</option>
            <option value="child_marriage">Child Marriage</option>
            <option value="human_trafficking">Human Trafficking</option>
        </select><br><br>
        <label for="state">State:</label>
        <input type="text" name="state" id="state" placeholder="Please select state" required><br><br>
        <label for="district">District:</label>
        <input type="text" name="district" id="district" placeholder="Please select district" required><br><br>
        <label for="pincode">Pincode:</label>
        <input type="text" name="pincode" id="pincode" placeholder="Please enter pincode" required><br><br>
        <label for="evidence">Evidence:</label>
        <input type="file" name="evidence" id="evidence" accept="image/*"><br><br>
		
        <label for="description">Description:</label><br>
        <textarea name="description" id="description" rows="4" cols="50" placeholder="Please give us some discription about the incident"></textarea><br><br>
        <input type="submit" value="Submit Complaint" id="button">
    </form>
</fieldset>
</body>
</html>