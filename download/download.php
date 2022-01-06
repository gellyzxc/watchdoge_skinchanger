<?

$type = $_GET['type'];

$ver = $_GET['ver'];

$zxc = 'main';

if ($type == 'csgo') {
    $target = 'csgo'; }

if ($type == "dota") {
    $target = 'dota2'; }


function file_force_download($file, $target) {
    if (file_exists($file)) {
      // сбрасываем буфер вывода PHP, чтобы избежать переполнения памяти выделенной под скрипт
      // если этого не сделать файл будет читаться в память полностью!
      if (ob_get_level()) {
        ob_end_clean();
      }
      // заставляем браузер показать окно сохранения файла
      header('Content-Description: File Transfer');
      header('Content-Type: application/octet-stream');
      header('Content-Disposition: attachment; filename=' . 'watchdoge_' . basename($target) . '_latest' . '.rar');
      header('Content-Transfer-Encoding: binary');
      header('Expires: 0');
      header('Cache-Control: must-revalidate');
      header('Pragma: public');
      header('Content-Length: ' . filesize($file));
      // читаем файл и отправляем его пользователю
      readfile($file);
      exit;
    }
  }

file_force_download($zxc, $target);

?>