<?php
include 'header.php';
require 'connect.php';
$sql = "SELECT * From activity
        WHERE start > now()";
$result = $conn->quert($sql);
?>
<table class ="table">
  <tr>
    <th>Activity name</tr>
    <th>Begin</th>
    <th>End</th>
    <th>Availabe</th>
</tr>
<?php
while($row = $result->fetch_assoc()){
  echo "<tr>
        <td>{$row['activityName']}</tr>
        <td>{$row['start']}</td>
        <td>{$row['end']}</td>
        <td>{$row['available']}</td>
        </tr>";
}
$conn->close();
</table>
    </div>
  </header>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script>
    document.getElementbyId('nav-activity').classlist.add('active');
    </script>
</body>
</html>