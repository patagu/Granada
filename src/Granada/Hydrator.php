<?php
namespace Granada;

/**
 * Hydrator
 *
 * Defines an interface for "hydrating" a well-defined, consistent data model
 * from a loose input structure
 */
interface Hydrator
{

    /**
     * Hydrate a model from the incoming data
     *
     * @param mixed $incoming The input data
     * @param StdClass $model The model to hydrate
     * @return mixed The hydrated model
     */
    public function hydrate($incoming, $model);
}
