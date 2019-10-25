<?php

namespace App\Command;

use App\Library\Round\RoundUtil;
use App\Library\Round\ValueObject\Round\Round;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class RoundAreaCommand extends Command
{
    protected static $defaultName = 'app:round:area';

    protected function configure()
    {
        $this
            ->setDescription('Calculate the area of a round shape.')
            ->addArgument('diameter', InputArgument::REQUIRED, 'The diameter of the round shape.')

        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $diameter = $input->getArgument('diameter');

        $item = new Round($diameter);

        $io->success('The round area of the item is: ' . RoundUtil::area($item));
    }
}
