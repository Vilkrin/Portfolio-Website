<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

#[Signature('app:generate-sitemap')]
#[Description('Generate the sitemap.xml file.')]
class GenerateSitemap extends Command
{
    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        Sitemap::create()
            ->add(
                Url::create(route('home'))
                    ->setPriority(1.0)
            )
            ->add(
                Url::create(route('projects'))
                    ->setPriority(0.8)
            )
            ->add(
                Url::create(route('contact'))
                    ->setPriority(0.5)
            )
            ->add(
                Url::create(route('education'))
                    ->setPriority(0.8)
            )
            ->add(
                Url::create(route('experience'))
                    ->setPriority(0.9)
            )
            ->add(
                Url::create(route('skills'))
                    ->setPriority(0.7)
            )
            ->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully.');

        return self::SUCCESS;
    }
}
