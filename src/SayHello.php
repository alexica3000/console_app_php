<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class SayHello extends Command
{
    protected static $defaultName = 'app:create-user';

    protected function configure()
    {
        $this
            ->setName('say_hello')
            ->setDescription('say hello')
            ->addArgument('name', InputArgument::REQUIRED, 'String to show.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $result = "Hello, " . $input->getArgument('name');
        $output->writeln($result);

        return Command::SUCCESS;
    }
}
