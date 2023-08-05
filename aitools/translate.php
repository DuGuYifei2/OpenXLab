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
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: multipart/form-data'));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    $server_response = curl_exec($ch);
    curl_close($ch);

    // Set appropriate headers
    header('Content-Length: ' . strlen($server_response));
    header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
    header('Content-Disposition: attachment; filename=output.docx');

    echo $server_response;
    exit;
}
?>
