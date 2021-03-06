<?php
// app/src/App/User/UserProvider.php
namespace MicroCMS\DAO;

use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Doctrine\DBAL\Connection;
use MicroCMS\Domain\Utilisateur;

/**
 * Class UserDAO
 * Cette classe permet de gérer le login
 * @package MicroCMS\DAO
 */
class UtilisateurDAO implements UserProviderInterface
{
    private $conn;

    public function __construct(Connection $conn)
    {
        $this->conn = $conn;
    }

    /**
     * Fonction qui permet la recherche du nom d'utilisateur dans la base
     * @param string $username
     * @return User
     */
    /*username correspond à l'email du l'utilisateur*/
    public function loadUserByUsername($username)
    {
        $stmt = $this->conn->executeQuery('SELECT * FROM etudiant WHERE username = ?', array(strtolower($username)));
        if (!$user = $stmt->fetch()) {

            throw new UsernameNotFoundException(sprintf('Username "%s" does not exist.', $username));
        }
        return new User($user['username'], $user['mdp'], explode(',', $user['roles']), true, true, true, true);
    }


    public function refreshUser(UserInterface $user)
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', get_class($user)));
        }
        return $this->loadUserByUsername($user->getUsername());
    }

    public function supportsClass($class)
    {
        return $class === 'Symfony\Component\Security\Core\User\User';
    }
}
