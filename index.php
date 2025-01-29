<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="marquee-container">
            <div class="marquee-wrapper">
                <div class="marquee-content">
                    <span>Pendaftaran Siswa Baru Di SMKN 1 MAJA</span>
                </div>
            </div>
        </div>
        
        <div class="form-container">
            <h4>Menu</h4>
            <nav>
                <ul>
                    <li>
                        <a href="form-daftar.php">
                            <span>Daftar Baru</span>
                        </a>
                    </li>
                    <li>
                        <a href="list-siswa.php">
                            <span>Pendaftar</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <?php if(isset($_GET['status'])): ?>
            <div class="status-message <?php echo $_GET['status'] == 'sukses' ? 'status-success' : 'status-error'; ?>">
                <?php
                    if($_GET['status'] == 'sukses'){
                        echo "Pendaftaran siswa baru berhasil!";
                    } else {
                        echo "Pendaftaran gagal!";
                    }
                ?>
            </div>
        <?php endif; ?>
    </header>
</body>
</html>
