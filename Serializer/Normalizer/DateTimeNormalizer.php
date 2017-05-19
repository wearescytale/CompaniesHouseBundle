<?php

namespace Wearescytale\CompaniesHouseBundle\Serializer\Normalizer;

use DateTime;
use Symfony\Component\Serializer\Exception\UnexpectedValueException;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * Class DateTimeNormalizer
 *
 * This class is a partial copy of the
 * Symfony\Component\Serializer\Normalizer\DateTimeNormalizer. I've just copied
 * the file instead of using it because the file was only added in version 3.1
 * and we want to support older versions
 */
class DateTimeNormalizer implements DenormalizerInterface, NormalizerInterface
{
    const FORMAT_KEY = 'datetime_format';

    /**
     * {@inheritdoc}
     *
     * @throws UnexpectedValueException
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $dateTimeFormat = isset($context[self::FORMAT_KEY]) ? $context[self::FORMAT_KEY] : null;

        if (null !== $dateTimeFormat) {
            $object = \DateTime::class === $class ? \DateTime::createFromFormat($dateTimeFormat, $data) : \DateTimeImmutable::createFromFormat($dateTimeFormat, $data);

            if (false !== $object) {
                return $object;
            }

            $dateTimeErrors = \DateTime::class === $class ? \DateTime::getLastErrors() : \DateTimeImmutable::getLastErrors();

            throw new UnexpectedValueException(sprintf(
                'Parsing datetime string "%s" using format "%s" resulted in %d errors:'."\n".'%s',
                $data,
                $dateTimeFormat,
                $dateTimeErrors['error_count'],
                implode("\n", $this->formatDateTimeErrors($dateTimeErrors['errors']))
            ));
        }

        try {
            return \DateTime::class === $class ? new \DateTime($data) : new \DateTimeImmutable($data);
        } catch (\Exception $e) {
            throw new UnexpectedValueException($e->getMessage(), $e->getCode(), $e);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function normalize($object, $format = null, array $context = array())
    {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsNormalization($data, $format = null)
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === DateTime::class;
    }

    /**
     * Formats datetime errors.
     *
     * @param array $errors
     *
     * @return string[]
     */
    private function formatDateTimeErrors(array $errors)
    {
        $formattedErrors = array();

        foreach ($errors as $pos => $message) {
            $formattedErrors[] = sprintf('at position %d: %s', $pos, $message);
        }

        return $formattedErrors;
    }
}