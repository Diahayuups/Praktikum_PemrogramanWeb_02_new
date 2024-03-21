<?php
require_once "class_lingkaran.php";
echo "NILAI PHI " . Lingkaran::PHI;
$lingkar1 = new Lingkaran(10);
$lingkar2 = new Lingkaran(4);

echo "<br> Jadi Luas Lingkaran I " . $lingkar1->getLuas();
echo "<br> Jadi Luas Lingkaran II " . $lingkar2->getLuas();

echo "<br> Jadi Keliling Lingkaran I " . $lingkar1->getKeliling();
echo "<br> Jadi Keliling Lingkaran II " . $lingkar2->getKeliling();

?>