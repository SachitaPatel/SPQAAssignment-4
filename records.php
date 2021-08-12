<html>
    <head><title>Existing Records</title></head>
    <script src="contacts.js"></script>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/search.css">
<body>
<h1>Existing Records</h1>
    <div>
        <ul>
            <li>
                <a class="home_link" href="home.html">Home</a>
            </li>
        </ul>
    </div>
    <div>
        <input id="searchBar" onkeyup="search_contacts()" type="text" placeholder="Search..">

        <ul id='list'>
            <li class="contacts"><?php echo $_GET["firstName"]; ?></li>
            <li class="contacts">Shree</li>
            <li class="contacts">Rohan</li>
            <li class="contacts">Rahul</li>
            <li class="contacts">Krisha</li>
        </ul>
            
    </div>
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
            <th>Actions</th>
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
                <td><a href="javascript:deleteContact()" title="Click on delete">Delete</a></td>
            </tr>
        </table>
    </div>

</body>
</html>