<?php include "include/header.php";  ?>


<?php     
    if($_GET['id']){
        $detay = $db->prepare("SELECT * FROM calısmalar WHERE id =: gelenid");
        $detay->execute(array(
            "gelenid" => $_GET["id"]

        ));
        $row = $detay->fetch(PDO::FETCH_OBJ);

    }

?>
       
<div class="container">
<div class=row> 
<div class="col-md-6">

<div class="card">

<div class="card-header">
<h3> <?php echo $row->baslik ?></h3>
</div>
<div class="card-body">
<img src="" class="img-fluid" alt="">
<hr>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi saepe nostrum reiciendis nobis labore obcaecati non ut iusto corrupti harum asperiores qui vero eaque, eligendi et ullam, libero id deserunt!</p>

</div>
</div>
</div>


</div>



</div>

















        <?php include "include/footer.php";?>