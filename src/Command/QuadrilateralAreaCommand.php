<?php

namespace App\Command;

use App\Library\Quadrilateral\Factory\RectangleFactory;
use App\Library\Quadrilateral\RectangleUtil;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class QuadrilateralAreaCommand extends Command
{
    protected static $defaultName = 'app:quadrilateral:area';

    protected function configure()
    {
        $this
            ->setDescription('Calculate the area of a quadrilateral shape.')
            ->addArgument('length', InputArgument::REQUIRED, 'The length of the quadrilateral shape.')
            ->addArgument('width', InputArgument::OPTIONAL, 'The width of the quadrilateral shape.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);

        $length = $input->getArgument('length');
        $io->note(sprintf('You passed a length of: %s', $length));

        if ($width = $input->getArgument('width')) {
            $io->note(sprintf('You passed a width of: %s', $width));
        }

        $quadrilateral = RectangleFactory::create($length, $width ?? null);
        $io->success('Your item is a: '.(string)$quadrilateral);
        $io->success('The area is: '.RectangleUtil::area($quadrilateral));
    }
}
