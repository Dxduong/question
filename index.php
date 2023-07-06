<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý câu hỏi</title>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
    <div class="contener">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Câu hỏi</th>
                    <th scope="col">Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <div class="col-sm-12 text-right">
                    <button id="btnquestion" class="btn btn-success">+</button>
                </div>
                <?php include('connect.php') ?>
                <?php
                $sql = $conn->prepare("SELECT * FROM tbl_question");
                $sql->execute();
                $index = 1;
                while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
                    echo '<tr id =' . $result['id'] . '>';
                    echo    '<th scope="row">' . ($index++) . '</th>';
                    echo    '<td class="text-primary">' . $result['question'] . '</td>';
                    echo    '<td>';
                    echo        '<input type="button" class="btn btn-xs btn-info" value="Xem" name="view">&nbsp';
                    echo        '<input type="button" class="btn btn-xs btn-warning" value="Sửa" name="update">&nbsp';
                    echo        '<input type="button" class="btn btn-xs btn-danger" value="Xóa" name="delete">';
                    echo    '</td>';
                    echo '</tr>';
                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>
<?php include('mdlQuestion.php') ?>
<script type="text/javascript">
    $('#btnquestion').click(function() {
        $('#modalQuestion').modal();
    });
    $('input[name=view]').click(function() {
        var bid = this.id;
        var trid = $(this).closest('tr').attr('id');
        $.ajax({
            url:'detail.php',
            type:'get',
            data:{
                id:trid
            },
            success:function(data){
                console.log(data);
                $('#modalQuestion').modal();
            }
        })
    });
</script>