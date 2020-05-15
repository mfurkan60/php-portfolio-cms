
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
//execute datas
$anasayfa = $db->prepare("SELECT * from calısmalar");
$anasayfa->execute();
$row = $anasayfa->fetch(PDO::FETCH_OBJ);


?>
    <!-- Main content -->
    <section class="content">
        <div class="col-md-12">
            <div class="row">
                <div class="box">
                <div class="box-header">
                Çalışmalarım  Ayarlarını Düzenle
                </div>
                <div class="box-body">
                    <form action="" class="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Baslık</label>
                    <input type="text " class="form-control" name="name" value="<?php echo $row->baslik; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Resim</label>
                      <input type="file"  name="resim"/>
                    </div>
                    <div class="form-group">
                        <label for=""> Çalışmalar içerik</label>

                        <textarea name="aciklama" id="portfolio " class="form-control"  > <?php echo $row->baslik ?>
                        </textarea>
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
    <section class="content">
        <div class="col-md-12">
            <div class="row">
                <div class="box">
                <div class="box-header">
               Çalışmalarım
                </div>
                <div class="box-body">
                    
                </div>
                
                
                </div>
            </div>
        </div>

    </section>
    
    

    <?php 
    //update portfolio
    if(isset($_POST['guncelle'])){
        $resimadi= $_FILES["resim"]["name"];
        $resimyolu = "../assets/upload/".$resimadi;
        if(move_uploaded_file($_FILES["resim"]["tmp_name"],$resimyolu)){
             $ekle = $db->prepare("INSERT INTO  calısmalar  SET 
                        baslik =: baslik,
                        resim=:resim,
                        aciklama=:aciklama

             ");
             $ekle->execute(array(
                                "baslik " => $_POST["name"],
                                "resim " => $resimadi,
                                "aciklama" => $_POST["aciklama"]
             ));

             if($ekle){
                 echo " basarıl ";
             }
             else{
                 echo "basarzıız";
             }

        }
    }
    
    ?>

    <!-- /.content -->
<?php include 'include/footer.php'; ?>
