<?php

$saveToFile = isset($_GET['toFile']) ? $_GET['toFile'] : false;
$print = isset($_GET['print']) ? $_GET['print'] : true;
$startLimit = isset($_GET['start']) ? $_GET['start'] : 0x10000;
$unicodeList = include_once("unicodeCharList.php"); 
$represented = [];

foreach($unicodeList as $unicodeNo => $unicodeText) {
    if ($unicodeNo < $startLimit) continue;
    $represented[] = "\"" . utf8_chr($unicodeNo) . "\",";
    if (!$print) continue;
?>
    <div id="<?php echo $unicodeNo;?>">
      <?php 
       echo utf8_chr($unicodeNo) . $unicodeText;
      ?>
          
    </div>
<?php
}

if ($saveToFile) {
    $data = "<?php \n";
    $data .= "return [\n";
    $data .= implode("\n", $represented);
    $data .= "];\n";
    file_put_contents("blacklistArray.php", $data);
}

function utf8_chr($cp) {

    if (!is_int($cp)) {
        exit("$cp is not integer\n");
    }

    // UTF-8 prohibits characters between U+D800 and U+DFFF
    // https://tools.ietf.org/html/rfc3629#section-3
    //
    // Q: Are there any 16-bit values that are invalid?
    // http://unicode.org/faq/utf_bom.html#utf16-7

    if ($cp < 0 || (0xD7FF < $cp && $cp < 0xE000) || 0x10FFFF < $cp) {
        exit("$cp is out of range\n");
    }

    if ($cp < 0x10000) {
        return json_decode('"\u'.bin2hex(pack('n', $cp)).'"');
    }

    // Q: Isn’t there a simpler way to do this?
    // http://unicode.org/faq/utf_bom.html#utf16-4
    $lead = 0xD800 - (0x10000 >> 10) + ($cp >> 10);
    $trail = 0xDC00 + ($cp & 0x3FF);

    return json_decode('"\u'.bin2hex(pack('n', $lead)).'\u'.bin2hex(pack('n', $trail)).'"');
}
?>
