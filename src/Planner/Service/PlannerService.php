<?php declare(strict_types=1);

namespace App\Planner\Service;

use App\Planner\Repository\PlannerRepositoryInterface;

class PlannerService
{
    private PlannerRepositoryInterface $plannerRepository;

    public function __construct(PlannerRepositoryInterface $plannerRepository)
    {
        $this->plannerRepository = $plannerRepository;
    }

    public function execute(): void
    {
        $this->plannerRepository->store();
    }
}
