<?php

namespace Perpii\OAuth2\Factory;


use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use ZF\OAuth2\Controller\Exception;
use OAuth2\Server as OAuth2Server;
use OAuth2\GrantType\AuthorizationCode;
use OAuth2\GrantType\ClientCredentials;
use OAuth2\GrantType\RefreshToken;
use OAuth2\GrantType\UserCredentials;

class OAuth2ServerFactory implements FactoryInterface
{
    /**
     * @param ServiceLocatorInterface $services
     * @return OAuth2\Server
     * @throws Exception\RuntimeException
     */
    public function createService(ServiceLocatorInterface $services)
    {
        $config = $services->get('Config');

        if (!isset($config['zf-oauth2']['storage']) || empty($config['zf-oauth2']['storage'])) {
            throw new Exception\RuntimeException(
                'The storage configuration [\'zf-oauth2\'][\'storage\'] for OAuth2 is missing'
            );
        }

        $storage = $services->get($config['zf-oauth2']['storage']);

        $enforceState = isset($config['zf-oauth2']['enforce_state']) ? $config['zf-oauth2']['enforce_state'] : true;
        $allowImplicit = isset($config['zf-oauth2']['allow_implicit']) ? $config['zf-oauth2']['allow_implicit'] : false;
        $accessLifetime = isset($config['zf-oauth2']['access_lifetime']) ? $config['zf-oauth2']['access_lifetime'] : 3600;
        $refreshTokenLifeTime = isset($config['zf-oauth2']['refresh_token_lifetime']) ? $config['zf-oauth2']['refresh_token_lifetime'] : 3600;
        $alwaysIssueNewRefreshToken = isset($config['zf-oauth2']['always_issue_new_refresh_token']) ? $config['zf-oauth2']['always_issue_new_refresh_token'] : false;

        // Pass a storage object or array of storage objects to the OAuth2 server class
        $server = new OAuth2Server($storage, array(
            'enforce_state' => $enforceState,
            'allow_implicit' => $allowImplicit,
            'access_lifetime' => $accessLifetime,
            'refresh_token_lifetime' => $refreshTokenLifeTime,
            'always_issue_new_refresh_token' => $alwaysIssueNewRefreshToken,
        ));

        // Add the "Client Credentials" grant type (it is the simplest of the grant types)
        $server->addGrantType(new ClientCredentials($storage));

        // Add the "Authorization Code" grant type (this is where the oauth magic happens)
        $server->addGrantType(new AuthorizationCode($storage));

        // Add the "User Credentials" grant type
        $server->addGrantType(new UserCredentials($storage));

        // Add the "Refresh Token" grant type
        $server->addGrantType(new RefreshToken($storage, array('always_issue_new_refresh_token' => $alwaysIssueNewRefreshToken)));

        return $server;
    }
}
