<!DOCTYPE html>
<html>
<head>
    <title>PHP Form insertion into SQL</title>
    <link href="insert_form.css" rel="stylesheet">
</head>

<body>
    <div class="maindiv">
        <div class="form_div">
            <div class="title">
                <h2>Insert Data In Database Using PHP.</h2>
            </div>
            
        <center>
            <form action="insert.php" method="post">
<!-- Method can be set as POST for hiding values in URL-->
                <h2>Form</h2>
                    <label>Name:</label>
                        <input class="input" name="name" type="text" value=""> <br> <br>
                    <label>Email:</label>
                        <input class="input" name="email" type="text" value=""> <br><br>
                    <label>Contact:</label>
                        <input class="input" name="contact" type="text" value=""><br><br>

                    <input class="submit" name="submit" type="submit" value="Insert">
            </form>
        </center>
        </div>
    </div>
</body>
</html>
