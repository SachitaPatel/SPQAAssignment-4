<html>
    <head>Existing Records</head>
<body>
<h1>Existing Records</h1>
    <div id="result">
        <table border="2px solid">
            <th>FirstName</th>
            <th>LastName</th>
            <th>Address</th>
            <th>City</th>
            <th>Province</th>
            <th>Postal Code</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Notes</th>
            <tr>
                <td><div id="firstNameResult"><?php echo $_GET["firstName"]; ?></div></td>
                <td><div id="lastNameResult"><?php echo $_GET["lastName"]; ?></div></td>
                <td><div id="addressResult"><?php echo $_GET["address"]; ?></div></td>
                <td><div id="cityResult"><?php echo $_GET["city"]; ?></div></td>
                <td><div id="provinceResult"><?php echo $_GET["province"]; ?></div></td>
                <td><div id="postalCodeResult"><?php echo $_GET["postalCode"]; ?></div></td>
                <td><div id="phoneNumberResult"><?php echo $_GET["phoneNumber"]; ?></div></td>
                <td><div id="emailResult"><?php echo $_GET["email"]; ?></div></td>
                <td><div id="notesResult"><?php echo $_GET["notes"]; ?></div></td>
            </tr>
        </table>
    </div>

</body>
</html>