<?php
require_once ('ajax/mysql_connect.php');
$sql = 'SELECT * FROM `articles` WHERE `id` = :id';
$id = $_GET['id'];
$query = $pdo->prepare($sql);
$query->execute(['id' => $id]);

$article = $query->fetch(PDO::FETCH_OBJ);

$website_title = $article->title;
require 'inc/header.php';
?>

  <div class="container">
    <div class="row">
      <div class="col-md-8 mb-5">
        <div class="jumbotron">
          <h1 class="mb-3"><?=$article->title?></h1>
          <p><b>Author:</b> <mark><?=$article->author?></mark></p>
          <?php
            $date = date('d.m.Y', $article->date);
            /*$date = date('d ', $article->date);
            $array = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
            $date .= $array[date('n', $article->date) - 1];*/
          ?>
          <p><b>Date:</b> <mark><?=$date?></mark></p>
          <?php
          echo '<p>' . nl2br($article->text) . '</p>';
          ?>
        </div>
        <h3 class="mb-4">Comments</h3>

        <form action="news?id=<?=$_GET['id']?>" method="post" id="messForm">
          <p>
            <label for="name">Your name</label>
            <input type="text" value="<?=$_COOKIE['log']?>" name="name" id="name" class="form-control">
          </p>
          <p>
            <label for="mess">Your message</label>
            <textarea name="mess" id="mess" class="form-control"></textarea>
          </p>

          <button type="submit" id="mess_send" name="submit" class="btn btn-success mt-3 mb-4 w-100">Submit</button>
        </form>
        <?php
        if ($_POST['name'] != '' && $_POST['mess'] != '') {
          $name = trim(filter_var($_POST['name'], FILTER_SANITIZE_STRING));
          $mess = trim($_POST['mess']);

          $sql = 'INSERT INTO comments(name, mess, article_id) VALUES(?, ?, ?)';
          $query = $pdo->prepare($sql);
          $query->execute([$name, $mess, $_GET['id']]);
        }

        $sql = 'SELECT * FROM `comments` WHERE `article_id` = :id ORDER BY `id` DESC';
        $query = $pdo->prepare($sql);
        $query->execute(['id' => $_GET['id']]);
        $comments = $query->fetchAll(PDO::FETCH_OBJ);

        foreach ($comments as $comment) {
          echo "<div class='alert alert-info mb-3'>
            <h4 class='mb-3'>$comment->name</h4>
            <p class='mb-0'>" . nl2br($comment->mess) . "</p>
           </div>";
        }
        ?>

      </div>
      <?php require 'inc/aside.php'; ?>
    </div>
  </div>

<?php require 'inc/footer.php'; ?>