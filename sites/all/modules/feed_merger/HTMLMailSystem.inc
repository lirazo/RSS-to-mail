<?php

/**
 * Modify the drupal mail system to send HTML emails.
 */
class HTMLMailSystem extends DefaultMailSystem {
  /**
   * Concatenate and wrap the e-mail body for plain-text mails.
   *
   * @param $message
   *   A message array, as described in hook_mail_alter().
   *
   * @return
   *   The formatted $message.
   */
  public function format(array $message) {
    // Join the body array into one string
    $message['body'] = implode("\n\n", $message['body']);
    // Wrap the mail body for sending
    $message['body'] = drupal_wrap_mail($message['body']);
    return $message;
  }
}
