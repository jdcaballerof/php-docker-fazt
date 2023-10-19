<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & Docker</title>
</head>
<body>
    <h1><?php echo "Services"?></h1>
    <p><?php echo "Texto con PHP"?></p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita atque porro suscipit, autem numquam laudantium minus iste voluptatibus ullam nostrum fuga distinctio quo, adipisci modi. Soluta aperiam dolorum dolore ullam.</p>
    <button onclick="goto('http://localhost:8000/')" >index</button>
    <button onclick="goto('http://localhost:8000/about.php')" >about</button>
    

    <script>
        const goto = (url) => window.location.href = url;
    </script>
</body>
</html>