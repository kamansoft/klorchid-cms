<?php

declare(strict_types=1);

namespace Kamansoft\KlorchidCms\Screens;

use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class KlorchidCmsMainScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = __('Main Screen');

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = __('Cms Main Screen');

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            /*Link::make('Website')
                ->href('http://orchid.software')
                ->icon('globe-alt'),

            Link::make('Documentation')
                ->href('https://orchid.software/en/docs')
                ->icon('docs'),*/

            Link::make('GitHub')
                ->href('https://github.com/orchidsoftware/platform')
                ->icon('social-github'),
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]
     */
    public function layout(): array
    {
        return [
            Layout::view('platform::partials.welcome'),
        ];
    }
}
