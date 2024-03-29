<?php

/*
  function encrypt($decrypted, $password, $salt = '!kQm*fF3pXe1Kbm%9') {
  // Build a 256-bit $key which is a SHA256 hash of $salt and $password.
  $key = hash('SHA256', $salt . $password, true);
  // Build $iv and $iv_base64.  We use a block size of 128 bits (AES compliant) and CBC mode.
  // (Note: ECB mode is inadequate as IV is not used.)
  srand();
  $iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC), MCRYPT_RAND);
  if (strlen($iv_base64 = rtrim(base64_encode($iv), '=')) != 22)
  return false;
  // Encrypt $decrypted and an MD5 of $decrypted using $key.  MD5 is fine to use here because it's just to verify successful decryption.
  $encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $decrypted . md5($decrypted), MCRYPT_MODE_CBC, $iv));
  // We're done!
  return $iv_base64 . $encrypted;
  }

  function decrypt($encrypted, $password, $salt = '!kQm*fF3pXe1Kbm%9') {
  // Build a 256-bit $key which is a SHA256 hash of $salt and $password.
  $key = hash('SHA256', $salt . $password, true);
  // Retrieve $iv which is the first 22 characters plus ==, base64_decoded.
  $iv = base64_decode(substr($encrypted, 0, 22) . '==');
  // Remove $iv from $encrypted.
  $encrypted = substr($encrypted, 22);
  // Decrypt the data.  rtrim won't corrupt the data because the last 32 characters are the md5 hash; thus any \0 character has to be padding.
  $decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, base64_decode($encrypted), MCRYPT_MODE_CBC, $iv), "\0\4");
  // Retrieve $hash which is the last 32 characters of $decrypted.
  $hash = substr($decrypted, -32);
  // Remove the last 32 characters from $decrypted.
  $decrypted = substr($decrypted, 0, -32);
  // Integrity check.  If this fails, either the data is corrupted, or the password/salt was incorrect.
  if (md5($decrypted) != $hash)
  return false;
  // Yay!
  return $decrypted;
  }
 */

function encrypt($decrypted, $key) {
    $ivlen = openssl_cipher_iv_length($cipher = "AES-128-CBC");
    $iv = openssl_random_pseudo_bytes($ivlen);
    $ciphertext_raw = openssl_encrypt($decrypted, $cipher, $key, $options = OPENSSL_RAW_DATA, $iv);
    $hmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary = true);
    $ciphertext = base64_encode($iv . $hmac . $ciphertext_raw);
    return $ciphertext;
}

function decrypt($encrypted, $key) {
    $c = base64_decode($encrypted);
    $ivlen = openssl_cipher_iv_length($cipher = "AES-128-CBC");
    $iv = substr($c, 0, $ivlen);
    $hmac = substr($c, $ivlen, $sha2len = 32);
    $ciphertext_raw = substr($c, $ivlen + $sha2len);
    $original_plaintext = openssl_decrypt($ciphertext_raw, $cipher, $key, $options = OPENSSL_RAW_DATA, $iv);
    $calcmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary = true);
    if (!hash_equals($hmac, $calcmac)) {
        $original_plaintext = false;
    }
    return $original_plaintext;
}

?>