<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <H1>Add Customer</H1>
        <form action= "/customer/create" method = "POST">
            <label for="">Name</label>
            <input type="text" name = "name">
            <br>
            <br>
            <label for="">phone</label>
            <input type="text" name="phone">
            <br>
            <br>
            <button class = "submit-btn" type = "submit">submit</button>
        </form>
    </div>
    

</body>
</html>