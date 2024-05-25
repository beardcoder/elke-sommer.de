<?php

namespace App\Twill\Capsules\Appointments\Repositories;

use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Twill\Capsules\Appointments\Models\Appointment;

class AppointmentRepository extends ModuleRepository
{
    use HandleRevisions;

    public function __construct(Appointment $model)
    {
        $this->model = $model;
    }

    public function afterSave(\A17\Twill\Models\Contracts\TwillModelContract $model, array $fields): void
    {
        $this->updateRepeater(
            $model,
            $fields,
            'appointment_registrations',
            AppointmentRegistrationRepository::class,
            'appointment_registrations'
        );
        parent::afterSave($model, $fields);
    }

    public function getFormFields(\A17\Twill\Models\Contracts\TwillModelContract $object): array
    {
        $fields = parent::getFormFields($object);

        return $this->getFormFieldsForRepeater(
            $object,
            $fields,
            'appointment_registrations',
            AppointmentRegistrationRepository::class,
            'appointment_registrations'
        );
    }
}
