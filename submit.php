<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

// الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

// استقبال البيانات من النموذج
$first = $_POST['first_name'];
$last = $_POST['last_name'];
$age = $_POST['age'];

// إدخال البيانات
$sql = "INSERT INTO info (first_name, last_name, age)
        VALUES ('$first', '$last', $age)";

if ($conn->query($sql) === TRUE) {
    echo "<h3>تم حفظ البيانات بنجاح</h3>";
} else {
    echo "خطأ: " . $conn->error;
}

// عرض البيانات من الجدول
$result = $conn->query("SELECT * FROM info");

if ($result && $result->num_rows > 0) {
    echo "<h3>البيانات:</h3>";
    echo "<table border='1'>
            <tr>
              <th>الرقم</th>
              <th>الاسم الأول</th>
              <th>الاسم الأخير</th>
              <th>العمر</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['first_name']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['age']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "لا توجد بيانات";
}

$conn->close();
?>