
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
$hakkımda = $db->prepare("SELECT * from hakkımda " );
$hakkımda->execute();
$row = $anasayfa->fetch(PDO::FETCH_OBJ);


?>
    <!-- Main content -->
    <section class="content">
        <div class="col-md-12">
            <div class="row">
                <div class="box">
                <div class="box-header">
                Hakkımda Ayarlarını Düzenle
                </div>
                <div class="box-body">
                    <form action="" class="form" method="post">
                    <div class="form-group">
                        <label for="">Resim</label>
                    <input type="file" name="resim">  </div>
                    <div class="form-group">
                        <label for="">Açıklama</label>
                    <input type="text " class="form-control" name="yazi1" value="<?php echo $row->hakkımda_yazı; ?>">
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
     
    ?>

    <!-- /.content -->
<?php include 'include/footer.php'; ?>
