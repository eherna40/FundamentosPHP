

<DOCTYPE html>
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
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <h1>New Post</h1>
                <a class="btn btn-light" href="<?php echo BASE_URL; ?>admin/posts">Back</a>
                <?php
                  if(isset($result) && $result) {
                    echo'<div class="alert alert-success">Post Saved</div>';
                  }
                ?>
                <form action="" method="post">
                  <div class="from-group">
                  <label for="inputTitle">Title</label>
                  <input type="text" name="title" id="inputTitle" class="form-control">
                  </div>
                  <textarea class="form-control"name="content" id="inputContent" rows="5"></textarea>
                  <br>
                  <input type="submit" value="save" class="btn btn-primary">
                </form>


                
            </div>

            <div class="col-md-4">Sidebar</div>
            </div>
            

        <div class="row">
            <div class="col-md-12">
                <footer>
                    <a href="<?php echo BASE_URL; ?>admin/index.php">Admin Panel</a>                
                </footer>
            </div>
        </div>
        </div>
    </div>    
</body>
</html>