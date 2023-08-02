<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file = $_FILES['file']['tmp_name'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $ch = curl_init();
    $post_data = array(
        'file' => new CURLFile($file),
        'name' => $name,
        'email' => $email,
    );
    curl_setopt($ch, CURLOPT_URL, 'https://translate.aitob.ai/api/translator/convert');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_response = curl_exec($ch);
    $response_header = curl_getinfo($ch);
    curl_close($ch);
    
    header('Content-Length: ' . $response_header['download_content_length']);
    header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
    header('Content-Disposition: attachment; filename=output.docx');
    echo $server_response;
    exit;
}
?>
