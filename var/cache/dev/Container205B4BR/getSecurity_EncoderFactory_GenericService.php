<?php

namespace Container205B4BR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_EncoderFactory_GenericService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.encoder_factory.generic' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory
     *
     * @deprecated Since symfony/security-bundle 5.3: The "security.encoder_factory.generic" service is deprecated, use "security.password_hasher_factory" instead.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('symfony/security-bundle', '5.3', 'The "security.encoder_factory.generic" service is deprecated, use "security.password_hasher_factory" instead.');

        return $container->privates['security.encoder_factory.generic'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(['Symfony\\Component\\Security\\Core\\User\\PasswordAuthenticatedUserInterface' => ['algorithm' => 'auto', 'migrate_from' => [], 'hash_algorithm' => 'sha512', 'key_length' => 40, 'ignore_case' => false, 'encode_as_base64' => true, 'iterations' => 5000, 'cost' => NULL, 'memory_cost' => NULL, 'time_cost' => NULL]]);
    }
}
