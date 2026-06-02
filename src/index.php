<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aserial Command</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background:linear-gradient(135deg, #1e3c72, #2a5298);
        }

        .container{
            background:white;
            padding:40px;
            border-radius:20px;
            box-shadow:0 10px 30px rgba(0,0,0,0.3);
            text-align:center;
            min-width:350px;
        }

        h1{
            color:#1e3c72;
            margin-bottom:30px;
        }

        .btn{
            display:block;
            text-decoration:none;
            color:white;
            background:#2a5298;
            padding:15px;
            margin:15px 0;
            border-radius:10px;
            font-size:18px;
            font-weight:bold;
            transition:0.3s;
        }

        .btn:hover{
            background:#1e3c72;
            transform:translateY(-3px);
            box-shadow:0 5px 15px rgba(0,0,0,0.2);
        }

        .subtitle{
            color:#666;
            margin-bottom:20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>🚀 Aserial Command</h1>

        <p class="subtitle">
            Pannello di controllo del sistema Aserial
        </p>

        <a class="btn" href="site_web/view_image.html">
            📷 Aserial Image
        </a>

        <a class="btn" href="site_web/button_move.html">
            🎮 Aserial Move Control
        </a>

    </div>

</body>
</html>