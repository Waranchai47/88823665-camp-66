<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h1>จำนวน 1 ถึง 100 เป็นเลขคู่หรือคี่</h1>
        <?php
        for ($i = 1; $i <= 100; $i++) {
            // ตรวจสอบว่าเป็นเลขคู่หรือคี่
            $type = ($i % 2 == 0) ? "เป็นเลขคู่" : "เป็นเลขคี่";
        ?>
        <div class="row">
            <div class="h2 col text-end"><?php echo $i; ?></div>
            <div class="h2 col text-start"><?php echo $type; ?></div>
        </div>
        <?php
        }
        ?>
    </div>
</body>
</html>
