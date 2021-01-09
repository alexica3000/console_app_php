<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class ShowString extends Command
{
    protected function configure()
    {
        $this
            ->setName('show_string')
            ->setDescription('show string n times')
            ->addArgument('string', InputArgument::REQUIRED, 'String to show.')
            ->addOption('times', null, InputOption::VALUE_REQUIRED, 'How many times should the message be printed?', 2)
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        for ($i = 0; $i < $input->getOption('times'); $i++) {
            $output->writeln($input->getArgument('string'));
        }

        return Command::SUCCESS;
    }
}
