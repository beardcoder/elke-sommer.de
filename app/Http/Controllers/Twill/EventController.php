<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\Fields\DatePicker;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Fields\Select;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Forms\Option;
use A17\Twill\Services\Forms\Options;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\TableColumns;
use App\Enums\EventAttendedMode;
use App\Enums\EventStatus;

class EventController extends BaseModuleController
{
    protected $moduleName = 'events';

    /**
     * This method can be used to enable/disable defaults. See setUpController in the docs for available options.
     */
    protected function setUpController(): void
    {
    }

    public function getForm(TwillModelContract $model): Form
    {
        $form = parent::getForm($model);

        $form->add(
            Input::make()->type('textarea')->name('description')->label('Beschreibung')->required()
        );

        $form->add(Input::make()->name('address_street')->label('Straße')->required());
        $form->add(Input::make()->name('address_city')->label('Stadt')->required());
        $form->add(Input::make()->name('address_postal_code')->label('PLZ')->required());
        $form->add(DatePicker::make()->name('start_date')->label('Start Date & Time')->required());
        $form->add(DatePicker::make()->name('end_date')->label('End Date & Time')->required());
        $form->add(
            Select::make()
                ->name('event_status')
                ->label('Event Status')
                ->default(EventStatus::Scheduled->value)
                ->options(
                    Options::make([
                        collect(EventStatus::cases())->map(fn ($status) => Option::make($status->value, $status->name))->toArray(),
                    ])
                )
        );

        $form->add(
            Select::make()
                ->name('attended_mode')
                ->label('Anwesenheitsmodus')
                ->default(EventAttendedMode::Offline->value)
                ->options(
                    Options::make([
                        collect(EventAttendedMode::cases())->map(fn ($status) => Option::make($status->value, $status->name))->toArray(),
                    ])
                )
        );

        return $form;
    }

    /**
     * This is an example and can be removed if no modifications are needed to the table.
     */
    protected function additionalIndexTableColumns(): TableColumns
    {
        $table = parent::additionalIndexTableColumns();

        $table->add(
            Text::make()->field('description')->title('Description')
        );

        return $table;
    }
}
