<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'isVerified', '' . "\0" . 'App\\Entity\\User' . "\0" . 'name', '' . "\0" . 'App\\Entity\\User' . "\0" . 'firstname', '' . "\0" . 'App\\Entity\\User' . "\0" . 'telephone', '' . "\0" . 'App\\Entity\\User' . "\0" . 'gender', '' . "\0" . 'App\\Entity\\User' . "\0" . 'status', '' . "\0" . 'App\\Entity\\User' . "\0" . 'date_creation', '' . "\0" . 'App\\Entity\\User' . "\0" . 'adminReservations', '' . "\0" . 'App\\Entity\\User' . "\0" . 'commandeAEmporters'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'isVerified', '' . "\0" . 'App\\Entity\\User' . "\0" . 'name', '' . "\0" . 'App\\Entity\\User' . "\0" . 'firstname', '' . "\0" . 'App\\Entity\\User' . "\0" . 'telephone', '' . "\0" . 'App\\Entity\\User' . "\0" . 'gender', '' . "\0" . 'App\\Entity\\User' . "\0" . 'status', '' . "\0" . 'App\\Entity\\User' . "\0" . 'date_creation', '' . "\0" . 'App\\Entity\\User' . "\0" . 'adminReservations', '' . "\0" . 'App\\Entity\\User' . "\0" . 'commandeAEmporters'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserIdentifier(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserIdentifier', []);

        return parent::getUserIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(string $password): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function isVerified(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isVerified', []);

        return parent::isVerified();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsVerified(bool $isVerified): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsVerified', [$isVerified]);

        return parent::setIsVerified($isVerified);
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(string $name): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstname(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstname', []);

        return parent::getFirstname();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstname(string $firstname): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstname', [$firstname]);

        return parent::setFirstname($firstname);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelephone(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelephone', []);

        return parent::getTelephone();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelephone(int $telephone): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelephone', [$telephone]);

        return parent::setTelephone($telephone);
    }

    /**
     * {@inheritDoc}
     */
    public function getGender(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGender', []);

        return parent::getGender();
    }

    /**
     * {@inheritDoc}
     */
    public function setGender(string $gender): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGender', [$gender]);

        return parent::setGender($gender);
    }

    /**
     * {@inheritDoc}
     */
    public function isStatus(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isStatus', []);

        return parent::isStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus(bool $status): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCreation(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCreation', []);

        return parent::getDateCreation();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateCreation(\DateTimeInterface $date_creation): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCreation', [$date_creation]);

        return parent::setDateCreation($date_creation);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdminReservations(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdminReservations', []);

        return parent::getAdminReservations();
    }

    /**
     * {@inheritDoc}
     */
    public function addAdminReservation(\App\Entity\AdminReservation $adminReservation): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAdminReservation', [$adminReservation]);

        return parent::addAdminReservation($adminReservation);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAdminReservation(\App\Entity\AdminReservation $adminReservation): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAdminReservation', [$adminReservation]);

        return parent::removeAdminReservation($adminReservation);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommandeAEmporters(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommandeAEmporters', []);

        return parent::getCommandeAEmporters();
    }

    /**
     * {@inheritDoc}
     */
    public function addCommandeAEmporter(\App\Entity\CommandeAEmporter $commandeAEmporter): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCommandeAEmporter', [$commandeAEmporter]);

        return parent::addCommandeAEmporter($commandeAEmporter);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCommandeAEmporter(\App\Entity\CommandeAEmporter $commandeAEmporter): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCommandeAEmporter', [$commandeAEmporter]);

        return parent::removeCommandeAEmporter($commandeAEmporter);
    }

}
