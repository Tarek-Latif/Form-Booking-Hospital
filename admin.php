<?php
include "Header.php";
?>

<table>
    <th>الرقم</th>
    <th>الأسم بالكامل</th>
    <th>رقم الهاتف</th>
    <th>البريد الالكترونى</th>
    <th>العنوان بالتفصيل</th>
    <th>تاريخ الحجز</th>

<?php
// اتصال هذه الصفحة بقاعدة البيانات
$host     ="localhost";
$user     ="root";
$password ="";
$dbName   ="hospital";
$conn = mysqli_connect($host,$user,$password,$dbName);

if (isset($conn)) {
    echo " Yes DataBase Connected ";
}
else {
    echo " DataBase Not Connect " ;
}

// إستيراد معلومات المرضى من قاعدة البيانات وعرضها فى هذه الصفحة
$query ="SELECT * FROM Patients";
$result =mysqli_query($conn,$query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row ['id'] . "</td><td>" . $row ['name'] . "</td><td>" . $row ['tel'] . "</td><td>" . $row ['email'] . "</td><td>" . $row ['address'] . "</td><td>" . $row ['date'] . "</td></tr>";
    }
    echo "</table>";
}
else {
    echo "يوجد خطأ فى عرض البيانات";
}
?>