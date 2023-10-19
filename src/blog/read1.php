<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read 1</title>
</head>
<body>
    <h1>Read 1</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates explicabo, sequi porro hic, fuga ipsam quo voluptatum amet culpa nulla sapiente id laboriosam reprehenderit! Rem consequuntur optio quae quibusdam consectetur.</p>
    
    <button onclick="goto('http://localhost:8000/')" >Index</button>
    <button onclick="goto('http://localhost:8000/blog/read1.php')" >read1</button>
    <button onclick="goto('http://localhost:8000/blog/read2.php')" >read2</button>
    <button onclick="goto('http://localhost:8000/blog/read3.php')" >read3</button>

    <script>
        const goto = (url) => window.location.href = url;
    </script>
</body>
</html>