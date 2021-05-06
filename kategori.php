<?php
include 'inc.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>UTS NO 6</title>
    </head>
    <script type="text/javascript">
        function deleteData(cat_id) {
            var cfm = confirm("Apakah anda yakin akan menghapus data ini?");
            if (cfm) {
                window.location.href='kategori-delete.php?cat_id='+cat_id;
            }
        }
    </script>
    <body>
    <?php
    $api_categories_list = $api_url.'/categories/list.php';
    $json_list = @file_get_contents($api_categories_list);
    ?>
<center>
        <h1>UTS</h1>
</center><br><br><br><br>
    <center>
        <?php
    $info = isset($_GET['info']) ? $_GET['info'] : '';
    $msg = isset($_GET['msg']) ? $_GET['msg'] : '';
    if (!empty($info)) {
        echo 'Info: '.$info;
        echo '<br />Msg: '.$msg;
        echo '<br />';
    }
    ?>
    <p><a href="kategori-add.php">Buat Baru</a> | <a href="kategori.php">Mengulang</a></p>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Keterangan</th>
            <th>Dibuat</th>
            <th>Mengapdate</th>
            <th>Edit dan Delete</th>
        </tr>
        <?php
        $array = json_decode($json_list, true);
        $result = isset($array['result']) ? $array['result'] : array();
        $no = 0;
        foreach($result as $arr) {
            $no++;
            $link_edit = '<a href="kategori-edit.php?cat_id='.$arr['cat_id'].'">[Edit]</a>';
            $link_delete = '<a href="javascript:void:;" onclick="deleteData(\''.$arr['cat_id'].'\')">[Delete]</a>';
            echo '
            <tr>
                <td>'.$no.'</td>
                <td>'.$arr['cat_name'].'</td>
                <td>'.$arr['cat_description'].'</td>
                <td>'.date('d M Y H:i', strtotime($arr['cat_created'])).'</td>
                <td>'.date('d M Y H:i', strtotime($arr['cat_modified'])).'</td>
                <td>'.$link_edit.' '.$link_delete.'</td>
            </tr>
            ';
        }
        ?>
    </center>
    </table>
    </body>
</html>