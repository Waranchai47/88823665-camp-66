<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="container mt-5">
            <h1 class="mb-4">ตรวจสอบเลขคู่หรือเลขคี่</h1>

            <!-- ฟอร์มสำหรับป้อนค่าช่วงตัวเลข -->
            <form method="get" action="">
                <div class="mb-3">
                    <label for="startInput" class="form-label">เริ่มต้น (Start)</label>
                    <input name="start" type="number" class="form-control" id="startInput" placeholder="เช่น 1" required>
                </div>
                <div class="mb-3">
                    <label for="endInput" class="form-label">สิ้นสุด (End)</label>
                    <input name="end" type="number" class="form-control" id="endInput" placeholder="เช่น 10" required>
                </div>
                <div class="mb-3">
                    <button class="btn btn-success" type="submit">ตรวจสอบ</button>
                </div>
            </form>

            <?php
            // ตรวจสอบว่ามีการป้อนค่าผ่านฟอร์มหรือไม่
            if (isset($_GET['start']) && isset($_GET['end']) && is_numeric($_GET['start']) && is_numeric($_GET['end'])) {
                $start = intval($_GET['start']); // รับค่าตัวเลขเริ่มต้น
                $end = intval($_GET['end']);     // รับค่าตัวเลขสิ้นสุด

                // ตรวจสอบว่าค่าเริ่มต้นไม่มากกว่าสิ้นสุด
                if ($start <= $end) {
                    echo "<h2 class='mt-4'>ช่วงตัวเลขตั้งแต่ $start ถึง $end</h2>";
                    echo "<table class='table table-bordered mt-3'>";
                    echo "<thead><tr><th>ตัวเลข</th><th>ประเภท</th></tr></thead>";
                    echo "<tbody>";

                    // ลูปตัวเลขในช่วงและตรวจสอบคู่หรือคี่
                    for ($i = $start; $i <= $end; $i++) {
                        $type = ($i % 2 == 0) ? "เลขคู่" : "เลขคี่";
                        echo "<tr><td>$i</td><td>$type</td></tr>";
                    }

                    echo "</tbody>";
                    echo "</table>";
                } else {
                    echo "<h2 class='mt-4 text-danger'>กรุณาระบุค่าเริ่มต้นน้อยกว่าหรือเท่ากับค่าสิ้นสุด</h2>";
                }
            }
            ?>
        </div>
    </body>
</html>
