<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file = $_FILES['file']['tmp_name'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $ip = $_POST['ip'];
    $ch = curl_init();
    $post_data = array(
        'file' => new CURLFile($file),
        'name' => $name,
        'email' => $email,
        'ip' => $ip
    );
    curl_setopt($ch, CURLOPT_URL, 'https://translate.aitob.ai/api/translator/convert');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TCP_KEEPALIVE, 1);
    curl_setopt($ch, CURLOPT_TCP_KEEPIDLE, 120);
    
    $server_response = curl_exec($ch);
    $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    if ($http_status != 200) {
        http_response_code($http_status);
        echo "API Request Error: HTTP Status $http_status";
        exit;
    }
    

    // Set appropriate headers
    header('Content-Length: ' . strlen($server_response));
    header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
    header('Content-Disposition: attachment; filename=output.docx');

    echo $server_response;
    exit;
}
?>
