<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>FORM HTML</h1>

    <label for="nama">Name :</label>
    <input type="text" id="nama"><br>
    <br>

    <label for="">Gender :</label>
    <input type="radio" id="man" >
    <label for="man">Man</label>
    <input type="radio" id="woman">
    <label for="woman">Woman</label><br>
    <br>

    <label for="address">Address</label>
    <input type="text"id="address"><br>
    <br>

    <label for="country">Country</label>
    <select name="country" id="country">
        <option value="1">Indonesia</option>
        <option value="2">Malaysia</option>
        <option value="3">Singapore</option>
        <option value="4">Timor Leste</option>
        <option value="5">Brunei</option>
        <option value="6">Australia</option>
    </select><br>
    <br>

    <label for="email">Email :</label>
    <input type="text" id="email"><br>
    <br>

    <label for="fileToUpload">Photo :</label>
    <input type="file" name="fileToUpload" id="fileToUpload" >
    <input type="submit" value="  Image" name="submit"><br>
<br>
    <label for="coment">Comment</label>
    <textarea name="coment" id="" cols="30" rows="10"></textarea>>
</body>
</html>