<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman home</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }
        body {
            font: 16px/36px arial-narrow, arial, sans-serif; 
            overflow: hidden;
        }

        /* container */
        .container {
            background-color: #eaeaea;
            /* width: 100%; */
        }

        /* navbar */
        .navbar {
            background-color: #fff;
            display: flex;
            padding: 20px;
            justify-content: space-between;
            border-bottom: 1px solid #000;
        }
        .nav {
            list-style: none;
            display: flex;
            /* background-color: tomato; */
            width: 430px;
            justify-content: space-evenly;
        }
        .nav li a {
            text-decoration: none;
            color: #000;
        }

        /* main */
        .main {
            padding: 20px;
            background-color: #fff;
            position: relative;
            display: flex;
            justify-content: center;
        }
        .main h2 {
            text-align: center;
            position: absolute;
        }

        /* blog container */
        .blog-container {
            width: 80%;
            display: flex;
            justify-content: space-between;
            /* background-color: tomato; */
        }
        .blog {
            width: 40%;
            margin-top: 40px;
            padding: 20px;
            box-shadow: 0 0 2px #000;
            background-color: #fff;
            border-radius: 30px;
        }

        .footer {
	        padding: 10px;
	        background-color: #fff;
            border-top: 1px solid #000;
        }
        .footer .copy {
	        text-align: center;
	        font-size: 15px;
	        color: #000;
        }
    </style>
</head>
<body>
    <h1>page uji coba (skip)</h1>
    <div class="container">
        <div class="navbar">
            <h3>navbar</h3>
            <ul class="nav">
                <li><a href="/home">Home</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/about">About</a></li>
            </ul>
        </div>
        <div class="main">
            <h2>Blog</h2>
            <div class="blog-container">
                <div class="blog">
                    <h3>manfaat olahraga</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, iste! Libero in exercitationem asperiores odio sunt repudiandae aliquid, doloribus error praesentium, quidem animi excepturi ab, reiciendis inventore eius ea non?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quo fugiat cupiditate tenetur dolores mollitia nobis, a neque reprehenderit suscipit.</p>
                    <p>Lorem ipsum doit dolorem consequatur architecto quas laborum, ea quam, iusto, magni velit eum suscipit beatae?</p>
                </div>
                <div class="blog">
                    <h3>manfaat olahraga</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, iste! Libero in exercitationem asperiores odio sunt repudiandae aliquid, doloribus error praesentium, quidem animi excepturi ab, reiciendis inventore eius ea non?</p>
                </div>
            </div>
        </div>
        <div class="footer">
            <p class="copy">copright by ahay</p>
        </div>
    </div>
</body>
</html>