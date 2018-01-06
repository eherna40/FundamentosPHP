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
            <?php
                foreach($blogPosts as $blogPost){
                    echo '<div class="blog-post">';
                        echo '<h2>' . $blogPost['title'] . '</h2>';
                        echo '<p>January 2, 2000 by <a href="">Alex</a></p>';
                        echo '<div class="blog-post-image">';
                            echo '<img class="img-fluid" src="images/code.jpg" alt="code"/>';
                        echo '</div>';
                        echo '<div class="blog-post-content">';
                            echo '<p>' . $blogPost['content'] . '</p>';
                        echo '</div>';
                    echo '</div>';
                }
            ?>
                
            </div>

            <div class="col-md-4">Consectetur sit tempor laboris pariatur elit sit cupidatat eiusmod aliqua officia deserunt officia quis non.</div>
            </div>
            

        <div class="row">
            <div class="col-md-12">
                <footer>
                    <a href="admin/">Admin Panel</a>                
                </footer>
            </div>
        </div>
        </div>
    </div>    
</body>
</html>