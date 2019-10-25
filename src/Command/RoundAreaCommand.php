<?php

namespace App\Command;

use App\Adapter\RoundAdapter;
use App\Library\Quadrilateral\Factory\QuadrilateralFactory;
use App\Library\Quadrilateral\ValueObject\QuadrilateralInterface;
use App\Library\Quadrilateral\ValueObject\Rectangle\Rectangle;
use App\Library\Quadrilateral\ValueObject\Square\Square;
use App\Library\Round\RoundUtil;
use App\Library\Round\ValueObject\Round\Round;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Style\SymfonyStyle;

class RoundAreaCommand extends Command
{
    protected static $defaultName = 'app:round:area';

    protected function configure()
    {
        $this
            ->setDescription('Calculate the area of a round shape.')

        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);

        $item = $this->askForAnItem($input, $output);
        if ($item instanceof QuadrilateralInterface) {
            $item = new RoundAdapter($item);
        }

        $io->success('The round area of the item is: ' . RoundUtil::area($item));
    }

    private function askForAnItem(InputInterface $input, OutputInterface $output)
    {
        $questionHelper = $this->getHelper('question');
        $question = new ChoiceQuestion(
            'Please select the shape to enter',
            [Round::NAME, Square::NAME, Rectangle::NAME],
            0
        );
        $question->setErrorMessage('Shape %s is invalid.');

        $shape = $questionHelper->ask($input, $output, $question);
        $output->writeln('You have just selected: '.$shape);

        switch ($shape) {
            case Round::NAME:
                $question = new Question('Please enter a diameter: ');
                $diameter = $questionHelper->ask($input, $output, $question);
                return new Round($diameter);

            case Rectangle::NAME:
                $question = new Question('Please enter a width: ');
                $width = $questionHelper->ask($input, $output, $question);
            // no-break

            case Square::NAME:
                $question = new Question('Please enter a length: ');
                $length = $questionHelper->ask($input, $output, $question);
                return QuadrilateralFactory::create($length, $width ?? null);
        }

        return null;
    }
}
