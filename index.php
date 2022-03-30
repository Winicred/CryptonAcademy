interface Workable
{
    public function work(): void;
}

interface Feedable
{
    public function eat(): void;
}

interface Employee extends Feedable, Workable
{
}

class HumanEmployee implements Employee
{
    public function work(): void
    {
        // ...
    }

    public function eat(): void
    {
        //...
    }
}

class RobotEmployee implements Workable
{
    public function work(): void
    {
        // ...
    }
}
