<?php

namespace Phalcon;

/**
 * Phalcon\Security
 *
 * This component provides a set of functions to improve the security in Phalcon applications
 *
 * <code>
 * $login    = $this->request->getPost("login");
 * $password = $this->request->getPost("password");
 *
 * $user = Users::findFirstByLogin($login);
 *
 * if ($user) {
 *     if ($this->security->checkHash($password, $user->password)) {
 *         // The password is valid
 *     }
 * }
 * </code>
 */
class Security implements \Phalcon\Di\InjectionAwareInterface
{

    const CRYPT_DEFAULT = 0;


    const CRYPT_STD_DES = 1;


    const CRYPT_EXT_DES = 2;


    const CRYPT_MD5 = 3;


    const CRYPT_BLOWFISH = 4;


    const CRYPT_BLOWFISH_A = 5;


    const CRYPT_BLOWFISH_X = 6;


    const CRYPT_BLOWFISH_Y = 7;


    const CRYPT_SHA256 = 8;


    const CRYPT_SHA512 = 9;


    protected $_dependencyInjector;


    protected $_workFactor = 8;


    protected $_numberBytes = 16;


    protected $_tokenKeySessionID = "$PHALCON/CSRF/KEY$";


    protected $_tokenValueSessionID = "$PHALCON/CSRF$";


    protected $_token;


    protected $_tokenKey;


    protected $_random;


    protected $_defaultHash;


    /**
     * @param mixed $workFactor
     */
    public function setWorkFactor($workFactor) {}


    public function getWorkFactor() {}

    /**
     * Phalcon\Security constructor
     */
    public function __construct() {}

    /**
     * Sets the dependency injector
     *
     * @param \Phalcon\DiInterface $dependencyInjector
     */
    public function setDI(\Phalcon\DiInterface $dependencyInjector) {}

    /**
     * Returns the internal dependency injector
     *
     * @return \Phalcon\DiInterface
     */
    public function getDI() {}

    /**
     * Sets a number of bytes to be generated by the openssl pseudo random generator
     *
     * @param long $randomBytes
     * @return Security
     */
    public function setRandomBytes($randomBytes) {}

    /**
     * Returns a number of bytes to be generated by the openssl pseudo random generator
     *
     * @return string
     */
    public function getRandomBytes() {}

    /**
     * Returns a secure random number generator instance
     *
     * @return \Phalcon\Security\Random
     */
    public function getRandom() {}

    /**
     * Generate a >22-length pseudo random string to be used as salt for passwords
     *
     * @param int $numberBytes
     * @return string
     */
    public function getSaltBytes($numberBytes = 0) {}

    /**
     * Creates a password hash using bcrypt with a pseudo random salt
     *
     * @param string $password
     * @param int $workFactor
     * @return string
     */
    public function hash($password, $workFactor = 0) {}

    /**
     * Checks a plain text password and its hash version to check if the password matches
     *
     * @param string $password
     * @param string $passwordHash
     * @param int $maxPassLength
     * @return bool
     */
    public function checkHash($password, $passwordHash, $maxPassLength = 0) {}

    /**
     * Checks if a password hash is a valid bcrypt's hash
     *
     * @param string $passwordHash
     * @return bool
     */
    public function isLegacyHash($passwordHash) {}

    /**
     * Generates a pseudo random token key to be used as input's name in a CSRF check
     *
     * @return string
     */
    public function getTokenKey() {}

    /**
     * Generates a pseudo random token value to be used as input's value in a CSRF check
     *
     * @return string
     */
    public function getToken() {}

    /**
     * Check if the CSRF token sent in the request is the same that the current in session
     *
     * @param mixed $tokenKey
     * @param mixed $tokenValue
     * @param bool $destroyIfValid
     * @return bool
     */
    public function checkToken($tokenKey = null, $tokenValue = null, $destroyIfValid = true) {}

    /**
     * Returns the value of the CSRF token in session
     *
     * @return string
     */
    public function getSessionToken() {}

    /**
     * Removes the value of the CSRF token and key from session
     *
     * @return Security
     */
    public function destroyToken() {}

    /**
     * Computes a HMAC
     *
     * @param string $data
     * @param string $key
     * @param string $algo
     * @param bool $raw
     * @return string
     */
    public function computeHmac($data, $key, $algo, $raw = false) {}

    /**
     * Sets the default hash
     *
     * @param int $defaultHash
     * @return Security
     */
    public function setDefaultHash($defaultHash) {}

    /**
     * Returns the default hash
     *
     * @return int|null
     */
    public function getDefaultHash() {}

    /**
     * Testing for LibreSSL
     *
     * @return bool
     */
    public function hasLibreSsl() {}

    /**
     * Getting OpenSSL or LibreSSL version
     *
     * Parse OPENSSL_VERSION_TEXT because OPENSSL_VERSION_NUMBER is no use for LibreSSL.
     *
     * @link https://bugs.php.net/bug.php?id=71143
     *
     * <code>
     * if ($security->getSslVersionNumber() >= 20105) {
     *     // ...
     * }
     * </code>
     * @return int
     */
    public function getSslVersionNumber() {}

}
