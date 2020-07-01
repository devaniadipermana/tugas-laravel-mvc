<!DOCTYPE html>
<html>

<head>
    <title>Form Sign Up</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h4>Sign Up Form</h4>
    <form>
        <label for="fn">First name:</label><br><br>
        <input type="text" id="fn" name="fn"><br><br>
        <label for="ln">Last name:</label><br><br>
        <input type="text" id="ln" name="ln"><br><br>
    </form>
    <label>Gender:</label><br><br>
    <input type="radio" name="gender" value="0">Laki-Laki<br>
    <input type="radio" name="gender" value="1">Perempuan<br>
    <input type="radio" name="gender" value="2">Other<br>
    <label>Nationality:</label><br><br>
    <select>
        <option>Indonesian</option>
        <option>Singapore</option>
        <option>Thailand</option>
    </select><br><br>
    <label>Language Spoken:</label><br><br>
    <input type="checkbox" name="lspoke" value="0">Bahasa Indonesia<br>
    <input type="checkbox" name="lspoke" value="1">English<br>
    <input type="checkbox" name="lspoke" value="2">Other<br>
    <form action="wel" method="POST">
        @csrf
        <br>
        <label for="bio">Bio:</label><br><br>
        <textarea cols="20" rows="7"></textarea><br>
        <input type="submit" value="Sign Up">

    </form>



</body>


</html>