<?php
session_start();
require_once("../db.php");

if (isset($_POST['submit'])) {
    $subject = $_POST['subject'];
    $notice = $_POST['input'];
    $audience = $_POST['audience'];

    $folder_dir = "../uploads/resume/";
    $file = "";

    if (isset($_FILES['resume']) && !empty($_FILES['resume']['name']) && $_FILES['resume']['error'] === UPLOAD_ERR_OK) {
        $base = basename($_FILES['resume']['name']);
        $resumeFileType = pathinfo($base, PATHINFO_EXTENSION);
        $allowed = ['pdf', 'doc', 'docx'];

        if (!in_array(strtolower($resumeFileType), $allowed)) {
            die("Invalid file type. Only PDF/DOC/DOCX allowed.");
        }

        $file = uniqid() . "." . $resumeFileType;
        $filename = $folder_dir . $file;
        move_uploaded_file($_FILES['resume']['tmp_name'], $filename);
    }

    $hash = md5(uniqid());
    $stmt = $conn->prepare("INSERT INTO notice(subject, notice, audience, resume, hash, date) VALUES (?, ?, ?, ?, ?, NOW())");

    if (!$stmt) {
        die("SQL Prepare failed: " . $conn->error);
    }

    
    $stmt->bind_param("sssss", $subject, $notice, $audience, $file, $hash);

    if ($stmt->execute()) {
        include 'sendmail.php';
        header("Location: postnotice.php?success=1");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Placement Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/AdminLTE.min.css">
    <link rel="stylesheet" href="css/_all-skins.min.css">
    <link rel="stylesheet" href="css/custom.css">
</head>

<body class="hold-transition skin-green sidebar-mini">
    <?php include 'header.php'; ?>

    <div class="row">
        <div class="col-xs-6 responsive">
            <section>
                <?php if (isset($_GET['success'])): ?>
                    <div class="alert alert-success alert-dismissible" id="truemsg">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Success!</h4>
                        New Notice Successfully added
                    </div>
                <?php endif; ?>

                <h4><strong>Post a new notice</strong></h4>
                <form method="POST" enctype="multipart/form-data">
                    <div>
                        <input id="subject" placeholder="Subject" type="text" name="subject" required style="margin:auto">
                    </div>
                    <div id="file" class="form-group">
                        <input type="file" name="resume" class="btn btn-flat btn-primary">
                    </div>
                    <br>
                    <div class="form-group mt-3">
                        <textarea class="input" name="input" id="input" placeholder="Notice" required></textarea>
                    </div>
                    <div class="form-group text-center option">
                        <label>Audience</label>
                        <select class="form-control select2" style="width: 100%" name="audience">
                            <option value="All Students">All Students</option>
                            <option value="Co-ordinators">Co-ordinators</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary btn-sm" id="submit" name="submit" type="submit">NOTIFY</button>
                    </div><br>
                </form>
            </section>
        </div>
    </div>

    <footer class="main-footer" style="background-color:#1f0a0a; color:white; padding:15px;">
        <div class="text-center">
            <div class="text-center">
            <strong>Copyright &copy; 2025 Placement Portal</strong> All rights reserved.
        </div>
    </footer>
</body>
</html>
<style>
    body {

        /* background-color: #bccde5;
         */
        background-color: white;
    }

    .centre {
        margin: 20px 30px 100px 20px;
        text-align: center;
        height: 450px;
        width: 700px;
        border: 2px solid black;
        border-radius: 10px;
        /* display: inline-grid; */
        display: inline-block;


    }

    #subject {

        width: 86%;


    }

    .option {
        width: 30%;
        margin: auto;
    }

    .input {

        height: 200px;
        width: 600px;
        border-radius: 5px;
        background-color: white;
        text-align: center;


    }

    .button {


        background-color: #3e79c8;

        /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 0px 10px 0px 10px;
    }

    @media screen and (max-width: 1447px) {

        .input1 {
            width: auto;
            height: auto;
        }

        .centre {

            height: 105%;
            width: 105%;
            margin-left: 100px;

        }

        .responsive2 {
            margin: auto;
            display: block;
            height: 80%;
            width: 80%;
            margin: auto;
        }

        #subject {
            height: 60%;
            width: 60%;
            margin: auto;

        }

        .option {
            height: 60%;
            width: 60%;
            margin: auto;
        }

        .input {
            height: 80%;
            width: 60%;
            margin: auto;

        }


    }
</style>