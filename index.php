<?php

// TODO - add duration / sleep to functions

$myDay = new MyDay();
//$myDay->run();

for ($i = 0; $i < 5; $i++) {
    $myDay->run();
}

class MyDay
{
    public function run()
    {
        $this->getReady();
        $this->work();
        $this->enjoyEvening();
        $this->windDown();
    }

    private function getReady()
    {
        echo '🌅 Getting ready:' . PHP_EOL;
        $this->wakeUp();
        $this->shower();
        $this->getDressed();
    }

    private function work()
    {
        echo '🤓 Work:' . PHP_EOL;
        if (rand(0, 4) % 2 == 0) {
            $this->walkBingo();
        }
    }

    private function enjoyEvening()
    {
        echo '💃 Evening:' . PHP_EOL;
        switch (rand(0, 2)) {
            case 0:
                $this->sport();
                break;
            case 1:
                $this->netflixNChill();
                break;
            case 2:
                $this->friends();
                break;
        }
    }

    private function windDown()
    {
        echo '😴 Wind down:' . PHP_EOL;

        if (rand(0, 1) == 1) {
            $this->read();
        }

        $this->sleep();
    }

    private function wakeUp()
    {
        echo '🛏 wake up' . PHP_EOL;
        sleep(1);
    }

    private function shower()
    {
        echo '🚿 shower' . PHP_EOL;
        sleep(3);
    }

    private function getDressed()
    {
        echo '👚 get dressed' . PHP_EOL;
        sleep (2);
        $this->faffAbout();
    }

    private function walkBingo()
    {
        echo '🐕 walk Bingo' . PHP_EOL;
        sleep(3);
    }

    private function sport()
    {
        echo '👟 run' . PHP_EOL;
        sleep(4);
    }

    private function netflixNChill()
    {
        echo '🍿 TV' . PHP_EOL;
        sleep(4);
    }

    private function friends()
    {
        echo '🍻 friends' . PHP_EOL;
        sleep(4);
    }

    private function read()
    {
        echo '📚 books' . PHP_EOL;
        sleep(1);
    }

    private function sleep()
    {
        echo '💤 sleep' . PHP_EOL;
    }

    private function faffAbout()
    {
        sleep(5);
    }
}
