<?php

view('inc/head', $data);

?>




    <div id="menu" class="text-center">
        <h1>StackPosts</h1>
    </div>
    <div id="write" class="text-center">
<?php
view('form/message');
?><br>
<a  class="btn btn-primary" href="?random">Aleatório <i class="fas fa-external-link-alt"></i></a>

<?php
if ($message) {
    print '<p class="texto25">'.e($message['message'],false).'</p>';
    $href='/messages/'.$message['id'];
    print '<a href="'.$href.'">';
    print '<small>'.date('r', $message['created_at']).'</small></a>';
}
?>
    </div>