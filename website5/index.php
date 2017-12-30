<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.min.css">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Search Users</h1>
        <form>
            Search User: <input
                type="text"
                name=""
                id=""
                class="form-control"
                onkeyup="showSuggestions(this.value)">
        </form>
        <p>Suggestions: <span id="output" style="font-weight:bold"></span></p>
    </div>
    <script>
        function showSuggestions(str){
           if(str.length == 0) {
               document.getElementById('output').innerHTML = '';
           } else {
               axios.get(`suggest.php?q=${str}`).then(res => {
                  document.getElementById('output').innerHTML = res.data;
               });
           }
        }
    </script>
</body>
</html>