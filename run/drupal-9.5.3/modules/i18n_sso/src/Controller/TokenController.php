<?php

declare(strict_types = 1);

namespace Drupal\i18n_sso\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\i18n_sso\Service\Token;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Allow to manage token.
 *
 * @package Drupal\i18n_sso\Controller
 */
class TokenController extends ControllerBase {

  /**
   * The token service.
   *
   * @var \Drupal\i18n_sso\Service\Token
   */
  protected $token;

  /**
   * The current request.
   *
   * @var \Symfony\Component\HttpFoundation\Request
   */
  protected $request;

  /**
   * TokenController constructor.
   *
   * @param \Drupal\i18n_sso\Service\Token $token
   *   Token service.
   * @param \Symfony\Component\HttpFoundation\RequestStack $requestStack
   *   The request stack to get the current request object.
   */
  public function __construct(Token $token, RequestStack $requestStack) {
    $this->token = $token;
    $this->request = $requestStack->getCurrentRequest() ?: new Request();
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) : self {
    return new self(
      $container->get('i18n_sso.token'),
      $container->get('request_stack')
    );
  }

  /**
   * Returns json_encoded object containing token.
   *
   * @return \Symfony\Component\HttpFoundation\JsonResponse
   *   A JSON response.
   */
  public function getToken() {
    $token = new \stdClass();
    $token->token = FALSE;

    if ($this->currentUser()->isAuthenticated()) {
      /** @var string $client_ip */
      $client_ip = $this->request->getClientIp();

      /** @var object|null $token */
      $token = $this->token->getToken(
        $client_ip,
        $this->currentUser()->id()
      );

      if (empty($token)) {
        $token = $this->token->createToken(
          $client_ip,
          $this->currentUser()->id()
        );
      }
      // @phpstan-ignore-next-line
      $token->message = $this->t('Your account has been found. Please wait while we log you in.');
    }
    else {
      $token = new \stdClass();
      $token->token = FALSE;
      $token->message = $this->t('You are not logged in on main website. Please go to the main website, log-in and try again.');
    }
    $response = JsonResponse::create($token);
    $response->setPrivate()->setMaxAge(0);
    return $response;
  }

  /**
   * Logs user in if token is valid for user IP and deletes it.
   *
   * @return \Symfony\Component\HttpFoundation\JsonResponse
   *   A JSON response.
   */
  public function useToken() {
    $response = JsonResponse::create([
      'success' => FALSE,
      'message' => 'An error occurred while trying to log you in. Please try again later.',
    ]);

    /** @var string $client_ip */
    $client_ip = $this->request->getClientIp();
    /** @var string $request_token */
    $request_token = $this->request->get('token', '');

    $uid = $this->token->getUserId(
      $client_ip,
      $request_token
    );
    if (!empty($uid)) {
      /** @var \Drupal\user\UserInterface $user */
      $user = $this->entityTypeManager()->getStorage('user')->load($uid);
      user_login_finalize($user);
      $data = [];
      $data['success'] = TRUE;
      $data['message'] = $this->t('You have been successfully logged in. Please wait for the page to refresh.');
      $response->setData($data);
      $this->token->deleteToken(
        $client_ip,
        $request_token
      );
    }
    return $response->setPrivate()->setMaxAge(0);
  }

}
