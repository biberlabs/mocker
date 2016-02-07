<?php
/**
 * Address Entity
 *
 * @since     Feb 2016
 * @author    Haydar KULEKCI  <haydarkulekci@gmail.com>
 */
namespace AddressEntity;

/**
 * @Mocker\Annotations\Entity(uri="/address");
 */
class Address
{
    /**
     * Address
     *
     * @var string
     * @Mocker\Annotations\Property(type="Street Address");
     */
    protected $address;

    /**
     * City of address
     *
     * @var string
     * @Mocker\Annotations\Property(type="City");
     */
    protected $city;

    /**
     * Country of address
     *
     * @var string
     * @Mocker\Annotations\Property(type="Country");
     */
    protected $country;

    /**
     * Postal Code of address
     *
     * @var string
     * @Mocker\Annotations\Property(type="Postal Code");
     */
    protected $postalCode;
}