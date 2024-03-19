<head>
    <title>Ninja Pizza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        li{
            list-style-type: none;
        }
        .brand{
            background-color: #cbb09c;
            border: none;
        }
        .navbar-brand{
            color: #cbb09c;
            font-size: 30px;
        }
        .footer-brand{
            color: #cbb09c;
            font-size: 15px;
            text-decoration: none;
        }
        form{
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }
        .pizza{
            margin: 40px auto -70px;
            display: block;
            position: relative;
            top: -70px;
        }
    </style>

</head>
<body class = "bg-light">
    <nav class="bg-white navbar">
        <div class="container">
            <a href="index.php" class="navbar-brand">Ninja Pizza</a>
            <ul id="nav-mobile" class="float-right">
                <li><a href="add.php" class="btn btn-success brand">ADD A PIZZA</a></li>
            </ul>
        </div>
    </nav>