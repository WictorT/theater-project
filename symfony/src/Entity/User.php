<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity("email")
 * @UniqueEntity("username")
 */
class User extends BaseEntity implements UserInterface
{
    /**
     * @ORM\Column(type="string", length=25, unique=true)
     *
     * @var string
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=64)
     *
     * @var string
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=254, unique=true)
     *
     * @var string
     */
    private $email;

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     *
     * @return User
     */
    public function setUsername(string $username): User
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return User
     */
    public function setEmail(string $email): User
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getSalt(): ?string
    {
        return 'Cpo02N(o.<s`^0B@2U,./|-bc^C49H+4@r5soL9Z/ldQ2Xnf=+}xg:jrzq*=>SGx';
    }

    /**
     * @param string $password
     *
     * @return User
     */
    public function setPassword(string $password): User
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return array
     */
    public function getRoles(): array
    {
        return ['ROLE_USER'];
    }

    public function eraseCredentials(): void
    {
    }
}
