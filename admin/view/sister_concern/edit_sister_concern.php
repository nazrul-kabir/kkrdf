<?php
include '../../../config/config.php';
$sister_concern_name = '';
$sister_concern_link = '';
$sister_concern_status = '';
$sister_concern_image = '';
$sister_concern_updated_by = getSession('admin_id');
$sister_concern_id = '';
if (isset($_GET['id'])) {
    $sister_concern_id = $_GET['id'];
}

if (isset($_POST['sister_concern_name'])) {
    extract($_POST);

    $sister_concern_name = validateInput($sister_concern_name);
    $sister_concern_status = validateInput($sister_concern_status);

    // check sister_concern priority and exist
    $sql_check = "SELECT * FROM sister_concern WHERE sister_concern_name='$sister_concern_name' AND sister_concern_id NOT IN (" . $sister_concern_id . ")";
    $result_check = mysqli_query($con, $sql_check);
    $count = mysqli_num_rows($result_check);
    if ($count > 0) {
        $error = "Sister Concern already exists in record";
    } else {
        if ($_FILES["sister_concern_image"]["tmp_name"] != '') {

            $sister_concern_image = basename($_FILES['sister_concern_image']['name']);
            $infoPath = pathinfo($sister_concern_image, PATHINFO_EXTENSION);
            $rename_image = 'PIMG_' . date("YmdHis") . '.' . $infoPath;

            if (!is_dir($config['IMAGE_UPLOAD_PATH'] . '/sister_concern_image/')) {
                mkdir($config['IMAGE_UPLOAD_PATH'] . '/sister_concern_image/', 0777, TRUE);
            }
            $image_target_path = $config['IMAGE_UPLOAD_PATH'] . '/sister_concern_image/' . $rename_image;

            $zebra = new Zebra_Image();
            $zebra->source_path = $_FILES["sister_concern_image"]["tmp_name"];
            $zebra->target_path = $config['IMAGE_UPLOAD_PATH'] . '/sister_concern_image/' . $rename_image;

            if (!$zebra->resize(400)) {
                zebraImageErrorHandaling($zebra->error);
            }
        }
        $custom_array = '';
        $custom_array .= 'sister_concern_name = "' . $sister_concern_name . '"';
        if ($_FILES["sister_concern_image"]["tmp_name"] != '') {
            $custom_array .= ',sister_concern_image = "' . $rename_image . '"';
        }
        $custom_array .= ',sister_concern_status = "' . $sister_concern_status . '"';
        $custom_array .= ',sister_concern_link = "' . $sister_concern_link . '"';
        $custom_array .= ',sister_concern_updated_by = "' . $sister_concern_updated_by . '"';

        $sql = "UPDATE sister_concern SET $custom_array WHERE sister_concern_id = $sister_concern_id";
        $result = mysqli_query($con, $sql);
        if ($result) {
            $success = 'Sister Concern information updated successfully';
            $link = "sister_concern_list.php?success=" . base64_encode($success);
            redirect($link);
        } else {
            if (DEBUG) {
                $error = 'result query failed for ' . mysqli_error($con);
            } else {
                $error = 'Something went wrong';
            }
        }
    }
}
$sqlImage = "SELECT sister_concern_image FROM sister_concern WHERE sister_concern_id= $sister_concern_id";
$resultImage = mysqli_query($con, $sqlImage);
if ($resultImage) {
    while ($ImageObj = mysqli_fetch_object($resultImage)) {
        $sister_concern_image = $ImageObj->sister_concern_image;
    }
} else {
    if (DEBUG) {
        $error = "resultImage error: " . mysqli_error($con);
    } else {
        $error = "resultImage query failed.";
    }
}
// getting sister_concern data
$sqlData = "SELECT * FROM sister_concern WHERE sister_concern_id = $sister_concern_id";
$resultData = mysqli_query($con, $sqlData);
if ($resultData) {
    $obj = mysqli_fetch_object($resultData);
    $sister_concern_name = $obj->sister_concern_name;
    $sister_concern_status = $obj->sister_concern_status;
    $sister_concern_link = $obj->sister_concern_link;
} else {
    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include basePath('admin/header_script.php'); ?>
        <style>
            .example-modal .modal {
                position: relative;
                top: auto;
                bottom: auto;
                right: auto;
                left: auto;
                display: block;
                z-index: 1;
            }
            .example-modal .modal {
                background: transparent!important;
            }
        </style>
    </head>
    <body class="skin-blue">
        <div class="wrapper">
            <?php include basePath('admin/header.php'); ?>

            <aside class="main-sidebar">
                <?php include basePath('admin/site_menu.php'); ?>
            </aside>
            <div class="content-wrapper">
                <section class="content-header">
                    <h1>Edit Sister Concern</h1>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-laptop"></i>&nbsp;General Settings</li>
                        <li class="active">Edit Sister Concern</li>
                    </ol>
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box box-primary">
                                <div class="example-modal">
                                    <div class="modal">
                                        <div class="modal-dialog">
                                            <?php include basePath('admin/message.php'); ?>
                                            <div class="modal-content">
                                                <form method="POST" id="sister_concernForm" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                        <input type="hidden" id="sister_concern_id" name="sister_concern_id" value="<?php echo $sister_concern_id; ?>" />
                                                        <div class="form-group">
                                                            <label for="sister_concern_name">Sister Concern Name &nbsp;&nbsp;<span style="color:red;">*</span></label>
                                                            <input type="text" class="form-control" id="sister_concern_name" name="sister_concern_name" value="<?php echo $sister_concern_name; ?>" required="required" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="sister_concern_link">Sister Concern Link &nbsp;&nbsp;<span style="color:red;">*</span>&nbsp;&nbsp;<span style="color: green;">example: http://www.abc.com</span></label>
                                                            <input type="text" class="form-control" id="sister_concern_link" name="sister_concern_link" value="<?php echo $sister_concern_link; ?>" required="required" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="sister_concern_image">Sister Concern Image&nbsp;&nbsp;<span style="color:red;">*</span></label>
                                                            <input type="file" name="sister_concern_image" id="sister_concern_image" />
                                                        </div>
                                                        <div>
                                                            <img src="../../../upload/sister_concern_image/<?php echo $sister_concern_image; ?>" id="show_image" style="height: 70px; width: 80px;" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="sister_concern_status">Sister Concern Status&nbsp;&nbsp;<span style="color:red;">*</label>
                                                            <select id="sister_concern_status" name="sister_concern_status" class="form-control" required="required" />
                                                            <option value="0">Select Status</option>
                                                            <option value="Active"
                                                            <?php
                                                            if ($sister_concern_status == 'Active') {
                                                                echo "selected";
                                                            }
                                                            ?>>Active
                                                            </option>
                                                            <option value="Inactive"<?php
                                                            if ($sister_concern_status == 'Inactive') {
                                                                echo "selected";
                                                            }
                                                            ?>>Inactive
                                                            </option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <p id="errorShow" style="display: none;background-color: #ea2e49;color: white; padding: 4px 4px 2px 4px;font-size: 12px;position: relative;">
                                                                Please fill up required (*) fields
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" id="btnSave" name="btnSave" class="btn btn-primary"><i class="fa fa-edit"></i> Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <?php include basePath('admin/footer.php'); ?>
        </div>
        <script type="text/javascript">
            $("#sister_concernActive").addClass("active");
            $("#sister_concernActive").parent().parent().addClass("treeview active");
            $("#sister_concernActive").parent().addClass("in");
        </script>
        <?php include basePath('admin/footer_script.php'); ?>
        <script>
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#show_image').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#sister_concern_image").change(function () {
                readURL(this);
            });
        </script>
        <script>
            $(document).ready(function () {
                $("#btnSave").click(function () {

                    var sister_concern_name = $("#sister_concern_name").val();
                    var sister_concern_link = $("#sister_concern_link").val();
                    var sister_concern_status = $("#sister_concern_status option:selected").val();
                    var status = 0;
                    if (sister_concern_name == '') {
                        status++;
                        $("#errorShow").show();
                        $("#sister_concern_name").css({
                            "border": "1px solid red"
                        });
                    }
                    if (sister_concern_link == '') {
                        status++;
                        $("#errorShow").show();
                        $("#sister_concern_link").css({
                            "border": "1px solid red"
                        });
                    }
                    if (sister_concern_status == '0') {
                        status++;
                        $("#errorShow").show();
                        $("#sister_concern_status").css({
                            "border": "1px solid red"
                        });
                    }
                    if (status == 0) {
                        $("#errorShow").hide();
                        $("#sister_concernForm").submit();
                    }
                });
            });
        </script>
    </body>
</html>