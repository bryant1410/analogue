<?php namespace Analogue\ORM\Drivers;

use Illuminate\Database\Capsule\Manager as Capsule;

class CapsuleConnectionProvider
{

    protected $capsule;

    public function __construct(Capsule $capsule)
    {
        $this->capsule = $capsule;
    }

    /**
     * Get a Database connection object
     *
     * @param  $name
     * @return \Illuminate\Database\Connection
     */
    public function connection($name = null)
    {
        return $this->capsule->getConnection($name);
    }
}
