<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\Question;

class AskUser extends Command
{
    protected function configure()
    {
        $this
            ->setName('guest')
            ->setDescription('ask user details')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper('question');
        $question_name = new Question('Please enter your name: ');
        $question_age = new Question('Please enter your age: ');
        $question_gender = new ChoiceQuestion('Please select your gender', ['m', 'f'], 0);
        $question_gender->setErrorMessage('Gender %s is invalid.');

        $name = $helper->ask($input, $output, $question_name);
        $age = $helper->ask($input, $output, $question_age);
        $gender = $helper->ask($input, $output, $question_gender);

        $output->writeln("Hello " . $name . ", your age is " . $age . ", your gender - " . $gender);

        return Command::SUCCESS;
    }
}
