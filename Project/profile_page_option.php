<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="human-button.css">
    <title>Profile Page</title>
</head>
<body>
    <div class="container">
        <button id="profileButton">
            <img src="pngwing.com.png" alt="Human Figure">
        </button>
    </div>
    <script>
        document.getElementById("profileButton").addEventListener("click", function() {
            window.location.href = "prof-edit.php";
        });
    </script>
</body>
</html>