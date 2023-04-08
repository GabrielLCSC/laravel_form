<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="login-box">
    <h2>Contactez-nous</h2>
        <form action="/contact" method="POST">
            @csrf
            <div class="user-box">
                <label for="name">Nom</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="user-box">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="user-box">
                <label for="message">Message</label>
                <textarea name="message" id="message" class="form-control"></textarea>
            </div>
            
            <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <button type="submit" class="btn">SUBMIT</button>
        </a>
            
        </form>
    </div>

</body>
</html>