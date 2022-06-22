<?php

abstract class AchievementType
{
    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();
        return trim(preg_replace('/[A-Z]/',' $0', $class));
    }

    public function icon()
    {
        return strtolower(str_replace(' ', '-', $this->name())).'.png';
    }
    abstract public function qualifire($user);
}

class FirstThousandPoints extends AchievementType
{
    public function qualifire($user)
    {

    }
}

class FirstBestAnswer extends AchievementType
{
    public function qualifire($user)
    {

    }
}
class ReachTop50 extends AchievementType
{
    public function qualifire($user){
        return $user;
    }
}
$achievement = new ReachTop50();

echo $achievement->qualifire("hello");