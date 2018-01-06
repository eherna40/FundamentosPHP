<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  require_once '../vendor/autoload.php';
  include_once '../config.php';

  $baseDir = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
  $baseUrl = 'http://' . $_SERVER['HTTP_HOST'] . $baseDir;
  define('BASE_URL', $baseDir);

  $route = $_GET['route'] ?? '/';

  function render($fileName, $params = []) {
    ob_start(); // Va a omitir cualquier salida que tenga la app en ese momento, en realidad la guarda en un buffer hasta que termine de procesar toda la info
    extract($params); //toma un array y los convierte en variables publicas
    include $fileName;
    return ob_get_clean(); 
  }

  use Phroute\Phroute\RouteCollector;
  $router = new RouteCollector();



  
  $router->get('/', function() use ($pdo){

    // --PDO ES UNA VARIABLE DEL SCOOPE GLOBAL Y NO SE PUEDE USAR EN UNA FUNCION ANONIMA ALMENOS QUE USEMOS EL USE
    $query = $pdo->prepare( 'SELECT * FROM blog_posts ORDER BY id DESC');
    $query->execute();
    $blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);

// -- RENDERIZAMOS LA WEB INDEX CON LOS DATOS DE blogPost
    return render('../views/index.php', ['blogPosts' => $blogPosts]);
    
  });

  $router->get('/admin', function() {

    return render('../views/admin/index.php');
    
  });

    $router->get('/admin/posts', function() use ($pdo){
    
    $query = $pdo->prepare( 'SELECT * FROM blog_posts ORDER BY id DESC');
    $query->execute();
    $blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);

    return render('../views/admin/posts.php', ['blogPosts' => $blogPosts]);
    
  });

    $router->get('/admin/posts/create', function() {

    return render('../views/admin/insert-post.php');
    
  });
  $router->post('/admin/posts/create', function() use ($pdo){
    
    $result = false;
    $sql = 'INSERT INTO blog_posts (title, content) VALUES (:title, :content)';
    $query = $pdo->prepare($sql);
    $result = $query->execute([
        'title' => $_POST['title'],
        'content' => $_POST['content']
        ]);

    return render('../views/admin/insert-post.php', ['result' => $result]);
    
  });



  $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

  $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route);
      
  // Print out the value returned from the dispatched function
  echo $response;
?>