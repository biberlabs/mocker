<?php
/**
 * User Entity
 *
 * @since     Feb 2016
 * @author    Haydar KULEKCI  <haydarkulekci@gmail.com>
 */
namespace UserEntity;

/**
 * @Mocker\Annotations\Entity(uri="/user");
 */
class User
{
    /**
     * Name of user
     *
     * @var string
     * @Mocker\Annotations\Property(type="First Name");
     */
    protected $name;

    /**
     * Surname of user
     *
     * @var string
     * @Mocker\Annotations\Property(type="Last Name");
     */
    protected $surname;
}