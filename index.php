<?php
$website_title = 'PHP Blog';
require 'inc/header.php';
?>

  <div class="container">
    <div class="row">
      <div class="col-md-8 mb-5">
        <?php
        require_once ('ajax/mysql_connect.php');
        $sql = 'SELECT * FROM `articles` ORDER BY `date` DESC';
        $query = $pdo->query($sql);
        while ($row = $query->fetch(PDO::FETCH_OBJ)) {
          echo "<div class='post mb-4'>
                <h2>$row->title</h2>
                <p>$row->intro</p>
                <p><b>Author:</b> <mark>$row->author</mark></p>
                <a href='/news?id=$row->id' title='$row->title'>
                  <button class='btn btn-warning'>Read more</button>
                </a>
                <hr>
                </div>";
        }
        ?>
      </div>
      <?php require 'inc/aside.php'; ?>
    </div>
  </div>

<?php require 'inc/footer.php'; ?>