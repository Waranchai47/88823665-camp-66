<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="container mt-5">
            <h1 class="mb-4">แสดงตารางสูตรคูณ</h1>
            
            <!-- ฟอร์มสำหรับป้อนแม่สูตรคูณ -->
            <form method="get" action="">
                <div class="mb-3">
                    <label for="multiplicationInput" class="form-label">ระบุแม่สูตรคูณ</label>
                    <input name="multiplier" type="number" class="form-control" id="multiplicationInput" placeholder="เช่น 2" required>
                </div>
                <div class="mb-3">
                    <button class="btn btn-success" type="submit">แสดงตารางสูตรคูณ</button>
                </div>
            </form>

            <?php
            // ตรวจสอบว่ามีการป้อนค่าผ่านฟอร์มหรือไม่
            if (isset($_GET['multiplier']) && is_numeric($_GET['multiplier'])) {
                $multiplier = $_GET['multiplier']; // รับค่าแม่สูตรคูณจากฟอร์ม
                echo "<h2 class='mt-4'>แม่สูตรคูณของ: $multiplier</h2>";
                echo "<table class='table table-bordered mt-3'>";
                echo "<thead><tr><th>ตัวเลข</th><th>ผลลัพธ์</th></tr></thead>";
                echo "<tbody>";

                // แสดงผลตารางสูตรคูณ
                for ($i = 1; $i <= 12; $i++) {
                    $result = $multiplier * $i;
                    echo "<tr><td>$multiplier × $i</td><td>$result</td></tr>";
                }

                echo "</tbody>";
                echo "</table>";
            }
            ?>
        </div>
    </body>
</html>
