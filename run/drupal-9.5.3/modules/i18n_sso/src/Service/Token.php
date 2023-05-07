<?php

declare(strict_types = 1);

namespace Drupal\i18n_sso\Service;

use Drupal\Component\Datetime\TimeInterface;
use Drupal\Core\Database\Connection;

/**
 * Service to help to manipulate tokens.
 */
class Token {

  /**
   * The table used to store the tokens.
   */
  const TOKEN_TABLE = 'i18n_sso_tokens';

  /**
   * The token lifetime.
   */
  const TOKEN_LIFETIME = 60 * 10;

  /**
   * The database connection.
   *
   * @var \Drupal\Core\Database\Connection
   */
  protected $connection;

  /**
   * The datetime service.
   *
   * @var \Drupal\Component\Datetime\TimeInterface
   */
  protected $datetime;

  /**
   * Constructor.
   *
   * @param \Drupal\Core\Database\Connection $connection
   *   The database connection object.
   * @param \Drupal\Component\Datetime\TimeInterface $datetime
   *   The datetime service.
   */
  public function __construct(Connection $connection, TimeInterface $datetime) {
    $this->connection = $connection;
    $this->datetime = $datetime;
  }

  /**
   * Returns a valid token stored in database for given IP and uid.
   *
   * @param string $user_ip
   *   The IP of the user.
   * @param int $uid
   *   The user ID.
   *
   * @return object
   *   A stdclass object containing a token field.
   */
  public function getToken($user_ip, $uid) {
    $token = $this->connection->select(self::TOKEN_TABLE)
      ->fields(self::TOKEN_TABLE, ['token'])
      ->condition('user_ip', $user_ip, 'LIKE')
      ->condition('uid', strval($uid), '=')
      ->condition('expire', strval($this->datetime->getRequestTime()), '>');
    /** @var \Drupal\Core\Database\StatementInterface $result */
    $result = $token->range(0, 1)->execute();
    /** @var object $fetchedObject */
    $fetchedObject = $result->fetchObject();
    return $fetchedObject;
  }

  /**
   * Creates a token (insert into database).
   *
   * Returns the result of getToken with given parameters.
   *
   * @param string $user_ip
   *   The IP of the user.
   * @param int $uid
   *   The user ID.
   *
   * @return object
   *   A stdclass object containing a token field.
   */
  public function createToken($user_ip, $uid) {
    $token = [];
    $token['uid'] = $uid;
    $token['created'] = $this->datetime->getRequestTime();
    $sha1source = $token['created'] . $uid . $user_ip;
    $token['token'] = sha1($sha1source);
    $token['user_ip'] = $user_ip;
    $token['expire'] = $this->datetime->getRequestTime() + self::TOKEN_LIFETIME;
    $this->connection
      ->insert(self::TOKEN_TABLE)
      ->fields($token)
      ->execute();
    return $this->getToken($user_ip, $uid);
  }

  /**
   * Returns user_id from token tables given a token and an IP address.
   *
   * @param string $user_ip
   *   The IP of the user.
   * @param string $token
   *   The token used to authenticate the user.
   *
   * @return mixed
   *   The user ID if it is found with a non expired token.
   */
  public function getUserId($user_ip, $token) {
    $query = $this->connection->select(self::TOKEN_TABLE)
      ->fields(self::TOKEN_TABLE, ['uid'])
      ->condition('user_ip', $user_ip, 'LIKE')
      ->condition('token', $token, 'LIKE')
      ->condition('expire', strval($this->datetime->getRequestTime()), '>');
    $result = $query->range(0, 1)->execute();
    if ($result) {
      return $result->fetchField();
    }
    else {
      return '';
    }
  }

  /**
   * Deletes the token after it has been used.
   *
   * @param string $user_ip
   *   The IP of the user.
   * @param string $token
   *   The token used to authenticate the user.
   *
   * @return int
   *   The number of row affected.
   */
  public function deleteToken($user_ip, $token) {
    return $this->connection->delete(self::TOKEN_TABLE)
      ->condition('user_ip', $user_ip, 'LIKE')
      ->condition('token', $token, 'LIKE')
      ->execute();
  }

  /**
   * Deletes all tokens for a user.
   *
   * @param int $uid
   *   The user ID.
   *
   * @return int
   *   The number of row affected.
   */
  public function deleteUserTokens($uid) {
    return $this->connection->delete(self::TOKEN_TABLE)
      ->condition('uid', strval($uid), '=')
      ->execute();
  }

  /**
   * Deletes all expired tokens.
   *
   * @return int
   *   The number of row affected.
   */
  public function deleteExpiredTokens() {
    return $this->connection->delete(self::TOKEN_TABLE)
      ->condition('expire', strval($this->datetime->getRequestTime()), '<')
      ->execute();
  }

}
