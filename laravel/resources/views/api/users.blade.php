<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>
    $.ajax({
        type: "get",
        url: "http://laravel.org/api/user",
        // data: "data",
        // dataType: "dataType",
        success: function (response) {
            console.log(response);
            
        }
    });

</script>
</body>
</html>