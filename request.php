<?php
// Mengirim GET request menggunakan cURL
function sendRequest() {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://profile-counter.glitch.me/dilsdev/count.svg");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_exec($ch);
    curl_close($ch);
}

// Mengirim request secepat mungkin tanpa jeda
while (true) {
    sendRequest();
}
?>
