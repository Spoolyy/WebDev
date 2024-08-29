<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        offWhite: '#FAF9F6',
                        offBlack: '#313639',
                        dudaCyan: '#c1d6d9'
                    },
                    fontFamily: {
                        'Roboto': ['Roboto'],
                    }
                },
            },
        }
    </script>
</head>

<body>
    <div class="font-Roboto text-[24px] flex flex-col justify-center items-center h-screen w-full">
    <table class="border border-black">
        <?php
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=primoschema", "spoolyy", "pass1234");
            // Set the PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //var_dump($_POST);
            $select = $pdo->query("SELECT * FROM cars");
            foreach ($select as $row) {
                echo "<tr class='border border-black p-2'><td class='border border-black p-2'>" . $row["id"] . "</td>  <td class='border border-black p-2'>" . $row["make"] . "</td>  <td class='border border-black p-2'>" . $row["model"] . "</td>  <td class='border border-black p-2'>" . $row["modelspecific"] . "</td>  <td class='border border-black p-2'>" . $row["year"] . "</td>  <td class='border border-black p-2'>" . $row["horsepower"] . "</td>  <td class='border border-black p-2'>" . $row["retailprice"] . "</td></tr>";
            }
            echo "<br>";
        } catch (PDOException $e) {
            die("ERRORE: Impossibile stabilire una connessione al database");
        }
        ?>
    </table>
    </div>
</body>

</html>