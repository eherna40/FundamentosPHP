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
                <h1>Blog Title</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                      <h2>Posts</h2>
          <a class ="btn btn-primary" href="<?php echo BASE_URL; ?>admin/posts/create">New Post</a>
              <table class="table">
                <tr>
                  <th>Title</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                <?php
                    foreach($blogPosts as $blogPost){
                      echo '<tr>';
                      echo '<td>' . $blogPost['title'] . '</td>';
                      echo '<td>Edit</td>';
                      echo '<td>Delete</td>';
                      echo '</tr>';
                    }
                ?>
              </table>

                
            </div>

            <div class="col-md-4">Sidebar</div>

            </div>
            

        <div class="row">
            <div class="col-md-12">
                <footer>
                    <a href="<?php echo BASE_URL; ?>admin/">Admin Panel</a>                
                </footer>
            </div>
        </div>
        </div>
    </div>    
</body>
</html>