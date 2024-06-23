<?php

namespace App\Twill\Capsules\Appointments\Repositories;

use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Twill\Capsules\Appointments\Models\Appointment;

class AppointmentRepository extends ModuleRepository
{
    use HandleRevisions;

    public function __construct(Appointment $appointment)
    {
        $this->model = $appointment;
    }

    #[\Override]
    public function afterSave(\A17\Twill\Models\Contracts\TwillModelContract $twillModelContract, array $fields): void
    {
        $this->updateRepeater(
            $twillModelContract,
            $fields,
            'appointment_registrations',
            AppointmentRegistrationRepository::class,
            'appointment_registrations'
        );
        parent::afterSave($twillModelContract, $fields);
    }

    #[\Override]
    public function getFormFields(\A17\Twill\Models\Contracts\TwillModelContract $twillModelContract): array
    {
        $fields = parent::getFormFields($twillModelContract);

        return $this->getFormFieldsForRepeater(
            $twillModelContract,
            $fields,
            'appointment_registrations',
            AppointmentRegistrationRepository::class,
            'appointment_registrations'
        );
    }
}
