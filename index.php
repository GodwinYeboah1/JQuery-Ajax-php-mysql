<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ajax</title>
</head>
<body>
    <label for="topic">Topic</label>
    <input type="text" id="topic">
    <br><br>
    <label for="">Details</label>
    <textarea  id="details"> </textarea>
    <br>
    <input type="submit" id="save" value='submit'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
        $(function(){
           $('#save').click(function(){
                var topic = $('#topic').val();
                var details = $('#details').val();
                $.ajax({
                    url:"insert.php",
                    method: 'POST',
                    data:{topic:topic, details:details},
                    dataType:"text",
                    success:function(data){
                        alert("Successfully inserted");
                    }
                });
           });
        });
    </script>
</body>
</html>