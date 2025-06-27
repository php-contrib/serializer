<?php

namespace PhpContrib\Serializer;

/**
 * Provides serialization
 */
interface SerializerInterface
{
    /**
     * Serialize the given data.
     */
    public function serialize(mixed $data): string;
}
