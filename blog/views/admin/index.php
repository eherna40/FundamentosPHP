
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <title>Blog PHP</title>
</head>
<body>
    <div class="container">
    
        <div class="row">
            <div class="col-md-12">
                <h1>Manage Post</h1>
            </div>
        </div>
        <div class="row">

            <div class="col-md-8">
            <h1>Admin Panel</h1>
              <ul>
                <li>
                  <a href="<?php echo BASE_URL; ?>admin/posts">Manage Posts</a>
                </li>
              </ul>              
            </div>

            <div class="col-md-4">Sidebar</div>
            </div>
            

        <div class="row">
            <div class="col-md-12">
                <footer>
                    <a href="<?php echo BASE_URL; ?>">Home</a>                
                </footer>
            </div>
        </div>
        </div>
    </div>    
</body>
</html>