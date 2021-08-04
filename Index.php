<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AL-Shift Hospital</title>
    <link rel="stylesheet" href ="css/style.css">
    <link rel="stylesheet" href ="css/JannaLTRegular.css">
</head>
<body>
<div class="main">
    <div class="logo">
        <img src="images/logo.png">
        <h2>مستشفى الشفاء الدولى</h2>
    </div>
    <div class="Booking">
    <p>أهلا بك .. للحجز من فضلك قم بملىء البيانات التالية </p>
    <form action ="Index.php" method="post">
        <input type="text" placeholder = "الأسم بالكامل" name ="name"/>
        <input type="text" placeholder = "رقم الهاتف"   name ="tel"/>
        <input type="text"placeholder  = "البريد الالكترونى" name ="email"/>
        <input type="text"placeholder  = "العنوان بالتفصيل" name ="address"/>
        <input type="date" name="date"/>
        <input type="submit" value="إحجز الأن" name ="send"/>
    </form>
        <?php
        // اتصال هذه الصفحة بقاعدة البيانات
        $host    ="localhost";
        $user    ="root";
        $password ="";
        $dbName ="hospital";
        $conn = mysqli_connect($host,$user,$password,$dbName);

/*
        if (isset($conn)) {
            echo " Yes DataBase Connected ";
        }
        else {
            echo " DataBase Not Connect " ;
        }
*/
        // ارسال المعلومات بواسطة موظف الحجوزات الى قاعدة البيانات
        $uName='';
        $uTel='';
        $uEmail='';
        $uAddress='';
        $uDate='';
        $uSend='';
        if (isset($_POST ['name'])) {
            $uName = $_POST ['name'] ;
        }
        if (isset($_POST ['tel'])) {
            $uTel = $_POST ['tel'] ;
        }
        if (isset($_POST ['email'])) {
            $uEmail = $_POST ['email'] ;
        }
        if (isset($_POST ['address'])) {
            $uAddress = $_POST ['address'] ;
        }
        if (isset($_POST ['date'])) {
            $uDate = $_POST ['date'] ;
        }
        if (isset($_POST ['send'])) {
            $uSend = $_POST ['send'] ;
        }

        if($uSend) {
            $query = "INSERT INTO Patients(name,tel,email,address,date)VALUE('$uName','$uTel','$uEmail','$uAddress','$uDate')";
            $result = mysqli_query($conn,$query);
            echo "<p style='color:green'>" . "تم الحجز بنجاح" . "</p>";
        }
        else {
            echo "<p style='color:red'>" . "عفوا .. لم يتم حفظ البيانات " . "</p>";
        }
        ?>
    </div>
</div>
</body>
</html>
