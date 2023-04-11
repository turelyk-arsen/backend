<?php
include_once "mysqlConnect.php";
// include_once "../style/css/headStyle.css";

function generation_head_menu($mysqli)
{
    $sql = "SELECT * FROM topic";
    // $resSQL = $mysqli -> query($sql);
    $resSQL = mysqli_query($mysqli, $sql);
?>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">Main page</a>
            <ul class="navbar-nav mr-auto">
                <?php
                // $rowTopic = $resSQL -> fetch_assoc()
                while ($rowTopic = mysqli_fetch_assoc($resSQL)) {
                    echo
                    '<li class="nav-item">
                        <a class="nav-link" href="./topic.php?id_topic=' . $rowTopic["id"] . '">' . $rowTopic['name'] . '</a>
                        </li>';
                }

                if (isset($_COOKIE['user_name']))
                    echo '<li class="nav-item text-success"> You are register user with name : ' . $_COOKIE['user_name'] . '</li>';


                ?>
            </ul>
        </nav>
    </header>
    <?php
}

function generation_posts_index($mysqli)
{
    $sql = "SELECT * FROM `articles`";
    // $res = $mysqli -> query($sql);
    $res = mysqli_query($mysqli, $sql);
    // $res -> num_rows > 0

    if (mysqli_num_rows($res) > 0) {
        // $resArticle = $res -> fetch_assoc()
        while ($resArticle = mysqli_fetch_assoc($res)) {
    ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="post.php?id_article=<?= $resArticle['id'] ?>"><?= $resArticle['title'] ?></a>
                    </h5>
                    <p class="card-text"><?= mb_substr($resArticle['text'], 0, 158, 'UTF-8') . '...' ?></p>
                </div>
            </div>
        <?php
        }
    } else {
        echo "No articles";
    }
}

function generation_posts_topic($mysqli, $id_topic)
{
    $sql = "SELECT * FROM `articles` WHERE `id_topic` = $id_topic";
    $res = $mysqli->query($sql);

    if ($res->num_rows > 0) {
        while ($resArticle = $res->fetch_assoc()) {
        ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><a href="post.php?id_article=<?= $resArticle['id'] ?>"><?= $resArticle['title'] ?></a></h5>
                    <p class="card-text"><?= mb_substr($resArticle['text'], 0, 158, 'UTF-8') ?></p>
                </div>
            </div>
        <?php
        }
    } else {
        echo "No articles";
    }
}

function generation_post($mysqli, $id_article)
{
    $sql = "SELECT * FROM `articles` WHERE `id` = '$id_article'";
    $res = $mysqli->query($sql);

    if ($res->num_rows === 1) {
        $resPost = $res->fetch_assoc() ?>
        <h1><?= $resPost['title'] ?></h1>
        <p><?= $resPost['text'] ?></p>
        <p>Publication date: <?= substr($resPost['date'], 0, 11) ?></p>
        <?php
    }
}
$id_comment = $_REQUEST["id_comment"];

function generation_comment($mysqli, $id_article)
{
    $sql = "SELECT * FROM `comments` WHERE `id_article` = $id_article";
    $resSQL = $mysqli->query($sql);

    if ($resSQL->num_rows > 0) {
        while ($resComment = $resSQL->fetch_assoc()) {
            $_REQUEST["id_comment"] = $resComment['id'];
            $id_comment = $_REQUEST["id_comment"];

        ?> 
            <div class="comment">
                <p><b><?= $resComment['comment'] ?></b></p>
                <p>Time: <?= substr($resComment['date'], 0, 11)  ?></p>
                
                <form method='post'>
                    <input type="hidden" name="id_comment" value="<?php echo $id_comment ?>">
                    <input type="submit" name="editBtn" value='Edit comment'>

                </form>
            </div>
            <hr>
        <?php
        }
    } else {
        ?>
        <p>There are no comments</p>
<?php
    }
}

function edit_comment($mysqli, $id_comment) {
    $sql = "SELECT * FROM `comments` WHERE `id` = $id_comment";
    $resSQL = $mysqli->query($sql);
    $resComment = $resSQL->fetch_assoc();
    return $resComment['comment']; 
}

if (isset($_POST['editBtn'])) {
    if (isset($_COOKIE['user_name'])) {
        edit_comment($mysqli, $_REQUEST["id_comment"]);
    } else {
        echo 'If you want to send your comments, you must LOGIN! ';
    }
}


// print_r($id_comment) ;

?>