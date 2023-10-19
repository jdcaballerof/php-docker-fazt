<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
    <h1>About Page</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita atque porro suscipit, autem numquam laudantium minus iste voluptatibus ullam nostrum fuga distinctio quo, adipisci modi. Soluta aperiam dolorum dolore ullam.</p>
    <p><?php echo "Texto con PHP"?></p>

    <button onclick="goto('http://localhost:8000/')" >index</button>
    <button onclick="goto('http://localhost:8000/services.php')" >services</button>

    <script>
        const goto = (url) => window.location.href = url;
    </script>
</body>
</html>