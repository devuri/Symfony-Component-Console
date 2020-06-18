<?php

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;



/**
 * demo command line application
 *
 * run : php hello demo
 * form within the directory
 * @link https://symfony.com/doc/current/components/console.html
 */
class HelloCommand extends Command  {
	protected function configure(){
	$this->setName('hello')
			->setDescription('Demo Hello World Command for the Symfony\'s console component');
	}
	/**
	 * info used to give color output
	 * @param  InputInterface
	 * @param  OutputInterface
	 * @return
	 */
	protected function execute(InputInterface $input, OutputInterface $output){
		/**
		 * @var SymfonyStyle
		 * @link https://symfony.com/doc/current/console/style.html
		 */
		$io = new SymfonyStyle($input, $output);
		$output->writeln('<info> Hello World. </info>');
		$output->writeln('<info> Awesome It Works !!! </>');
		$io->warning('Lorem ipsum dolor sit amet');
		return Command::SUCCESS;
	}
}
