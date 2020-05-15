
<?php include 'include/header.php'; ?>
    <section class="content-header">
        <h1>
            Dashboard
            <small>Version 2.0</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
<?php
$anasayfa = $db->prepare("SELECT * from anasayfa");
$anasayfa->execute();
$row = $anasayfa->fetch(PDO::FETCH_OBJ);


?>
    <!-- Main content -->
    <section class="content">
        <div class="col-md-12">
            <div class="row">
                <div class="box">
                <div class="box-header">
                Anasayfa Ayarlarını Düzenle
                </div>
                <div class="box-body">
                    <form action="" class="form" method="post">
                    <div class="form-group">
                        <label for="">Name</label>
                    <input type="text " class="form-control" name="name" value="<?php echo $row->name; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Yazı 1</label>
                    <input type="text " class="form-control" name="yazi1" value="<?php echo $row->yazi1; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Yazı 2</label>
                    <input type="text " class="form-control" name="yazi2" value="<?php echo $row->yazi2; ?>">
                    </div>
                    
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="guncelle">Güncelle</button>
                    </div>
                    </form>
                
                </div>
                
                
                </div>
            </div>
        </div>

    </section>
    

    <?php 
    //update datas
    if(isset($_POST['guncelle'])){
           $guncelle = $db->prepare("UPDATE anasayfa SET name=:name yazi1=:yazi1,
            yazi2=:yazi2 ");
            $guncelle->execute([
                "name" =>$_POST['name'],
                "yazi1" =>$_POST["yazi1"],
                "yazi2" =>$_POST["yazi2"]
            ]);
            if($guncelle){
                echo "<div class='col-md-6 offset-md-1'><div class='alert alert-success' role='alert'>
               Güncelleme Başarılı
              </div></div>";
              header("Refresh:2, url=anasayfa.php");
            }
            else{
                echo "<div class='col-md-6 offset-md-1'><div class='alert alert-danger' role='alert'>
                Bir hata oluştu
               </div></div>";
            }



    }
    
    ?>

    <!-- /.content -->
<?php include 'include/footer.php'; ?>
