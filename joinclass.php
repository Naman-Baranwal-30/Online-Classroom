<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Classroom</title>
</head>

<body>

    <body background="https://www.leadquizzes.com/wp-content/uploads/2019/02/New-blog-graphic.jpg">

        
        <style>
            body {
                background-repeat: no-repeat;
                background-size: cover;
            }

            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #000066;
                position: relative;
                top: 0;
                width: 100%;
            }

            li {
                float: left;
            }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 34px 16px;
                text-decoration: none;
                font-family: 'Numans', sans-serif;
            }

            li a:hover:not(.active) {
                background-color: #660066;
            }

            div {
                height: 150p;
                width: 20p;
                background-color: black;
                background-position: absolute;
                margin: 10px;
            }

            .glow-on-hover {
                width: 80px;
                height: 30px;
                border: none;
                outline: none;
                color: #ffffff;
                background: #660033;
                cursor: pointer;
                position: relative;
                z-index: 0;
                border-radius: 10px;
                font-size: 15px;
                font-weight: bold;
            }

            .glow-on-hover:before {
                content: '';
                background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
                position: absolute;
                top: -5px;
                left: -5px;
                background-size: 400%;
                z-index: -1;
                filter: blur(5px);
                width: calc(100% + 8px);
                height: calc(100% + 8px);
                animation: glowing 20s linear infinite;
                opacity: 0;
                transition: opacity .3s ease-in-out;
                border-radius: 10px;
            }

            .glow-on-hover:active {
                color: #660066
            }

            .glow-on-hover:active:after {
                background: transparent;
            }

            .glow-on-hover:hover:before {
                opacity: 1;
            }

            .glow-on-hover:after {
                z-index: -1;
                content: '';
                position: absolute;
                width: 100%;
                height: 100%;
                background: ff0000;
                left: 0;
                top: 0;
                border-radius: 10px;
            }

            .font1 {
                font-family: 'Numans', sans-serif;
                font-weight: bold;
                color: #ff0000
            }

            .font2 {
                font-family: 'Numans', sans-serif;
                font-weight: bold;
                color: #ffffff;

            }

            .question {
                font-family: 'Numans', sans-serif;
                font-weight: bold;
                color: #ffffff;

            }

            .choicess,
            .center {
                font-family: 'Numans', sans-serif;
                font-weight: bold;
                color: #ffffff;
                background-color: #000000;
            }


            @keyframes glowing {
                0% {
                    background-position: 0 0;
                }

                50% {
                    background-position: 400% 0;
                }

                100% {
                    background-position: 0 0;
                }
            }

            p {
                text-align: center;
                font-size: 24px;
            }

            .button {
                border: none;
                color: white;
                padding: 16px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                transition-duration: 0.4s;
                cursor: pointer;

            }

            .button1 {
                background-color: white;
                color: black;
                border: 2px solid #4CAF50;
            }

            .button1:hover {
                background-color: #4CAF50;
                color: white;
            }

            .wrapper {
                text-align: center;
            }

            .button {
                position: absolute;
                top: 60%;
            }
        </style>
        <ul>
            <li><a href="joinclass.php" class="active">Join Class</a><li>
                  <a href="classshelf.php">Class Shelf</a><li>
                  <a href="grades.php">Grades</a><li>
                 
                      
                   
            <li>
          </ul>
        <p><br /><br /><br /><br /><br /><br />
        <form action="joinclass0.php" method="post">
            <p>Enter code: <input type="text" name="ccode"></p><br /><br />
            </p>
            <br /><br />
            <div class="wrapper">
                <input type="submit" class="button button1" name="submit1" value="Submit">
            </div>
        </form>
    </body>

</html>