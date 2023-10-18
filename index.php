<?php
    require __DIR__ . "/vendor/autoload.php";
    require __DIR__ . "/user.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            * {
                margin: 0; padding: 0; box-sizing: border-box;
            }

            body {
                min-height: 100vh;
                display: flex; justify-content: center; align-items: center;
                background-color: rgb(238, 241, 241);
                font-family: Verdana, sans-serif;
                font-size: 12px;
            }

            form {
                background-color: #fff;
                padding: 20px;
            }

            form div label, form div input { display: block; }

            form div:first-child { display: none; }

            form div.visible { display: block; }

            form div:first-child p {
                padding: 10px;
                margin-bottom: 10px;
                background-color: #84f495;
                color: #222;
            }

            form div label {
                text-transform: uppercase;
                font-weight: 700;
                font-size: 0.5rem;
                color: #606060;
                margin-top: 6px;
                margin-bottom: 3px;
            }

            form div input {
                border: 1px solid #ccc;
                outline: none;
                border-radius: none;
                padding: 3px 5px;
                width:300px;
            }

            form div input.error { border: 1px solid #f19e9e; }

            form span {
                display: none;
                color: #f19e9e;
                font-size: 0.6rem;
            }

            form span.error { display: block; }

            form button {
                display: block;
                margin-top: 10px;
                width: 100%;
                padding: 5px 15px;
                border: 1px solid #ccc;
            }
            
        </style>
    </head>
    <body>
        <form
            action=""
            method="POST"
        >
            <div
                class="<?= $formSubmittedSuccessfully ? "visible" : "" ?>"
            >
                <p>Form submitted successfully!</p>
            </div>
            <div>
                <label for="first_name">First Name:</label>
                <input
                    type="text"
                    id="first_name"
                    name="first_name"
                    placeholder="First name"
                    class="<?= array_key_exists("first_name", $errorMessages) ? "error" : "" ?>"
                >
                <span
                    class="<?= array_key_exists("first_name", $errorMessages) ? "error" : "" ?>"
                >
                    <?= array_key_exists("first_name", $errorMessages) ? $errorMessages["first_name"] : "" ?>
                </span>
            </div>
            <div>
                <label for="last_name">Last Name:</label>
                <input
                    type="text"
                    id="last_name"
                    name="last_name"
                    placeholder="Last name"
                    class="<?= array_key_exists("last_name", $errorMessages) ? "error" : "" ?>"
                >
                <span
                    class="<?= array_key_exists("last_name", $errorMessages) ? "error" : "" ?>"
                >
                    <?= array_key_exists("last_name", $errorMessages) ? $errorMessages["last_name"] : "" ?>
                </span>
            </div>
            <div>
                <label for="email">Email:</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="user@example.com"
                    class="<?= array_key_exists("email", $errorMessages) ? "error" : "" ?>"
                >
                <span
                    class="<?= array_key_exists("email", $errorMessages) ? "error" : "" ?>"
                >
                    <?= array_key_exists("email", $errorMessages) ? $errorMessages["email"] : "" ?>
                </span>
            </div>
            <div>
                <label for="password">Password:</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="secret"
                    class="<?= array_key_exists("password", $errorMessages) ? "error" : "" ?>"
                >
                <span
                    class="<?= array_key_exists("password", $errorMessages) ? "error" : "" ?>"
                >
                    <?= array_key_exists("password", $errorMessages) ? $errorMessages["password"] : "" ?>
                </span>
            </div>
            <div>
                <label for="password_confirmation">Confirm Password:</label>
                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    placeholder="secret"
                    class="<?= array_key_exists("password_confirmation", $errorMessages) ? "error" : "" ?>"
                >
                <span
                    class="<?= array_key_exists("password_confirmation", $errorMessages) ? "error" : "" ?>"
                >
                    <?= array_key_exists("password_confirmation", $errorMessages) ? $errorMessages["password_confirmation"] : "" ?>
                </span>
            </div>
            
            <button type="submit">Submit</button>

        </form>
    </body>
</html>