<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verify</title>
</head>
<body>
    <h1 align="center">Webboard TheToy</h1>
    <hr>
     <center><?php echo "ต้องการดูกระทู้หมายเลข " .$_GET["id"];?>  <br>
     
     <?php
        if($_GET['id']%2==0){
            echo "เป็นกระทู้หมายเลขคู่";
        }else{
            echo "เป็นกระทู้หมายเลขคี่";
        }
     ?>
    </center>
    <div class="card text-dark bg-white border-success">
        <div class="card-header bg-success text-white">แสดงความคิดเห็น</div>
        <div class="card-body">
            <form action="post_save.php" method="post">
            <input type="hidden" name="post_id" value="<?= $_GET['id']; ?>">
                <div class="row mb-3 justify-content-center">
                    <div class="col-lg-10">
                        <textarea name="comment" class="form-control" rows="0"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <center>
                            <button type="submit" class="btn btn-success btn-sm text-white">
                            <i class="bi bi-box-arrow-up-right me-1"></i> ส่งข้อความ</button>
                        </center>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br>
    <br>
    <center><a href="index.php">กลับไปหน้าหลัก</a></center>
</body>
</html>