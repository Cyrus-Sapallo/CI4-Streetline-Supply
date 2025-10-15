<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streetline Supply Store | Sign Up</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #000;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
        }

        header h1 {
            color: #fff;
        }

        nav a {
            color: #fff;
            margin: 0 15px;
            text-decoration: none;
        }

        nav a:hover {
            color: #E34234;
        }

        .signup-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }

        .signup-box {
            background-color: #fff;
            color: #000;
            border-radius: 12px;
            padding: 40px;
            width: 400px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        .signup-box h2 {
            margin-bottom: 10px;
            color: #111;
        }

        .signup-box p {
            font-size: 0.9rem;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 12px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        button {
            width: 100%;
            background-color: #E34234;
            color: #fff;
            border: none;
            padding: 12px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
        }

        button:hover {
            background-color: #c33225;
        }

        footer {
            background-color: #0b1120;
            text-align: center;
            padding: 20px;
            color: #bbb;
            font-size: 0.9rem;
        }

        footer a {
            color: #E34234;
            text-decoration: none;
            margin: 0 10px;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <header>
        <h1>Streetline Supply Store</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/roadmap">Road Map</a>
        </nav>
    </header>

    <div class="signup-container">
        <div class="signup-box">
            <h2>Create Account</h2>
            <p>Sign up for your <strong>Streetline Supply</strong> account.</p>
            <form action="<?= base_url('users/signup') ?>" method="post">
                <input type="text" name="fullname" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email Address" required>
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                <button type="submit">Sign Up</button>
            </form>
            <p style="margin-top:15px;">
                Already have an account?
                <a href="/login" style="color:#E34234;">Sign In</a>
            </p>
        </div>
    </div>

    <footer>
        STREETLINE SUPPLY CO. © 2024. ALL RIGHTS RESERVED.<br>
        <a href="/services">GEAR SERVICES</a> |
        <a href="/moodboard">THE MOOD BOARD</a> |
        <a href="/roadmap">ROAD MAP</a>
    </footer>

</body>

</html>