<?php
function redirect_with_errors($url, $errors) {
    if (!empty($errors) && !empty($url)) {
        foreach ($errors as $valor) {
            $erroresPrepared['error'] = $valor;
        }
        $errorParams = http_build_query($erroresPrepared);
        header("Location: {$url}?{$errorParams}");
        exit();
    }
}
?>