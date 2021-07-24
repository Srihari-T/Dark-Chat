<html>

<head>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        body {
            background: #121212;
            display: flex;
            flex-direction: column;
        }

        #menu {
            word-spacing: 150px;
            font-size: 20px;
            height: 40px;
            color: black;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            column-gap: 10px;
            padding-right: 20px;
            margin: 15px 0;
        }

        #menu a {
            text-decoration: none;
            color: white;
            padding: 10px;
            transition: .5s;
        }

        #menu a.active {
            color: black;
            background: white;
        }

        #menu a:hover {
            color: black;
            background: white;
        }

        .welcome-text {
            color: white;
            align-self: center;
            padding-top: 20px;
        }

        #play h1 a{
            color: black;
            text-decoration: none;
        }

        .welcome-text{
            text-align: center;
            color: yellow;
            text-transform: uppercase;
        }
    </style>
    <script src="./jquery-3.4.1.js"></script>
</head>

<body>
    <div id="menu">
        <a href="friends.php">FRIENDS
        </a>
        <a href="addfriend.php">ADDFRIENDS
        <a href="logout.php">LOGOUT
        </a>
        <a href="groups.php">GROUPS
        </a>
        <a href="gamefriends.php">PLAY
        </a>
        <a href="deleteaccount.php">DELETE ACCOUNT</a>
    </div>
    <button id="play">
        <h1><a href="tic-tac-toe.html">PLAY GAME</a></h1>
    </button>
    <?php
    if (isset($_COOKIE["user"])) {
        echo "<h1 class='welcome-text'>welcome   " . $_COOKIE["user"] . "!!</h1>";
    } else {
        header("Location:welcome.php");
    }
    ?>

<script type="text/javascript">
        $(document).ready(function(){
            $("#menu a").on("click",function(){
                $(this).addClass("active");
                $(this).prev().removeClass("active");
            });
        });
    </script>
</body>

</html>