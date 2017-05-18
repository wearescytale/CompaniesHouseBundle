<?php

namespace Wearescytale\CompaniesHouseBundle\Serializer\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Wearescytale\CompaniesHouseBundle\Model\CompanyProfile;

/**
 * Class CompanyProfileDenormalizer
 */
class CompanyProfileDenormalizer implements DenormalizerInterface
{
    static $propertyMap = array(
        'company_name'                            => 'companyName',
        'company_number'                          => 'companyNumber',
        'type'                                    => 'type',
        'jurisdiction'                            => 'jurisdiction',
        'undeliverable_registered_office_address' => 'undeliverableRegisteredOfficeAddress',
        'company_status'                          => 'companyStatus',
        'has_insolvency_history'                  => 'hasInsolvencyHistory',
        'registered_office_is_in_dispute'         => 'registeredOfficeIsInDispute'
    );

    /**
     * Denormalizes data back into an object of the given class.
     *
     * @param mixed  $data    data to restore
     * @param string $class   the expected class to instantiate
     * @param string $format  format the given data was extracted from
     * @param array  $context options available to the denormalizer
     *
     * @return object
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $companyProfile = new CompanyProfile();

        foreach (self::$propertyMap as $key => $name) {
            if (isset($data[$key]) && !is_array($data[$key])) {
                $method = "set" . lcfirst($name);
                $companyProfile->$method($data[$key]);
            }
        }

        return $companyProfile;
    }

    /**
     * Checks whether the given class is supported for denormalization by this normalizer.
     *
     * @param mixed  $data   Data to denormalize from
     * @param string $type   The class to which the data should be denormalized
     * @param string $format The format being deserialized from
     *
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === CompanyProfile::class;
    }
}