<?php

namespace App\Twill\Capsules\Appointments\Http\Controllers;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\Columns;
use A17\Twill\Services\Forms\Fields\DatePicker;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Fieldset;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Forms\InlineRepeater;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\Filters\QuickFilter;
use A17\Twill\Services\Listings\Filters\QuickFilters;
use A17\Twill\Services\Listings\TableColumns;
use App\Twill\Capsules\Appointments\Models\Appointment;
use Illuminate\Database\Eloquent\Builder;

class AppointmentController extends BaseModuleController
{
    protected $moduleName = 'appointments';

    #[\Override]
    protected function setUpController(): void
    {
        $this->disablePermalink();
    }

    #[\Override]
    public function getForm(TwillModelContract $twillModelContract): Form
    {
        $form = parent::getForm($twillModelContract);
        $form->addFieldset(
            Fieldset::make()
              ->title('Datum')
              ->fields([
                  Columns::make()
                    ->left([
                        DatePicker::make()
                          ->name('date_start')
                          ->label('Start Datum')
                          ->time24h()
                          ->required(),
                    ])
                    ->right([
                        DatePicker::make()
                          ->name('date_end')
                          ->label('End Datum')
                          ->time24h()
                          ->required(),
                    ]),
              ])
        );
        $form->addFieldset(
            Fieldset::make()
              ->title('Anmeldungen')
              ->fields([
                  InlineRepeater::make()
                    ->name('appointment_registrations')
                    ->triggerText('Anmeldung hinzufügen')
                    ->label('Anmeldung')
                    ->fields([Input::make()->name('name'), Input::make()->name('email')]),
              ])
        );

        return $form;
    }

    #[\Override]
    public function getCreateForm(): Form
    {
        $createForm = parent::getCreateForm();

        $createForm->add(
            Input::make()
              ->name('title')
              ->label('Titel')
        );

        $createForm->add(
            DatePicker::make()
              ->name('date_start')
              ->label('Start Datum')
              ->time24h()
              ->required()
        );

        $createForm->add(
            DatePicker::make()
              ->name('date_end')
              ->label('End Datum')
              ->time24h()
              ->required()
        );

        return $createForm;
    }

    #[\Override]
    protected function additionalIndexTableColumns(): TableColumns
    {
        $table = parent::additionalIndexTableColumns();

        $table->push(
            Text::make()
              ->field('date_start')
              ->title('Start Datum')
              ->customRender(fn (Appointment $appointment) => view('backend.table.date', [
                  'date' => $appointment->date_start,
              ])->render())
              ->sortable(true)
        );
        $table->push(
            Text::make()
              ->field('date_end')
              ->title('End Datum')
              ->customRender(fn (Appointment $appointment) => view('backend.table.date', [
                  'date' => $appointment->date_end,
              ])->render())
              ->sortable(true)
        );

        return $table;
    }

    #[\Override]
    public function quickFilters(): QuickFilters
    {
        $filters = QuickFilters::make();

        $filters->add(
            QuickFilter::make()
              ->queryString('next')
              ->label('Bevorstehende')
              ->amount(fn () => $this->repository->whereDate('date_start', '>=', date('Y-m-d G:i:s'))->count())
              ->apply(fn (Builder $builder) => $builder->whereDate('date_start', '>=', date('Y-m-d G:i:s')))
        );

        $filters->add(
            QuickFilter::make()
              ->queryString('all')
              ->label('Alle')
        );

        return $filters;
    }
}
