<?php
$server = 'localhost';
$username = 'root';
$password = '';
$db = 'cs_project';

$conn = mysqli_connect($server, $username, $password, $db);
if(!$conn){
    die ('connection failed:' . mysqli_connect_error());
}

$sql = "SELECT * FROM medium_article";
$result = mysqli_query($conn, $sql);
if(!$result){
    echo "No Query".mysqli_connect_error($conn);
}
while($row = mysqli_fetch_array($result)){
    $keyword = " ";
    if($row['article_title']!=null){
        $words=explode(" ",$row['article_title']);
        foreach($words as $word){
            $keyword.=metaphone($word)." ";
        }
    }
    if($row['article_content']!=null){
        $words=explode(" ",$row['article_content']);
        foreach($words as $word){
            $keyword.=metaphone($word)." ";
        }
    }
    $id = $row['id'];
    $sql2 = "UPDATED medium_article SET indexing='$keyword' WHERE id='$id'";
    $result2 =mysqli_query($conn, $sql2);
    if(!$result2){
        echo mysqli_error($conn);
    }
}

if(isset($_POST['query'])){
    echo $_POST['query']."<br>";
    $query = $_POST['query'];
}

?>