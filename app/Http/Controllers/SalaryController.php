<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;

class SalaryController extends Controller
{
    public function calculateSalary(StoreUserRequest $request)
    {
        $baseSalary = $request->base_salary;
        $daysWorked = $request->days_worked;
        $salesValue = $request->sales_value;

        $percentage = 0;
        if ($salesValue > 5000) {
            $percentage = 10;
        } elseif ($salesValue > 1000) {
            $percentage = 5;
        } elseif ($salesValue > 0) {
            $percentage = 1;
        }

        $commissions = $baseSalary * ($percentage / 100);
        $proratedFactor = $daysWorked / 30;
        $calculatedSalary = $baseSalary * $proratedFactor;
        $commissionsEarned = $commissions * $proratedFactor;

        return response()->json([
            'base_salary' => $baseSalary,
            'days_worked' => $daysWorked,
            'sales_value' => $salesValue,
            'salary_calculated' => $calculatedSalary,
            'commissions_earned' => $commissionsEarned,
            'prorate_percentage' => $proratedFactor * 100
        ]);
    }
}
