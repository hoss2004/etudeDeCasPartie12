<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="back_css.css" />
</head>

<body>
    <div>
        <h1>Add A Travel Offer</h1>
        <form id="form" method="POST" action="../../model/TravelOffer.php">
            <label for="title">Title:</label> <br />
            <input type="text" id="title" name="title" /> <br />
            <span id="title_error"></span><br />

            <label for="des">Destination:</label> <br />
            <input type="text" id="des" name="destination" /><br />
            <span id="des_error"></span><br />

            <label for="departure">Departure Date:</label><br />
            <input type="date" id="departure" name="date" /><br />
            <span id="departure_error"></span><br />

            <label for="return">Return Date:</label><br />
            <input type="date" id="return" name="return" /><br />
            <span id="return_error"></span><br />

            <label for="price">Price:</label><br />
            <input type="text" id="price" name="price" /><br />
            <span id="price_error"></span><br />

            <label for="availibility">Availibility:</label><br />
            <input type="checkbox" id="availibility" name="availibility" /><br />

            <label for="categorie">Category:</label><br />
            <select name="categorie" id="categorie">
                <option value="Aventure">Aventure</option>
                <option value="plage">Plage</option>
                <option value="Culture">Culture</option>
                <option value="randonnée">Randonnée</option>
            </select><br />

            <input type="submit" value="Add Offer" />
        </form>
    </div>
    <script src="backjs2.js"></script>
</body>

</html>